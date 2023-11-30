<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Isi bagian head -->
    <title>Your Laundry Service</title>
    <!-- Tambahkan CSS atau CDN yang diperlukan -->
    {{-- @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap'); --}}
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body>

    <!-- Bagian header, navigasi, atau bagian lainnya -->
    <header>
            <a href="#" class="logo">Laundry</a>
            <ul class="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">System</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Contact</a></li>
                <li class="login"><a href="{{ route('login') }}">Join Laundry</a></li>
            </ul>
    </header>

    
    <!-- Bagian konten dinamis -->
    @yield('content')

    <!-- Bagian footer, atau bagian lainnya -->
    <!-- Scripts -->
<script src="{{ asset('js/style.js') }}"></script>

</body>
</html>
