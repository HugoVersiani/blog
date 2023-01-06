@extends('layouts.app')

@section('content')
    <section id="main-div" class="bg-light">
        <h1 id="latest" >Escritos</h1>
        <div id="main-section">
            <div class="line"></div>
            <section class="section-preview d-flex">
                <div class="left-content">
                    <div id="img-content">
                        <img  width="100%" src="{{asset('img/textura.jpg')}}">
                    </div>
                    <span class="date-span">
                        01 de Abril de 2023
                    </span>
                </div>
                <div class="right-content">
                    <span class="tag"> POO </span>
                    <span class="tag"> PHP </span>
                    <h1>O que a abstração abstrai?</h1>
        
                    <p>
                        Ação de abstrair, de analisar isoladamente um aspecto, contido num todo, sem ter em consideração sua relação com a realidade.
                    </p>
                </div>     
            </section>
        </div>
    </section>
@endsection