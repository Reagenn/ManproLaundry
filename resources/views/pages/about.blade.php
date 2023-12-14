@extends('layouts.homelayouts')
@section('konten')
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"  style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #000;">LAUNDRY ANTAR JEMPUT
          <br class="hidden lg:inline-block">SEMARANG
        </h1>
        <br>
        <p class="mb-8 leading-relaxed" style="font-family: 'Poppins', sans-serif; font-size: 16px;">Ajeng Laundry adalah perusahaan jasa pencucian konvensional berlokasi di Jalan Randusari
            Pos 2, Kec. Semarang Selatan, Kota Semarang. Ajeng Laundry Menjadi Pelopor Layanan Laundry Profesional - Kami  Memberikan Pelayanan Terbaik untuk Membuat Hari Anda Lebih Bersinar.  Bersama Kami, Kebersihan dan Kepuasan Pelanggan Adalah Prioritas Utama.
            Nikmati laundry kiloan paling aman, proses cepat, hasil maksimal bersama kami !
            <br>
            <br class="hidden lg:inline-block">Saat ini, kami melayani laundry pada wilayah  Semarang bagian Tengah saja. Jika nantinya diperluas akan kami update melalui website Ajeng Laundry.</p>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/deli.png') }}">
      </div>
    </div>
</section>
<section class="text-gray-600 body-font" style="background-color: #AECDFB;">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" style="font-family: 'Poppins', sans-serif; font-size: 40px; color: #000;">LAUNDRY ANTAR JEMPUT SEMARANG</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base" style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #000;" >Waktu Anda sangat berharga, jangan sampai karena nggak sempet cuci pakaian, kegiatan jadi berantakan. Saatnya pakai Laundry Antar Jemput Semarang Kiloan sekarang juga!</p>
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                        <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/mesin1.png') }}">
                    </div>
                    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white-900" style="font-family: 'Poppins', sans-serif; font-size: 30px; color: #000;">Ajeng Laundry :
                            <br class="hidden lg:inline-block">
                        </h1>
                        <p class="mb-8 leading-relaxed">
                            <button style="width: 30px; height: 30px; background-color: white; border: 1px solid #000; border-radius: 5px; display: inline-block;">
                                &gt;
                            </button>
                            <span style="font-family: 'Poppins', sans-serif; font-size: 25px; color: #000;"> Digitalisasi Proses</span><br><br>
                            <button style="width: 30px; height: 30px; background-color: white; border: 1px solid #000; border-radius: 5px; display: inline-block;">
                                &gt;
                            </button>
                            <span style="font-family: 'Poppins', sans-serif; font-size: 25px; color: #000;"> Jaminan Higienis</span><br><br>
                            <button style="width: 30px; height: 30px; background-color: white; border: 1px solid #000; border-radius: 5px; display: inline-block;">
                                &gt;
                            </button>
                            <span style="font-family: 'Poppins', sans-serif; font-size: 25px; color: #000;"> Pembayaran Mudah</span>
                        </p>

                    </div>
                </div>
            </div>
        </div>
</section>

    @endsection


