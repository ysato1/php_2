<x-layout>
    <x-slot name="title">
        Add New Post - 掲示板
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">戻る</a>
    </div>
    <h1>新しい投稿を追加する</h1>

    <form method="post" action="{{ route('posts.store') }}">
        @csrf

        <div class="form-group">
            <label>
                Title
                <input type="text" name="title" value="{{old("title")}}">
            </label>
            @error("title")
            <div class="error">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>
                Body
                <textarea name="body">{{old("body")}}</textarea>
            </label>
            @error("body")
            <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="form-button">
            <button>追加する</button>
        </div>

    </form>
    </div>


</x-layout>
