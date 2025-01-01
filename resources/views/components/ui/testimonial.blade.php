<?php
$numberOfGrayStars = 5 - $star;
?>

<div class="testimonial-container {{ $style }}">
    <div>
        <strong>{{ $date }}</strong>
        <strong>{{ $author }}</strong>
        <div class="star-container flex-start">
            @for ($i = 0; $i < $star; $i++)
                <x-fas-star class="w-4 h-4 text-yellow-500" />
            @endfor
            @for ($i = 0; $i < $numberOfGrayStars; $i++)
                <x-fas-star class="w-4 h-4 text-gray-500" />
            @endfor
        </div>
    </div>
    <div>
        <h4><strong>{{ $title }}</strong></h4>
    </div>
    <div class="">
        <x-fas-quote-left class="w-4 h-4 text-sky-500" />{{ $testimonialContent }}
    </div>
</div>
