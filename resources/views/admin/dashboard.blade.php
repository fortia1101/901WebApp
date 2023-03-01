<x-app-layout>
    @vite(['resources/css/admin/dashboard.css'])

    <div class="content">
        <x-slot name="title">
            {{ __('管理画面') }}
        </x-slot>

        <div class="archive-set">
            <div class="btn">
                <label class="archive-set-label" for="pop-up-1">{{ __('アーカイブの掲載') }}</label>
            </div>

            <input div="checkbox" type="checkbox" id="pop-up-1">
            <div class="window-1">
                <label class="close" for="pop-up-1">×</label>
                <form method="POST" action="{{ route('admin.archive-set') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="element">
                        <div class="title">{{ __('アーカイブに追加する901ファイルを選択してください') }}</div>
                        <input class="input-file" type="file" name="archive-file" accept="application/pdf">
                    </div>

                    <div class="element">
                        <label for="archive-label">{{ __('● 表示するラベル') }}</label>
                        <input class="input-text" id="archive-label" type="text" name="archiveLabel" placeholder="vol.*** 〇〇号" />
                    </div>

                    <div class="element">
                        <label for="gen">{{ __('● 企画年代 (数字のみ入力)') }}</label>
                        <input class="input-text" id="gen" type="text" name="gen" placeholder="63" />
                    </div>

                    <button class="submit-btn" type="submit">{{ __('送信') }}</button>
                </form>
            </div>
        </div>

        <div class="archive-delete">
            <div class="btn">
                <label class="archive-delete-label" for="pop-up-2">{{ __('アーカイブの削除') }}</label>
            </div>

            <input div="checkbox" type="checkbox" id="pop-up-2">
            <div class="window-2">
                <label class="close" for="pop-up-2">×</label>
                <form method="POST" action="{{ route('admin.archive-delete') }}">
                    @csrf
                    <div class="element">
                        <div class="title">{{ __('削除するアーカイブを選択してください') }}</div>
                        <select name="archive-delete" id="archive-delete" size="1">
                            @forelse ($archives as $archive)
                                @php
                                    $archiveInfo = $archive->body . '/' . $archive->id
                                @endphp
                                <option value={{ $archiveInfo }}>
                                    {{ $archive->title }}{{ __(' (作成日時:') }}{{ $archive->created_at }}{{  __(')') }}
                                </option>
                            @empty
                                <option value="disabled">{{ __('削除可能なアーカイブがありません') }}</option>
                            @endforelse
                        </select>
                    </div>

                    <button class="submit-btn" type="submit">{{ __('削除') }}</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
