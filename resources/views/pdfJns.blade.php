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
 	<title>Export PDF | Jenis</title>
 </head>
 <style type="text/css">
 	table{
 		margin: 1px auto;
 		border-collapse: collapse;
 		width: 50%;
 		text-align: center;
 		height: 30px;
 	}
 	th{
 		background-color: #C0C0C0;
 		height: 30px;
 	}
 </style>
 <body>
 	<center><h1>Data Table Jenis</h1></center><br>
 	<table border="1">
 		<thead>
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