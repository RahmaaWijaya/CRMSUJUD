<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <!-- memanggil edit data dari componen -->
         <div class="inset-0 flex items-center justify-center">
            <!-- Mengatur tinggi maksimal-->
            <div class="bg-gradient-to-br from-blue-200 to-pink-200 p-6 rounded-lg max-w-md w-full">
                <h2 class="text-xl font-bold mb-4 text-center">Edit Data Calls</h2>
                <!-- Form Start -->
                <form action="{{ route('update-call', $call->calls_id)}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-gray-700">Nama :</label>
                        <input type="text" name="nama" value="{{old('nama', $call->nama)}}" class="w-full px-4 py-2 border rounded" required>
                        @error('nama')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Nama Perusahaan :</label>
                        <input type="text" name="nama_perusahaan" value="{{old('nama_perusahaan', $call->nama_perusahaan)}}" class="w-full px-4 py-2 border rounded" required>
                        @error('nama_perusahaan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Email :</label>
                        <input type="email" name="email" value="{{old('email', $call->email)}}" class="w-full px-4 py-2 border rounded" required>
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Phone :</label>
                        <input type="number" name="no_tlp" value="{{old('no_tlp', $call->no_tlp)}}" class="w-full px-4 py-2 border rounded" required>
                        @error('no_tlp')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Country :</label>
                        <input type="text" name="negara" value="{{old('negara', $call->negara)}}" class="w-full px-4 py-2 border rounded" required>
                        @error('negara')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">City :</label>
                        <input type="text" name="kota" value="{{old('kota', $call->kota)}}" class="w-full px-4 py-2 border rounded" required>
                        @error('kota')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Address :</label>
                        <input type="text" name="alamat" value="{{old('alamat', $call->alamat)}}" class="w-full px-4 py-2 border rounded" required>
                        @error('alamat')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Waktu Hubungi :</label>
                        <input type="datetime-local" name="tanggal" value="{{old('tanggal', $call->tanggal)}}" class="w-full px-4 py-2 border rounded" required>
                        @error('tanggal')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Sosmed :</label>
                        <input type="text" name="medsos" value="{{old('medsos', $call->medsos)}}" class="w-full px-4 py-2 border rounded" required>
                        @error('medsos')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Aktivitas :</label>
                        <select name="aktifitas" class="w-full px-4 py-2 border rounded" value="" required>
                            <option value="Penawaran" {{old('aktifitas', $call->aktifitas) == 'Penawaran' ? 'selected' : ''}}>Penawaran</option> 
                            <option value="Follow Up" {{old('aktifitas', $call->aktifitas) == 'Follow Up' ? 'selected' : ''}}>Follow Up</option>
                        </select>
                        @error('aktifitas')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="flex justify-between">
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Selesai</button>
                    </div>
                </form>
                <!-- Form End -->
            </div>
        </div>
    </div>
</x-app-layout>
