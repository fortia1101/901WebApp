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

                    <div class="dashboard-btn">
                        <button onclick="location.href='{{ route('admin.dashboard') }}'">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="130" height="82" viewBox="0 0 100 67" xml:space="preserve">
                                <g transform="matrix(0.66 0 0 0.8 50.4 34.57)" id="doK8QEVDWxhHMfIwnZV2-"  >
                                    <path style="stroke: rgb(102,205,161); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(102,205,161); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -52.93905 -41.42131 L 6.70514 -41.42131 L 6.70514 -41.42131 C 32.23943 -41.42131 52.93905 -24.12795 52.93905 -2.79551 C 52.93905 7.778689999999999 52.93905 20.17902 52.93905 29.247529999999998 C 52.93905 49.24753 52.93905 38.5787 52.93905 38.5787 L -8.042919999999995 38.5787 L -8.042919999999995 38.5787 C -32.83837 38.5787 -52.93906 21.785719999999998 -52.93906 1.070529999999998 z" stroke-linecap="round" />
                                </g>
                                <g transform="matrix(-0.2 0 0 -0.58 7.91 18.06)" id="BHxY8FfYchNg9OAlrdZxz"  >
                                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(102,205,161); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -38.42104 -28.60357 L -27.901489999999995 -5.335080000000001 L -27.901489999999995 -5.335080000000001 C -22.530829999999995 6.544449999999999 -3.9166599999999967 17.31178 24.224940000000004 24.817359999999997 L 38.42105 28.603569999999998 L -38.421029999999995 28.603569999999998 z" stroke-linecap="round" />
                                </g>
                                <g transform="matrix(0.19 0 0 0.57 92.51 47.7)" id="4qPMUuRP_VTugFdnhr80C"  >
                                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(102,205,161); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -38.69606 -31.13888 L -27.192970000000003 -3.7066300000000005 L -27.192970000000003 -3.7066300000000005 C -22.38174 7.767059999999999 -5.083980000000004 18.32229 21.632579999999997 26.08711 L 39.01428 31.13888 L -39.01428 31.13888 z" stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 50 33.5)" style="" id="FrO4rGenXTgQzQ0yr5T7I"  >
                                    <text xml:space="preserve" font-family="ヒラギノ角ゴ ProN W3" font-size="13" font-style="normal" font-weight="600" letter-spacing="0.026" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-26.04" y="4.93" >管</tspan><tspan x="-13.01" y="4.93" >理</tspan><tspan x="0.01" y="4.93" >画</tspan><tspan x="13.04" y="4.93" >面</tspan></text>
                                </g>
                            </svg>
                        </button>
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
