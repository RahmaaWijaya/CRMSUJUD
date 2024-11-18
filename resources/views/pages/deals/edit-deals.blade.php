<x-app-layout>
<div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
        <div class="bg-gradient-to-br from-blue-200 to-pink-200 p-6 rounded-lg max-w-md w-full">
            <h2 class="text-xl font-bold mb-4 text-center">Edit Data Deals</h2>
            <!-- Form Start -->
            <form action="{{ route('update-deals', $deal->deals_id )}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- <div class="mb-4">
                    <label class="block text-gray-700">Contacts Id :</label>
                    <input type="text" name="contacts_id" value="{{ old('contact_id', $deal->contacts_id)}}" class="w-full px-4 py-2 border rounded">
                    @error('contacts_id')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div> -->
                <div class="mb-4">
                    <label class="block text-gray-700">Nama :</label>
                    <input type="text" name="nama" value="{{ old('nama', $deal->nama)}}" class="w-full px-4 py-2 border rounded" required>
                    @error('nama')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Jumlah :</label>
                    <input type="text" name="jumlah" value="{{ old('jumlah', $deal->jumlah)}}" class="w-full px-4 py-2 border rounded" required>
                    @error('jumlah')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Deskripsi :</label>
                    <input type="text" name="deskripsi" value="{{ old('deskripsi', $deal->deskripsi)}}" class="w-full px-4 py-2 border rounded" required>
                    @error('deskripsi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Tanggal :</label>
                    <input type="datetime-local" name="waktu" value="{{ old('waktu', $deal->waktu)}}" class="w-full px-4 py-2 border rounded" required>
                    @error('waktu')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Status :</label>
                    <select name="status" class="w-full px-4 py-2 border rounded" required>
                        <option value="Menunggu" {{ old('status', $deal->status) == 'Menunggu' ? 'selected' : ''}} >Menunggu</option> 
                        <option value="Selesai" {{ old('status', $deal->status) == 'Selesai' ? 'selected' : ''}} >Selesai</option>
                        <option value="Follow up" {{ old('status', $deal->status) == 'Follow up' ? 'selected' : ''}} >Follow up</option>
                        <option value="Transaksi" {{ old('status', $deal->status) == 'Transaksi' ? 'selected' : ''}}>Transaksi</option>
                    </select>
                    @error('status')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex justify-between">
                   
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Selesai</button>
                </div>
            </form>
        </div>
    </div>

    <!-- backend 
    
    
    $deal['name']
    $deal['amount']
    $deal['date']

    $deal['status'] == 'Menunggu' ? 'selected' : ''
    $deal['status'] == 'Setuju' ? 'selected' : ''
    $deal['status'] == 'Ditolak' ? 'selected' : '' -->
</x-app-layout>

