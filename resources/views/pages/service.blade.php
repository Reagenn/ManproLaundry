
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajeng Laundry | Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
</head>
<body style="background-image: url('{{ asset('img/back.jpeg') }}'); background-size: cover;">
    <div class="container">
        <h1 class="my-3" style="color: white; font-family: 'Grandstander', sans-serif;">Servis Ajeng Laundry</h1><a href="{{ route('home') }}" class="btn btn-secondary mb-3">&times; Beranda</a>
        <div class="card" style="width: 28rem;">
            <img src="{{ asset('img/lk.png') }}" class="card-img-top" alt="...">
            <div class="card-body" >
              <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #000;">Laundry Kiloan</h5>
              <p class="card-text" style="font-family: 'Poppins', sans-serif; font-size: 17px;">Untuk harga paket laundry kiloan per 1kg = Rp7000</p>
              <form action="/checkout" method="POST" >
                @csrf
                <div class="mb-3">
                    <label for="qty" class="form-label">Berat Per KG</label>
                    <input type="number" name="qty" class="form-control" id="qty" placeholder="masukkan berat laundry anda">
                 </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Pelanggan</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="masukkan nama anda">
                 </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">No Telp</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="masukkan no hp anda">
                 </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea name="address" class="form-control" id="address" rows="3" placeholder="masukkan alamat anda dengan benar!"></textarea>
                </div>

                  <button type="submit" class="btn btn-primary">Checkout</button>
              </form>
            </div>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
