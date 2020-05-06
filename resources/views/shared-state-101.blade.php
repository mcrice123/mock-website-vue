@extends('layouts.page')

@section("content")

<h3 class="title is-5">Shared state 101</h3>

<div id="one">
    <h4 class="subtitle is-6">
        @{{ shared.user.name }}
    </h4>
</div>

<div id="two">
    <h4 class="subtitle is-6">
        @{{ shared.user.name }}
    </h4>
</div>

@endsection
