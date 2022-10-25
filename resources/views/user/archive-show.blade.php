<x-appLayout>
    @vite(['resources/css/archive-show.css'])

    <x-slot name="title">{{ __('- アーカイブ') }}</x-slot>

    <div class="content">
        <div class="upper-area">
            <div class="archive-title">
                {{ $archive->title }}
            </div>

            <div class="back">
                <button onclick="location.href='{{ route('user.home') }}'">戻る</button>
            </div>
        </div>

        <div class="archive-body">
            <iframe src="{{ $archive->body }}" allow="autoplay"></iframe>
        </div>
    </div>
</x-appLayout>
