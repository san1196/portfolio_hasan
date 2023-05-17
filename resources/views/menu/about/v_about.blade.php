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

				<div class="card-body" style="overflow-y: scroll; overflow-x: scroll; height: 450px;">
					@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					
                    @if($cek > 0)
                    @else
        				<a href="/about/tambah" class="btn btn-primary">Input About</a>
                    @endif
					<br/>
					<br/>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Telephone</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Sosmed</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($about as $p)
                            <tr>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->telephone }}</td>
                                <td>{{ $p->address }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->sosmed }}</td>
                                <td>
                                    <a href="/about/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection