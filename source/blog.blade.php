---
pagination:
    collection: posts
    perPage: 6
---
@extends('_layouts.master', ['page_name' => 'blog'])

@section('body')

<section id="about" class="container">
    @if($pagination->items->count() > 0)
    @foreach ($pagination->items as $post)
    @include('_components.post-preview')
    @endforeach
    @else
    <p class="type--heading">No posts to show here.</p>
    @endif
</section>


@endsection
