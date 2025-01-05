@extends("layouts/layout")
@section("content")
<?php
    $inputStyle="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500";
    $labelStyle="block mb-2 text-sm font-medium text-gray-900 dark:text-white";
?>
<div class="container mx-auto main-content">
    <div class="flex flex-col items-center">
        <form action="{{ route('post.create') }}" class="min-w-80 mx-auto" method="post">
            <div class="text-4xl text-left capitalize mb-4 md:mb-12"><h1>{{ $selectedCategory }}</h1></div>
            <div class="flex flex-col items-start gap-4">
                @csrf
                @method('post')
                <div class="w-full">
                    <label class="{{ $labelStyle }}">City</label>
                    <select name="city" class="{{ $inputStyle }}">
                        @foreach ($cities as $id => $name)
                            <option value="{{$id}}">{{ $name }}</option>
                        @endforeach
                    </select>
                    <label class="{{ $labelStyle }}">Description</label>
                    <textarea name="name" placeholder="job description" alt="description"  class="{{ $inputStyle }}"></textarea>
                    <label class="{{ $labelStyle }}">Category</label>
                    <select name="city" class="{{ $inputStyle }}">
                        @foreach ($categories as $id => $category)
                        <option value="{{ $id }}">{{ $category }}</option>
                        @endforeach
                    </select>
                    <label class="{{ $labelStyle }}">Email</label>
                    <input type="email" name="email" placeholder="your valid email" alt="email" class="{{ $inputStyle }}" />
                </div>
                <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Create user</button>
            </div>        
        </form>
    </div>
</div>
@stop
