 <!DOCTYPE html>
 <html>
 <head>
 	<title>Laporan</title>
 </head>
 <body>
 	<table>
 		<thead>
 			<tr>
 				<th><h1>Data Table Buku</h1></th>
 			</tr>
 			<tr>
 				<th>No</th>
 				<th>Jenis Buku</th>
 				<th>Judul Buku</th>
 				<th>Pengarang</th>
 				<th>No ISBN</th>
 				<th>Tahun Terbit</th>
 				<th>Penerbit</th>
 				<th>Stok</th>
 			</tr>
 		</thead>
 		<tbody>
 			@foreach($buku as $bu)
 			<tr>
 				<td>{{$bu->id}}</td>
 				<td>{{$bu->jenis->jenis}}</td>
 				<td>{{$bu->judul}}</td>
 				<td>{{$bu->pengarang}}</td>
 				<td>{{$bu->isbn}}</td>
 				<td>{{$bu->thn}}</td>
 				<td>{{$bu->penerbit}}</td>
 				<td>{{$bu->stok}}</td>
 			</tr>
 			@endforeach
 		</tbody>
 	</table>
 </body>
 </html>