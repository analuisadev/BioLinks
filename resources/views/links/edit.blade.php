<x-layout.app>
    <x-container>
        <x-card title="Editing link :: {{ $link->name }}">
            <x-form :route="route('links.edit', $link)" put id="form">
                <x-input type="text" name="link" id="link" placeholder="Insert a new link" value="{{ old('link', $link->link) }}"/>
                <x-input type="name" name="name" id="name" placeholder="Link's name" value="{{ old('name', $link->name) }}"/>
            </x-form>

            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button form="form">Update link</x-button>
            </x-slot:actions>

        </x-card>
    </x-container>
</x-layout.app>
