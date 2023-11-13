@extends('layouts.main')

@section('container')
    <h1 style="display: flex; align-item: center; justify-content: center;">Tabel Drink</h1>
    <div style="display: flex; align-item: center; justify-content: center;">
        <table class="table table-bordered table-dark table-striped" style="text-align: center; width: 1000px;">
            <thead>
                <th>No</th>
                <th>Tanggal Dibuat</th>
                <th>Nama</th>
                <th>Stock</th>
                <th>Category</th>
                <th>Harga</th>
                <th>Action</th>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($drinks as $drink)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <th>{{ $drink->tanggal_dibuat }}</th>
                        <td>{{ $drink->nama }}</td>
                        <td>{{ $drink->stock }}</td>
                        <td>{{ $drink->category }}</td>
                        <td>{{ $drink->harga }}</td>
                        <td>
                            <a type="button" class="btn btn-primary" href="/drink/detail{{ $drink->id }}">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection