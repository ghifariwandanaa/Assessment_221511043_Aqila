@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Data Tenan</p>
    <div class="table-responsive">
    <table class = "table table-stripped">
        <thead>
            <tr>
                <th class="col-1">Kode Tenan</th>
                <th>Nama Tenan</th>
                <th>HP</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            @foreach ($tenan as $item)
            <tr>
                <td>{{ $item->KodeTenan }}</td>
                <td>{{ $item->NamaTenan }}</td>
                <td>{{ $item->HP}}</td>
            </tr>
            <?php $i++;?>
            @endforeach
        </tbody>
    </table>
@endsection