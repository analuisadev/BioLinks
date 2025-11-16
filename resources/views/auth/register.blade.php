<x-layout.app>
    <x-container>
        <x-card title="Register">
            <x-form :route="route('register')" post id="register-form">
                <x-input type="text" name="name" id="name" placeholder="Name" value="{{  old('name')  }}"/>
                <x-input type="text" name="email" id="email" placeholder="E-mail" value="{{  old('email')  }}"/>
                <x-input type="text" name="email_confirmation" id="email_confirmation" placeholder="E-mail Confirmation"/>
                <x-input type="password" name="password" id="password" placeholder="Password"/>
            </x-form>

            <x-slot:actions>
                <x-a :href="route('login')">Already have an account!</x-a>
                <x-button form="register-form">Register</x-button>
            </x-slot:actions>

        </x-card>
    </x-container>

</x-layout.app>
