@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Pengumuman') }}</div>

                <div class="card-body">
                	<a href="{!! route('pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>
				<table border="2">
				<tr>
					<td>ID</td>
					<td>Judul</td>
					<td>Isi</td>
					<td>Users ID</td>
					<td>Kategori Pengumuman</td>
					<td>Aksi</td>
				</tr>

				@foreach($pengumuman as $item)
				<tr>
				<td>{!! $item->id !!}</td>
				<td>{!! $item->judul !!}</td>
				<td>{!! $item->isi !!}</td>
				<td>{!! $item->users_id !!}</td>
				<td>{!! $item->kategori_pengumuman_id !!}</td>
				<td>
						<a href="{!! route('pengumuman.show',[$item->id]) !!}" class="btn btn-sm btn-success"> Lihat
						</a>
				</td>
				</tr>
				@endforeach
				</table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection