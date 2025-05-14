@extends('layouts.app')

@section('titolo')
    Homepage
@endsection

@section('contenuto')

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

        @foreach ($movies as $movie)
        <div class="col">
            <x-card>

                <x-slot:title>{{$movie["title"]}}</x-slot>
            
                <x-slot:original_title>{{$movie["original_title"]}}</x-slot>
                
                <x-slot:nationality>{{$movie["nationality"]}}</x-slot>

                <x-slot:date>{{$movie["date"]}}</x-slot>

                <x-slot:vote>{{$movie["vote"]}}</x-slot>
            
                </x-card>
        </div>      
        @endforeach     
        
    </div>
</div>
     
@endsection