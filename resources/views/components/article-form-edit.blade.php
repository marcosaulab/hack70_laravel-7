<form method="post" action="{{ route('article.update', $article) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        
        <div class="mb-3 col-12 col-md-6">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $article->title }}">
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="subtitle" class="form-label">Subtitle</label>
            <input type="text" class="form-control" name="subtitle" value="{{ $article->subtitle }}">
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="category_id" class="form-label">Categoria</label>
            <select name="category_id" class="form-control" >
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        @if ($article->category->id == $category->id)
                            selected
                        @endif
                        >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="tags" class="form-label">Tags</label>
            <select name="tags[]" class="form-control" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}"
                        @if ($article->tags->contains($tag->id))
                            selected
                        @endif
                        >{{ $tag->name }}</option>
                @endforeach       
            </select>
            <small class="text-info">Ctrl + click per selezione multipla</small>
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="img" class="form-label">Img</label>
            <div class="d-flex">
                <input type="file" class="form-control" name="img" >
                <img src="{{ Storage::url($article->img) }}" style="width: 80px">
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="body" class="form-label">Body</label>
           <textarea name="body" class="form-control" cols="30" rows="10">{{ $article->body }}</textarea>
        </div>

        <button type="submit" class="btn btn-violet">Submit</button>

    </div>

</form>