<?php
    $style = "h-14 bg-gradient-to-r from-sky-500 to-indigo-500";
?>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
    @foreach ($categories as $id => $category)
    <div class="{{ $style }}">
        <a href="/job/create?category={{ $category->name }}"
           class="block px-3 py-2 hover:bg-gray-100">{{ $category->name }}</a>
    </div>
    <!---->
    @endforeach
</div>