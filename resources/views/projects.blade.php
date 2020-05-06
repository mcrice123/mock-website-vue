@extends('layouts.page')

@section("content")

<div id="app">

    <notification></notification>

    <form method="POST" action="<?php echo URL::to('/'); ?>/projects/store" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
        <div class="control">
            <label for="name" class="label">Project Name:</label>
            <input type="text" id="name" name="name" class="input" v-model="form.name">
            <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
        </div>
        <div class="control">
            <label for="description" class="label">Project Description:</label>
            <input type="text" id="description" name="description" class="input" v-model="form.description">
            <span class="help is-danger" v-if="form.errors.has('description')">@{{ form.errors.get('description') }}</span>
        </div>
        
        <br />

        <div class="control">
            <button class="button is-primary" :disabled="form.errors.any()">Create</button>
        </div>
    </form>

    <br />
    <br />

    <ul class="list">
        <li class="list-item" v-for="project in projects" v-text="project.name"></li>
    </ul>

</div>

@endsection
