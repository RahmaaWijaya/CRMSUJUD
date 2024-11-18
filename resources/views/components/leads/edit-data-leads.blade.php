<div class="inset-0 flex items-center justify-center">
            <!-- Mengatur tinggi maksimal-->
            <div class="bg-gradient-to-br from-blue-200 to-pink-200 p-6 rounded-lg max-w-md w-full">
                <h2 class="text-xl font-bold mb-4 text-center">Edit Data Leads</h2>
                <!-- Form Start -->
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700">Nama :</label>
                        <input type="text" name="name" value="" class="w-full px-4 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Nama Perusahaan :</label>
                        <input type="text" name="nameperusahaan" value="" class="w-full px-4 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Email :</label>
                        <input type="email" name="email" value="" class="w-full px-4 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Phone :</label>
                        <input type="number" name="phone" value="" class="w-full px-4 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Country :</label>
                        <input type="text" name="negara" value="" class="w-full px-4 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">City :</label>
                        <input type="text" name="kote" value="" class="w-full px-4 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Address :</label>
                        <input type="text" name="alamat" value="" class="w-full px-4 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Sosmed :</label>
                        <input type="text" name="sosmed" value="" class="w-full px-4 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="block text-gray-700">Status</label>
                        <select name="status" class="w-full px-4 py-2 border rounded" required>
                            <option value="Leads">Leads</option>
                            <option value="Buyer">Buyer</option>
                            <option value="Custemer">Custemer</option>
                            <option value="Reseller">Reseller</option>
                        </select>
                    </div>
                    <div class="flex justify-between">
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Selesai</button>
                    </div>
                </form>
                <!-- Form End -->
            </div>
        </div>