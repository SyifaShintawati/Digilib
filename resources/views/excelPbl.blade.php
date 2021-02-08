 <!DOCTYPE html>
 <html>
 <head>
 	<title>Export Excel | Pengembalian</title>
 </head>
 <body>
 	<table>
 		<thead>
 			<tr>
 				<th><h1>Data Table Pengembalian</h1></th>
 			</tr>
 			<tr>
 				<th>Nama Anggota</th>
 				<th>Buku</th>
 				<th>Tanggal Pinjam</th>
 				<th>Tanggal Harus Kembali</th>
 				<th>Tanggal Pengembalian</th>
 				<th>Denda</th>
 			</tr>
 		</thead>
 		<tbody>
 			@foreach($pengembalian as $pbl)
 			<tr>
 				<td>{{$pbl->anggota->nm_agt}}</td>
 				<td>{{$pbl->buku->judul}}</td>
 				<td>{{$pbl->tgl_pjm}}</td>
 				<td>{{$pbl->tgl_hsblk}}</td>
 				<td>{{$pbl->tgl_kbl}}</td>
 				<td>{{$pbl->denda}}</td>
 			</tr>
 			@endforeach
 		</tbody>
 	</table>
 </body>
 </html>