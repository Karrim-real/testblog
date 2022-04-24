@extends('layout.app')

@section('content')
<h2>Message From Customer</h2>
@if (!count($messages))
    <div class="alert alert-warning">
        <h3>No Mesage Available</h3>
    </div>
@endif
@foreach ($messages as $message)

<a href="{{ url('single-message/'. $message->id) }}">
<div class="list-group list-group-checkable">
    <input class="list-group-item-check" type="radio" name="listGroupCheckableRadios" id="listGroupCheckableRadios1" value="" >
    <label class="list-group-item py-3" for="listGroupCheckableRadios1">
      {{ $message->fullname }}
      <span class="d-block small opacity-50">{{ $message->subject }}</span>
    </label>
  </div>
</a>
    @endforeach
@endsection

