@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kategori Galeri') }}</div>

                <div class="card-body">
                	<a href="{!! route('kategori_galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
                    <table border="1">
					<tr> 
					<td>ID</td>
					<td>Nama</td>
					<td>Users ID</td>
					<td>Created At</td>
					<td>Update At</td>
					<td>Aksi</td>
					</tr>

					@foreach($kategori_galeri as $item)

					<tr>
					<td> {!! $item->id !!}</td>
					<td> {!! $item->nama !!}</td>
					<td> {!! $item->users_id !!}</td>
					<td> {!! $item->created_at->format('d/n/Y  H:i:s') !!}</td>
					<td> {!! $item->updated_at->format('d/n/Y  H:i:s') !!}</td>
					<td>
						<a href="{!! route('kategori_galeri.show',[$item->id]) !!}" class="btn btn-sm btn-success"> Lihat
						</a>
						<a href="{!! route('kategori_galeri.edit',[$item->id]) !!}" class="btn btn-sm btn-warning"> Edit
						</a>
						 {!! Form::open(['route' => ['kategori_galeri.destroy', $item->id], 'method'=>'delete']) !!}

						 {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger', 'onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]); !!}

						 {!! Form::close() !!}
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