
<h1>Search Results</h1>

<ul>
    @foreach($searchResults as $result)
        <li>
            <a href="{{ route('search.result', $result->id) }}">{{ $result->name }}</a>
            <p>{{ $result->description }}</p>
        </li>
    @endforeach
</ul>
