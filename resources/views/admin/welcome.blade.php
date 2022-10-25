<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>901の鍵</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Icons -->
        <link rel="icon" href="{{ secure_asset('icon_tpl/901App-logo.jpeg') }}" / />


    @vite(['resources/css/welcome.css'])

    </head>
    <body>
        <div class="window">
            <div class="upper-area">
                @auth('users')
                    <div class="logo-bg-1">
                        <div class="logo-area">
                            <x-application-logo />
                        </div>
                    </div>

                    <div class="tohome-btn">
                        <button onclick="location.href='{{ route('admin.dashboard') }}'" class="btn">{{ __('管理画面') }}</button>
                    </div>

                    <div class="dummy-btn-1">
                        <div class="btn">　</div>
                    </div>
                @endauth
            </div>

            <div class="main-area">
                <div class="main-1st">
                    <div class="site-title">{{ __('901の鍵 アーカイブ') }}</div>

                    <div class="sub-txt">
                        {{ __('岡山大学吟詩部公式行事である「901の鍵」の電子版機関紙のアーカイブサイト') }}
                    </div>
                    <div class="info-txt">
                        {{ __('※ログインには岡山大学Gmailアカウントが必要です') }}
                    </div>
                </div>

                <div class="caution">
                    {{ __('こちらは管理画面へのログインフォームです') }}<br />
                    {{ __('通常のユーザーログイン画面は') }}<a onclick="location.href='{{ route('user.welcome') }}'">こちら</a>
                </div>
            </div>
        </div>
    </body>
</html>
