@extends('layouts.homelayouts')

@section('konten')

<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium" style="font-family: 'Grandstander', sans-serif; font-size: 55px; color: #000;">Tampil Lebih <span style="color: #21B7E2;">Percaya Diri</span></h1>
        <br>
        <p class="mb-8 leading-relaxed" style="font-family: 'Poppins', sans-serif; font-size: 18px;">Tidak punya waktu untuk mencuci? Serahkan ke Ajeng Laundry saja!
            Kamu bisa melanjutkan aktivitasmu di luar rumah tanpa khawatir cucian menumpuk di rumah, kos atau di kontrakan.</p>
        <div class="flex justify-center">
          <button class="inline-flex text-black bg-blue-300 border-0 py-3 px-8 focus:outline-none hover:bg-blue-400 rounded-full text-lg font-semibold" style="font-family: 'Poppins', sans-serif; font-size: 16px;">Pelayanan seperti Kilat, Bersih seperti Bayi</button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/fl.png') }}">
      </div>
    </div>
</section>
@endsection
