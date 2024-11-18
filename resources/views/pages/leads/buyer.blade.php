<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
             <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Buyer</h1>
            </div>
            <!-- Right: action  -->
             <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
             <div x-data="{ open: false }" class="relative inline-block text-left">
                    <!-- Button -->
                    <button @click="open = !open" class="bg-blue-500 text-white hover:bg-blue-600 rounded-t-md flex items-center w-full px-4 py-2">
                        <!-- Text -->
                        <span class="flex-1">Add Buyer</span>
                        <!-- Icon -->
                        <svg class="fill-current w-4 h-4 ml-2" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-1 w-full rounded-b-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10" style="display: none;">
                        <div class="py-2" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <!-- Create Lead -->
                            <a href="{{ route('create-lead') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Create Buyer</a>
                            <!-- Import Leads -->
                            <a href="{{ route('import-leads')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Import Buyer</a>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <!-- content -->
        <div class="col-span-full xl:col-span-6 bg-white dark:bg-gray-800 shadow-sm rounded-xl">
            <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
                <h2 class="font-semibold text-gray-800 dark:text-gray-100">Buyer</h2>
            </header>
            <div class="p-3">
                
                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <!-- Table header -->
                        <thead class="text-xs font-semibold uppercase text-gray-400 dark:text-gray-500 bg-gray-50 dark:bg-gray-700 dark:bg-opacity-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Nama Perusahaan</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Email</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">No.tlp</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Alamat</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Level</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Tanggal</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Waktu</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Action</div>
                                </th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody class="text-sm divide-y divide-gray-100 dark:divide-gray-700/60 ">
                            @foreach($leads as $lead)
                            @if($lead->status == 'Buyer')
                            <tr class="cursor-pointer bg-gradient-to-br from-transparent to-transparent hover:from-violet-500/10 hover:via-violet-400/10 hover:to-violet-500/10">
                                <td class="p-2 whitespace-nowrap">
                                    <a href="{{ route('lead-detail', $lead->leads_id) }}" class="text-left">{{ $lead->nama_perusahan }}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a href="{{ route('lead-detail', $lead->leads_id) }}" class="text-left">{{ $lead->email }}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a href="{{ route('lead-detail', $lead->leads_id) }}" class="text-left">{{ $lead->no_tlp }}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a href="{{ route('lead-detail', $lead->leads_id) }}" class="text-left">{{ $lead->alamat }}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a href="{{ route('lead-detail', $lead->leads_id) }}" class="text-left">{{ $lead->status }}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a href="{{ route('lead-detail', $lead->leads_id) }}" class="text-left">{{ $lead->waktu->format('Y-m-d') }}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a href="{{ route('lead-detail', $lead->leads_id) }}" class="text-left">{{ $lead->waktu->format('H:i:s') }}</a>
                                </td>
                                <td class="p-2 whitespace-nowrap flex justify-center">
                                    <form action="{{ route('delete.leads', $lead->leads_id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                                    
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2 mx-1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('edit.leads', $lead->leads_id)}}">
                                        <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mx-1">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                
                </div>
            
            </div>
        </div>
    </div>
</x-app-layout>