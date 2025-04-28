<x-layout>  
  <x-slot:title>{{ $title }}</x-slot:title>
  <section id="hero" class="max-w-screen min-h-screen text-center  bg-[url(../img/bg-hero.jpg)] bg-cover top-0 left-0">
    <div class="flex  flex-col items-center content-end">
        <h1 class="mb-3 mt-25 text-3xl font-extrabold tracking-tight leading-none text-white  md:text-5xl lg:text-6xl dark:text-white">Pusat Informasi Layanan</h1>
        <h2 class="mb-3 px-4 text-3xl font-extrabold tracking-tight leading-none text-green-700  md:text-5xl  lg:text-6xl dark:text-white">Laboratorium Puskesmas Larompong </h2>
        <p class="mb-8 text-sm font-normal text-white lg:text-xl sm:px-16 md:text-xl xl:px-48 dark:text-gray-400">Unit Laboratorium UPTD. Puskesmas Larompong, Kab. Luwu
          memiliki tenaga Analis yang terampil dan mampu
          mengerjakan pemeriksaan laboratorium diantaranya
          Hematologi, Urinalisis, Mikrobiologi dan Imunologi.</p>
        <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="https://wa.me/+6282114327978" target="blank" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:focus:ring-green-900">
                Hubungi Sekarang
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="/layanan" class="inline-flex bg-white justify-center items-center py-3 px-8 text-base font-medium text-center text-gray-900 rounded-lg hover:bg-green-700 hover:text-white focus:ring-4 focus:ring-green-700 dark:text-white dark:border-green-700 dark:hover:bg-green-700 dark:focus:ring-green-700">
              <svg class="w-6 h-6 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
              </svg>                           
                Ke Layanan
            </a>  
        </div>
    </div>
  </section>
  <x-about></x-about>
  <x-layanan :service="$service"></x-layanan>
  <x-contact></x-contact>
  <x-cta></x-cta>
</x-layout>