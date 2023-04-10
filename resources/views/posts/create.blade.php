<h1> Create New Post</h1>




<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input id="title"
           type="text"
           name="title"
           class="@error('title') is-invalid @enderror">

    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input id="body"
           type="text"
           name="body"
           class="@error('body') is-invalid @enderror">

    @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit">Submit</button>
</form>
