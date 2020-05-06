@extends('layouts.page')

@section("content")
<div id="app">

    <example></example>

    <div class="section">
        <div class="container">
            <p class="title is-5">Response from GET request</p>
            <ul class="list">
                <li class="list-item" v-for="skill in skills">@{{ skill }}</li>

                <?php /* This also works...
                    <li v-for="skill in skills" v-text="skill"></li>
                */ ?>
            </ul>
        </div>
    </div>

    <a class="button is-link" href="<?php echo URL::to('/'); ?>/projects/new">Create a Project</a>
    <a class="button is-link" href="<?php echo URL::to('/'); ?>/shared-state-101">Shared State 101</a>
</div>
@endsection