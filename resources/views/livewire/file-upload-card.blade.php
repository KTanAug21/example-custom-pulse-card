<x-pulse::card  :cols="$cols" >
    <x-pulse::card-header name="File Upload">
        <x-slot:icon>
           
        </x-slot:icon>
    </x-pulse::card-header>
 
    <x-pulse::scroll >
        <form wire:submit="save">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
            <input  wire:model="photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            @error('photo') <span class="error">{{ $message }}</span> @enderror

            <button type="submit">Save photo</button>
        </form>
    </x-pulse::scroll>
</x-pulse::card>