@extends('layout')

@section('title', 'add job')
@section('content')
    <main>
        <div class="mx-4">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        edit
                    </h2>
                    <p class="mb-4">{{ $job->title }}</p>
                </header>

                <form action="/jobs/{{ $job->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                            value="{{ $job->company }}" />
                        @error('company')
                            <div class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                            placeholder="Example: Senior Laravel Developer" value="{{ $job->title }}" />
                        @error('title')
                            <div class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                            placeholder="Example: Remote, Boston MA, etc" value="{{ $job->location }}" />
                        @error('location')
                            <div class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                            value="{{ $job->email }}" />
                        @error('email')
                            <div class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="website" class="inline-block text-lg mb-2">
                            Website/Application URL
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                            value="{{ $job->website }}" />
                        @error('website')
                            <div class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="tags" class="inline-block text-lg mb-2">
                            Tags (Comma Separated)
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                            placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ $job->tags }}" />
                        @error('tags')
                            <div class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="logo" class="inline-block text-lg mb-2">
                            Company Logo
                        </label>
                        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                        <img class="w-48 mr-6 mb-6"
                            src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('img/no-image.png') }}"
                            alt="" />
                        @error('logo')
                            <div class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="description" class="inline-block text-lg mb-2">
                            Job Description
                        </label>
                        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                            placeholder="Include tasks, requirements, salary, etc" ">
                            {{ $job->description }}
                        </textarea>
                        @error('description')
                            <div class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
                            Create Gig
                        </button>

                        <a href="/" class="text-black ml-4"> Back </a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
