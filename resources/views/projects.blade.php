<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mock Website - Vue</title>

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/css/app.css">
    </head>
    <body>
        <div id="app">
            <h1 class="title is-1"><a href="<?php echo URL::to('/'); ?>">Mock Website</a></h1>
            <h2 class="subtitle is-3">An Experiment with Vue</h2>

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

            <script src="<?php echo URL::to('/'); ?>/js/app.js"></script>
        </div>
    </body>
</html>