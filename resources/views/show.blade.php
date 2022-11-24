@extends('layouts.app')

@section('container')
    <h1>{{ $maintitle }}</h1>


    @if($writer['photo']=="")
    Photo tidak tersedia
    @else
    
    <img src="/image/{{$writer['photo']}}" class="d-block rounded-3" alt="" width="150dp" height="150dp">
    @endif

    <h2>Name : {{ $writer['nama'] }}</h2>
    <h4>Tempat : {{ $writer['tempat'] }}</h3>
    <h4>Contact : {{ $writer['contact'] }}</h3>

        <h1>Books:</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Synopsis</th>
                <th scope="col">Cover Photo</th>
            </tr>
            </thead>
            <tbody>
            @foreach($writer->books as $book)
            <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{ $book->title }}</td>
                <td>{{$book->synopsis}}</td>
                <td>
                    
                    
                    <img src="/image/{{$book->coverphoto}}" class="d-block rounded-3" alt="" width="150dp" height="150dp">

                </td>
            </tr>
        
        
            @endforeach
        </tbody>
        </table>
    <a href="http://127.0.0.1:8000/index" class="btn btn-primary">Back</a>
@endsection
