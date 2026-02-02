<h1>Create Routine</h1>

<form method="POST" action="{{ route('practice-routines.store') }}">
@csrf

<input type="text" name="title" placeholder="Routine Name" required>
<button>Create</button>
</form>