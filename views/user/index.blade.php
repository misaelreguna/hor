<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page | User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="md:flex md:items-center md:gap-6">
                    <a class="block text-teal-600" href="{{ route('user.index') }}">
                        <svg class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"
                                fill="currentColor" />
                        </svg>
                    </a>
                    <h1 class="font-bold text-2xl" style="font-family: Nunito;">Mini Bank</h1>
                </div>

                <div class="sm:flex sm:gap-4 cursor-pointer">
                    <a class="rounded-md bg-red-500 px-5 py-2.5 text-sm font-medium text-white shadow-sm"
                        href="{{ route('logout') }}">
                        Logout
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
                        fill="#1f1f1f">
                        <path
                            d="M226-262q59-42.33 121.33-65.5 62.34-23.17 132.67-23.17 70.33 0 133 23.17T734.67-262q41-49.67 59.83-103.67T813.33-480q0-141-96.16-237.17Q621-813.33 480-813.33t-237.17 96.16Q146.67-621 146.67-480q0 60.33 19.16 114.33Q185-311.67 226-262Zm253.88-184.67q-58.21 0-98.05-39.95Q342-526.58 342-584.79t39.96-98.04q39.95-39.84 98.16-39.84 58.21 0 98.05 39.96Q618-642.75 618-584.54t-39.96 98.04q-39.95 39.83-98.16 39.83ZM480.31-80q-82.64 0-155.64-31.5-73-31.5-127.34-85.83Q143-251.67 111.5-324.51T80-480.18q0-82.82 31.5-155.49 31.5-72.66 85.83-127Q251.67-817 324.51-848.5T480.18-880q82.82 0 155.49 31.5 72.66 31.5 127 85.83Q817-708.33 848.5-635.65 880-562.96 880-480.31q0 82.64-31.5 155.64-31.5 73-85.83 127.34Q708.33-143 635.65-111.5 562.96-80 480.31-80Zm-.31-66.67q54.33 0 105-15.83t97.67-52.17q-47-33.66-98-51.5Q533.67-284 480-284t-104.67 17.83q-51 17.84-98 51.5 47 36.34 97.67 52.17 50.67 15.83 105 15.83Zm0-366.66q31.33 0 51.33-20t20-51.34q0-31.33-20-51.33T480-656q-31.33 0-51.33 20t-20 51.33q0 31.34 20 51.34 20 20 51.33 20Zm0-71.34Zm0 369.34Z" />
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="pt-16 max-w-7xl mx-auto flex">
            <main class="flex-1 p-4">
                <div class="flex flex-col lg:flex-row gap-4 mb-6">
                    <div class="flex-1 bg-indigo-100 border border-indigo-200 rounded-xl p-6 animate-fade-in">
                        <h2 class="text-4xl md:text-5xl text-blue-900">
                            Welcome <br><strong>{{ Auth::user()->name }}</strong>
                        </h2>
                        <span
                            class="inline-block mt-8 px-8 py-2 rounded-full text-xl font-bold text-white bg-indigo-800 uppercase">
                            {{ Auth::user()->role }}
                        </span>
                    </div>

                    <div class="flex-1 bg-blue-100 border border-blue-200 rounded-xl p-6 animate-fade-in">
                        <h2 class="text-4xl md:text-5xl text-blue-900">
                            Saldo Anda <br><strong>Rp{{ number_format($currentUser->balance, 0, ',', '.') }}</strong>
                        </h2>
                        <a href="#last-row"
                            onclick="document.getElementById('last-row').scrollIntoView({ behavior: 'smooth' }); return false;"
                            class=" inline-block mt-8 px-8 py-2 rounded-full text-xl font-bold text-white bg-blue-800 hover:bg-blue-900 transition-transform duration-300 hover:scale-105">
                            Riwayat Transaksi
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <button data-modal-target="topup-modal" data-modal-toggle="topup-modal" type="button">
                        <div class="bg-white rounded-xl shadow-lg p-6 h-20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up flex items-center gap-3"
                            style="animation-delay: 0.1s">
                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960"
                                width="40px" fill="#1f1f1f">
                                <path
                                    d="M448.67-195.33h60v-51.34q57.33-7.66 92-38 34.66-30.33 34.66-84 0-48-27.33-81t-97.33-61Q452-533.33 427-551q-25-17.67-25-47.67Q402-628 423.17-645q21.16-17 58.83-17 30.67 0 51.33 14.5Q554-633 566.67-606.67l53.33-24q-15-35-43.5-57t-65.83-25.66V-764h-60v50.67Q400-705 371-673.67q-29 31.34-29 75 0 48.34 29.17 77.34 29.16 29 88.83 52.66 65.67 26.34 90.5 47.34 24.83 21 24.83 52.66 0 32.34-25.5 50.5Q524.33-300 486.67-300q-37 0-65.84-21.5Q392-343 380-382l-56 20q18.67 46.67 48.83 74.17 30.17 27.5 75.84 39.16v53.34ZM480-80q-82.33 0-155.33-31.5-73-31.5-127.34-85.83Q143-251.67 111.5-324.67T80-480q0-83 31.5-156t85.83-127q54.34-54 127.34-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82.33-31.5 155.33-31.5 73-85.5 127.34Q709-143 636-111.5T480-80Zm0-66.67q139.33 0 236.33-97.33t97-236q0-139.33-97-236.33t-236.33-97q-138.67 0-236 97-97.33 97-97.33 236.33 0 138.67 97.33 236 97.33 97.33 236 97.33ZM480-480Z" />
                            </svg>
                            <h3 class="text-xl font-bold text-indigo-800 ">TOP UP</h3>
                        </div>
                    </button>

                    <button data-modal-target="tariktunai-modal" data-modal-toggle="tariktunai-modal"type="button">
                        <div class="bg-white rounded-xl shadow-lg p-6 h-20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up flex items-center gap-3"
                            style="animation-delay: 0.2s">
                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960"
                                width="40px" fill="#1f1f1f">
                                <path
                                    d="M546.67-426.67q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM240-293.33q-27.5 0-47.08-19.59-19.59-19.58-19.59-47.08v-373.33q0-27.5 19.59-47.09Q212.5-800 240-800h613.33q27.5 0 47.09 19.58Q920-760.83 920-733.33V-360q0 27.5-19.58 47.08-19.59 19.59-47.09 19.59H240ZM333.33-360H760q0-39 27.17-66.17 27.16-27.16 66.16-27.16V-640q-39 0-66.16-27.17Q760-694.33 760-733.33H333.33q0 39-27.16 66.16Q279-640 240-640v186.67q39 0 66.17 27.16Q333.33-399 333.33-360ZM800-160H106.67q-27.5 0-47.09-19.58Q40-199.17 40-226.67V-680h66.67v453.33H800V-160ZM240-360v-373.33V-360Z" />
                            </svg>
                            <h3 class="text-xl font-bold text-indigo-800">WITHDRAW</h3>
                        </div>
                    </button>

                    <button data-modal-target="transfer-modal" data-modal-toggle="transfer-modal"type="button">
                        <div class="bg-white rounded-xl shadow-lg p-6 h-20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up flex items-center gap-3"
                            style="animation-delay: 0.3s">
                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960"
                                width="40px" fill="#1f1f1f">
                                <path
                                    d="M274-120 80-314l194.67-194.67 47 46.67L207-347.33h633v66.66H207l114 114L274-120Zm412-331.33L639-498l114-114H120v-66.67h633L638.33-793.33l47-46.67L880-645.33l-194 194Z" />
                            </svg>
                            <h3 class="text-xl font-bold text-indigo-800">TRANSFER</h3>
                        </div>
                    </button>

                    <a href="{{ route('mutasi.user.all') }}">
                        <div class="bg-white rounded-xl shadow-lg p-6 h-20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up flex items-center gap-3"
                            style="animation-delay: 0.3s">
                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#1f1f1f"><path d="M440-200h80v-167l64 64 56-57-160-160-160 160 57 56 63-63v167ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/></svg>
                            <h3 class="text-xl font-bold text-indigo-800">ALL HISTORY</h3>
                        </div>
                    </a>
                </div>
            </main>
        </div>
    </section>

    <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10 border rounded-lg mt-10 h-96 overflow-y-auto" ">
            <table class="w-full"  >
        <thead id="last-row">
            <tr class="bg-blue-300">
                <th class="text-center w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Tanggal</th>
                <th class="text-center w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Nama</th>
                <th class="text-center w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Category</th>
                <th class="text-center w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Jumlah</th>
                <th class="text-center w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Status</th>
                <th class="text-center w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Cetak</th>
            </tr>
        </thead>
        <tbody class="bg-blue-100">
            @foreach ($transactions as $item)
                <tr>
                    <td class="text-center py-4 px-6 border-b border-gray-200">{{ $item->created_at->format(' d M Y H:i') }}</td>
                    <td class="text-center py-4 px-6 border-b border-gray-200">{{ Auth::user()->name }}</td>
                    <td class="text-center py-4 px-6 border-b border-gray-200 truncate">
                        @if ($item->tipe_transaksi == 'transfer')
                            @if ($item->sender_id == Auth::id())
                                Transfer ke {{ $item->receiver?->name ?? 'Pengguna tidak ditemukan' }}
                            @elseif ($item->receiver_id == Auth::id())
                                Ditransfer oleh {{ $item->senders?->name ?? 'Pengguna tidak ditemukan' }}
                            @endif
                        @else
                            {{ ucfirst($item->tipe_transaksi) }}
                        @endif
                    </td>
                    <td class="text-center py-4 px-6 border-b border-gray-200">Rp.{{ $item->amount }}</td>
                    <td class="text-center py-4 px-6 border-b border-gray-200">
                        <span
                            class="{{ $item->confirmed == 0 ? 'bg-red-500' : 'bg-green-500' }} text-white py-1 px-2 rounded-full text-xs">
                            {{ $item->confirmed == 0 ? 'Pending' : 'Success' }}
                        </span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200 flex justify-center" >
                        <!-- Tombol untuk cetak PDF detail transaksi -->
                        <a href="{{ route('mutasi.user.single', $item->id) }}" class="btn btn-secondary btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M440-200h80v-167l64 64 56-57-160-160-160 160 57 56 63-63v167ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/></svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>

    <!-- Modals TopUp  -->
    <div id="topup-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Top Up
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="topup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{ route('user.topup') }}" method="POST">
                        @csrf
                        <div>
                            <label for="amount"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                                Nominal</label>
                            <input type="number" name="amount" id="amount  " placeholder="Example:10000"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">TopUp</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modals TopUp -->

    <!-- Modals Tarik Tunai  -->
    <div id="tariktunai-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Tarik Tunai
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="tariktunai-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{ route('user.tariktunai') }}" method="POST">
                        @csrf
                        <div>
                            <label for="amount"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                                Nominal</label>
                            <input type="number" name="amount" id="amount" placeholder="Example:10000"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tarik
                            Tunai</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modals Tarik Tunai -->

    <!-- Modals Transfer User  -->
    <div id="transfer-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Transfer Antar Siswa
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="transfer-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{ route('user.transfer') }}" method="POST">
                        @csrf
                        <label for="receiver"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Siswa
                            Penerima:</label>
                        <select name="receiver_id" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @foreach ($users as $user)
                                @if ($user->id !== Auth::id())
                                    <!-- Tidak bisa transfer ke diri sendiri -->
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <div>
                            <label for="amount"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                                Nominal</label>
                            <input type="number" name="amount" id="amount" placeholder="Example:10000"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Transfer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modals Transfer User -->

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
