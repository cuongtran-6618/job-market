@extends("layouts/layout")
@section("content")
<?php
    $inputStyle="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500";
    $labelStyle="block mb-2 text-sm font-medium text-gray-900 dark:text-white";
?>
<div class="container mx-auto main-content">
    <div class="flex flex-col items-center">
    <strong><label>Register new user</label></strong>
    <form action="{{ route('user.create') }} " class="min-w-80 mx-auto"  method="post">
        @csrf
        @method('post')
        <div class="">
            <label class="{{ $labelStyle }}">Username</label>
            <input class="{{ $inputStyle }} name="name" placeholder="your username" alt="username"/>
        </div>
        <div class="">
            <label class="{{ $labelStyle }}">Password</label>
            <input class="{{ $inputStyle }}" name="password" placeholder="your password" alt="password"/>
        </div>
        <div class="">
            <label class="{{ $labelStyle }}">Email</label>
            <input class="{{ $inputStyle }}" name="email" placeholder="your valid email" alt="email"/>
        </div>
        <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Create user</button>
    </form>
    </div>
</div>
@stop
