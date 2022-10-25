<x-appLayout>
    @vite(['resources/css/home.css'])

    <x-slot name="title">{{ __('- ホーム') }}</x-slot>

    <div class="content">
        <div class="archive-list">
            <div class="title">
                {{ __('アーカイブ一覧') }}
            </div>

            <ul>
                @forelse ($archives as $archive)
                    <li>
                        @if (isset($count_gen) == false || $count_gen > $archive->gen)
                            <p>
                                {{ $archive->gen . __('代企画作成') }}
                            </p>

                            <button onclick="location.href='{{ route('user.archive-show', $archive) }}'">
                                {{ $archive->title }}
                            </button>

                            @php
                                $count_gen = $archive->gen;
                            @endphp
                        @elseif ($count_gen == $archive->gen)
                            <button onclick="location.href='{{ route('user.archive-show', $archive) }}'">
                                {{ $archive->title }}
                            </button>
                        @endif
                    </li>
                @empty
                    <li>
                        <p>{{ __('閲覧可能なアーカイブがありません') }}</p>
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
</x-appLayout>
