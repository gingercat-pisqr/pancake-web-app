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

        <div class="rounded-5 shadow mt-4 p-4">
            <h4 class="fs-4"><strong>Papan Informasi</strong></h4>
            <p>Rata-rata IPK angkatan = 3,77</p>
        </div>
    </div>
</x-app-layout>