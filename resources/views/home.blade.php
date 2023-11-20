@extends('layouts.main')

@section('container')
    <h1 style="display: flex; align-item: center; justify-content: center;">Selamat Datang di Home Page</h1>
    <h1 style="display: flex; align-item: center; justify-content: center;">Tabel Drink, Food, dan Snack</h1>
    <div style="display: flex; align-item: center; justify-content: center;">
        <table class="table table-bordered table-dark table-striped" style="text-align: center; width: 1000px;">
            <thead>
                <th>No</th>
                <th>Tabel</th>
                <th>Action</th>
                <th>Tabel</th>
                <th>Action</th>
                <th>Tabel</th>
                <th>Action</th>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                    <tr>
                        <th>{{ $no++ }}</th>
                        <th>Tabel Drink</th>
                        <td>
                            <a type="button" class="btn btn-primary" href="/drink/all">All Data</a>
                        </td>
                        <th>Tabel Food</th>
                        <td>
                            <a type="button" class="btn btn-primary" href="/food/all">All Data</a>
                        </td>
                        <th>Tabel Snack</th>
                        <td>
                            <a type="button" class="btn btn-primary" href="/snack/all">All Data</a>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection