@extends('layout')

@php
// dd($listing);
@endphp

@section('title', 'show: ' . $job->title)

@section('content')
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>


    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6"
                    src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('img/no-image.png') }}" alt="" />

                <h3 class="text-2xl mb-2">{{ $job->title }}</h3>
                <div class="text-xl font-bold mb-4">{{ $job->company }}</div>
                {{-- tags --}}
                <x-list-tags :tagsCSV='$job->tags' />
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i>
                    {{ $job->location }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Job Description
                    </h3>
                    <div class="text-lg space-y-6">
                        {{ $job->description }}

                        <a href="mailto:{{ $job->email }}"
                            class="block bg-red-700 text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-envelope"></i>
                            Contact Employer</a>

                        <a href="{{ $job->website }}" target="_blank"
                            class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-globe"></i> Visit
                            Website</a>
                    </div>
                </div>
            </div>
            <a href="/jobs/edit/{{ $job->id }}"
                class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black block absolute my-4">
                EDIT
            </a>
        </div>
    </div>

    @php
        // dd($listing);
    @endphp
@endsection
