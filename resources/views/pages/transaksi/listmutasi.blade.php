@extends('main.main')


@section('content')
    <div class="row pt-5 mt-3">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Mutasi</li>
                </ol>
            </nav>
        </div>
        <div class="col-12">
            <a type="button" href="{{route('mutasi-baru')}}" class="btn btn-outline-primary" >Tambah Data</a>
            

        </div>
        <div class="col-12">

            <table class="table table-hover">
                <thead>
                    <th>#</th>
                    <th>tanggal</th>
                    <th>jam</th>
                    <th>tujuan</th>
                    <th>item</th>
                    <th>user</th>
                    <th>menu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>12-06-2022</td>
                        <td>08:00</td>
                        <td>Gudang Jombang</td>
                        <td>3 produk</td>
                        <td>AHMAD SUPARMAN</td>
                        <td><button type="button" class="btn btn-primary btn-sm">DETAIL</button>
                            <button type="button" class="btn btn-danger btn-sm">DELETE</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>12-06-2022</td>
                        <td>08:00</td>
                        <td>Gudang Jombang</td>
                        <td>3 produk</td>
                        <td>AHMAD SUPARMAN</td>
                        <td><button type="button" class="btn btn-primary btn-sm">DETAIL</button>
                            <button type="button" class="btn btn-danger btn-sm">DELETE</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>12-06-2022</td>
                        <td>08:00</td>
                        <td>Gudang Jombang</td>
                        <td>3 produk</td>
                        <td>AHMAD SUPARMAN</td>
                        <td><button type="button" class="btn btn-primary btn-sm">DETAIL</button>
                            <button type="button" class="btn btn-danger btn-sm">DELETE</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
