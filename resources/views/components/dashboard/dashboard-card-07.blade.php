@props(['recentDeals'])

<div class="col-span-full xl:col-span-6 bg-white dark:bg-gray-800 shadow-sm rounded-xl">
    <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
        <h2 class="font-semibold text-gray-800 dark:text-gray-100">Recent Deals</h2>
    </header>
    <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full dark:text-gray-300">
                <!-- Table header -->
                <thead class="text-xs uppercase text-gray-400 dark:text-gray-500 bg-gray-50 dark:bg-gray-700 dark:bg-opacity-50 rounded-sm">
                    <tr>
                        <th class="p-2">
                            <div class="font-semibold text-left">Nama</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Transaksi</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Tanggal</div>
                        </th>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm font-medium divide-y divide-gray-100 dark:divide-gray-700/60">
                    <!-- Row -->
                    @foreach($recentDeals as $deal)
                    <tr>
                        <td class="p-2">
                            <div class="flex items-center">
                                <div class="text-gray-800 dark:text-gray-100">{{$deal->nama}}</div>
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="text-center">{{$deal->jumlah}}</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-green-500">{{ \Carbon\Carbon::parse($deal->waktu)->format('d-m-Y') }}</div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>