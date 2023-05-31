<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
              
             

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="min-h-screen flex-col bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div>
                
            </div>
            @if (Route::has('login'))
                <div class="d-flex justify-content-between align-items-center pt-4 p-12">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="../resources/img/logo.png" width="30" height="30" alt="">
                        </a>
                <div>
                        @auth
                        <a href="{{ url('/parcels') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">My orders</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                        </div>
                    
                </div>
            @endif


                        <!-- Slider main container -->
                        <div class=" d-flex justify-content-center">
                            <div class="swiper w-50" style="height: 400px">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <img src="../resources/img/slide-1.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                <img src="../resources/img/slide-2.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                <img src="../resources/img/slide-3.png" width="full" alt="">
                                </div>
                                <div class="swiper-slide">
                                <img src="../resources/img/slide-4.png" width="full" alt="">
                                </div>
                                <div class="swiper-slide">
                                <img src="../resources/img/slide-5.png" width="full" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        
            </div>
            <div class="d-flex gap-12 justify-content-center pb-12 pt-5">
                <div>
                    <button class="d-flex gap-2 svg-cont button icon-link-hover-3 align-items-center">
                    <svg id="CalcIconSvg" width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<rect id="CalcIconRectangle-2" fill="#FFFFFF" x="15" y="15" width="14" height="14"></rect>
		<polygon id="CalcIconPath-1" fill="#99A2AA" fill-rule="nonzero" points="0 15.75 0 14.25 30 14.25 30 15.75"></polygon>
		<g transform="translate(2.500000, 4.000000)">
			<path id="CalcIconLine-1" d="M2.5,3.5 L8.5,3.5" stroke="#99A2AA" stroke-linecap="round" stroke-width="1.5"></path>
			<path id="CalcIconLine-2" d="M5.5,0.5 L5.5,6.5" stroke="#99A2AA" stroke-linecap="round" stroke-width="1.5"></path>
			<g transform="translate(5.500000, 18.500000) rotate(45.000000) translate(-5.500000, -18.500000) translate(2.000000, 15.000000)">
				<path id="CalcIconLine-3" d="M0.5,3.5 L6.5,3.5" stroke="#99A2AA" stroke-linecap="round" stroke-width="1.5"></path>
				<path id="CalcIconLine-4" d="M3.5,0.5 L3.5,6.5" stroke="#99A2AA" stroke-linecap="round" stroke-width="1.5"></path>
			</g>
		</g>
		<path id="CalcIconRectangle-1" d="M1.5,1.5 L1.5,28.5 L28.5,28.5 L28.5,1.5 L1.5,1.5 Z M1,0 L29,0 C29.5522847,-1.01453063e-16 30,0.44771525 30,1 L30,29 C30,29.5522847 29.5522847,30 29,30 L1,30 C0.44771525,30 6.76353751e-17,29.5522847 0,29 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z" fill="#99A2AA" fill-rule="nonzero"></path>
		<polygon id="CalcIconPath-2" fill="#99A2AA" fill-rule="nonzero" points="14.25 0 15.75 0 15.75 30 14.25 30"></polygon>
		<g transform="translate(18.500000, 6.000000)">
			<path id="CalcIconLine-5" d="M0.5,1.5 L6.5,1.5" stroke="#99A2AA" stroke-linecap="round" stroke-width="1.5"></path>
			<path id="CalcIconLine-6" d="M0.5,14.5 L6.5,14.5" stroke="#99A2AA" stroke-linecap="round" stroke-width="1.5"></path>
			<path id="CalcIconLine-7" d="M0.5,18.5 L6.5,18.5" stroke="#99A2AA" stroke-linecap="round" stroke-width="1.5"></path>
		</g>
	</g>
