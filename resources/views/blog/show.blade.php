@extends('layouts.app')
@section('content')
 <section id="main-div-reading" class="bg-light">
    <h1> {{$post->title}}</h1>
    <span>Por {{$post->user->name}} em {{date('jS M Y', strtotime($post->updated_at))}}</span>
    <div class="line"></div>
    <h3>Visão geral</h3>
    <p> 
        {{$post->description}}
    </p>
   
 </section>
@endsection