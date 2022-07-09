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
            <button type="button" class="btn btn-outline-primary btn-tambah-produk" data-bs-toggle="modal"
                data-bs-target="#exampleModal" >Tambah Data</button>
            <button type="button" class="btn btn-outline-secondary btn-import-produk" data-bs-toggle="modal"
            data-bs-target="#exampleModal"  >Import Data</button>

        </div>
        <div class="col-12">
            
            <table class="table table-hover">
                <thead>
                    <th>kode</th>
                    <th>produk</th>
                    <th>jenis</th>
                    <th>variasi</th>
                    <th>satuan</th>
                    <th>hargajual</th>
                    <th>barcode</th>
                    <th>menu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>PRD001</td>
                        <td>Surya</td>
                        <td>Rokok</td>
                        <td>Pack</td>
                        <td>Pack</td>
                        <td>210000</td>
                        <td>88800000</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
