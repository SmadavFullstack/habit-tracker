<x-layout>

    <section class="w-full h-[85vh] flex flex-col justify-center items-center gap-5">

        <h1 class="text-3xl w-full text-center">Register</h1>

        <form action="{{ route('site.register') }}" method="post"
            class="bg-white h-150 w-130 rounded flex flex-col justify-evenly items-center shadow-md p-4!">
            @csrf
            <div class="flex flex-col gap-2 p-4! rounded w-[90%]">
                <label for="name">Name</label>
                <input type="text" name="name" id="name"
                    class=" bg-amber-200 outline-none p-2! w-[90%] shadow rounded @error('email') border border-red-500 @enderror"
                    placeholder="Your Name" required>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
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
                <input type="password" name="password"
                    class=" bg-amber-200 outline-none p-2! w-[90%] shadow rounded @error('password') border border-red-500 @enderror"
                    placeholder="******" required>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex
                    flex-col gap-2 p-4! rounded w-[90%]">
                <label for="password_confirmation">Password repeat</label>
                <input type="password" name="password_confirmation"
                    class=" bg-amber-200 outline-none p-2! w-[90%] shadow rounded @error('password') border border-red-500 @enderror"
                    placeholder="******" required>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="bg-amber-600 w-[40%] text-white px-4! py-2! rounded hover:bg-amber-800 cursor-pointer">Register</button>
            <p>Já tens uma conta? <a href="{{ route('site.login') }}" class="hover:opacity-50">Login</a>
            </p>
        </form>

    </section>

</x-layout>
