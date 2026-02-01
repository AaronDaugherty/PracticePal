<x-layouts.auth-layout>

    <div class="flex h-screen items-center justify-center bg-linear-to-t from-azure to-wisteria">
        <div class="flex flex-col items-center justify-center text-center bg-alice  w-md h-fit rounded-lg p-5 shadow-2xl">
            <h1 class="font-sans">PracticePal</h1>
            <form action="/login" method="POST" class="flex flex-col p-5 items-center">
                    @csrf
                    <input type="text" placeholder="Email" name="email" class="border-2 border-black-500 m-3 px-2">
                             
                    <input type="password" placeholder="Password" name="password" class="border-2 border-black-500 m-3 px-2">

                    <button class="bg-wisteria rounded-md px-10 mt-5 font-lights cursor-pointer">Log In</button>
                
            </form>
            <p>Don't have an account? <a href="/register" class="cursor-pointer underline" >Register</a></p>
        </div>
    </div>
    
</x-layouts.auth-layout>