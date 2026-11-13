<?php
// Bank soal + kunci jawaban. Disimpan sebagai PHP agar isinya tidak bisa dibaca lewat browser.
return json_decode(<<<'JSON'
{
 "sets": {
  "10": [
   1,
   3,
   6,
   8,
   12,
   13,
   16,
   18,
   22,
   30
  ],
  "15": [
   1,
   2,
   3,
   6,
   8,
   10,
   12,
   13,
   14,
   16,
   18,
   19,
   22,
   27,
   30
  ],
  "30": [
   1,
   2,
   3,
   4,
   5,
   6,
   7,
   8,
   9,
   10,
   11,
   12,
   13,
   14,
   15,
   16,
   17,
   18,
   19,
   20,
   21,
   22,
   23,
   24,
   25,
   26,
   27,
   28,
   29,
   30
  ]
 },
 "q": {
  "1": {
   "t": "Apa fungsi utama Access Point TP-Link?",
   "o": [
    "Menyediakan koneksi internet dari provider",
    "Memancarkan Wi-Fi dari jaringan kabel yang sudah ada",
    "Menyimpan data pengguna jaringan",
    "Menggantikan fungsi modem sepenuhnya"
   ],
   "a": 1
  },
  "2": {
   "t": "Dari mana koneksi internet berasal ketika Access Point dipakai?",
   "o": [
    "Access Point itu sendiri",
    "Adaptor daya",
    "Router atau modem/ONT utama",
    "PoE injector"
   ],
   "a": 2
  },
  "3": {
   "t": "Berikut ini yang BUKAN isi kemasan Access Point pada panduan ini adalah ...",
   "o": [
    "Antena (2 buah)",
    "Adaptor daya",
    "PoE injector",
    "Kabel fiber optik"
   ],
   "a": 3
  },
  "4": {
   "t": "Lampu LED yang berkedip saat perangkat menunggu koneksi lewat WPS adalah ...",
   "o": [
    "Power",
    "Ethernet",
    "Wireless",
    "WPS (ikon gembok)"
   ],
   "a": 3
  },
  "5": {
   "t": "Lampu Ethernet mati padahal kabel sudah terpasang. Hal yang pertama diperiksa adalah ...",
   "o": [
    "Kabel dan port pada router/modem utama",
    "Nama Wi-Fi (SSID)",
    "Versi firmware",
    "Address Lease Time"
   ],
   "a": 0
  },
  "6": {
   "t": "Lubang reset di panel belakang ditekan dengan peniti untuk ...",
   "o": [
    "Mematikan Wi-Fi sementara",
    "Mengganti password Wi-Fi",
    "Mengembalikan perangkat ke pengaturan pabrik",
    "Memperbarui firmware"
   ],
   "a": 2
  },
  "7": {
   "t": "Nama Wi-Fi dan password bawaan Access Point dapat dilihat pada ...",
   "o": [
    "Halaman Status",
    "Stiker di bagian bawah perangkat",
    "Adaptor daya",
    "Port Ethernet"
   ],
   "a": 1
  },
  "8": {
   "t": "Alamat IP yang disarankan untuk membuka halaman admin adalah ...",
   "o": [
    "192.168.1.1",
    "10.0.0.1",
    "192.168.0.254",
    "172.16.0.1"
   ],
   "a": 2
  },
  "9": {
   "t": "Alamat domain yang dapat diketik di browser untuk membuka halaman admin adalah ...",
   "o": [
    "admin.tplink.id",
    "tplinkap.net",
    "tp-link.local",
    "tplinkwifi.id"
   ],
   "a": 1
  },
  "10": {
   "t": "Menu untuk mengganti username dan password login admin adalah ...",
   "o": [
    "Wireless > Wireless Settings",
    "DHCP > DHCP Settings",
    "Network > LAN",
    "System Tools > Password"
   ],
   "a": 3
  },
  "11": {
   "t": "Aturan username dan password admin pada panduan ini adalah ...",
   "o": [
    "1–15 karakter, tanpa spasi",
    "Minimal 20 karakter",
    "Harus berupa angka saja",
    "Boleh mengandung spasi"
   ],
   "a": 0
  },
  "12": {
   "t": "Mode operasi yang dipilih untuk pemakaian umum (rumah atau kantor) adalah ...",
   "o": [
    "Client",
    "Access Point",
    "Multi-SSID",
    "Repeater/Bridge"
   ],
   "a": 1
  },
  "13": {
   "t": "Untuk memperluas jangkauan Wi-Fi yang sudah ada tanpa kabel tambahan, dipilih mode ...",
   "o": [
    "Access Point",
    "Client",
    "Repeater/Bridge",
    "Multi-SSID"
   ],
   "a": 2
  },
  "14": {
   "t": "Smart TV hanya memiliki port Ethernet dan ingin terhubung ke Wi-Fi. Mode yang tepat adalah ...",
   "o": [
    "Client",
    "Access Point",
    "Multi-SSID",
    "Repeater/Bridge"
   ],
   "a": 0
  },
  "15": {
   "t": "Jumlah maksimal jaringan Wi-Fi (SSID) pada mode Multi-SSID adalah ...",
   "o": [
    "2",
    "3",
    "4",
    "8"
   ],
   "a": 2
  },
  "16": {
   "t": "DHCP Server pada perangkat ini hanya berjalan jika LAN Type diatur ...",
   "o": [
    "Smart IP(DHCP)",
    "Static IP",
    "Auto",
    "Bridge"
   ],
   "a": 1
  },
  "17": {
   "t": "Nilai bawaan Address Lease Time pada DHCP Server adalah ...",
   "o": [
    "120 menit",
    "30 menit",
    "24 jam",
    "5 menit"
   ],
   "a": 0
  },
  "18": {
   "t": "Pengaturan keamanan Wi-Fi yang dianjurkan (selain WPA3) adalah ...",
   "o": [
    "WEP",
    "Tanpa keamanan (Disable Wireless Security)",
    "WPA2-PSK dengan enkripsi AES",
    "WPA dengan enkripsi TKIP"
   ],
   "a": 2
  },
  "19": {
   "t": "File backup konfigurasi Access Point biasanya berekstensi ...",
   "o": [
    ".docx",
    ".bin",
    ".jpg",
    ".exe"
   ],
   "a": 1
  },
  "20": {
   "t": "Tombol Reset (peniti) perlu ditahan selama sekitar ...",
   "o": [
    "1–2 detik",
    "3–5 detik",
    "8–10 detik",
    "30 detik"
   ],
   "a": 2
  },
  "21": {
   "t": "Alamat IP yang termasuk alamat IP privat adalah ...",
   "o": [
    "8.8.8.8",
    "192.168.0.254",
    "203.0.113.5",
    "1.1.1.1"
   ],
   "a": 1
  },
  "22": {
   "t": "Fungsi DNS adalah ...",
   "o": [
    "Membagikan alamat IP otomatis",
    "Menerjemahkan nama situs menjadi alamat IP",
    "Memancarkan sinyal Wi-Fi",
    "Menyimpan firmware perangkat"
   ],
   "a": 1
  },
  "23": {
   "t": "Perangkat yang menerima sambungan dari provider internet adalah ...",
   "o": [
    "Access Point",
    "Switch",
    "Modem/ONT",
    "PoE injector"
   ],
   "a": 2
  },
  "24": {
   "t": "Subnet mask berfungsi untuk menentukan ...",
   "o": [
    "Perangkat mana yang berada dalam satu jaringan lokal",
    "Kecepatan paket internet",
    "Nama Wi-Fi",
    "Jenis enkripsi Wi-Fi"
   ],
   "a": 0
  },
  "25": {
   "t": "Aktivitas berikut yang membutuhkan kecepatan paling besar adalah ...",
   "o": [
    "Chat teks",
    "Membaca email",
    "Menonton video 4K",
    "Browsing ringan"
   ],
   "a": 2
  },
  "26": {
   "t": "Kabel LAN yang cukup untuk kecepatan 1 Gbps hingga 100 meter adalah kategori ...",
   "o": [
    "Cat3",
    "Cat5e",
    "Kabel telepon",
    "Kabel HDMI"
   ],
   "a": 1
  },
  "27": {
   "t": "Di Windows, alamat yang diawali 169.254 biasanya menandakan ...",
   "o": [
    "Internet sangat cepat",
    "Perangkat gagal mendapat IP dari DHCP Server",
    "Wi-Fi 5 GHz aktif",
    "Password Wi-Fi benar"
   ],
   "a": 1
  },
  "28": {
   "t": "Perintah di Windows untuk melihat alamat IP dan Default Gateway adalah ...",
   "o": [
    "ping",
    "ipconfig",
    "format",
    "shutdown"
   ],
   "a": 1
  },
  "29": {
   "t": "Standar keamanan Wi-Fi paling baru dan paling aman dari pilihan berikut adalah ...",
   "o": [
    "WEP",
    "WPA",
    "WPA2",
    "WPA3"
   ],
   "a": 3
  },
  "30": {
   "t": "Kafe yang ingin memisahkan jaringan staf dan tamu paling cocok memakai mode ...",
   "o": [
    "Client",
    "Repeater/Bridge",
    "Access Point",
    "Multi-SSID"
   ],
   "a": 3
  }
 }
}
JSON
, true);
