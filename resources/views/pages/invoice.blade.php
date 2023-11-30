
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
            background-image: url('{{ asset('img/back.jpeg') }}');
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #333;
            margin-top: 50px;
        }
        .container {
            max-width: 1400px;
            margin-top: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 30px;
        }
        table {
            width: 100%;
        }
        table td {
            padding: 8px 0;
        }
        .btn-back {
            margin-bottom: 20px;
        }
    </style>
</head>
<body style="background-image: url('{{ asset('img/back.jpeg') }}'); background-size: cover;">
    <div class="container">
        <h1 class="my-3" style="color: white; font-family: 'Grandstander', sans-serif;">INVOICE</h1>
        <a href="{{ route('home') }}" class="btn btn-secondary mb-3">&times; Beranda</a>
        <div class="card" style="width: 28rem;">
            <div class="card-body">
                <h5 class="card-title" style="margin-bottom: 10px; font-size: 30px">Detail Pesanan</h5>
                <hr style="border-top: 1px solid #000;">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>: {{ $order->name }}</td>
                    </tr>
                    <tr>
                        <td>No Hp</td>
                        <td>: {{ $order->phone }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: {{ $order->address }}</td>
                    </tr>
                    <tr>
                        <td>Berat per kg</td>
                        <td>: {{ $order->qty }}</td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>: {{ $order->total_price }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>: {{ $order->status }}</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
