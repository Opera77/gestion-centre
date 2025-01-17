<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'node_modules/select2/dist/js/select2.full.min.js', 'node_modules/select2/dist/css/select2.min.css'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/orange.png') }}" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white">Orange Digital
                    Center</span>
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
            </div>
        </div>
    </nav>
    <div class=" p-5 text-center">
        <h1
            class ="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            confirm your Mail</h1>
    </div>
    @if (session('errorinactif'))
        <div id="alert-2"
            class="flex items-center mt-10 p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Alert</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('errorinactif') }}
            </div>
        </div>
    @endif
    <div class="mt-20">
        <form class="max-w-sm mx-auto" action="{{ route('filtrer', $id) }}" method="post" id="verifyuserForm">
            @method('post')
            @csrf
            <div class="mb-5">
                <label for="email" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    email</label>
                <input type="email" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" required autocomplete="off" />
                <div id="countryList" class=" bg-gray-300  text-black rounded-lg">
                </div>
            </div>
            {{ csrf_field() }}

            <button type="submit"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Submit</button>

            @if (session('error'))
                <div id="alert-2"
                    class="flex items-center mt-10 p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Alert</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('error') }}
                    </div>
                   
                </div>
            
            @endif
    </div>
    </form>
    {{-- SI L'UTILISATEUR N'EXISTE PAS --}}

    </div>

</body>
@section('script')
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script>
        //scrpit pour l'autocomplete
        $(function() {
            $('#email').on('input', function() {
                var query = $(this).val();
                if (query != '') {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{ route('autocomplete') }}",
                        method: "GET",
                        data: {
                            query: query,
                            _token: _token
                        },
                        success: function(data) {
                            $('#countryList').fadeIn();
                            $('#countryList')
                                .empty(); // Vider la liste avant d'ajouter de nouveaux éléments
                            let data_user = $.each(data, function(index, item) {
                                $('#countryList').append(
                                    '<p id="id_odc">' + item.email +
                                    '</p><ul class= "font-bold"><li class=" bg-gray-300 hover:bg-gray-400 pl-4 "> </li></ul>'
                                );



                            });


                        }
                    });
                } else {
                    $('#countryList').fadeOut();
                }
            });

            delay: 500,

                $(document).on('click', 'li', function() {
                    $('#email').val($(this).text());
                    var go = $("#id_odc").text()
                    $("#id_user").attr("value", go)
                    $('#countryList').fadeOut();
                });
            //faire une reinitialisation de champ
            $('#resetButton').click(function() {
                $('#email').val(''); // Vider le champ de saisie
                $('#countryList').fadeOut(); // Cacher la liste des suggestions
            });


        });
    </script>
@endsection


</html>
