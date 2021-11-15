<x-app-layout>

    <div class="flex bg-green-700 mb-10">
        <img src="{{ asset('images/UTG2.jpg') }}" class="absolute h-full w-full object-cover" />
        <div class="item ml-3 w-3/6">@livewire('form')</div>
        <div class="item w-3/6">@livewire('user-card')</div>
    </div>
</x-app-layout>