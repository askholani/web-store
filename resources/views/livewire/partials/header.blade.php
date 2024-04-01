<nav x-data="{ search: false, sidebar: false }">
    <div class="navbar bg-slate-50 relative z-40">
        <div class="navbar-start">
            <div class="dropdown" x-on:click="sidebar=!sidebar">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <template x-if="!sidebar">
                        <x-fas-list-ul class="h-5 w-5" />
                    </template>
                    <template x-if="sidebar">
                        <x-fas-x class="h-5 w-5" />
                    </template>
                </div>
            </div>
        </div>
        <div class="navbar-center">
            <template x-if="!search">
                <a class="btn btn-ghost text-xl font-bold">KZShop</a>
            </template>
            <template x-if="search">
                <input type="text" placeholder="Search" class="input input-bordered w-full" />
            </template>
        </div>
        <div class="navbar-end">
            <button x-on:click="search= !search" class="btn btn-ghost btn-circle">
                <x-fas-search class="w-5 h-5" />
            </button>
            <button class="btn btn-ghost btn-circle">
                <div class="indicator">
                    <x-fas-bag-shopping class="w-5 h-5" />
                    <span class="badge badge-xs badge-primary indicator-item"></span>
                </div>
            </button>
        </div>
    </div>
    <template x-if="sidebar">
        <aside>
            <nav class="absolute top-0 left-0 right-0 bottom-0 flex justify-center items-start z-30 bg-slate-50 pt-28">
                <ul class="flex flex-col gap-y-12">
                    <li>
                        <a class="text-3xl font-semibold" href="">About us</a>
                    </li>
                    <li>
                        <a class="text-3xl font-semibold" href="#">Catalog</a>
                    </li>
                    <li>
                        <a class="text-3xl font-semibold" href="#">Promotions</a>
                    </li>
                    <li><a class="text-3xl font-semibold" href="#">Contacts</a></li>
                    <li>
                        <a class="text-3xl font-semibold" href="#">FAQ</a>
                    </li>
                </ul>
            </nav>
        </aside>
    </template>
</nav>
