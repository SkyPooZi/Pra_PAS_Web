@extends('layouts.main')

@section('container')
    <h1 style="display: flex; align-item: center; justify-content: center;">Tabel Detail {{ $snack->nama }}</h1>
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
                    <th>{{ $snack->tanggal_dibuat }}</th>
                    <td>{{ $snack->nama }}</td>
                    <td>{{ $snack->stock }}</td>
                    <td>{{ $snack->category }}</td>
                    <td>{{ $snack->harga }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="/snack/all">Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection