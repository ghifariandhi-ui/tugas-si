<x-layout title="Beranda">
    <section class="bg-blue-100 text-center py-32">
        <h2 class="text-4xl font-bold mb-3">Jelajahi Keindahan Alam Indonesia</h2>
        <p class="text-lg max-w-2xl mx-auto px-4">Temukan destinasi terbaik dari Sabang sampai Merauke.</p>
    </section>

    <section class="container mx-auto px-6 py-16">
        <h3 class="text-3xl font-bold text-center mb-10">Destinasi Populer</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            @foreach([
                ['img'=>'bromo.jpg','nama'=>'Gunung Bromo'],
                ['img'=>'raja.jpg','nama'=>'Raja Ampat'],
                ['img'=>'toba.jpg','nama'=>'Danau Toba']
            ] as $item)
            <div class="bg-white shadow rounded-xl overflow-hidden hover:scale-105 transition">
                <img src="/img/{{ $item['img'] }}" class="w-full h-48 object-cover">
                <h4 class="font-semibold py-4 text-center">{{ $item['nama'] }}</h4>
            </div>
            @endforeach

        </div>
    </section>
</x-layout>
