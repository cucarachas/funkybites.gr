@extends('layout.site')

@section('title', 'Funky Bites | Contact')

@section('content')
    <div class="container m-auto p-4 md:p-6 lg:p-8">
        <div class="flex justify-end">
            <h1 class="mb-4 text-5xl font-extrabold leading-none tracking-tight md:text-7xl lg:text-9xl">.contact</h1>
        </div>

        <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3 mt-28">
            <div class="flex flex-col">
                <address>
                    <p class="font-bold text-xl">
                        Μονόδρυ Ευβοίας, 340 09<br>
                        Ελλάδα
                    </p>
                    <p class="font-bold text-xl mt-4">
                        Tel: <a href="tel:2223035548">22230 35548</a>
                    </p>
                    <p class="font-bold text-xl mt-4">
                        Email: <a href="mailto:contact@funkybites.gr">contact@funkybites.gr</a>
                    </p>
                </address>
            </div>
            <div class="flex justify-center">
                <a href="https://www.facebook.com/people/Funky-Bites/61559447070893/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 72 72">
                        <path d="M45.049,14C57.06,14,58,14.94,58,26.951v18.098C58,57.06,57.06,58,45.049,58h-2.298V41.982h5.647l0.888-6.347h-6.535	c0,0-0.01-3.716,0-4.643c0.019-1.814,1.533-2.732,2.835-2.718c1.302,0.013,3.998,0.004,3.998,0.004v-5.849	c0,0-2.335-0.302-4.784-0.328c-2.058-0.021-4.331,0.535-6.165,2.384c-1.865,1.88-2.16,4.679-2.195,8.1c-0.01,0.989,0,3.049,0,3.049	h-5.526v6.347h5.526V58h-9.489C14.94,58,14,57.06,14,45.049V26.951C14,14.94,14.94,14,26.951,14H45.049z"></path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/funkybitesmonodri" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 72 72">
                        <path d="M 35.75 14 C 15.579 14 14 15.579 14 35.75 L 14 36.25 C 14 56.421 15.579 58 35.75 58 L 36.25 58 C 56.421 58 58 56.421 58 36.25 L 58 35.75 C 58 15.579 56.421 14 36.25 14 L 35.75 14 z M 30 22 L 42 22 C 49.419 22 50 22.581 50 30 L 50 42 C 50 49.419 49.419 50 42 50 L 30 50 C 22.581 50 22 49.419 22 42 L 22 30 C 22 22.581 22.581 22 30 22 z M 45.496094 25 C 44.668094 25.002 43.998 25.674906 44 26.503906 C 44.002 27.331906 44.674906 28.002 45.503906 28 C 46.331906 27.998 47.002 27.325094 47 26.496094 C 46.998 25.668094 46.325094 24.998 45.496094 25 z M 35.976562 26 C 30.454563 26.013 25.987 30.501437 26 36.023438 C 26.013 41.545437 30.501437 46.013 36.023438 46 C 41.545437 45.987 46.013 41.498562 46 35.976562 C 45.987 30.454563 41.498562 25.987 35.976562 26 z M 35.990234 32 C 38.199234 31.995 39.994 33.781234 40 35.990234 C 40.005 38.199234 38.218766 39.995 36.009766 40 C 33.800766 40.005 32.006 38.218766 32 36.009766 C 31.995 33.800766 33.781234 32.006 35.990234 32 z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection
