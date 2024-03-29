<h1>Beta Translate</h1>
<p>Kenapa namanya "Beta"? Karena project ini awalnya hanya untuk <i>Have Fun</i> alias Uji Coba aja... 😂</p>

https://github.com/irfan7o/beta-translate/assets/73951075/bfd9de68-b6c5-4dbe-8c00-7915f5ddcb33

<h2>Installation</h2>

<h3>Step 1</h3>

1.1 Download project [Beta Translate](https://github.com/irfan7o/beta-translate) dan [Beta Admin](https://github.com/irfan7o/beta-admin)

> [!NOTE]
> Pastikan <i>database</i> sudah terintall, gunakan [phpmyadmin](http://localhost/phpmyadmin/) untuk install database.

1.2 Download [XAMPP](https://www.apachefriends.org/download.html) untuk akses phpmyadmin

![Screenshot 2024-01-27 150131](https://github.com/irfan7o/beta-translate/assets/73951075/3b6a345c-5b89-46ed-9304-4bd4e2248d10)

1.3 Akses [localhost/phpmyadmin](http://localhost/phpmyadmin) di browser, kemudian <i>create database</i> dengan nama <b>userform</b>.

1.4 Buat 2 tabel dengan nama ```translate``` dan ```usertable``` (Optional):

Kolom Tabel ```translate```:

    id [INT 100] Auto Increment 
    indonesia [VARCHAR 250]
    sumbawa [VARCHAR 250]
    keterangan [VARCHAR 250]

Kolom Tabel ```usertable```:

    id [INT 100] Auto Increment 
    name [VARCHAR 100]
    email [VARCHAR 200]
    password [VARCHAR 250]
    code [INT 100]
    status [VARCHAR 100]

1.5 Kamu tidak perlu buat tabel baru. Kamu hanya perlu buat nama <i>database</i> userform kemudian import database yang sudah di download pada project [Beta Admin](https://github.com/irfan7o/beta-admin).


<b>Caranya:</b> Click tabel useform yang sudah dibuat kemudian import database ```userform.sql```

![Screenshot 2024-01-27 152839](https://github.com/irfan7o/beta-translate/assets/73951075/cdbccdfd-43c7-4596-819f-5f3fea501353)

1.6 Done! Proses installasi Beta Translate selesai. Kamu hanya perlu masukan data kata-kata ke database melalui phpmyadmin.

<h3>Step 2</h3>

2.1 Sekarang tahap menggunakan Beta Admin

> [!NOTE]
> Beta Admin adalah dashboard sederhana yang bisa digunakan untuk upload kata-kata ke <i>database</i> tanpa melalui <i>database</i> langsung.

https://github.com/irfan7o/beta-translate/assets/73951075/d52a7a4e-1e7d-4d64-8f04-1d4a0d337600

2.2 Agar tidak terjadi error saat lupa password

Error: ```Failed to connect to mailserver at "localhost" port 25, verify your "SMTP" and "smtp_port" setting in php.ini```

Setting file ```php.ini``` dan ```sendmail.ini``` pada folder <b>C:\xampp\php</b> & <b>C:\xampp\sendmail</b>

![Screenshot 2024-01-27 095820](https://github.com/irfan7o/beta-translate/assets/73951075/55dd02f9-c32c-4d59-917f-79592c5076ea)

![Screenshot 2024-01-27 095838](https://github.com/irfan7o/beta-translate/assets/73951075/b13eff6d-5147-4343-91d7-24f24c00c3c8)

2.3 Tahap setting SMTP selesai, maka tampilan akan seperti dibawah ini 👇

![Screenshot 2024-01-27 212243](https://github.com/irfan7o/beta-translate/assets/73951075/91f8c319-64e8-45d5-ae34-670fefcab8f3)

2.4 Berikutnya silahkan login menggunakan akun yang sudah terdaftar

    Email: admin@gmail.com
    Password: makan

2.5 Done!
