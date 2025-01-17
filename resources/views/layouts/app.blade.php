<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/orange.webp') }}" type="image/x-icon">

    <title>{{ $title ?? 'Gestion Centre' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">

    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.0/ckeditor5.css" />
    <link rel="stylesheet"
        href="https://cdn.ckeditor.com/ckeditor5-premium-features/42.0.0/ckeditor5-premium-features.css" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'node_modules/select2/dist/js/select2.full.min.js', 'node_modules/select2/dist/css/select2.min.css', 'node_modules/jquery-circle-progress/dist/circle-progress.min.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')
        <div class="p-4 sm:ml-64 mt-10">



            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-700 shadow items-center">
                    <div class="p-6">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
    <script src="{{ Vite::asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ Vite::asset('node_modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/5.0.1/js/dataTables.fixedColumns.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/5.0.1/js/fixedColumns.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const accordionButton = document.querySelector('[data-accordion-target="#accordion-flush-body-2"]');
            const accordionBody = document.querySelector('#accordion-flush-body-2');

            if (accordionButton && accordionBody) {
                // Vérifiez l'état de l'URL pour garder l'accordéon ouvert
                if (window.location.href.includes('activites') ||
                    window.location.href.includes('categories') ||
                    window.location.href.includes('hashtags') ||
                    window.location.href.includes('typevents')) {
                    accordionBody.classList.remove('hidden');
                    accordionButton.setAttribute('aria-expanded', 'true');
                } else {
                    accordionBody.classList.add('hidden');
                    accordionButton.setAttribute('aria-expanded', 'false');
                }

                // Ajouter un gestionnaire d'événements pour l'ouverture/fermeture
                accordionButton.addEventListener('click', () => {
                    if (accordionBody.classList.contains('hidden')) {
                        accordionBody.classList.remove('hidden');
                        accordionButton.setAttribute('aria-expanded', 'true');
                    } else {
                        accordionBody.classList.add('hidden');
                        accordionButton.setAttribute('aria-expanded', 'false');
                    }
                });
            }
        });
    </script>
    @yield('script')

</body>

</html>
