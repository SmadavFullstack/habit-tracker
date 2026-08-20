<x-layout>

    <section class="w-full h-[85vh] flex flex-col justify-center items-center gap-5">

        <h1 class="text-3xl w-full text-center">Login</h1>

        <form action="{{ route('site.login')}}" method="post"
            class="bg-white h-90 w-130 rounded flex flex-col justify-evenly items-center shadow-md p-4!">
            @csrf
            <div class="flex flex-col gap-2 p-4! rounded w-[90%]">
                <label for="email">Email</label>
                <input type="email" name="email" id="email"
                    class=" bg-amber-200 outline-none p-2! w-[90%] shadow rounded @error('email') border border-red-500 @enderror"
                    placeholder="your@email.com" required>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex
                    flex-col gap-2 p-4! rounded w-[90%]">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class=" bg-amber-200 outline-none p-2! w-[90%] shadow rounded @error('password') border border-red-500 @enderror"
                    placeholder="******" required>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="bg-amber-600 w-[40%] text-white px-4! py-2! rounded hover:bg-amber-800 cursor-pointer">Login</button>
                <p>Ainda não tens uma conta? <a href="{{ route('site.register')}}" class="hover:opacity-50">Register</a></p>
        </form>

    </section>

</x-layout>
