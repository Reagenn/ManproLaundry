
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajeng Laundry | Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <style>
        body {
            background-image: url('{{ asset('img/gmb.png') }}');
            background-size: cover;
        }

        .container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .custom-home-link {
            position: absolute;
            top: 30px; /* Adjust the value to move it slightly down */
            right: 20px; /* Adjust the value to move it slightly from the right */
            /* Other custom styles can be added here */
        }
    </style>
</head>
<body style="background-image: url('{{ asset('img/gmb.png') }}'); background-size: cover;">
    <div class="container">
        <a href="{{ route('home') }}" class="btn btn-secondary mb-3 custom-home-link" style="background-color: #1678F3;">&times; Beranda</a>
        <h1 class="my-3" style="color: #000; font-family: 'Grandstander', sans-serif;">Servis Ajeng Laundry</h1>
        <div class="card" style="width: 28rem;">
            <img src="{{ asset('img/lk1.png') }}" class="card-img-top" alt="...">
            <div class="card-body" >
              <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #000;">Laundry Kiloan</h5>
              <p class="card-text" style="font-family: 'Poppins', sans-serif; font-size: 17px;"></p>
              <form action="/checkout" method="POST" >
                @csrf
                <div class="col-lg-6 col-lg-offset-3 mb-3">
                    <label for="paket">Pilih Paket Laundry</label>
                    <select name="paket" id="paket" class="form-control" required>
                        <option value="">- Pilih -</option>
                        <option value="paketdasar">Paket Dasar Rp4.000</option>
                        <option value="paketstandar">Paket Standar Rp7.000</option>
                        <option value="paketpremium">Paket Premium Rp10.000</option>
                        <option value="paketsuper">Paket Super Rp15.000</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label">Berat Per kg</label>
                    <input type="number" step="0.1" name="qty" class="form-control" id="qty" placeholder="masukkan berat laundry anda" required>
                 </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Pelanggan</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="masukkan nama anda" required>
                 </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">No Telp</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="masukkan no hp anda" required>
                 </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea name="address" class="form-control" id="address" rows="3" placeholder="masukkan alamat lengkap anda" required></textarea>
                </div>

                  <button type="submit" class="btn btn-primary">Checkout</button>
              </form>
            </div>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
