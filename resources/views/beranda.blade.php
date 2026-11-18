<x-site.layout title="Beranda — MediaCat">
    {{-- Hero --}}
    <section class="w-full bg-[#eaf7fb]">
        <div class="mx-auto grid w-full max-w-[1280px] items-center gap-10 px-5 py-10 sm:px-6 md:py-14 lg:grid-cols-2 lg:gap-14 lg:px-8 lg:py-16">
            <div>
                <h1 class="text-[32px] font-bold leading-[1.15] text-[#0a64cc] sm:text-[40px] lg:text-[46px]">
                    Anabul Sehat<br>Pemilik Pun Tenang
                </h1>

                <p class="mt-5 max-w-[520px] text-[15px] leading-[26px] text-[#3f5468] sm:text-[16px]">
                    MediaCat hadir sebagai sahabat Anda dalam menjaga kesehatan anabul melalui informasi kesehatan serta
                    layanan konsultasi dokter hewan yang mudah, praktis, dan terpercaya.
                </p>

                <a
                    href="#"
                    class="mt-8 inline-flex h-[50px] items-center justify-center rounded-[10px] bg-[#fba00d] px-7 text-[15px] font-semibold text-white transition hover:bg-[#e89200] sm:text-[16px]"
                >Pesan Sekarang</a>
            </div>

            <img
                src="{{ asset('images/mediacat/beranda-hero-photo.png') }}"
                alt="Dokter hewan MediaCat memeriksa kucing"
                width="992"
                height="941"
                class="w-full rounded-[24px] object-cover shadow-[0_18px_40px_rgba(11,58,84,0.12)]"
                draggable="false"
            >
        </div>
    </section>

    {{-- Kartu ringkas --}}
    <section class="mx-auto w-full max-w-[1280px] px-5 py-10 sm:px-6 lg:px-8 lg:py-14">
        <div class="grid gap-5 md:grid-cols-3 lg:gap-6">
            <article class="rounded-[18px] bg-white p-6 shadow-[0_10px_30px_rgba(11,58,84,0.08)] lg:p-7">
                <h2 class="text-[18px] font-bold leading-[1.3] lg:text-[20px]">Panggil dokter hewan</h2>
                <p class="mt-3 text-[14px] leading-[24px] text-[#3f5468]">
                    Dokter hewan MediaCat siap ke rumah atau apartemen Anda. Layanan dokter hewan tersedia untuk semua
                    hewan peliharaan kesayangan anda.
                </p>
            </article>

            <article class="rounded-[18px] bg-[#f5f9fb] p-6 shadow-[0_10px_30px_rgba(11,58,84,0.08)] lg:p-7">
                <h2 class="text-[18px] font-bold leading-[1.3] lg:text-[20px]">Trending Hari Ini</h2>
                <p class="mt-3 text-[14px] leading-[24px] text-[#3f5468]">
                    Cek juga artikel terbaru seputar MediaCat untuk dibaca hanya untukmu.
                </p>
            </article>

            <article class="rounded-[18px] bg-[#effbff] p-6 shadow-[0_10px_30px_rgba(11,58,84,0.08)] lg:p-7">
                <h2 class="text-[18px] font-bold leading-[1.3] lg:text-[20px]">Tips &amp; Perawatan Harian</h2>
                <p class="mt-3 text-[14px] leading-[24px] text-[#3f5468]">
                    Edukasi perawatan harian berbasis dokter hewan: rutinitas grooming, kebersihan lingkungan, sampai
                    mencegah stres dan penyakit pada kucing.
                </p>
            </article>
        </div>
    </section>

    {{-- Kenapa pesan dokter hewan panggilan --}}
    <section class="mx-auto grid w-full max-w-[1280px] items-center gap-12 px-5 py-16 sm:px-6 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-24">
        <div>
            <h2 class="text-[26px] font-bold leading-[1.3] text-[#0a64cc] lg:text-[32px]">
                Kenapa Pesan Dokter Hewan Panggilan di Petcare?
            </h2>

            <ul class="mt-8 space-y-6">
                <li class="flex items-start gap-4">
                    <img
                        src="{{ asset('images/mediacat/icon-konsultasi.png') }}?v={{ filemtime(public_path('images/mediacat/icon-konsultasi.png')) }}"
                        alt=""
                        class="size-[48px] shrink-0 select-none"
                        draggable="false"
                    >
                    <p class="pt-1 text-[15px] leading-[26px] text-[#2c3f52]">
                        Dokter hewan panggilan Petcare berpengalaman dan profesional.
                    </p>
                </li>

                <li class="flex items-start gap-4">
                    <img
                        src="{{ asset('images/mediacat/icon-booking.png') }}?v={{ filemtime(public_path('images/mediacat/icon-booking.png')) }}"
                        alt=""
                        class="size-[48px] shrink-0 select-none"
                        draggable="false"
                    >
                    <p class="pt-1 text-[15px] leading-[26px] text-[#2c3f52]">
                        Layanan cepat dan mudah, langsung dari rumah.
                    </p>
                </li>

                <li class="flex items-start gap-4">
                    <img
                        src="{{ asset('images/mediacat/icon-informasi.png') }}?v={{ filemtime(public_path('images/mediacat/icon-informasi.png')) }}"
                        alt=""
                        class="size-[48px] shrink-0 select-none"
                        draggable="false"
                    >
                    <p class="pt-1 text-[15px] leading-[26px] text-[#2c3f52]">
                        Dokter hewan siap sedia dan tanggap, dengan biaya yang transparan.
                    </p>
                </li>
            </ul>
        </div>

        <img
            src="{{ asset('images/mediacat/beranda-why.png') }}"
            alt="Ilustrasi layanan dokter hewan panggilan"
            width="670"
            height="606"
            class="mx-auto w-full max-w-[460px] justify-self-center select-none"
            draggable="false"
        >
    </section>

    {{-- Layanan --}}
    <section class="w-full bg-[#eaf7fb]">
        <div class="mx-auto w-full max-w-[1280px] px-5 py-16 sm:px-6 lg:px-8 lg:py-20">
            <h2 class="text-[26px] font-bold leading-[1.3] text-[#0a64cc] lg:text-[30px]">
                Layanan Dokter Hewan Panggilan
            </h2>

            <div class="mt-8 grid gap-5 md:grid-cols-3 lg:gap-6">
                <article class="flex items-center gap-4 rounded-[18px] bg-white p-5 shadow-[0_10px_30px_rgba(11,58,84,0.08)]">
                    <img
                        src="{{ asset('images/mediacat/beranda-layanan-dokter.png') }}"
                        alt=""
                        class="size-[84px] shrink-0 select-none rounded-[14px] object-cover"
                        draggable="false"
                    >
                    <h3 class="text-[16px] font-bold leading-[1.35] lg:text-[17px]">Dokter Hewan</h3>
                </article>

                <article class="flex items-center gap-4 rounded-[18px] bg-white p-5 shadow-[0_10px_30px_rgba(11,58,84,0.08)]">
                    <img
                        src="{{ asset('images/mediacat/beranda-hero-photo.png') }}"
                        alt=""
                        class="size-[84px] shrink-0 select-none rounded-[14px] object-cover object-[35%_35%]"
                        draggable="false"
                    >
                    <h3 class="text-[16px] font-bold leading-[1.35] lg:text-[17px]">Vaksin Kucing dan Anabul</h3>
                </article>

                <article class="flex items-center gap-4 rounded-[18px] bg-white p-5 shadow-[0_10px_30px_rgba(11,58,84,0.08)]">
                    <img
                        src="{{ asset('images/mediacat/beranda-layanan-terdekat.png') }}"
                        alt=""
                        class="size-[84px] shrink-0 select-none rounded-[14px] object-cover"
                        draggable="false"
                    >
                    <h3 class="text-[16px] font-bold leading-[1.35] lg:text-[17px]">Dokter Hewan Terdekat</h3>
                </article>
            </div>
        </div>
    </section>

    {{-- Target Petcare ke depannya --}}
    <section class="w-full bg-[#ffae00]">
        <div class="mx-auto grid w-full max-w-[1280px] items-center gap-10 px-5 py-14 sm:px-6 lg:grid-cols-[1.15fr_1fr] lg:gap-14 lg:px-8 lg:py-16">
            <div>
                <img
                    src="{{ asset('images/mediacat/beranda-target.png') }}"
                    alt="Target Petcare ke Depannya"
                    width="893"
                    height="365"
                    class="w-[280px] select-none sm:w-[360px]"
                    draggable="false"
                >

                <div class="mt-8 grid grid-cols-2 gap-4">
                    <div class="rounded-[14px] bg-white/90 px-5 py-4">
                        <p class="text-[24px] font-bold leading-none text-[#e08c00]">100+</p>
                        <p class="mt-1.5 text-[13px] font-medium text-[#5b4b2a]">Dokter Hewan</p>
                    </div>

                    <div class="rounded-[14px] bg-white/90 px-5 py-4">
                        <p class="text-[24px] font-bold leading-none text-[#e08c00]">50+</p>
                        <p class="mt-1.5 text-[13px] font-medium text-[#5b4b2a]">Klinik Rekanan</p>
                    </div>

                    <div class="rounded-[14px] bg-white/90 px-5 py-4">
                        <p class="text-[24px] font-bold leading-none text-[#e08c00]">20+</p>
                        <p class="mt-1.5 text-[13px] font-medium text-[#5b4b2a]">Kota &amp; Kabupaten</p>
                    </div>

                    <div class="rounded-[14px] bg-white/90 px-5 py-4">
                        <p class="text-[24px] font-bold leading-none text-[#e08c00]">1000+</p>
                        <p class="mt-1.5 text-[13px] font-medium text-[#5b4b2a]">Pengguna Aktif</p>
                    </div>
                </div>
            </div>

            <img
                src="{{ asset('images/mediacat/beranda-kitten.png') }}"
                alt="Anak kucing"
                width="257"
                height="152"
                class="mx-auto w-full max-w-[420px] justify-self-center rounded-[20px] select-none"
                draggable="false"
            >
        </div>
    </section>
</x-site.layout>
