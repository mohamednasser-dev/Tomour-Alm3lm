@php($title=trans('lang.dashboard'))
@extends('adminLayouts.app')
@section('title')
    {{ env('APP_NAME') }}

@endsection
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">{{$title}}</h5>
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
    </div>
@endsection
@section('content')
    <div class="row">

    </div>

@endsection
@push('scripts')

@endpush
