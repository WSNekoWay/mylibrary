@extends('layouts.app')


@section('container')
<h1>{{$maintitle}}</h1>

<form action="/" method="GET" class="form-inline w-25 d-flex gap-2">
    <input type="search" placeholder="Search" name="search" class="form-control">
    <button type="submit" class="btn btn-outline-success">Search</button>
</form>


<table class="table">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Country</th>
        <th scope="col">Description</th>
        <th scope="col">Contact</th>
        <th scope="col">Photo</th>
    </tr>
    </thead>
    <tbody>
    @foreach($writers as $index=> $wr)
    <tr>
        <td scope="row">{{$index + 1}}</td>
        <td><a href="/writer/{{ $wr['id'] }}">{{ $wr['nama']}}</a></td>
        <td>{{$wr['tempat']}}</td>
        <td>@if($loop->first)
            Urutan Teratas
            @elseif($loop->last)
            Urutan Terakhir
            @elseif($loop -> iteration == $loop->count/2)
            Urutan Tengah
            @else
            @if($loop->even)
            Urutan Genap
            @elseif($loop->odd)
            Urutan Ganjil
            @endif
            @endif
            
            
        </td>
        <td>{{ $wr['contact'] }}
        </td>
        <td>
            @if($wr['photo']=="")
            Photo tidak tersedia
            @else
            
            <img src="image/{{$wr['photo']}}" class="d-block rounded-3" alt="" width="150dp" height="150dp">
            @endif
        </td>
    </tr>


    @endforeach
</tbody>
</table>

{{ $writers->links() }}

<h1>Books</h1>
@if(Auth::check() && Auth::user()->status == 'admin')
<a href="{{ route('books.create') }}" class="btn btn-outline-primary">Create Book</a> 
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Synopsis</th>
            <th>Writer Name</th>
            <th>Cover Photo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $book['title'] }}</td>
            <td>{{ $book['synopsis'] }}</td>
            <td>{{ $book->writer->nama }}</td>
            <td> <img src="image/{{$book['coverphoto']}}" class="d-block rounded-3" alt="" width="150dp" height="150dp"></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection 