<x-layouts.app-layout>


@auth()
<div class="bg-wisteria">

    <form action="/logout" method="POST" class="p-5">
        @csrf
        <button class="bg-azure text-wisteria rounded-md cursor-pointer px-2">Log Out</button>
    </form>


    <div class="flex flex-col h-screen items-center gap-2 justify-center pb-50">
        <h1 class="text-xl">Welcome to your Dashboard, {{ $user->name }}</h1>

        <h1>Your Practice Routines</h1>

        <a href="{{ route('practice-routines.create') }}">+ New Routine</a>

        <ul>
        @foreach ($routines as $routine)
            <li>
                <a href="{{ route('practice-routines.show', $routine) }}">
                    {{ $routine->title }}
                </a>
            </li>
        @endforeach
        </ul>
        <form action="submit-log" method="POST" class="flex flex-col items-center gap-2 py-5">
            @csrf
            <p class="font-light">Practice Log</p>
            <textarea name="practice-log" class="bg-alice min-w-100 min-h-50"></textarea>
            <button class="bg-harvest rounded-md cursor-pointer px-2">Submit</button>
        </form>
    </div>
</div>

@else
<h1>You must log in to view your dashbaord</h1>
@endauth
</x-layouts.app-layout>
