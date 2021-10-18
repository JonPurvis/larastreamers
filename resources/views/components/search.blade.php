<div class="flex flex-row md:justify-end max-w-6xl md:max-auto">
    <div class="flex flex-row rounded-lg overflow-hidden shadow-xl">

        <select wire:model="streamer"
            class="focus:border-1 focus:border-red border-0 focus:ring-red"
        >
            <option value="">All Streamers</option>
            @foreach($channels as $channel)
                <option value="{{ $channel->id }}" wire:key="streamer_{{ $channel->id }}">{{ $channel->name }}</option>
            @endforeach
        </select>

        <label for="search" class="sr-only">Search</label>
        <input type="search" {{ $attributes->merge(['class' => 'w-80 text-gray-dark px-8 py-4 placeholder-gray-light border-0 focus:border-1 focus:border-red focus:ring-red', 'id' => 'search', 'placeholder' => 'Search for a stream...', 'role' => 'search', 'aria-placeholder' => "A stream's title"]) }} />
        <div class="flex items-center justify-center bg-red text-white py-2 px-4">
            <x-icons.search class="w-4 h-4 fill-current stroke-current" />
        </div>
    </div>
</div>
