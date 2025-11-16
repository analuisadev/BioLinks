<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="route('profile')" put id="form" enctype="multipart/form-data">
                <div class="flex gap-2 items-center">
                    <div class="avatar">
                        <div class="w-24 rounded-xl">
                            <img src="/storage/{{ $user->photo }}" alt="Foto de perfil do usuário"/>
                        </div>
                    </div>
                    <x-file-input name="photo" />
{{--                    <input type="file" name="photo" id="photo">--}}
                </div>
                <x-input type="name" name="name" id="name" placeholder="Link's name" value="{{ old('name', $user->name) }}"/>
                <x-textarea type="text" name="description" id="description" value="{{ old('description', $user->description) }}"/>
                <x-input type="text"  prefix="biolinks.com.br/"  name="handler" id="handler" placeholder="@yourlink" value="{{ old('handler', $user->handler) }}"/>
            </x-form>

            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button form="form">Update Profile</x-button>
            </x-slot:actions>

        </x-card>
    </x-container>


</x-layout.app>
