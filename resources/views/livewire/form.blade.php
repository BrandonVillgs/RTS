<div>
  @if ($alumno->formulario)
    <section class="text-gray-600 body-font relative mt-3">
      <div class="container px-5 py-10 mx-auto bg-white rounded-lg shadow">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 style="font-family: 'Graduate', cursive;" class="sm:text-3xl text-2xl title-font mb-4 text-green-500 font-bold">FORMULARIO COMPLETADO!</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-sm">Ya ha contestado el formulario correspondiente a este dia.</p>
        </div>
        <div class="md:w-5/6 mx-auto">
          <div class="flex flex-wrap -m-2">
            <div class="p-2 w-full">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">¿En las últimas 24 hrs. has presentado
                  temperatura mayor a 38°C?</label>
                <select disabled name="temperatura" required wire:model.lazy='temperatura' id=""
                  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  <option value="">Seleccióne una respuesta</option>
                </select>
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">¿Tienes dificultad para respirar?</label>
                <select disabled name="respirar" required wire:model.lazy='respirar' id=""
                  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  <option value="">Seleccióne una respuesta</option>
                </select>
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">¿En las últimas 24hrs has presentado dolor
                  articular o muscular intenso?</label>
                <select disabled name="dolor_muscular" required wire:model.lazy='dolor_muscular' id=""
                  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  <option value="">Seleccióne una respuesta</option>
                </select>
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">¿En las últimas 24hrs has presentado dolor
                  intenso en la garganta?</label>
                <select disabled name="dolor_garganta" required wire:model.lazy='dolor_garganta' id=""
                  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  <option value="">Seleccióne una respuesta</option>
                </select>
              </div>
            </div>
            <div class="p-2 w-full">
              <button wire:click='store()'
                class="flex mx-auto text-white bg-green-800 border-0 py-2 px-8 rounded text-lg">Enviado!</button>
              <div wire:loading wire:target='store'>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @else
    <section class="text-gray-600 body-font relative mt-3">
      <div class="container px-5 py-10 mx-auto bg-white rounded-lg shadow">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 style="font-family: 'Graduate', cursive;" class="sm:text-3xl text-2xl font-medium title-font mb-4 text-green-500">Formulario de Control</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-sm">Responda las siguientes preguntar para continuar con su
            clase.</p>
        </div>
        <div class="md:w-5/6 mx-auto">
          <div class="flex flex-wrap -m-2">
            <div class="p-2 w-full">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">¿En las últimas 24 hrs. has presentado
                  temperatura mayor a 38°C?</label>
                <select name="temperatura" required wire:model.lazy='temperatura' id=""
                  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  <option value="">Seleccióne una respuesta</option>
                  <option value="si">Sí</option>
                  <option value="no">No</option>
                </select>
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">¿Tienes dificultad para respirar?</label>
                <select name="respirar" required wire:model.lazy='respirar' id=""
                  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  <option value="">Seleccióne una respuesta</option>
                  <option value="si">Sí</option>
                  <option value="no">No</option>
                </select>
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">¿En las últimas 24hrs has presentado dolor
                  articular o muscular intenso?</label>
                <select name="dolor_muscular" required wire:model.lazy='dolor_muscular' id=""
                  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  <option value="">Seleccióne una respuesta</option>
                  <option value="si">Sí</option>
                  <option value="no">No</option>
                </select>
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">¿En las últimas 24hrs has presentado dolor
                  intenso en la garganta?</label>
                <select name="dolor_garganta" required wire:model.lazy='dolor_garganta' id=""
                  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  <option value="">Seleccióne una respuesta</option>
                  <option value="si">Sí</option>
                  <option value="no">No</option>
                </select>
              </div>
            </div>
            <div class="p-2 w-full">
              @if($errors->any())
              <p class="text-sm text-red-600">Rellene todos los campos del formulario.</p>
              @endif
              <div wire:loading wire:target='store'>
                <svg width="50" height="50" fill="currentColor" class="animate-spin text-center text-green-500"
                  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M526 1394q0 53-37.5 90.5t-90.5 37.5q-52 0-90-38t-38-90q0-53 37.5-90.5t90.5-37.5 90.5 37.5 37.5 90.5zm498 206q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm-704-704q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm1202 498q0 52-38 90t-90 38q-53 0-90.5-37.5t-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm-964-996q0 66-47 113t-113 47-113-47-47-113 47-113 113-47 113 47 47 113zm1170 498q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm-640-704q0 80-56 136t-136 56-136-56-56-136 56-136 136-56 136 56 56 136zm530 206q0 93-66 158.5t-158 65.5q-93 0-158.5-65.5t-65.5-158.5q0-92 65.5-158t158.5-66q92 0 158 66t66 158z">
                  </path>
                </svg>
              </div>
              <button wire:click='store()' class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Enviar</button>   
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif
</div>