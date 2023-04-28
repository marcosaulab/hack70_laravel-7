<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Edit: <span class="text-success">{{ $article->title }}</span> </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">

            <x-article-form-edit 
                :article="$article"
                :categories="$categories" 
                :tags="$tags" 
            />

        </div>
    </div>


</x-layout>