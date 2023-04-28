<x-layout>


    <x-masthead />

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Blog</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">

            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-article-card 
                        :article="$article"
                    />
                </div>
            @endforeach

        </div>
    </div>


</x-layout>