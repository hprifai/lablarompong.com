<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <x-slot:service>{{ $allServices }}</x-slot:service> --}}
    <section id="layanan">
        {{-- Header --}}
        <div class="container max-w-full" >
            <div class="mt-10 text-center text-2xl font-extrabold px-8">Mau Ki Tes Laboratorium ?</div>
            <p class="text-gray-400  text-justify px-10 pt-5 md:text-center">Kami melayani pemeriksaan laboratorium sesuai dengan ketentuan yang berlaku, hanya dalam beberapa menit hasil pemeriksaan laboratorium sudah selesai dan dapat dilihat oleh yang bersangkutan. <br>
            <span class="">Beberapa pemeriksaan laboratorium memerluka persiapan puasa sebelum diambil darah. Boleh minum air putih selama puasa untuk persiapan pemeriksaan laboratorium</span>
            </p>

            {{-- container layanan --}}
            <div class="container min-w-full pb-20 mt-8 px-6">
                {{-- content layanan --}}
                <div class="p-4 grid justify-evently gap-4 md:grid-cols-2 lg:grid-cols-4">
                    @foreach ($allServices as $service )
                        {{-- layanan 1 --}}
                        <a href="/layanan/{{ $service['slug'] }}">
                            <div class="grid justify-items-center cursor-pointer content-center space-evenly p-2 bg-green-200 aspect-square  rounded-2xl hover:shadow-2xl hover:shadow-gray-400 mb-4 hover:bg-green-400 group hover:scale-95 transition-all duration-500">
                                {{-- <div class="id hidden">{{ $service->id }}</div> --}}
                                <img src="{{ asset('storage/img/'.$service->image) }}" alt="" class="w-32 h-32 bg-gray-100 rounded-full ring-2 ring-amber-400 group-hover:scale-110 transition-all duration-500 ">
                                <div class="text-center text-emerald-900 mt-4">
                                    <h1 class="font-bold">{{ $service->jenis_tes }}</h1>
                                    <div><span class="ml-1">{{ $service->harga }}</span></div>
                                    <p>{{ $service->lama_periksa }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach                                                                                                                            
                    {{-- End Layanan --}}                                                             
                </div>
            </div>
        </div>
    </section>
    
</x-layout>