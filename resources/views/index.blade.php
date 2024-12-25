@extends("layouts/layout")
@section("content")
<?php
    $test="header";
    $content="Lorem";
?>
<div>
<x-paragraph :title="$test" :content="$content"></x-paragraph>

</div>
@stop
