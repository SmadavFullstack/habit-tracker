<x-layout>
    <section class="h-full w-full">
        @auth
            <h1 class="text-3xl text-green-500">
                Bem-vindo, Senhor(a) {{ auth()->user()->name }}!
            </h1>
        @endauth
    </section>
</x-layout>
