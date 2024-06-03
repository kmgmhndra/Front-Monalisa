<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monalisa</title>
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
                    <div class="flex items-center justify-between">
                        <img class="h-10 w-58" src="{{ asset('storage/image/logoputih.png')}}">

                        <div class="flex flex-wrap justify-between sm:hidden">
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
                            <a class="font-medium text-white sm:py-6" href="#" aria-current="page">Home</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="umum">Umum</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">Produksi</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">Distribusi</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">Neraca</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="sosial">Sosial</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">IPDS</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="adm1">Administrasi</a>
                            <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="loginmitra">Mitra</a>


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


    <section class="relative bg-center bg-no-repeat bg-cover" style="padding-top: calc(100% * 3 / 9);">
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover">
            <source src="{{asset('storage/video/vb2.mov')}}" type="video/mp4">

        </video>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center">
            <h1
                class="mb-4 mt-10 text-4xl font-sans font-extrabold tracking-tight leading-none text-white md:text-9xl lg:text-6xl">
                MONALISA</h1>
            <p class="mb-8 text-lg font-serif font-medium text-gray-300 lg:text-3xl sm:px-16 lg:px-48">Monitoring
                Kegiatan dan Kualitas Statistik</p>
        </div>
    </section>



    <!-- ========== START CARD ========== -->
    <div class="max-w-[70rem] px-4=2 py-10 sm:px-6 lg:px-8 lg:py-12 m-auto">
        <div class="grid lg:grid-cols-3 gap-6">

            <div class="flex flex-col group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]"
                onclick="window.location='umum';">
                <div class="relative pt-[30%] sm:pt-[50%] lg:pt-[70%] rounded-t-xl overflow-hidden">
                    <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
                        src="https://images.pexels.com/photos/572056/pexels-photo-572056.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Image Description">
                </div>
                <div class="p-4 md:p-5">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        UMUM
                    </h3>
                </div>
            </div>

            <div
                class="flex flex-col group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="relative pt-[30%] sm:pt-[50%] lg:pt-[70%] rounded-t-xl overflow-hidden">
                    <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
                        src="https://images.pexels.com/photos/247616/pexels-photo-247616.jpeg" alt="Image Description">
                </div>
                <div class="p-4 md:p-5">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        PRODUKSI
                    </h3>
                </div>
            </div>

            <div
                class="flex flex-col group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="relative pt-[30%] sm:pt-[50%] lg:pt-[70%] rounded-t-xl overflow-hidden">
                    <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
                        src="https://www.emixa.com/hubfs/Emixa/Blogs/Overfull%20warehouses.png" alt="Image Description">
                </div>
                <div class="p-4 md:p-5">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        DISTRIBUSI
                    </h3>
                </div>
            </div>

            <div
                class="flex flex-col group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="relative pt-[30%] sm:pt-[50%] lg:pt-[70%] rounded-t-xl overflow-hidden">
                    <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS1hu4KRvfCyPd0UUw8wIEBGxsTpMWIoU8KpUz6fPpfIWYyVL6"
                        alt="Image Description">
                </div>
                <div class="p-4 md:p-5">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        NERACA
                    </h3>
                </div>
            </div>

            <div class="flex flex-col group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]"
                onclick="window.location='sosial';">
                <div class="relative pt-[30%] sm:pt-[50%] lg:pt-[70%] rounded-t-xl overflow-hidden">
                    <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJz1315eJMpnAUrK9Rwi3fqcquwlrwxSA4wckcsNQFdhaVTz-3"
                        alt="Image Description">
                </div>
                <div class="p-4 md:p-5">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        SOSIAL
                    </h3>
                </div>
            </div>

            <div
                class="flex flex-col group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="relative pt-[30%] sm:pt-[50%] lg:pt-[70%] rounded-t-xl overflow-hidden">
                    <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
                        src="https://web.kominfo.go.id/sites/default/files/ti.jpg" alt="Image Description">
                </div>
                <div class="p-4 md:p-5">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        IPDS
                    </h3>
                </div>
            </div>

        </div>
    </div>
    <!-- ========== END CARD ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-5 text-center">
            <div>
                <a class="flex-none text-xl font-semibold text-black dark:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    href="#" aria-label="Brand">BPS BULELENG</a>
            </div>
            <!-- End Col -->

            <ul class="text-center">
                <li
                    class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300 dark:before:text-gray-600">
                    <a class="inline-flex gap-x-1 text-sm text-gray-500 hover:text-gray-800 dark:text-gray-500 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="#">
                        Umum
                    </a>
                </li>
                <li
                    class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300 dark:before:text-gray-600">
                    <a class="inline-flex gap-x-1 text-sm text-gray-500 hover:text-gray-800 dark:text-gray-500 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="#">
                        Produksi
                    </a>
                </li>
                <li
                    class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300 dark:before:text-gray-600">
                    <a class="inline-flex gap-x-1 text-sm text-gray-500 hover:text-gray-800 dark:text-gray-500 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="#">
                        Distribusi
                    </a>
                </li>
                <li
                    class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300 dark:before:text-gray-600">
                    <a class="inline-flex gap-x-1 text-sm text-gray-500 hover:text-gray-800 dark:text-gray-500 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="#">
                        Neraca
                    </a>
                </li>
                <li
                    class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300 dark:before:text-gray-600">
                    <a class="inline-flex gap-x-1 text-sm text-gray-500 hover:text-gray-800 dark:text-gray-500 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="#">
                        Sosial
                    </a>
                </li>
                <li
                    class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300 dark:before:text-gray-600">
                    <a class="inline-flex gap-x-1 text-sm text-gray-500 hover:text-gray-800 dark:text-gray-500 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="#">
                        Ipds
                    </a>
                </li>
            </ul>
            <!-- End Col -->

            <!-- Social Brands -->
            <div class="md:text-end space-x-2">
                <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    href="#">
                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                    </svg>
                </a>
                <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    href="#">
                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                </a>
                <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    href="#">
                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                </a>
                <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    href="#">
                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
                    </svg>
                </a>
            </div>
            <!-- End Social Brands -->
        </div>
        <!-- End Grid -->
    </footer>


</body>

</html>