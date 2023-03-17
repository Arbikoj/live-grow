<x-slot name="header">
    <h2 class="text-center">{{$detail->name}}</h2>
</x-slot>

@livewire('child-history', ['childrenID' => $detail->id])
