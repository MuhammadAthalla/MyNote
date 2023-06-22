@extends('layouts.app')

@section('content')
<div class="card my-4">
    <div class="card-body">
        <h5 class="card-title">{{$post -> judul}}</h5>
        <p class="card-text"> {{$post->deskripsi}} </p>

        <!-- Button -->
        <form action="{{url ("note/$post->id")}}" method="POST">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-outline-danger my-3 ">
                hapus
            </button>

            <a class="btn btn-outline-primary" href="{{url ("note/$post->id/edit")}}">
                Edit
            </a>

            <a href="{{ url('note') }}" class="btn btn-success">Kembali</a>

        </form>


        <!-- End Button -->



    </div>
</div>
@endsection