@extends("layouts/layout")
@section("content")
<div class="">
    <strong><label>Create a new job</label></strong>
    <form action="{{ route('user.create') }} " method="post">
        @csrf
        @method('post')
        <div class="">
            <label>username</label>
            <input name="name" placeholder="your username" alt="username"/>
        </div>
        <div class="">
            <label>password</label>
            <input name="password" placeholder="your password" alt="password"/>
        </div>
        <div class="">
            <label>email</label>
            <input name="email" placeholder="your valid email" alt="email"/>
        </div>
        <button type="submit">Create user</button>
    </form>
</div>
@stop
