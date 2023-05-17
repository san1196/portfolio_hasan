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

				<div class="card-body" style="overflow-y: scroll; overflow-x: scroll; height: 450px;">
					@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('gagal'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('gagal') }}
                        </div>
                    @endif
					
                    <a href="/mahasiswa/tambah" class="btn btn-primary">Input Mahasiswa</a>

					<br/>
					<br/>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Telephone</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>School</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->telepon }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->sekolah }}</td>
                                <td>
                                    <a href="/mahasiswa/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/mahasiswa/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
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