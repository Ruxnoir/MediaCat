{{-- Navbar halaman publik --}}
<header class="w-full bg-white shadow-sm">
    <div class="mx-auto flex h-[88px] w-full max-w-[1280px] items-center gap-6 px-5 sm:px-6 lg:gap-10 lg:px-8">
        <a href="{{ route('beranda') }}" class="shrink-0" aria-label="MediaCat">
            <img
                src="{{ asset('images/mediacat/logo-mediacat.png') }}"
                alt="MediaCat"
                width="612"
                height="408"
                class="h-[58px] w-auto select-none sm:h-[64px]"
                draggable="false"
            >
        </a>

        <nav class="min-w-0 flex-1">
            <ul class="flex items-center gap-6 overflow-x-auto text-[15px] font-semibold lg:gap-9 lg:text-[16px]">
                <li><a href="{{ route('beranda') }}" class="whitespace-nowrap text-[#fba00d]">Beranda</a></li>
                <li><a href="#" class="whitespace-nowrap text-[#185c97] transition hover:text-[#0a64cc]">Dokter Hewan</a></li>
                <li><a href="#" class="whitespace-nowrap text-[#185c97] transition hover:text-[#0a64cc]">Artikel terbaru</a></li>
            </ul>
        </nav>

        {{-- Avatar pengguna (masih tampilan statis) --}}
        <div class="flex size-[42px] shrink-0 items-center justify-center rounded-full bg-[#66772d] text-[17px] font-semibold text-white">
            U
        </div>
    </div>
</header>
