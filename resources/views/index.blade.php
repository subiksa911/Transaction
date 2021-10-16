<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 CRUD Application - bishrulhaq.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card" style="margin-top: 20px;">
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">Transaksi Sederhana</h2>
                    </div>
                    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
                        <a class="btn btn-success " href="create"> Add Produk</a>
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
                            <th>Id Produk</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Kuantitas</th>
                            {{-- <th width="280px">More</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produk as $produk)
                        <tr>
                            
                                <td>{{ $produk->id }}</td>
                                <td>{{ $produk->nama }}</td>
                                <td>{{ $produk->id_kategori }}</td>
                                <td>{{ $produk->kuantitas }}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>

                {{-- <div class="alert alert-alert">Start Adding to the Database.</div> --}}

            </div>
        </div>
    </div>

</body>

</html>
