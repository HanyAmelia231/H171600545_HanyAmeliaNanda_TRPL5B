<!DOCTYPE html>
<html>
<head>
	<title>Galeri</title>
</head>
<body>

<table border="2">
	<tr>
		<td>ID</td>
		<td>Nama</td>
		<td>Keterangan</td>
		<td>Path</td>
		<td>Users ID</td>
	</tr>

@foreach($galeri as $item)
<tr>
	<td>{!! $item->id !!}</td>
	<td>{!! $item->Nama !!}</td>
	<td>{!! $item->Keterangan !!}</td>
	<td>{!! $item->path !!}</td>
	<td>{!! $item->users_id !!}</td>
</tr>

@endforeach

</table>
</body>
</html>