<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div>&nbsp;</div>
<div>&nbsp;</div>
<h3 style="text-align:center; ">
Daftar Buku Perpustakaan</h3>
<h3 style="text-align:center; ">POLITEKNIK NEGERI INDRAMAYU</h3>
<h4 style="margin-top: 10pt; text-align:center; margin-collapse:collapse;"></h4>

<b style="margin-left: 50pt;">Detail Buku</b>
<table border align="center" border="1" style="width:80%" class="bpmTopicC">
    <tr>
        <td width="40%">Nama Buku</td>
        <td width="2%">:</td>
        <td><?= $model->nama; ?></td>
    </tr>
    <tr>
        <td>Jenis Buku</td>
        <td>:</td>
        <td><?= $model->jenis->nama; ?></td>
    </tr>
    <tr>
        <td>Penulis</td>
        <td>:</td>
        <td><?= $model->penulis->nama; ?></td>
    </tr>
  
</table>
</body>
</html>