@extends('layouts.main')

@section('container')
    <div style="height: 100vh; flex-direction: column; text-align: center;" class="container d-flex mt-5">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Pesanan Berhasil dibuat</h4>
        <p>Silahkan lakukan pembayaran melalui BCA : 26532567326</p>
        <hr>
        <p class="mb-0">Konfirmasi pembayaran melalui Nomor <a href="https://api.whatsapp.com/send?phone=6289602748612">0812921738</a></p>
    </div>
        <h1>Keranjang</h1>
        <div style="width: 100%;">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Sub Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Seafood Makanan Kucing 500 g</td>
                    <td>Rp 80.000</td>
                    <td>Rp 80.000</td>
                    <td>
                    <input style="width: 60px" type="number" value="1" min="1">
                    </td>
                    <td><button type="button" class="btn btn-danger">Hapus</button></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Seafood Makanan Kucing 1.2 kg</td>
                    <td>Rp 45.000</td>
                    <td>Rp 45.000</td>
                    <td>
                    <input style="width: 60px" type="number" value="1" min="1">
                    </td>
                    <td><button type="button" class="btn btn-danger">Hapus</button></td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Seafood Makanan Kucing 2 kg</td>
                    <td>Rp 20.000</td>
                    <td>Rp 45.000</td>
                    <td>
                    <input style="width: 60px" type="number" value="1" min="1">
                    </td>
                    <td><button type="button" class="btn btn-danger">Hapus</button></td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Seafood Makanan Kucing 5 kg</td>
                    <td>Rp 340.000</td>
                    <td>Rp 45.000</td>
                    <td>
                    <input style="width: 60px" type="number" value="1" min="1">
                    </td>
                    <td><button type="button" class="btn btn-danger">Hapus</button></td>
                    </tr>
                </tbody>
                <tfoot>
                <th colspan="4">
                  <h4> Total </h4>
                </th>
                <th colspan="2">
                  <h4>Rp. 999.000</h4>
                </th>
              </tfoot>
            </table>
            <div class="d-flex justify-content-end">
            <button style="margin-right: 20px;" type="button" class="btn btn-primary">Update Keranjang</button>
            <button type="button" class="btn btn-primary" onclick="return confirm('Apakah sudah yakin dengan pesanan anda?')">Buat Pesanan</button>
            </div>
        </div>
    </div>
@endsection