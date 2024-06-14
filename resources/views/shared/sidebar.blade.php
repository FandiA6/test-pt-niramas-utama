<div class="sidebar">
    <div class="d-flex flex-column p-3 vh-100 bg-dark">
        <div class="d-flex align-items-center mb-3 gap-3">
            <img src="https://i.pravatar.cc/50?u=a042581f4e29026704d" alt="" class="rounded-circle border border-secondary">
            <div>
                <a class="d-block text-white text-decoration-none">Welcome Back!</a>
                <a class="d-block font-weight-bold text-white text-decoration-none">Admin</a>
            </div>
        </div>
        <nav class="nav flex-column gap-2">
        <a class="nav-link btn w-100 text-white {{ Request::routeIs('dashboard') ? 'bg-secondary' : 'bg-dark' }}" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="nav-link btn w-100 text-white {{ Request::routeIs('data-produk') ? 'bg-secondary' : 'bg-dark' }}" href="{{ route('data-produk') }}">Data Produk</a>
            <a class="nav-link btn w-100 text-white {{ Request::routeIs('data-penjualan') ? 'bg-secondary' : 'bg-dark' }}" href="{{ route('data-penjualan') }}">Data Penjualan</a>
        </nav>
        <div class="mt-auto w-100">
            <form action="" method="">
                <button type="submit" class="btn btn-danger w-100">Keluar</button>
            </form>
        </div>
    </div>
</div>
