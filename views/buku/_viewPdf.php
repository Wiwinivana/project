Daftar Buku Perpustakaan POLITEKNIK NEGERI INDRAMAYU

<div>&nbsp;</div>
<div>&nbsp;</div>

<h2>Daftar Buku</h2>

<table width="100%" cellpadding="7">
	<tr>
		<td width="15%">Nama Buku</td>
		<td width="2%">:</td>
		<td><?= $model->nama; ?></td>
	</tr>
	<tr>
		<td>Jenis Buku</td>
		<td>:</td>
		<td><?= $model->jenis->nama; ?></td> <!-- dari relasi -->
	</tr>	
	<tr>
		<td>Penulis</td>
		<td>:</td>
		<td><?= $model->penulis->nama; ?></td>
	</tr>	
</table>