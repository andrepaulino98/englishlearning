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

  <section class="bg-gray-100 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4 mt-5">

    <div class="card mt-2 items-center justify-center">
        <div><h3>Gramatica</h3></div>
            <img src="{{ asset('images/flags.png') }}" alt="">

    </div>

  </section>



@endsection
