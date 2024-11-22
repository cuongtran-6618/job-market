@extends("layouts/layout")
@section("content")
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="">
    <strong><label>Register new user</label></strong>
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
</body>
@stop
