<x-app-layout>
    <div style="background-image:url({{asset('images/UTG2.jpg')}})" class="flex bg-green-500">
        <div class="w-3/6">@livewire('grupos', ['dia' => 1])</div>
        <div class="w-3/6">@livewire('grupos', ['dia' => 2])</div>
    </div>
</x-app-layout>