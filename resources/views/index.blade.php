@extends('layouts.main')

@section('css', '/css/style.css')
@section('titulo', '3E LOJA')
@section('conteudo')

<div id="container">   
    <img src="./img/logo.png" alt="Logo" class="imgLogo">
        <div class="menu">
            <button class="botao"> <a href="" class="texto1"> Produtos </a> </button>
            <button class="botao"> <a href=""> Meu Carrinho </a> </button>
            <button class="botao"> <a href=""> Minha Carteira </a> </button>
            <button class="botao"> <a href="/cadastro"> Perfil </a></button>

        </div>
      </div>
  <main>
  <div class="card">
    <div class="box">
      <div class="content">
        <h3>Painel Solar</h3>
        <img src="img/placa solar.webp" class="imginfo"alt="">
        <p>Painel Solar para telhado que utiliza de raios solares para produção de energia</p>
        <a class="botaocard" href="#">R$1.500,85</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="box">
      <div class="content">
        <h3>Gerador eólico</h3>
        <img src="img/eolica.jpg" class="imginfo"alt="">
        <p>Gerador que utiliza da ação dos ventos para geração de energia em telhados</p>
        <a class="botaocard" href="#">R$2.570,78</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="box">
      <div class="content">
        <h3>Mini gerador hidráulico</h3>
        <img src="img/hidre.jpg" class="imginfo">
        <p>Gerador que utilizada ação da água para geração de energia em local residencial</p>
        <a class="botaocard" href="#">R$140,00</a>
      </div>
    </div>
  </div>
</main>

@endsection