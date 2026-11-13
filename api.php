<?php
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');
$bank = require __DIR__ . '/data/questions.php';
$file = __DIR__ . '/data/results.php';
function out($d, $c = 200) { http_response_code($c); echo json_encode($d, JSON_UNESCAPED_UNICODE); exit; }
function results($file) {
  if (!is_file($file)) return [];
  $rows = [];
  foreach (array_slice(file($file, FILE_IGNORE_NEW_LINES), 1) as $l) { $r = json_decode($l, true); if ($r) $rows[] = $r; }
  return $rows;
}
$action = $_GET['action'] ?? '';
if ($action === 'questions') {
  $n = (int)($_GET['n'] ?? 0);
  if (!isset($bank['sets'][$n])) out(['error' => 'Jumlah soal tidak valid'], 400);
  $list = [];
  foreach ($bank['sets'][$n] as $id) $list[] = ['id' => $id, 't' => $bank['q'][$id]['t'], 'o' => $bank['q'][$id]['o']];
  out($list);
}
if ($action === 'grade' && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $in = json_decode(file_get_contents('php://input'), true) ?: [];
  $n = (int)($in['n'] ?? 0);
  $name = trim(mb_substr(strip_tags((string)($in['name'] ?? '')), 0, 40));
  if (!isset($bank['sets'][$n]) || $name === '') out(['error' => 'Nama dan jumlah soal wajib diisi'], 400);
  $ans = is_array($in['answers'] ?? null) ? $in['answers'] : [];
  $ok = 0; $wrong = [];
  foreach ($bank['sets'][$n] as $id) {
    $key = $bank['q'][$id]['a'];
    if (isset($ans[$id]) && (int)$ans[$id] === $key && $ans[$id] !== '') $ok++;
    else $wrong[] = ['id' => $id, 'a' => $key];
  }
  $pct = (int)round($ok / $n * 100);
  @mkdir(__DIR__ . '/data', 0755, true);
  if (!is_file($file)) file_put_contents($file, "<?php http_response_code(404); exit; ?>\n", LOCK_EX);
  file_put_contents($file, json_encode(['t' => date('c'), 'name' => $name, 'n' => $n, 'ok' => $ok, 'pct' => $pct], JSON_UNESCAPED_UNICODE) . "\n", FILE_APPEND | LOCK_EX);
  $top = array_values(array_filter(results($file), fn($r) => $r['n'] === $n));
  usort($top, fn($a, $b) => [$b['pct'], $a['t']] <=> [$a['pct'], $b['t']]);
  out(['ok' => $ok, 'total' => $n, 'pct' => $pct, 'wrong' => $wrong,
       'top' => array_map(fn($r) => ['name' => $r['name'], 'pct' => $r['pct']], array_slice($top, 0, 5))]);
}
out(['error' => 'Aksi tidak dikenal'], 404);
