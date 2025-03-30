@extends('themes::themetorofix.layout')

@section('home_page_slider_poster')
    @if($home_page_slider_poster)
        @include('themes::themetorofix.inc.home_page_slider_poster')
    @endif
@endsection

@section('home_page_slider_thumb')
    @if($home_page_slider_thumb)
        @include('themes::themetorofix.inc.home_page_slider_thumb')
    @endif
@endsection

@section('content')
    @foreach($movies_latest as $item)
        @include("themes::themetorofix.inc.section." . $item["show_template"])
        @if ($item['data']->hasPages() && $item['data']->lastPage() > 1)
        {{ $item['data']->links('themes::themetorofix.inc.pagination') }}
        @endif
    @endforeach
@endsection

@push('scripts')
@endpush
