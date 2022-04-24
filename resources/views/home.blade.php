@extends('layout.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            <h4> {{ session('status') }} </h4>
        </div>
    @endif
<h2> Current News </h2>
<div class="news">
    <div class="title">
        <h3>Ten news of lads</h3>
    </div>
    <div class="contents">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum consequuntur dolorem, maxime maiores itaque expedita facilis impedit quis nihil, illo libero perferendis vitae, aut doloremque excepturi fugit nam rerum ullam.</p>
    </div>
</div>

<div class="news">
    <div class="title">
        <h3>Ten news of lads</h3>
    </div>
    <div class="contents">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum consequuntur dolorem, maxime maiores itaque expedita facilis impedit quis nihil, illo libero perferendis vitae, aut doloremque excepturi fugit nam rerum ullam.</p>
    </div>
</div>
@endsection

@section('sidebar')
@parent
    This is another sidebaer
@endsection

