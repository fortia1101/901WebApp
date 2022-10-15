<x-app-layout>
    @vite(['resources/css/delete-confirm.css'])

    <x-slot name="title">{{ __('- ユーザー削除の確認') }}</x-slot>

    <div class="content">
        <div class="title">{{ __('ユーザー削除の確認') }}</div>

        <div class="confirm">
            {{ __('ユーザーを削除します。よろしいですか？') }}
            <div class="btn">
                <div class="yes">
                    <button type="submit" onclick="location.href='{{ route('user.delete') }}'">{{ __('はい') }}</button>
                </div>
                <div class="no">
                    <button type="submit" onclick="location.href='{{ route('user.home') }}'">{{ __('いいえ') }}</button>
                </div>
            </div>
        </div>  
    </div>
</x-app-layout>