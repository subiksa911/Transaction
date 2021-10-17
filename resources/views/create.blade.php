@extends('template')
@section('title','Creaate Data Film')
@section('container')
<div class="card" style="margin-top: 20px;">
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Tambah Film</h2>
            </div>
        </div>
        <div class="card" style="margin-top: 20px;">

            <form action="{{ route('tambah') }}" method="POST">
                {{ csrf_field() }}


                <div class="form-group">
                    <label for="id">Id Film</label>
                    <input type="number" name="id" class="form-control" id="id" aria-describedby="id"
                        placeholder="Masukan id produk">
                </div>
                <div class="form-group">
                    <label for="judul_film">Judul Film</label>
                    <input type="text" name="judul_film" class="form-control" id="judul_film"
                        aria-describedby="judul_film" placeholder="Masukan Judul Film">
                </div>
                <div class="form-group">
                    <label for="tahun_rilis">Tahun Rilis</label>
                    <input type="text" name="tahun_rilis" class="form-control" id="tahun_rilis"
                        aria-describedby="tahun_rilis" placeholder="Masukan Tahun Rilis">
                </div>
                <div class="form-group">
                    <label for="id_kategori">Id Kategori</label>
                    <input type="text" name="id_kategori" class="form-control" id="id_kategori"
                        aria-describedby="id_kategori" placeholder="Masukan nama produk">
                </div>
                <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" id="nama_kategori"
                        aria-describedby="nama_kategori" placeholder="Masukan kategori produk">
                </div>
                <div class="form-group">
                    <label for="produser">Produser</label>
                    <input type="text" name="produser" class="form-control" id="produser" aria-describedby="produser"
                        placeholder="Masukan Produser">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection