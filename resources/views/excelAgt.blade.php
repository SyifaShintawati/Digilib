 <!DOCTYPE html>
 <html>
 <head>
 	<title>Export Excel | Anggota</title>
 </head>
 <body>
 	<table>
 		<thead>
 			<tr>
 				<th><h1>Data Table Anggota</h1></th>
 			</tr>
 			<tr>
 				<th>No</th>
 				<th>Nama Anggota</th>
 				<th>Alamat</th>
 				<th>Kota</th>
 				<th>No Telepon</th>
 			</tr>
 		</thead>
 		<tbody>
 			@foreach($anggota as $agt)
 			<tr>
 				<td>{{$agt->no_agt}}</td>
 				<td>{{$agt->nm_agt}}</td>
 				<td>{{$agt->alamat}}</td>
 				<td>{{$agt->kota}}</td>
 				<td>{{$agt->tlp}}</td>
 			</tr>
 			@endforeach
 		</tbody>
 	</table>
 </body>
 </html>