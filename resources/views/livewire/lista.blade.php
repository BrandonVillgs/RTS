<div>
    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
        <div class="py-8">
            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                <h2 style="font-family: 'Graduate', cursive;" class="text-2xl leading-tight text-green-500 font-bold">
                    ESTUDIANTES & DOCENTES
                </h2>
                <div class="text-end">
                    <form
                        class="flex flex-col md:flex-row w-3/4 md:w-full max-w-sm md:space-x-3 space-y-3 md:space-y-0 justify-center">
                        <div class=" relative ">
                            <input wire:model='search' type="text" id="&quot;form-subscribe-Filter"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"
                                placeholder="Buscar ..." />
                        </div>
                        <button wire:click='clean'
                            class="flex-shrink-0 px-4 py-2 text-base font-semibold text-green-500 bg-white rounded-lg shadow-md hover:bg-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-white"
                            type="button">
                            Limpiar
                        </button>
                    </form>
                </div>
            </div>
            <div class="-mx-4 sm:-mx-24 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-green-200 text-green-500  text-left text-sm uppercase font-normal">
                                    Nombre
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-green-200 text-green-500  text-left text-sm uppercase font-normal">
                                    Carrera
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-green-200 text-green-500  text-left text-sm uppercase font-normal">
                                    Cursando
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-green-200 text-green-500  text-left text-sm uppercase font-normal">
                                    status
                                </th>
                                <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-green-200 text-green-500  text-left text-sm uppercase font-normal">
                                Covid Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumnos as $alumno)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <a href="#" class="block relative">
                                                    <img alt="profil" src="{{$alumno->profile_photo_url}}"
                                                        class="mx-auto object-cover rounded-full h-10 w-10 " />
                                                </a>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{$alumno->name}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            @if ($alumno->type == 0) Mecatrónica @else Docente @endif
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            Sep-Dec 2021
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span aria-hidden="true"
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                            </span>
                                            <span class="relative">
                                                Activo
                                            </span>
                                        </span>
                                    </td>
                                    @if ($alumno->formulario == NULL)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden="true"
                                                    class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                </span>
                                                <span class="relative">
                                                    Regular
                                                </span>
                                            </span>
                                        </td>
                                    @elseif($alumno->formulario->score > 1)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden="true"
                                                    class="absolute inset-0 bg-red-200 opacity-50 rounded-full">
                                                </span>
                                                <span class="relative">
                                                    Caso Potencial
                                                </span>
                                            </span>
                                        </td>
                                    @elseif($alumno->formulario->score == 1)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden="true"
                                                    class="absolute inset-0 bg-yellow-200 opacity-50 rounded-full">
                                                </span>
                                                <span class="relative">
                                                    Sintomas
                                                </span>
                                            </span>
                                        </td>
                                    @else
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden="true"
                                                    class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                </span>
                                                <span class="relative">
                                                    Regular
                                                </span>
                                            </span>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                        {{$alumnos->links('vendor.livewire.simple-tailwind')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>