<section id="layanan">
    {{-- Header --}}
    <div class="container max-w-full" >
        {{-- Content ALur  --}}
        <div class="mt-10 text-center text-2xl font-extrabold ">Layanan Kami</div>
        <p class="px-14 py-8 text-gray-400 text-justify">Penting untuk  membaca prosedure/alur pemeriksaan dan alur rujukan laboratorium</p>
        <div id="Alur" class="flex flex-col gap-3 md:flex-row ">
            <div class="w-full md:w-1/2 flex flex-col md:flex-col px-14 font-bold" x-data ="{expandAlur : false}">
                <div class="w-full h-10 flex items-center  mr-10 justify-between bg-emerald-200 hover:bg-emerald-400  rounded-2xl p-2 cursor-pointer active:ring-3 active:ring-green-700 active:ring-offset-2" @click="expandAlur= !expandAlur">
                    <h1>Alur Pemeriksaan Laboratorium </h1>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24":class="{'rotate-180 transition 0.2s ease-out ': expandAlur} " >
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                    </svg>                
                </div>
                {{-- Munculkan Gambar saat Alur di klik --}}
                <div x-show="expandAlur"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                >
                    <img src="/storage/img/alur-pemeriksaan.jpg" alt="" class="w-full h-[80%]  pt-4 ">
                </div>
            </div>
            <div class="w-full md:w-1/2 flex flex-col  md:flex-col px-14 font-bold" x-data ="{expandAlur : false}">
                <div class="w-full h-10 items-center flex mr-10 justify-between bg-emerald-200 hover:bg-emerald-400 rounded-2xl p-2 cursor-pointer active:ring-3 active:ring-green-700 active:ring-offset-2" @click="expandAlur= !expandAlur">
                    <h1>Alur Rujukan Laboratorium  </h1>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24 " :class="{'rotate-180 transition 0.2s ease-out ': expandAlur} " >
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                    </svg>                
                </div>
                {{-- Munculkan Gambar saat Alur di klik --}}
                <div x-show="expandAlur"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                >
                    <img src="/storage/img/alur-rujukan.jpg" alt="" class="w-full h-[80%]  pt-4 "">
                </div>
            </div>
        </div>
        <div class=" text-center text-2xl font-extrabold px-8 mt-10">Mau Ki Tes Laboratorium ?</div>
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