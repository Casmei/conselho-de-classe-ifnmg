<p> Livewire test implementation!</p>
<div class="flex justify-center items-center space-x-3">
    <x-primary-button wire:click="increment">+</x-primary-button>
    <h1 class="text-xl">{{ $count }}</h1>
    <x-primary-button wire:click="decrement">-</x-primary-button>

</div>
