<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
             <!-- Left: Title -->
             <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Deals</h1>
            </div>
                
            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
                <!-- Datepicker built with flatpickr -->
                <x-datepicker />
                <div x-data="{ open: false }" class="relative inline-block text-left">
                    <!-- Button -->
                    <button @click="open = !open" class="bg-blue-500 text-white hover:bg-blue-600 rounded-t-md flex items-center w-full px-4 py-2">
                        <!-- Text -->
                        <span class="flex-1">Add Deals</span>
                        <!-- Icon -->
                        <svg class="fill-current w-4 h-4 ml-2" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-1 w-full rounded-b-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10" style="display: none;">
                        <div class="py-2" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <!-- Create Deals -->
                            <a href="{{ route('create-deals') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Create Deals</a>
                            <!-- Import Deals -->
                            <a href="{{ route('import-deals')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Import Transaksi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container mx-auto my-8">
            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse border">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border bg-pink-400">Nama</th>
                            <th class="px-6 py-3 border bg-pink-400">Jumlah</th>
                            <th class="px-6 py-3 border bg-pink-400">Tanggal</th>
                            <th class="px-6 py-3 border bg-pink-400">Status</th>
                            <th class="px-6 py-3 border bg-pink-400">Action</th>
                        </tr>
                    </thead>
                    <tr class="even:bg-blue-200 odd:bg-pink-200">
                            <td class="px-6 py-3 border"></td>
                            <td class="px-6 py-3 border"></td>
                            <td class="px-6 py-3 border"></td>
                            <td class="px-6 py-3 border"></td>
                            <td class="px-6 py-3 border">
                                <button class="bg-red-500 text-white px-3 py-1 rounded"><i class="fa fa-trash"></i></button>
                                <a href="">
                                    <button class="bg-green-500 text-white px-3 py-1 rounded"><i class="fa fa-edit"></i></button>
                                </a>
                            </td>
                        </tr>
                </table>
                </div>
        </div> -->
        <div class="col-span-full xl:col-span-6 bg-white dark:bg-gray-800 shadow-sm rounded-xl">
            <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
                <h2 class="font-semibold text-gray-800 dark:text-gray-100">Data Deals</h2>
            </header>
            <div class="p-3">
                
                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <!-- Table header -->
                        <thead class="text-xs font-semibold uppercase text-gray-400 dark:text-gray-500 bg-gray-50 dark:bg-gray-700 dark:bg-opacity-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Nama</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Jumlah</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Deskripsi</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Tanggal</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Waktu</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Status</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Action</div>
                                </th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody class="text-sm divide-y divide-gray-100 dark:divide-gray-700/60 cursor-pointer">
                            @foreach($deals as $deal)
                            <tr class="bg-gradient-to-br from-transparent to-transparent hover:from-violet-500/10 hover:via-violet-400/10 hover:to-violet-500/10">
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$deal->nama}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$deal->jumlah}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$deal->deskripsi}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">{{\Carbon\Carbon::parse($deal->waktu)->format('Y-m-d')}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">{{\Carbon\Carbon::parse($deal->waktu)->format('H:i:s')}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap text-center">
                                    <div class="
                                    @if($deal->status === 'Menunggu') bg-yellow-500 text-white 
                                    @elseif($deal->status === 'Selesai') bg-green-500 text-white 
                                    @elseif($deal->status === 'Follow up') bg-blue-500 text-white 
                                    @elseif($deal->status === 'Transaksi') bg-red-500 text-white 
                                    @endif
                                    rounded px-2 py-1 inline-block">
                                        {{$deal->status}}
                                    
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap flex justify-center">
                                    <form action="{{ route('delete-deals', $deal->deals_id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                                
                                         <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2 mx-1">
                                                    <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('edit-deals', $deal->deals_id)}}">
                                        <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mx-1">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                </div>
            
            </div>
        </div>
    </div>    
</x-app-layout>