<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{ config('midtrans.client.key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
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
              <h5 class="card-title" style="font-size: 30px">Detail Pesanan</h5>
              <table>
                <tr>
                    <td>Nama</td>
                    <td> : {{ $order->name }}</td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td> : {{ $order->phone }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td> : {{ $order->address }}</td>
                </tr>
                <tr>
                    <td>Berat per kg</td>
                    <td> : {{ $order->qty }}</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td> : {{ $order->total_price }}</td>
                </tr>
            </table>
            <button class="btn btn-primary mt-3" id="pay-button">Bayar Sekarang</button>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

            <script type="text/javascript">
                // For example trigger on button clicked, or any time you need
                var payButton = document.getElementById('pay-button');
                payButton.addEventListener('click', function () {
                  // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                  window.snap.pay('{{$snapToken}}', {
                    onSuccess: function(result){
                      /* You may add your own implementation here */
                    //   alert("payment success!"); console.log(result);
                    window.location.href = '/invoice/{{ $order->id }}'; console.log(result);
                    },
                    onPending: function(result){
                      /* You may add your own implementation here */
                      alert("wating your payment!"); console.log(result);
                    },
                    onError: function(result){
                      /* You may add your own implementation here */
                      alert("payment failed!"); console.log(result);
                    },
                    onClose: function(){
                      /* You may add your own implementation here */
                      alert('you closed the popup without finishing the payment');
                    }
                  })
                });
              </script>
    </body>
</html>


