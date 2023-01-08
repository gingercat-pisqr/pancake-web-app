<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="rounded-5 shadow p-4 mt-4">
            <h3 class="fs-3 text-center"><strong>Menuju Ujian Akhir Semester 3</strong></h3>
            <h4 id="demo" class="text-center fs-4 my-3"></h4>
    
            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("Jan 30, 2023 00:00:00").getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("demo").innerHTML = days + "hari " + hours + "jam "
                + minutes + "menit " + seconds + "detik ";

                // If the count down is finished, write some text
                if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
                }
                }, 1000);
            </script>
        </div>    

        <div class="rounded-5 shadow mt-4 p-4 container">
            <h4 class="fs-4 text-center"><strong>RATA-RATA IPK ANGKATAN</strong></h4>
            <h1 class="fw-500 text-center" style="font-size:7rem"><strong>3,77</strong></h1>
            <p class="text-center">(Data terkumpul 129/159 per tanggal 6 Januari 2023)
            </p>
            <div class="row d-flex justify-content-evenly">
                <div class="col-sm-auto rounded-5 border border-1 shadow-sm py-3 mt-3 px-4">
                    <h5 class="fs-5 text-center"><strong>Data per Kuartil</strong></h5>
                    <div class="row text-center d-flex justify-content-between mt-3 mb-0">
                        <p class="col p-0 mb-0">Q1 = 3,70</p>
                        <p class="col p-0 mb-0 ms-3">Q2 = 3,80</p>
                        <p class="col p-0 mb-0 ms-3">Q3 = 3,87</p>
                    </div>
                    
                    <div class="mt-3">
                        <p class="text-break"><small class="text-muted">Q1 merepresentasikan nilai tengah dari 50% data di bawah median (Q2)</small></p>
                        <p class="text-break"><small class="text-muted">Q2 merepresentasikan median dari keseluruhan data</small></p>
                        <p class="text-break"><small class="text-muted">Q3 merepresentasikan nilai tengah dari 50% data di atas median (Q2)</small></p>
                    </div>
                </div>
                
                <div class="col-sm-auto rounded-5 border border-1 shadow-sm py-3 mt-3 px-4">
                    <h5 class="fs-5 text-center"><strong>Data Per Desil</strong></h5>
                    <div class="row text-center mt-3 mb-0">
                        <p class="col p-0 mb-0 ms-2">D1 = 3,60</p>
                        <p class="col p-0 mb-0 ms-2">D3 = 3,70</p>
                    </div>
                    <div class="row text-center mt-3 mb-0">
                        <p class="col p-0 mb- ms-2">D6 = 3,82</p>
                        <p class="col p-0 mb-0 ms-2">D9 = 3,94</p>
                    </div>
                    <div class="mt-3">
                        <p class="text-break"><small class="text-muted">D1 merepresentasikan nilai tengah dari 10% data terbawah</small></p>
                        <p class="text-break"><small class="text-muted">D3 merepresentasikan nilai tengah dari 30%-40% data terbawah</small></p>
                        <p class="text-break"><small class="text-muted">D6 merepresentasikan nilai tengah dari 60%-70% data teratas</small></p>
                        <p class="text-break"><small class="text-muted">D9 merepresentasikan nilai tengah dari 90%-100% data teratas</small></p>
                    </div>
                </div>
                
                <a href="http://staner.id/PendataanMKNS3" class="text-center mt-3">Belum isi form?</a>
            </div>
        </div>

        <div class="rounded-5 shadow mt-4 p-4 container">
            <h3 class="fs-3 mb-4 text-center"><strong>Mata Kuliah</strong></h3>

            <div class="flex row row-cols-auto justify-content-md-evenly">
                <a class="btn btn-light rounded-4 border border-1 shadow-sm" href="{{ route('ekonomimakro') }}" style="width: 10rem;">
                    <img src="{{ asset('images/icon/matakuliah/makro.png') }}" width="30" height="30" alt="..." class="my-3 mx-auto d-block"/>
                    <h5 class="fs-5 mb-2 text-center text-break"><strong>Ekonomi Makro</strong></h5>
                </a>
            
                <a class="btn btn-light rounded-4 border border-1 shadow-sm" href="{{ route('perpajakan') }}" style="width: 10rem;">
                    <img src="{{ asset('images/icon/matakuliah/pajak.png') }}" width="30" height="30" alt="..." class="my-3 mx-auto d-block"/>
                    <h5 class="fs-5 mb-2 text-center text-break"><strong>Perpajakan</strong></h5>
                </a>
            
                <a class="btn btn-light rounded-4 border border-1 shadow-sm" href="{{ route('manajemenkeuangan') }}" style="width: 10rem;">
                    <img src="{{ asset('images/icon/matakuliah/makro.png') }}" width="30" height="30" alt="..." class="my-3 mx-auto d-block"/>
                    <h5 class="fs-5 mb-2 text-center text-break"><strong>Manajemen Keuangan</strong></h5>
                </a>
            
                <a class="btn btn-light rounded-4 border border-1 shadow-sm" href="{{ route('statistikaterapan') }}" style="width: 10rem;">
                    <img src="{{ asset('images/icon/matakuliah/makro.png') }}" width="30" height="30" alt="..." class="my-3 mx-auto d-block"/>
                    <h5 class="fs-5 mb-2 text-center text-break"><strong>Statistika Terapan</strong></h5>
                </a>
            </div>

            <div class="flex row row-cols-auto justify-content-md-evenly mt-sm-3">
                <a class="btn btn-light rounded-4 border border-1 shadow-sm" href="{{ route('keuanganpublik') }}" style="width: 10rem;">
                    <img src="{{ asset('images/icon/matakuliah/makro.png') }}" width="30" height="30" alt="..." class="my-3 mx-auto d-block"/>
                    <h5 class="fs-5 mb-2 text-center text-break"><strong>Keuangan Publik</strong></h5>
                </a>
            
                <a class="btn btn-light rounded-4 border border-1 shadow-sm" href="{{ route('manajemenstrategi') }}" style="width: 10rem;">
                    <img src="{{ asset('images/icon/matakuliah/pajak.png') }}" width="30" height="30" alt="..." class="my-3 mx-auto d-block"/>
                    <h5 class="fs-5 mb-2 text-center text-break"><strong>Manajemen Strategi</strong></h5>
                </a>
            
                <a class="btn btn-light rounded-4 border border-1 shadow-sm" href="{{ route('akuntansibiaya') }}" style="width: 10rem;">
                    <img src="{{ asset('images/icon/matakuliah/makro.png') }}" width="30" height="30" alt="..." class="my-3 mx-auto d-block"/>
                    <h5 class="fs-5 mb-2 text-center text-break"><strong>Akuntansi Biaya</strong></h5>
                </a>
            
                <a class="btn btn-light rounded-4 border border-1 shadow-sm" href="{{ route('penganggaransektorpublik') }}" style="width: 10rem;">
                    <img src="{{ asset('images/icon/matakuliah/makro.png') }}" width="30" height="30" alt="..." class="my-3 mx-auto d-block"/>
                    <h5 class="fs-5 mb-2 text-center text-break"><strong>Penganggaran Sektor Publik</strong></h5>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>