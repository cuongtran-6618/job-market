<?php
$title_how_it_work = 'How it works';
$title_write_description = 'Write a task description';
$content_write_description = 'Tell us what you need help with and we will send the job ad to the right professionals.';
$author = 'John Doe';
$title_get_offer = 'Get offer';
$content_get_offer = 'You will soon receive quotes from qualified professionals who can help with the job - without obligation.';
$title_compare_and_choose = 'Compare and choose';
$content_compare_and_choose = 'Review the quotes you receive and choose the most suitable company to complete the job. Once the job is done, you can leave a review.';
$paragraphStyle = 'my-4 px-1 basis-1/3 flex flex-col';

$title_testimonial = 'What other talk about homecare platform';
$first_testimonial_start = 4;
$first_testimonial_date = '25.12.2024';
$first_testimonial_title = 'Nice UI';
$first_testimonial_content = 'Great idea';

$title_popular_project = 'Popular projects';
?>
@extends('layouts/layout')
@section('content')
    <section class="mx-auto py-12 px-4 max-w-screen-xl">
        <h2 class="mx-auto my-4 text-center text-3xl title-style"><strong>{{ __($title_how_it_work) }}</strong></h2>
        <div class="flex-center flex-col md:flex-row items-stretch">
            <x-ui.paragraph :title="$title_write_description" :content="$content_write_description" :style="$paragraphStyle"></x-ui.paragraph>
            <x-ui.paragraph :title="$title_get_offer" :content="$content_get_offer" :style="$paragraphStyle"></x-ui.paragraph>
            <x-ui.paragraph :title="$title_compare_and_choose" :content="$content_compare_and_choose" :style="$paragraphStyle"></x-ui.paragraph>
        </div>
    </section>

    <section class="w-full py-12 px-4 bg-sky-100">
        <h2 class="mx-auto my-4 text-center text-3xl title-style"><strong>{{ __($title_popular_project) }}</strong></h2>
        <x-ui.popular-category></x-ui.popular-category>
        </div>
    </section>

    <section class="mx-auto py-12 px-4 max-w-screen-xl">
        <h2 class="mx-auto my-4 text-center text-3xl title-style"><strong>{{ __($title_testimonial) }}</strong></h2>
        <div class="flex-center flex-col md:flex-row ">
            <x-ui.testimonial :start="$first_testimonial_start" :date="$first_testimonial_date" :title="$title_write_description" :testimonialContent="$content_write_description" :author="$author"
                :style="$paragraphStyle" :star=3></x-ui.testimonial>
            <x-ui.testimonial :start="$first_testimonial_start" :date="$first_testimonial_date" :title="$title_write_description" :testimonialContent="$content_write_description" :author="$author"
                :style="$paragraphStyle" :star=4></x-ui.testimonial>
            <x-ui.testimonial :start="$first_testimonial_start" :date="$first_testimonial_date" :title="$title_write_description" :testimonialContent="$content_write_description" :author="$author"
                :style="$paragraphStyle" :star=5></x-ui.testimonial>
        </div>
    </section>


@stop
