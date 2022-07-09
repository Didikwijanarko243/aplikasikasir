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
            <button type="button" class="btn btn-outline-primary btn-tambah-kategori-variasi" data-bs-toggle="modal"
                data-bs-target="#exampleModal" >Tambah Data</button>
            <button type="button" class="btn btn-outline-secondary btn-import-produk" data-bs-toggle="modal"
            data-bs-target="#exampleModal"  >Import Data</button>

        </div>
        <div class="col-12">
            
            <table class="table table-hover">
                <thead>
                    <th>kode</th>
                    <th>kategori</th>
                    
                    <th>tanggal buat</th>
                    <th>user</th>
                    <th>tanggal update</th>
                    <th>user update</th>
                    <th>tanggal delete</th>
                    <th>user delete</th>
                    <th class="text-left">menu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>KATV00001</td>
                        <td>WARNA</td>
                        <td>06-06-2022</td>
                        <td>DIDIK WIJANARKO</td>
                        <td>07-09-2022</td>
                        <td>DANI</td>
                        <td></td>
                        <td></td>
                        <td class="text-left"><button type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
