@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Kategori Artikel</div>
                <div class="card-body">
                        {!! Form::open(['route' => 'kategori_artikel.store', 'method' => 'post']) !!}
                        @include('kategori_artikel.form')
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>

    <script>
          $(document).ready(function() {
            CKEDITOR.replace( 'isi' );
          });
    </script>
  
@endsection