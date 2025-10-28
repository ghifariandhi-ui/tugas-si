<x-layout title="Kontak">
    <h2 class="text-2xl font-bold mb-4">Hubungi Kami</h2>

    <form action="#" method="POST" class="bg-white p-6 rounded shadow max-w-lg space-y-3">
        @csrf
        <input type="text" name="nama" class="w-full border p-2 rounded" placeholder="Nama" required>
        <input type="email" name="email" class="w-full border p-2 rounded" placeholder="Email" required>
        <textarea name="pesan" rows="4" class="w-full border p-2 rounded" placeholder="Pesan" required></textarea>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded font-semibold">
            Kirim
        </button>
    </form>
</x-layout>
