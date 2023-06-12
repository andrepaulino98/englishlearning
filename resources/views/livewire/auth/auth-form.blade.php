<!-- resources/views/livewire/login-form.blade.php -->
<div class="flex justify-center items-center h-screen bg-login-image ">
    <div class="bg-white rounded shadow p-8 max-w-sm w-full">
        <h2 class="text-2xl mb-4">Login</h2>
        <form wire:submit.prevent="submit">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input wire:model="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Digite seu email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Senha</label>
                <input wire:model="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Digite sua senha">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Tipo de Usuário
                </label>
                <div class="flex items-center">
                    <input type="radio" id="estudante" name="tipo-usuario" class="mr-2">
                    <label class="mr-4" for="estudante">Estudante</label>
                    <input type="radio" id="professor" name="tipo-usuario" class="mr-2">
                    <label for="professor">Professor</label>
                </div>
            </div>
            <div class="flex items-center justify-between mb-6">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Entrar
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Esqueceu a senha?
                </a>
            </div>
            <div class="mb-4">
                <p class="text-gray-600">Ou faça login com:</p>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Google
                </button>
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Facebook
                </button>
                <button class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Twitter
                </button>
            </div>
        </form>
    </div>
</div>
