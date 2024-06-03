<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <!-- ========== HEADER ========== -->
    <header
        class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 sm:py-4 lg:ps-64 dark:bg-neutral-800 dark:border-neutral-700">
        <nav class="flex basis-full items-center w-full mx-auto px-4 sm:px-6" aria-label="Global">
            <div class="me-5 lg:me-0 lg:hidden">
                <!-- Logo -->
                <a class="text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white"
                    href="http://127.0.0.1:8000/home">
                    MONALISA
                </a>
                <!-- End Logo -->
            </div>

            <div class="w-full flex items-center justify-end ms-auto sm:justify-between sm:gap-x-3 sm:order-3">
                <div class="sm:hidden">
                    <button type="button"
                        class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                    </button>
                </div>

                <div class="hidden sm:block justify-end">
                    <label for="icon" class="sr-only">Search</label>
                    <div class="relative min-w-72 md:min-w-80">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                            <svg class="flex-shrink-0 size-4 text-gray-400 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                        </div>
                        <input type="text" id="icon" name="icon"
                            class="py-2 px-4 ps-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Search">
                    </div>
                </div>

                <div class="hs-dropdown relative inline-flex">
                    <button id="hs-dropdown-default" type="button"
                        class="hs-dropdown-toggle py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                        Tahun
                        <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-20 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                        aria-labelledby="hs-dropdown-default">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                            href="#">
                            2023
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                            href="#">
                            2022
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                            href="#">
                            2021
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                            href="#">
                            2020
                        </a>
                    </div>
                </div>


            </div>
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Breadcrumb -->
    <div
        class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden dark:bg-neutral-800 dark:border-neutral-700">
        <div class="flex justify-end items-center py-2">


            <!-- Sidebar -->
            <button type="button"
                class="py-2 px-3 flex justify-center items-center gap-x-1.5 text-xs rounded-lg border border-gray-950 text-gray-500 hover:text-gray-600 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-200"
                data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Sidebar">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M17 8L21 12L17 16M3 12H13M3 6H13M3 18H13" />
                </svg>
                <span class="sr-only">Sidebar</span>
            </button>
            <!-- End Sidebar -->
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Sidebar -->
    <div id="application-sidebar" class="hs-overlay [--auto-close:lg]
  hs-overlay-open:translate-x-0
  -translate-x-full transition-all duration-300 transform
  w-[260px]
  hidden
  fixed inset-y-0 start-0 z-[60]
  bg-white border-e border-gray-200
  lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
  dark:bg-neutral-800 dark:border-neutral-700
 ">
        <div class="px-8 pt-4">
            <!-- Logo -->
            <a class="flex-none rounded-xl text-xl text-blue-500 inline-block ml-8   mt-1 font-extrabold focus:outline-none focus:opacity-80"
                href="http://127.0.0.1:8000/home">
                MONALISA
            </a>
            <!-- End Logo -->
        </div>

        <div class="overflow-y-auto max-h-full">
            <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="space-y-1.5">

                    <li class="hs-accordion" id="umum-accordion">
                        <button type="button"
                            class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                            Umum

                            <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>

                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div id="umum-accordion-child"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                            <ul class="hs-accordion-group ps-3 pt-2" data-hs-accordion-always-open>
                                <li class="hs-accordion" id="umum-accordion-sub-1">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                        Sub Menu 1

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="umum-accordion-sub-1-child"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                                        <ul class="pt-2 ps-2">
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hs-accordion" id="umum-accordion-sub-2">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                        Sub Menu 2

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="umum-accordion-sub-2-child"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden ps-2">
                                        <ul class="pt-2 ps-2">
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="produksi-accordion">
                        <button type="button"
                            class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                            Produksi

                            <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>

                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div id="produksi-accordion-child"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                            <ul class="hs-accordion-group ps-3 pt-2" data-hs-accordion-always-open>
                                <li class="hs-accordion" id="produksi-accordion-sub-1">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                        Tahunan

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="produksi-accordion-sub-1-child"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                                        <ul class="pt-2 ps-2">
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="adm2">
                                                    ST 23
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hs-accordion" id="produksi-accordion-sub-2">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                        Semester

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="produksi-accordion-sub-2-child"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden ps-2">
                                        <ul class="pt-2 ps-2">
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hs-accordion" id="produksi-accordion-sub-2">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                        Triwulan

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="produksi-accordion-sub-2-child"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden ps-2">
                                        <ul class="pt-2 ps-2">
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="distribusi-accordion">
                        <button type="button"
                            class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                            Distribusi

                            <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>

                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div id="distribusi-accordion-child"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                            <ul class="hs-accordion-group ps-3 pt-2" data-hs-accordion-always-open>
                                <li class="hs-accordion" id="distribusi-accordion-sub-1">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                        Sub Menu 1

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="distribusi-accordion-sub-1-child"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                                        <ul class="pt-2 ps-2">
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hs-accordion" id="distribusi-accordion-sub-2">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                        Sub Menu 2

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="distribusi-accordion-sub-2-child"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden ps-2">
                                        <ul class="pt-2 ps-2">
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="neraca-accordion">
                        <button type="button"
                            class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                            Neraca

                            <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>

                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div id="neraca-accordion-child"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                            <ul class="hs-accordion-group ps-3 pt-2" data-hs-accordion-always-open>
                                <li class="hs-accordion" id="neraca-accordion-sub-1">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                        Sub Menu 1

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="neraca-accordion-sub-1-child"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                                        <ul class="pt-2 ps-2">
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hs-accordion" id="neraca-accordion-sub-2">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                        Sub Menu 2

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="neraca-accordion-sub-2-child"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden ps-2">
                                        <ul class="pt-2 ps-2">
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="sosial-accordion">
                        <button type="button"
                            class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                            Sosial

                            <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>

                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div id="sosial-accordion-child"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                            <ul class="hs-accordion-group ps-3 pt-2" data-hs-accordion-always-open>
                                <li class="hs-accordion" id="sosial-accordion-sub-1">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                        ST 23

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="sosial-accordion-sub-1-child"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                                        <ul class="pt-2 ps-2">
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    akun 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    akun 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    akun 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hs-accordion" id="sosial-accordion-sub-2">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                        Sub Menu 2

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="sosial-accordion-sub-2-child"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden ps-2">
                                        <ul class="pt-2 ps-2">
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="ipds-accordion">
                        <button type="button"
                            class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                            Ipds

                            <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>

                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div id="ipds-accordion-child"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                            <ul class="hs-accordion-group ps-3 pt-2" data-hs-accordion-always-open>
                                <li class="hs-accordion" id="ipds-accordion-sub-1">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                        Sub Menu 1

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="ipds-accordion-sub-1-child"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                                        <ul class="pt-2 ps-2">
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hs-accordion" id="ipds-accordion-sub-2">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                        Sub Menu 2

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="ipds-accordion-sub-2-child"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden ps-2">
                                        <ul class="pt-2 ps-2">
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                                    href="#">
                                                    Link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </nav>
        </div>

    </div>
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="w-full  lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <!-- Breadcrumb -->
            <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
                aria-label="Breadcrumb">
                <ol class="flex items-center whitespace-nowrap">
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                            href="adm1">
                            Produksi
                        </a>
                        <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </li>
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                            href="adm2">
                            ST 23
                        </a>
                        <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </li>

                </ol>
            </nav>

            <!-- Card -->
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div
                            class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                            <!-- Card Folder -->

                            <div class="flex flex-col">
                                <div class="-m-1.5 overflow-x-auto">
                                    <div class="p-1.5 min-w-full inline-block align-middle">
                                        <div
                                            class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                                            <!-- Header -->
                                            <div
                                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                                                <div>
                                                    <h2
                                                        class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                                        ST 23
                                                    </h2>
                                                    <p class="text-xs text-gray-600 dark:text-neutral-400">
                                                        12/12/2023 - 12/12/2024
                                                    </p>
                                                </div>

                                                <div>
                                                    <div class="inline-flex gap-x-2">
                                                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border  border-blue-200 bg-slate-50 text-blue-500 hover:bg-slate-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                                            href="#">
                                                            64/100
                                                        </a>
                                                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border  border-blue-200 bg-slate-50 text-blue-500 hover:bg-slate-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                                            href="#">
                                                            64%
                                                        </a>
                                                        <button type="button"
                                                            class="py-2 px-2 pr-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-xl border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none"
                                                            data-hs-overlay="#hs-sign-out-alert">
                                                            <svg class="flex-shrink-0 size-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14" />
                                                                <path d="M12 5v14" />
                                                            </svg>
                                                            Import
                                                        </button>

                                                        <div id="hs-sign-out-alert"
                                                            class="hs-overlay hidden size-full fixed inset-0 z-[80] overflow-x-hidden overflow-y-auto bg-gray-900 bg-opacity-50">
                                                            <div class="flex items-center justify-center min-h-screen">
                                                                <div
                                                                    class="hs-overlay-open:animate-scaleUp hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition transform-gpu scale-95 sm:max-w-lg sm:w-full mx-4">
                                                                    <div
                                                                        class="relative bg-white shadow-xl rounded-2xl dark:bg-blue-800">
                                                                        <div
                                                                            class="flex justify-between items-center p-5 rounded-t-2xl border-b dark:border-gray-600">
                                                                            <h3
                                                                                class="text-xl font-bold text-gray-800 dark:text-white">
                                                                                Import Excel
                                                                            </h3>
                                                                            <button type="button"
                                                                                class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                                                                                data-hs-overlay="#hs-sign-out-alert">
                                                                                <span class="sr-only">Close</span>
                                                                                <svg class="flex-shrink-0 size-5"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path d="M18 6 6 18"></path>
                                                                                    <path d="m6 6 12 12"></path>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <div class="p-6 text-center">

                                                                            <form
                                                                                class="flex justify-center items-center mt-4">
                                                                                <label class="block w-full">
                                                                                    <span class="sr-only">Choose
                                                                                        file</span>
                                                                                    <div
                                                                                        class="flex flex-col items-center justify-center w-full">
                                                                                        <div
                                                                                            class="border-2 border-dashed border-gray-300 rounded-lg text-sm leading-normal text-gray-500 bg-white py-10 px-4 w-full flex flex-col justify-center items-center">
                                                                                            <svg class="w-8 h-8  mb-3 text-gray-500"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                viewBox="0 0 24 24"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="2"
                                                                                                    d="M12 4v16m8-8H4">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <span class="mb-2">Drag and
                                                                                                drop your
                                                                                                file here or click to
                                                                                                upload</span>
                                                                                            <input type="file"
                                                                                                class="hidden" />
                                                                                        </div>
                                                                                    </div>
                                                                                </label>
                                                                            </form>

                                                                            <div
                                                                                class="mt-6 flex justify-center gap-x-4">
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
                                                        <button type="button"
                                                            class="py-2 px-2 pr-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-xl border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                                            data-hs-overlay="#hs-slide-down-animation-modal-folder">
                                                            <svg class="flex-shrink-0 size-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14" />
                                                                <path d="M12 5v14" />
                                                            </svg>
                                                            Buat Folder
                                                        </button>

                                                        <div id="hs-slide-down-animation-modal-folder"
                                                            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                                            <div
                                                                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                                                <div
                                                                    class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                                                    <div
                                                                        class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                                                        <h3
                                                                            class="font-bold text-gray-800 dark:text-white">
                                                                            Masukkan Nama & Periode
                                                                            Kegiatan
                                                                        </h3>
                                                                        <button type="button"
                                                                            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                                                                            data-hs-overlay="#hs-slide-down-animation-modal-folder">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="flex-shrink-0 size-5"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path d="M18 6 6 18">
                                                                                </path>
                                                                                <path d="m6 6 12 12">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col space-y-4 p-4 overflow-y-auto">
                                                                        <!-- Nama Kegiatan -->
                                                                        <div>
                                                                            <label
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
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
                                                                            <input type="date" id="start-date"
                                                                                name="start-date"
                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                                                                required>
                                                                        </div>

                                                                        <!-- Tanggal Selesai -->
                                                                        <div>
                                                                            <label for="end-date"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal
                                                                                Selesai</label>
                                                                            <input type="date" id="end-date"
                                                                                name="end-date"
                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                                                                required>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="flex items-center justify-center h-full p-4 overflow-y-auto">
                                                                        <p
                                                                            class="text-gray-800 dark:text-gray-400 text-center">
                                                                            Apakah anda sudah yakin dengan kegiatan yang
                                                                            akan dibuat?
                                                                        </p>
                                                                    </div>

                                                                    <div
                                                                        class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                                                        <button type="button"
                                                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 bg-red-600 text-white shadow-sm hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800"
                                                                            data-hs-overlay="#hs-slide-down-animation-modal">
                                                                            Batal
                                                                        </button>
                                                                        <button type="button"
                                                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                                                            data-hs-overlay="#hs-slide-down-animation-modal">
                                                                            Selesai
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Header -->

                                            <!-- Table -->
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">


                                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="ps-6 py-3 ml-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                    height="30" viewBox="0 0 24 24"
                                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                                    <path d="M13 9h-2v3H8v2h3v3h2v-3h3v-2h-3z">
                                                                    </path>
                                                                    <path
                                                                        d="M20 5h-8.586L9.707 3.293A.996.996 0 0 0 9 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 19V7h16l.002 12H4z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap"
                                                            onclick="window.location='adm3';">
                                                            <div class="px-3 py-3 text-start">
                                                                <div class="flex items-center gap-x-3">
                                                                    <span
                                                                        class="text-sm font-medium text-gray-800 dark:text-neutral-200 ml-3 mr-32">
                                                                        521211-Belanja Bahan (17 SPJ)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3 mr-10">
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    100%
                                                                </span>
                                                            </div>
                                                        </td>

                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3 mr-10">
                                                                <span
                                                                    class="text-sm text-gray-500 dark:text-neutral-500">
                                                                    12/12/2024 - 12/12/2024</span>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-3 py-1.5">
                                                                <button
                                                                    class="bg-red-600 hover:bg-red-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                        height="20" viewBox="0 0 24 24"
                                                                        style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                                                                        <path
                                                                            d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                                        </path>
                                                                        <path d="M9 10h2v8H9zm4 0h2v8h-2z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="ps-6 py-3 ml-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                    height="30" viewBox="0 0 24 24"
                                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                                    <path d="M13 9h-2v3H8v2h3v3h2v-3h3v-2h-3z">
                                                                    </path>
                                                                    <path
                                                                        d="M20 5h-8.586L9.707 3.293A.996.996 0 0 0 9 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 19V7h16l.002 12H4z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-3 py-3 text-start">
                                                                <div class="flex items-center gap-x-3">
                                                                    <span
                                                                        class="text-sm font-medium text-gray-800 dark:text-neutral-200 ml-3 mr-32">
                                                                        521211-Konsumsi Rapat (39 SPJ)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3 mr-10">
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    100%
                                                                </span>
                                                            </div>
                                                        </td>

                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3 mr-10">
                                                                <span
                                                                    class="text-sm text-gray-500 dark:text-neutral-500">
                                                                    12/12/2024 - 12/12/2024</span>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-3 py-1.5">
                                                                <button
                                                                    class="bg-red-600 hover:bg-red-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                        height="20" viewBox="0 0 24 24"
                                                                        style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                                                                        <path
                                                                            d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                                        </path>
                                                                        <path d="M9 10h2v8H9zm4 0h2v8h-2z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="ps-6 py-3 ml-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                    height="30" viewBox="0 0 24 24"
                                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                                    <path d="M13 9h-2v3H8v2h3v3h2v-3h3v-2h-3z">
                                                                    </path>
                                                                    <path
                                                                        d="M20 5h-8.586L9.707 3.293A.996.996 0 0 0 9 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 19V7h16l.002 12H4z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-3 py-3 text-start">
                                                                <div class="flex items-center gap-x-3">
                                                                    <span
                                                                        class="text-sm font-medium text-gray-800 dark:text-neutral-200 ml-3 mr-32">
                                                                        521213-Honor Camat Kades PJ (11 SPJ)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3 mr-10">
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    70%
                                                                </span>
                                                            </div>
                                                        </td>

                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3 mr-10">
                                                                <span
                                                                    class="text-sm text-gray-500 dark:text-neutral-500">
                                                                    12/12/2024 - 12/12/2024</span>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-3 py-1.5">
                                                                <button
                                                                    class="bg-red-600 hover:bg-red-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                        height="20" viewBox="0 0 24 24"
                                                                        style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                                                                        <path
                                                                            d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                                        </path>
                                                                        <path d="M9 10h2v8H9zm4 0h2v8h-2z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="ps-6 py-3 ml-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                    height="30" viewBox="0 0 24 24"
                                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                                    <path d="M13 9h-2v3H8v2h3v3h2v-3h3v-2h-3z">
                                                                    </path>
                                                                    <path
                                                                        d="M20 5h-8.586L9.707 3.293A.996.996 0 0 0 9 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 19V7h16l.002 12H4z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-3 py-3 text-start">
                                                                <div class="flex items-center gap-x-3">
                                                                    <span
                                                                        class="text-sm font-medium text-gray-800 dark:text-neutral-200 ml-3 mr-32">
                                                                        521213-Honor Inda Inas (1 SPJ)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3 mr-10">
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    30%
                                                                </span>
                                                            </div>
                                                        </td>

                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3 mr-10">
                                                                <span
                                                                    class="text-sm text-gray-500 dark:text-neutral-500">
                                                                    12/12/2024 - 12/12/2024</span>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-3 py-1.5">
                                                                <button
                                                                    class="bg-red-600 hover:bg-red-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                        height="20" viewBox="0 0 24 24"
                                                                        style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                                                                        <path
                                                                            d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                                        </path>
                                                                        <path d="M9 10h2v8H9zm4 0h2v8h-2z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="ps-6 py-3 ml-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                    height="30" viewBox="0 0 24 24"
                                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                                    <path d="M13 9h-2v3H8v2h3v3h2v-3h3v-2h-3z">
                                                                    </path>
                                                                    <path
                                                                        d="M20 5h-8.586L9.707 3.293A.996.996 0 0 0 9 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 19V7h16l.002 12H4z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-3 py-3 text-start">
                                                                <div class="flex items-center gap-x-3">
                                                                    <span
                                                                        class="text-sm font-medium text-gray-800 dark:text-neutral-200 ml-3 mr-32">
                                                                        521213-Honor Petugas (34 SPJ)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3 mr-10">
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    20%
                                                                </span>
                                                            </div>
                                                        </td>

                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3 mr-10">
                                                                <span
                                                                    class="text-sm text-gray-500 dark:text-neutral-500">
                                                                    12/12/2024 - 12/12/2024</span>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-3 py-1.5">
                                                                <button
                                                                    class="bg-red-600 hover:bg-red-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                        height="20" viewBox="0 0 24 24"
                                                                        style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                                                                        <path
                                                                            d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                                        </path>
                                                                        <path d="M9 10h2v8H9zm4 0h2v8h-2z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Card -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
    <!-- End Content -->

    <!-- ========== END MAIN CONTENT ========== -->
</body>

</html>