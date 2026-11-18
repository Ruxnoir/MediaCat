{{-- Footer halaman publik --}}
<footer class="w-full bg-[#f3f3f3]">
    <div class="mx-auto w-full max-w-[1280px] px-5 pb-8 pt-12 sm:px-6 lg:px-8">
        <div class="grid gap-10 md:grid-cols-2">
            <div>
                <img
                    src="{{ asset('images/mediacat/logo-mediacat.png') }}"
                    alt="MediaCat"
                    width="612"
                    height="408"
                    class="h-[64px] w-auto select-none"
                    draggable="false"
                >

                <div class="mt-6 flex items-start gap-3">
                    <svg class="mt-0.5 size-[26px] shrink-0 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6.6 3.5h-.9a2.2 2.2 0 0 0-2.2 2.4c.6 6.1 5.5 11 11.6 11.6a2.2 2.2 0 0 0 2.4-2.2v-.9a1.4 1.4 0 0 0-1.1-1.4l-2.3-.5a1.4 1.4 0 0 0-1.4.6l-.5.7a12.6 12.6 0 0 1-5.1-5.1l.7-.5a1.4 1.4 0 0 0 .6-1.4l-.5-2.3a1.4 1.4 0 0 0-1.3-1Z" />
                    </svg>

                    <div>
                        <p class="text-[15px] font-semibold">+62 813-8810-1225</p>
                        <p class="mt-1 text-[13px] text-[#5a5a5a]">Costumer Service</p>
                        <p class="text-[13px] text-[#5a5a5a]">Setiap Hari Jam 07.00-20.00 WIB</p>
                    </div>
                </div>
            </div>

            <div class="md:text-right">
                <p class="text-[14px] font-semibold">Supported by</p>
                <div class="mt-4 flex items-center gap-5 md:justify-end">
                    <img src="{{ asset('images/mediacat/supported-bbi.png') }}" alt="Bangga Buatan Indonesia"
                        class="size-[64px] select-none" draggable="false">
                    <img src="{{ asset('images/mediacat/supported-rpl.png') }}" alt="Rekayasa Perangkat Lunak"
                        class="size-[64px] select-none" draggable="false">
                    <img src="{{ asset('images/mediacat/supported-smkn.png') }}" alt="SMK Bina Mandiri Multimedia"
                        class="h-[64px] w-auto select-none" draggable="false">
                </div>
            </div>
        </div>

        <div class="mt-10 h-px w-full bg-[#c4c4c4]"></div>

        <div class="mt-5 flex flex-col items-center justify-between gap-3 text-[13px] text-[#4a4a4a] sm:flex-row">
            <p>Copyright © 2026 MediaCat by Vanz. All Rights Reserved.</p>

            <p class="flex items-center gap-2">
                <span>Made with</span>
                <img src="{{ asset('images/mediacat/soc-heart.png') }}" alt="" class="size-[18px] select-none" draggable="false">
                <span>and</span>
                <img src="{{ asset('images/mediacat/soc-coffee.png') }}" alt="" class="size-[18px] select-none" draggable="false">
            </p>
        </div>
    </div>
</footer>
