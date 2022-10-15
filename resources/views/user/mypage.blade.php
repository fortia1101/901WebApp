<x-app-layout>
    @vite(['resources/css/mypage.css'])

    <x-slot name="title">{{ __('- マイページ') }}</x-slot>

    <div class="content">
        <div class="first-area">
            <button class="logout" type="submit" onclick="location.href='{{ route('user.logout') }}'">{{ __('ログアウト') }}</button>
            <button class="delete" type="submit" onclick="location.href='{{ route('user.delete-confirm') }}'">{{ __('ユーザー削除') }}</button>
        </div>

        <div class="second-area">
            <button class="admin" type="submit" onclick="location.href='{{ route('admin.welcome') }}'">{{ __('管理画面へ') }}</button>
            <label class="graduate" for="pop-up">{{ __('卒部生Gmail登録') }}</label>
        </div>

        <div class="third-area">
            <button class="back" type="submit" onclick="location.href='{{ route('user.home') }}'">{{ __('戻る') }}</button>
        </div>

        <input div="checkbox" type="checkbox" id="pop-up">
        <div class="window">
            <label class="close" for="pop-up">×</label>
            <div class="title">{{ __('今後901の閲覧に利用するGmailアカウントを選択してください') }}</div>
            <button onclick="location.href='{{ route('user.graduate-login') }}'">{{ __('Gmailアカウントを選択') }}</button>
        </div>
    </div>
</x-app-layout>
