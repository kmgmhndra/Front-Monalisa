<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>umum</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="sosial">Sosial</a>
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
        style="background-image: url({{asset('storage/image/umum.jpg')}});">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div> <!-- Overlay hitam transparan -->
        <div class="px-5 mx-auto max-w-screen-xl text-center py-30 lg:py-20 relative">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-9xl lg:text-6xl pb-10">
                UMUM</h1>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            </div>
        </div>
    </section>


    <!-- ========== START CARD ========== -->

    <div class="max-w-[80rem] px-4=2 py-5 sm:px-6 lg:px-8 lg:py-5 m-auto">
        <div class="flex justify-between items-center border-b border-gray-200 px-4 dark:border-gray-700">
            <!-- Tabs -->
            <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                <!-- Existing tabs here -->
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-blue-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 active"
                    id="basic-tabs-item-1" data-hs-tab="#basic-tabs-1" aria-controls="basic-tabs-1" role="tab">
                    Kegiatan
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-blue-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    id="basic-tabs-item-2" data-hs-tab="#basic-tabs-2" aria-controls="basic-tabs-2" role="tab">
                    Grafik
                </button>
            </nav>

            <div class="flex items-center gap-x-2">
                <div class="hs-dropdown relative inline-flex [--trigger:hover]">
                    <button id="hs-dropdown-hover-event" type="button"
                        class="hs-dropdown-toggle py-2 px-4 inline-flex items-center gap-1 text-sm font-medium rounded-xl border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        Tahun
                        <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-30 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full z-50"
                        aria-labelledby="hs-dropdown-hover-event">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                            href="#">
                            2021
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                            href="#">
                            2022
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                            href="#">
                            2023
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                            href="#">
                            2024
                        </a>
                    </div>
                </div>

                <!-- Add Card Button -->
                <!-- <div class="hs-dropdown relative inline-flex [--trigger:hover]">
                    <button id="hs-dropdown-hover-event" type="button"
                        class="hs-dropdown-toggle py-2 px-4 gap-1 inline-flex items-center text-sm font-medium rounded-xl shadow-sm text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        Tambahkan Card
                        <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-50 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full z-50"
                        aria-labelledby="hs-dropdown-hover-event">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                            href="#">
                            Direct Link
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                            href="#">
                            Rumah Tangga
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                            href="#">
                            Perusahaan
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                            href="#">
                            Ubinan
                        </a>
                    </div>
                </div> -->

                <div class="hs-dropdown relative inline-flex [--trigger:hover]">
                    <button id="hs-dropdown-hover-event" type="button"
                        class="hs-dropdown-toggle py-2 px-4 gap-1 inline-flex items-center text-sm font-medium rounded-xl shadow-sm text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        Tambahkan Card
                        <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-50 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full z-50"
                        aria-labelledby="hs-dropdown-hover-event">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700 cursor-pointer"
                            data-hs-overlay="#modal-direct-link">
                            Direct Link
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700 cursor-pointer"
                            data-hs-overlay="#modal-rumah-tangga">
                            Rumah Tangga
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700 cursor-pointer"
                            data-hs-overlay="#modal-perusahaan">
                            Perusahaan
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700 cursor-pointer"
                            data-hs-overlay="#modal-ubinan">
                            Ubinan
                        </a>
                    </div>
                </div>


                <!-- Modal Direct Link -->
                <div id="modal-direct-link"
                    class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
                    <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                        <div
                            class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                <h3 class="font-bold text-gray-800 dark:text-white">Membuat Card Direct Link</h3>
                                <button type="button"
                                    class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                                    data-hs-overlay="#modal-direct-link">
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
                                <!-- Nama Kegiatan -->
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Nama Kegiatan
                                    </label>
                                    <input type="input"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                        required>
                                </div>

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

                                <!-- Input Link -->
                                <div>
                                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Link
                                        Website</label>
                                    <input type="text"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm text-blue-600 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                        placeholder="https://yoursite.com">
                                </div>
                            </div>


                            <div class="flex items-center justify-center h-full p-4 overflow-y-auto">
                                <p class="text-gray-800 dark:text-gray-400 text-center">
                                    Apakah anda sudah yakin dengan kegiatan yang akan dibuat?
                                </p>
                            </div>
                            <div
                                class="flex justify-end it  ems-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                    data-hs-overlay="#modal-direct-link">Close</button>
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal Rumah Tangga -->
                <div id="modal-rumah-tangga"
                    class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
                    <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                        <div
                            class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                <h3 class="font-bold text-gray-800 dark:text-white">Rumah Tangga</h3>
                                <button type="button"
                                    class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                                    data-hs-overlay="#modal-rumah-tangga">
                                    <span class="sr-only">Close</span>
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <p class="mt-1 text-gray-800 dark:text-neutral-400">Coming Soon...</p>
                            </div>
                            <div
                                class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                    data-hs-overlay="#modal-rumah-tangga">Close</button>
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Perusahaan -->
                <div id="modal-perusahaan"
                    class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
                    <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                        <div
                            class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                <h3 class="font-bold text-gray-800 dark:text-white">Perusahaan</h3>
                                <button type="button"
                                    class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                                    data-hs-overlay="#modal-perusahaan">
                                    <span class="sr-only">Close</span>
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <p class="mt-1 text-gray-800 dark:text-neutral-400">Coming Soon...</p>
                            </div>
                            <div
                                class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                    data-hs-overlay="#modal-perusahaan">Close</button>
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Ubinan -->
                <div id="modal-ubinan"
                    class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
                    <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                        <div
                            class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                <h3 class="font-bold text-gray-800 dark:text-white">Ubinan</h3>
                                <button type="button"
                                    class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                                    data-hs-overlay="#modal-ubinan">
                                    <span class="sr-only">Close</span>
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <p class="mt-1 text-gray-800 dark:text-neutral-400">Coming Soon...</p>
                            </div>
                            <div
                                class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                    data-hs-overlay="#modal-ubinan">Close</button>
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                document.querySelectorAll('[data-modal-target]').forEach(item => {
                    item.addEventListener('click', event => {
                        event.preventDefault();
                        const modalId = item.getAttribute('data-modal-target');
                        document.getElementById(modalId).classList.remove('hidden');
                    });
                });

                function closeModal(modalId) {
                    document.getElementById(modalId).classList.add('hidden');
                }
                </script>

            </div>


        </div>
        <div class="mt-4 p-5">
            <!-- ========== KEGIATAN ========== -->
            <div id="basic-tabs-1" role="tabpanel" aria-labelledby="basic-tabs-item-1">
                <div class="grid lg:grid-cols-3 gap-6">


                    <div
                        class="max-w-sm p-6 bg-white border border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">

                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                OMSPAN</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline
                            process on how to certify for your weekly benefits:</p>
                        <a href="https://spanint.kemenkeu.go.id/spanint/latest/app/" target="_blank"
                            class="inline-flex font-medium items-center text-blue-600 hover:underline">
                            Direct to website
                            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                            </svg>
                        </a>
                    </div>

                    <div
                        class="max-w-sm p-6 bg-white border border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">

                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                SMART</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline
                            process on how to certify for your weekly benefits:</p>
                        <a href="http://monev.anggaran.depkeu.go.id/smart/" target="_blank"
                            class="inline-flex font-medium items-center text-blue-600 hover:underline">
                            Direct to website
                            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                            </svg>
                        </a>
                    </div>

                    <div
                        class="max-w-sm p-6 bg-white border border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">

                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Rekon KPPN</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline
                            process on how to certify for your weekly benefits:</p>
                        <a href="http://e-rekon-lk.djpbn.kemenkeu.go.id/login" target="_blank"
                            class="inline-flex font-medium items-center text-blue-600 hover:underline">
                            Direct to website
                            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                            </svg>
                        </a>
                    </div>

                    <div
                        class="max-w-sm p-6 bg-white border border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">

                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Rekon SABMN</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline
                            process on how to certify for your weekly benefits:</p>
                        <a href="https://satudja.kemenkeu.go.id/login?q=0e8b2" target="_blank"
                            class="inline-flex font-medium items-center text-blue-600 hover:underline">
                            Direct to website
                            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                            </svg>
                        </a>
                    </div>

                    <div
                        class="max-w-sm p-6 bg-white border border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">

                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Laporan SPI</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline
                            process on how to certify for your weekly benefits:</p>
                        <a href="https://sso.bps.go.id/auth/realms/pegawai-bps/protocol/openid-connect/auth?state=61c00462781f2b42ec392bae989b6ff0&scope=name%2Cemail&response_type=code&approval_prompt=auto&redirect_uri=https%3A%2F%2Fspi.bps.go.id%2Fv2%2Fapp&client_id=03340-spi-k4k" target="_blank"
                            class="inline-flex font-medium items-center text-blue-600 hover:underline">
                            Direct to website
                            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                            </svg>
                        </a>
                    </div>

                    <div
                        class="max-w-sm p-6 bg-white border border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">

                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Laporan E-MONEV</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline
                            process on how to certify for your weekly benefits:</p>
                        <a href="http://monev.bps.go.id/" target="_blank"
                            class="inline-flex font-medium items-center text-blue-600 hover:underline">
                            Direct to website
                            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                            </svg>
                        </a>
                    </div>

                    



                    <!-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table
                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg">
                            <thead
                                class="text-lg bg-gray-300 text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        SMART
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pelatihan
                                    </th>

                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer"
                                    onclick="window.location='teknis';">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pemutakhiran
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="teknis"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-yellow-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            70%
                                        </a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pencacahan
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="#"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-red-300 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="none" viewBox="0 0 16 16">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M3 3l10 10M13 3L3 13">
                                                </path>
                                            </svg>

                                            0%
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table
                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg">
                            <thead
                                class="text-lg bg-gray-300 text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        REKON KPPN
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pelatihan
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="#"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            100%
                                        </a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pemutakhiran
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="#"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-yellow-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            70%
                                        </a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pencacahan
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="#"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-red-300 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="none" viewBox="0 0 16 16">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M3 3l10 10M13 3L3 13">
                                                </path>
                                            </svg>

                                            0%
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table
                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg">
                            <thead
                                class="text-lg bg-gray-300 text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        REKOR SABMN
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pelatihan
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="#"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            100%
                                        </a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pemutakhiran
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="#"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-yellow-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            70%
                                        </a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pencacahan
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="#"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-red-300 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="none" viewBox="0 0 16 16">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M3 3l10 10M13 3L3 13">
                                                </path>
                                            </svg>

                                            0%
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table
                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg">
                            <thead
                                class="text-lg bg-gray-300 text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        SIREKA
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pelatihan
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="#"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            100%
                                        </a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pemutakhiran
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="#"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-yellow-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            70%
                                        </a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pencacahan
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="#"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-red-300 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="none" viewBox="0 0 16 16">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M3 3l10 10M13 3L3 13">
                                                </path>
                                            </svg>

                                            0%
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table
                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg">
                            <thead
                                class="text-lg bg-gray-300 text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        MONEV
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pelatihan
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="#"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            100%
                                        </a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pemutakhiran
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="#"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-yellow-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            70%
                                        </a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-neutral-700 cursor-pointer">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-base text-gray-900 whitespace-nowrap dark:text-white">
                                        Pencacahan
                                    </th>
                                    <td class="px-6 py-4 pl-24">
                                        <a href="#"
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-sm font-medium bg-red-300 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="none" viewBox="0 0 16 16">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M3 3l10 10M13 3L3 13">
                                                </path>
                                            </svg>

                                            0%
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->


                </div>
            </div>

            <!-- ========== GRAFIK ========== -->
            <div id="basic-tabs-2" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-2">
                <div class="grid lg:grid-cols-1 gap-6">
                    <div
                        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                        <div
                            class="bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-slate-900 dark:border-gray-700">
                            <h2 class="text-lg font-bold text-gray-800 dark:text-white">
                                COMING SOON!
                            </h2>
                        </div>
                        <div class="p-4 md:p-5">
                            <h3 class="text-lg text-gray-800 dark:text-white">
                                Card title
                            </h3>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">
                                With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="#">
                                Card link
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>



    </div>

</body>

</html>