<header class="bg-blue-800">
    <div class="container mx-auto flex items-center justify-between px-6 py-4">
      <div>
        <a href="#" class="text-white font-bold text-xl">Logo</a>
      </div>
      <nav class="hidden md:flex md:items-center md:space-x-4">
        <a href="#sobrenos" class="text-white hover:text-gray-200">Home</a>
        <a href="#sistema" class="text-white hover:text-gray-200">Sistema</a>
        <a href="#dica" class="text-white hover:text-gray-200">Dicas Semanais</a>
        <a href="#contato" class="text-white hover:text-gray-200">Contato</a>
      </nav>
      <div class="hidden md:flex md:items-center md:space-x-4">
        <button class="px-4 py-2 bg-red-700 text-white font-bold rounded-lg">Logar</button>
        <button class="px-4 py-2 bg-red-700 text-white font-bold rounded-lg">Registrar</button>
      </div>
      <div class="md:hidden">
        <button class="mobile-menu-button">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-white">
            <path d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
    <!--Menu Mobile -->
    <div class="hidden mobile-menu">
      <nav class="px-4 py-2">
        <a href="#sobrenos" class="block text-white font-bold py-2">Home</a>
        <a href="#sistema" class="block text-white font-bold py-2">Sistema</a>
        <a href="#dica" class="block text-white font-bold py-2">Dicas Semanais</a>
        <a href="#contato" class="block text-white font-bold py-2">Contato</a>
      </nav>
      <div class="px-4 py-2">
        <button class="block w-full bg-red-700 text-white font-bold rounded-lg py-2">Logar</button>
        <button class="block w-full bg-red-700 text-white font-bold rounded-lg py-2 mt-2">Registrar</button>
      </div>
    </div>
  </header>

  <script>
    document.querySelector('.mobile-menu-button').addEventListener('click', function() {
      document.querySelector('.mobile-menu').classList.toggle('hidden');
    });
  </script>
