<section id="layanan">
    {{-- Header --}}
    <div class="container max-w-full" >
        <div class="mt-10 text-center text-2xl font-extrabold px-8">Mau Ki Tes Laboratorium ?</div>
        <p class="text-gray-400 text-justify px-10 pt-5 md:px-14 md:text-center">Kami melayani pemeriksaan laboratorium sesuai dengan ketentuan yang berlaku, hanya dalam beberapa menit hasil pemeriksaan laboratorium sudah selesai dan dapat dilihat oleh yang bersangkutan</p>
        {{-- container layanan --}}
        <div  class="container min-w-full pb-20 mt-8 px-6">
            {{-- content layanan --}}
            <div class="p-4 grid justify-evently gap-4 md:px-10 md:grid-cols-2 lg:grid-cols-4">
                {{-- layanan --}}
                @foreach ($service as $serve )
                    <a href="/layanan/{{ $serve['slug'] }}">
                        <div class="grid justify-items-center cursor-pointer content-center space-evenly p-2 bg-green-200 aspect-square  rounded-2xl hover:shadow-2xl hover:shadow-gray-400 mb-4 hover:bg-green-400 group hover:scale-95 transition-all duration-500">
                            <div class="id hidden">{{ $serve->id }}</div>
                            <img src="{{ asset('storage/img/'.$serve->image) }}" alt="" class="w-32 h-32 bg-gray-100 rounded-full ring-2 ring-amber-400 group-hover:scale-110 transition-all duration-500 ">
                            <div class="text-center text-emerald-900 mt-4">
                                <h1 class="font-bold">{{ $serve->jenis_tes }}</h1>
                                <div><span class="ml-1">{{ $serve->harga }}</span></div>
                                <p>{{ $serve->lama_periksa }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach                                                                                                                        
                {{-- End Layanan --}}                                                             
            </div>
            {{-- <x-modal :serve="$serve"></x-modal> --}}
        </div>
    </div>
</section>