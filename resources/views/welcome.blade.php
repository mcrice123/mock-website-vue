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

            <script src="<?php echo URL::to('/'); ?>/js/app.js"></script>
        </div>
    </body>
</html>
