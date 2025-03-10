{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header') --}}
    {{-- @include('partials.content-page') --}}
    @include('partials.pageblocks.hero')
    @include('partials.pageblocks.photo-grid')
    @include('partials.pageblocks.product-swiper')
    @include('partials.pageblocks.review-swiper')
    @include('partials.pageblocks.media-text')
    @include('partials.pageblocks.blog-swiper')
  @endwhile
@endsection
