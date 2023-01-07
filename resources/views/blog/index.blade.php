@extends('layouts.app')

@section('content')
    <section id="main-div" class="bg-light">
        <div class='space-between d-flex'>
            <h1 id="latest" >Escritos</h1>
            @if(Auth::check())
                <div class="borda">
                    <a href="/blog/create" class="write-btn">
                    Escrever
                    </a>
                </div>
                @endif
        </div>
        <div id="main-section">
            @foreach ($posts as $post)
                <div class="line"></div>
                <section class="section-preview d-flex">
                    <div class="left-content">
                     
                        {{-- <span class="date-span">
                            Por {{$post->user->name}}, {{date('j M Y', strtotime($post->updated_at) )}}
                        </span> --}}
                    </div>
                    <div class="right-content">
                        <span class="tag"> POO </span>
                        <span class="tag"> PHP </span>
                        <h1>{{$post->title}}</h1>
            
                        <p>
                           {{$post->description}}
                        </p>
                        <a class="more" href="/blog/{{$post->slug}}" >
                            Ler mais...
                        </a>
                    </div>     
                </section>
            @endforeach
        </div>
        <div class="line"></div>
    </section>
@endsection