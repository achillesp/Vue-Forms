@if (count($clients))
    <h1 class="title is-3">My Clients</h1>

    <ul>
        @foreach ($clients as $client)
            <li>
                <a href="#">{{ $client->name }}</a>
            </li>
        @endforeach
    </ul>

    <hr>
@endif