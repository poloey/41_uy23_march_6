@extends('master')
@section('content')
@foreach($notes as $note)
<div class="card my-2">
  <div class="card-body">
    <h4>
      <a href="{{route('notes.show', $note->id)}}">
        {{$note->title}}
      </a>
    </h4>
  </div>
</div>
@endforeach
@endsection