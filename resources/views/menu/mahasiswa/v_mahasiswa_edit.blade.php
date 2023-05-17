@php
    use Illuminate\Support\Facades\DB;
@endphp
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mahasiswa') }}</div>

				<div class="card-body">
                    <a href="/mahasiswa" class="btn btn-primary">Back</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/mahasiswa/update/{{ $mahasiswa->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Name</label>
                            <input name="nama" type="text" class="form-control" placeholder="Name..." value="{{ $mahasiswa->nama }}">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Telephone</label>
                            <input name="telepon" type="text" class="form-control" placeholder="Telephone..." value="{{ $mahasiswa->telepon }}">
 
                            @if($errors->has('telepon'))
                                <div class="text-danger">
                                    {{ $errors->first('telepon')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control" placeholder="Email..." value="{{ $mahasiswa->email }}">
 
                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="alamat" type="text" class="form-control" placeholder="Address..." >{{ $mahasiswa->alamat }}</textarea>
 
                            @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>School</label>
                            <input name="sekolah" type="text" class="form-control" placeholder="School..." value="{{ $mahasiswa->sekolah }}" >
 
                             @if($errors->has('sekolah'))
                                <div class="text-danger">
                                    {{ $errors->first('sekolah')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </div>
</div>
<!--<script>
    tinymce.init({
        selector: 'textarea',
        height: 200,
        plugins: [
          'advlist autolink lists link image charmap print preview anchor',
          'searchreplace visualblocks code fullscreen',
          'insertdatetime media table contextmenu paste code'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_css: [
          '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
          '//www.tinymce.com/css/codepen.min.css'
        ]
    });
</script>-->
@endsection