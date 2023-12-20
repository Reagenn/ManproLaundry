@extends('layouts.homelayouts')

@section('konten')
<section class="text-gray-900 body-font overflow-hidden" style="background-image: url('{{ asset('img/upsys.jpg') }}'); background-size: cover;" >
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900" style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #000;">Pilihan Paket Kami</h1>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
            <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden" style="background-color: rgba(255, 255, 255, 0.8);">
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Paket Dasar</h2>
            <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                <span>Rp 4.000</span>
                <span class="text-lg ml-1 font-normal text-gray-500">/kg</span>
              </h1>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Pakaian: Biasa.
            </p>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Cuci dengan metode standar.
            </p>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Lipat dan rapihkan.
            </p>
            <p class="flex items-center text-black mb-6">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Pengharuman ringan.
            </p>
            <button onclick="window.location.href='{{ route('service') }}'" class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-900 rounded justify-center">Choose

            </button>
          </div>
        </div>
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
            <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden" style="background-color: rgba(255, 255, 255, 0.8);">
            <span class="bg-indigo-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">Paling laris</span>
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Paket Standar</h2>
            <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span>Rp 7.000</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/kg</span>
            </h1>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Pakaian:  Biasa, Delikat.
            </p>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Cuci dengan deterjen berkualitas.
            </p>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Kering dengan kontrol suhu.
            </p>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Lipat dan setrika pakaian delikat.
            </p>
            <p class="flex items-center text-black mb-6">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Pengharuman Moderat
            </p>
            <button onclick="window.location.href='{{ route('service') }}'" class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-900 rounded justify-center">Choose

            </button>
          </div>
        </div>
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
            <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden" style="background-color: rgba(255, 255, 255, 0.8);">
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Paket Premium</h2>
            <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span>Rp10.000</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/kg</span>
            </h1>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Pakaian:  Semua jenis, termasuk delikat.
            </p>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Cuci dengan deterjen premium.
            </p>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Kering dengan perlakuan khusus.
            </p>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Lipat, setrika, dan perhatian ekstra untuk detail.
            </p>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Pengharuman intens.
            </p>
            <p class="flex items-center text-black mb-6">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Pengecekan dan perbaikan kecil (jika diperlukan).
            </p>
            <button onclick="window.location.href='{{ route('service') }}'" class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-900 rounded justify-center">Choose

            </button>
          </div>
        </div>
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
            <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden" style="background-color: rgba(255, 255, 255, 0.8);">
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Paket Super</h2>
            <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span>Rp15.000</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/kg</span>
            </h1>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Pakaian:  Semua jenis, bahkan yang sangat sensitif.
            </p>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Cuci dengan deterjen premium dan perlakuan khusus.
            </p>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Kering dengan suhu yang tepat.
            </p>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Lipat, setrika, dan penanganan pakaian sangat sensitif.
            </p>
            <p class="flex items-center text-black mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Pengharuman pakaian yang sangat tahan lama
            </p>
            <p class="flex items-center text-black mb-6">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-black text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Pengecekan, perbaikan kecil, dan penataan ulang (jika diperlukan).
            </p>
            <button onclick="window.location.href='{{ route('service') }}'" class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-900 rounded justify-center">Choose

            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
