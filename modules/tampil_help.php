<?php
include './head.php';
include './koneksi.php';
?>
<div class="selficon">
    <h3><strong>Home</strong></h3>
    <hr>
</div>
<div style="padding: 50px; text-align: justify">
    <p>
        <strong>Tentang Aplikasi :</strong>
    </p>
    <p>Aplikasi data mining untuk memprediksi kelayakan kredit nasabah pada KSP Semarak Dana Cabang Magelang menggunakan algoritma C45.
        Modul yang terdapat pada aplikasi ini adalah : <br>
        1. Data Nasabah : Berfungsi untuk  memasukkan data kasus nasabah lama yang akan diproses menjadi pohon keputusan dan rule algoritma C45. <br>
        2. Pohon Keputusan : Berfungsi untuk proses mining dan membentuk pohon keputusan dan rule algoritma C45 dari data yang telah dimasukkan pada menu Data Nasabah sebelumnya.<br>
        3. Testing : Berfungsi untuk melakukan prediksi kelayakan kredit data nasabah terhadap anggota baru yang hendak melakukan peminjaman.<br>
        4. Status Nasabah : Berfungsi untuk melihat hasil seluruh data nasabah yang pernah dilakukan prediksi.<br>
    </p>
    <p>
        <strong>Cara Penggunaan Aplikasi :</strong>
        <br>
        <br>1.	Masukkan terlebih dahulu data kasus nasabah lama pada menu “Data Nasabah” yang akan membentuk pohon keputusan dan rule algoritma C45. Silahkan klik menu Data Nasabah akan muncul tabel data nasabah ,kemudian silahkan klik tombol Input Data Nasabah, maka akan muncul form input data nasabah. Data dapat diinputkan satu-satu dapat juga sekaligus dalam bentuk file .csv.  Tapi pastikan urutan data pada file sama dengan tabel data kasus nasabah lama
        <br>2.	Setelah itu , silahkan pilih menu “Pohon Keputusan” klik tombol “Refresh” maka pohon keputasan dan rule algoritma C45 akan langsung diproses dan menampilkan hasilnya
        <br>3.	Jika sudah melakukan langkah di atas maka program sudah siap melakukan prediksi data nasabah baru. Silahkan pilih menu “Testing” isikan data nasabah baru yang akan diprediksi lalu klik tombol prediksi maka hasil akan langsung keluar pada tabel dibawhnya. Jika ingin melakukan blacklist data sialhkan klik tombol blacklist, maka akan masuk kedalam menu “Status Nasabah.

        <br>
    </p>
    <p>
        <br><strong> </strong>
    </p>
</div>

<?php include './footer.php'; ?>