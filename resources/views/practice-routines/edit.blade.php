<h1>Edit Routine</h1>

<form method="POST" action="{{ route('practice-routines.update', $routine) }}">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $routine->title }}">
    <button>Save</button>
</form>

<hr>

<h2>Steps</h2>

<ul>
    @foreach ($routine->elements as $element)
        <li>{{ $element->title }}</li>
    @endforeach
</ul>

<form method="POST" action="{{ route('routine-elements.store') }}">
    @csrf
    <input type="hidden" name="practice_routine_id" value="{{ $routine->id }}">
    <input type="text" name="title" placeholder="New step">
    <button>Add Step</button>
</form>

<form action="{{ route('dashboard') }}" method="GET">
    @csrf
    <button>Back to Dashboard</button>
</form>
