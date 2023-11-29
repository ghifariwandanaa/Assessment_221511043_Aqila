@extends('dashboard.layout')

@section('konten')
    <div class="container">
        <div class="pb-3"><a href="{{ route('barang.index') }}" class="btn btn-primary"> Kembali </a></div>
        <form action="{{ route('barang.update', ['id' => $barang->KodeBarang]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="NamaBarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control form-control-sm" name="NamaBarang" id="NamaBarang" value="{{ $barang->NamaBarang }}" placeholder="Nama Barang">
            </div>

            <div class="mb-3">
                <label for="Satuan" class="form-label">Satuan</label>
                <input type="text" class="form-control form-control-sm" name="Satuan" id="Satuan" value="{{ $barang->Satuan }}" placeholder="Satuan">
            </div>

            <div class="mb-3">
                <label for="HargaSatuan" class="form-label">Harga Satuan</label>
                <input type="text" class="form-control form-control-sm" name="HargaSatuan" id="HargaSatuan" value="{{ $barang->HargaSatuan }}" placeholder="Harga Satuan">
            </div>

            <div class="mb-3">
                <label for="Stok" class="form-label">Stok</label>
                <input type="text" class="form-control form-control-sm" name="Stok" id="Stok" value="{{ $barang->Stok }}" placeholder="Stok">
            </div>

            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        </form>
    </div>
@endsection
