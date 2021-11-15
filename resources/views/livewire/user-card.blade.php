<div>
    <div class="p-4 relative mt-32">
        <div class="text-center mb-4 absolute -top-16 right-1/2 transform translate-x-1/2">
            <a href="#" class="block relative">
                <img alt="profil" src="{{$user->profile_photo_url}}"
                    class="mx-auto object-cover rounded-lg h-40 w-40  border-2 border-white dark:border-gray-800" />
            </a>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow px-8 py-4 pt-24">
            <div class="text-center">
                <p class="text-2xl text-gray-800 dark:text-white">
                    {{$user->name}}
                </p>
                <p class="text-green-500 text-xl dark:text-gray-200 font-light">
                    @if ($user->type == 0) Estudiante @else Docente @endif
                </p>
                <p class="text-md text-gray-500 w-60 dark:text-gray-400 mx-auto py-4 font-light">
                    @if ($user->type == 0)
                    Bienvenido Brandon, 17 de Septiembre de 1999, Nacido en Guaymas, B+.
                    @else
                    Bienvenido Raúl, 05 de Mayo de 1990, Nacido en Guaymas, O+.  
                    @endif
                </p>
            </div>

            <div class="pt-8 flex border-t border-gray-200 w-40 mx-auto text-gray-500 items-center justify-between">
                @if ($user->formulario == NULL)
                <span class="relative inline-block px-10 py-1 font-semibold text-gray-600 leading-tight">
                    <span aria-hidden="true" class="absolute inset-0 bg-red-300 opacity-50 rounded-full">
                    </span>
                    <span class="relative">
                        Formulario Incompleto
                    </span>
                </span>
                @else
                <span class="relative inline-block px-10 py-1 font-semibold text-gray-600 leading-tight">
                    <span aria-hidden="true" class="absolute inset-0 bg-green-300 opacity-50 rounded-full">
                    </span>
                    <span class="relative">
                        Formulario Completado!
                    </span>
                </span>
                @endif
            </div>
            
        </div>
    </div>

</div>