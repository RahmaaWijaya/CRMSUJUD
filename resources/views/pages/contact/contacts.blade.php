<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
             <!-- Left: Title -->
             <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Contact</h1>
            </div>
            <div class="flex space-x-4">
                <!-- Tombol WhatsApp -->
                <button class="flex items-center bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                    <span class="mr-2">Send WA</span>
                    <i class="fa-brands fa-whatsapp"></i>
                </button>
    
                <!-- Tombol Edit -->
                <!-- <a href="{{route('edit-contact')}}" class="flex items-center bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full">
                    <span class="mr-2">Edit</span>
                    <i class="fa-solid fa-pencil"></i>
                </a> -->
            </div>
        </div>

        <!-- ini tabel  -->
       <div class="col-span-full xl:col-span-6 bg-white dark:bg-gray-800 shadow-sm rounded-xl">
            <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
                <h2 class="font-semibold text-gray-800 dark:text-gray-100">Data Contact</h2>
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
                                    <div class="font-semibold text-center">Waktu</div>
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
                            @foreach($contacts as $contact)
                            <tr class="bg-gradient-to-br from-transparent to-transparent hover:from-violet-500/10 hover:via-violet-400/10 hover:to-violet-500/10" href="{{route('detail.contact', $contact->contact_id)}}">
                                <td class="p-2 whitespace-nowrap">
                                    <a class="flex justify-center items-center" href="{{route('detail.contact', $contact->contact_id)}}">
                                        <!-- Bagian Kiri Label Pita -->
                                        <div class="bg-red-500 text-white text-xs font-bold py-1 px-2 rounded-l-lg">
                                            <span>{{ \Carbon\Carbon::parse($contact->waktu_chat)->format('Y-m-d')}}</span>
                                        </div>
                                        <!-- Bagian Segitiga Pita -->
                                        <div class="relative w-0 h-0 border-t-[14px] border-t-transparent border-b-[14px] border-b-transparent border-l-[10px] border-l-red-500"></div>
                                    </a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a class="text-center" href="{{route('detail.contact', $contact->contact_id)}}">{{ \Carbon\Carbon::parse($contact->waktu_chat)->format('H:i:s')}}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a class="text-left" href="{{route('detail.contact', $contact->contact_id)}}">{{$contact->nama}}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a class="text-left" href="{{route('detail.contact', $contact->contact_id)}}">{{$contact->nama_perusahaan}}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a class="text-left font-medium text-green-500" href="{{route('detail.contact', $contact->contact_id)}}">{{$contact->email}}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a class="text-center" href="{{route('detail.contact', $contact->contact_id)}}">{{$contact->no_tlp}}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a class="text-center" href="{{route('detail.contact', $contact->contact_id)}}">{{$contact->aktifitas}}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap flex justify-center">
                                    <form action="{{ route('delete-contact', $contact->contact_id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                                
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2 mx-1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <!-- <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2 mx-1">
                                        <i class="fas fa-trash"></i>
                                    </button> -->
                                    <a href="{{route('edit-data-contact',$contact->contact_id)}}">
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