<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disnakerkopukm_kotajambi</title>
    <style>
        @media print {
            @page {
                size: A4;
                margin: 20mm;
            }

            body {
                font-family: Arial, sans-serif;
            }

            .kop-surat {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
            }

            .kop-surat img {
                width: 80px;
                margin-right: 20px;
            }

            .kop-surat div {
                text-align: center;
            }

            .content {
                margin-top: 20px;
            }

            .content table {
                width: 100%;
                border-collapse: collapse;
            }

            .content th, .content td {
                border: 1px solid #000;
                padding: 8px;
                text-align: left;
            }

        }
    </style>
</head>
<body>

    <div class="kop-surat">
    <img src="<?=base_url()?>/template/assets/img/kota_jambi.png" alt="Logo Kota Jambi" width="20">
        <div>
            <h1>PEMERINTAH KOTA JAMBI</h1>
            <h2>DINAS TENAGA KERJA, KOPERASI DAN USAHA KECIL MENENGAH</h2>
            <p>Jln. KH Agus Salim Komplek Kota Baru Jambi <i class="fas fa-phone-square-alt"></i>Fax. (0741) 446344</p>
            <p>Website: www.disnakerkopjambikota.com</p>
        </div>
    </div>
    <hr class="my-4">
    <div class="content">
        <center><h3>SURAT REKOMENDASI</h3></center>
        <center><h5>Nomor: KU.04.02/107/DTKK-UKM/2024</h5></center>
        <br>
        <p>Yang bertandatangan dibawah ini:</p>
            <p>a.&emsp;Nama&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;KOMARI, SH.,MH.</p>
            <p>b.&emsp;NIP.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;19640624 198503 1 004</p>
            <p>c.&emsp;Pangkat/Gol&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;Pembina Utama Madya (IV/c)</p>
            <p>d.&emsp;Jabatan&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;Kepala Dinas</p>
            
        <p>Dengan ini menerangkan bahwa:</p>
            <p>a.&emsp;Nama&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;<?= $umkm['nama'] ?></p>
            <p>b.&emsp;NIK&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;<?= $umkm['nik'] ?></p>
            <p>c.&emsp;Alamat&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;<?= $umkm['alamat'] ?></p>
            <p>d.&emsp;Alamat Usaha&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;<?= $umkm['alamat_usaha'] ?></p>
            <p>e.&emsp;Jenis Barang/Jasa&emsp;&emsp;&emsp;:&emsp;<?= $umkm['bidang_usaha'] ?></p>
            <p>f.&emsp;Merek&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;<?= $umkm['nama_usaha'] ?></p>
            <p>g.&emsp;Nomor Kontak&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;<?= $umkm['no_hp'] ?></p>
        <p>Merupakan pelaku Usaha Mikro Kecil dan Menengah, Kode KBLI Usaha (56102) Aktivitas
            Rumah/Warung makan adalah binaan Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi dan benar adanya baik
            secara kelembagaan maupun bagian usahanya berada di wilayah Kota Jambi.</p>  
        <p>Berpedoman kepada Undang Undang No. 11 tahun 2020 tentang Cipta Kerja bahwa pelaku usaha termasuk kategori Usaha Skala Mikro.</p>  
        <p>Demikian surat keterangan ini dibuat untuk digunakan sebagai salah satu persyaratan administrative untuk pendaftaran merek Jasa.</p>
    </div>
<br>&nbsp;<br>
        <div style="position: relative; top: 50px; left: 600px;">
            <p>Ditetapkan di&emsp;:&emsp;Jambi</p>
            <p>Pada Tanggal&emsp;:&emsp;<?= $umkm['created_at'] ?></p>
            <br><br><br><br>
            <p>Kepala Dinas</p>
        </div>
    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>
