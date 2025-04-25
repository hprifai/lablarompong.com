<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto px-6">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
            <h3 class="text-xl font-extrabold text-gray-900 dark:text-white">
                {{ $service->jenis_tes }}
            </h3>
        </div>
                    <!-- Modal body -->
        <div class="p-4 md:p-5 space-y-4">
            <img src="{{ asset('/storage/img/'.$service->image) }}" alt="kolesterol" class="w-59 mx-auto rounded-2xl md:float-left md:mr-3">
            <h1 class="font-semibold">Deskripsi</h1>
            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 text-pretty">
                {!! $service['deskripsi'] !!}</p>
            <h1 class="font-semibold">Manfaat</h1>
            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 text-justify">
                {!! $service['manfaat'] !!}
            </p>
            <h1 class="font-semibold">Persiapan</h1>
            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 text-justify">
                {!! $service['persiapan'] !!}
            </p>
        </div>
        <!-- Back to Layanan-->
        <div class=" py-4 border-t border-gray-200 rounded-b dark:border-gray-600 ">
            <a href="/layanan"><button  data-modal-hide="static-modal" type="button" class=" cursor-pointer py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-green-600 rounded-lg border border-gray-200 hover:bg-green-500 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Kembali ke Layanan</button>
            </a>
        </div>
    </div>

    
</x-layout>