 <!DOCTYPE html>
 <html>
 <head>
 	<title>Export Excel | Peminjaman</title>
 </head>
 <body>
 	<table>
 		<thead>
 			<tr>
 				<th><h1>Data Table Peminjaman</h1></th>
 			</tr>
 			<tr>
 				<th>Nama Anggota</th>
 				<th>Buku</th>
 				<th>Tanggal Pinjam</th>
 				<th>Tanggal Harus Kembali</th>
 			</tr>
 		</thead>
 		<tbody>
 			@foreach($peminjaman as $pjm)
 			<tr>
 				<td>{{$pjm->anggota->nm_agt}}</td>
 				<td>{{$pjm->buku->judul}}</td>
 				<td>{{$pjm->tgl_pjm}}</td>
 				<td>{{$pjm->tgl_hsblk}}</td>
 			</tr>
 			@endforeach
 		</tbody>
 	</table>
 </body>
 </html>