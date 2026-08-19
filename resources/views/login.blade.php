<x-layout>

    <section class="w-full h-[85vh] flex flex-col justify-center items-center gap-5">

        <h1 class="text-3xl w-full text-center">Login</h1>

        <form action="/login" method="post"
            class="bg-white h-79 w-130 rounded flex flex-col justify-evenly items-center shadow-md p-4!">
            @csrf
            @error('email')
                <p class="text-red-500 text-sm border-2 rounded p-1!">{{ $message }}</p>
            @enderror
            <div class="flex flex-col gap-2 p-4! rounded w-[90%]">
                <label for="email">Email</label>
                <input type="email" name="email" id="email"
                    class=" bg-amber-200 outline-none p-2! w-[90%] shadow rounded" placeholder="your@email.com"
                    required>
            </div>
            <div class="flex flex-col gap-2 p-4! rounded w-[90%]">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class=" bg-amber-200 outline-none p-2! w-[90%] shadow rounded" placeholder="******" required>
            </div>
            <button type="submit"
                class="bg-amber-600 text-white px-4! py-2! rounded hover:bg-amber-800 cursor-pointer">Login</button>
        </form>

    </section>

</x-layout>
