@extends('layouts.homelayouts')

@section('konten')
<section class="text-gray-600 body-font" style="background-color: #D0F6FF;">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #000;">Cara Kerja Ajeng Laundry</h1>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/4 sm:w-1/2 p-4">
          <div class="flex relative" style="height: 400px;">
            {{-- <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded-full" src="{{ asset('img/step1.png') }}">
            <div class="absolute inset-0 bg-black opacity-50 rounded-full"></div> --}}
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" style="height: 400px;" src="{{ asset('img/step1.png') }}">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <p class="leading-relaxed " style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #000;">Cucian anda akan kami jemput dengan waktu yang telah ditentukan.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/4 sm:w-1/2 p-4">
          <div class="flex relative" style="height: 400px;">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" style="height: 430px;" src="{{ asset('img/step2.png') }}">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <p class="leading-relaxed" style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #000;">Kami mulai mencuci Pakaian anda dengan bersih.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/4 sm:w-1/2 p-4">
          <div class="flex relative" style="height: 400px;">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" style="height: 430px;" src="{{ asset('img/step3.png') }}">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <p class="leading-relaxed" style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #000;">Kami merapikan Pakaian anda terlebih dahulu dengan cara menyetrika.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/4 sm:w-1/2 p-4">
          <div class="flex relative" style="height: 400px;">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" style="height: 405px;" src="{{ asset('img/step4.png') }}">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100" >
              <p class="leading-relaxed" style="font-family: 'Poppins', sans-serif; font-size: 20px; color: #000;">Kami mengantarkan pakaian hasil Laundry ke alamat tujuan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
