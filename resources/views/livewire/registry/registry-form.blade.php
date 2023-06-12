<div class="flex justify-center items-center h-screen bg-registry-image">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded px-8 py-6">
            <div class="mb-4">
                <h2 class="text-2xl font-bold text-center">Registro</h2>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nome">
                    Nome
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nome" type="text" placeholder="Digite seu nome">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Digite seu email">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="senha">
                    Senha
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="senha" type="password" placeholder="Digite sua senha">
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

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button">
                Registrar
            </button>

            <div class="mt-4 flex justify-center">
                <div class="flex space-x-2">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Google
                    </button>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Facebook
                    </button>
                    <button class="bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Twitter
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js"></script>
