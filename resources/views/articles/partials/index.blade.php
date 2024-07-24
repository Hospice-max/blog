<div>
    <article  class="card text-center">
        <div class="card-body">
            <img src="{{ asset('storage/' .$article->image) }}" alt="" class="card-img-top">
            <h4 class="card-title"><a href="/articles/{{ $article["id"]}}"
                    class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">{{ $article["title"] }}</a>
            </h4>
            <p class="card-text text-truncate">{{ $article["body"] }}</p>
        </div>
    </article>
</div>