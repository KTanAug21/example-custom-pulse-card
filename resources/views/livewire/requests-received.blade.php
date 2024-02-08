<x-pulse::card :cols="$cols" :rows="$rows" :class="$class" >
    <x-pulse::card-header name="Request Distribution">
    </x-pulse::card-header>

    <x-pulse::scroll :expand="$expand">
        @foreach( $machines as $machine )
            {{ $machine->key }} = {{ $machine->count }}
        @endforeach
    </x-pulse::scroll>
</x-pulse::card>