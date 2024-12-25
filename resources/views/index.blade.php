<?php
$test = 'header';
$content = 'Lorem';
$title_how_it_work = 'How it works';

$title_write_description = 'Write a task description';
$content_write_description = 'Tell us what you need help with and we will send the job ad to the right professionals.';
$title_get_offer = 'Get offer';
$content_get_offer = 'You will soon receive quotes from qualified professionals who can help with the job - without obligation.';
$title_compare_and_choose = 'Compare and choose';
$content_compare_and_choose = 'Review the quotes you receive and choose the most suitable company to complete the job. Once the job is done, you can leave a review.';
$paragraphStyle = 'px-1 basis-1/3 flex flex-col';
?>
@extends('layouts/layout')
@section('content')
    <section>
        <h2 class="mx-auto my-4 text-center">{{ __($title_how_it_work) }}</h2>
        <div class="flex-center items-stretch">
            <x-paragraph :title="$title_write_description" :content="$content_write_description" :style="$paragraphStyle"></x-paragraph>
            <x-paragraph :title="$title_get_offer" :content="$content_get_offer" :style="$paragraphStyle"></x-paragraph>
            <x-paragraph :title="$title_compare_and_choose" :content="$content_compare_and_choose" :style="$paragraphStyle"></x-paragraph>
        </div>
    </section>
@stop