</svg>
                    Розрахувати</button>
                </div>
                <div>
                    <button class="d-flex gap-2 svg-cont button icon-link-hover-2 align-items-center">
                    <svg id="ParcelIconSvg" width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path id="ParcelIconPath-3" d="M2.257599,6.6287995 L15,13 L27.742401,6.6287995 C28.0387881,6.48060596 28.1589227,6.12020216 28.0107291,5.82381507 C27.9415401,5.6854369 27.821573,5.57913321 27.6758747,5.5270981 L15,1 L2.32412531,5.5270981 C2.01205951,5.63855017 1.84942995,5.98187924 1.96088203,6.29394504 C2.01291713,6.43964334 2.11922083,6.55961041 2.257599,6.6287995 Z" fill="#FFFFFF"></path>
                        <path id="ParcelIconPath-1" d="M21.25,9.98099706 L8.74978609,4.24382599 C8.37332935,4.07104521 8.20821737,3.62580023 8.38099815,3.24934349 C8.55377893,2.87288675 8.99902391,2.70777476 9.37548065,2.88055554 L22.75,9.01900294 L22.75,15 C22.75,15.4142136 22.4142136,15.75 22,15.75 C21.5857864,15.75 21.25,15.4142136 21.25,15 L21.25,9.98099706 Z" fill="#99A2AA" fill-rule="nonzero"></path>
                        <path id="ParcelIconRectangle" d="M2.5,8.27480852 L2.5,23.0109058 L15,28.3680486 L27.5,23.0109058 L27.5,8.27480852 L15.7878386,13.2943063 C15.284741,13.5099195 14.715259,13.5099195 14.2121614,13.2943063 L2.5,8.27480852 Z M1.69695965,6.29869699 L14.8030404,11.9155887 C14.9288147,11.969492 15.0711853,11.969492 15.1969596,11.9155887 L28.3030404,6.29869699 C28.5568552,6.18991918 28.8507947,6.30749497 28.9595725,6.56130986 C28.9862461,6.62354828 29,6.69055612 29,6.75826951 L29,23.6703019 C29,23.870316 28.8808016,24.051085 28.6969596,24.1298744 L15.1969596,29.9155887 C15.0711853,29.969492 14.9288147,29.969492 14.8030404,29.9155887 L1.30304035,24.1298744 C1.11919843,24.051085 1,23.870316 1,23.6703019 L1,6.75826951 C1,6.48212713 1.22385763,6.25826951 1.5,6.25826951 C1.56771339,6.25826951 1.63472123,6.27202338 1.69695965,6.29869699 Z" fill="#99A2AA" fill-rule="nonzero"></path>
                        <path id="ParcelIconRectangle" d="M2.5,6.98909424 L2.5,23.0109058 L15,28.3680486 L27.5,23.0109058 L27.5,6.98909424 L15,1.63195138 L2.5,6.98909424 Z M1.30304035,5.87012556 L14.8030404,0.0844112783 C14.9288147,0.0305079649 15.0711853,0.0305079649 15.1969596,0.0844112783 L28.6969596,5.87012556 C28.8808016,5.94891496 29,6.12968402 29,6.32969808 L29,23.6703019 C29,23.870316 28.8808016,24.051085 28.6969596,24.1298744 L15.1969596,29.9155887 C15.0711853,29.969492 14.9288147,29.969492 14.8030404,29.9155887 L1.30304035,24.1298744 C1.11919843,24.051085 1,23.870316 1,23.6703019 L1,6.32969808 C1,6.12968402 1.11919843,5.94891496 1.30304035,5.87012556 Z" fill="#99A2AA" fill-rule="nonzero"></path>
                        <polygon id="ParcelIconPath-2" fill="#99A2AA" fill-rule="nonzero" points="14.25 12 15.75 12 15.75 29 14.25 29"></polygon>
                    </g>
                </svg>
                    Оформити</button>
                </div>
                <div>
                    <button class="d-flex gap-2 svg-cont button icon-link-hover-3 align-items-center">
                            <svg width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g>
                                        <circle id="target-icon" cx="15" cy="15" r="12" stroke="#99A2AA" stroke-width="1.5"></circle>
                                        <circle id="target-icon" cx="15" cy="15" r="7" stroke="#99A2AA" stroke-width="1.5"></circle>
                                        <circle id="target-icon-with-fill" cx="15" cy="15" r="6" fill="#FFFFFF"></circle>
                                        <circle id="target-icon" cx="15" cy="15" r="2" stroke="#99A2AA" stroke-width="1.5"></circle>
                                    </g>
                                </g>
                            </svg>    
                    Знайти індекс</button>
                </div>
                <div>
                    <button class="d-flex gap-2 svg-cont button icon-link-hover align-items-center">
                    <svg id="SubscribeIconSvg"  width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <clipPath id="subscribe-clip-path-1">
                                        <path class="cls-1" d="M14.29,26.13V5.82L24.42,2.1a.76.76,0,0,1,.27-.05.85.85,0,0,1,.83.86V23a.85.85,0,0,1-.63.83L14.37,26.56C14.3,26.58,14.35,26.13,14.29,26.13Z" clip-rule="evenodd" fill="none"></path>
                                    </clipPath>
                                    <clipPath id="subscribe-clip-path-2">
                                        <rect class="cls-2" x="-1.61" y="-1.61" width="33.21" height="33.21" fill="none"></rect>
                                    </clipPath>
                                    <clipPath id="subscribe-clip-path-3">
                                        <path class="cls-1" d="M15.84,26.31c-.07,0-.14.27-.21.25L5.11,23.8A.85.85,0,0,1,4.48,23V2.91a.85.85,0,0,1,.83-.86.76.76,0,0,1,.27.05L16.11,5.85" clip-rule="evenodd" fill="none"></path>
                                    </clipPath>
                                    <clipPath id="subscribe-clip-path-5">
                                        <path class="cls-1" d="M14.93,26.54l14.16-.76a.88.88,0,0,0,.85-.85v-19a.87.87,0,0,0-.9-.85H29l-3.74.2M13.89,26.59H14" clip-rule="evenodd" fill="none"></path>
                                    </clipPath>
                                    <clipPath id="subscribe-clip-path-7">
                                        <path class="cls-1" d="M15,26.49.91,25.73a.88.88,0,0,1-.85-.85v-19A.87.87,0,0,1,1,5H1l3.74.2m11.35,21.3h-.06" clip-rule="evenodd" fill="none"></path>
                                    </clipPath>
                                </defs>
                                <polygon id="SubscribeIconPolygon-1" points="25.27 6.48 28.59 6.48 28.59 24.66 21.27 24.78 25.18 23.3 25.27 6.48" fill="#ffffff"></polygon>
                                <polygon id="SubscribeIconPolygon-2" points="1.47 6.48 4.48 6.62 4.54 23.28 8.39 24.66 1.47 24.39 1.47 6.48" fill="#ffffff"></polygon>
                                <g clip-path="url(#subscribe-clip-path-1)">
                                    <g clip-path="url(#subscribe-clip-path-2)">
                                        <path id="SubscribeIconElement-1" d="M14.16,26.59,13.89,5.85,24.41,2.1a.87.87,0,0,1,.28-.05.85.85,0,0,1,.83.86V23a.85.85,0,0,1-.63.83L14.37,26.57Z" stroke="#99A2AA" stroke-width="3px" fill="none" stroke-miterlimit="10"></path>
                                    </g>
                                </g>
                                <g clip-path="url(#subscribe-clip-path-3)">
                                    <g clip-path="url(#subscribe-clip-path-2)">
                                        <path id="SubscribeIconElement-2" d="M15.84,26.59l-.21,0L5.11,23.8A.85.85,0,0,1,4.48,23V2.91a.85.85,0,0,1,.83-.86.87.87,0,0,1,.28.05L16.11,5.85" stroke="#99A2AA" stroke-width="3px" fill="none" stroke-miterlimit="10"></path>
                                    </g>
                                </g>
                                <g clip-path="url(#subscribe-clip-path-5)">
                                    <g clip-path="url(#subscribe-clip-path-2)">
                                        <path id="SubscribeIconElement-3" d="M14.93,26.54l14.16-.76a.88.88,0,0,0,.85-.85v-19a.87.87,0,0,0-.9-.85H29l-3.74.2M13.89,26.59h0" stroke="#99A2AA" stroke-width="3px" stroke-linejoin="round" stroke-linecap="round" fill="none"></path>
                                    </g>
                                </g>
                                <g clip-path="url(#subscribe-clip-path-7)">
                                    <g clip-path="url(#subscribe-clip-path-2)">
                                        <path id="SubscribeIconElement-4" d="M15,26.49.91,25.73a.88.88,0,0,1-.85-.85v-19A.87.87,0,0,1,1,5H1l3.74.2m11.35,21.3h-.05" stroke="#99A2AA" stroke-width="3px" stroke-linejoin="round" stroke-linecap="round" fill="none"></path>
                                    </g>
                                </g>
                                <g clip-path="url(#subscribe-clip-path-2)">
                                    <line id="SubscribeIconElement-5" x1="15.04" y1="6.71" x2="15.04" y2="26.59" stroke="#99A2AA" stroke-width="1.5px" stroke-linecap="round" fill="none" stroke-miterlimit="10"></line>
                                </g>
                            </svg>     
                    Передплатити</button>
                </div>
            </div>
            <footer class="p-6" style="color:white">
                <div class="w-12">
                Всі права захищені. Використання матеріалів даного сайту можливе тільки з посиланням на джерело.
                </div>
            </footer>
        </div>
            
    </body>
</html>
