<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div>&nbsp;</div>
<div>&nbsp;</div>
<h3 style="text-align:center; ">
Daftar Peminjaman Buku Perpustakaan</h3>
<h3 style="text-align:center; ">POLITEKNIK NEGERI INDRAMAYU</h3>
<h4 style="margin-top: 10pt; text-align:center; margin-collapse:collapse;"></h4>

<b style="margin-left: 40pt;">Detail Peminjaman buku</b>
<table border align="center" border="1" style="width:80%" class="bpmTopicC">    <tr>
        <td width="40%">Nama Buku</td>
        <td width="2%">:</td>
        <td><?= $model->idBuku->nama; ?></td>
    </tr>
    <tr>
        <td>Nama Peminjam</td>
        <td>:</td>
        <td><?= $model->idUser->username; ?></td>
    </tr>
    <tr>
        <td>Waktu Dipinjam</td>
        <td>:</td>
        <td><?= $model->waktu_dipinjam; ?></td>
    </tr>
     <tr>
        <td>Waktu Pengembalian</td>
        <td>:</td>
        <td><?= $model->waktu_pengembalian; ?></td>
    </tr>
  
</table>
</body>
</html>