@extends('admin.layout.index')

@section('content')

<h1>Data Transaksi</h1>

<form method="GET" action="{{ route('transaksi.filter') }}">
    <label for="start_date">Start Date:</label>
    <input type="date" id="start_date" name="start_date">

    <label for="end_date">End Date:</label>
    <input type="date" id="end_date" name="end_date">

    <button type="submit">Filter</button>
</form>

<table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Id Transaksi</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Nilai Trx</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $x => $item)
                        <tr class="align-middle">
                            <td>{{ ++$x }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->code_transaksi }}</td>
                            <td>{{ $item->nama_customer }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->total_harga }}</td>
                            <td>
                                <span
                                    class="align-middle {{ $item->status === 'Paid' ? 'badge bg-success text-white' : 'badge bg-danger text-white' }}">
                                    {{ $item->status }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
@endsection
