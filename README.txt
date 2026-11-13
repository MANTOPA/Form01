KUIS LATIHAN SOAL ACCESS POINT TP-LINK (HTML + PHP)

Cara pasang:
1. Unggah seluruh isi folder ini ke hosting (misalnya folder public_html/kuis). Butuh PHP 7.4 atau lebih baru. Tanpa database.
2. Buka config.php lalu GANTI admin_password.
3. Pastikan folder data/ bisa ditulis oleh PHP (permission 755, atau 775 jika hasil tidak tersimpan).
4. Buka alamat: https://domainkamu.com/kuis/

Isi:
- index.html  halaman kuis (nama, pilih 10/15/30 soal, nilai, peringkat 5 teratas)
- api.php     mengirim soal TANPA kunci dan menilai jawaban di server
- admin.php   lihat hasil semua peserta dan unduh CSV (login pakai password di config.php)
- data/questions.php  bank soal dan kunci jawaban (ubah soal di sini)
- data/results.php    hasil peserta (dibuat otomatis, diawali baris PHP agar tidak bisa diunduh)

Kunci jawaban tidak pernah dikirim ke browser sebelum jawaban dikirim.
