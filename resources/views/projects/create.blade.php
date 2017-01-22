<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        body {padding-top: 40px;}
    </style>
</head>
<body>
    <div id="app" class="container">

        @include('projects.list')

        <form action="/projects" method="POST" @submit.prevent="onSubmit">

            <text-field name="name" title="Project Title:" v-model="form.name" :error="form.errors.get('name')" @valid="form.errors.clear('name')"></text-field>

            <textarea-field name="description" title="Project Description:" v-model="form.description" :error="form.errors.get('description')" @valid="form.errors.clear('description')"></textarea-field>

            <number-field name="hours" title="Hours spent on project:" v-model="form.hours" :error="form.errors.get('hours')" @valid="form.errors.clear('hours')"></number-field>

            <date-field name="started_at" title="Start date:" v-model="form.started_at" :error="form.errors.get('started_at')" @valid="form.errors.clear('started_at')"></date-field>

            <select-field name="client_id" title="Client:" v-model="form.client_id" :options="{{ $clients }}" :error="form.errors.get('client_id')" @valid="form.errors.clear('client_id')"></select-field>

            <div class="form-group">
                <button class="btn btn-success" :disabled="form.errors.any()">Create</button>
            </div>
        </form>
    </div>

    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-default/index.css">

    <script src="/js/projects.js"></script>
</body>
</html>