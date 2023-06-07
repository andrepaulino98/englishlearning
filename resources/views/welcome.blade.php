@extends('layouts.app')

@section('conteudo')

<section id="sobrenos" class="bg-gray-100 mt-5">
    <div class="container mx-auto px-4 py-8 md:py-16">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
          <img src="{{ asset('images/english.jpg') }}" alt="Imagem" class="w-full rounded-lg">
        </div>
        <div>
          <h2 class="text-2xl font-bold mb-4">Sobre Nós</h2>
          <p class="text-left text-justify mb-3">
            O site EnglishLearning nasceu da dificuldade do nosso fundador em ter tudo que ele aprendia sobre o Inglês em um lugar centralizado,
            o inglês para ele não era uma lingua difícil de se aprender, mas a maior dificuldade era lembrar do conteúdo aprendido visto que
            ele não tinha contato com a lingua diariamente apesar de trabalhar na área de T.I. </p>

            <p class="text-justify">E se você chegou até o nosso site é sinal que está procurando uma ferramenta para
                te ajudar no seus estudos de inglês não importa se é britânico ou americano, estamos aqui para te ajudar, então mais uma vez seja mas muito bem vindo e
                divirta-se e utilize nossa ferramenta da melhor maneira possível e esperamos que te ajuda a atingir a sua fluência.
            </p>
        </div>
      </div>
    </div>
  </section>

  <section id="sistema" class="bg-gray-100 mt-5">
    <div class="container mx-auto px-4 py-8 md:py-16">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <div>
          <h2 class="text-2xl font-bold mb-4">Sistema</h2>
          <p class="text-rigth text-justify mb-3">
            O Sistema foi desenvolvido para te axuliar na organização dos seus estudos de Inglês ou qualquer outra lingua,
            falamos muito do inglês por que foi a motivação da criação do mesmo, mas pode ser aplicado a qualquer tipo de aprendizagem.  </p>

            <p class="text-justify">A ideia central é que você cadastre seus estudos e enviaremos lembrete do que você precisa voltar a estudar na plataforma,
                porque hoje o problema de muitos não é estudar mas sim lembrar que tem que estudar, temos algumas ferramentas no mercardo com o Anki que é um
                aplicativi de memorização espaçada, mas se você não entra no aplicativo ele não vai te encaminhar nenhum e-mail te avisando, por isso estamos aquii,
                para sanar esta lacuna.
            </p>
        </div>
        <div>
            <img src="{{ asset('images/multilingua.jpg') }}" alt="Imagem" class="w-full rounded-lg">
        </div>
      </div>
    </div>
  </section>

  <section id="dica" class="py-8 bg-gray-100 mt-5">
    <div class="container mx-auto">
      <h2 class="text-2xl font-bold text-center mb-4">Dicas Semanais</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div>
          <div class="video-container">
            <h3>Speaking</h3>
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/DZeBlZcN2s0" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div>
          <div class="video-container">
            <h3>Listening</h3>
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/vuTY4FDAbpA" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div>
          <div class="video-container">
            <h3>Speaking</h3>
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/5jGgcELhykc" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div>
          <div class="video-container">
            <h3>Reading</h3>
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/BlCBnY3Y-jw" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <<section id="contato" class="py-8 bg-blue-800">
    <div class="container mx-auto">
      <h2 class="text-2xl font-bold text-center mb-4 text-white">Fale Conosco</h2>
      <div class="max-w-lg mx-auto">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 ml-1" for="name">
              Nome:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-sm text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Seu nome">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 ml-1" for="email">
              Email:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-sm text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Seu email">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 ml-1" for="message">
              Mensagem:
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-sm text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Digite sua mensagem"></textarea>
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-red-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-1 text-sm" type="button">
              Enviar
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>

@endsection
