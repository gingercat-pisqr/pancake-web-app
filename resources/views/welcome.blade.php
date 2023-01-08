<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Judul -->
        <title>Selamat Datang - Pancake</title>

        <!-- Ikon Kepala -->
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
            <div class="collapse show ms-" id="navbarToggleExternalContent">
                <div class="bg-white p-4">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="Beranda" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="Beranda" href="#Tentang">Tentang</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Produk
                            </a>
                            <ul class="dropdown-menu border-0">
                                <li><a class="dropdown-item" href="#Suplemen">Suplemen</a></li>
                                <li><a class="dropdown-item" href="#Tentir">Tentir</a></li>
                                <li><a class="dropdown-item" href="#Video">Video</a></li>
                                <li><a class="dropdown-item" href="#Cheatsheets">Cheatsheets</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="Tim" href="#Tim">Tim</a>
                        </li>
                            
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item nav-link">
                                    <a href="{{ route('login') }}" class="btn btn-primary">Masuk</a>
                                </li>

                                @if (Route::has('register'))
                                    <li class="nav-item nav-link">
                                        <a href="{{ route('register') }}" class="btn btn-outline-primary">Daftar</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>

            <div class="container">
                <a class="navbar-brand m-0 row" href="#">
                    <img src="{{ asset('images/icon/logo.svg') }}" class="col-auto" width="30px" height="30px"/>
                    <p class="mb-0 align-items-center flex justify-center col p-0">Pancake</p>
                </a>

                <div class="flex justify-content-end">
                    <div class="collapse navbar-collapse sm:float-right sm:fixed" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex align-items-center">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="Beranda" href="#">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="Beranda" href="#Tentang">Tentang</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Produk
                                </a>
                                <ul class="dropdown-menu border-0 shadow-sm">
                                    <li><a class="dropdown-item" href="#Suplemen">Suplemen</a></li>
                                    <li><a class="dropdown-item" href="#Tentir">Tentir</a></li>
                                    <li><a class="dropdown-item" href="#Video">Video</a></li>
                                    <li><a class="dropdown-item" href="#Cheatsheets">Cheatsheets</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="Tim" href="#Tim">Tim</a>
                            </li>
                                
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <a href="{{ url('/dashboard') }}" class="nav-link dark:text-gray-500">Dashboard</a>
                                    </li>
                                @else
                                    <li class="nav-item nav-link">
                                        <a href="{{ route('login') }}" class="btn btn-primary dark:text-gray-500">Masuk</a>
                                    </li>
    
                                    @if (Route::has('register'))
                                        <li class="nav-item nav-link">
                                            <a href="{{ route('register') }}" class="btn btn-outline-primary dark:text-gray-500 ">Daftar</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                </div>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
            
        <main>
            <div id='Beranda' aria-label="Beranda" class='container py-5'>
                <div class='row'>
                <div class='col-sm'>
                    <h1><strong>Masuk bareng, lulus bareng.</strong></h1>
                    <h2>Kami bantu wujudkan mimpi-mimpi kita semua</h2>
                    <a href='#Tentang' class="btn btn-primary px-5 w-fit fw-semibold my-5 ">Mulai</a>
                </div>
                <div class='col text-center'>
                    <img src="{{ asset('images/icon/logo.svg') }}" width='300rem' class='mx-auto d-none d-md-block'/>
                </div>
                </div>
            </div>

            <div id='Tentang' aria-label="Tentang" class='bg-light py-5'>
                <div class='container'>
                    <div class='row'>
                        <div class='col text-center'>
                            <img src="{{ asset('images/teams.png') }}" width='100%'/>
                        </div>

                        <div class='col-lg'>
                            <div class='row h-100'>
                                <h2 class='text-center py-5'><strong>Tentang</strong></h2>
                                <p class='text-center'>Pancake adalah kumpulan orang-orang yang peduli terhadap masalah yang dialami mahasiswa PKN STAN.Kami dibentuk dengan rasa cinta dan kepedulian terhadap permasalahan yang ada. Selain itu, kami merupakan bagian dari organisasi mahasiswa Program Studi DIV Manajemen Keuangan Negara. Kami harap kehadiran kami dapat membantu teman-teman angkatan mencapai mimpi-mimpinya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id='Produk' class='container py-5'>
                <div class='row py-lg-5'>
                    <h2 class='text-center'><strong>Produk</strong></h2>
                    <p class='text-center'>Produk-produk kami berkualitas dan dapat dipercaya</p>
                </div>

                <div class='py-5'>
                    <div id='Suplemen' class='row'>
                        <div class='col-lg py-5'>
                            <h3 class='text-center pb-5'><strong>Suplemen</strong></h3>
                            <p class='text-center'>Suplemen adalah penyediaan bahan belajar dan latihan soal untuk seluruh mata pelajaran dalam periode perkuliahan yang sedang berlangsung.</p>
                        </div>
                        
                        <div class='col align-items-center flex justify-center'>
                            <svg width="275" height="263" viewBox="0 0 275 263" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_91_4)">
                                    <rect x="121" width="150" height="200" rx="10" fill="white"/>
                                </g>
                            
                                <path d="M129 113C129 110.239 131.239 108 134 108H191C193.761 108 196 110.239 196 113C196 115.761 193.761 118 191 118H134C131.239 118 129 115.761 129 113Z" fill="#D9D9D9"/>
                            
                                <path d="M129 126C129 123.239 131.239 121 134 121H191C193.761 121 196 123.239 196 126C196 128.761 193.761 131 191 131H134C131.239 131 129 128.761 129 126Z" fill="#D9D9D9"/>
                            
                                <path d="M129 139C129 136.239 131.239 134 134 134H191C193.761 134 196 136.239 196 139C196 141.761 193.761 144 191 144H134C131.239 144 129 141.761 129 139Z" fill="#D9D9D9"/>
                            
                                <path d="M121 10C121 4.47715 125.477 0 131 0H261C266.523 0 271 4.47715 271 10V30H121V10Z" fill="#82CD47"/>
                            
                                <path d="M151 87C151 84.2386 153.239 82 156 82H191C193.761 82 196 84.2386 196 87C196 89.7614 193.761 92 191 92H156C153.239 92 151 89.7614 151 87Z" fill="#D9D9D9"/>
                            
                                <path d="M171 50C171 47.2386 173.239 45 176 45H216C218.761 45 221 47.2386 221 50C221 52.7614 218.761 55 216 55H176C173.239 55 171 52.7614 171 50Z" fill="#D9D9D9"/>
                            
                                <path d="M212 92C212 86.4772 216.477 82 222 82H252C257.523 82 262 86.4772 262 92V134C262 139.523 257.523 144 252 144H222C216.477 144 212 139.523 212 134V92Z" fill="#D9D9D9"/>
                            
                                <path d="M129 100C129 97.2386 131.239 95 134 95H191C193.761 95 196 97.2386 196 100C196 102.761 193.761 105 191 105H134C131.239 105 129 102.761 129 100Z" fill="#D9D9D9"/>
                            
                                <g filter="url(#filter1_d_91_4)">
                                    <rect x="4" y="55" width="150" height="200" rx="10" fill="white"/>
                                </g>
                            
                                <path d="M12 168C12 165.239 14.2386 163 17 163H74C76.7614 163 79 165.239 79 168C79 170.761 76.7614 173 74 173H17C14.2386 173 12 170.761 12 168Z" fill="#D9D9D9"/>
                            
                                <path d="M12 181C12 178.239 14.2386 176 17 176H74C76.7614 176 79 178.239 79 181C79 183.761 76.7614 186 74 186H17C14.2386 186 12 183.761 12 181Z" fill="#D9D9D9"/>
                            
                                <path d="M12 194C12 191.239 14.2386 189 17 189H74C76.7614 189 79 191.239 79 194C79 196.761 76.7614 199 74 199H17C14.2386 199 12 196.761 12 194Z" fill="#D9D9D9"/>
                            
                                <path d="M4 65C4 59.4772 8.47715 55 14 55H144C149.523 55 154 59.4772 154 65V85H4V65Z" fill="#1865F2"/>
                            
                                <path d="M34 142C34 139.239 36.2386 137 39 137H74C76.7614 137 79 139.239 79 142C79 144.761 76.7614 147 74 147H39C36.2386 147 34 144.761 34 142Z" fill="#D9D9D9"/>
                            
                                <path d="M54 105C54 102.239 56.2386 100 59 100H99C101.761 100 104 102.239 104 105C104 107.761 101.761 110 99 110H59C56.2386 110 54 107.761 54 105Z" fill="#D9D9D9"/>
                            
                                <path d="M95 147C95 141.477 99.4772 137 105 137H135C140.523 137 145 141.477 145 147V189C145 194.523 140.523 199 135 199H105C99.4772 199 95 194.523 95 189V147Z" fill="#D9D9D9"/>
                            
                                <path d="M12 155C12 152.239 14.2386 150 17 150H74C76.7614 150 79 152.239 79 155C79 157.761 76.7614 160 74 160H17C14.2386 160 12 157.761 12 155Z" fill="#D9D9D9"/>
                            
                                <defs>
                                    <filter id="filter0_d_91_4" x="117" y="0" width="158" height="208" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                        <feOffset dy="4"/>
                                        <feGaussianBlur stdDeviation="2"/>
                                        <feComposite in2="hardAlpha" operator="out"/>
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_91_4"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_91_4" result="shape"/>
                                    </filter>
                            
                                    <filter id="filter1_d_91_4" x="0" y="55" width="158" height="208" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                        <feOffset dy="4"/>
                                        <feGaussianBlur stdDeviation="2"/>
                                        <feComposite in2="hardAlpha" operator="out"/>
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_91_4"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_91_4" result="shape"/>
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>

                <div id='Tentir' class='row py-5'>
                    <h3 class='text-center pb-5'><strong>Tentir</strong></h3>
                    <div class='col-sm align-items-center flex justify-center' >
                        <svg width="236" height="211" viewBox="0 0 236 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_12_44)">
                                <circle cx="118" cy="116" r="50" fill="#F0FF42"/>
                                
                                <path d="M104 194C104 189.029 108.029 185 113 185H122C126.971 185 131 189.029 131 194C131 198.971 126.971 203 122 203H113C108.029 203 104 198.971 104 194Z" fill="#555555"/>
                                
                                <path d="M98 176C98 170.477 102.477 166 108 166H128C133.523 166 138 170.477 138 176V182C138 187.523 133.523 192 128 192H108C102.477 192 98 187.523 98 182V176Z" fill="#D9D9D9"/>
                                
                                <path d="M90 157H146V164C146 169.523 141.523 174 136 174H100C94.4772 174 90 169.523 90 164V157Z" fill="#F0FF42"/>
                                
                                <g filter="url(#filter1_d_12_44)">
                                    <rect x="164" y="66.3553" width="50" height="5" rx="2.5" transform="rotate(-45 164 66.3553)" fill="#F0FF42"/>
                                </g>
                                
                                <g filter="url(#filter2_d_12_44)">
                                    <rect x="182" y="114" width="50" height="5" rx="2.5" fill="#F0FF42"/>
                                </g>
                                
                                <g filter="url(#filter3_d_12_44)">
                                    <rect x="4" y="112" width="50" height="5" rx="2.5" fill="#F0FF42"/>
                                </g>
                                
                                <g filter="url(#filter4_d_12_44)">
                                    <rect x="115" y="50" width="50" height="5" rx="2.5" transform="rotate(-90 115 50)" fill="#F0FF42"/>
                                </g>
                                
                                <g filter="url(#filter5_d_12_44)">
                                    <rect x="68.3553" y="65.8909" width="50" height="5" rx="2.5" transform="rotate(-135 68.3553 65.8909)" fill="#F0FF42"/>
                                </g>
                            </g>
                            
                            <defs>
                                <filter id="filter0_d_12_44" x="0" y="0" width="236" height="211" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_44"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_44" result="shape"/>
                                </filter>
                                
                                <filter id="filter1_d_12_44" x="161.036" y="32.0355" width="44.8198" height="44.8198" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_44"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_44" result="shape"/>
                                </filter>
                                
                                <filter id="filter2_d_12_44" x="178" y="114" width="58" height="13" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_44"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_44" result="shape"/>
                                </filter>
                                
                                <filter id="filter3_d_12_44" x="0" y="112" width="58" height="13" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_44"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_44" result="shape"/>
                                </filter>
                                
                                <filter id="filter4_d_12_44" x="111" y="0" width="13" height="58" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_44"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_44" result="shape"/>
                                </filter>
                                
                                <filter id="filter5_d_12_44" x="30.0356" y="28.0355" width="44.8198" height="44.8198" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_44"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_44" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>

                    <div class='text-center col-sm py-4'>
                        <p class='text-center'>Tentir adalah program tutor sebaya yang dilaksanakan oleh dan untuk teman-teman angkatan.</p>
                    </div>
                </div>

                <div id='Video' class='row py-5'>
                    <div class='col-lg'>
                        <h3 class='text-center pb-5'><strong>Video</strong></h3>
                        <p class='text-center'>Kumpulan video pembelajaran yang dibuat sesederhana mungkin agar mudah dipahami</p>
                    </div>

                    <div class='col-lg align-items-center flex justify-center'>
                        <svg width="258" height="143" viewBox="0 0 258 143" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_12_79)">
                                <rect x="4" width="250" height="135" rx="10" fill="#D9D9D9"/>
                            </g>
                            
                            <g filter="url(#filter1_d_12_79)">
                                <path d="M146.5 63.6699C149.833 65.5944 149.833 70.4056 146.5 72.3301L124 85.3205C120.667 87.245 116.5 84.8394 116.5 80.9904V55.0096C116.5 51.1606 120.667 48.755 124 50.6795L146.5 63.6699Z" fill="#FF6464"/>
                            </g>
                            
                            <rect x="29" y="117" width="200" height="5" rx="2.5" fill="white"/>
                            
                            <g filter="url(#filter2_d_12_79)">
                                <circle cx="60" cy="120" r="5" fill="#FF6464"/>
                            </g>
                            
                            <g filter="url(#filter3_d_12_79)">
                                <path d="M4 10C4 4.47715 8.47715 0 14 0H244C249.523 0 254 4.47715 254 10V17H4V10Z" fill="#FF6464"/>
                            </g>

                            <defs>
                                <filter id="filter0_d_12_79" x="0" y="0" width="258" height="143" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_79"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_79" result="shape"/>
                                </filter>
                                
                                <filter id="filter1_d_12_79" x="112.5" y="50.0022" width="40.5" height="43.9956" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_79"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_79" result="shape"/>
                                </filter>
                                
                                <filter id="filter2_d_12_79" x="51" y="115" width="18" height="18" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_79"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_79" result="shape"/>
                                </filter>
                                
                                <filter id="filter3_d_12_79" x="0" y="0" width="258" height="25" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_79"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_79" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                </div>
                
                <div id='Cheatsheets' class='row py-5'>
                    <h3 class='text-center pb-4'><strong>Cheatsheets</strong></h3>
                
                    <div class='col-lg align-items-center flex justify-center'>
                        <svg width="233" height="158" viewBox="0 0 233 158" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_12_59)">
                                <rect x="4" width="225" height="150" rx="10" fill="white"/>
                            </g>
                            
                            <path d="M16 98C16 92.4772 20.4772 88 26 88H81C86.5228 88 91 92.4772 91 98V124.5C91 130.023 86.5228 134.5 81 134.5H26C20.4772 134.5 16 130.023 16 124.5V98Z" fill="#F0FF42"/>
                            
                            <path d="M105 98C105 92.4772 109.477 88 115 88H155C160.523 88 165 92.4772 165 98V125C165 130.523 160.523 135 155 135H115C109.477 135 105 130.523 105 125V98Z" fill="#82CD47"/>
                            
                            <path d="M16 18.5C16 16.567 17.567 15 19.5 15H54.5C56.433 15 58 16.567 58 18.5V18.5C58 20.433 56.433 22 54.5 22H19.5C17.567 22 16 20.433 16 18.5V18.5Z" fill="#D9D9D9"/>
                            
                            <path d="M16 47C16 41.4772 20.4772 37 26 37H48C53.5228 37 58 41.4772 58 47V65C58 70.5228 53.5228 75 48 75H26C20.4772 75 16 70.5228 16 65V47Z" fill="#1865F2"/>
                            
                            <path d="M68 47C68 41.4772 72.4772 37 78 37H155C160.523 37 165 41.4772 165 47V65C165 70.5228 160.523 75 155 75H78C72.4772 75 68 70.5228 68 65V47Z" fill="#FF6464"/>
                            
                            <path d="M175 47C175 41.4772 179.477 37 185 37H199C204.523 37 209 41.4772 209 47V125C209 130.523 204.523 135 199 135H185C179.477 135 175 130.523 175 125V47Z" fill="#F0FF42"/>
                            
                            <defs>
                                <filter id="filter0_d_12_59" x="0" y="0" width="233" height="158" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_59"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_59" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    
                    <p class='text-center col-sm py-4'>Cheatsheet adalah rangkuman singkat per mata kuliah untuk membantu dalam review pelajaran dan membantu dalam ujian.</p>
                </div>
            </div>

            <div id='Tim' class='bg-light py-5'>
                <div class='container'>
                    <div class='row py-5'>
                        <h2 class='text-center'><strong>Tim</strong></h2>
                        <p class='text-center'>Tim kami professional dan berpengalaman</p>
                    </div>

                    <div class="flex row justify-content-md-evenly">
                        <div class="card mb-3 p-0" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/fatur.jpg') }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8  flex align-items-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><strong>Faturrohman Muhammad</strong></h5>
                                        <p class="card-text text-center"><small class="text-muted"><i>CEO</i></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 p-0" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/asa.jpg') }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8  flex align-items-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><strong>Arsari Putri</strong></h5>
                                        <p class="card-text text-center"><small class="text-muted"><i>Head of Suplemen Division</i></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="flex row justify-content-md-evenly">
                        <div class="card mb-3 p-0" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/nanang.png') }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8  flex align-items-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><strong>Nanang Eldi</strong></h5>
                                        <p class="card-text text-center"><small class="text-muted"><i>Head of Teaching Division</i></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 p-0" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/izni.jpg') }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8  flex align-items-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><strong>Izni Fadillah</strong></h5>
                                        <p class="card-text text-center"><small class="text-muted"><i>Member of Teaching Division</i></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex row justify-content-md-evenly">
                        <div class="card mb-3 p-0" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/rafika.jpg') }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8  flex align-items-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><strong>Rafika Hasna</strong></h5>
                                        <p class="card-text text-center"><small class="text-muted"><i>Member of Teaching Division</i></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 p-0" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/lala.jpg') }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8  flex align-items-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><strong>Nurlaila Dorojati</strong></h5>
                                        <p class="card-text text-center"><small class="text-muted"><i>Member of Teaching Division</i></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="flex row justify-content-md-evenly">
                        <div class="card mb-3 p-0" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/naya.jpg') }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8  flex align-items-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><strong>Ratumas Inayah</strong></h5>
                                        <p class="card-text text-center"><small class="text-muted"><i>Member of Suplemen Division</i></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 p-0" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/vianda.jpg') }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8  flex align-items-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><strong>Vianda Febriyanti</strong></h5>
                                        <p class="card-text text-center"><small class="text-muted"><i>Member of Suplemen Division</i></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex row justify-content-md-evenly">
                        <div class="card mb-3 p-0" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/rakha.jpg') }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8  flex align-items-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><strong>Rakha Mulia</strong></h5>
                                        <p class="card-text text-center"><small class="text-muted"><i>Member of Suplemen Division</i></small></p>
                                        <a><img src=""/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <footer class='container py-5 text-black'>
            <div class='row justify-content-end'>
                <div class='col-sm-auto mb-5'>
                    <p><strong>Tautan</strong></p>
                    <a href='#Beranda' class='text-black text-decoration-none'>Beranda</a>
                    <br/>
                    <a href='#Blog' class='text-black text-decoration-none'>Blog</a>
                    <br/>
                    <a href='#Kontak' class='text-black text-decoration-none'>Hubungi Kami</a>
                </div>
                <div class='col-sm-auto mb-5'>
                    <p><strong>Layanan</strong></p>
                    <a href='#Konsultasi' class='text-black text-decoration-none'>Konsultasi Akademik</a>
                </div>
                <div class='col-sm-auto mb-5'>
                    <p><strong>Media Sosial</strong></p>
                    <a href='#Tiktok' class='text-black text-decoration-none'><img/>Tiktok</a>
                    <br/>
                    <a href='#Youtube' class='text-black text-decoration-none'><img/>Youtube</a>
                    <br/>
                    <a href='#Twitter' class='text-black text-decoration-none'><img/>Twitter</a>
                    <br/>
                    <a href='#Instagram' class='text-black text-decoration-none'><img/>Instagram</a>
                    <br/>
                    <a href='#Facebook' class='text-black text-decoration-none'><img/>Facebook</a>
                </div>
            </div>
            <hr/>
            <div class='row flex-sm-row'>
                <p class='col-lg-7 m-0'>© Hak Cipta, <strong><a href='#' class='text-decoration-none text-black'>Klay Studio</a></strong>.</p>
                <div class="align-items-end col-lg flex justify-content-between sm:float-right">
                    <a href='#' class='text-black underline'>Kebijakan Privasi</a>
                    <a href='#' class='text-black underline'>Kebijakan Kuki</a>
                    <a href='#' class='text-black underline'>Pengaturan Kuki</a>
                </div>
            </div>
        </footer>
    </body>
</html>
