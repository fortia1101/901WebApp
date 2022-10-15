@vite(['resources/css/header.css'])

<div class="header-area">
    <div class="app-logo">
        <x-application-logo />
    </div>

    <div class="to-mypage">
        <button id="mypage-btn" type="submit" onclick="location.href='{{ route('user.mypage') }}'">
            <img src="{{ Auth::user()->avatar }}">
        </button>
    </div>
</div>