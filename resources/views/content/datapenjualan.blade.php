@extends('layouts.app')

@section('content')
<div class="container ">

  <div class="row">
    <div class="col-12">
      <h2 class="text-center mb-3">Papan Informasi</h2>
    </div>
    <table id="data_penjualan" class="table table-striped">
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
                    
                </tbody>
            </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#data_penjualan').DataTable();
    });
</script>
@endsection