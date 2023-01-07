@extends('layouts.app')

@section('content')
    <div>
        <form
            action=""
            method="POST"
            enctype="multipart/form-data">
            @csrf
            
            <input
                type="text"
                name="title"
                placeholder="Title...">
            
            <textarea
                name="description"
                placeholder="Description">
            </textarea>

            

        </form>
    </div>
@endsection