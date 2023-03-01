<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="Hji77cNoiDwCf4t-ua1Zp8W48N9wbHZJsyLghQNpNAU" />

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
                @if (Route::has('user.googleLogin'))
                    @auth('users')
                        <div class="logo-bg-1">
                            <div class="logo-area">
                                <x-application-logo />
                            </div>
                        </div>

                        <div class="home-btn">
                            <button onclick="location.href='{{ route('user.home') }}'">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="130" height="82" viewBox="0 0 100 67" xml:space="preserve">
                                    <g transform="matrix(0.66 0 0 0.8 50.4 34.57)" id="doK8QEVDWxhHMfIwnZV2-"  >
                                        <path style="stroke: rgb(245,180,116); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(245,180,116); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -52.93905 -41.42131 L 6.70514 -41.42131 L 6.70514 -41.42131 C 32.23943 -41.42131 52.93905 -24.12795 52.93905 -2.79551 C 52.93905 7.778689999999999 52.93905 20.17902 52.93905 29.247529999999998 C 52.93905 49.24753 52.93905 38.5787 52.93905 38.5787 L -8.042919999999995 38.5787 L -8.042919999999995 38.5787 C -32.83837 38.5787 -52.93906 21.785719999999998 -52.93906 1.070529999999998 z" stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(-0.2 0 0 -0.58 7.91 18.06)" id="BHxY8FfYchNg9OAlrdZxz"  >
                                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(245,180,116); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -38.42104 -28.60357 L -27.901489999999995 -5.335080000000001 L -27.901489999999995 -5.335080000000001 C -22.530829999999995 6.544449999999999 -3.9166599999999967 17.31178 24.224940000000004 24.817359999999997 L 38.42105 28.603569999999998 L -38.421029999999995 28.603569999999998 z" stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(0.19 0 0 0.57 92.51 47.7)" id="4qPMUuRP_VTugFdnhr80C"  >
                                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(245,180,116); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -38.69606 -31.13888 L -27.192970000000003 -3.7066300000000005 L -27.192970000000003 -3.7066300000000005 C -22.38174 7.767059999999999 -5.083980000000004 18.32229 21.632579999999997 26.08711 L 39.01428 31.13888 L -39.01428 31.13888 z" stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 50 33.5)" style="" id="FrO4rGenXTgQzQ0yr5T7I"  >
                                        <text xml:space="preserve" font-family="ヒラギノ角ゴ ProN W3" font-size="14" font-style="normal" font-weight="600" letter-spacing="0.028" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-20.82" y="5.81" >ホ</tspan><tspan x="-6.79" y="5.81" >ー</tspan><tspan x="6.82" y="5.81" >ム</tspan></text>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    @else
                        <div class="logo-area">
                            <x-application-logo />
                        </div>

                        <div class="login-btn">
                            <button onclick="location.href='{{ route('user.googleLogin') }}'">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="130" height="82" viewBox="0 0 100 67" xml:space="preserve">
                                    <g transform="matrix(0.66 0 0 0.8 50.4 34.57)" id="doK8QEVDWxhHMfIwnZV2-"  >
                                        <path style="stroke: rgb(6,182,212); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(6,182,212); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -52.93905 -41.42131 L 6.70514 -41.42131 L 6.70514 -41.42131 C 32.23943 -41.42131 52.93905 -24.12795 52.93905 -2.79551 C 52.93905 7.778689999999999 52.93905 20.17902 52.93905 29.247529999999998 C 52.93905 49.24753 52.93905 38.5787 52.93905 38.5787 L -8.042919999999995 38.5787 L -8.042919999999995 38.5787 C -32.83837 38.5787 -52.93906 21.785719999999998 -52.93906 1.070529999999998 z" stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(-0.2 0 0 -0.58 7.91 18.06)" id="BHxY8FfYchNg9OAlrdZxz"  >
                                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(6,182,212); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -38.42104 -28.60357 L -27.901489999999995 -5.335080000000001 L -27.901489999999995 -5.335080000000001 C -22.530829999999995 6.544449999999999 -3.9166599999999967 17.31178 24.224940000000004 24.817359999999997 L 38.42105 28.603569999999998 L -38.421029999999995 28.603569999999998 z" stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(0.19 0 0 0.57 92.51 47.7)" id="4qPMUuRP_VTugFdnhr80C"  >
                                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(6,182,212); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -38.69606 -31.13888 L -27.192970000000003 -3.7066300000000005 L -27.192970000000003 -3.7066300000000005 C -22.38174 7.767059999999999 -5.083980000000004 18.32229 21.632579999999997 26.08711 L 39.01428 31.13888 L -39.01428 31.13888 z" stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 50.4 33.25)" style="" id="FrO4rGenXTgQzQ0yr5T7I"  >
                                            <text xml:space="preserve" font-family="ヒラギノ角ゴ ProN W3" font-size="13" font-style="normal" font-weight="600" letter-spacing="0.024" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-24.04" y="4.05" >ロ</tspan><tspan x="-12.01" y="4.05" >グ</tspan><tspan x="0.01" y="4.05" >イ</tspan><tspan x="12.04" y="4.05" >ン</tspan></text>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    @endauth
                @endif
            </div>

            <div class="main-area">
                <div class="main-1st">
                    <div class="site-title">{{ __('901の鍵 アーカイブ') }}</div>

                    <div class="sub-txt">
                        {{ __("岡山大学吟詩部が発行する機関紙\"901の鍵\"のアーカイブサイト") }}
                    </div>
                    <div class="info-txt">
                        {{ __('※閲覧には岡山大学Gmailアカウントが必要です') }}
                    </div>
                </div>

                <div class="main-2nd">
                    <div class="link">
                        <svg class="svg-icon" viewBox="0 0 20 20">
							<path fill="none" d="M17.125,1.375H2.875c-0.828,0-1.5,0.672-1.5,1.5v11.25c0,0.828,0.672,1.5,1.5,1.5H7.75v2.25H6.625c-0.207,0-0.375,0.168-0.375,0.375s0.168,0.375,0.375,0.375h6.75c0.207,0,0.375-0.168,0.375-0.375s-0.168-0.375-0.375-0.375H12.25v-2.25h4.875c0.828,0,1.5-0.672,1.5-1.5V2.875C18.625,2.047,17.953,1.375,17.125,1.375z M11.5,17.875h-3v-2.25h3V17.875zM17.875,14.125c0,0.414-0.336,0.75-0.75,0.75H2.875c-0.414,0-0.75-0.336-0.75-0.75v-1.5h15.75V14.125z M17.875,11.875H2.125v-9c0-0.414,0.336-0.75,0.75-0.75h14.25c0.414,0,0.75,0.336,0.75,0.75V11.875z M10,14.125c0.207,0,0.375-0.168,0.375-0.375S10.207,13.375,10,13.375s-0.375,0.168-0.375,0.375S9.793,14.125,10,14.125z"></path>
						</svg>
                        <a href="http://www12.oninet.ne.jp/kitani/" class="link-txt">{{ __('岡山大学吟詩部公式HP') }}</a>
                    </div>

                    <div class="sub-txt">
                        {{ __('岡大吟詩部の最新情報はこちら') }}
                    </div>
                </div>

                <div class="main-2nd">
                    <div class="link">
                        <svg class="svg-icon" viewBox="0 0 20 20">
							<path fill="none" d="M18.258,3.266c-0.693,0.405-1.46,0.698-2.277,0.857c-0.653-0.686-1.586-1.115-2.618-1.115c-1.98,0-3.586,1.581-3.586,3.53c0,0.276,0.031,0.545,0.092,0.805C6.888,7.195,4.245,5.79,2.476,3.654C2.167,4.176,1.99,4.781,1.99,5.429c0,1.224,0.633,2.305,1.596,2.938C2.999,8.349,2.445,8.19,1.961,7.925C1.96,7.94,1.96,7.954,1.96,7.97c0,1.71,1.237,3.138,2.877,3.462c-0.301,0.08-0.617,0.123-0.945,0.123c-0.23,0-0.456-0.021-0.674-0.062c0.456,1.402,1.781,2.422,3.35,2.451c-1.228,0.947-2.773,1.512-4.454,1.512c-0.291,0-0.575-0.016-0.855-0.049c1.588,1,3.473,1.586,5.498,1.586c6.598,0,10.205-5.379,10.205-10.045c0-0.153-0.003-0.305-0.01-0.456c0.7-0.499,1.308-1.12,1.789-1.827c-0.644,0.28-1.334,0.469-2.06,0.555C17.422,4.782,17.99,4.091,18.258,3.266"></path>
						</svg>
                        <a href="https://twitter.com/okadaiginshi" class="link-txt">{{ __('吟詩部Twitter') }}</a>
                    </div>

                    <div class="sub-txt">
                        {{ __('吟詩部の日常を発信中！') }}
                    </div>
                </div>

                <div class="main-2nd">
                    <div class="link">
                        <svg class="svg-icon" viewBox="0 0 20 20">
							<path fill="none" d="M14.52,2.469H5.482c-1.664,0-3.013,1.349-3.013,3.013v9.038c0,1.662,1.349,3.012,3.013,3.012h9.038c1.662,0,3.012-1.35,3.012-3.012V5.482C17.531,3.818,16.182,2.469,14.52,2.469 M13.012,4.729h2.26v2.259h-2.26V4.729z M10,6.988c1.664,0,3.012,1.349,3.012,3.012c0,1.664-1.348,3.013-3.012,3.013c-1.664,0-3.012-1.349-3.012-3.013C6.988,8.336,8.336,6.988,10,6.988 M16.025,14.52c0,0.831-0.676,1.506-1.506,1.506H5.482c-0.831,0-1.507-0.675-1.507-1.506V9.247h1.583C5.516,9.494,5.482,9.743,5.482,10c0,2.497,2.023,4.52,4.518,4.52c2.494,0,4.52-2.022,4.52-4.52c0-0.257-0.035-0.506-0.076-0.753h1.582V14.52z"></path>
						</svg>
                        <a href="https://instagram.com/okashi_901" class="link-txt">{{ __('吟詩部Instagram') }}</a>
                    </div>

                    <div class="sub-txt">
                        {{ __('活動写真や新勧情報を発信中！') }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
