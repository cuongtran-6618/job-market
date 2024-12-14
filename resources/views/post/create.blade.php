@extends("layouts/layout")
@section("content")
<strong><label>Create a new post for {{ $selectedCategory }}</label></strong>
<form action="{{ route('post.create') }} " method="post">
    @csrf
    @method('post')
    <div class="">
        <label>Description</label>
        <textarea name="name" placeholder="job description" alt="description"></textarea>
    </div>
    <div class="">
        <label>City</label>
        <select name="city">
            @foreach ($cities as $id => $name)
                <option value="{{$id}}">{{ $name }}</option>
            @endforeach
        </select>
    </div>
    <div class="">
        <label>Category</label>
        <select name="city">
            @foreach ($categories as $id => $category)
            <option value="{{ $id }}">{{ $category }}</option>
            @endforeach
        </select>
    </div>

    <div class="">
        <label>email</label>
        <input name="email" placeholder="your valid email" alt="email"/>
    </div>
    <button type="submit">Create user</button>
</form>
@stop
