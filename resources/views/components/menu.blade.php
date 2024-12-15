<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <ul class="flex-center">
        @foreach($categories as $id => $category)
        <li class="small-margin">
            <a href="/job/create?category={{$category->name}}" title="cleaning">
                {{$category->description}}
            </a>
        </li>
        @endforeach
    </ul>
</div>
