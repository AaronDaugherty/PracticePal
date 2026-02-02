<h2>{{ $routine->title }}</h2>

<ul>
    @foreach ($routine->elements as $element)
        <li>{{ $element->title }}</li>
    @endforeach
</ul>

<form action="{{ route('dashboard') }}" method="GET">
    @csrf
    <button>Back to Dashboard</button>
</form>