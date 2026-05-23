@extends('layouts.app')

@section('content')

    @include('partials.navbar')

    @include('partials.hero')

    <div class="h-line"></div>

    @include('partials.about')

    <div class="h-line"></div>

    @include('partials.skills')

    <div class="h-line"></div>

    @include('partials.projects')

    <div class="h-line"></div>

    @include('partials.contact')

    @include('partials.footer')

@endsection

{{--
    PENTING: modals di-render di luar content-wrap
    melalui @stack('modals') di app.blade.php
    agar tidak ter-trap oleh z-index stacking context.
--}}
@push('modals')
    @include('partials.modals')
@endpush
