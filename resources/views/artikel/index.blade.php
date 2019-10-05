@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Artikel') }}</div>

                <div class="card-body">
                	<a href="{!! route('artikel.create') !!}" class="btn btn-primary">Tambah Data</a>
				<table border="2">
				<tr>
					<td>ID</td>
					<td>Judul</td>
					<td>Isi</td>
					<td>Users ID</td>
					<td>Kategori Artikel</td>
					<td>Aksi</td>
				</tr>

				@foreach($artikel as $item)
				<tr>
				<td>{!! $item->id !!}</td>
				<td>{!! $item->judul !!}</td>
				<td>{!! $item->isi !!}</td>
				<td>{!! $item->users_id !!}</td>
				<td>{!! $item->kategori_artikel_id !!}</td>
				<td>
						<a href="{!! route('artikel.show',[$item->id]) !!}" class="btn btn-sm btn-success"> Lihat
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