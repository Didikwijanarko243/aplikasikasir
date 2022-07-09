@extends('main.main')


@section('content')
    <div class="row pt-5 mt-3">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mutasi Baru</li>
                </ol>
            </nav>
        </div>

        <div class="col-4">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">tanggal</label>
            </div>

            <label for="exampleFormControlTextarea1" class="form-label">Gudang tujuan</label>
            <select class="form-select mb-3" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <label for="exampleFormControlTextarea1" class="form-label">Kode Booking</label>
            <div class="input-group mb-3">

                <input type="text" class="form-control" placeholder="Recipient's username"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <button type="button" class="btn btn-outline-primary input-group-text"><i
                        class="fa-regular fa-hand"></i></button>

            </div>


        </div>
        <div class="col-8">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 225px"></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>
        </div>

        <hr>
        <div class="col-12">
            <p class="lead text-center">
                Masukan produk yang ingin di mutasi
              </p>

              <button type="button" class="btn btn-outline-primary mb-1">Tambahkan Baris</button>
              <button type="button" class="btn btn-outline-success mb-1">Simpan Data</button>
            <table class="table table-hover">
                <thead>
                    <th>#</th>
                    <th>kode</th>
                    <th>produk</th>
                    <th>satuan</th>
                    <th>jenis</th>
                    <th>qty</th>
                    <th>harga</th>
                    <th>menu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PROD000000001</td>
                        <td>SURYA GUDANG GARAM 12</td>
                        <td>PACK</td>
                        <td>ROKOK</td>
                        <td>12</td>
                        <td>Rp. 19.000</td>
                        <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pencil"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><div class="form-floating form-floating-sm mb-3 inputkode">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">kode produk</label>
                          </div></td>
                        <td>SURYA GUDANG GARAM 12</td>
                        <td>PACK</td>
                        <td>ROKOK</td>
                        <td><div class="form-floating form-floating-sm mb-3 inputqty">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">jumlah</label>
                          </div></td>
                        <td>Rp. 19.000</td>
                        <td><button type="button" class="btn btn-success btn-sm"><i class="fa-regular fa-floppy-disk"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-ban"></i></button>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
@endsection
