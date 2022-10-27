@extends('layout')

@section('title', 'laragigs')

@php
// dd($jobs[0]->logo);
@endphp


@section('content')
    @include('inc._header')

    @if (count($jobs) > 0)
        @include('inc._footer')
        @include('inc._search')

        <div class="w-full text-center my-8 font-bold text-2xl">
            Job Founded : {{ count($jobs) }}
        </div>
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

            @foreach ($jobs as $job)
                <x-list-job :job="$job" />
            @endforeach


        </div>
    @else
        <p class=" w-full text-center my-8 font-bold text-2xl ">no JOB found</p>
    @endif

    <div class="mt-10 p-4">
        {{ $jobs->links() }}
    </div>

@endsection
