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
 	<title>Export PDF | Peminjaman</title>
 </head>
 <style type="text/css">
 	table,tr,td{
 		margin: 1px auto;
 		border-collapse: collapse;
 		text-align: center;
 		width: 100%;
 		height: 30px;
 	}
 	th{
 		background-color: #C0C0C0;
 		height: 30px;
 	}
 </style>
 <body>
 	<center><h1>Data Table Peminjaman</h1></center><br>
 	<table border="1">
 		<thead>
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