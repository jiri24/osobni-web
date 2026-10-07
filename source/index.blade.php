@extends('_layouts.main')

@section('body')

    <main>
        <div id="domu" class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
                <img class="mt-4 rounded-full h-auto w-48 mx-auto" src="/assets/images/fotografie.jpg"
                    alt="Fotografie Jany a Jirky."><br>
                <h1 class="dark:text-white mb-2 text-6xl font-extrabold text-center">Jiří Valůšek</h1>
            </div>
        </div>

        <section id="omne" class="bg-gray-100 dark:bg-[#121d3d]">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
                <h2 class="mb-2 text-4xl font-extrabold">O mně</h2>
                <p class="text-2xl">Jsem absolventem doktorského studia informatiky na Univerzitě
                    Palackého v Olomouci. Specializuji se na vývoj webových aplikací, které stavím primárně na PHP a
                    populárních frameworcích jako Nette nebo Laravel. Také se zajímám o vývoj aplikací na platformě
                    .NET.</p>
                <p class="text-2xl mt-4">
                    Jsem osobou se zrakovým postižením, díky čemuž mohu nahlížet na přístupnost jak z pohledu
                    koncového uživatele,
                    tak z pohledu tvůrce.</p>
            </div>
        </section>

        <section class="bg-blue-900 px-3 xl:px-0 text-white" id="vzdelani">
            <div class="py-8 mx-auto max-w-screen-xl lg:py-16">
                <h2 class="mb-4 text-4xl text-white font-extrabold">Vzdělání</h2>
                <ol class="items-center w-full sm:flex">
                    <li class="relative mb-6 sm:mb-0 flex-1">
                        <div class="flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white sm:ring-8 shrink-0">
                                <svg class="w-3 h-3 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-300 h-0.5 flex-grow"></div>
                        </div>
                        <div class="mt-3 sm:pe-8">
                            <time
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-xs font-medium px-1.5 py-0.5 rounded">2016</time>
                            <h3 class="text-lg font-semibold text-heading my-2">Bc.</h3>
                            <p class="text-body mb-4">Informatika, Univerzita Palackého v Olomouci</p>
                        </div>
                    </li>

                    <li class="relative mb-6 sm:mb-0 flex-1">
                        <div class="flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white sm:ring-8 shrink-0">
                                <svg class="w-3 h-3 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-300 h-0.5 flex-grow"></div>
                        </div>
                        <div class="mt-3 sm:pe-8">
                            <time
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-xs font-medium px-1.5 py-0.5 rounded">2018</time>
                            <h3 class="text-lg font-semibold text-heading my-2">Mgr.</h3>
                            <p class="text-body mb-4">Informatika, Univerzita Palackého v Olomouci</p>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0 flex-1">
                        <div class="flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white sm:ring-8 shrink-0">
                                <svg class="w-3 h-3 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-300 h-0.5 flex-grow"></div>
                        </div>
                        <div class="mt-3 sm:pe-8">
                            <time
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-xs font-medium px-1.5 py-0.5 rounded">2025</time>
                            <h3 class="text-lg font-semibold text-heading my-2">Ph.D.</h3>
                            <p class="text-body mb-4">Informatika, Univerzita Palackého v Olomouci</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <section class="px-3 xl:px-0" id="projekty">
            <div class="py-8 mx-auto max-w-screen-xl lg:py-16">
                <h2 class="mb-4 text-4xl font-extrabold">Projekty</h2>

                <div class="flex flex-wrap gap-6">
                    <div class="block max-w-sm p-6 border border-default rounded-base shadow-xs">
                        <img class="rounded-base w-full h-48 object-cover object-top" src="/assets/images/kyklop.png"
                            alt="Náhled webu www.kyklop.net">
                        <h3 class="my-3 text-2xl font-semibold tracking-tight text-heading">KYKLOP o.p.s.</h3>
                        <p class="mb-3 text-body">Tvořím a spravuji webové stránky neziskové organizace KYKLOP o.p.s.</p>
                        <p class="text-body"><b>Odkaz:</b> <a href="https://www.kyklop.net"
                                class="text-blue-900 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">www.kyklop.net</a></p>
                    </div>
                    <div class="block max-w-sm p-6 border border-default rounded-base shadow-xs">
                        <img class="rounded-base w-full h-48 object-cover object-top"
                            src="/assets/images/bizuterie-valusek.png" alt="Náhled webu www.bizuterie-valusek.cz">
                        <h3 class="my-3 text-2xl font-semibold tracking-tight text-heading">Bižuterie Valůšek</h3>
                        <p class="mb-3 text-body">Spravuji eshop Bižuterie Valůšek a vytvářím pro něj rozšiřující moduly.
                        </p>
                        <p class="text-body"><b>Odkaz:</b> <a href="https://www.bizuterie-valusek.cz"
                                class="text-blue-900 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">www.bizuterie-valusek.cz</a></p>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-blue-900 px-3 xl:px-0 text-white" id="technologie">
            <div class="py-8 mx-auto max-w-screen-xl lg:py-16">
                <h2 class="mb-4 text-4xl text-white font-extrabold">Používám následující technologie</h2>
                <div class="flex flex-wrap gap-6 justify-center sm:justify-start">
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/php.svg" alt="PHP" class="w-16 h-16 object-contain">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">PHP</figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/nette.svg" alt="Nette" class="w-16 h-16 object-contain invert">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">Nette</figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/laravel.svg" alt="Laravel" class="w-16 h-16 object-contain">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">Laravel</figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/jigsaw.svg" alt="Jigsaw" class="w-16 h-16 object-contain">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">Jigsaw</figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/javascript.svg" alt="JavaScript" class="w-16 h-16 object-contain">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">JavaScript</figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/vue.svg" alt="Vue.js" class="w-16 h-16 object-contain">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">Vue.js</figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/bootstrap.svg" alt="Bootstrap" class="w-16 h-16 object-contain">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">Bootstrap</figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/flowbite.svg" alt="Flowbite" class="w-16 h-16 object-contain">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">Flowbite</figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/git.svg" alt="Git" class="w-16 h-16 object-contain">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">Git</figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/docker.svg" alt="Docker" class="w-16 h-16 object-contain">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">Docker</figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/mysql.svg" alt="MySQL" class="w-16 h-16 object-contain">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">MySQL</figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/csharp.svg" alt="C#" class="w-16 h-16 object-contain">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">C#</figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/fsharp.svg" alt="F#" class="w-16 h-16 object-contain">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">F#</figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center p-4 min-w-[120px] bg-neutral-primary-soft rounded-lg border border-default-medium shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-16 h-16 mb-1">
                            <img src="/assets/images/claude.svg" alt="Claude Code" class="w-16 h-16 object-contain">
                        </div>
                        <figcaption class="text-sm font-medium text-body text-center">Claude Code</figcaption>
                    </figure>
                </div>
            </div>
        </section>
    </main>

@endsection