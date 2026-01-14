<!DOCTYPE html>
<html lang="{{ $page->language ?? 'cs' }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
    @viteRefresh()
    <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
    <script type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>
</head>

<body class="bg-white text-black dark:bg-gray-900 dark:text-white font-sans antialiased">
    <header>
        <nav class="bg-blue-900 fixed w-full z-20 top-0 start-0 text-white">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M5 7h14M5 12h14M5 17h14" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-base md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                        <li>
                            <a href="#domu"
                                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent hover:text-blue-200">Domů</a>
                        </li>
                        <li>
                            <a href="#omne"
                                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent hover:text-blue-200">O
                                mně</a>
                        </li>
                        <li>
                            <a href="#vzdelani"
                                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent hover:text-blue-200">Vzdělání</a>
                        </li>
                        <li>
                            <a href="#projekty"
                                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent hover:text-blue-200">Projekty</a>
                        </li>
                        <li>
                            <a href="#technologie"
                                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent hover:text-blue-200">Technologie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('body')

    <footer class="bg-gray-900 text-white">
        <div class="mx-auto w-full max-w-screen-xl">
            <div class="px-4 py-6 bg-neutral-secondary-soft md:flex md:items-center md:justify-between">
                <span class="text-sm text-body sm:text-center">© 2018 - {{ date('Y') }} Jiří Valůšek</span>
                <div class="flex mt-4 sm:justify-center md:mt-0 space-x-2 rtl:space-x-reverse">
                    <a href="https://www.linkedin.com/in/jiri-valusek/" class="text-body hover:text-heading hover:text-[#0077B5] ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12.51 8.796v1.613h.022c.224-.424.77-1.113 2.027-1.113 2.658 0 3.15 1.75 3.15 4.025v5.58h-2.917v-4.566c0-1.09-.02-2.492-1.518-2.492-1.52 0-1.753 1.187-1.753 2.413v4.645h-2.915V8.796h2.898ZM9.11 6.136a1.69 1.69 0 1 1-3.379 0 1.69 1.69 0 0 1 3.379 0ZM5.732 8.796h2.916v9.9l-2.916.002V8.796Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Profil na LinkedInu</span>
                    </a>
                    <a href="https://github.com/jiri24" class="text-body hover:text-heading hover:text-[#ffffff] ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Profil na GitHubu</span>
                    </a>
                    <a href="https://orcid.org/0000-0003-1345-1321" class="text-body hover:text-[#A6CE39] ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <title>ORCID</title>
                            <path
                                d="M12 0C5.372 0 0 5.372 0 12s5.372 12 12 12 12-5.372 12-12S18.628 0 12 0zM7.369 4.378c.525 0 .947.431.947.947s-.422.947-.947.947a.95.95 0 0 1-.947-.947c0-.525.422-.947.947-.947zm-.722 3.038h1.444v10.041H6.647V7.416zm3.562 0h3.9c3.712 0 5.344 2.653 5.344 5.025 0 2.578-2.016 5.025-5.325 5.025h-3.919V7.416zm1.444 1.303v7.444h2.297c3.272 0 4.022-2.484 4.022-3.722 0-2.016-1.284-3.722-4.097-3.722h-2.222z" />
                        </svg>
                        <span class="sr-only">Profil ORCID</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>