@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Lihat Berita') }}</div>

                <div class="card-body">
                    @csrf

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Judul</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $berita->judul }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Isi</label>
                        <span class="col-md-6">{!! $berita->isi !!}</span>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Kategori Berita</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $berita->kategori_berita_id }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Created At</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $berita->created_at->format('D, d M Y H:m') }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Last Updated</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $berita->updated_at->format('D, d M Y H:m') }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Publisher</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $berita->users_id }}</label>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="btn-group" role="group">
                            <a class="btn btn-primary" href="{{ route('berita.edit', $berita->id) }}">Edit</a>
                            {!! Form::open(['route' => ['berita.destroy', $berita->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-secondary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection