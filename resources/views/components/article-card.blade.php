<div class="card" style="width: 18rem;">
    <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="{{ $article->title }}">
    <div class="card-body">
        <h5 class="card-title">{!! $article->title !!}</h5>
        <p class="card-text">{!! $article->subtitle !!}</p>
        <p class="card-text text-primary">{!! $article->category->name !!}</p>
        <p class="card-text">{!! Str::limit($article->body, 5) !!}</p>
        <h4 class="card-text">Tags</h4>
        <ul>
            @foreach ($article->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
        <a href="#" class="btn btn-violet">Vedi</a>
        @auth
            <a href="{{ route('article.edit', $article) }}" class="btn btn-warning">Edit</a>
        @endauth
    </div>
</div>