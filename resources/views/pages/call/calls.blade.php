<x-app-layout>
    <div  class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Calls</h1>
            </div>
            <div class="flex space-x-4">
                <!-- Tombol WhatsApp -->
                <button class="flex items-center bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                    <span class="mr-2">Send WA</span>
                    <i class="fa-brands fa-whatsapp"></i>
                </button>
            </div>
        </div>
        <!-- ini tabel  -->
        <x-calls.call-table></x-calls.call-table>
        <div class="col-span-full xl:col-span-6 bg-white dark:bg-gray-800 shadow-sm rounded-xl">
            <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
                <h2 class="font-semibold text-gray-800 dark:text-gray-100">Data Calls</h2>
            </header>
            <div class="p-3">
                
                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <!-- Table header -->
                        <thead class="text-xs font-semibold uppercase text-gray-400 dark:text-gray-500 bg-gray-50 dark:bg-gray-700 dark:bg-opacity-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                       <div class="font-semibold text-center">Tanggal</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Nama</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Nama Perusahaan</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Email</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Phone</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Aktivitas</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Action</div>
                                </th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody class="text-sm divide-y divide-gray-100 dark:divide-gray-700/60 cursor-pointer">
                            @foreach($calls as $call)
                            <tr class="bg-gradient-to-br from-transparent to-transparent hover:from-violet-500/10 hover:via-violet-400/10 hover:to-violet-500/10">
                            <!-- onclick="window.location.href='{{route('detail-call', $call->calls_id)}}'" -->
                                <td class="p-2 whitespace-nowrap" x-data="{ checked: false }" >
                                    <a class="flex justify-center items-center" href="{{route('detail-call', $call->calls_id)}}">
                                        <!-- Kotak Checklist -->
                                        <input type="checkbox" class="mr-2" x-model="checked">
                                        
                                        <!-- Bagian Kiri Label Pita -->
                                        <div :class="checked ? 'bg-green-500' : 'bg-red-500'" class="text-white text-xs font-bold py-1 px-2 rounded-l-lg">
                                            <span>{{\Carbon\Carbon::parse($call->tanggal)->format('d-m-Y')}}</span>
                                        </div>
                                        
                                        <!-- Bagian Segitiga Pita -->
                                        <div :class="checked ? 'border-l-green-500' : 'border-l-red-500'" class="relative w-0 h-0 border-t-[14px] border-t-transparent border-b-[14px] border-b-transparent border-l-[10px]"></div>
                                    </a>
                                </td>

                                <td class="p-2 whitespace-nowrap">
                                    <a class="text-left" href="{{route('detail-call', $call->calls_id)}}">{{$call->nama}}</a>
                                </td>
                                <!-- <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">SHhusada</div>
                                </td> -->
                                <td class="p-2 whitespace-nowrap">
                                    <a class="text-left font-medium text-green-500" href="{{route('detail-call', $call->calls_id)}}">{{$call->nama_perusahaan}}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a class="text-left font-medium text-green-500" href="{{route('detail-call', $call->calls_id)}}">{{$call->email}}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a class="text-center" href="{{route('detail-call', $call->calls_id)}}">{{$call->no_tlp}}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a class="text-center" href="{{route('detail-call', $call->calls_id)}}">{{$call->aktifitas}}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap flex justify-center">
                                    <form action="{{ route('delete-call', $call->calls_id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                                
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2 mx-1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('edit-call', $call->calls_id)}}">
                                        <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mx-1">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                
                </div>
            
            </div>
        </div>
    </div>

</x-app-layout>