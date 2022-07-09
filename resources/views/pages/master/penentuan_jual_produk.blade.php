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
        <div class="lg-12 text-center">
            <p class="h4">Info Harga Jual Saat Ini</p>
            <h1 class="display-5">Rp. 1.000.000</h1>
        </div>
        <hr>
        <div class="col-4">
            <p class="h4">Form Update Harga</p>
            <form action="#">
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Pilih Produk</option>
                        <option value="1">Surya</option>
                        <option value="2">Nuvo</option>
                        <option value="3">Bimoli</option>
                    </select>
                    <label for="floatingSelect">Nama Produk</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Jenis</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Variasi</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Barcode</label>
                </div>

                <label for="floatingInput">Harga</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Rp</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1" id="floatingInput">

                </div>


                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" type="button">Update</button>

                </div>

            </form>

        </div>

        <div class="col-8">
            <table class="table table-hover">
                <thead>
                    <th>tanggal beli</th>
                    <th>kode</th>
                    <th>produk</th>
                    <th>jenis</th>
                    <th>variasi</th>
                    <th>satuan</th>
                    <th>harga beli</th>
                    <th>supplier</th>

                </thead>
                <tbody>
                    <tr>
                        <td style="    background-color: yellow;">10-06-2022</td>
                        <td>PROD0000000001</td>
                        <td>Surya 12</td>
                        <td>Rokok</td>
                        <td>Pack</td>
                        <td>Pack</td>
                        <td style="    background-color: yellow;">Rp. 17.000</td>
                        <td>PT. SURYA GUDANG GARAM
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
