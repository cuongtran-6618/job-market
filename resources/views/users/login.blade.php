@extends("layouts/layout")
@section("content")
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div>
    <label>Login form</label>
    <form action="" method="post">
        <div class="">
            <label>username</label>
            <input name="username" placeholder="your username" alt="username"/>
        </div>
        <div class="">
            <label>password</label>
            <input name="password" placeholder="your password" alt="password"/>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</div>
@stop
