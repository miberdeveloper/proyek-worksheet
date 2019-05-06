@extends('admin.layouts.app')

@section('page-title', 'Pengguna')

@section('admin-role', 'Administrasi')

@section('content-title', 'Tambah Pengguna')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('users.index') }}"><i class="fa fa-home"></i> Pengguna</a></li>
        <li class="active">Tambah data</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Pengguna </h3>
                </div>
                <form role="form" action="{{ route('users.update', $data['users']->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="box-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username" value="{{ $data['users']->username }}" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="name" placeholder="Masukan nama" value="{{ $data['users']->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email" value="{{ $data['users']->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload foto</label>
                            <input type="file" id="exampleInputFile" name="photo" value="{{ old('photo') }}">
                            <p class="help-block">* Maksimal 2 MB</p>
                            <img src="{{ url('/') }}/uploads/users/{{$data['users']->photo}}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
