<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="{{ route('home') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" style="font-family: 'Grandstander', sans-serif; font-size: 35px; color: #21B7E2;">
            <img class="w-10 h-10 object-cover object-center rounded" alt="hero" src="{{ asset('img/lg2.png') }}">
            <span class="ml-3 text-3xl font-normal leading-10" style="letter-spacing: 2px;">Ajeng Laundry</span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center" style="font-family: 'Inter Regular', sans-serif; font-size: 17px;">
            <a href="{{ route('home') }}" class="mr-5 hover:text-gray-900">Beranda</a>
            <a href="{{ route('about') }}" class="mr-5 hover:text-gray-900">Tentang Kami</a>
            <a href="{{ route('system') }}" class="mr-5 hover:text-gray-900">System</a>
            <a href="{{ route('paket') }}" class="mr-5 hover:text-gray-900">Paket</a>
            <a href="{{ route('service') }}" class="mr-5 hover:text-gray-900">Service</a>
            {{-- <a href="{{ route('testimonials') }}" class="mr-5 hover:text-gray-900">Testimoni</a> --}}
            <a href="{{ route('contacts') }}" class="mr-5 hover:text-gray-900">Kontak Kami</a>
        </nav>
        <button class="inline-flex text-white items-center bg-blue-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-500 rounded text-base mt-4 md:mt-0 text-black" style="font-family: 'Inter Regular', sans-serif; font-size: 17px;">
            <a href="{{ route('login') }}">Masuk</a>
        </button>
    </div>
</header>
