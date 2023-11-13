@extends('layouts.main')

@section('container')
    <h1 style="display: flex; align-item: center; justify-content: center;">Tabel Detail {{ $food->nama }}</h1>
    <div style="display: flex; align-item: center; justify-content: center;">
        <table class="table table-bordered table-dark table-striped" style="text-align: center; width: 1000px;">
            <thead>
                <th>Tanggal Dibuat</th>
                <th>Nama</th>
                <th>Stock</th>
                <th>Category</th>
                <th>Harga</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <th>{{ $food->tanggal_dibuat }}</th>
                    <td>{{ $food->nama }}</td>
                    <td>{{ $food->stock }}</td>
                    <td>{{ $food->category }}</td>
                    <td>{{ $food->harga }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="/food/all">Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection