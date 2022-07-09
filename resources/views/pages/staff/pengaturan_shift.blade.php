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
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Bulk Aksi
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item btn-setshift" href="#" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Setting Semua</a></li>
                    <li><a class="dropdown-item btn-deleteshiftall" href="#" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Hapus Semua</a></li>
                </ul>
            </div>

            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Tambah Baru</button>

        </div>
        <div class="col-12">

            <table class="table table-hover">
                <thead>
                    <th></th>
                    <th>nama</th>
                    <th>posisi</th>
                    <th>akses</th>
                    <th>shift</th>
                    <th>menu</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                        <td>test</td>
                        <td>kasir</td>
                        <td>penjualan</td>
                        <td>pagi</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                        <td>Budi</td>
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
