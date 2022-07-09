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
            

            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Copy akses</button>

        </div>
        <div class="col-12">

            <table class="table table-hover">
                <thead>

                    <th>nama</th>
                    <th>akses nama</th>
                    <th>create</th>
                    <th>read</th>
                    <th>update</th>
                    <th>delete</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>

                        <td>Budi</td>
                        <td>Penjualan</td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                        </td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                        </td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                        </td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                        </td>
                        <td class="text-end"><button type="button" class="btn btn-primary btn-sm">Simpan</button>
                            <button type="button" class="btn btn-default btn-sm">Batal</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Budi</td>
                        <td>Penjualan</td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                        </td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                        </td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                        </td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                        </td>
                        <td class="text-end"><button type="button" class="btn btn-primary btn-sm">Simpan</button>
                            <button type="button" class="btn btn-default btn-sm">Batal</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
