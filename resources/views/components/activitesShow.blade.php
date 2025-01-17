@props(['show', 'datachart'])



<div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel"
    aria-labelledby="profile-tab">


    <div class="w-full  mx-auto">
        <div class="mx-5 my-3 text-sm">
            <a href="" class=" text-red-600 font-bold tracking-widest">{{ $show->categorie->name }}</a>
        </div>
        <div class="w-full text-gray-800 text-4xl px-5 font-bold leading-none dark:text-gray-100">
            {{ $show->title }}
        </div>

        <div class="w-full text-gray-500 px-5 pb-5 pt-2">
            The war of words comes after the governor sued the Atlanta mayor over her city’s mask mandate.
        </div>

        @if ($show->candidat->count() == 0)
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div>
                    <div
                        class="lg:h-full py-8 px-6 text-gray-600 dark:text-gray-200  rounded-xl border border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-700">

                        <img src="{{ $show->thumbnail_url }}" alt="{{ $show->title }}" class=" mb-4">

                        {!! substr($show->content, 0, 600) !!} ...

                        <div class="flex justify-center gap-2 flex-wrap p-4">

                            @foreach ($show->hashtag as $item)
                                <span class="bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-600">
                                    {{ $item->name }}</span>
                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="md:col-span-2 lg:col-span-1">
                    <div
                        class="h-full py-8 px-6 space-y-6 rounded-xl border border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-700">
                        <div class="py-6" id="chart"></div>
                        <div>

                            <div class="mt-2 flex justify-center gap-4">
                                <h3 class="text-3xl font-bold text-gray-700">Global Activities</h3>

                            </div>
                            <span class="block text-center text-gray-500"></span>
                        </div>
                        <table class="w-full text-gray-600">
                            <tbody>
                                <tr>
                                    <td class="py-2">Total Candidat</td>
                                    <td class="text-gray-500">no data</td>
                                    <td>
                                        <svg class="w-16 ml-auto" viewBox="0 0 68 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.4" width="17" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="19" width="14" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="35" width="14" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="51" width="17" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <path
                                                d="M0 7C8.62687 7 7.61194 16 17.7612 16C27.9104 16 25.3731 9 34 9C42.6269 9 44.5157 5 51.2537 5C57.7936 5 59.3731 14.5 68 14.5"
                                                stroke="url(#paint0_linear_622:13631)" stroke-width="2"
                                                stroke-linejoin="round" />
                                            <defs>
                                                <linearGradient id="paint0_linear_622:13631" x1="68"
                                                    y1="7.74997" x2="1.69701" y2="8.10029"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#E323FF" />
                                                    <stop offset="1" stop-color="#7517F8" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2">Total Garcon</td>
                                    <td class="text-gray-500">no data</td>
                                    <td>
                                        <svg class="w-16 ml-auto" viewBox="0 0 68 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.4" width="17" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="19" width="14" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="35" width="14" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="51" width="17" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <path
                                                d="M0 12.929C8.69077 12.929 7.66833 9.47584 17.8928 9.47584C28.1172 9.47584 25.5611 15.9524 34.2519 15.9524C42.9426 15.9524 44.8455 10.929 51.6334 10.929C58.2217 10.929 59.3092 5 68 5"
                                                stroke="url(#paint0_linear_622:13640)" stroke-width="2"
                                                stroke-linejoin="round" />
                                            <defs>
                                                <linearGradient id="paint0_linear_622:13640" x1="34"
                                                    y1="5" x2="34" y2="15.9524"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#8AFF6C" />
                                                    <stop offset="1" stop-color="#02C751" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2">Total Filles</td>
                                    <td class="text-gray-500">no data</td>
                                    <td>
                                        <svg class="w-16 ml-auto" viewBox="0 0 68 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.4" width="17" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="19" width="14" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="35" width="14" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="51" width="17" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <path
                                                d="M0 6C8.62687 6 6.85075 12.75 17 12.75C27.1493 12.75 25.3731 9 34 9C42.6269 9 42.262 13.875 49 13.875C55.5398 13.875 58.3731 6 67 6"
                                                stroke="url(#paint0_linear_622:13649)" stroke-width="2"
                                                stroke-linejoin="round" />
                                            <defs>
                                                <linearGradient id="paint0_linear_622:13649" x1="67"
                                                    y1="7.96873" x2="1.67368" y2="8.44377"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFD422" />
                                                    <stop offset="1" stop-color="#FF7D05" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <div
                        class="h-full py-6 px-6 rounded-xl border border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="text-xl text-gray-700 mb-5">Detail Activites</h5>

                        <table class="w-full text-gray-600">
                            <tbody>
                                <tr>
                                    <td class="py-2">Date debut Activite</td>
                                    <td class="text-gray-500">
                                        @php
                                            $date = new DateTimeImmutable($show->start_date);
                                            $format = date_format($date, 'jS \o\f F Y');
                                        @endphp

                                        {{ $format }}

                                    </td>
                                    <td>
                                        <svg class="w-16 ml-auto text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                clip-rule="evenodd" />
                                        </svg>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="py-2">Date Fin Activite</td>
                                    <td class="text-gray-500">
                                        @php
                                            $date = new DateTimeImmutable($show->end_date);
                                            $format = date_format($date, 'jS \o\f F Y');
                                        @endphp

                                        {{ $format }}

                                    </td>
                                    <td>
                                        <svg class="w-16 ml-auto text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                clip-rule="evenodd" />
                                        </svg>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2">Formulaire</td>
                                    <td class="text-gray-500">
                                        {{ $show->book_a_seat ? '✔️' : '⭕️' }}
                                    </td>
                                    <td>
                                        <svg class="w-16 ml-auto text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z"
                                                clip-rule="evenodd" />
                                        </svg>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2">Lieu Activite</td>
                                    <td class="text-gray-500">{{ $show->location }}</td>
                                    <td>
                                        <svg class="w-16 ml-auto text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                                clip-rule="evenodd" />
                                        </svg>

                                    </td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>

            </div>
        @else
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div>
                    <div
                        class="lg:h-full py-8 px-6 text-gray-600 dark:text-gray-200 rounded-xl border border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-700">

                        <img src="{{ $show->thumbnail_url }}" alt="{{ $show->title }}" class=" mb-4">

                        {!! substr($show->content, 0, 600) !!} ...

                        <div class="flex justify-center gap-2 flex-wrap p-4">

                            @foreach ($show->hashtag as $item)
                                <span class="bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-600">
                                    {{ $item->name }}</span>
                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="md:col-span-2 lg:col-span-1">
                    <div
                        class="h-full py-8 px-6 space-y-6 rounded-xl border border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-700">
                        <div class="py-6" id="chart"></div>
                        <div>

                            <div class="mt-2 flex justify-center gap-4">
                                <h3 class="text-3xl font-bold text-gray-700 dark:text-gray-200">Global Activities</h3>

                            </div>
                            <span class="block text-center text-gray-500"></span>
                        </div>
                        <table class="w-full text-gray-600 dark:text-gray-200">
                            <tbody>
                                <tr>
                                    <td class="py-2">Total Candidat</td>
                                    <td class="text-gray-500 dark:text-gray-200">
                                        {{ $datachart->first()->total_candidats }}</td>
                                    <td>
                                        <svg class="w-16 ml-auto" viewBox="0 0 68 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.4" width="17" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="19" width="14" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="35" width="14" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="51" width="17" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <path
                                                d="M0 7C8.62687 7 7.61194 16 17.7612 16C27.9104 16 25.3731 9 34 9C42.6269 9 44.5157 5 51.2537 5C57.7936 5 59.3731 14.5 68 14.5"
                                                stroke="url(#paint0_linear_622:13631)" stroke-width="2"
                                                stroke-linejoin="round" />
                                            <defs>
                                                <linearGradient id="paint0_linear_622:13631" x1="68"
                                                    y1="7.74997" x2="1.69701" y2="8.10029"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#E323FF" />
                                                    <stop offset="1" stop-color="#7517F8" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2">Total Garcon</td>
                                    <td class="text-gray-500 dark:text-gray-200">
                                        {{ $datachart->first()->total_garcons }}</td>
                                    <td>
                                        <svg class="w-16 ml-auto" viewBox="0 0 68 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.4" width="17" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="19" width="14" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="35" width="14" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="51" width="17" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <path
                                                d="M0 12.929C8.69077 12.929 7.66833 9.47584 17.8928 9.47584C28.1172 9.47584 25.5611 15.9524 34.2519 15.9524C42.9426 15.9524 44.8455 10.929 51.6334 10.929C58.2217 10.929 59.3092 5 68 5"
                                                stroke="url(#paint0_linear_622:13640)" stroke-width="2"
                                                stroke-linejoin="round" />
                                            <defs>
                                                <linearGradient id="paint0_linear_622:13640" x1="34"
                                                    y1="5" x2="34" y2="15.9524"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#8AFF6C" />
                                                    <stop offset="1" stop-color="#02C751" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2">Total Filles</td>
                                    <td class="text-gray-500 dark:text-gray-200">
                                        {{ $datachart->first()->total_filles }}</td>
                                    <td>
                                        <svg class="w-16 ml-auto" viewBox="0 0 68 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.4" width="17" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="19" width="14" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="35" width="14" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <rect opacity="0.4" x="51" width="17" height="21" rx="1"
                                                fill="#e4e4f2" />
                                            <path
                                                d="M0 6C8.62687 6 6.85075 12.75 17 12.75C27.1493 12.75 25.3731 9 34 9C42.6269 9 42.262 13.875 49 13.875C55.5398 13.875 58.3731 6 67 6"
                                                stroke="url(#paint0_linear_622:13649)" stroke-width="2"
                                                stroke-linejoin="round" />
                                            <defs>
                                                <linearGradient id="paint0_linear_622:13649" x1="67"
                                                    y1="7.96873" x2="1.67368" y2="8.44377"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFD422" />
                                                    <stop offset="1" stop-color="#FF7D05" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <div
                        class="h-full py-6 px-6 mb-4 rounded-xl border border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="text-xl text-gray-700 mb-5 dark:text-gray-200">Detail Activites</h5>

                        <table class="w-full text-gray-600 dark:text-gray-200">
                            <tbody>
                                <tr>
                                    <td class="py-2">Date debut Activite</td>
                                    <td class="text-gray-500 dark:text-gray-200">
                                        @php
                                            $date = new DateTimeImmutable($show->start_date);
                                            $format = date_format($date, 'jS \o\f F Y');
                                        @endphp

                                        {{ $format }}

                                    </td>
                                    <td>
                                        <svg class="w-16 ml-auto text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                clip-rule="evenodd" />
                                        </svg>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="py-2">Date Fin Activite</td>
                                    <td class="text-gray-500 dark:text-gray-200">
                                        @php
                                            $date = new DateTimeImmutable($show->end_date);
                                            $format = date_format($date, 'jS \o\f F Y');
                                        @endphp

                                        {{ $format }}

                                    </td>
                                    <td>
                                        <svg class="w-16 ml-auto text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                clip-rule="evenodd" />
                                        </svg>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2">Formulaire</td>
                                    <td class="text-gray-500">
                                        {{ $show->book_a_seat ? '✔️' : '⭕️' }}
                                    </td>
                                    <td>
                                        <svg class="w-16 ml-auto text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z"
                                                clip-rule="evenodd" />
                                        </svg>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2">Lieu Activite</td>
                                    <td class="text-gray-500 dark:text-gray-200">{{ $show->location }}</td>
                                    <td>
                                        <svg class="w-16 ml-auto text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                                clip-rule="evenodd" />
                                        </svg>

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="flex w-full md:max-w-xl  rounded shadow mt-5">

                            @if ($show->status == true)
                                <a href="{{ route('send', $show->id) }}" onclick="desactiver(event)"
                                    aria-current="false" data-modal-target="active" data-modal-toggle="active"
                                    class="w-full flex justify-center font-medium rounded-l px-5 py-2 border bg-white text-gray-800 border-gray-200 hover:bg-gray-100">
                                    Active
                                    Status
                                </a>
                            @else
                                <a href="{{ route('send', $show->id) }}" data-modal-target="active"
                                    data-modal-toggle="active"
                                    class="block px-4 py-2 hover:bg-gray-100  dark:hover:bg-gray-600 dark:hover:text-white"
                                    onclick="desactiver(event)"> Desactive
                                    Status</a>
                            @endif


                            @if ($show->book_a_seat == true)
                                <a href="{{ route('bookInSeat', $show->id) }}" onclick="desactiver(event)" aria-current="page" data-modal-target="active" data-modal-toggle="active"
                                    class="w-full flex justify-center font-medium px-5 py-2 border-t border-b bg-gray-900 text-white  border-gray-900 hover:bg-gray-800">
                                    Activer Form
                                </a>
                            @else
                                <a href="{{ route('bookInSeat', $show->id) }}" data-modal-target="active"
                                    data-modal-toggle="active" onclick="desactiver(event) aria-current="page"
                                    class="w-full flex justify-center font-medium px-5 py-2 border-t border-b bg-gray-900 text-white  border-gray-900 hover:bg-gray-800">
                                    Desactiver Form
                                </a>
                            @endif

                            <a href="#" aria-current="false"
                                class="w-full flex items-center gap-x-2 justify-center font-medium rounded-r px-5 py-2 border bg-white text-gray-800 border-gray-200 hover:bg-gray-100">
                                Active Slider

                            </a>
                        </div>


                    </div>
                </div>

            </div>

        @endif




    </div>
</div>
