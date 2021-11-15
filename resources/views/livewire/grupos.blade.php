<div class="mt-8 mx-3 mb-40">
    <div class="px-8 pt-8 pb-2 bg-white dark:bg-gray-800 rounded-lg shadow">

        <p style="font-family: 'Graduate', cursive;" class="text-center text-3xl font-bold text-green-400 dark:text-white">
            @if ($dia == 2)
                JUEVES
            @elseif ($dia == 1)
                MARTES
            @endif
        </p>

        <p class="text-center mb-12 text-xl font-normal text-gray-500 dark:text-gray-300">
            Alumnos que asistiran este día.
        </p>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
            @foreach ($alumnos as $alumno)
                <div class="p-2">
                    <div class="flex-col  flex justify-center items-center">
                        <div class="flex-shrink-0">
                            <a href="#" class="block relative">
                                <img alt="{{$alumno->name}}" src="{{ $alumno->profile_photo_url }}"
                                    class="mx-auto object-cover rounded-full h-16 w-16 " />
                            </a>
                        </div>
                        <div class="mt-2 text-center flex flex-col">
                            <span class="text-gray-600 dark:text-white text-lg font-normal">
                               {{$alumno->name}}
                            </span>
                            <span class="text-green-400 text-xs">
                                @if ($alumno->type == 0) Estudiante @else Docente @endif
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-3">
            @error('grupo-asignado') <p class="text-red-500">Su grupo ya ha sido asignado.</p>@enderror
            <button wire:click="añadirAlumno({{Auth::user()->id}},{{$dia}})" class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Asistiré</button>
        </div>
    </div>
</div>