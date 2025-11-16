<x-layout.app>
    <x-container>
        <x-card title="Create a new Link">
            <x-form :route="route('links.create')" post id="form">
                <x-input type="text" name="link" id="link" placeholder="Insert a new link" value="{{ old('link') }}"/>
                <x-input type="name" name="name" id="name" placeholder="Link's name" value="{{ old('name') }}}"/>
            </x-form>

            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button form="form">Create Link</x-button>
            </x-slot:actions>

        </x-card>
    </x-container>


</x-layout.app>
