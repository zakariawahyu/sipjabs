<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIPJABS | Cetak</title>
    <style>
        .halaman
        {
            height: auto;
            margin: 10px auto;
        }
        #h2
        {
            color: black;
        }
        #isi
        {
            width: auto;
            height: auto;
            padding: 80px;
            background-color: #CCFFFF;
            font-family: arial;
            color: black;
        }
        #row
        {
            color: black;
        }
        #td
        {
            width: 200;
        }
    </style>
</head>
<body class="halaman">
    <div class="isi">
        <h2 id="h2" align="center">SURAT 
        {{ $nomor->nomor_surat }}
        </h2>
        <hr align="center" size="8" color="#000000">
        <p align="right">Bandung, {{ $nomor->created_at->format('d F Y') }}</p>
        <br>
        <p>Kepada Yth, <br>
        Wakil Rektor II Bidang Sumber Daya <br>
        di <br>
        Tempat <br><br><br>
        Perihal : Persetujuan Manajement Tallent <br><br>
        Dengan hormat, <br>
        Menunjuk Surat Nomor {{ $nomor->nomor_surat }} tanggal {{ $nomor->created_at->format('d F Y') }} Perihal Persetujuan Manajement Tallent,<br>
         bersama dengan ini kami sampaikan nama-nama dibawah ini :</p>
    </div>
    <table id="row" border="1">
        <tr>
            <td>Nama</td>
            <td>NIP</td>
            <td>Status Pegawai</td>
            <td>Jabatan Lama</td>
            <td>Jabatan Baru</td>
        </tr>
            @foreach ($tallents as $tallent) 
            <tr>
                <td>{{ $tallent->pegawai->nama_lengkap }}</td>
                <td>{{ $tallent->pegawai->nip }}</td>
                <td>{{ $tallent->pegawai->status_pegawai }}</td>
                <td>{{ $tallent->pegawai->jabatanstruktural->jabatan->nama_jabatan }} {{ $tallent->pegawai->jabatanstruktural->unitbagian->nama_unitbagian }}</td>
                 <td>{{ $tallent->posisikosong->jabatanstruktural->jabatan->nama_jabatan }} {{ $tallent->posisikosong->jabatanstruktural->unitbagian->nama_unitbagian }}</td>
            </tr>
             @endforeach
    </table>
    <p>dapat diterima sebagai pegawai baru di Bagian Perencanaan dan Pengembangan SDM pada Direktorat Sumber Daya
    Manusia dengan ketentuan yang berlaku.</p>
    <p>Demikian kami sampaikan, atas kerjasamanya kami ucapkan terima kasih</p>
    <br>
    <br>
    <p>Hormat kami,</p>
    <br><br><br>
    <p>Zakaria Wahyu Nur Utomo</p>
</body>
</html>