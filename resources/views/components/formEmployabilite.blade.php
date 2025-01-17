<!-- Main modal -->
<div id="crud-modal1" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full p-4">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    INSERER UNE EMPLOYE
                </h3>
                <button type="button"
                    class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="crud-modal1" id="resetButton">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>


            <!-- Modal body -->
            <form class="p-4 md:p-5" action="{{ route('employabilites.store') }}" method="post">
                @csrf
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <input type="text" name="id_user" id="id_user" class="hidden">
                    <div class="col-span-2">
                        <label for="prenom"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
                        <input name="first_name" id="first_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="veuilez saisir votre prenom" type="text" autocomplete="off" required>
                        <div id="countryList" class="text-black bg-gray-300 rounded-lg ">

                        </div>
                    </div>
                    {{ csrf_field() }}

                    <div class="col-span-2 ">
                        <label for="type_contrat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">type contrat</label>
                        <select id="type_contrat_id" name="type_contrat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="#">veuilez selectionner votre type</option>
                            @foreach ($typeContrats as $typecontrat)
                                <option value="{{ $typecontrat->id }}">{{ $typecontrat->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                   <div class="col-span-2">

                       <div id="postes-nomboites-container">
                           <div class="col-span-2 postes-nomboites-row">
                               <div>
                                   <label for="poste" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poste</label>
                                   <input id="poste" name="poste" type="text" rows="4" class="block p-2.5 w-full text-sm
                                    text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500
                                     focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                                      dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Veuilez saisir votre poste" autocomplete="off" required>

                               </div>
                               <div>
                                   <label for="nomboite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Entreprise</label>
                                   <input id="nomboite" name="nomboite" type="text" rows="4" class="block p-2.5

                                   w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300
                                    focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                                     dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Veuilez saisir le nom de votre entreprise" autocomplete="off" required>

                               </div>
                           </div>
                       </div>


                    <div class="col-span-2">
                        <label for="periode"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">periode</label>
                        <input id="periode" name="periode" type="date" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            autocomplete="off" required></input>

                    </div>
                </div>
                {{--addchampsbtn

                    <button type="button" id="add-button" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5 me-1 -ms-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Ajouter un champ
                    </button>
                {{--addchampsbtn--}}

                {{--insererbtn--}}
                <button type="submit"
                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-5 h-5 me-1 -ms-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    inserer
                </button>
                {{--insererbtn--}}

            </form>
        </div>
    </div>
</div>
