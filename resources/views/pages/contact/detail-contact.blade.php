<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Detail Contact</h1>
            </div>
            <div class="flex space-x-4">
                <!-- Tombol WhatsApp -->
                <button class="flex items-center bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                    <span class="mr-2">Send WA</span>
                    <i class="fa-brands fa-whatsapp"></i>
                </button>
    
                <!-- Tombol Edit -->
                <a href="{{route('edit-data-contact', $contact->contact_id)}}" class="flex items-center bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full">
                    <span class="mr-2">Edit</span>
                    <i class="fa-solid fa-pencil"></i>
                </a>
            </div>
        </div>
            <!-- ini unutk memanggil detail contact -->
            <body>
                <div class="p-8 bg-pink-200 text-black">
                    <div class="mb-8">
                        <h2 class="font-bold text-xl" >Contact Information</h2>
                        <h2 class="font-bold text-lg">Name : <span class="font-normal">  {{$contact->nama}}</span></h2>
                        <div class="flex item-center">
                            <h2 class="font-bold text-lg">Email : </h2>
                                <div class="flex item-center">
                                    <!-- <i class="fa-solid fa-envelope"></i>  -->
                                    <span class="font-normal" "Email" class="inline w-4 h-4">  {{$contact->email}}</span>
                                </div>
                        </div>
        
                        <div class="flex item-center">
                            <h2 class="font-bold text-lg">Phone : </h2>
                         <div class="flex item-center">
                            <!-- <i class="fa-solid fa-phone"></i> -->
                            <span class="font-normal" "phone" class="inline w-4 h-4">  {{$contact->no_tlp}}</span>
                         </div>

                          </div>  
                    </div>

                    <div class="mb-8">
                        <h2 class="font-bold text-xl">Address Information</h2>
                        <h3 class="font-bold text-lg">Country: <span class="font-normal">{{$contact->negara}}</span></h3>
                        <h3 class="font-bold text-lg">City: <span class="font-normal">{{$contact->kota}}</span></h3>
                        <h3 class="font-bold text-lg">Address: <span class="font-normal">{{$contact->alamat}}</span></h3>
                        <h3 class="font-bold text-lg">Medsos: <span class="font-normal">{{$contact->medsos}}</span></h3>
                    </div>

                    <div>
                        <h2 class="font-bold text-xl">Activity Information</h2>
                        <h3 class="font-bold text-lg">Aktifitas : <span class="font-normal">{{$contact->aktifitas}}</span></h3>
                        <h3 class="font-bold text-lg">Status : <span class="font-normal">{{$contact->status}}</span></h3>
                        <h3 class="font-bold text-lg">Waktu Chat : <span class="font-normal">{{$contact->waktu_chat}}WIB</span></h3>
                    </div>
                </div>
            </body>
    </div>

</x-app-layout>