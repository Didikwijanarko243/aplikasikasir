@extends('main.main')


@section('content')
    <div class="row pt-5 mt-3">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Staff</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Staff</li>
                </ol>
            </nav>
        </div>
        <div class="col-12">
            <button type="button" class="btn btn-outline-primary bt1" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Tambah Data</button>
            <button type="button" class="btn btn-outline-secondary bt2" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Import Data</button>

        </div>
        <div class="col-12">

            <table class="table table-hover">
                <thead>
                    <th>nama</th>
                    <th>posisi</th>
                    <th>akses</th>
                    <th>shift</th>
                    <th>menu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>test</td>
                        <td>kasir</td>
                        <td>penjualan</td>
                        <td>pagi</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
