@extends("layouts/layout")
@section("content")
<strong><label>Create a new post for {{ $category }}</label></strong>
<form action="{{ route('post.create') }} " method="post">
    @csrf
    @method('post')
    <div class="">
        <label>Description</label>
        <textarea name="name" placeholder="job description" alt="description"></textarea>
    </div>
    <div class="">
        <label>password</label>
        <input name="password" placeholder="your password" alt="password"/>
    </div>
    <select name="city">
        <option value="0">Placeholder</option>
        @foreach ($cities as $id => $name)
        <option value="{{$id}}">{{ $name }}</option>
        @endforeach
    </select>
    <div class="">
        <label>email</label>
        <input name="email" placeholder="your valid email" alt="email"/>
    </div>
    <button type="submit">Create user</button>
</form>
@stop
