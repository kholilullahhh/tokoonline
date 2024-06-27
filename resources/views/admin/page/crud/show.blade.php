@extends('admin.layout.index')

@section('content')
<div class="container mt-5">
    <h1>Detail Produk</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $product->judul }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Pengarang:</strong> {{ $product->pengarang }}</p>
            <p><strong>Deskripsi:</strong> {{ $product->konten }}</p>
            <!-- <img src="{{ asset('storage/product/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid"> -->
        </div>
        <div class="card-footer">
            <a href="{{ route('index') }}" class="btn btn-primary">Kembali ke Daftar Produk</a>
        </div>
    </div>
</div>
@endsection