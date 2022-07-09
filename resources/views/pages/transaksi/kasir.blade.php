@extends('main.main')
@push('css')
    <style>
        .table-wrapper {
            max-height: 250px;
            overflow: auto;
            display: inline-block;
            width: 100% !important;
        }

    </style>
@endpush

@section('content')
    <div class="row pt-5 mt-3">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Staff</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kasir</li>
                </ol>
            </nav>
        </div>
        <div class="lg-12 text-center">
            <h1 class="display-5">Surya Gudang Garam 12</h1>
            <h1 class="display-5">Rp. 1.000.000</h1>
        </div>
        <hr>
        <div class="col-4">
            <p class="h4">Cari Disini</p>
            <form action="#">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Barcode</label>
                </div>



                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" type="button">Cari</button>

                </div>

            </form>

        </div>

        <div class="col-8">
            <table class="table table-hover table-wrapper">
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
    <hr>
    <div class="row">

        <div class="col-12">
            <ul class="list-inline">
                <li class="list-inline-item">F1 (PRINT)</li>
                <li class="list-inline-item">F2 (BAYAR).</li>
                <li class="list-inline-item">F3 (SIMPAN SEMENTARA).</li>
              </ul>
        </div>
    </div>
@endsection
