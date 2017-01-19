<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clients</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        body {padding-top: 40px;}
    </style>
</head>
<body>
    <div id="app" class="container">

        @include('clients.list')

        <form action="/clients" method="POST" @submit.prevent="onSubmit">

            <text-field name="name" title="Client Name:" v-model="form.name" :error="form.errors.get('name')" @valid="form.errors.clear('name')"></text-field>

            <div class="form-group">
                <button class="btn btn-success" :disabled="form.errors.any()">Create</button>
            </div>
        </form>
    </div>

    <script src="/js/clients.js"></script>
</body>
</html>