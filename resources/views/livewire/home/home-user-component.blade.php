<div class="container mx-auto px-2 flex flex-col gap-y-8 py-4">
    <div class="flex flex-col gap-y-4">
        <div class="flex justify-start px-4">
            <span class="border-b border-slate-600 text-2xl font-bold text-center py-2">
                Batik Arts
            </span>
        </div>
        <div class="flex flex-col">
            <div class="flex items-center">
                <img class="w-4/5" src="{{ asset('image/main.png') }}" alt="">
                <div class="flex flex-col gap-y-2 border-l-2 border-b-2 border-slate-900 pl-4 pb-2">
                    <x-fas-arrow-right-from-bracket class="w-6 h-6" />
                    <span class="text-xl font-semibold">Detail</span>
                </div>
            </div>
            <span class="text-sm font-semibold">
                Batik is an Indonesian technique of wax-resist dyeing applied to the whole cloth. This technique
                originated
                from the island of Java, Indonesia.
            </span>
        </div>
    </div>

    <div class="rounded-t-lg shadow-inner flex flex-col gap-y-4">
        <div class="flex justify-start px-4">
            <span class="border-b border-slate-600 text-2xl font-bold text-center py-2">
                New Arrivials
            </span>
        </div>
        <div class="flex justify-start gap-x-2">
            <div class="w-1/2">
                <img class="w-full" src="{{ asset('image/main.png') }}" alt="">
                <div class="flex flex-col items-center">
                    <span>Batik Jawa</span>
                    <span>Rp 100.000,00</span>
                </div>
            </div>
            <div class="w-1/2">
                <img class="w-full" src="{{ asset('image/main.png') }}" alt="">
                <div class="flex flex-col items-center">
                    <span>Batik Jawa</span>
                    <span>Rp 100.000,00</span>
                </div>
            </div>
        </div>
    </div>

    <div class="carousel carousel-center max-w-md p-4 space-x-4 rounded-box">
        <div class="carousel-item w-4/5 relative items-start justify-end">
            <div class="bg-slate-900 opacity-50 absolute w-48 h-60 rounded-full"></div>
            <div class="flex flex-col items-center relative z-40">
                <img class="w-full rounded-box" src="{{ asset('image/main.png') }}" alt="">
                <span>Batik Jawa</span>
                <span>Rp 100.000,00</span>
            </div>
        </div>
        <div class="carousel-item w-4/5 relative items-start justify-end">
            <div class="bg-slate-900 opacity-50 absolute w-48 h-60 rounded-full"></div>
            <div class="flex flex-col items-center relative z-40">
                <img class="w-full rounded-box" src="{{ asset('image/main.png') }}" alt="">
                <span>Batik Jawa</span>
                <span>Rp 100.000,00</span>
            </div>
        </div>
        <div class="carousel-item w-4/5 relative items-start justify-end">
            <div class="bg-slate-900 opacity-50 absolute w-48 h-60 rounded-full"></div>
            <div class="flex flex-col items-center relative z-40">
                <img class="w-full rounded-box" src="{{ asset('image/main.png') }}" alt="">
                <span>Batik Jawa</span>
                <span>Rp 100.000,00</span>
            </div>
        </div>
        <div class="carousel-item w-4/5 relative items-start justify-end">
            <div class="bg-slate-900 opacity-50 absolute w-48 h-60 rounded-full"></div>
            <div class="flex flex-col items-center relative z-40">
                <img class="w-full rounded-box" src="{{ asset('image/main.png') }}" alt="">
                <span>Batik Jawa</span>
                <span>Rp 100.000,00</span>
            </div>
        </div>
        <div class="carousel-item w-4/5 relative items-start justify-end">
            <div class="bg-slate-900 opacity-50 absolute w-48 h-60 rounded-full"></div>
            <div class="flex flex-col items-center relative z-40">
                <img class="w-full rounded-box" src="{{ asset('image/main.png') }}" alt="">
                <span>Batik Jawa</span>
                <span>Rp 100.000,00</span>
            </div>
        </div>
        <div class="flex flex-col gap-y-2 justify-center px-8 mb-24">
            <x-fas-arrow-right-from-bracket class="w-12 h-12" />
            <span class="text-4xl font-semibold">More</span>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center gap-y-4">
        <button class="btn btn-wide border-2 border-slate-900">
            <span class="text-xl font-semibold">
                Go To Catalog
            </span>
        </button>
        <span class="font-semibold">
            Love Indonesian Products
        </span>
    </div>
</div>
