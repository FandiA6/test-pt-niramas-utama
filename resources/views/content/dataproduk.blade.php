@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-3">Papan Informasi</h2>
        </div>
        <div class="col-12 mb-3">
            <a class="btn btn-secondary" href="{{ route('data-produk') }}">Semua Produk</a>
        </div>

        <div class="col-12 mt-5">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addProductModal">
                Tambah Produk
            </button>
            <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addProductModalLabel">Tambah Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nama_produk" class="form-label">Nama Produk</label>
                                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_produk" class="form-label">Kode Produk</label>
                                            <input type="text" class="form-control" id="kode_produk" name="kode_produk" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kuantitas" class="form-label">Kuantitas</label>
                                            <input type="number" class="form-control" id="kuantitas" name="kuantitas" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="harga_beli" class="form-label">Harga Beli</label>
                                            <input type="number" class="form-control" id="harga_beli" name="harga_beli" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                                            <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="harga_jual" class="form-label">Harga Jual</label>
                                            <input type="number" class="form-control" id="harga_jual" name="harga_jual" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="gambar_produk" class="form-label">Gambar Produk</label>
                                            <input type="file" class="form-control" id="gambar_produk" name="gambar_produk" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex align-items-end mb-3">
                                        <button type="submit" class="form-control btn btn-primary ">Tambah Produk</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <table id="data_produk" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kode Produk</th>
                        <th>Kuantitas</th>
                        <th>Pemilik</th>
                        <th>Harga Jual</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $index => $product)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $product->nama_produk }}</td>
                        <td>{{ $product->kode_produk }}</td>
                        <td>{{ $product->kuantitas }}</td>
                        <td>{{ $product->nama_pemilik }}</td>
                        <td>{{ $product->harga_jual }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#data_produk').DataTable();
    });
</script>
@endsection
