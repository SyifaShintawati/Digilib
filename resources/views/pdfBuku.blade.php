 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/bootstrap/logo.jpg') }}">
 	<title>Export PDF | Buku</title>
 </head>
 <style type="text/css">
 	table{
 		margin: 1px auto;
 		border-collapse: collapse;
 		text-align: center;
 	}
 	th{
 		background-color: #C0C0C0;
 	}
 </style>
 <body>
 	<center><h1>Data Table Buku</h1></center><br>
 	<table border="1">
 		<thead>
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
 			@foreach($buku as $buk)
 			<tr>
 				<td>{{$buk->id}}</td>
 				<td>{{$buk->jenis->jenis}}</td>
 				<td>{{$buk->judul}}</td>
 				<td>{{$buk->pengarang}}</td>
 				<td>{{$buk->isbn}}</td>
 				<td>{{$buk->thn}}</td>
 				<td>{{$buk->penerbit}}</td>
 				<td>{{$buk->stok}}</td>
 			</tr>
 			@endforeach
 		</tbody>
 	</table>


 </body>
 </html>