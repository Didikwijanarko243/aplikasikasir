@extends('main.main')


@section('content')
    <div class="row pt-5 mt-3">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Staff</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Proses Bulanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-12">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Mulai Proses</button>

        </div>
        <div class="col-12">

            <table class="table table-hover">
                <thead>
                    <th>#</th>
                    <th>tanggal</th>
                    <th>jam</th>
                    <th>user</th>
                    <th>status</th>
                    <th>menu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>02-06-2022</td>
                        <td>12.00</td>
                        <td>DIDIK WIJANARKO</td>
                        <td>SUKSES</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
