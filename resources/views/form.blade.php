@extends('layouts.main')

@section('css', '/css/form.css')
@section('titulo', '3E CADASTRO')
@section('form', 'fundo')
@section('conteudo')

<main>
    <section data-aos="fade-left">
        <div class="iptstyle">
<div class="btnposition">
<a class="voltar" href="/home"><img class="imglogo" src="/img/logo.png" alt=""></a>
</div>
            <form class="form" action="/cadastrar" method="post">
                @csrf
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="digite aqui">
                <label for="">Email</label>
                <input type="email" name="email" id="email" placeholder="digite aqui">
                <label for="">Data de Nascimento</label>
                <input type="date" name="nascimento" id="nascimento" placeholder="digite aqui">

                <div class="btn">
                    <button class="btn" type="submit">Salvar</button>
                </div>
            </form>
        </div>
       <img class="adjust" src="https://www.unifacear.edu.br/wp-content/uploads/teste-2.jpg" alt="">
    </section>
    </main>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>

@endsection
