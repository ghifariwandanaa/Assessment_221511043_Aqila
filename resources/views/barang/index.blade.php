@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Data Barang</p>
    <div class="table-responsive">
    <div class="pb-3"><a href="{{route('barang.create')}}" class="btn btn-primary"> Tambah Barang </a></div>
    <table class = "table table-stripped">
        <thead>
            <tr>
                <th class="col-1">Kode Barang</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Harga Satuan</th>
                <th>Stok</th>
                <th class="col-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            @foreach ($barang as $item)
            <tr>
                <td>{{ $item->KodeBarang }}</td>
                <td>{{ $item->NamaBarang }}</td>
                <td>{{ $item->Satuan }}</td>
                <td>{{ $item->HargaSatuan }}</td>
                <td>{{ $item->Stok }}</td>
                <td>
                    <a href="{{ route('barang.edit', ['id' => $item->KodeBarang]) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('barang.destroy', $item->KodeBarang) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php $i++;?>
            @endforeach
        </tbody>
    </table>
@endsection