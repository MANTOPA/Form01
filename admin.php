<?php
session_start();
$cfg = require __DIR__ . '/config.php';
if (isset($_POST['pw'])) { if (hash_equals($cfg['admin_password'], (string)$_POST['pw'])) $_SESSION['adm'] = 1; else $err = 'Password salah'; }
if (isset($_GET['out'])) { session_destroy(); header('Location: admin.php'); exit; }
$h = fn($s) => htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
$rows = [];
if (!empty($_SESSION['adm']) && is_file(__DIR__ . '/data/results.php'))
  foreach (array_slice(file(__DIR__ . '/data/results.php', FILE_IGNORE_NEW_LINES), 1) as $l) { $r = json_decode($l, true); if ($r) $rows[] = $r; }
$rows = array_reverse($rows);
if (!empty($_SESSION['adm']) && isset($_GET['csv'])) {
  header('Content-Type: text/csv; charset=utf-8'); header('Content-Disposition: attachment; filename=hasil-kuis.csv');
  $f = fopen('php://output', 'w'); fputcsv($f, ['Waktu', 'Nama', 'Jumlah soal', 'Benar', 'Nilai']);
  foreach ($rows as $r) fputcsv($f, [$r['t'], $r['name'], $r['n'], $r['ok'], $r['pct']]); exit;
}
?><!DOCTYPE html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Admin</title>
<style>body{font:16px Arial,sans-serif;max-width:760px;margin:24px auto;padding:0 16px}table{border-collapse:collapse;width:100%}td,th{border-bottom:1px solid #ccc;padding:8px;text-align:left}input,button{font:inherit;padding:10px}a{color:#0b6a94}</style></head><body>
<h1>Hasil Kuis</h1>
<?php if (empty($_SESSION['adm'])): ?>
<form method="post"><input type="password" name="pw" placeholder="Password admin" required> <button>Masuk</button><p style="color:#b3261e"><?= $h($err ?? '') ?></p></form>
<?php else: ?>
<p><?= count($rows) ?> hasil. <a href="?csv=1">Unduh CSV</a> | <a href="?out=1">Keluar</a></p>
<table><tr><th>Waktu</th><th>Nama</th><th>Soal</th><th>Benar</th><th>Nilai</th></tr>
<?php foreach ($rows as $r): ?><tr><td><?= $h(date('d/m/Y H:i', strtotime($r['t']))) ?></td><td><?= $h($r['name']) ?></td><td><?= (int)$r['n'] ?></td><td><?= (int)$r['ok'] ?></td><td><?= (int)$r['pct'] ?></td></tr><?php endforeach; ?>
</table><?php endif; ?></body></html>
