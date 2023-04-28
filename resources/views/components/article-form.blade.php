<form method="post" action="{{ route('article.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        
        <div class="mb-3 col-12 col-md-6">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" >
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="subtitle" class="form-label">Subtitle</label>
            <input type="text" class="form-control" name="subtitle" >
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="category_id" class="form-label">Categoria</label>
            <select name="category_id" class="form-control" >
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="tags" class="form-label">Tags</label>
            <select name="tags[]" class="form-control" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach       
            </select>
            <small class="text-info">Ctrl + click per selezione multipla</small>
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="img" class="form-label">Img</label>
            <input type="file" class="form-control" name="img" >
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="body" class="form-label">Body</label>
           <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-violet">Submit</button>

    </div>

</form>