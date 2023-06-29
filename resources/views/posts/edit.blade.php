<x-layout>
    <x-slot name="title">
        Edit Post - 掲示板
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('posts.show', $post) }}">戻る</a>
    </div>
    <h1>投稿を編集する</h1>

    <form method="post" action="{{route("posts.update", $post)}}">
        @method("PATCH")
        @csrf

        <div class="form-group">
            <label>
                Title
                <input type="text" name="title" value="{{old("title", $post->title)}}">
            </label>
            @error("title")
            <div class="error">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>
                Body
                <textarea name="body">{{old("body", $post->body)}}</textarea>
            </label>
            @error("body")
            <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="form-button">
            <button>更新する</button>
        </div>

    </form>
    </div>


</x-layout>
