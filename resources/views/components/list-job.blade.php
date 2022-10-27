@props(['job'])


<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <a href="/jobs/{{ $job->id }}">

        <div class="flex">
            <img class="hidden w-48 mr-6 md:block "
                src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('img/no-image.png') }}" alt="" />
            <div>
                <h3 class="text-2xl">
                    <a href="/jobs/{{ $job->id }}">{{ $job->title }}</a>
                </h3>
                <div class="text-xl font-bold mb-4">{{ $job->company }}</div>
                <x-list-tags :tagsCSV='$job->tags' />
                <div class="text-lg mt-4">
                    <i class="fa-solid fa-location-dot"></i>
                    {{ $job->location }}
                </div>
            </div>
        </div>
    </a>
</div>
