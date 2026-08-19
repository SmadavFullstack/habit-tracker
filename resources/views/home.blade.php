<x-layout>

    <section class="flex flex-col items-start justify-center p-20! h-[80vh] gap-10">
        <header>
            <h1 class="text-4xl font-bold">HABIT TRACKER</h1>
        </header>
        <P class="text-justify indent-7.5 w-[80vw]">
            Crie hábitos construtivos de forma mais precisa com apenas um clique!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, architecto tempore. Velit ipsam accusantium
            ipsa, recusandae quos, officiis ipsum esse dolores a soluta magnam officia iusto sed doloremque placeat
            quia?Quibusdam ad saepe quod rem consequatur nihil eos soluta repudiandae suscipit tenetur aliquid, nesciunt
            deserunt ipsum! Itaque ipsam accusantium et? Voluptates libero fugit quaerat neque temporibus in, suscipit
            atque necessitatibus.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, cumque assumenda totam a in minima
            sapiente numquam molestiae, distinctio cum officia voluptatem accusamus tempore, repellendus eaque obcaecati
            laboriosam itaque quod?
            Ab at consequuntur provident ea suscipit reiciendis qui doloribus voluptate a. Sed, incidunt distinctio
            repudiandae sunt nobis labore autem earum vero, explicabo laborum eaque natus quod delectus. Totam, a
            expedita!
            Assumenda architecto iure provident libero, maiores fugit quisquam deserunt est perspiciatis consequatur
            cumque nisi iste ratione eaque eveniet rerum a nostrum vero totam consectetur labore numquam accusantium
            debitis aspernatur! Quibusdam?
            Quos fugiat ab perspiciatis illum iure saepe a, dicta voluptates nisi eius, rem facere delectus dolor error
            mollitia illo quibusdam aut aliquam et. Saepe dolorum quos aperiam fugiat, reprehenderit odio!
        </P>
        <button
            class="h-12.5 w-37.5 bg-amber-600 text-white font-sans font-bold cursor-pointer shadow-[0_1px_4px_rgb(0,0,0)] rounded">Criar</button>

    </section>
    <section class="bg-white flex flex-col items-start justify-center p-20! h-[80vh] gap-10">
            @auth
            <h1 class="text-3xl font-bold">Bem vindo, {{ auth()->user()->name }}!</h1>
            @endauth
    </section>

</x-layout>
