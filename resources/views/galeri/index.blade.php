<!DOCTYPE html>
<html>
<head>
	<title>Galeri</title>
</head>
<body>

<table border="2">
	<tr>
		<td>ID</td>
		<td>Judul</td>
		<td>Isi</td>
		<td>Users ID</td>
	</tr>

@foreach($galeri as $item)
<tr>
	<td>{!! $item->id !!}</td>
	<td>{!! $item->judul !!}</td>
	<td>{!! $item->isi !!}</td>
	<td>{!! $item->users_id !!}</td>
</tr>

@endforeach

</table>
</body>
</html>