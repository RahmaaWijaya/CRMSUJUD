
<!-- tema pink -->

<!-- <div class="container mx-auto my-8">
    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border">
            <thead>
                <tr>
                    <th class="px-6 py-3 border bg-pink-400">Nama</th>
                    <th class="px-6 py-3 border bg-pink-400">Nama Perusahaan</th>
                    <th class="px-6 py-3 border bg-pink-400">Email</th>
                    <th class="px-6 py-3 border bg-pink-400">No.tlp</th>
                    <th class="px-6 py-3 border bg-pink-400">Action</th>
                </tr>                
            </thead>

                <tr class="even:bg-blue-200 odd:bg-pink-200 even:hover:bg-blue-300 odd:hover:bg-pink-300 cursor-pointer" onclick="window.location='{{route('detail-contact')}}'">
                    <td class="px-6 py-3 border">Lathif</td>
                    <td class="px-6 py-3 border">LAHhotel</td>
                    <td class="px-6 py-3 border">kbisa9@gmail.com</td>
                    <td class="px-6 py-3 border">76752328327</td>
                    <td class="px-6 py-3 border flex justify-center">
                        <button class="bg-red-500 text-white px-3 py-1 rounded mx-1"><i class="fa fa-trash"></i></button>
                        <a href="{{route('edit-data-contact')}}">
                            <button class="bg-green-500 text-white px-3 py-1 rounded mx-1"><i class="fa fa-edit"></i></button>
                        </a>
                    </td>
                </tr>
                <tr class="even:bg-blue-200 odd:bg-pink-200 even:hover:bg-blue-300 odd:hover:bg-pink-300 cursor-pointer" onclick="window.location='{{route('detail-contact')}}'">
                    <td class="px-6 py-3 border">Seyra</td>
                    <td class="px-6 py-3 border">SHhusada</td>
                    <td class="px-6 py-3 border">abcde@gmail.com</td>
                    <td class="px-6 py-3 border">78572847584758237</td>
                    <td class="px-6 py-3 border flex justify-center">
                        <button class="bg-red-500 text-white px-3 py-1 rounded mx-1"><i class="fa fa-trash"></i></button>
                        <a href="{{route('edit-data-contact')}}">
                            <button class="bg-green-500 text-white px-3 py-1 rounded mx-1"><i class="fa fa-edit"></i></button>
                        </a>
                    </td>
                </tr>
        </table>        
    </div>        
</div> -->

<!-- tema hitam & putih -->

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
                <tbody class="text-sm divide-y divide-gray-100 dark:divide-gray-700/60 cursor-pointer" onclick="window.location='{{route('detail-contact')}}'">
                    <tr class="bg-gradient-to-br from-transparent to-transparent hover:from-violet-500/10 hover:via-violet-400/10 hover:to-violet-500/10">
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex justify-center items-center">
                                <!-- Bagian Kiri Label Pita -->
                                <div class="bg-red-500 text-white text-xs font-bold py-1 px-2 rounded-l-lg">
                                    <span>25 Sep 2024</span>
                                </div>
                                <!-- Bagian Segitiga Pita -->
                                <div class="relative w-0 h-0 border-t-[14px] border-t-transparent border-b-[14px] border-b-transparent border-l-[10px] border-l-red-500"></div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">08.58</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">Seyra lallla</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">SHhusada</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500">abcde@gmail.com</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">08647933472653</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">Penawaran</div>
                        </td>
                        <td class="p-2 whitespace-nowrap flex justify-center">
                            <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2 mx-1">
                                <i class="fas fa-trash"></i>
                            </button>
                            <a href="{{route('edit-data-contact')}}">
                                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mx-1">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                                    <img class="rounded-full" src="{{ asset('images/user-36-06.jpg') }}" width="40" height="40" alt="Philip Harbach" />
                                </div>
                                <div class="font-medium text-gray-800">Philip Harbach</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">philip.h@gmail.com</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500">$2,767.04</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">🇩🇪</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                                    <img class="rounded-full" src="{{ asset('images/user-36-07.jpg') }}" width="40" height="40" alt="Mirko Fisuk" />
                                </div>
                                <div class="font-medium text-gray-800">Mirko Fisuk</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">mirkofisuk@gmail.com</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500">$1,220.66</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">🇫🇷</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                                    <img class="rounded-full" src="{{ asset('images/user-36-08.jpg') }}" width="40" height="40" alt="Burak Long" />
                                </div>
                                <div class="font-medium text-gray-800">Burak Long</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">longburak@gmail.com</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500">$1,890.66</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">🇬🇧</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                                    <img class="rounded-full" src="{{ asset('images/user-36-09.jpg') }}" width="40" height="40" alt="Alex Shatov" />
                                </div>
                                <div class="font-medium text-gray-800">Alex Shatov</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">alexshatov@gmail.com</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500">$2,890.66</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">🇺🇸</div>
                        </td>
                    </tr>                                                                                 -->
                </tbody>
            </table>
        
        </div>
    
    </div>
</div>