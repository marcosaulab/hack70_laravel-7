<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Crea Articolo</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">

            <x-article-form 
                :categories="$categories"
                :tags="$tags"
            />

        </div>
    </div>


</x-layout>