@extends('layout.navbaru')

@section('container')
    <form action="" method="POST" class="form">
        @csrf
        <label for="" class="form-label">Kode Anggota</label>
        <br>

        <select name="kode_anggota" required>
            <option value="">Pilih Anggota</option>
            @foreach ($anggota as $pin)
            <option value="{{ $pin->kode }}">{{ $pin->nama }}</option>
            @endforeach
        </select> 
        <br>
        <label for="" class="form-label">Nama Buku</label>
        <br>
        <select name="kode_buku" >
            @foreach ($buku as $buk)
            <option value="{{ $buk->kode }}">{{ $buk->judul }}</option>
            @endforeach
        </select>  
        <br>
        <label for="" class="form-label">Tanggal Pinjam</label>
        <br>
        <input type="date" name="pinjam">
        <br>
        <button type="submit" class="btn btn-success mt-2">Pinjam</button>
    </form>
    <br>
    <table class="table table-hovered table-bordered">
        <tr class="table-dark">
            <td>Nama Peminjam</td>
            <td>Judul Buku</td>
            <td>Tanggal Pinjam</td>
            <td>Kembalikan</td>
        </tr>

        @foreach ($pinjam as $pin)
            <tr>
                <td>{{ $pin->nama }}</td>
                <td>{{ $pin->judul }}</td>
                <td>{{ $pin->tanggal_pinjam }}</td>
                <td><a href="/pengembalian/hapus?id={{ $pin->id }}"><button class="btn btn-danger">Kembalikan</button></a></td>
            </tr>
        @endforeach
    </table>
@endsection