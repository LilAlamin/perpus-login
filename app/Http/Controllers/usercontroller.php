<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
    public function list_buku(){
        $title = "Buku";
        $data = DB::select("select * from buku");
        return view('user.bukuu',['title'=>$title,'data'=>$data]);
    }
    public function tambah_pinjam(Request $req){
        DB::insert('insert into peminjaman values(null,?,?,?)',[$req->kode_anggota,$req->kode_buku,$req->pinjam]);
        return redirect('/peminjaman');
    }
    public function list_peminjam(Request $req){
        $title = "Peminjaman";
        $pinjam = DB::select("select anggota.nama,buku.judul,peminjaman.* from peminjaman
        inner join anggota on anggota.kode = peminjaman.kode_anggota
        inner join buku on buku.kode = peminjaman.kode_buku");
        $buku = DB::select('select kode,judul from buku');
        $anggota = DB::select('select kode,nama from anggota');
        return view('user.peminjaman',['pinjam'=>$pinjam,'title'=>$title,'buku'=>$buku,'anggota'=>$anggota]);
    }
    public function pengembalian(Request $req){
        $peminjaman = DB::select("select kode_anggota,kode_buku,tanggal_pinjam from peminjaman where id=?",[$req->id]);
        $peminjaman=$peminjaman[0];
        DB::insert("insert into pengembalian values(null,?,?,?,date(now()))",
        [$peminjaman->kode_anggota,$peminjaman->kode_buku,$peminjaman->tanggal_pinjam]);
        DB::delete('delete from peminjaman where id=?',[$req->id]);
        return redirect('/pengembalian');

    }
    public function list_kembali(Request $req){
        $title = "Pengembalian";
        $kembali = DB::select("select anggota.nama,buku.judul,pengembalian.* from pengembalian
        inner join buku on buku.kode = pengembalian.kode_buku
        inner join anggota on anggota.kode = pengembalian.kode_anggota");
        return view('user.pengembalian',['title'=>$title,'kembali'=>$kembali,]);
    }
} 
