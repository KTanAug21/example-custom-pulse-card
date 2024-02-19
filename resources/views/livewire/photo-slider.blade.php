<x-pulse::card >
    <x-pulse::card-header name="Slider">
        <x-slot:icon>
           
        </x-slot:icon>
    </x-pulse::card-header>

    @foreach( $filePaths as $filePath )
        <div class="" >
        {{ url('aa.jpg') }}
            <img src="{{ url('aa.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    @endforeach
    <!-- Carousel wrapper -->

</x-pulse::card>