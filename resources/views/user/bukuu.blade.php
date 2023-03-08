@extends('layout.navbaru')

@section('container')
    <table class="table table-bordered table-hovered">
        <tr class="table-dark">
            <td>Kode</td>
            <td>Judul</td>
            <td>Stok</td>
        </tr> 

        @if (count($data)==0)
            <tr>
                <td colspan="3">Data Tak Ditemukan</td>
            </tr>
        @endif

        @foreach ($data as $bukk)
            <tr>
                <td>{{ $bukk->kode }}</td>
                <td>{{ $bukk->judul }}</td>
                <td>{{ $bukk->stok }}</td>
            </tr>
        @endforeach
    </table>
@endsection