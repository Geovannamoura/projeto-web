<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('cadastrar') }}" method="POST">
                        @csrf <!-- Token CSRF para segurança -->
                    <!-- Marca -->
                        <div class="mt-4">
                            <x-input-label for="Marca" :value="__('Marca')" />
                            <x-text-input id="Marca" class="block mt-1 w-full" type="text" name="marca" :value="old('marca')" required autofocus autocomplete="marca" />
                            <x-input-error :messages="$errors->get('marca')" class="mt-2" />
                        </div>
                    <!-- Modelo -->
                    <div class="mt-4">
                        <x-input-label for="modelo" :value="__('Modelo')" />
                        <x-text-input id="modelo" class="block mt-1 w-full" type="text" 
                            name="modelo" :value="old('modelo')" required autocomplete="modelo" />
                        <x-input-error :messages="$errors->get('modelo')" class="mt-2" />
                    </div>
                    <!-- Tipo (Radio) -->
                    <div class="mt-4">
                        <x-input-label :value="__('Tipo')" />

                        <div class="flex items-center gap-4 mt-2">
                            <label class="flex items-center">
                                <input type="radio" name="tipo" value="Digital" required>
                                <span class="ml-2">Digital</span>
                            </label>

                            <label class="flex items-center">
                                <input type="radio" name="tipo" value="Analógico">
                                <span class="ml-2">Analógico</span>
                            </label>

                            <label class="flex items-center">
                                <input type="radio" name="tipo" value="Smartwatch">
                                <span class="ml-2">Smartwatch</span>
                            </label>
                        </div>
                        <x-input-error :messages="$errors->get('tipo')" class="mt-2" />
                    </div>
                    <!-- Preço -->
                    <div class="mt-4">
                        <x-input-label for="preco" :value="__('Preço')" />
                        <x-text-input id="preco" class="block mt-1 w-full" type="number" 
                            name="preco" :value="old('preco')" required step="0.01" autocomplete="preco" />
                        <x-input-error :messages="$errors->get('preco')" class="mt-2" />
                    </div>
                    <!-- Estado do relógio (Radio) -->
                    <div class="mt-4">
                        <x-input-label :value="__('Estado do Relógio')" />

                        <div class="flex items-center gap-4 mt-2">
                            <label class="flex items-center">
                                <input type="radio" name="estado" value="Novo" required>
                                <span class="ml-2">Novo</span>
                            </label>

                            <label class="flex items-center">
                                <input type="radio" name="estado" value="Usado">
                                <span class="ml-2">Usado</span>
                            </label>

                            <label class="flex items-center">
                                <input type="radio" name="estado" value="Com defeito">
                                <span class="ml-2">Com defeito</span>
                            </label>
                        </div>
                        <x-input-error :messages="$errors->get('estado')" class="mt-2" />
                    </div>
                    <!-- Data de fabricação -->
                    <div class="mt-4">
                        <x-input-label for="data_fabricacao" :value="__('Data de Fabricação')" />
                        <x-text-input id="data_fabricacao" class="block mt-1 w-full" type="date"
                            name="data_fabricacao" :value="old('data_fabricacao')" />
                        <x-input-error :messages="$errors->get('data_fabricacao')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-4">
                            {{ __('Cadastrar') }}
                        </x-primary-button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
