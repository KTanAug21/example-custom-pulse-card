<x-pulse::card :cols="$cols" :rows="$rows" :class="$class" wire:poll.5s="">
    <x-pulse::card-header name="Request Distribution">
        <x-slot:icon>
            <x-pulse::icons.rocket-launch />
        </x-slot:icon>
    </x-pulse::card-header>
 
    <x-pulse::scroll :expand="$expand">
        <div>
            <x-pulse::table>
                <colgroup>
                    <col width="100%" />
                    <col width="0%" />
                </colgroup>
                <x-pulse::thead>
                    <tr>
                        <x-pulse::th>Machine ID</x-pulse::th>
                        <x-pulse::th class="text-right">Requests</x-pulse::th>
                    </tr>
                </x-pulse::thead>
                <tbody>
                    @foreach( $machines as $machine )
                        <tr>
                            <x-pulse::td class="max-w-[1px]">
                                <code class="block text-xs text-gray-900 dark:text-gray-100 truncate">
                                    {{ $machine->key }}
                                </code>
                            </x-pulse>
                            <x-pulse::td class="max-w-[1px]">
                                <code class="block text-xs text-gray-900 dark:text-gray-100 truncate">
                                    {{ $machine->count }}
                                </code>
                            </x-pulse>
                        </tr>
                    @endforeach
                </tbody>
            </x-pulse::table>
        </div>
        
    </x-pulse::scroll>
</x-pulse::card>