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
                        dark:hover:bg-gray-800 group">
                        <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" viewBox="0 0 24 24">
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
                        dark:hover:bg-gray-800 group" onclick="window.location='riwayatmitra';">
                        <svg class=" w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600
                        dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 8v5h5v-2h-3V8z"></path>
                            <path
                                d="M21.292 8.497a8.957 8.957 0 0 0-1.928-2.862 9.004 9.004 0 0 0-4.55-2.452 9.09 9.09 0 0 0-3.626 0 8.965 8.965 0 0 0-4.552 2.453 9.048 9.048 0 0 0-1.928 2.86A8.963 8.963 0 0 0 4 12l.001.025H2L5 16l3-3.975H6.001L6 12a6.957 6.957 0 0 1 1.195-3.913 7.066 7.066 0 0 1 1.891-1.892 7.034 7.034 0 0 1 2.503-1.054 7.003 7.003 0 0 1 8.269 5.445 7.117 7.117 0 0 1 0 2.824 6.936 6.936 0 0 1-1.054 2.503c-.25.371-.537.72-.854 1.036a7.058 7.058 0 0 1-2.225 1.501 6.98 6.98 0 0 1-1.313.408 7.117 7.117 0 0 1-2.823 0 6.957 6.957 0 0 1-2.501-1.053 7.066 7.066 0 0 1-1.037-.855l-1.414 1.414A8.985 8.985 0 0 0 13 21a9.05 9.05 0 0 0 3.503-.707 9.009 9.009 0 0 0 3.959-3.26A8.968 8.968 0 0 0 22 12a8.928 8.928 0 0 0-.708-3.503z">
                            </path>
                        </svg>
                        <span
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 inline-block absolute invisible z-20 py-1.5 px-2.5 bg-gray-900 text-xs text-white rounded-lg whitespace-nowrap dark:bg-neutral-700"
                            a role="tooltip">
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
                            href="#">
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
        <nav class="flex space-x-1 overflow-x-auto" aria-label="Tabs" role="tablist">
            <button type="button"
                class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm font-semibold text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active"
                id="tabs-with-underline-item-1" data-hs-tab="#tabs-with-underline-1"
                aria-controls="tabs-with-underline-1" role="tab">
                Pemutakhiran
            </button>
            <button type="button"
                class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm font-semibold text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-blue-500"
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

            <div class="mt-6 ml-0 flex justify-between">
                <span class="font-bold text-base">
                    SUSENAS
                </span>
            </div>
            <div class="flex flex-col shadow-md">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="pt-3 min-w-full inline-block align-middle">
                        <div class="border rounded-sm overflow-hidden bg-white">
                            <table class="min-w-full divide-y ">
                                <thead class="bg-gray-200 dark:bg-gray-900">
                                    <tr class="border-y border-x border-gray-300">
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase ">
                                            Aksi</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            NBS dan SLS</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Penyelesaian Ruta</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            PML</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            PPL</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Kecamatan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Desa/Kelurahan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            NBS</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            NKS</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Nama SLS</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Beban Kerja</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            2024</th>
                                    </tr>
                                </thead>
                                <tbody class="border-y border-x border-gray-300">
                                    <tr class="border-b border-gray-200">
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            <button type="button"
                                                class="py-1 px-1 inline-flex items-center gap-x-2 rounded border border-transparent bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-overlay="#hs-toggle-between-modals-first-modal1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z">
                                                    </path>
                                                    <path
                                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            004B BANJAR SUMBERBATOK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-bold  text-blue-700 dark:text-gray-200">
                                            80%</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Made Padayasa</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Kadek Budiana</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            GEROKGAK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            SUMBER KLAMPOK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            004B</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            100,004</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            [000300] BANJAR SUMBERBATOK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            24</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            24</td>
                                    </tr>

                                    <tr class="border-b border-gray-300">
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            <button type="button"
                                                class="py-1 px-1 inline-flex items-center gap-x-2 rounded border border-transparent bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z">
                                                    </path>
                                                    <path
                                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            004B BANJAR SUMBERBATOK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-bold text-blue-700 dark:text-gray-200">
                                            80%</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Made Padayasa</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Kadek Budiana</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            GEROKGAK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            SUMBER KLAMPOK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            004B</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            100,004</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            [000300] BANJAR SUMBERBATOK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            24</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            24</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== Start ========== -->
            <div class="mt-10 ml-0 flex justify-between">
                <span class="font-bold text-base">
                    UBINAN
                </span>
            </div>
            <div class="flex flex-col shadow-md">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="pt-3 min-w-full inline-block align-middle">
                        <div class="border rounded-sm overflow-hidden bg-white">
                            <table class="min-w-full divide-y ">
                                <thead class="bg-gray-200 dark:bg-gray-900">
                                    <tr class="border-y border-x border-gray-300">
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Aksi</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Pemeriksaan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Pencacahan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            NBS</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            NKS</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Blok</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody class="border-y border-x border-gray-300">
                                    <tr class="border-b border-gray-200">
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            <button type="button"
                                                class="py-1 px-1 inline-flex items-center gap-x-2 text-sm font-semibold rounded border border-transparent bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-overlay="#hs-toggle-between-modals-first-modal3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z">
                                                    </path>
                                                    <path
                                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Dewa</td>

                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Bagas</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            12345</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            1234</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            GEROGAK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-semibold text-blue-700 dark:text-gray-200">
                                            Sudah</td>
                                    </tr>

                                    <tr class="border-b border-gray-300">
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            <button type="button"
                                                class="py-1 px-1 inline-flex items-center gap-x-2 text-sm font-semibold rounded border border-transparent bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z">
                                                    </path>
                                                    <path
                                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Dewa</td>

                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Bagas</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            12345</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            1234</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            GEROGAK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-semibold text-red-700 dark:text-gray-200">
                                            Belum</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== end ========== -->

            <!-- ========== Start ========== -->
            <div class="mt-10 ml-0 flex justify-between">
                <span class="font-bold text-base">
                    PERUSAHAAN
                </span>
            </div>
            <div class="flex flex-col shadow-md mb-12">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="pt-3 min-w-full inline-block align-middle">
                        <div class="border rounded-sm overflow-hidden bg-white">
                            <table class="min-w-full">
                                <thead class="bg-gray-200 dark:bg-gray-900">
                                    <tr class="border-y border-x border-gray-300">
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Aksi</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            ID SPR</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Nama Perusahan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody class="border-y border-x border-gray-300">
                                    <tr class="border-b border-gray-200">
                                        <td class="px-6 py-2 whitespace-nowrap text-gray-800 dark:text-gray-200">
                                            <button type="button"
                                                class="py-1 px-1 inline-flex items-center gap-x-2 text-sm font-semibold rounded border border-transparent bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-overlay="#hs-toggle-between-modals-first-modal4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z">
                                                    </path>
                                                    <path
                                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            1223444</td>

                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            PTIndfood.</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-semibold text-blue-700 dark:text-gray-200">
                                            Sudah</td>
                                    </tr>

                                    <tr class="border-b border-gray-300">
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            <button type="button"
                                                class="py-1 px-1 inline-flex items-center gap-x-2 text-sm font-semibold rounded border border-transparent bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z">
                                                    </path>
                                                    <path
                                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            1223444</td>

                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            PTIndfood.</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-semibold text-red-700 dark:text-gray-200">
                                            Belum</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== End ========== -->
        </div>
    </div>
    <!-- ========== End Pemutakhiran ========== -->

    <!-- ========== Pencacahan ========== -->
    <div id="tabs-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-2">
        <div class="p-5 mr-4 sm:ml-28">

            <!-- ========== Start ========== -->
            <div class="mt-6 ml-0 flex justify-between">
                <span class="font-bold text-base">
                    SUSENAS
                </span>
            </div>
            <div class="flex flex-col shadow-md">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="pt-3 min-w-full inline-block align-middle">
                        <div class="border rounded-sm overflow-hidden bg-white">
                            <table class="min-w-full">
                                <thead class="bg-gray-200 dark:bg-gray-900">
                                    <tr class="border-y border-x border-gray-300">
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Aksi</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            NBS dan SLS</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Penyelesaian Ruta</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            PML</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            PPL</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Kecamatan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Desa/Kelurahan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody class="border-y border-x border-gray-300">
                                    <tr class="border-b border-gray-200">
                                        <td class="px-6 py-2 whitespace-nowrap text-gray-800 dark:text-gray-200">
                                            <button type="button"
                                                class="py-1 px-1 inline-flex items-center gap-x-2 text-sm font-semibold rounded border border-transparent  bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-overlay="#hs-toggle-between-modals-first-modal5">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z">
                                                    </path>
                                                    <path
                                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            004B BANJAR SUMBERBATOK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-bold text-blue-700 dark:text-gray-200">
                                            80%</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Made Padayasa</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Kadek Budiana</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            GEROKGAK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            SUMBER KLAMPOK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-semibold text-blue-700 dark:text-gray-200">
                                            Sudah</td>
                                    </tr>

                                    <tr class="border-b border-gray-300">
                                        <td class="px-6 py-2 whitespace-nowrap text-gray-800 dark:text-gray-200">
                                            <button type="button"
                                                class="py-1 px-1 inline-flex items-center gap-x-2 text-sm font-semibold rounded border border-transparent  bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z">
                                                    </path>
                                                    <path
                                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            004B BANJAR SUMBERBATOK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-bold text-blue-700 dark:text-gray-200">
                                            80%</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Made Padayasa</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Kadek Budiana</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            GEROKGAK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            SUMBER KLAMPOK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-semibold text-red-700 dark:text-gray-200">
                                            Belum</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== end ========== -->

            <!-- ========== Start ========== -->
            <div class="mt-10 ml-0 flex justify-between">
                <span class="font-bold text-base">
                    UBINAN
                </span>
            </div>
            <div class="flex flex-col shadow-md">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="pt-3 min-w-full inline-block align-middle">
                        <div class="border rounded-sm overflow-hidden bg-white">
                            <table class="min-w-full">
                                <thead class="bg-gray-200 dark:bg-gray-900">
                                    <tr class="border-y border-x border-gray-300">
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Aksi</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Pemeriksaan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Pencacahan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            NBS</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            NKS</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Blok</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody class="border-y border-x border-gray-300">
                                    <tr class="border-b border-gray-200">
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            <button type="button"
                                                class="py-1 px-1 inline-flex items-center gap-x-2 text-sm font-semibold rounded border border-transparent  bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-overlay="#hs-toggle-between-modals-first-modal7">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z">
                                                    </path>
                                                    <path
                                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Dewa</td>

                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Bagas</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            12345</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            1234</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            GEROGAK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-semibold text-red-700 dark:text-gray-200">
                                            Belum</td>
                                    </tr>

                                    <tr class="border-b border-gray-300">
                                        <td class="px-6 py-2 whitespace-nowrap text-gray-800 dark:text-gray-200">
                                            <button type="button"
                                                class="py-1 px-1 inline-flex items-center gap-x-2 text-sm font-semibold rounded border border-transparent bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z">
                                                    </path>
                                                    <path
                                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Dewa</td>

                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            Bagas</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            12345</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            1234</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            GEROGAK</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-semibold text-blue-700 dark:text-gray-200">
                                            Sudah</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== end ========== -->

            <!-- ========== Start ========== -->
            <div class="mt-10 ml-0 flex justify-between">
                <span class="font-bold text-base">
                    PERUSAHAAN
                </span>
            </div>
            <div class="flex flex-col shadow-md mb-12">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="pt-3 min-w-full inline-block align-middle">
                        <div class="border rounded-sm overflow-hidden bg-white">
                            <table class="min-w-full">
                                <thead class="bg-gray-200 dark:bg-gray-900">
                                    <tr class="border-y border-x border-gray-300">
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Aksi</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            ID SPR</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Nama Perusahan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-gray-400">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody class="border-y border-x border-gray-300">
                                    <tr class="border-b border-gray-200">
                                        <td class="px-6 py-2 whitespace-nowrap text-gray-800 dark:text-gray-200">
                                            <button type="button"
                                                class="py-1 px-1 inline-flex items-center gap-x-2 text-sm font-semibold rounded border border-transparent  bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-overlay="#hs-toggle-between-modals-first-modal8">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z">
                                                    </path>
                                                    <path
                                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            1223444</td>

                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            PTIndfood.</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-semibold text-blue-700 dark:text-gray-200">
                                            Sudah</td>
                                    </tr>

                                    <tr class="border-b border-gray-300">
                                        <td class="px-6 py-2 whitespace-nowrap text-gray-800 dark:text-gray-200">
                                            <button type="button"
                                                class="py-1 px-1 inline-flex items-center gap-x-2 text-sm font-semibold rounded border border-transparent bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z">
                                                    </path>
                                                    <path
                                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            1223444</td>

                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            PTIndfood.</td>
                                        <td
                                            class="px-6 py-2 whitespace-nowrap text-sm font-semibold text-red-700 dark:text-gray-200">
                                            Belum</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== End Pencacahan ========== -->
        </div>
    </div>


    <!-- ========== PEMUTAKHIRAN ========== -->
    <!-- ========== Start Modal ========== -->
    <!-- ========== Start Modal Pertama ========== -->
    <!-- modal 1 -->
    <div id="hs-toggle-between-modals-first-modal1"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="flex justify-between items-center py-3 px-4 shadow-sm border-b-2 dark:border-gray-700">
                    <h3 class="font-bold ml-2 text-gray-800 dark:text-white">
                        SUSENAS
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                        data-hs-overlay="#hs-toggle-between-modals-first-modal1" data-hs-overlay-close="">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="space-y-4">
                        <form class="mx-2">
                            <div class="mb-5 pt-3">
                                <label for="text" class=" block text-xs font-semibold text-gray-900 dark:text-white">
                                    NBS & SLS
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />
                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Penyelesaian Ruta
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    PPL
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Kecamatan
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Desa/Kelurahan
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    NBS
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Nama SLS
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Beban Kerja
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    2024
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1  font-semibold rounded-xl border border-transparent  bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal1">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                            </path>
                            <path
                                d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Ubah</p>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="hs-toggle-between-modals-second-modal1"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="flex justify-between items-center py-3 px-4 shadow-sm border-b-2 dark:border-gray-700">
                    <h3 class="font-bold ml-2 text-gray-800 dark:text-white">
                        SUSENAS
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal1" data-hs-overlay-close="">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="my-4">
                        <form class="mx-2">
                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">NBS &
                                    SLS</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Penyelesaian
                                    Ruta</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">PML</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">PPL</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Kecamatan</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Desa/Kelurahan</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">NBS</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">NKS</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Nama
                                    SLS</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Beban
                                    Kerja</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">2024</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-first-modal1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Kembali</p>
                    </button>
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-green-500 text-white hover:bg-green-600 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal1" data-hs-overlay-close="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="M5 21h14a2 2 0 0 0 2-2V8a1 1 0 0 0-.29-.71l-4-4A1 1 0 0 0 16 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2zm10-2H9v-5h6zM13 7h-2V5h2zM5 5h2v4h8V5h.59L19 8.41V19h-2v-5a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v5H5z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Simpan</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End Modal Pertama ========== -->

    <!-- ========== Start Modal Ketiga ========== -->
    <div id="hs-toggle-between-modals-first-modal3"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="flex justify-between items-center py-3 px-4 shadow-sm border-b-2 dark:border-gray-700">
                    <h3 class="font-bold ml-2 text-gray-800 dark:text-white">
                        UBINAN
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                        data-hs-overlay="#hs-toggle-between-modals-first-modal3" data-hs-overlay-close="">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="space-y-4">
                        <form class="mx-2">
                            <div class="mb-5 pt-3">
                                <label for="text" class=" block text-xs font-semibold text-gray-900 dark:text-white">
                                    Pemeriksaan
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />
                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Pencacahan
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    NBS
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    NKS
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Blok
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Status
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent  bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal3">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                            </path>
                            <path
                                d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Ubah</p>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="hs-toggle-between-modals-second-modal3"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="flex justify-between items-center py-3 px-4 shadow-sm border-b-2 dark:border-gray-700">
                    <h3 class="font-bold ml-2 text-gray-800 dark:text-white">
                        UBINAN
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal3" data-hs-overlay-close="">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="my-4">
                        <form class="mx-2">
                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">NBS &
                                    Pemeriksaan</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Pencacahan</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">NBS </label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">NKS</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Blok</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Status</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-first-modal3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Kembali</p>
                    </button>
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-green-500 text-white hover:bg-green-600 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal3" data-hs-overlay-close="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="M5 21h14a2 2 0 0 0 2-2V8a1 1 0 0 0-.29-.71l-4-4A1 1 0 0 0 16 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2zm10-2H9v-5h6zM13 7h-2V5h2zM5 5h2v4h8V5h.59L19 8.41V19h-2v-5a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v5H5z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Simpan</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End Modal Ketiga ========== -->

    <!-- ========== Start Modal Keempat ========== -->
    <div id="hs-toggle-between-modals-first-modal4"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="flex justify-between items-center py-3 px-4 shadow-sm border-b-2 dark:border-gray-700">
                    <h3 class="font-bold ml-2 text-gray-800 dark:text-white">
                        PERUSAHAN
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                        data-hs-overlay="#hs-toggle-between-modals-first-modal4" data-hs-overlay-close="">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="space-y-4">
                        <form class="mx-2">
                            <div class="mb-5 pt-3">
                                <label for="text" class=" block text-xs font-semibold text-gray-900 dark:text-white">
                                    ID SPR
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />
                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Nama Perusahan
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Status
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal4">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                            </path>
                            <path
                                d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Ubah</p>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="hs-toggle-between-modals-second-modal4"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="flex justify-between items-center py-3 px-4 shadow-sm border-b-2 dark:border-gray-700">
                    <h3 class="font-bold ml-2 text-gray-800 dark:text-white">
                        PERUSAHAN
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal4" data-hs-overlay-close="">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="my-4">
                        <form class="mx-2">
                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">
                                    ID SPR</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Nama
                                    Perusahan</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Status</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-first-modal4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Kembali</p>
                    </button>
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-green-500 text-white hover:bg-green-600 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal4" data-hs-overlay-close="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="M5 21h14a2 2 0 0 0 2-2V8a1 1 0 0 0-.29-.71l-4-4A1 1 0 0 0 16 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2zm10-2H9v-5h6zM13 7h-2V5h2zM5 5h2v4h8V5h.59L19 8.41V19h-2v-5a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v5H5z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Simpan</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End Modal Keempat ========== -->
    <!-- ========== End Modal ========== -->


    <!-- ========== PENCACAHAN ========== -->
    <!-- ========== Start Modal ========== -->
    <!-- ========== Start Modal Kelima ========== -->
    <!-- modal 1 -->
    <div id="hs-toggle-between-modals-first-modal5"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="flex justify-between items-center py-3 px-4 shadow-sm border-b-2 dark:border-gray-700">
                    <h3 class="font-bold ml-2 text-gray-800 dark:text-white">
                        SUSENAS
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                        data-hs-overlay="#hs-toggle-between-modals-first-modal5" data-hs-overlay-close="">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="space-y-4">
                        <form class="mx-2">
                            <div class="mb-5 pt-3">
                                <label for="text" class=" block text-xs font-semibold text-gray-900 dark:text-white">
                                    NBS & SLS
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />
                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Penyelesaian Ruta
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />
                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    PPL
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />
                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Kecamatan
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />
                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Desa/Kelurahan
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />
                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Status
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal5">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                            </path>
                            <path
                                d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Ubah</p>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="hs-toggle-between-modals-second-modal5"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="flex justify-between items-center py-3 px-4 shadow-sm border-b-2 dark:border-gray-700">
                    <h3 class="font-bold ml-2 text-gray-800 dark:text-white">
                        SUSENAS
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal5" data-hs-overlay-close="">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="my-4">
                        <form class="mx-2">
                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">NBS &
                                    SLS</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Penyelesaian
                                    Ruta</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">PML</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">PPL</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Kecamatan</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Desa/Kelurahan</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Status</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-first-modal5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Kembali</p>
                    </button>
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-green-500 text-white hover:bg-green-600 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal5" data-hs-overlay-close="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="M5 21h14a2 2 0 0 0 2-2V8a1 1 0 0 0-.29-.71l-4-4A1 1 0 0 0 16 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2zm10-2H9v-5h6zM13 7h-2V5h2zM5 5h2v4h8V5h.59L19 8.41V19h-2v-5a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v5H5z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Simpan</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End Modal kelima ========== -->

    <!-- ========== Start Modal Ketujuh ========== -->
    <div id="hs-toggle-between-modals-first-modal7"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="flex justify-between items-center py-3 px-4 shadow-sm border-b-2 dark:border-gray-700">
                    <h3 class="font-bold ml-2 text-gray-800 dark:text-white">
                        UBINAN
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                        data-hs-overlay="#hs-toggle-between-modals-first-modal7" data-hs-overlay-close="">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="space-y-4">
                        <form class="mx-2">
                            <div class="mb-5 pt-3">
                                <label for="text" class=" block text-xs font-semibold text-gray-900 dark:text-white">
                                    Pemeriksaan
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />
                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Pencacahan
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    NBS
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    NKS
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Blok
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Status
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal7">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                            </path>
                            <path
                                d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Ubah</p>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="hs-toggle-between-modals-second-modal7"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="flex justify-between items-center py-3 px-4 shadow-sm border-b-2 dark:border-gray-700">
                    <h3 class="font-bold ml-2 text-gray-800 dark:text-white">
                        UBINAN
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal7" data-hs-overlay-close="">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="my-4">
                        <form class="mx-2">
                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">NBS &
                                    Pemeriksaan</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Pencacahan</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">NBS </label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">NKS</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Blok</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Status</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-first-modal7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Kembali</p>
                    </button>
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-green-500 text-white hover:bg-green-600 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal7" data-hs-overlay-close="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="M5 21h14a2 2 0 0 0 2-2V8a1 1 0 0 0-.29-.71l-4-4A1 1 0 0 0 16 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2zm10-2H9v-5h6zM13 7h-2V5h2zM5 5h2v4h8V5h.59L19 8.41V19h-2v-5a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v5H5z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Simpan</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End Modal Ketujuh ========== -->

    <!-- ========== Start Modal Kedelapan ========== -->
    <div id="hs-toggle-between-modals-first-modal8"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="flex justify-between items-center py-3 px-4 shadow-sm border-b-2 dark:border-gray-700">
                    <h3 class="font-bold ml-2 text-gray-800 dark:text-white">
                        PERUSAHAN
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                        data-hs-overlay="#hs-toggle-between-modals-first-modal8" data-hs-overlay-close="">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="space-y-4">
                        <form class="mx-2">
                            <div class="mb-5 pt-3">
                                <label for="text" class=" block text-xs font-semibold text-gray-900 dark:text-white">
                                    ID SPR
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />
                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Nama Perusahan
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>

                            <div class="mb-5 pt-1">
                                <label for="text" class="block text-xs font-semibold text-gray-900 dark:text-white">
                                    Status
                                </label>
                                <input type="text" id="text" disabled
                                    class="bg-transparent w-full pl-0 border-0 border-b  border-gray-300 appearance-none dark:text-white dark:border-gray-700"
                                    placeholder="004B BANJAR SUMBERBATOK" required />

                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-blue-600  text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal8">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                            </path>
                            <path
                                d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Ubah</p>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="hs-toggle-between-modals-second-modal8"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="flex justify-between items-center py-3 px-4 shadow-sm border-b-2 dark:border-gray-700">
                    <h3 class="font-bold ml-2 text-gray-800 dark:text-white">
                        PERUSAHAN
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal8" data-hs-overlay-close="">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="my-4">
                        <form class="mx-2">
                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">
                                    ID SPR</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Nama
                                    Perusahan</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">Status</label>
                                <input type="text" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-first-modal8">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Kembali</p>
                    </button>
                    <button type="button"
                        class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-semibold rounded-xl border border-transparent bg-green-500 text-white hover:bg-green-600 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-toggle-between-modals-second-modal8" data-hs-overlay-close="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="M5 21h14a2 2 0 0 0 2-2V8a1 1 0 0 0-.29-.71l-4-4A1 1 0 0 0 16 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2zm10-2H9v-5h6zM13 7h-2V5h2zM5 5h2v4h8V5h.59L19 8.41V19h-2v-5a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v5H5z">
                            </path>
                        </svg>
                        <p class="text-sm font-semibold">Simpan</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End Modal Kedelapan ========== -->
    <!-- ========== End Modal ========== -->
</body>


</html>