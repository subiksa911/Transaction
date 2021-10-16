<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 CRUD Application - bishrulhaq.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container">
        <div class="card" style="margin-top: 20px;">
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">Tambah Produk</h2>
                    </div>
                </div>
                <div class="card" style="margin-top: 20px;">

                    <form action="{{ route('tambah') }}" method="POST">
                        {{ csrf_field() }}
        
                        
                        <div class="form-group">
                            <label for="id">Id Produk</label>
                            <input type="number" name="id" class="form-control" id="id" aria-describedby="id_produk"
                                placeholder="Masukan id produk">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama"
                                placeholder="Masukan nama produk">
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
                            <label for="kuantitas">Kuantitas</label>
                            <input type="number" name="kuantitas" class="form-control" id="kuantitas"
                                aria-describedby="kuantitas" placeholder="Masukan kuantitas produk">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
