@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Proyek</h1>
                </div>
            </div>
        </div>
    </section>

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
                                    @foreach ($proyeks as $proyek)
                                        <tr>
                                            <td>{{$proyek->id}}</td>
                                            <td>{{$proyek->nama}}</td>
                                            <td>{{$proyek->email}}</td>
                                            <td>{{$proyek->notelp}}</td>
                                            <td>
                                                <li class="list-inline-item">
                                                    <a href="user/{{$proyek->id}}" class="btn btn-warning btn-sm rounded-1"><i class="fa fa-info"></i> Detail</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="user/{{$proyek->id}}/edit" class="btn btn-success btn-sm rounded-1"><i class="fa fa-edit"></i> Edit</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="user/{{$proyek->id}}" method="POST" class="pt-3">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
