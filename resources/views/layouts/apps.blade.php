<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Isi bagian head -->
    <title>Your Laundry Service</title>
    <!-- Tambahkan CSS atau CDN yang diperlukan -->
    <style>
        /* CSS untuk navbar */
        nav {
            background-color: #333;
            color: #fff;
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h1 {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif; /* Ganti dengan font yang Anda sukai */
            font-size: 24px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-family: 'Arial', sans-serif; /* Ganti dengan font yang Anda sukai */
            font-size: 16px;
        }

        .login {
            margin-left: 20px;
        }

        .login a {
            color: #fff;
            text-decoration: none;
            font-family: 'Arial', sans-serif; /* Ganti dengan font yang Anda sukai */
            font-size: 16px;
            background-color: #ff0000; /* Warna latar belakang merah */
            padding: 10px 20px; /* Ubah sesuai kebutuhan */
            border-radius: 5px; /* Bentuk sudut */
        }

        .login a:hover {
            background-color: #cc0000; /* Warna latar belakang merah saat hover */
        }
    </style>
</head>
<body>

    <!-- Bagian header, navigasi, atau bagian lainnya -->
    <header>
        <nav>
            <h1>Laundry</h1> <!-- Judul Laundry -->
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#system">System</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="login"><a href="{{ route('login') }}">Join Laundry</a></li>
            </ul>
        </nav>
    </header>

    <!-- Bagian konten dinamis -->
    @yield('content')

    <!-- Bagian footer, atau bagian lainnya -->

</body>
</html>
