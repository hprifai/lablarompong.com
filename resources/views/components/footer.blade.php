<footer>
    {{-- footer container --}}
    <div class="w-full grid bg-green-700 min-h-40 mx-auto  md:grid-rows-3 ">
        {{-- 3 section  --}}
        <div class="social pt-6 flex pl-8 md:mx-auto  space-x-2 ">
            <div class="facebook ">
                <a href="#"><svg class="w-8 h-8 text-white hover:text-black dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                </svg></a>
            </div>
            <a href="#"><div class="instagram ">
                <svg class="w-8 h-8 text-white hover:text-black dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                </svg> </a>                 
            </div>
            <a href="#"><div class="twitter ">
                <svg class="w-8 h-7 text-white hover:text-black dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"/>
                </svg>  </a>                
            </div>
        </div>
        <div class="menu text-white flex flex-col space-y-2 pl-10 md:space-x-2 md:flex-row font-light md:mx-auto py-4 ">
            <a href="/" class="hover:text-black">Beranda</a>
            <a href="/about" class="hover:text-black">Tentang kami</a>
            <a href="/layanan" class="hover:text-black">Layanan</a>
            <a href="/posts" class="hover:text-black">Blog</a>
            <a href="/contact" class="hover:text-black">Kontak kami</a>
        </div>
        <div class="copyright pl-10 md:mx-auto text-white font-light text-sm pb-4">created by <span class="font-bold text-md text-black hover:text-white">Ilagaligo Studio.</span> | &copy; copyright {{ date("Y") }} </div>
    </div>
</footer>