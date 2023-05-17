@php
    use Illuminate\Support\Facades\DB;
@endphp
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('About Us') }}</div>

				<div class="card-body">
                    <a href="/about" class="btn btn-primary">Back</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/about/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Name...">
 
                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Telephone</label>
                            <input name="telephone" type="text" class="form-control" placeholder="Telephone...">
 
                            @if($errors->has('telephone'))
                                <div class="text-danger">
                                    {{ $errors->first('telephone')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control" placeholder="Email...">
 
                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" type="text" class="form-control" placeholder="Address...">
 
                            @if($errors->has('address'))
                                <div class="text-danger">
                                    {{ $errors->first('address')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Sosmed</label>
                            <textarea name="sosmed" type="text" class="form-control" placeholder="Sosmed..."></textarea>
 
                            @if($errors->has('sosmed'))
                                <div class="text-danger">
                                    {{ $errors->first('sosmed')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Submit">
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