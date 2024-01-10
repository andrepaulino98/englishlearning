@extends('layouts.menuapp')

@section('conteudo')
<header class="bg-indigo-900 text-white py-4">
    <div class="container mx-auto px-4 flex items-center justify-between">
        <h1 class="text-2xl font-bold">English Learning</h1>
        <div class="text-right">
            <div class="text-white text-sm">Bem-vindo, Andre Paulino</div>
            <div class="mt-2">

                <button class="text-white text-sm hover:text-red-700 ml-2">Logout</button>
            </div>
        </div>
    </div>
</header>

<div class="max-w-md mx-auto ">
    <h1 class="text-2xl font-bold mb-4 text-center">Adicionar Atividade</h1>

    <form class="mb-4">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">
          Título
        </label>
        <input class="appearance-none block w-full bg-white border border-gray-300 rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="titulo" type="text" placeholder="Digite o título">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="url">
          URL
        </label>
        <input class="appearance-none block w-full bg-white border border-gray-300 rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="url" type="text" placeholder="Digite a URL">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="descricao">
          Descrição
        </label>
        <textarea class="appearance-none block w-full bg-white border border-gray-300 rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descricao" rows="3" placeholder="Digite a descrição"></textarea>
      </div>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" id="btnAdicionar">
        Adicionar
      </button>
    </form>

    <div class="border-t border-gray-300 pt-4">
        <table id="tabelaDados" class="table-auto w-full">
          <thead>
            <tr>
              <th class="px-4 py-2">Título</th>
              <th class="px-4 py-2">URL</th>
              <th class="px-4 py-2">Descrição</th>
            </tr>
          </thead>
          <tbody>
            <!-- Os dados serão adicionados aqui dinamicamente -->
          </tbody>
        </table>
      </div>
    </div>
@endsection
