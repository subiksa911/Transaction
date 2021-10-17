@extends('template')
@section('title','Creaate Data Film')
@section('container')
<div class="card" style="margin-top: 20px;">
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-left">TRANSACTION APPLICATION</h2>
            </div>
            <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
                <a class="btn btn-info float-left" href="create"> Add Film</a>
            </div>
        </div>

        @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id Film</th>
                    <th>Judul Film</th>
                    <th>Tahun Rilis</th>
                    <th>Kategori</th>
                    <th>Produser</th>
                    {{-- <th width="280px">More</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($film as $flm)
                <tr>

                    <td>{{ $flm->id }}</td>
                    <td>{{ $flm->judul_film }}</td>
                    <td>{{ $flm->tahun_rilis }}</td>
                    <td>{{ $flm->id_kategori }}</td>
                    <td>{{ $flm->produser }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>

        {{-- <div class="alert alert-alert">Start Adding to the Database.</div> --}}

    </div>
</div>
@endsection