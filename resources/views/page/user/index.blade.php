@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data User</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <li class="list-inline-item">
                                <a href="user/create" class="text-decoration-none text-light btn btn-primary btn-sm rounded-1"><i class="fa fa-plus"></i> Tambah Data</a>
                            </li>
                        </div>
                        
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Telp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->nama}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->notelp}}</td>
                                        <td>
                                            <li class="list-inline-item">
                                                <a href="user/{{$user->id}}" class="btn btn-warning btn-sm rounded-1"><i class="fa fa-info"></i> Detail</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="user/{{$user->id}}/edit" class="btn btn-success btn-sm rounded-1"><i class="fa fa-edit"></i> Edit</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <form action="user/{{$user->id}}" method="POST" class="pt-3">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm rounded-1"><i class="fa fa-trash"></i> Hapus</button>
                                                </form>
                                            </li>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
