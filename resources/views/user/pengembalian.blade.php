@extends('layout.navbaru')

@section('container')
    <table class="table table-hovered table-bordered">
        <tr class="table-dark">
            <td>Nama Peminjam</td>
            <td>Judul Buku</td>
            <td>Tanggal Pinjam</td>
            <td>Tanggal Kembali</td>
        </tr>

        @foreach ($kembali as $pin)
            <tr>
                <td>{{ $pin->nama }}</td>
                <td>{{ $pin->judul }}</td>
                <td>{{ $pin->tanggal_pinjam }}</td>
                <td>{{ $pin->tanggal_kembali }}</td>
            </tr>
        @endforeach
    </table>
@endsection