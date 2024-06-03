<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknis</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="./node_modules/apexcharts/dist/apexcharts.css">
</head>

<body>

    <!-- ========== HEADER ========== -->
    <section>
        <div>
            <header
                class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-blue-950 text-sm py-3 sm:py-0 fixed top-0 left-0 right-0 z-10">
                <nav class="relative max-w-[80rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
                    aria-label="Global">
                    <div class="flex items-center justify-between" onclick="window.location='home';">
                        <img class="h-10 w-58" src="{{ asset('storage/image/logoputih.png')}}">

                        <div class="sm:hidden">
                            <button type="button"
                                class="hs-collapse-toggle size-9 flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-white/20 text-white hover:border-white/40 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                data-hs-collapse="#navbar-collapse-with-animation"
                                aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                                <svg class="hs-collapse-open:hidden flex-shrink-0 size-4"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="3" x2="21" y1="6" y2="6" />
                                    <line x1="3" x2="21" y1="12" y2="12" />
                                    <line x1="3" x2="21" y1="18" y2="18" />
                                </svg>
                                <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M18 6 6 18" />
                                    <path d="m6 6 12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div id="navbar-collapse-with-animation"
                        class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                        <div
                            class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">
                            <a class="font-medium text-white sm:py-6" href="home" aria-current="page">Home</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="umum">Umum</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">Produksi</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">Distribusi</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">Neraca</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">Sosial</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">IPDS</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="adm1">Administrasi</a>


                            <a class="flex items-center gap-x-2 font-medium text-white/[.8] hover:text-white sm:border-s sm:border-white/[.3] sm:my-6 sm:ps-6"
                                href="#">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                                Log in
                            </a>
                        </div>
                    </div>
                </nav>
            </header>
        </div>

    </section>
    <!-- ========== END HEADER ========== -->

    <section class="bg-center bg-no-repeat bg-cover relative pt-20"
        style="background-image: url({{asset('storage/image/sosial.jpg')}});">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div> <!-- Overlay hitam transparan -->
        <div class="px-5 mx-auto max-w-screen-xl text-center py-30 lg:py-20 relative">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-9xl lg:text-6xl pb-10">
                SOSIAL</h1>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            </div>
        </div>
    </section>

    <div class="px-5 text-center py-10 lg:py-10">
        <h1 class="text-4xl font-bold text-black md:text-4xl lg:text-4xl">
            PEMUTAKHIRAN SUSENAS
        </h1>
    </div>



    <!-- ========== START ========== -->

    <div
        class="max-w-[90rem] px-2 py-5 sm:px-6 lg:px-8 lg:py-1 mx-auto sm:max-w-[36rem] md:max-w-[48rem] lg:max-w-[72rem] xl:max-w-[90rem]">
        <div
            class="flex justify-start sm:justify-between items-center border-b border-gray-300 px-4 dark:border-gray-700">
            <!-- Tabs -->
            <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                <!-- Existing tabs here -->
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active"
                    id="basic-tabs-item-1" data-hs-tab="#basic-tabs-1" aria-controls="basic-tabs-1" role="tab">
                    Teknis
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                    id="basic-tabs-item-3" data-hs-tab="#basic-tabs-3" aria-controls="basic-tabs-3" role="tab">
                    Progres
                </button>
            </nav>
        </div>
    </div>


    </div>
    <div class="max-w-[90rem] px-4=2 py-20 mt-2 sm:px-6 lg:px-8 lg:py-1 m-auto">
        <!-- ========== TEKNIS ========== -->
        <div id="basic-tabs-1" role="tabpanel" aria-labelledby="basic-tabs-item-1">
            <!-- TABEL -->
            <div class="grid lg:grid-cols-1 gap-6 mt-2 bg-gray-200 p-4 shadow-lg rounded-lg overflow-x-auto mb-10">
                <div class="flex items-center justify-end gap-x-2">
                    <!-- Progress Indicator -->
                    <div
                        class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-xl border border-blue-700 bg-white text-blue-700 hover:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none">
                        100%</div>
                    <!-- Input Periode -->
                    <button type="button"
                        class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-slide-down-animation-modal">
                        Input Periode
                    </button>


                    <div id="hs-slide-down-animation-modal"
                        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                        <div
                            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                            <div
                                class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                    <h3 class="font-bold text-gray-800 dark:text-white">
                                        Masukkan Periode Kegiatan
                                    </h3>
                                    <button type="button"
                                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                                        data-hs-overlay="#hs-slide-down-animation-modal">
                                        <span class="sr-only">Close</span>
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex flex-col space-y-4 p-4 overflow-y-auto">
                                    <!-- Tanggal Mulai -->
                                    <div>
                                        <label for="start-date"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal
                                            Mulai</label>
                                        <input type="date" id="start-date" name="start-date"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                            required>
                                    </div>

                                    <!-- Tanggal Selesai -->
                                    <div>
                                        <label for="end-date"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal
                                            Selesai</label>
                                        <input type="date" id="end-date" name="end-date"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                            required>
                                    </div>
                                </div>

                                <div class="flex items-center justify-center h-full p-4 overflow-y-auto">
                                    <p class="text-gray-800 dark:text-gray-400 text-center">
                                        Apakah anda sudah yakin dengan periode kegiatan yang akan dibuat?
                                    </p>
                                </div>

                                <div
                                    class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                    <button type="button"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800"
                                        data-hs-overlay="#hs-slide-down-animation-modal">
                                        Batal
                                    </button>
                                    <button type="button"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                        data-hs-overlay="#hs-sign-out-alert">
                                        Berikutnya
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Import Data -->
                    <div class="text-center">
                        <button type="button"
                            class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#hs-sign-out-alert">
                            Tambah Data
                        </button>
                    </div>
                    <div id="hs-sign-out-alert"
                        class="hs-overlay hidden size-full fixed inset-0 z-[80] overflow-x-hidden overflow-y-auto bg-gray-900 bg-opacity-50">
                        <div class="flex items-center justify-center min-h-screen">
                            <div
                                class="hs-overlay-open:animate-scaleUp hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition transform-gpu scale-95 sm:max-w-lg sm:w-full mx-4">
                                <div class="relative bg-white shadow-xl rounded-2xl dark:bg-blue-800">
                                    <div
                                        class="flex justify-between items-center p-5 rounded-t-2xl border-b dark:border-gray-600">
                                        <h3 class="text-xl font-bold text-gray-800 dark:text-white">
                                            Import Data
                                        </h3>
                                        <button type="button"
                                            class="rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                            data-hs-overlay="#hs-sign-out-alert">
                                            <span class="sr-only">Close</span>
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-6 text-center">
                                        <p class="text-gray-500 mb-5">
                                            Silakan pilih file Excel yang ingin Anda import.
                                        </p>
                                        <form class="flex justify-center items-center mt-4">
                                            <label class="block w-full">
                                                <span class="sr-only">Choose file</span>
                                                <div class="flex flex-col items-center justify-center w-full">
                                                    <div
                                                        class="border-2 border-dashed border-gray-300 rounded-lg text-sm leading-normal text-gray-500 bg-white py-10 px-4 w-full flex flex-col justify-center items-center">
                                                        <svg class="w-8 h-8  mb-3 text-gray-500" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M12 4v16m8-8H4"></path>
                                                        </svg>
                                                        <span class="mb-2">Drag and drop your file here or click to
                                                            upload</span>
                                                        <input type="file" class="hidden" />
                                                    </div>
                                                </div>
                                            </label>
                                        </form>

                                        <div class="mt-6 flex justify-center gap-x-4">
                                            <button type="button"
                                                class="inline-flex justify-center items-center px-4 py-2 text-sm font-medium rounded-md border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                                Batal
                                            </button>
                                            <button type="button"
                                                class="inline-flex justify-center items-center px-4 py-2 text-sm font-medium rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                Import
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div
                            class="p-1.5 min-w-full inline-block align-middle rounded-lg overflow-hidden bg-white shadow-md">
                            <div class="overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-200 rounded-lg dark:divide-gray-700">
                                    <thead class="bg-gray-50 dark:bg-gray-800">
                                        <tr class="border-b-2 border-gray-300">
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                NBS & SLS</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Penyelesaian Ruta</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                PML</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                PPL</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Kecamatan</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Desa/Kelurahan</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                NKS</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Beban Kerja</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Ruta 1</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Ruta 2</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Ruta 3</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Ruta 4</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Ruta 5</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Ruta 6</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Ruta 7</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Ruta 8</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Ruta 9</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Ruta 10</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                KK Awal</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                KK Akhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                004B BANJAR SUMBERBATOK</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 font-semibold dark:text-gray-200">
                                                100%</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                Made Padayasa</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                Kadek Budiana</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                GEROKGAK</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                SUMBER KLAMPOK</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                100,004</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                82</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                35</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                47</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                75</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                82</td>
                                        </tr>

                                        <tr
                                            class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                015B LINGKUNGAN TIMUR</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 font-semibold dark:text-gray-200">
                                                100%</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                Novia Putri Lestari</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                I Made Juliawan</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                BULELENG</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                KAMPUNG KAJANAN</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                150,860</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                68</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                20</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                12</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                12</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                12</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                12</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                70</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                68</td>
                                        </tr>

                                        <tr
                                            class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                013B BANJAR BAYAD</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 font-semibold dark:text-gray-200">
                                                100%</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                Sita Dian Maretna</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                Ketut Tirta Yasa</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                KUBUTAMBAHAN</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                TAJUN</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                100,483</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                123</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                15</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                25</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                35</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                20</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                25</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                3</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                126</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                123</td>
                                        </tr>

                                        <tr
                                            class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                007B BANJAR KAJANAN</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 font-semibold dark:text-gray-200">
                                                100%</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                Gusti Ngurah Wiarta Dana</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                I GEde Youdi Antara</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                TEJAKULA</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                MADENAN</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                100,554</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                100</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                50</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                50</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                102</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                100</td>
                                        </tr>

                                        <tr
                                            class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                010B BANJAR SAMBIRENTENG</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 font-semibold dark:text-gray-200">
                                                100%</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                Amalia Susanti</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                Gede Januarta</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                TEJAKULA</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                SAMBIRENTENG</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                100,571</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                70</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                15</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                30</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                25</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                -</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                66</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                70</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       

        <!-- ========== PROGRES ========== -->
        <div id="basic-tabs-3" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-3">

            <div class="flex flex-col justify-center items-center">
                <div id="hs-doughnut-chart"></div>

                <!-- Legend Indicator -->
                <div class="flex justify-center sm:justify-end items-center gap-x-4 mt-3 sm:mt-6">
                    <div class="inline-flex items-center">
                        <span class="size-2.5 inline-block bg-blue-600 rounded-sm me-2"></span>
                        <span class="text-[13px] text-gray-600 dark:text-neutral-400">
                            Income
                        </span>
                    </div>
                    <div class="inline-flex items-center">
                        <span class="size-2.5 inline-block bg-cyan-500 rounded-sm me-2"></span>
                        <span class="text-[13px] text-gray-600 dark:text-neutral-400">
                            Outcome
                        </span>
                    </div>
                    <div class="inline-flex items-center">
                        <span class="size-2.5 inline-block bg-gray-300 rounded-sm me-2 dark:bg-neutral-700"></span>
                        <span class="text-[13px] text-gray-600 dark:text-neutral-400">
                            Others
                        </span>
                    </div>
                </div>
                <!-- End Legend Indicator -->
            </div>

            <script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

            <script>
            window.addEventListener('load', () => {
                // Apex Doughnut Chart
                (function() {
                    buildChart('#hs-doughnut-chart', (mode) => ({
                        chart: {
                            height: 230,
                            width: 230,
                            type: 'donut',
                            zoom: {
                                enabled: false
                            }
                        },
                        plotOptions: {
                            pie: {
                                donut: {
                                    size: '76%'
                                }
                            }
                        },
                        series: [47, 23, 30],
                        labels: ['Tailwind CSS', 'Preline UI', 'Others'],
                        legend: {
                            show: false
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            width: 5
                        },
                        grid: {
                            padding: {
                                top: -12,
                                bottom: -11,
                                left: -12,
                                right: -12
                            }
                        },
                        states: {
                            hover: {
                                filter: {
                                    type: 'none'
                                }
                            }
                        },
                        tooltip: {
                            enabled: true,
                            custom: function(props) {
                                return buildTooltipForDonut(
                                    props,
                                    mode === 'dark' ? ['#fff', '#fff', '#000'] : [
                                        '#fff', '#fff', '#000'
                                    ]
                                );
                            }
                        }
                    }), {
                        colors: ['#3b82f6', '#22d3ee', '#e5e7eb'],
                        stroke: {
                            colors: ['rgb(255, 255, 255)']
                        }
                    }, {
                        colors: ['#3b82f6', '#22d3ee', '#404040'],
                        stroke: {
                            colors: ['rgb(38, 38, 38)']
                        }
                    });
                })();
            });
            </script>


        </div>





    </div>
    <script src="./node_modules/lodash/lodash.min.js"></script>
    <script src="./node_modules/apexcharts/dist/apexcharts.min.js"></script>
</body>

</html>