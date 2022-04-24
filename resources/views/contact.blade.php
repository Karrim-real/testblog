@extends('layout.app')

@section('content')
<h2> Contact Us</h2>

<div class="col-md-8">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
    @endif

<form action="{{ route('contact-submit') }}" method="post">
    {{ @csrf_field() }}
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" name="fullname" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Please enter your name</small>
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Email address</label>
        <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Enter your email</small>
      </div>
       <div class="mb-3">
        <label for="" class="form-label">Subject</label>
        <input type="text" name="subject" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Enter your subject name</small>
      </div>
      <div class="form-group">
        <label for="">Message</label>
        <textarea name="message" id="" cols="5" rows="5" class="form-control"></textarea>
        <small id="helpId" class="text-muted">Enter your Message</small>
      </div>
      <div class="md-3">
        <button type="submit" class="btn btn-primary btn-lg">Send</button>
      </div>
    </form>
    </div>

@endsection
