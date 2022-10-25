<x-appLayout>
    @vite(['resources/css/admin/dashboard.css'])

    <div class="content">
        <x-slot name="title">
            {{ __('管理画面') }}
        </x-slot>

        <div class="archive-set">
            <div class="btn">
                <label class="set-archive" for="pop-up">{{ __('アーカイブの掲載') }}</label>
            </div>

            <input div="checkbox" type="checkbox" id="pop-up">
            <div class="window">
                <label class="close" for="pop-up">×</label>
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
    </div>
</x-appLayout>
