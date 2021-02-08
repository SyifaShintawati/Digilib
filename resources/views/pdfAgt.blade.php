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
 	<title>Export PDF | Anggota</title>
 </head>
 <style type="text/css">
 	table,tr,td{
 		margin-left: 15px;
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
 	<center><h1>Data Table Anggota</h1></center><br>
 	<table border="1">
 		<thead>
 			<tr>
 				<th width="30px">No</th>
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