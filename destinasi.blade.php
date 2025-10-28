<x-layout title="Destinasi Wisata">
    <h2 class="text-2xl font-bold mb-4">Destinasi Populer</h2>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        @php
            $data = [
                ['img'=>'/images/bromo.jpg','title'=>'Gunung Bromo','desc'=>'Gunung berapi aktif di Jawa Timur.'],
                ['img'=>'/images/rajaampat.jpg','title'=>'Raja Ampat','desc'=>'Surga bahari di Papua Barat.'],
                ['img'=>'/images/danautoba.jpg','title'=>'Danau Toba','desc'=>'Danau vulkanik terbesar di Asia Tenggara.']
            ];
        @endphp

        @foreach($data as $d)
        <div class="bg-white p-4 shadow rounded cursor-pointer hover:scale-105 transition">
            <img src="{{ $d['img'] }}" class="rounded mb-2 h-40 w-full object-cover">
            <h3 class="font-semibold text-xl">{{ $d['title'] }}</h3>
            <p class="text-sm">{{ $d['desc'] }}</p>
        </div>
        @endforeach
    </div>
</x-layout>
