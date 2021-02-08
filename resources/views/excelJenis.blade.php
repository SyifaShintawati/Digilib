 <!DOCTYPE html>
 <html>
 <head>
 	<title>Export Excel | Jenis</title>
 </head>
 <body>
 	<table>
 		<thead>
 			<tr>
 				<th><h1>Data Jenis Buku</h1></th>
 			</tr>
 			<tr>
 				<th>No</th>
 				<th>Jenis Buku</th>
 			</tr>
 		</thead>
 		<tbody>
 			@foreach($jenis as $jns)
 			<tr>
 				<td>{{$jns->id}}</td>
 				<td>{{$jns->jenis}}</td>
 			</tr>
 			@endforeach
 		</tbody>
 	</table>
 </body>
 </html>