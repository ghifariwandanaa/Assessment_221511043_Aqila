@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Data Kasir</p>
    <div class="table-responsive">
    <table class = "table table-stripped">
        <thead>
            <tr>
                <th class="col-1">Kode Kasir</th>
                <th>Nama Kasir</th>
                <th>HP</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            @foreach ($kasir as $item)
            <tr>
                <td>{{ $item->KodeKasir }}</td>
                <td>{{ $item->Nama }}</td>
                <td>{{ $item->HP}}</td>
            </tr>
            <?php $i++;?>
            @endforeach
        </tbody>
    </table>
@endsection