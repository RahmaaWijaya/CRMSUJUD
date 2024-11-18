<x-app-layout>
<div  class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create Deals</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" method="POST" action="{{ route('store-deals')}}">
      @csrf
      <div>
        <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
        <div class="mt-2">
          <input id="nama" name="nama" type="text" autocomplete="nama" value="{{ old('nama')}}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          @error('nama')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <div>
        <label for="deskripsi" class="block text-sm font-medium leading-6 text-gray-900">Deskripsi</label>
        <div class="mt-2">
          <input id="deskripsi" name="deskripsi" type="text" autocomplete="deskripsi" value="{{ old('deskripsi')}}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          @error('deskripsi')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <div>
        <label for="jumlah" class="block text-sm font-medium leading-6 text-gray-900">Jumlah</label>
        <div class="mt-2">
          <input id="jumlah" name="jumlah" type="decimal" autocomplete="jumlah" value="{{ old('jumlah')}}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          @error('jumlah')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div>
        <label for="waktu" class="block text-sm font-medium leading-6 text-gray-900">Waktu</label>
        <div class="mt-2">
          <input id="waktu" name="waktu" type="datetime-local" autocomplete="waktu" value="{{ old('waktu')}}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          @error('waktu')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <div>
        <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
        <div class="mt-2">
         <select name="status" id="status" value="{{ old('status')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          <option value="Menunggu">Menunggu</option>
          <option value="Selesai">Selesai</option>
          <option value="Follow up">Follow up</option>
          <option value="Ditolak">Ditolak</option>
         </select>
         @error('status')
            <span class="text-red-500 text-sm">{{ $message }}</span>
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
</x-app-layout>