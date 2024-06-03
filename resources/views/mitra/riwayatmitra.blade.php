<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mitra</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<html>

<body class="bg-gray-50 dark:bg-gray-400 w-full">
    <!-- ========== HEADER ========== -->
    <nav class="fixed top-0 z-50 w-full bg-blue-950 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a class="flex ms-2 md:me-24">
                        <img class="h-10 w-58" src="{{ asset( 'storage/image/logoputih.png' )}}">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- ========== END HEADER ========== -->

    <!-- ========== SideBAr ========== -->
    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-24 h-screen pt-20 shadow-md transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <div class="flex flex-col justify-center items-center gap-y-2 py-4">
                <div class="hs-tooltip inline-block [--placement:right]">
                    <button type="button" class=" hs-tooltip-toggle w-[2.375rem] h-[2.375rem] inline-flex flex-col items-center
                        justify-center px-5 rounded-full border border-transparent hover:bg-gray-50
                        dark:hover:bg-gray-800 group" onclick="window.location='dbmitra';">
                        <svg class=" w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600
                        dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z">
                            </path>
                        </svg>
                        <span
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 inline-block absolute invisible z-20 py-1.5 px-2.5 bg-gray-900 text-xs text-white rounded-lg whitespace-nowrap dark:bg-neutral-700"
                            role="tooltip">
                            Beranda
                        </span>
                    </button>
                </div>

                <div class="hs-tooltip inline-block [--placement:right]">
                    <button type="button" class=" hs-tooltip-toggle w-[2.375rem] h-[2.375rem] inline-flex flex-col items-center
                        justify-center px-5 rounded-full border border-transparent hover:bg-gray-50
                        dark:hover:bg-gray-800 group">
                        <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 8v5h5v-2h-3V8z"></path>
                            <path
                                d="M21.292 8.497a8.957 8.957 0 0 0-1.928-2.862 9.004 9.004 0 0 0-4.55-2.452 9.09 9.09 0 0 0-3.626 0 8.965 8.965 0 0 0-4.552 2.453 9.048 9.048 0 0 0-1.928 2.86A8.963 8.963 0 0 0 4 12l.001.025H2L5 16l3-3.975H6.001L6 12a6.957 6.957 0 0 1 1.195-3.913 7.066 7.066 0 0 1 1.891-1.892 7.034 7.034 0 0 1 2.503-1.054 7.003 7.003 0 0 1 8.269 5.445 7.117 7.117 0 0 1 0 2.824 6.936 6.936 0 0 1-1.054 2.503c-.25.371-.537.72-.854 1.036a7.058 7.058 0 0 1-2.225 1.501 6.98 6.98 0 0 1-1.313.408 7.117 7.117 0 0 1-2.823 0 6.957 6.957 0 0 1-2.501-1.053 7.066 7.066 0 0 1-1.037-.855l-1.414 1.414A8.985 8.985 0 0 0 13 21a9.05 9.05 0 0 0 3.503-.707 9.009 9.009 0 0 0 3.959-3.26A8.968 8.968 0 0 0 22 12a8.928 8.928 0 0 0-.708-3.503z">
                            </path>
                        </svg>
                        <span
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 inline-block absolute invisible z-20 py-1.5 px-2.5 bg-gray-900 text-xs text-white rounded-lg whitespace-nowrap dark:bg-neutral-700"
                            role="tooltip">
                            Riwayat
                        </span>
                    </button>
                </div>

                <div class="hs-tooltip inline-block [--placement:right]">
                    <button type="button" class=" hs-tooltip-toggle w-[2.375rem] h-[2.375rem] inline-flex flex-col items-center
                        justify-center px-5 rounded-full border border-transparent hover:bg-gray-50
                        dark:hover:bg-gray-800 group" data-hs-overlay="#hs-sign-out-alert">
                        <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 21c4.411 0 8-3.589 8-8 0-3.35-2.072-6.221-5-7.411v2.223A6 6 0 0 1 18 13c0 3.309-2.691 6-6 6s-6-2.691-6-6a5.999 5.999 0 0 1 3-5.188V5.589C6.072 6.779 4 9.65 4 13c0 4.411 3.589 8 8 8z">
                            </path>
                            <path d="M11 2h2v10h-2z"></path>
                        </svg>
                        <span
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 inline-block absolute invisible z-20 py-1.5 px-2.5 bg-gray-900 text-xs text-white rounded-lg whitespace-nowrap dark:bg-neutral-700"
                            role="tooltip">
                            Keluar
                        </span>
                    </button>
                </div>
            </div>
    </aside>
    <!-- ========== End SideBar ========== -->

    <!-- Logout -->
    <div id="hs-sign-out-alert"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-gray-800">
                <div class="absolute top-2 end-2">
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-gray-700"
                        data-hs-overlay="#hs-sign-out-alert">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>

                <div class="p-4 sm:p-10 text-center overflow-y-auto">
                    <!-- Icon -->
                    <span
                        class="mb-4 inline-flex justify-center items-center size-20 rounded-full border-4 border-yellow-50 bg-yellow-100 text-yellow-500 dark:bg-yellow-700 dark:border-yellow-600 dark:text-yellow-100">
                        <svg class="flex-shrink-0 size-8" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </span>
                    <!-- End Icon -->

                    <h3 class="mb-2 text-2xl font-bold text-gray-800 dark:text-gray-200">
                        Logout
                    </h3>
                    <p class="text-gray-500">
                        Apakah Anda Ingin Kembali Ke Halaman Login?
                    </p>

                    <div class="mt-6 flex justify-center gap-x-4">
                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white shadow-sm hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800"
                            href="home">
                            Keluar
                        </a>
                        <button type="button"
                            class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#hs-sign-out-alert">
                            Batal
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Logout -->

    <!-- ========== Tabs ========== -->
    <div class="pt-20 mr-7 lg:ml-32 ml-3 sm:ml-32 border-b border-gray-300 dark:border-gray-800">
        <nav class="flex space-x-1" aria-label="Tabs" role="tablist">
            <button type="button"
                class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap font-semibold text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active"
                id="tabs-with-underline-item-1" data-hs-tab="#tabs-with-underline-1"
                aria-controls="tabs-with-underline-1" role="tab">
                Pemutakhiran
            </button>
            <button type="button"
                class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap font-semibold text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-blue-500"
                id="tabs-with-underline-item-2" data-hs-tab="#tabs-with-underline-2"
                aria-controls="tabs-with-underline-2" role="tab">
                Pencacahan
            </button>
        </nav>
    </div>
    <!-- ========== End Tabs ========== -->

    <!-- ========== Pemutakhiran ========== -->
    <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
        <div class="p-5 mr-4 sm:ml-28">

            <div class="mt-6 ml-0 mb-3 flex justify-between">
                <span class="font-bold text-lg">
                    PEMUTAKHIRAN
                </span>
            </div>
            <div class="flex flex-col shadow-lg mb-12">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="pt-3 min-w-full inline-block align-middle">
                        <div class="border rounded-sm overflow-hidden bg-white">
                            <table class="min-w-full divide-y ">
                                <thead class="bg-gray-200 dark:bg-gray-900">
                                    <tr class="border-y border-x border-gray-300">
                                        <th scope=" col"
                                            class=" px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Nama Kegiatan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Kecamatan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Desa/Kelurahan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Tanggal</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>


                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End Pemutakhiran ========== -->

    <!-- ========== Pencacahan ========== -->
    <div id="tabs-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-2">
        <div class="p-5 mr-4 sm:ml-28">

            <!-- ========== Start ========== -->
            <div class="mt-6 ml-0 mb-3 flex justify-between">
                <span class="font-bold text-lg">
                    PENCACAHAN
                </span>
            </div>
            <div class="flex flex-col shadow-lg mb-12">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="pt-3 min-w-full inline-block align-middle">
                        <div class="border rounded-sm overflow-hidden bg-white">
                            <table class="min-w-full divide-y ">
                                <thead class="bg-gray-200 dark:bg-gray-900">
                                    <tr class="border-y border-x border-gray-300">
                                        <th scope=" col"
                                            class=" px-6 py-3 text-start text-xs font-bold text-gray-500  uppercase">
                                            Nama Kegiatan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Kecamatan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Desa/Kelurahan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Tanggal</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs font-medium text-gray-800 dark:text-neutral-200">
                                            Susenas</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            Sukasada</td>
                                        <td
                                            class="px-6 py-3whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            21/2/2024</td>
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-xs text-gray-800 dark:text-neutral-200">
                                            25</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== end ========== -->
        </div>
    </div>

    <!-- ========== End Tabs ========== -->




</body>

</html>