<div class="col-span-full xl:col-span-6 bg-white dark:bg-gray-800 shadow-sm rounded-xl">
    <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
        <h2 class="font-semibold text-gray-800 dark:text-gray-100">Leads</h2>
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
                            <div class="font-semibold text-center">Status</div>
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
                    <tr class="cursor-pointer bg-gradient-to-br from-transparent to-transparent hover:from-violet-500/10 hover:via-violet-400/10 hover:to-violet-500/10">
                        <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{ $lead->nama_perusahaan }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{ $lead->email }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500">{{ $lead->no_tlp }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{ $lead->alamat }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <!-- <div class="text-center">{{ $lead->level }}</div> -->
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <!-- <div class="text-center">{{ $lead->tanggal }}</div> -->
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">{{ $lead->waktu }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap flex justify-center">
                            <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2 mx-1" href="">
                                <i class="fas fa-trash"></i>
                            </button>
                            <a href="{{route('edit-data-leads', $lead->id)}}">
                                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mx-1">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    <tr class="cursor-pointer bg-gradient-to-br from-transparent to-transparent hover:from-violet-500/10 hover:via-violet-400/10 hover:to-violet-500/10">
                        <td class="p-2 whitespace-nowrap">
                                <div class="text-left">Philip Harbach</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">philip.h@gmail.com</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500">087427520758327</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">🇩🇪</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">Buyer</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">10.09.2024</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">09.30</div>
                        </td>
                        <td class="p-2 whitespace-nowrap flex justify-center">
                            <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2 mx-1" href="">
                                <i class="fas fa-trash"></i>
                            </button>
                            <!-- <a href="{{route('edit-data-leads')}}"> -->
                                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mx-1">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr class="cursor-pointer bg-gradient-to-br from-transparent to-transparent hover:from-violet-500/10 hover:via-violet-400/10 hover:to-violet-500/10">
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                               
                                <div class="text-left">Mirko Fisuk</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">mirkofisuk@gmail.com</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500">0847527582732</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">🇫🇷</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">Custemer</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">11.09.2024</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">10.09</div>
                        </td>
                        <td class="p-2 whitespace-nowrap flex justify-center">
                            <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2 mx-1" href="">
                                <i class="fas fa-trash"></i>
                            </button>
                            <!-- <a href="{{route('edit-data-leads')}}"> -->
                                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mx-1">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr class="cursor-pointer bg-gradient-to-br from-transparent to-transparent hover:from-violet-500/10 hover:via-violet-400/10 hover:to-violet-500/10">
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <!-- <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                                    <img class="rounded-full" src="{{ asset('images/user-36-08.jpg') }}" width="40" height="40" alt="Burak Long" />
                                </div> -->
                                <div class="font-medium text-left">Burak Long</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">longburak@gmail.com</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500">08752973525</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">🇬🇧</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">Reseller</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">12.09.2024</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">12.28</div>
                        </td>
                        <td class="p-2 whitespace-nowrap flex justify-center">
                            <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2 mx-1" href="">
                                <i class="fas fa-trash"></i>
                            </button>
                            <!-- <a href="{{route('edit-data-leads')}}"> -->
                                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mx-1">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                        </td>
                    </tr>                                                                           
                </tbody>
            </table>
        
        </div>
    
    </div>
</div>