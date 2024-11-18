<x-app-layout>
    <!-- <x-leads.create-leads></x-leads.create-leads> -->
    <div  class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create Leads</h2>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('leads.store') }}" method="POST">
                @csrf
                <div>
                    <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                    <div class="mt-2">
                    <input id="nama" name="nama" type="text" autocomplete="nama"  value="{{ old('nama') }}"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('nama')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div>
                    <label for="nama_perusahan" class="block text-sm font-medium leading-6 text-gray-900">Nama Perusahaan</label>
                    <div class="mt-2">
                    <input id="nama_perusahan" name="nama_perusahan" type="text" autocomplete="nama_perusahan" value="{{ old('nama_perusahan')}}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('nama_perusahan')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email')}}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('email')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                    </div>
                </div>

                <div>
                    <label for="no_tlp" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                    <div class="mt-2">
                    <input id="no_tlp" name="no_tlp" type="number" autocomplete="no_tlp" value="{{ old('no_tlp')}}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('no_tlp')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                    </div>
                </div>

                <div>
                    <label for="negara" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                    <div class="mt-2">
                    <input id="negara" name="negara" type="text" autocomplete="negara" value="{{ old('negara')}}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('negara')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <div>
                    <label for="kota" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                    <div class="mt-2">
                    <input id="kota" name="kota" type="text" autocomplete="kota" value="{{ old('kota')}}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('kota')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <div>
                    <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                    <div class="mt-2">
                    <input id="alamat" name="alamat" type="text" autocomplete="alamat" value="{{ old('alamat')}}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('alamat')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <div>
                    <label for="sosmed" class="block text-sm font-medium leading-6 text-gray-900">Sosmed</label>
                    <div class="mt-2">
                    <input id="sosmed" name="sosmed" type="text" autocomplete="sosmed" value="{{ old('sosmed')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('sosmed')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <div>
                    <label for="waktu" class="block text-sm font-medium leading-6 text-gray-900">Waktu</label>
                    <div class="mt-2">
                    <input id="waktu" name="waktu" type="datetime-local" autocomplete="waktu" value="{{ old('waktu')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('waktu')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <div>
                    <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                    <div class="mt-2">
                    <select name="status" id="status" value="{{ old('status')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option value="Leads">Leads</option>
                    <option value="Buyer">Buyer</option>
                    <option value="Customer">Customer</option>
                    <option value="Reseller">Reseller</option>
                    </select>
                    @error('status')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
                </div>
            </form>
            
            </p>
        </div>
    </div>
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var now = new Date();
            var datetimeLocal = now.toISOString().slice(0, 16); 
            document.getElementById('waktu').value = datetimeLocal;
        });
    </script> -->
</x-app-layout>