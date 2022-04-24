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

<div class="col-md-6">
    <h4>List Of Data in Api</h4>
    @if (!count($response))
        <div class="alert alert-warning">
            <h6>No Data Available</h6>
        </div>
    @endif
    <ul>
        @foreach ($response as $res )
        <li>Client Name :{{$res['client']}} </li>
        <li>Details : {{$res['details']}} </li>
        @endforeach
        {{-- {{ dd($response) }} --}}


    </ul>

</div>


<form action="{{ route('store-api') }}" method="post">
    {{ @csrf_field() }}
       <div class="mb-3">
        <label for="" class="form-label">Client Name</label>
        <input type="text" name="client" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Enter your subject name</small>
      </div>
      <div class="form-group">
        <label for="">Message</label>
        <textarea name="details" id="" cols="5" rows="5" class="form-control"></textarea>
        <small id="helpId" class="text-muted">Enter your Message</small>
      </div>
      <div class="md-3">
        <button type="submit" class="btn btn-primary btn-lg">Send</button>
      </div>
    </form>
    </div>

@endsection
