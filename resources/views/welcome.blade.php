{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
         body{
          background-color: #3D065F;
         }
         .rounded-pill {
          color: white;
          height: 55px;
          width: 150px;
          font-size: 1.5rem;
          font-weight: 450;
          line-height: 0.5;
          background-color: #ff08a0;
         }
         .container ul li a span{
          color:white;
          font-size: 1.4rem;
          font-weight: 400;
          line-height: 0.5;
         }
         .container ul li:hover{
          border-bottom: 2px solid white;
         }
         .container ul li .active{
          border-bottom: 2px solid white;
         }
         .txt{
          margin-top: 20rem;
          margin-left: 10ch;
          color:white ;
         }
         .txt h4{
          color: #ff08a0;
         }
         .txt button{
          background-color: #ff08a0;
          color: white;
          width: 210px;
          height: 55px;
          font-size: 1.8rem;
          font-weight: 400;
          line-height: 0.5;
         }

    </style>
    <title>home</title>
  </head>
  <body>
<div class="container">
     <div class="row pt-3">
          <div class="col-md-4 offset-md-5 pt-2">
               <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="">
                      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item ms-1">
                            <a class="nav-link active " href="#"><span>Home</span></a>
                          </li>
                          <li class="nav-item ms-3">
                              <a class="nav-link " href="#"><span>Services</span></a>
                          </li>
                          <li class="nav-item ms-3">
                              <a class="nav-link " href="#"><span>About</span></a>
                          </li>
                          <li class="nav-item ms-3">
                              <a class="nav-link " href="#"><span>Contact</span></a>
                          </li>
                          <li class="nav-item ms-3">
                              <a class="nav-link" href="#"><span>FAQ</span></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
          </div>
          <div class="col-md-3 d-flex justify-content-end pt-3">
               <a href="{{ route('login') }}" class="btn rounded-pill">SIGN Up</a>
          </div>
     </div>
     </div>
     <div class="row">
          <div class="col-md-4 txt p-5">
               <h2>Welcome to</h2>
               <h4 class="mt-4 mb-4">Aksatak</h4>
               <p class="mt-4 mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic cupiditate cum qui quia, architecto beatae sunt doloribus magni modi nesciunt nam illo, quo recusandae ipsum! Nam eveniet fugiat odit modi.</p>
               <div class="mt-5 mb-5 pt-4">
               <a href="{{ route('login') }}" class="btn rounded-3">Get Started</a>
               </div>
          </div>
          <div class="col-md-5 offset-1 pt-3">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1080.069" height="1000.141" viewBox="0 0 1080.069 1069.141">
  <defs>
    <linearGradient id="linear-gradient" x1="2.46" y1="0.789" x2="1.766" y2="0.249" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#fff" stop-opacity="0"/>
      <stop offset="0.001" stop-color="#fff" stop-opacity="0.004"/>
      <stop offset="0.112" stop-color="#fff" stop-opacity="0.424"/>
      <stop offset="0.202" stop-color="#fff" stop-opacity="0.733"/>
      <stop offset="0.265" stop-color="#fff" stop-opacity="0.925"/>
      <stop offset="0.296" stop-color="#fff"/>
      <stop offset="0.298" stop-color="#fff" stop-opacity="0.996"/>
      <stop offset="0.563" stop-color="#fff" stop-opacity="0.576"/>
      <stop offset="0.776" stop-color="#fff" stop-opacity="0.267"/>
      <stop offset="0.926" stop-color="#fff" stop-opacity="0.075"/>
      <stop offset="1" stop-color="#fff" stop-opacity="0"/>
    </linearGradient>
    <linearGradient id="linear-gradient-2" x1="0.906" y1="0.142" x2="0.642" y2="0.397" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#692b94"/>
      <stop offset="0.223" stop-color="#64298d"/>
      <stop offset="0.527" stop-color="#58237c"/>
      <stop offset="0.877" stop-color="#441b5f"/>
      <stop offset="0.997" stop-color="#3c1854"/>
    </linearGradient>
    <linearGradient id="linear-gradient-3" x1="0.721" y1="0.096" x2="0.333" y2="0.858" gradientUnits="objectBoundingBox">
      <stop offset="0.161" stop-color="#963ed4" stop-opacity="0.898"/>
      <stop offset="1" stop-color="#532275"/>
    </linearGradient>
    <linearGradient id="linear-gradient-4" x1="4.65" y1="0.789" x2="3.952" y2="0.248" gradientUnits="objectBoundingBox">
      <stop offset="0.196" stop-color="#fff"/>
      <stop offset="0.199" stop-color="#fff" stop-opacity="0.996"/>
      <stop offset="0.502" stop-color="#fff" stop-opacity="0.576"/>
      <stop offset="0.744" stop-color="#fff" stop-opacity="0.267"/>
      <stop offset="0.916" stop-color="#fff" stop-opacity="0.075"/>
      <stop offset="1" stop-color="#fff" stop-opacity="0"/>
    </linearGradient>
    <linearGradient id="linear-gradient-5" x1="0.5" y1="0.046" x2="0.5" y2="0.492" gradientUnits="objectBoundingBox">
      <stop offset="0.004" stop-color="#66003e"/>
      <stop offset="0.246" stop-color="#5f003a"/>
      <stop offset="0.582" stop-color="#4d002f"/>
      <stop offset="0.971" stop-color="#30001d"/>
      <stop offset="1" stop-color="#2e001c"/>
    </linearGradient>
    <linearGradient id="linear-gradient-6" x1="0.721" y1="0.096" x2="0.333" y2="0.858" gradientUnits="objectBoundingBox">
      <stop offset="0.003" stop-color="#ff59bf"/>
      <stop offset="0.973" stop-color="#ff009d"/>
    </linearGradient>
    <linearGradient id="linear-gradient-7" x1="-0.463" y1="0.744" x2="-0.822" y2="0.288" xlink:href="#linear-gradient-4"/>
    <linearGradient id="linear-gradient-8" x1="0.382" y1="1.224" x2="0.597" y2="-0.1" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#7932ab"/>
      <stop offset="0.038" stop-color="#7e3aac"/>
      <stop offset="0.269" stop-color="#9c6bb3"/>
      <stop offset="0.489" stop-color="#b491b8"/>
      <stop offset="0.69" stop-color="#c5adbc"/>
      <stop offset="0.867" stop-color="#d0bebf"/>
      <stop offset="1" stop-color="#d4c4c0"/>
    </linearGradient>
    <linearGradient id="linear-gradient-9" x1="-15.853" y1="0.5" x2="-14.853" y2="0.5" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#615a58"/>
      <stop offset="0.437" stop-color="#867d7a"/>
      <stop offset="1" stop-color="#b4a7a3"/>
    </linearGradient>
    <linearGradient id="linear-gradient-10" x1="0.697" y1="0.255" x2="0.402" y2="0.622" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#7932ab"/>
      <stop offset="0.127" stop-color="#7c36ac"/>
      <stop offset="0.275" stop-color="#8644b1"/>
      <stop offset="0.433" stop-color="#975cb8"/>
      <stop offset="0.598" stop-color="#ae7cc3"/>
      <stop offset="0.769" stop-color="#cca6d0"/>
      <stop offset="0.941" stop-color="#f1d9e0"/>
      <stop offset="1" stop-color="#ffece7"/>
    </linearGradient>
    <linearGradient id="linear-gradient-11" x1="0.359" y1="1.094" x2="0.473" y2="0.615" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#7932ab"/>
      <stop offset="1" stop-color="#d4c4c0"/>
    </linearGradient>
    <clipPath id="clip-path">
      <path id="Path_969" data-name="Path 969" d="M565.147,203.849,451.258,271.876,592.837,351.1l116.056-66.258Z" transform="translate(-451.258 -203.849)" fill="none"/>
    </clipPath>
    <linearGradient id="linear-gradient-12" x1="0.291" y1="0.838" x2="0.716" y2="0.15" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#ebcfff" stop-opacity="0.898"/>
      <stop offset="0.162" stop-color="#e6cafb" stop-opacity="0.902"/>
      <stop offset="0.322" stop-color="#dabcef" stop-opacity="0.91"/>
      <stop offset="0.482" stop-color="#c5a6db" stop-opacity="0.922"/>
      <stop offset="0.642" stop-color="#a886c0" stop-opacity="0.941"/>
      <stop offset="0.801" stop-color="#835d9d" stop-opacity="0.965"/>
      <stop offset="0.959" stop-color="#562c72" stop-opacity="0.992"/>
      <stop offset="1" stop-color="#491e66"/>
    </linearGradient>
    <linearGradient id="linear-gradient-13" x1="0.5" y1="-0.036" x2="0.5" y2="0.825" gradientUnits="objectBoundingBox">
      <stop offset="0.001" stop-color="#7a7a7a"/>
      <stop offset="0.911" stop-color="#a1a1a1" stop-opacity="0"/>
    </linearGradient>
    <linearGradient id="linear-gradient-14" x1="0.153" y1="0.069" x2="0.736" y2="0.751" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#7932ab"/>
      <stop offset="0.055" stop-color="#7932ab" stop-opacity="0.922"/>
      <stop offset="0.295" stop-color="#7932ab" stop-opacity="0.596"/>
      <stop offset="0.518" stop-color="#7932ab" stop-opacity="0.337"/>
      <stop offset="0.717" stop-color="#7932ab" stop-opacity="0.153"/>
      <stop offset="0.884" stop-color="#7932ab" stop-opacity="0.039"/>
      <stop offset="1" stop-color="#7932ab" stop-opacity="0"/>
    </linearGradient>
    <linearGradient id="linear-gradient-15" x1="0.167" y1="0.087" x2="0.751" y2="0.768" xlink:href="#linear-gradient-14"/>
    <linearGradient id="linear-gradient-16" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
      <stop offset="0.027" stop-color="#ff009d"/>
      <stop offset="0.997" stop-color="#ff59bf"/>
    </linearGradient>
    <clipPath id="clip-path-2">
      <path id="Path_977" data-name="Path 977" d="M531.957,475.746c-5.438,3.076-5.472,8.058-.072,11.134l86.378,49.157c5.4,3.073,14.19,3.07,19.628-.006L852.4,414.753c5.438-3.076,5.467-8.056.064-11.131l-10.752-6.12a5.8,5.8,0,0,0-5.157,0l-2.317,1.31a13.135,13.135,0,0,1-11.7,0l-48.059-27.35c-3.222-1.833-3.2-4.8.038-6.635l2.317-1.31c1.427-.806,1.43-2.122.011-2.929l-10.754-6.12c-5.4-3.073-14.184-3.073-19.622,0Z" transform="translate(-527.857 -352.16)" fill="none"/>
    </clipPath>
    <linearGradient id="linear-gradient-18" x1="-26.085" y1="0.835" x2="-28.364" y2="0.208" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#fff" stop-opacity="0"/>
      <stop offset="0.062" stop-color="#fff" stop-opacity="0.173"/>
      <stop offset="0.199" stop-color="#fff" stop-opacity="0.6"/>
      <stop offset="0.322" stop-color="#fff"/>
      <stop offset="0.325" stop-color="#fff" stop-opacity="0.996"/>
      <stop offset="0.58" stop-color="#fff" stop-opacity="0.576"/>
      <stop offset="0.784" stop-color="#fff" stop-opacity="0.267"/>
      <stop offset="0.929" stop-color="#fff" stop-opacity="0.075"/>
      <stop offset="1" stop-color="#fff" stop-opacity="0"/>
    </linearGradient>
    <linearGradient id="linear-gradient-19" x1="-29.161" y1="0.835" x2="-31.44" y2="0.208" xlink:href="#linear-gradient-18"/>
    <linearGradient id="linear-gradient-21" x1="-1.633" y1="0.5" x2="-0.633" y2="0.5" gradientUnits="objectBoundingBox">
      <stop offset="0.419" stop-color="#fff"/>
      <stop offset="0.514" stop-color="#fff"/>
    </linearGradient>
  </defs>
  <g id="Group_518" data-name="Group 518" transform="translate(-715.89 -103.626)">
    <g id="Group_517" data-name="Group 517" transform="translate(76.871 59.155)">
      <g id="Group_512" data-name="Group 512" transform="translate(639.019 44.471)">
        <g id="Group_505" data-name="Group 505">
          <g id="Group_101" data-name="Group 101" transform="translate(72.13)">
            <path id="Path_553" data-name="Path 553" d="M363.819,74.872l172.4,95.813L536,504.893,363.6,409.08Z" transform="translate(-246.288 -74.872)" opacity="0.61" fill="url(#linear-gradient)" style="mix-blend-mode: overlay;isolation: isolate"/>
            <g id="Group_95" data-name="Group 95" transform="translate(104.893 153.5)">
              <path id="Path_554" data-name="Path 554" d="M499.293,410.157V217.721l-28.668-16.007.032-10.837c.061-21.006-15.071-46.673-33.73-57.221s-33.9-2.054-33.959,18.952l-.032,10.837L372.8,146.4l-.558,192.368,125.41,70.9C497.629,409.585,497.591,409.5,499.293,410.157ZM462.728,197.249l-51.884-29.334.029-10.84c.049-16.092,11.728-22.608,26.028-14.524s25.906,27.769,25.857,43.86Z" transform="translate(-334.853 -129.121)" fill="url(#linear-gradient-2)"/>
              <g id="Group_92" data-name="Group 92" transform="translate(127.47 88.694)">
                <g id="Group_91" data-name="Group 91">
                  <path id="Path_555" data-name="Path 555" d="M440.509,160.467l-.532,192.183-36.559,21.264.532-192.184Z" transform="translate(-403.417 -160.467)" fill="#a745ed"/>
                </g>
              </g>
              <g id="Group_94" data-name="Group 94" transform="translate(0.606 17.465)">
                <g id="Group_93" data-name="Group 93">
                  <path id="Path_556" data-name="Path 556" d="M396.689,135.294l.557,192.456L360.067,348l-.557-192.456Z" transform="translate(-359.51 -135.294)" fill="#552378"/>
                </g>
              </g>
              <path id="Path_557" data-name="Path 557" d="M457.686,208.936l.032-10.84c.061-21.006-15.071-46.67-33.731-57.221s-33.9-2.054-33.959,18.952L390,170.664l-30.139-17.039L359.3,345.99l127.479,72.076.558-192.365Zm-7.9-4.465L397.9,175.135l.032-10.837c.046-16.091,11.725-22.611,26.025-14.524s25.906,27.766,25.86,43.858Z" transform="translate(-359.3 -115.914)" fill="url(#linear-gradient-3)"/>
            </g>
            <path id="Path_558" data-name="Path 558" d="M331.231,102.457l132.755,72.761-.221,259.8L331.01,362.252Z" transform="translate(-307.857 -24.404)" fill="url(#linear-gradient-4)" style="mix-blend-mode: overlay;isolation: isolate"/>
            <g id="Group_100" data-name="Group 100" transform="translate(0 215.781)">
              <path id="Path_559" data-name="Path 559" d="M462.99,432.168V239.732l-28.671-16.007.032-10.837c.061-21.006-15.071-46.673-33.728-57.221s-33.9-2.054-33.959,18.949l-.032,10.84-30.142-17.042-.555,192.368,125.407,70.9C461.323,431.594,461.285,431.514,462.99,432.168ZM426.422,219.261l-51.884-29.334.032-10.84c.046-16.092,11.725-22.611,26.027-14.524s25.9,27.766,25.857,43.86Z" transform="translate(-298.55 -151.132)" fill="url(#linear-gradient-5)"/>
              <g id="Group_97" data-name="Group 97" transform="translate(127.469 88.693)">
                <g id="Group_96" data-name="Group 96">
                  <path id="Path_560" data-name="Path 560" d="M404.205,182.478l-.532,192.183-36.56,21.264.532-192.183Z" transform="translate(-367.113 -182.478)" fill="#ff59bf"/>
                </g>
              </g>
              <g id="Group_99" data-name="Group 99" transform="translate(0.605 17.464)">
                <g id="Group_98" data-name="Group 98">
                  <path id="Path_561" data-name="Path 561" d="M360.385,157.3l.557,192.456-37.179,20.253-.557-192.456Z" transform="translate(-323.206 -157.304)" fill="#4a002d"/>
                </g>
              </g>
              <path id="Path_562" data-name="Path 562" d="M421.38,230.947l.032-10.84c.061-21.006-15.071-46.673-33.728-57.221s-33.9-2.054-33.959,18.952l-.032,10.837-30.139-17.039L323,368l127.479,72.076.558-192.368Zm-7.9-4.465L361.6,197.146l.032-10.837c.046-16.094,11.725-22.611,26.027-14.527s25.9,27.769,25.857,43.86Z" transform="translate(-322.997 -137.925)" fill="url(#linear-gradient-6)"/>
            </g>
          </g>
          <g id="Group_457" data-name="Group 457" transform="translate(0 59.223)">
            <g id="Group_225" data-name="Group 225" transform="translate(0 365.851)" opacity="0.3" style="mix-blend-mode: color-dodge;isolation: isolate">
              <g id="Group_224" data-name="Group 224">
                <g id="Group_102" data-name="Group 102" transform="translate(440.969 425.189)">
                  <path id="Path_563" data-name="Path 563" d="M450.651,376.6l2.163-1.231L501.2,402.727l-2.162,1.231Z" transform="translate(-450.651 -375.369)" fill="#7932ab"/>
                </g>
                <g id="Group_103" data-name="Group 103" transform="translate(137.617 253.676)">
                  <path id="Path_564" data-name="Path 564" d="M345.662,315.984l2.162-1.231L396.194,342.1l-2.162,1.231Z" transform="translate(-345.662 -314.753)" fill="#7932ab"/>
                </g>
                <g id="Group_104" data-name="Group 104" transform="translate(69.708 176.357)">
                  <path id="Path_565" data-name="Path 565" d="M324.322,287.427l1.088.615L373.8,315.4l-2.163,1.231-48.388-27.358-1.088-.615Z" transform="translate(-322.159 -287.427)" fill="#7932ab"/>
                </g>
                <g id="Group_105" data-name="Group 105" transform="translate(104.018 156.832)">
                  <path id="Path_566" data-name="Path 566" d="M336.2,280.527l1.088.615L385.672,308.5l-2.163,1.231-48.388-27.358-1.088-.616Z" transform="translate(-334.033 -280.527)" fill="#7932ab"/>
                </g>
                <g id="Group_106" data-name="Group 106" transform="translate(35.399 195.883)">
                  <path id="Path_567" data-name="Path 567" d="M312.447,294.328l1.088.615L361.923,322.3l-2.162,1.231-48.388-27.358-1.088-.615Z" transform="translate(-310.284 -294.328)" fill="#7932ab"/>
                </g>
                <g id="Group_219" data-name="Group 219" transform="translate(51.647 20.143)" style="isolation: isolate">
                  <g id="Group_107" data-name="Group 107" transform="translate(292.556)">
                    <path id="Path_568" data-name="Path 568" d="M419.323,232.219l1.088.615L468.8,260.192l-2.162,1.231-48.388-27.358-1.088-.615Z" transform="translate(-417.16 -232.219)" fill="#7932ab"/>
                  </g>
                  <g id="Group_108" data-name="Group 108" transform="translate(258.247 19.536)">
                    <path id="Path_569" data-name="Path 569" d="M407.43,239.123l1.088.615L456.906,267.1l-2.144,1.22-48.388-27.358-1.088-.615Z" transform="translate(-405.286 -239.123)" fill="#7932ab"/>
                  </g>
                  <g id="Group_109" data-name="Group 109" transform="translate(344.209 29.204)">
                    <path id="Path_570" data-name="Path 570" d="M435.037,243.771l2.162-1.231L485.587,269.9l-2.162,1.231Z" transform="translate(-435.037 -242.54)" fill="#7932ab"/>
                  </g>
                  <g id="Group_110" data-name="Group 110" transform="translate(223.937 39.062)">
                    <path id="Path_571" data-name="Path 571" d="M395.556,246.024l1.088.615L445.032,274l-2.144,1.22L394.5,247.859l-1.088-.615Z" transform="translate(-393.412 -246.024)" fill="#7932ab"/>
                  </g>
                  <g id="Group_111" data-name="Group 111" transform="translate(309.9 48.74)">
                    <path id="Path_572" data-name="Path 572" d="M423.163,250.665l2.144-1.22L473.695,276.8l-2.144,1.22Z" transform="translate(-423.163 -249.444)" fill="#7932ab"/>
                  </g>
                  <g id="Group_112" data-name="Group 112" transform="translate(394.774 57.794)">
                    <path id="Path_573" data-name="Path 573" d="M452.538,253.874l2.162-1.23,48.37,27.348-2.162,1.231Z" transform="translate(-452.538 -252.644)" fill="#7932ab"/>
                  </g>
                  <g id="Group_113" data-name="Group 113" transform="translate(189.628 58.587)">
                    <path id="Path_574" data-name="Path 574" d="M383.681,252.924l1.088.615L433.158,280.9l-2.144,1.22L382.625,254.76l-1.088-.615Z" transform="translate(-381.537 -252.924)" fill="#7932ab"/>
                  </g>
                  <g id="Group_114" data-name="Group 114" transform="translate(275.59 68.266)">
                    <path id="Path_575" data-name="Path 575" d="M411.289,257.565l2.144-1.22L461.82,283.7l-2.144,1.22Z" transform="translate(-411.289 -256.345)" fill="#7932ab"/>
                  </g>
                  <g id="Group_115" data-name="Group 115" transform="translate(360.465 77.329)">
                    <path id="Path_576" data-name="Path 576" d="M440.663,260.768l2.144-1.22L491.177,286.9l-2.144,1.22Z" transform="translate(-440.663 -259.548)" fill="#7932ab"/>
                  </g>
                  <g id="Group_116" data-name="Group 116" transform="translate(155.299 78.112)">
                    <path id="Path_577" data-name="Path 577" d="M371.819,259.825l1.088.615L421.3,287.8l-2.163,1.231-48.388-27.358-1.088-.615Z" transform="translate(-369.656 -259.825)" fill="#7932ab"/>
                  </g>
                  <g id="Group_117" data-name="Group 117" transform="translate(445.32 86.372)">
                    <path id="Path_578" data-name="Path 578" d="M470.031,263.975l2.162-1.231L520.583,290.1l-2.163,1.231Z" transform="translate(-470.031 -262.744)" fill="#7932ab"/>
                  </g>
                  <g id="Group_118" data-name="Group 118" transform="translate(241.281 87.791)">
                    <path id="Path_579" data-name="Path 579" d="M399.414,264.466l2.144-1.22L449.946,290.6l-2.144,1.22Z" transform="translate(-399.414 -263.246)" fill="#7932ab"/>
                  </g>
                  <g id="Group_119" data-name="Group 119" transform="translate(326.155 96.855)">
                    <path id="Path_580" data-name="Path 580" d="M428.789,267.669l2.144-1.22L479.3,293.8l-2.145,1.22Z" transform="translate(-428.789 -266.449)" fill="#7932ab"/>
                  </g>
                  <g id="Group_120" data-name="Group 120" transform="translate(120.99 97.638)">
                    <path id="Path_581" data-name="Path 581" d="M359.945,266.726l1.088.615L409.421,294.7l-2.163,1.231L358.87,268.572l-1.089-.615Z" transform="translate(-357.782 -266.726)" fill="#7932ab"/>
                  </g>
                  <g id="Group_121" data-name="Group 121" transform="translate(411.011 105.908)">
                    <path id="Path_582" data-name="Path 582" d="M458.157,270.869l2.145-1.22,48.388,27.358-2.144,1.22Z" transform="translate(-458.157 -269.648)" fill="#7932ab"/>
                  </g>
                  <g id="Group_122" data-name="Group 122" transform="translate(206.952 107.317)">
                    <path id="Path_583" data-name="Path 583" d="M387.533,271.377l2.163-1.231L438.084,297.5l-2.163,1.231Z" transform="translate(-387.533 -270.146)" fill="#7932ab"/>
                  </g>
                  <g id="Group_123" data-name="Group 123" transform="translate(495.886 114.961)">
                    <path id="Path_584" data-name="Path 584" d="M487.532,274.078l2.162-1.231,48.388,27.358-2.162,1.231Z" transform="translate(-487.532 -272.848)" fill="#7932ab"/>
                  </g>
                  <g id="Group_124" data-name="Group 124" transform="translate(291.846 116.38)">
                    <path id="Path_585" data-name="Path 585" d="M416.915,274.57l2.144-1.22,48.37,27.348-2.145,1.22Z" transform="translate(-416.915 -273.349)" fill="#7932ab"/>
                  </g>
                  <g id="Group_125" data-name="Group 125" transform="translate(86.68 117.164)">
                    <path id="Path_586" data-name="Path 586" d="M348.07,273.626l1.088.615L397.546,301.6l-2.162,1.231L347,275.472l-1.088-.615Z" transform="translate(-345.907 -273.626)" fill="#7932ab"/>
                  </g>
                  <g id="Group_126" data-name="Group 126" transform="translate(376.701 125.433)">
                    <path id="Path_587" data-name="Path 587" d="M446.283,277.769l2.145-1.22,48.388,27.358-2.144,1.22Z" transform="translate(-446.283 -276.549)" fill="#7932ab"/>
                  </g>
                  <g id="Group_127" data-name="Group 127" transform="translate(172.643 126.842)">
                    <path id="Path_588" data-name="Path 588" d="M375.659,278.278l2.163-1.231L426.21,304.4l-2.163,1.231Z" transform="translate(-375.659 -277.047)" fill="#7932ab"/>
                  </g>
                  <g id="Group_128" data-name="Group 128" transform="translate(461.576 134.497)">
                    <path id="Path_589" data-name="Path 589" d="M475.658,280.972l2.144-1.22L526.19,307.11l-2.145,1.22Z" transform="translate(-475.658 -279.752)" fill="#7932ab"/>
                  </g>
                  <g id="Group_129" data-name="Group 129" transform="translate(257.518 135.906)">
                    <path id="Path_590" data-name="Path 590" d="M405.034,281.481l2.163-1.231,48.37,27.348-2.163,1.231Z" transform="translate(-405.034 -280.25)" fill="#7932ab"/>
                  </g>
                  <g id="Group_130" data-name="Group 130" transform="translate(546.45 143.55)">
                    <path id="Path_591" data-name="Path 591" d="M505.032,284.182l2.162-1.231,48.388,27.358-2.162,1.23Z" transform="translate(-505.032 -282.952)" fill="#7932ab"/>
                  </g>
                  <g id="Group_131" data-name="Group 131" transform="translate(342.392 144.959)">
                    <path id="Path_592" data-name="Path 592" d="M434.408,284.67l2.145-1.22,48.388,27.358-2.144,1.22Z" transform="translate(-434.408 -283.449)" fill="#7932ab"/>
                  </g>
                  <g id="Group_132" data-name="Group 132" transform="translate(138.333 146.368)">
                    <path id="Path_593" data-name="Path 593" d="M363.784,285.178l2.162-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-363.784 -283.948)" fill="#7932ab"/>
                  </g>
                  <g id="Group_133" data-name="Group 133" transform="translate(427.267 154.022)">
                    <path id="Path_594" data-name="Path 594" d="M463.783,287.873l2.145-1.22,48.388,27.358-2.144,1.22Z" transform="translate(-463.783 -286.653)" fill="#7932ab"/>
                  </g>
                  <g id="Group_134" data-name="Group 134" transform="translate(223.208 155.431)">
                    <path id="Path_595" data-name="Path 595" d="M393.159,288.382l2.163-1.231L443.692,314.5l-2.163,1.231Z" transform="translate(-393.159 -287.151)" fill="#7932ab"/>
                  </g>
                  <g id="Group_135" data-name="Group 135" transform="translate(512.141 163.086)">
                    <path id="Path_596" data-name="Path 596" d="M493.158,291.076l2.145-1.22,48.388,27.358-2.144,1.22Z" transform="translate(-493.158 -289.856)" fill="#7932ab"/>
                  </g>
                  <g id="Group_136" data-name="Group 136" transform="translate(308.064 164.484)">
                    <path id="Path_597" data-name="Path 597" d="M422.527,291.581l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-422.527 -290.35)" fill="#7932ab"/>
                  </g>
                  <g id="Group_137" data-name="Group 137" transform="translate(104.024 165.893)">
                    <path id="Path_598" data-name="Path 598" d="M351.91,292.079l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-351.91 -290.848)" fill="#7932ab"/>
                  </g>
                  <g id="Group_138" data-name="Group 138" transform="translate(596.997 172.129)">
                    <path id="Path_599" data-name="Path 599" d="M522.526,294.282l2.163-1.231,48.388,27.358-2.162,1.231Z" transform="translate(-522.526 -293.052)" fill="#7932ab"/>
                  </g>
                  <g id="Group_139" data-name="Group 139" transform="translate(392.957 173.548)">
                    <path id="Path_600" data-name="Path 600" d="M451.909,294.774l2.145-1.22,48.388,27.358-2.144,1.22Z" transform="translate(-451.909 -293.553)" fill="#7932ab"/>
                  </g>
                  <g id="Group_140" data-name="Group 140" transform="translate(188.899 174.957)">
                    <path id="Path_601" data-name="Path 601" d="M381.285,295.282l2.162-1.23L431.817,321.4l-2.162,1.231Z" transform="translate(-381.285 -294.052)" fill="#7932ab"/>
                  </g>
                  <g id="Group_141" data-name="Group 141" transform="translate(477.831 182.611)">
                    <path id="Path_602" data-name="Path 602" d="M481.283,297.977l2.144-1.22,48.388,27.358-2.144,1.22Z" transform="translate(-481.283 -296.757)" fill="#7932ab"/>
                  </g>
                  <g id="Group_142" data-name="Group 142" transform="translate(273.754 184.01)">
                    <path id="Path_603" data-name="Path 603" d="M410.653,298.482l2.163-1.231L461.2,324.609l-2.163,1.231Z" transform="translate(-410.653 -297.251)" fill="#7932ab"/>
                  </g>
                  <g id="Group_143" data-name="Group 143" transform="translate(69.715 185.419)">
                    <path id="Path_604" data-name="Path 604" d="M340.036,298.98l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-340.036 -297.749)" fill="#7932ab"/>
                  </g>
                  <g id="Group_144" data-name="Group 144" transform="translate(562.688 191.664)">
                    <path id="Path_605" data-name="Path 605" d="M510.652,301.176l2.144-1.22,48.388,27.359-2.144,1.22Z" transform="translate(-510.652 -299.956)" fill="#7932ab"/>
                  </g>
                  <g id="Group_145" data-name="Group 145" transform="translate(358.629 193.074)">
                    <path id="Path_606" data-name="Path 606" d="M440.028,301.685l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-440.028 -300.454)" fill="#7932ab"/>
                  </g>
                  <g id="Group_146" data-name="Group 146" transform="translate(154.589 194.482)">
                    <path id="Path_607" data-name="Path 607" d="M369.41,302.183l2.163-1.231,48.37,27.348-2.163,1.231Z" transform="translate(-369.41 -300.952)" fill="#7932ab"/>
                  </g>
                  <g id="Group_147" data-name="Group 147" transform="translate(0 9.064)">
                    <path id="Path_608" data-name="Path 608" d="M695.508,236.653l-1.081.615L662.28,255.563l-2.163,1.231-32.165,18.3-2.145,1.22-32.165,18.305-2.144,1.22L559.333,314.15l-2.144,1.22-32.165,18.305-2.163,1.231L490.713,353.2l-2.163,1.231L456.4,372.726l-2.163,1.231-32.147,18.295-2.163,1.231-32.147,18.295-2.163,1.231L353.475,431.3l-2.163,1.231-32.147,18.295-1.081.615-2.177-1.231,1.081-.616L349.136,431.3l2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.162-1.231L486.374,353.2l2.163-1.231,32.147-18.295,2.163-1.231,32.165-18.305,2.145-1.22,32.165-18.305,2.144-1.22,32.165-18.305,2.144-1.22,32.165-18.305,2.163-1.231,32.147-18.295,1.081-.615Z" transform="translate(-315.908 -235.422)" fill="#7932ab"/>
                  </g>
                  <g id="Group_148" data-name="Group 148" transform="translate(647.562 200.717)">
                    <path id="Path_609" data-name="Path 609" d="M540.027,304.386l2.163-1.231,48.388,27.358-2.162,1.231Z" transform="translate(-540.027 -303.156)" fill="#7932ab"/>
                  </g>
                  <g id="Group_149" data-name="Group 149" transform="translate(443.522 202.137)">
                    <path id="Path_610" data-name="Path 610" d="M469.409,304.877l2.144-1.22,48.388,27.358-2.144,1.22Z" transform="translate(-469.409 -303.657)" fill="#7932ab"/>
                  </g>
                  <g id="Group_150" data-name="Group 150" transform="translate(239.445 203.535)">
                    <path id="Path_611" data-name="Path 611" d="M398.779,305.382l2.162-1.231,48.388,27.358-2.162,1.231Z" transform="translate(-398.779 -304.151)" fill="#7932ab"/>
                  </g>
                  <g id="Group_151" data-name="Group 151" transform="translate(35.405 204.945)">
                    <path id="Path_612" data-name="Path 612" d="M328.161,305.88l2.163-1.231,48.388,27.358-2.162,1.231Z" transform="translate(-328.161 -304.65)" fill="#7932ab"/>
                  </g>
                  <g id="Group_152" data-name="Group 152" transform="translate(528.378 211.19)">
                    <path id="Path_613" data-name="Path 613" d="M498.777,308.077l2.144-1.22,48.388,27.358-2.144,1.22Z" transform="translate(-498.777 -306.857)" fill="#7932ab"/>
                  </g>
                  <g id="Group_153" data-name="Group 153" transform="translate(324.32 212.599)">
                    <path id="Path_614" data-name="Path 614" d="M428.154,308.586l2.163-1.231L478.7,334.713l-2.163,1.231Z" transform="translate(-428.154 -307.355)" fill="#7932ab"/>
                  </g>
                  <g id="Group_154" data-name="Group 154" transform="translate(120.28 214.008)">
                    <path id="Path_615" data-name="Path 615" d="M357.536,309.084l2.163-1.231L408.068,335.2l-2.163,1.231Z" transform="translate(-357.536 -307.853)" fill="#7932ab"/>
                  </g>
                  <g id="Group_155" data-name="Group 155" transform="translate(613.252 220.253)">
                    <path id="Path_616" data-name="Path 616" d="M528.152,311.28l2.144-1.22,48.388,27.358-2.144,1.22Z" transform="translate(-528.152 -310.06)" fill="#7932ab"/>
                  </g>
                  <g id="Group_156" data-name="Group 156" transform="translate(409.194 221.662)">
                    <path id="Path_617" data-name="Path 617" d="M457.528,311.789l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-457.528 -310.558)" fill="#7932ab"/>
                  </g>
                  <g id="Group_157" data-name="Group 157" transform="translate(205.135 223.061)">
                    <path id="Path_618" data-name="Path 618" d="M386.9,312.283l2.163-1.231,48.389,27.359-2.163,1.231Z" transform="translate(-386.904 -311.052)" fill="#7932ab"/>
                  </g>
                  <g id="Group_158" data-name="Group 158" transform="translate(50.565 37.653)">
                    <path id="Path_619" data-name="Path 619" d="M713.008,246.757l-1.081.615L679.78,265.667l-2.163,1.231L645.452,285.2l-2.144,1.221-32.165,18.305L609,305.948l-32.165,18.305-2.145,1.22-32.165,18.305-2.163,1.231L508.214,363.3l-2.163,1.231L473.9,382.83l-2.162,1.231L439.6,402.356l-2.163,1.231-32.147,18.295-2.163,1.231-32.147,18.295-2.163,1.231-32.147,18.295-1.082.615-2.177-1.231,1.082-.615,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.23,32.147-18.295,2.162-1.231L503.874,363.3l2.163-1.231,32.147-18.295,2.163-1.231,32.165-18.305,2.144-1.22,32.165-18.305,2.144-1.22,32.165-18.305,2.145-1.22,32.165-18.305,2.163-1.231,32.147-18.295,1.082-.615Z" transform="translate(-333.408 -245.526)" fill="#7932ab"/>
                  </g>
                  <g id="Group_159" data-name="Group 159" transform="translate(698.127 229.306)">
                    <path id="Path_620" data-name="Path 620" d="M557.527,314.49l2.163-1.231,48.389,27.358-2.162,1.231Z" transform="translate(-557.527 -313.259)" fill="#7932ab"/>
                  </g>
                  <g id="Group_160" data-name="Group 160" transform="translate(494.069 230.715)">
                    <path id="Path_621" data-name="Path 621" d="M486.9,314.978l2.144-1.22,48.388,27.358-2.145,1.22Z" transform="translate(-486.903 -313.757)" fill="#7932ab"/>
                  </g>
                  <g id="Group_161" data-name="Group 161" transform="translate(290.01 232.125)">
                    <path id="Path_622" data-name="Path 622" d="M416.279,315.486l2.162-1.231,48.388,27.358-2.162,1.231Z" transform="translate(-416.279 -314.255)" fill="#7932ab"/>
                  </g>
                  <g id="Group_162" data-name="Group 162" transform="translate(578.943 239.779)">
                    <path id="Path_623" data-name="Path 623" d="M516.278,318.181l2.145-1.22,48.388,27.358-2.145,1.22Z" transform="translate(-516.278 -316.961)" fill="#7932ab"/>
                  </g>
                  <g id="Group_163" data-name="Group 163" transform="translate(374.884 241.188)">
                    <path id="Path_624" data-name="Path 624" d="M445.654,318.689l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-445.654 -317.458)" fill="#7932ab"/>
                  </g>
                  <g id="Group_164" data-name="Group 164" transform="translate(170.826 242.586)">
                    <path id="Path_625" data-name="Path 625" d="M375.03,319.184l2.163-1.231,48.389,27.358-2.163,1.231Z" transform="translate(-375.03 -317.953)" fill="#7932ab"/>
                  </g>
                  <g id="Group_165" data-name="Group 165" transform="translate(663.817 248.842)">
                    <path id="Path_626" data-name="Path 626" d="M545.652,321.384l2.145-1.22,48.388,27.358-2.144,1.22Z" transform="translate(-545.652 -320.164)" fill="#7932ab"/>
                  </g>
                  <g id="Group_166" data-name="Group 166" transform="translate(459.74 250.241)">
                    <path id="Path_627" data-name="Path 627" d="M475.022,321.889l2.163-1.231,48.389,27.358-2.163,1.231Z" transform="translate(-475.022 -320.658)" fill="#7932ab"/>
                  </g>
                  <g id="Group_167" data-name="Group 167" transform="translate(255.701 251.65)">
                    <path id="Path_628" data-name="Path 628" d="M404.4,322.387l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-404.405 -321.156)" fill="#7932ab"/>
                  </g>
                  <g id="Group_168" data-name="Group 168" transform="translate(101.111 66.231)">
                    <path id="Path_629" data-name="Path 629" d="M730.5,256.857l-1.081.615-32.147,18.295L695.111,277,662.946,295.3l-2.145,1.22-32.165,18.305-2.145,1.22-32.165,18.305-2.145,1.22L560.017,353.88l-2.163,1.231-32.147,18.295-2.163,1.231L491.4,392.931l-2.162,1.231-32.147,18.295-2.163,1.231-32.147,18.295-2.163,1.231L388.47,451.507l-2.163,1.231L354.16,471.033l-1.081.615-2.177-1.231,1.081-.615,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.162-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.165-18.305,2.145-1.22,32.165-18.305,2.145-1.22,32.165-18.3,2.145-1.221,32.165-18.305,2.163-1.231,32.147-18.295,1.081-.615Z" transform="translate(-350.902 -255.626)" fill="#7932ab"/>
                  </g>
                  <g id="Group_169" data-name="Group 169" transform="translate(544.633 259.304)">
                    <path id="Path_630" data-name="Path 630" d="M504.4,325.081l2.145-1.22,48.388,27.358-2.144,1.22Z" transform="translate(-504.403 -323.861)" fill="#7932ab"/>
                  </g>
                  <g id="Group_170" data-name="Group 170" transform="translate(340.575 260.714)">
                    <path id="Path_631" data-name="Path 631" d="M433.779,325.59l2.163-1.231,48.388,27.358-2.162,1.231Z" transform="translate(-433.779 -324.359)" fill="#7932ab"/>
                  </g>
                  <g id="Group_171" data-name="Group 171" transform="translate(136.516 262.112)">
                    <path id="Path_632" data-name="Path 632" d="M363.155,326.084l2.163-1.231,48.389,27.358-2.163,1.231Z" transform="translate(-363.155 -324.853)" fill="#7932ab"/>
                  </g>
                  <g id="Group_172" data-name="Group 172" transform="translate(629.508 268.368)">
                    <path id="Path_633" data-name="Path 633" d="M533.778,328.285l2.144-1.22,48.388,27.359-2.144,1.22Z" transform="translate(-533.778 -327.064)" fill="#7932ab"/>
                  </g>
                  <g id="Group_173" data-name="Group 173" transform="translate(425.431 269.766)">
                    <path id="Path_634" data-name="Path 634" d="M463.148,328.79l2.163-1.231L513.7,354.917l-2.163,1.231Z" transform="translate(-463.148 -327.559)" fill="#7932ab"/>
                  </g>
                  <g id="Group_174" data-name="Group 174" transform="translate(221.391 271.175)">
                    <path id="Path_635" data-name="Path 635" d="M392.53,329.288l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-392.53 -328.057)" fill="#7932ab"/>
                  </g>
                  <g id="Group_175" data-name="Group 175" transform="translate(510.305 278.83)">
                    <path id="Path_636" data-name="Path 636" d="M492.522,331.993l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-492.522 -330.762)" fill="#7932ab"/>
                  </g>
                  <g id="Group_176" data-name="Group 176" transform="translate(306.265 280.239)">
                    <path id="Path_637" data-name="Path 637" d="M421.905,332.491l2.163-1.231,48.389,27.358-2.163,1.231Z" transform="translate(-421.905 -331.26)" fill="#7932ab"/>
                  </g>
                  <g id="Group_177" data-name="Group 177" transform="translate(151.676 94.82)">
                    <path id="Path_638" data-name="Path 638" d="M748,266.961l-1.082.615-32.147,18.295-2.163,1.231-32.165,18.305-2.145,1.221-32.165,18.305-2.144,1.22-32.165,18.3-2.144,1.22-32.165,18.305-2.163,1.231-32.147,18.295-2.163,1.231L508.9,403.034l-2.163,1.231L474.589,422.56l-2.163,1.231L440.28,442.085l-2.163,1.231L405.97,461.611l-2.163,1.231-32.147,18.295-1.082.615-2.177-1.231,1.081-.615,32.147-18.295,2.163-1.23,32.147-18.295,2.163-1.231L470.25,422.56l2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.165-18.305,2.144-1.22,32.165-18.305,2.144-1.22,32.165-18.3,2.145-1.22,32.165-18.305,2.163-1.231,32.147-18.295,1.081-.615Z" transform="translate(-368.402 -265.73)" fill="#7932ab"/>
                  </g>
                  <g id="Group_178" data-name="Group 178" transform="translate(799.239 286.474)">
                    <path id="Path_639" data-name="Path 639" d="M643.072,360.822l1.088.615L642,362.668l-1.089-.615-48.388-27.358,2.162-1.231Z" transform="translate(-592.521 -333.463)" fill="#7932ab"/>
                  </g>
                  <g id="Group_179" data-name="Group 179" transform="translate(595.199 287.893)">
                    <path id="Path_640" data-name="Path 640" d="M521.9,335.185l2.144-1.22,48.388,27.358-2.144,1.22Z" transform="translate(-521.904 -333.965)" fill="#7932ab"/>
                  </g>
                  <g id="Group_180" data-name="Group 180" transform="translate(391.121 289.292)">
                    <path id="Path_641" data-name="Path 641" d="M451.273,335.69l2.162-1.23,48.389,27.358-2.162,1.231Z" transform="translate(-451.273 -334.459)" fill="#7932ab"/>
                  </g>
                  <g id="Group_181" data-name="Group 181" transform="translate(187.082 290.701)">
                    <path id="Path_642" data-name="Path 642" d="M380.656,336.188l2.162-1.231,48.388,27.358-2.162,1.231Z" transform="translate(-380.656 -334.957)" fill="#7932ab"/>
                  </g>
                  <g id="Group_182" data-name="Group 182" transform="translate(475.996 298.355)">
                    <path id="Path_643" data-name="Path 643" d="M480.648,338.893l2.163-1.231L531.2,365.021l-2.163,1.231Z" transform="translate(-480.648 -337.662)" fill="#7932ab"/>
                  </g>
                  <g id="Group_183" data-name="Group 183" transform="translate(271.955 299.764)">
                    <path id="Path_644" data-name="Path 644" d="M410.031,339.391l2.163-1.231,48.389,27.358-2.163,1.231Z" transform="translate(-410.031 -338.16)" fill="#7932ab"/>
                  </g>
                  <g id="Group_184" data-name="Group 184" transform="translate(764.929 306.01)">
                    <path id="Path_645" data-name="Path 645" d="M631.18,367.726l1.088.615-2.145,1.22-1.088-.615-48.389-27.358,2.145-1.22Z" transform="translate(-580.647 -340.368)" fill="#7932ab"/>
                  </g>
                  <g id="Group_185" data-name="Group 185" transform="translate(560.87 307.419)">
                    <path id="Path_646" data-name="Path 646" d="M510.023,342.1l2.163-1.231,48.389,27.358-2.163,1.231Z" transform="translate(-510.023 -340.866)" fill="#7932ab"/>
                  </g>
                  <g id="Group_186" data-name="Group 186" transform="translate(356.812 308.817)">
                    <path id="Path_647" data-name="Path 647" d="M439.4,342.591l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-439.399 -341.36)" fill="#7932ab"/>
                  </g>
                  <g id="Group_187" data-name="Group 187" transform="translate(202.241 123.409)">
                    <path id="Path_648" data-name="Path 648" d="M765.5,277.064l-1.081.615-32.147,18.295-2.163,1.231-32.165,18.3-2.145,1.221-32.165,18.305-2.144,1.22-32.165,18.305-2.144,1.22-32.165,18.305-2.163,1.231-32.147,18.295-2.163,1.231L526.4,413.138l-2.162,1.231L492.09,432.663l-2.163,1.231L457.78,452.189l-2.163,1.231L423.47,471.715l-2.163,1.231L389.161,491.24l-1.081.616-2.177-1.231,1.081-.615,32.147-18.294,2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.166-18.305,2.144-1.22,32.165-18.305,2.144-1.22,32.165-18.3,2.145-1.22,32.165-18.305,2.163-1.231,32.147-18.295,1.081-.615Z" transform="translate(-385.903 -275.834)" fill="#7932ab"/>
                  </g>
                  <g id="Group_188" data-name="Group 188" transform="translate(645.763 316.482)">
                    <path id="Path_649" data-name="Path 649" d="M539.4,345.289l2.145-1.22,48.388,27.358-2.145,1.22Z" transform="translate(-539.404 -344.069)" fill="#7932ab"/>
                  </g>
                  <g id="Group_189" data-name="Group 189" transform="translate(441.686 317.881)">
                    <path id="Path_650" data-name="Path 650" d="M468.774,345.794l2.163-1.231,48.388,27.358-2.162,1.231Z" transform="translate(-468.774 -344.563)" fill="#7932ab"/>
                  </g>
                  <g id="Group_190" data-name="Group 190" transform="translate(237.646 319.29)">
                    <path id="Path_651" data-name="Path 651" d="M398.156,346.292l2.162-1.231,48.389,27.358-2.163,1.23Z" transform="translate(-398.156 -345.061)" fill="#7932ab"/>
                  </g>
                  <g id="Group_191" data-name="Group 191" transform="translate(730.619 325.536)">
                    <path id="Path_652" data-name="Path 652" d="M619.305,374.627l1.089.615-2.145,1.22-1.088-.615-48.389-27.358,2.145-1.22Z" transform="translate(-568.772 -347.268)" fill="#7932ab"/>
                  </g>
                  <g id="Group_192" data-name="Group 192" transform="translate(526.561 326.944)">
                    <path id="Path_653" data-name="Path 653" d="M498.148,349l2.163-1.231L548.7,375.125l-2.163,1.231Z" transform="translate(-498.148 -347.766)" fill="#7932ab"/>
                  </g>
                  <g id="Group_193" data-name="Group 193" transform="translate(322.502 328.343)">
                    <path id="Path_654" data-name="Path 654" d="M427.525,349.492l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-427.525 -348.26)" fill="#7932ab"/>
                  </g>
                  <g id="Group_194" data-name="Group 194" transform="translate(611.435 336.008)">
                    <path id="Path_655" data-name="Path 655" d="M527.523,352.2l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-527.523 -350.969)" fill="#7932ab"/>
                  </g>
                  <g id="Group_195" data-name="Group 195" transform="translate(407.377 337.406)">
                    <path id="Path_656" data-name="Path 656" d="M456.9,352.695l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-456.899 -351.464)" fill="#7932ab"/>
                  </g>
                  <g id="Group_196" data-name="Group 196" transform="translate(252.806 151.999)">
                    <path id="Path_657" data-name="Path 657" d="M782.985,287.158l-1.082.615-32.147,18.295-2.163,1.231L715.429,325.6l-2.145,1.22-32.165,18.305-2.144,1.22L646.81,364.655l-2.144,1.22L612.5,384.181l-2.163,1.231-32.147,18.295-2.163,1.231-32.147,18.295-2.163,1.231-32.147,18.295-2.163,1.231-32.147,18.295-2.163,1.231-32.147,18.295-2.163,1.231-32.147,18.295-1.081.615-2.158-1.22,1.082-.615,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.162-1.231,32.147-18.295,2.162-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.166-18.305,2.144-1.22,32.165-18.305,2.144-1.22L711.126,325.6l2.145-1.221,32.165-18.3,2.163-1.231,32.147-18.295,1.081-.615Z" transform="translate(-403.403 -285.937)" fill="#7932ab"/>
                  </g>
                  <g id="Group_197" data-name="Group 197" transform="translate(696.31 345.061)">
                    <path id="Path_658" data-name="Path 658" d="M607.431,381.527l1.089.615-2.145,1.22-1.088-.616L556.9,355.389l2.145-1.22Z" transform="translate(-556.898 -354.169)" fill="#7932ab"/>
                  </g>
                  <g id="Group_198" data-name="Group 198" transform="translate(492.251 346.47)">
                    <path id="Path_659" data-name="Path 659" d="M486.274,355.9l2.162-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-486.274 -354.667)" fill="#7932ab"/>
                  </g>
                  <g id="Group_199" data-name="Group 199" transform="translate(288.193 347.869)">
                    <path id="Path_660" data-name="Path 660" d="M415.65,356.392l2.162-1.231L466.2,382.52l-2.162,1.231Z" transform="translate(-415.65 -355.161)" fill="#7932ab"/>
                  </g>
                  <g id="Group_200" data-name="Group 200" transform="translate(577.125 355.533)">
                    <path id="Path_661" data-name="Path 661" d="M515.649,359.1l2.163-1.231L566.2,385.228l-2.163,1.231Z" transform="translate(-515.649 -357.87)" fill="#7932ab"/>
                  </g>
                  <g id="Group_201" data-name="Group 201" transform="translate(373.067 356.932)">
                    <path id="Path_662" data-name="Path 662" d="M445.025,359.6l2.163-1.231,48.389,27.358-2.163,1.231Z" transform="translate(-445.025 -358.364)" fill="#7932ab"/>
                  </g>
                  <g id="Group_202" data-name="Group 202" transform="translate(661.982 364.586)">
                    <path id="Path_663" data-name="Path 663" d="M595.569,388.428l1.088.615-2.163,1.231-1.088-.615L545.017,362.3l2.163-1.231Z" transform="translate(-545.017 -361.07)" fill="#7932ab"/>
                  </g>
                  <g id="Group_203" data-name="Group 203" transform="translate(457.942 365.995)">
                    <path id="Path_664" data-name="Path 664" d="M474.4,362.8l2.163-1.231,48.388,27.359-2.163,1.231Z" transform="translate(-474.4 -361.567)" fill="#7932ab"/>
                  </g>
                  <g id="Group_204" data-name="Group 204" transform="translate(303.353 180.577)">
                    <path id="Path_665" data-name="Path 665" d="M800.5,297.268l-1.081.615-32.147,18.295-2.163,1.231-32.165,18.305-2.145,1.221L698.632,355.24l-2.144,1.22-32.165,18.305-2.144,1.22-32.165,18.305-2.163,1.231L595.7,413.817l-2.163,1.231-32.147,18.295-2.162,1.231-32.147,18.295-2.163,1.231-32.147,18.295-2.163,1.231-32.147,18.295-2.163,1.231-32.147,18.295-1.081.616-2.177-1.231,1.081-.615,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.162-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.163-1.231L660,374.755l2.145-1.22L694.31,355.23l2.145-1.22L728.62,335.7l2.145-1.22,32.165-18.305,2.163-1.231,32.147-18.295,1.081-.615Z" transform="translate(-420.897 -296.038)" fill="#7932ab"/>
                  </g>
                  <g id="Group_205" data-name="Group 205" transform="translate(542.816 375.059)">
                    <path id="Path_666" data-name="Path 666" d="M503.774,366l2.162-1.231,48.388,27.358-2.162,1.231Z" transform="translate(-503.774 -364.771)" fill="#7932ab"/>
                  </g>
                  <g id="Group_206" data-name="Group 206" transform="translate(338.758 376.458)">
                    <path id="Path_667" data-name="Path 667" d="M433.151,366.5l2.162-1.231L483.7,392.623l-2.162,1.231Z" transform="translate(-433.151 -365.265)" fill="#7932ab"/>
                  </g>
                  <g id="Group_207" data-name="Group 207" transform="translate(627.672 384.112)">
                    <path id="Path_668" data-name="Path 668" d="M583.694,395.329l1.088.615-2.163,1.231-1.088-.615L533.143,369.2l2.163-1.231Z" transform="translate(-533.143 -367.97)" fill="#7932ab"/>
                  </g>
                  <g id="Group_208" data-name="Group 208" transform="translate(423.632 385.521)">
                    <path id="Path_669" data-name="Path 669" d="M462.525,369.7l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-462.525 -368.468)" fill="#7932ab"/>
                  </g>
                  <g id="Group_209" data-name="Group 209" transform="translate(508.507 394.584)">
                    <path id="Path_670" data-name="Path 670" d="M491.9,372.9l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-491.9 -371.671)" fill="#7932ab"/>
                  </g>
                  <g id="Group_210" data-name="Group 210" transform="translate(353.918 209.166)">
                    <path id="Path_671" data-name="Path 671" d="M818,307.372l-1.081.616-32.147,18.294-2.163,1.231-32.165,18.305-2.145,1.22-32.165,18.3-2.144,1.22L681.822,384.87l-2.144,1.22-32.166,18.305-2.163,1.231L613.2,423.921l-2.163,1.231-32.147,18.295-2.162,1.231-32.147,18.294-2.163,1.231L510.275,482.5l-2.163,1.231-32.147,18.295-2.163,1.23-32.147,18.295-1.081.615-2.177-1.231,1.081-.615,32.147-18.295,2.163-1.231L505.935,482.5l2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.162-1.231,32.147-18.295,2.163-1.231L643.173,404.4l2.163-1.231L677.5,384.859l2.144-1.22,32.165-18.305,2.144-1.22,32.165-18.305,2.145-1.22,32.165-18.3,2.163-1.231,32.147-18.295,1.081-.615Z" transform="translate(-438.397 -306.141)" fill="#7932ab"/>
                  </g>
                  <g id="Group_211" data-name="Group 211" transform="translate(593.363 403.638)">
                    <path id="Path_672" data-name="Path 672" d="M571.819,402.229l1.088.615-2.162,1.231-1.089-.615L521.268,376.1l2.163-1.231Z" transform="translate(-521.268 -374.871)" fill="#7932ab"/>
                  </g>
                  <g id="Group_212" data-name="Group 212" transform="translate(474.197 414.11)">
                    <path id="Path_673" data-name="Path 673" d="M480.026,379.8l2.163-1.231,48.388,27.358-2.163,1.231Z" transform="translate(-480.026 -378.572)" fill="#7932ab"/>
                  </g>
                  <g id="Group_213" data-name="Group 213" transform="translate(559.053 423.163)">
                    <path id="Path_674" data-name="Path 674" d="M559.946,409.13l1.088.615-2.163,1.231-1.088-.615L509.394,383l2.163-1.231Z" transform="translate(-509.394 -381.772)" fill="#7932ab"/>
                  </g>
                  <g id="Group_214" data-name="Group 214" transform="translate(404.483 237.755)">
                    <path id="Path_675" data-name="Path 675" d="M835.5,317.476l-1.081.615-32.147,18.295-2.163,1.231-32.165,18.305-2.145,1.22-32.165,18.305-2.144,1.22-32.165,18.305-2.144,1.22L665.013,414.5l-2.163,1.231L630.7,434.024l-2.163,1.231L596.394,453.55l-2.163,1.231-32.147,18.295-2.163,1.231L527.775,492.6l-2.163,1.231-32.147,18.295-2.163,1.231-32.147,18.295-1.081.615-2.177-1.231,1.081-.615,32.147-18.295,2.163-1.231L523.435,492.6l2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.162-1.231,32.147-18.295,2.163-1.231L660.674,414.5l2.163-1.231L695,394.963l2.144-1.22,32.165-18.305,2.145-1.22,32.165-18.305,2.145-1.22,32.165-18.305,2.163-1.231,32.147-18.295,1.081-.615Z" transform="translate(-455.898 -316.245)" fill="#7932ab"/>
                  </g>
                  <g id="Group_215" data-name="Group 215" transform="translate(439.888 433.636)">
                    <path id="Path_676" data-name="Path 676" d="M468.151,386.7l2.162-1.231L518.7,412.831l-2.162,1.231Z" transform="translate(-468.151 -385.473)" fill="#7932ab"/>
                  </g>
                  <g id="Group_216" data-name="Group 216" transform="translate(524.744 442.689)">
                    <path id="Path_677" data-name="Path 677" d="M548.071,416.03l1.088.615L547,417.877l-1.088-.615L497.52,389.9l2.163-1.231Z" transform="translate(-497.52 -388.672)" fill="#7932ab"/>
                  </g>
                  <g id="Group_217" data-name="Group 217" transform="translate(455.048 266.344)">
                    <path id="Path_678" data-name="Path 678" d="M852.98,327.569l-1.081.615-32.147,18.295-2.163,1.231-32.165,18.3-2.145,1.221-32.165,18.305-2.144,1.22L716.8,405.067l-2.144,1.22L682.5,424.592l-2.163,1.231-32.147,18.295-2.163,1.231-32.147,18.295-2.162,1.231-32.147,18.295L577.4,484.4l-32.147,18.295-2.163,1.231L510.948,522.22l-2.163,1.231-32.147,18.295-1.081.615-2.159-1.22,1.081-.616,32.147-18.295L508.789,521,540.936,502.7l2.163-1.231,32.147-18.295,2.163-1.231,32.147-18.295,2.162-1.231,32.147-18.295,2.163-1.231L678.174,424.6l2.163-1.231L712.5,405.066l2.144-1.22,32.165-18.305,2.144-1.22,32.165-18.305,2.145-1.221L815.43,346.49l2.163-1.231,32.147-18.295,1.082-.615Z" transform="translate(-473.398 -326.349)" fill="#7932ab"/>
                  </g>
                  <g id="Group_218" data-name="Group 218" transform="translate(490.434 462.215)">
                    <path id="Path_679" data-name="Path 679" d="M536.2,422.931l1.088.615-2.162,1.231-1.088-.615L485.645,396.8l2.162-1.231Z" transform="translate(-485.645 -395.573)" fill="#7932ab"/>
                  </g>
                </g>
                <g id="Group_220" data-name="Group 220" transform="translate(766.029 297.574)">
                  <path id="Path_680" data-name="Path 680" d="M563.153,331.488l2.144-1.22,48.389,27.358-2.145,1.22Z" transform="translate(-563.153 -330.268)" fill="#7932ab"/>
                </g>
                <g id="Group_221" data-name="Group 221" transform="translate(731.72 317.099)">
                  <path id="Path_681" data-name="Path 681" d="M551.279,338.388l2.144-1.22,48.389,27.358-2.145,1.22Z" transform="translate(-551.279 -337.168)" fill="#7932ab"/>
                </g>
                <g id="Group_222" data-name="Group 222" transform="translate(800.339 278.038)">
                  <path id="Path_682" data-name="Path 682" d="M575.027,324.594l2.163-1.231,48.388,27.358-2.162,1.231Z" transform="translate(-575.027 -323.363)" fill="#7932ab"/>
                </g>
                <g id="Group_223" data-name="Group 223">
                  <path id="Path_683" data-name="Path 683" d="M677.618,225.1l558.336,315.681L856.369,756.8,298.033,441.123Zm519.688,335.2,3.251-.614,31.061-18.91-48.388-27.359-1.078-1.836-49.469-26.745L1131.587,483l-49.472-26.742-1.1-1.848-49.469-26.742-1.1-1.845-49.469-26.745-1.078-1.836L930.441,370.5l-1.1-1.848-49.469-26.742-1.1-1.845L829.31,313.319l-1.1-1.845-49.451-26.733-1.1-1.845L728.2,256.151l-1.1-1.845-49.469-26.745-32.147,18.3-3.251.617L611.16,265.4l-3.233.6-31.078,18.921-3.23.605L542.54,304.445l-3.233.606-31.075,18.918-3.253.617L473.921,343.5l-3.251.617-31.058,18.91-3.253.614L405.3,382.546l-3.251.617-31.058,18.91-3.251.617L336.681,421.6l-3.25.614-31.058,18.91,48.388,27.359,1.1,1.848,49.469,26.742,1.1,1.845,49.451,26.733,1.1,1.848,49.472,26.742,1.1,1.845L553,582.828l1.095,1.845,49.469,26.745,1.078,1.834L654.113,640l1.1,1.845,49.472,26.745,1.1,1.845,49.469,26.742,1.095,1.848,49.469,26.742,1.078,1.836,49.469,26.742L888.5,736.047l3.251-.617,31.061-18.91,3.25-.614L957.121,697l3.25-.617,31.058-18.91,3.253-.617,31.058-18.91,3.251-.614,31.058-18.91,3.254-.617,31.075-18.921,3.233-.606,31.078-18.918,3.23-.605L1163,579.831l3.233-.605,31.075-18.921" transform="translate(-298.033 -225.1)" fill="#7932ab"/>
                </g>
              </g>
            </g>
            <g id="Group_456" data-name="Group 456" transform="translate(111.648)">
              <path id="Path_684" data-name="Path 684" d="M452.6,95.8,877.56,329.2,877.3,744.383l-424.961-233.4Z" transform="translate(-118.136 -95.802)" fill="url(#linear-gradient-7)" style="mix-blend-mode: overlay;isolation: isolate"/>
              <g id="Group_455" data-name="Group 455" transform="translate(0 112.454)">
                <g id="Group_319" data-name="Group 319">
                  <g id="Group_226" data-name="Group 226" transform="translate(0 278.098)">
                    <path id="Path_685" data-name="Path 685" d="M634.9,247.032,341.155,414.2a8.729,8.729,0,0,0,0,15.251L780.007,679.2a30.939,30.939,0,0,0,30.529,0l283.008-161.059a8.731,8.731,0,0,0,0-15.254L643.953,247.032A9.171,9.171,0,0,0,634.9,247.032Z" transform="translate(-336.674 -211.863)" fill="#7932ab" opacity="0.33"/>
                    <path id="Path_686" data-name="Path 686" d="M634.9,235.025,341.155,402.2a8.729,8.729,0,0,0,0,15.251L780.007,667.189a30.938,30.938,0,0,0,30.529,0l283.008-161.059a8.731,8.731,0,0,0,0-15.254L643.953,235.025A9.171,9.171,0,0,0,634.9,235.025Z" transform="translate(-336.674 -233.83)" fill="#7932ab"/>
                  </g>
                  <g id="Group_318" data-name="Group 318" transform="translate(48.25)">
                    <g id="Group_317" data-name="Group 317">
                      <g id="Group_242" data-name="Group 242">
                        <g id="Group_230" data-name="Group 230" transform="translate(0 298.675)">
                          <g id="Group_229" data-name="Group 229" style="isolation: isolate">
                            <g id="Group_228" data-name="Group 228" transform="translate(0 144.673)" style="isolation: isolate">
                              <g id="Group_227" data-name="Group 227" style="isolation: isolate">
                                <path id="Path_687" data-name="Path 687" d="M353.373,292.232l.026,9.977,0,.116-.029-9.977v-.116" transform="translate(-353.373 -292.232)" fill="#79716e"/>
                                <path id="Path_688" data-name="Path 688" d="M357.3,297.547l-.165-.1a10.459,10.459,0,0,1-1.713-1.242,7.712,7.712,0,0,1-.838-.883,6.471,6.471,0,0,1-.546-.792,5.392,5.392,0,0,1-.358-.753,4.862,4.862,0,0,1-.22-.747,4.526,4.526,0,0,1-.09-.761l.029,9.977a4.517,4.517,0,0,0,.09.761,4.694,4.694,0,0,0,.22.747,5.015,5.015,0,0,0,.361.755,6.115,6.115,0,0,0,.543.789,7.5,7.5,0,0,0,.838.883,10.585,10.585,0,0,0,1.714,1.242l.165.1Z" transform="translate(-353.373 -292.157)" fill="#311445"/>
                              </g>
                            </g>
                            <path id="Path_689" data-name="Path 689" d="M1022.565,380.7c.006,1.978-1.326,3.956-4,5.467L776.286,523.15a14.833,14.833,0,0,1-1.953.917,16.6,16.6,0,0,1-1.644.543c-.459.13-.933.243-1.41.339q-.663.136-1.344.229c-.434.059-.873.108-1.315.144s-.887.059-1.332.068c-.462.011-.925.011-1.387-.006-.5-.017-1-.048-1.5-.1q-.875-.085-1.725-.235a20.494,20.494,0,0,1-2.563-.625,15.589,15.589,0,0,1-2.967-1.279L354.733,294.137l.029,9.977L757.176,533.13a15.557,15.557,0,0,0,2.967,1.276,20.029,20.029,0,0,0,2.563.625q.85.149,1.725.235c.5.048,1,.082,1.5.1q.693.025,1.387.008c.445-.011.89-.034,1.332-.071s.881-.085,1.315-.144q.681-.093,1.344-.229c.477-.1.951-.209,1.41-.337q.85-.238,1.644-.546a14.618,14.618,0,0,0,1.953-.914l242.279-136.986c2.67-1.508,4-3.489,4-5.464Z" transform="translate(-350.803 -144.073)" fill="#311445"/>
                            <path id="Path_690" data-name="Path 690" d="M1021.236,472.367,618.819,243.351c-5.264-3-13.831-3-19.136,0L357.4,380.334c-5.3,3-5.325,7.86-.061,10.857L759.754,620.2c5.273,3,13.84,3,19.139,0l242.279-136.983C1026.48,480.222,1026.509,475.367,1021.236,472.367Z" transform="translate(-353.306 -241.102)" fill="url(#linear-gradient-8)"/>
                          </g>
                        </g>
                        <g id="Group_231" data-name="Group 231" transform="translate(150.359 471.577)" opacity="0.5" style="mix-blend-mode: multiply;isolation: isolate">
                          <path id="Path_691" data-name="Path 691" d="M410.582,328.677c-6.856,3.876-6.9,10.161-.089,14.037l99.544,56.653c6.81,3.874,17.891,3.871,24.745-.006L576.455,375.8c6.854-3.877,6.9-10.161.09-14.037L477,305.113c-6.81-3.876-17.891-3.871-24.745,0Z" transform="translate(-405.412 -302.208)" fill="#a99d99"/>
                        </g>
                        <g id="Group_234" data-name="Group 234" transform="translate(127.099 334.776)">
                          <g id="Group_232" data-name="Group 232" opacity="0.6" style="mix-blend-mode: multiply;isolation: isolate">
                            <path id="Path_692" data-name="Path 692" d="M402.041,316.98c-6.209,3.511-6.241,9.2-.081,12.7L744.336,524.528c6.169,3.511,16.189,3.511,22.4,0l106.988-60.49c6.2-3.506,6.235-9.19.066-12.7L531.412,256.49c-6.16-3.506-16.183-3.506-22.384,0Z" transform="translate(-397.362 -253.861)" fill="#a99d99"/>
                          </g>
                          <g id="Group_233" data-name="Group 233" transform="translate(15.893 5.989)">
                            <path id="Path_693" data-name="Path 693" d="M468.628,267.3l-.006-1.995v0a1.212,1.212,0,0,0-.728-1l-12.976-7.385a9.013,9.013,0,0,0-8.041.006l-10.48,5.922c-.647.368-.829.883-.618,1.355a.965.965,0,0,1-.119-.345l.006,1.995v.023a1.144,1.144,0,0,0,.017.139.752.752,0,0,0,.04.139.87.87,0,0,0,.066.139c.014.025.038.054.055.079l.014.02.032.048a1.332,1.332,0,0,0,.153.161,1.848,1.848,0,0,0,.318.229l.029.017,15.224,8.664a2.877,2.877,0,0,0,.546.235c.069.023.147.037.22.054l.118.028c.046.011.087.026.133.034.1.017.211.031.318.042s.185.014.277.02h.257c.084,0,.165-.006.246-.014s.165-.014.246-.026.165-.025.246-.042l.081-.02.035-.008c.049-.011.1-.02.147-.034.1-.028.205-.062.3-.1a3.459,3.459,0,0,0,.358-.17l12.742-7.207A1.218,1.218,0,0,0,468.628,267.3Zm-32.243-2.445a1.683,1.683,0,0,1-.534-.458v0A1.624,1.624,0,0,0,436.385,264.852Z" transform="translate(-340.894 -255.977)" fill="#211b26"/>
                            <path id="Path_694" data-name="Path 694" d="M459.5,268.93l-15.224-8.664a3.972,3.972,0,0,0-3.539.006l-10.858,6.14c-.653.368-.835.888-.615,1.364a.906.906,0,0,1-.121-.354l.006,1.995v.02a.764.764,0,0,0,.014.142,1.279,1.279,0,0,0,.04.139,1.489,1.489,0,0,0,.066.139c.017.025.037.051.055.079l.014.02.032.045a1.384,1.384,0,0,0,.156.164,1.976,1.976,0,0,0,.315.229l.032.017,15.221,8.664a2.874,2.874,0,0,0,.546.235c.069.023.147.037.22.054l.119.028c.046.011.089.025.136.034.1.017.208.031.318.043q.134.013.277.017c.043,0,.09,0,.133,0l.035,0h.087c.084,0,.165-.008.248-.014s.162-.014.243-.025.165-.025.248-.042l.078-.02.035-.009.147-.034c.1-.031.205-.062.3-.1a2.748,2.748,0,0,0,.358-.167l10.861-6.14a1.23,1.23,0,0,0,.743-1.016l-.006-1.995v0A1.206,1.206,0,0,0,459.5,268.93Zm-29.633-.515a1.651,1.651,0,0,1-.535-.458l0,0A1.668,1.668,0,0,0,429.865,268.415Z" transform="translate(-353.213 -248.887)" fill="#211b26"/>
                            <path id="Path_695" data-name="Path 695" d="M465.3,272.693l-15.221-8.661a3.972,3.972,0,0,0-3.539,0l-7.166,4.052-4.583,2.592-17.954,10.15c-.659.373-.838.894-.615,1.364a.882.882,0,0,1-.124-.354l.006,1.995v.023a1.108,1.108,0,0,0,.017.139.8.8,0,0,0,.04.136.86.86,0,0,0,.067.139c.014.028.037.054.055.082l.014.02.032.045a1.337,1.337,0,0,0,.153.164,1.845,1.845,0,0,0,.318.229l.032.02,15.221,8.661a2.822,2.822,0,0,0,.552.238c.069.023.144.034.214.054l.121.028c.046.008.09.025.136.034.107.017.211.031.318.042s.185.014.277.02h.254c.081,0,.162-.006.246-.014s.159-.014.24-.025.168-.025.248-.042l.081-.02.035-.009c.046-.011.1-.02.144-.034a2.728,2.728,0,0,0,.3-.1,2.645,2.645,0,0,0,.364-.17l17.955-10.152,4.58-2.589,7.166-4.052a1.236,1.236,0,0,0,.746-1.016l-.006-1.995,0,.006A1.209,1.209,0,0,0,465.3,272.693Zm-48.475,10.138a1.713,1.713,0,0,1-.534-.455l0,0A1.664,1.664,0,0,0,416.825,282.831Z" transform="translate(-377.856 -242)" fill="#211b26"/>
                            <path id="Path_696" data-name="Path 696" d="M480.608,274.7l-.006-1.995h0a1.229,1.229,0,0,0-.734-1l-19.081-10.86a3.954,3.954,0,0,0-3.531,0l-12.745,7.2c-.65.368-.832.888-.615,1.361a.879.879,0,0,1-.121-.351l.006,1.995v.023a1.143,1.143,0,0,0,.018.139.754.754,0,0,0,.04.139.881.881,0,0,0,.066.139.486.486,0,0,0,.055.079l.012.02.035.048a1.322,1.322,0,0,0,.153.161,1.821,1.821,0,0,0,.315.229l.032.02,19.084,10.86a2.869,2.869,0,0,0,.546.235c.072.023.147.037.22.054l.121.028c.046.011.09.025.136.034.107.02.214.034.321.045s.188.014.28.017c.043,0,.084,0,.127,0h.035l.1,0c.084,0,.165-.008.248-.014s.162-.014.243-.025.168-.028.248-.042l.075-.02.032-.006c.052-.014.1-.023.153-.037a3.092,3.092,0,0,0,.3-.1,2.442,2.442,0,0,0,.358-.167l12.742-7.2A1.228,1.228,0,0,0,480.608,274.7ZM444.5,270.051a1.646,1.646,0,0,1-.535-.458l0,0A1.667,1.667,0,0,0,444.5,270.051Z" transform="translate(-325.564 -247.835)" fill="#211b26"/>
                            <path id="Path_697" data-name="Path 697" d="M437.369,272.474a.918.918,0,0,1-.116-.337l.006,1.995v.023a1.149,1.149,0,0,0,.017.139.842.842,0,0,0,.041.139,1.012,1.012,0,0,0,.067.139.655.655,0,0,0,.055.079l.012.02.035.048a1.575,1.575,0,0,0,.153.161,1.85,1.85,0,0,0,.318.229l.029.017,19.084,10.86a2.807,2.807,0,0,0,.549.238c.069.023.145.034.217.054l.121.028c.046.011.09.025.136.034.107.02.214.034.324.045q.139.013.277.017h.162c.032,0,.064,0,.1,0,.084,0,.168-.006.248-.011s.165-.017.246-.028.165-.025.246-.042l.075-.017.032-.008c.052-.011.1-.023.153-.037.1-.028.205-.062.3-.1a2.9,2.9,0,0,0,.355-.167l10.861-6.14a1.234,1.234,0,0,0,.74-1.013l-.006-1.995h0l0,0a1.217,1.217,0,0,0-.725-1l-19.084-10.86a3.973,3.973,0,0,0-3.539.006l-10.861,6.14C437.345,271.492,437.163,272,437.369,272.474Zm34.646,4.909c.04-.057.035-.119.064-.178-.029.059-.02.119-.061.175Zm-34.571-4.714a1.624,1.624,0,0,0,.534.461,1.682,1.682,0,0,1-.534-.458Z" transform="translate(-337.885 -240.261)" fill="#211b26"/>
                            <path id="Path_698" data-name="Path 698" d="M430.854,276.256a.9.9,0,0,1-.121-.357l.006,2v.02a.778.778,0,0,0,.014.141,1.43,1.43,0,0,0,.04.139,1.5,1.5,0,0,0,.066.139c.017.026.038.051.055.076l.014.023.032.045a1.375,1.375,0,0,0,.156.164,1.979,1.979,0,0,0,.315.229l.029.017,19.084,10.86a2.8,2.8,0,0,0,.549.238c.069.023.147.034.22.054l.118.028c.046.011.09.025.139.034q.156.025.321.042c.093.009.185.014.28.02h.257c.081,0,.165-.006.246-.011s.165-.017.246-.028.165-.025.248-.042l.072-.017.035-.009c.049-.011.1-.023.153-.037.1-.028.2-.062.3-.1a2.707,2.707,0,0,0,.355-.167l10.861-6.14a1.234,1.234,0,0,0,.74-1.013l-.006-2,0,.006a1.212,1.212,0,0,0-.725-1l-19.084-10.86a3.973,3.973,0,0,0-3.54.006l-10.861,6.14C430.817,275.26,430.635,275.78,430.854,276.256Zm.067.178a1.669,1.669,0,0,0,.537.461,1.65,1.65,0,0,1-.535-.458Z" transform="translate(-350.203 -233.373)" fill="#211b26"/>
                            <path id="Path_699" data-name="Path 699" d="M447.566,293.517l10.861-6.14a1.225,1.225,0,0,0,.737-1l-.006-2v0a1.225,1.225,0,0,0-.734-1l-19.082-10.863a3.955,3.955,0,0,0-3.531,0l-10.861,6.143c-.656.368-.835.886-.621,1.355a.9.9,0,0,1-.119-.348l.006,1.995v.023a.574.574,0,0,0,.017.139.634.634,0,0,0,.041.139.951.951,0,0,0,.064.136.858.858,0,0,0,.058.082l.011.02.032.045a1.66,1.66,0,0,0,.156.164,2.012,2.012,0,0,0,.318.232l.032.017,19.081,10.86a2.849,2.849,0,0,0,.555.238c.067.023.142.034.214.054l.121.028c.046.011.092.025.139.034.107.02.214.034.321.045s.185.014.277.017h.159c.032,0,.066,0,.1,0,.081,0,.165-.006.245-.011s.162-.017.243-.028.165-.025.246-.04l.075-.02.035-.008c.049-.011.1-.02.15-.034.1-.031.205-.062.3-.1A2.428,2.428,0,0,0,447.566,293.517ZM424.939,280.66a1.7,1.7,0,0,1-.537-.458v0A1.705,1.705,0,0,0,424.939,280.66Z" transform="translate(-362.526 -226.485)" fill="#211b26"/>
                            <path id="Path_700" data-name="Path 700" d="M490.059,280.189l-.006-1.995v0a1.217,1.217,0,0,0-.728-1l-19.09-10.863a3.955,3.955,0,0,0-3.531,0l-12.745,7.2c-.653.371-.832.894-.61,1.369a.876.876,0,0,1-.124-.359l.006,1.995v.02a1.234,1.234,0,0,0,.017.144.813.813,0,0,0,.04.136.9.9,0,0,0,.066.142c.014.025.035.051.052.076l.014.02.035.048a1.365,1.365,0,0,0,.153.164,1.965,1.965,0,0,0,.315.226l.029.017,19.09,10.865a2.843,2.843,0,0,0,.546.235c.072.023.147.037.222.054l.118.028c.043.011.087.026.133.034.1.017.211.034.318.043s.185.017.277.02h.257c.081,0,.165-.006.245-.014s.162-.014.243-.025.168-.025.248-.042l.081-.02.035-.006c.049-.014.1-.023.144-.037.1-.028.205-.062.3-.1a3.228,3.228,0,0,0,.361-.17l12.742-7.2A1.225,1.225,0,0,0,490.059,280.189Zm-36.111-4.646a1.665,1.665,0,0,1-.532-.456l0,0A1.681,1.681,0,0,0,453.947,275.543Z" transform="translate(-307.708 -237.788)" fill="#211b26"/>
                            <path id="Path_701" data-name="Path 701" d="M458.3,270.479l-10.861,6.14c-.65.368-.826.886-.613,1.358a.879.879,0,0,1-.121-.351l.006,1.995v.023a1.124,1.124,0,0,0,.017.142.757.757,0,0,0,.04.139,1.055,1.055,0,0,0,.066.142c.017.025.035.051.055.076l.012.02.035.048a1.375,1.375,0,0,0,.156.164,1.813,1.813,0,0,0,.312.226l.029.017,19.093,10.865a2.875,2.875,0,0,0,.546.235c.069.023.147.037.22.054.04.008.078.02.118.028s.087.025.133.034c.1.017.211.031.318.042s.185.014.277.017c.046,0,.092,0,.136,0h.121c.081,0,.165-.006.246-.014s.165-.014.243-.026.167-.025.248-.042l.081-.02.035-.009.147-.034a2.732,2.732,0,0,0,.3-.1,2.93,2.93,0,0,0,.358-.167l10.861-6.14a1.245,1.245,0,0,0,.743-1.016l-.006-2,0,.006a1.2,1.2,0,0,0-.722-1l-19.09-10.865A3.973,3.973,0,0,0,458.3,270.479Zm-10.873,8.143a1.733,1.733,0,0,1-.532-.456v0A1.64,1.64,0,0,0,447.426,278.622Z" transform="translate(-320.028 -230.213)" fill="#211b26"/>
                            <path id="Path_702" data-name="Path 702" d="M440.909,284.382,460,295.248a2.873,2.873,0,0,0,.546.235c.069.023.147.034.22.054l.119.028c.046.008.09.025.136.034.1.017.208.031.318.042q.134.013.277.017c.043,0,.09,0,.133,0h.032l.089,0c.084,0,.165-.008.248-.014s.162-.017.243-.025.165-.025.249-.042l.078-.02.035-.009c.049-.011.1-.023.147-.037.1-.028.205-.062.3-.1a2.439,2.439,0,0,0,.358-.17l10.861-6.14a1.227,1.227,0,0,0,.743-1.013l-.006-2v.006a1.213,1.213,0,0,0-.722-1l-19.093-10.863a3.982,3.982,0,0,0-3.539,0l-10.861,6.143c-.647.365-.826.886-.613,1.355a.909.909,0,0,1-.118-.348l.006,1.995v.023a.78.78,0,0,0,.014.141,1.264,1.264,0,0,0,.04.139.9.9,0,0,0,.069.139c.014.025.035.051.052.076l.014.023.032.048a1.372,1.372,0,0,0,.156.161,1.912,1.912,0,0,0,.312.229Zm0-2a1.6,1.6,0,0,1-.532-.456l0,0A1.619,1.619,0,0,0,440.906,282.385Z" transform="translate(-332.347 -223.325)" fill="#211b26"/>
                            <path id="Path_703" data-name="Path 703" d="M434.393,288.146l19.09,10.862a2.751,2.751,0,0,0,.552.238c.069.023.141.034.214.054l.118.028c.049.008.092.025.139.034.1.017.211.031.318.042s.185.014.275.017c.043,0,.09,0,.133,0h.121c.084,0,.165-.006.246-.014s.162-.014.243-.025.165-.026.245-.042l.081-.02.038-.008c.046-.011.1-.02.142-.034a2.609,2.609,0,0,0,.306-.1,2.475,2.475,0,0,0,.361-.17l10.861-6.14a1.224,1.224,0,0,0,.74-1.007l-.006-2v0a1.217,1.217,0,0,0-.728-1L448.791,278a3.973,3.973,0,0,0-3.531,0l-10.861,6.14c-.662.373-.838.9-.613,1.372a.891.891,0,0,1-.124-.362l.006,1.995v.02a.571.571,0,0,0,.017.141.848.848,0,0,0,.04.139,1,1,0,0,0,.066.139.478.478,0,0,0,.055.079l.012.02.035.048a1.334,1.334,0,0,0,.153.164,1.97,1.97,0,0,0,.315.226Zm-.006-2a1.643,1.643,0,0,1-.534-.456v0A1.652,1.652,0,0,0,434.387,286.148Zm34.037,4.253c.037-.051.032-.11.058-.164-.026.054-.02.11-.058.164Z" transform="translate(-344.669 -216.436)" fill="#211b26"/>
                            <path id="Path_704" data-name="Path 704" d="M499.511,285.685l-.006-1.995h0a1.219,1.219,0,0,0-.731-1l-19.081-10.86a3.961,3.961,0,0,0-3.534,0l-12.742,7.2c-.644.365-.826.88-.621,1.347a.883.883,0,0,1-.116-.337l.006,1.995v.023a.567.567,0,0,0,.017.139.579.579,0,0,0,.04.139.675.675,0,0,0,.066.139.761.761,0,0,0,.052.079l.014.02.032.048a1.379,1.379,0,0,0,.156.161,1.816,1.816,0,0,0,.315.229l.032.02,19.081,10.86a2.981,2.981,0,0,0,.549.235c.069.023.147.037.22.054l.121.028c.046.011.089.025.136.034.1.02.214.034.321.045s.185.014.28.017c.043,0,.084,0,.127,0h.032c.035,0,.066,0,.1,0,.084,0,.165-.008.248-.014s.162-.014.243-.025l.248-.042.072-.02.035-.006c.052-.014.1-.025.153-.037.1-.031.2-.062.3-.1a2.4,2.4,0,0,0,.355-.167l12.745-7.2A1.225,1.225,0,0,0,499.511,285.685ZM463.4,281.036a1.677,1.677,0,0,1-.535-.456l0,0A1.664,1.664,0,0,0,463.4,281.036Z" transform="translate(-289.849 -227.738)" fill="#211b26"/>
                            <path id="Path_705" data-name="Path 705" d="M467.754,275.972l-10.861,6.14c-.644.365-.826.877-.621,1.347a.914.914,0,0,1-.116-.337l.006,1.995v.023a1.145,1.145,0,0,0,.017.139.774.774,0,0,0,.04.139.875.875,0,0,0,.066.139.658.658,0,0,0,.055.079l.012.02.035.048a1.333,1.333,0,0,0,.153.161,1.818,1.818,0,0,0,.315.229l.032.017,19.081,10.86a2.759,2.759,0,0,0,.552.238c.069.023.144.034.217.054l.121.028c.046.011.09.025.136.034a3.122,3.122,0,0,0,.321.042c.092.011.188.017.28.02h.162c.032,0,.064,0,.1,0,.084,0,.165-.006.248-.011s.162-.017.243-.028.168-.026.248-.042l.075-.017.032-.009c.052-.011.1-.023.153-.037a3.068,3.068,0,0,0,.3-.1,2.742,2.742,0,0,0,.358-.167l10.858-6.14a1.228,1.228,0,0,0,.74-1.013l-.006-1.995h0v0a1.208,1.208,0,0,0-.728-1l-19.081-10.862A3.973,3.973,0,0,0,467.754,275.972Zm23.164,12.4c.04-.057.032-.116.061-.173-.026.057-.02.116-.058.17Zm-34.037-4.253a1.714,1.714,0,0,1-.535-.456l0-.006A1.668,1.668,0,0,0,456.881,284.115Z" transform="translate(-302.17 -220.164)" fill="#211b26"/>
                            <path id="Path_706" data-name="Path 706" d="M449.756,287.241a.957.957,0,0,1-.121-.354l.006,1.995v.02a1.206,1.206,0,0,0,.017.142.817.817,0,0,0,.041.139,1,1,0,0,0,.066.139c.014.026.035.051.055.079l.012.02.035.045a1.342,1.342,0,0,0,.153.164,2.017,2.017,0,0,0,.318.229l.029.017,19.084,10.86a2.8,2.8,0,0,0,.549.238c.069.023.144.034.217.054l.121.028c.046.008.09.025.136.034.107.017.214.031.324.042.092.008.185.017.277.02h.257c.084,0,.167-.006.248-.014s.165-.014.246-.025.165-.026.245-.042l.075-.017.032-.008c.052-.011.1-.023.153-.037.1-.028.205-.062.3-.1a2.907,2.907,0,0,0,.355-.167l10.861-6.14a1.234,1.234,0,0,0,.74-1.013l-.006-2,0,.006a1.217,1.217,0,0,0-.725-1l-19.084-10.86a3.973,3.973,0,0,0-3.539.006l-10.861,6.14C449.719,286.245,449.54,286.765,449.756,287.241Zm.067.178a1.669,1.669,0,0,0,.537.461,1.64,1.64,0,0,1-.532-.458Z" transform="translate(-314.49 -213.275)" fill="#211b26"/>
                            <path id="Path_707" data-name="Path 707" d="M443.235,291.006a.889.889,0,0,1-.121-.357l.006,1.995v.023a.749.749,0,0,0,.014.139,1.235,1.235,0,0,0,.04.139,1.158,1.158,0,0,0,.066.139l.055.079.014.02.032.045a1.182,1.182,0,0,0,.156.164,2.011,2.011,0,0,0,.318.232l.032.017,19.081,10.86a2.832,2.832,0,0,0,.552.238c.069.023.145.034.214.051l.121.031c.049.011.093.025.142.034.107.02.214.034.321.045s.185.014.278.017c.04,0,.084,0,.124,0h.032c.035,0,.067,0,.1,0,.081,0,.165-.006.246-.011s.162-.017.243-.028.165-.025.245-.04l.075-.02.032-.006c.052-.014.1-.023.153-.037.1-.031.205-.062.3-.1a2.942,2.942,0,0,0,.358-.167l10.861-6.14a1.232,1.232,0,0,0,.737-1.007l-.006-2,0,0a1.216,1.216,0,0,0-.731-1L458.246,283.5a3.96,3.96,0,0,0-3.534,0l-10.858,6.143C443.195,290.013,443.013,290.533,443.235,291.006Zm.066.178a1.719,1.719,0,0,0,.54.461,1.7,1.7,0,0,1-.537-.458Z" transform="translate(-326.811 -206.387)" fill="#211b26"/>
                            <path id="Path_708" data-name="Path 708" d="M508.959,291.174l-.006-1.995v0a1.216,1.216,0,0,0-.725-1l-19.09-10.863a3.961,3.961,0,0,0-3.534,0l-12.742,7.2c-.644.365-.824.877-.618,1.347a.917.917,0,0,1-.116-.337l.006,1.995v.02a.578.578,0,0,0,.017.142.78.78,0,0,0,.04.139.915.915,0,0,0,.067.142c.014.025.035.051.052.076l.014.02.035.051a1.566,1.566,0,0,0,.153.161,2.083,2.083,0,0,0,.312.226l.032.017,19.09,10.865a2.677,2.677,0,0,0,.543.232c.07.023.147.037.22.057l.118.028c.046.008.087.023.133.031.107.02.214.034.321.045s.185.014.28.017c.043,0,.087,0,.13,0h.035c.029,0,.061,0,.093,0,.084,0,.165-.006.248-.011s.162-.017.243-.026.168-.028.248-.045l.075-.017.035-.008c.052-.011.1-.023.153-.037.1-.028.2-.062.3-.1a2.731,2.731,0,0,0,.355-.167l12.745-7.2A1.226,1.226,0,0,0,508.959,291.174Zm-36.108-4.646a1.631,1.631,0,0,1-.532-.456l0,0A1.683,1.683,0,0,0,472.85,286.528Z" transform="translate(-271.993 -217.69)" fill="#211b26"/>
                            <path id="Path_709" data-name="Path 709" d="M477.2,281.462l-10.861,6.14c-.65.368-.829.889-.613,1.361a.877.877,0,0,1-.121-.354l.006,2v.02a1.126,1.126,0,0,0,.017.141.758.758,0,0,0,.041.139,1.031,1.031,0,0,0,.066.141c.014.026.035.051.052.076l.014.02.035.048a1.344,1.344,0,0,0,.153.164,1.979,1.979,0,0,0,.315.226l.029.017,19.09,10.865a2.832,2.832,0,0,0,.543.232c.069.023.147.037.22.054l.121.031c.043.008.087.023.133.031a2.963,2.963,0,0,0,.318.042c.092.011.188.017.28.02h.165c.032,0,.061,0,.092,0,.084,0,.168-.006.248-.011s.165-.017.246-.028.165-.025.248-.042l.072-.017.035-.009c.052-.011.1-.023.153-.037a3.084,3.084,0,0,0,.3-.1,2.556,2.556,0,0,0,.355-.167l10.861-6.14a1.232,1.232,0,0,0,.743-1.016l-.006-1.995,0,0a1.2,1.2,0,0,0-.719-1l-19.09-10.865A3.991,3.991,0,0,0,477.2,281.462Zm-10.873,8.143a1.7,1.7,0,0,1-.532-.456l0-.006A1.651,1.651,0,0,0,466.329,289.606Z" transform="translate(-284.313 -210.115)" fill="#211b26"/>
                            <path id="Path_710" data-name="Path 710" d="M470.681,285.226l-10.861,6.143c-.647.365-.826.886-.615,1.355a.955.955,0,0,1-.119-.348l.006,1.995v.023a1.165,1.165,0,0,0,.017.142.851.851,0,0,0,.041.139.864.864,0,0,0,.067.139c.017.028.037.051.055.079l.012.02.035.048a1.375,1.375,0,0,0,.156.164,1.826,1.826,0,0,0,.312.226l.029.017,19.093,10.865a2.894,2.894,0,0,0,.54.232c.072.023.147.037.222.054l.118.028c.043.011.087.026.133.034q.156.026.321.043c.093.008.185.014.277.02h.257c.084,0,.168-.006.248-.014s.165-.014.246-.025.168-.025.248-.042l.075-.017.032-.008c.052-.011.1-.023.153-.037.1-.028.205-.062.3-.1a3.405,3.405,0,0,0,.355-.167L493.3,300.09a1.234,1.234,0,0,0,.74-1.013l-.006-1.995,0,0a1.2,1.2,0,0,0-.719-1l-19.09-10.865A3.982,3.982,0,0,0,470.681,285.226Zm-10.873,8.146a1.7,1.7,0,0,1-.532-.458v0A1.642,1.642,0,0,0,459.808,293.372Z" transform="translate(-296.634 -203.228)" fill="#211b26"/>
                            <path id="Path_711" data-name="Path 711" d="M475.917,309.993l10.861-6.14a1.223,1.223,0,0,0,.737-1.007l-.006-1.995h0a1.215,1.215,0,0,0-.725-1l-19.09-10.865a3.979,3.979,0,0,0-3.534,0L453.3,295.13c-.65.371-.829.886-.615,1.355a.9.9,0,0,1-.118-.345l.006,1.995v.02a.765.765,0,0,0,.014.141,1.106,1.106,0,0,0,.041.139,1.509,1.509,0,0,0,.067.139c.017.028.038.054.055.079l.014.02.032.048a1.671,1.671,0,0,0,.156.164,1.974,1.974,0,0,0,.315.226l.032.02,19.09,10.863a2.7,2.7,0,0,0,.546.235c.069.023.144.037.214.054l.122.028c.046.011.089.025.136.034.107.02.214.034.321.045s.185.014.277.017h.159c.035,0,.067,0,.1,0,.081,0,.165-.006.246-.011s.162-.017.243-.028.165-.025.248-.04l.075-.02.035-.009c.049-.011.1-.023.15-.037a3.079,3.079,0,0,0,.3-.1A2.463,2.463,0,0,0,475.917,309.993Zm-22.63-12.86a1.66,1.66,0,0,1-.532-.456l0,0A1.648,1.648,0,0,0,453.287,297.133Z" transform="translate(-308.955 -196.338)" fill="#211b26"/>
                            <path id="Path_712" data-name="Path 712" d="M518.41,296.664l-.006-1.995h0a1.207,1.207,0,0,0-.725-1l-19.084-10.86a3.955,3.955,0,0,0-3.531,0l-12.745,7.2c-.647.368-.829.886-.615,1.355a.932.932,0,0,1-.121-.345l.006,1.995,0,.023a.8.8,0,0,0,.014.141,1.185,1.185,0,0,0,.04.136.886.886,0,0,0,.066.139c.017.028.038.054.055.079l.014.02.032.048a1.171,1.171,0,0,0,.156.161,1.715,1.715,0,0,0,.315.229l.029.02,19.084,10.86a2.946,2.946,0,0,0,.546.235c.072.023.147.037.22.054l.119.028c.046.011.09.025.136.034.1.017.211.031.318.042s.185.014.277.017c.043,0,.09,0,.133,0h.121c.084,0,.165-.006.248-.014s.162-.014.243-.025.168-.025.248-.042l.078-.02.035-.008c.049-.011.1-.02.147-.034.1-.031.205-.062.3-.1a2.733,2.733,0,0,0,.358-.167l12.745-7.207A1.223,1.223,0,0,0,518.41,296.664ZM482.3,292.021a1.6,1.6,0,0,1-.532-.456l0,0A1.65,1.65,0,0,0,482.3,292.021Z" transform="translate(-254.136 -207.641)" fill="#211b26"/>
                            <path id="Path_713" data-name="Path 713" d="M486.657,286.957,475.8,293.1c-.65.368-.832.886-.618,1.355a.9.9,0,0,1-.119-.345l.006,1.995v.023a.567.567,0,0,0,.017.139.754.754,0,0,0,.038.139,1.5,1.5,0,0,0,.066.139l.055.079.015.02.032.048a1.646,1.646,0,0,0,.156.161,1.815,1.815,0,0,0,.315.229l.032.017,19.081,10.863a3.038,3.038,0,0,0,.546.235c.072.023.147.034.22.054l.121.028c.043.008.087.025.133.031.1.02.211.034.318.045s.185.014.277.017c.046,0,.09,0,.136,0h.032c.029,0,.058,0,.09,0,.081,0,.165-.008.246-.014s.162-.014.243-.025.167-.026.248-.042l.081-.02.035-.009.144-.034c.1-.031.205-.062.3-.1a2.786,2.786,0,0,0,.361-.167l10.858-6.143a1.236,1.236,0,0,0,.745-1.016L510,298.8l0,.006a1.2,1.2,0,0,0-.722-1L490.2,286.951A3.973,3.973,0,0,0,486.657,286.957ZM475.784,295.1a1.714,1.714,0,0,1-.534-.456l0-.006A1.67,1.67,0,0,0,475.784,295.1Z" transform="translate(-266.455 -200.066)" fill="#211b26"/>
                            <path id="Path_714" data-name="Path 714" d="M480.136,290.722l-10.861,6.14c-.647.365-.829.88-.618,1.35a.868.868,0,0,1-.119-.34l.006,1.995v.02a.749.749,0,0,0,.017.141.837.837,0,0,0,.04.139,1.022,1.022,0,0,0,.066.139c.014.025.035.051.052.079l.014.02.035.045a1.356,1.356,0,0,0,.153.164,1.82,1.82,0,0,0,.315.229l.032.017,19.084,10.86a2.708,2.708,0,0,0,.546.238c.069.02.147.034.22.054l.119.028c.043.009.087.023.133.031a2.962,2.962,0,0,0,.318.042c.092.011.185.017.277.02.046,0,.092,0,.136,0h.032c.029,0,.061,0,.09,0,.081,0,.165-.006.245-.011s.165-.017.243-.028.168-.025.248-.042l.081-.017.035-.008c.049-.011.1-.023.147-.037.1-.028.205-.062.3-.1a2.588,2.588,0,0,0,.358-.17l10.861-6.14a1.238,1.238,0,0,0,.742-1.016l-.006-1.995,0,0a1.2,1.2,0,0,0-.722-1l-19.081-10.86A3.973,3.973,0,0,0,480.136,290.722Zm-10.873,8.143a1.683,1.683,0,0,1-.535-.458l0,0A1.67,1.67,0,0,0,469.263,298.865Z" transform="translate(-278.776 -193.178)" fill="#211b26"/>
                            <path id="Path_715" data-name="Path 715" d="M485.365,315.484l10.861-6.14a1.23,1.23,0,0,0,.74-1.01l-.006-1.995,0,0a1.2,1.2,0,0,0-.725-1l-19.084-10.86a3.937,3.937,0,0,0-3.531,0l-10.861,6.14c-.659.371-.838.891-.615,1.364a.9.9,0,0,1-.124-.357l.006,1.995v.023a1.186,1.186,0,0,0,.017.139.852.852,0,0,0,.041.139,1.024,1.024,0,0,0,.066.139c.014.026.038.054.055.079l.014.02.032.045a1.345,1.345,0,0,0,.153.164,2.049,2.049,0,0,0,.321.232l.029.017,19.084,10.86a2.81,2.81,0,0,0,.549.238c.069.023.145.034.217.051l.118.031c.046.008.09.026.139.034.1.017.211.031.318.043.09.008.182.014.275.017.043,0,.087,0,.13,0h.035l.09,0c.084,0,.165-.008.246-.014s.162-.014.243-.026.165-.025.245-.042l.081-.02.035-.008.144-.034a2.53,2.53,0,0,0,.3-.1A2.367,2.367,0,0,0,485.365,315.484ZM462.744,302.63a1.735,1.735,0,0,1-.537-.461h0A1.671,1.671,0,0,0,462.744,302.63Z" transform="translate(-291.098 -186.29)" fill="#211b26"/>
                            <path id="Path_716" data-name="Path 716" d="M527.866,302.159l-.006-1.995,0,0a1.208,1.208,0,0,0-.722-1l-19.093-10.865a3.955,3.955,0,0,0-3.531,0l-12.745,7.2c-.647.368-.829.883-.615,1.355a.972.972,0,0,1-.122-.345l.006,1.995,0,.023a.741.741,0,0,0,.014.139.771.771,0,0,0,.041.139.991.991,0,0,0,.066.139l.055.079.014.02.032.048a1.153,1.153,0,0,0,.156.161,1.713,1.713,0,0,0,.315.229l.029.017,19.093,10.865a2.888,2.888,0,0,0,.54.235c.072.02.147.034.222.054l.119.028c.046.008.087.023.133.031.1.02.211.034.321.045q.139.013.277.017c.046,0,.09,0,.133,0h.035l.092,0c.081,0,.165-.008.248-.014a2.355,2.355,0,0,0,.243-.028c.084-.011.168-.025.248-.04l.075-.02.035-.009.15-.034q.156-.047.3-.1a2.531,2.531,0,0,0,.355-.167l12.745-7.2A1.232,1.232,0,0,0,527.866,302.159Zm-36.111-4.646a1.681,1.681,0,0,1-.534-.458v0A1.653,1.653,0,0,0,491.754,297.513Z" transform="translate(-236.282 -197.593)" fill="#211b26"/>
                            <path id="Path_717" data-name="Path 717" d="M496.107,292.449l-10.861,6.14c-.653.368-.832.886-.618,1.358a.91.91,0,0,1-.118-.348l.006,1.995v.02a.577.577,0,0,0,.017.142.818.818,0,0,0,.038.139,1.513,1.513,0,0,0,.066.139c.017.025.038.051.055.079l.015.02.032.045a1.665,1.665,0,0,0,.156.164,1.823,1.823,0,0,0,.315.229l.032.017,19.09,10.865a2.676,2.676,0,0,0,.543.232c.069.023.147.037.22.054l.119.031c.046.008.087.023.133.031a3.134,3.134,0,0,0,.321.043c.093.011.185.017.28.02h.165c.029,0,.061,0,.092,0,.084,0,.165-.006.248-.011s.162-.017.243-.028.168-.025.248-.042l.075-.017.035-.008c.052-.011.1-.023.153-.037.1-.028.2-.062.3-.1a2.731,2.731,0,0,0,.356-.167l10.861-6.14a1.228,1.228,0,0,0,.74-1.016l-.006-1.995h0v0a1.21,1.21,0,0,0-.719-1l-19.09-10.865A3.973,3.973,0,0,0,496.107,292.449Zm23.164,12.393c.04-.054.035-.116.061-.173-.026.057-.02.116-.058.173Zm-34.037-4.25a1.65,1.65,0,0,1-.534-.458l0,0A1.67,1.67,0,0,0,485.234,300.592Z" transform="translate(-248.601 -190.019)" fill="#211b26"/>
                            <path id="Path_718" data-name="Path 718" d="M489.586,296.212l-10.861,6.143c-.644.365-.826.877-.621,1.344a.881.881,0,0,1-.116-.337l.006,2v.02a.847.847,0,0,0,.058.277,1.016,1.016,0,0,0,.066.141c.014.025.035.051.052.076l.014.02.035.048a1.353,1.353,0,0,0,.153.164,2.173,2.173,0,0,0,.315.229l.032.017,19.09,10.865a2.84,2.84,0,0,0,.543.232c.069.023.147.037.22.054l.121.028c.043.011.087.025.133.034.1.017.211.034.318.042s.188.017.28.02h.257c.084,0,.167-.006.248-.014s.165-.014.245-.026.165-.025.249-.042l.075-.017.032-.009c.052-.011.1-.023.153-.037a3.077,3.077,0,0,0,.3-.1,2.764,2.764,0,0,0,.358-.167l10.858-6.143a1.229,1.229,0,0,0,.743-1.013l-.006-1.995,0,0a1.2,1.2,0,0,0-.72-1l-19.09-10.865A3.973,3.973,0,0,0,489.586,296.212Zm-10.873,8.146a1.684,1.684,0,0,1-.535-.458l0,0A1.666,1.666,0,0,0,478.713,304.358Z" transform="translate(-260.921 -183.131)" fill="#211b26"/>
                            <path id="Path_719" data-name="Path 719" d="M494.824,320.979l10.861-6.14a1.225,1.225,0,0,0,.737-1.007l-.006-1.995h0a1.212,1.212,0,0,0-.722-1L486.6,299.976a3.954,3.954,0,0,0-3.531,0l-10.861,6.14c-.659.374-.838.9-.615,1.372a.948.948,0,0,1-.124-.362l.006,1.995v.023a1.145,1.145,0,0,0,.017.139.893.893,0,0,0,.041.139.954.954,0,0,0,.066.136.821.821,0,0,0,.055.082l.014.02.032.045a1.365,1.365,0,0,0,.153.164,2.011,2.011,0,0,0,.318.229l.032.02,19.09,10.863a2.85,2.85,0,0,0,.546.235c.069.023.145.037.217.054l.121.028c.046.011.09.025.136.034.107.02.211.034.321.045q.139.013.277.017h.159c.032,0,.063,0,.1,0,.081,0,.162-.006.246-.011s.162-.017.243-.028.165-.025.246-.04l.078-.02.032-.008c.052-.011.1-.023.15-.037.1-.028.205-.062.3-.1A2.459,2.459,0,0,0,494.824,320.979Zm-22.63-12.86a1.677,1.677,0,0,1-.534-.455l0-.006A1.637,1.637,0,0,0,472.194,308.119Z" transform="translate(-273.244 -176.242)" fill="#211b26"/>
                            <path id="Path_720" data-name="Path 720" d="M537.315,307.651l-.006-1.995h0l0,0a1.213,1.213,0,0,0-.725-1L517.5,293.8a3.973,3.973,0,0,0-3.539-.006L501.212,301c-.642.362-.82.877-.615,1.347a.914.914,0,0,1-.116-.339l.006,1.995v.023a.608.608,0,0,0,.017.141.858.858,0,0,0,.04.139.879.879,0,0,0,.067.139.482.482,0,0,0,.055.079l.011.02.035.048a1.656,1.656,0,0,0,.156.164,2.027,2.027,0,0,0,.318.232l.029.017,19.084,10.86a2.879,2.879,0,0,0,.546.235c.069.023.147.037.22.054l.119.028c.046.011.087.025.133.034.107.017.211.031.318.043s.185.014.277.02h.257c.084,0,.165-.006.246-.014s.165-.014.246-.026.165-.025.246-.042l.081-.02.035-.008c.049-.011.1-.02.147-.034a2.707,2.707,0,0,0,.3-.1,2.939,2.939,0,0,0,.358-.167l12.745-7.207A1.223,1.223,0,0,0,537.315,307.651Zm-36.106-4.643a1.693,1.693,0,0,1-.537-.458v0A1.633,1.633,0,0,0,501.209,303.008Zm35.97,3.025c-.026.054-.02.108-.055.158l0,0C537.159,306.143,537.153,306.087,537.179,306.033Z" transform="translate(-218.424 -187.545)" fill="#211b26"/>
                            <path id="Path_721" data-name="Path 721" d="M505.552,297.94l-10.858,6.14c-.647.365-.823.88-.615,1.35a.881.881,0,0,1-.118-.342l.006,1.995v.02a1.161,1.161,0,0,0,.017.141.768.768,0,0,0,.041.139.911.911,0,0,0,.066.142l.055.079.015.02.032.048a1.65,1.65,0,0,0,.156.164,1.835,1.835,0,0,0,.318.229l.029.017,19.084,10.862a2.951,2.951,0,0,0,.546.235c.072.023.147.034.22.054.04.009.078.02.118.028s.09.025.136.031c.1.02.211.034.318.045.089.008.185.014.277.017.043,0,.09,0,.133,0l.035,0a.864.864,0,0,1,.087,0c.084,0,.165-.009.249-.014s.162-.014.243-.025.165-.025.249-.043l.078-.02.035-.008.147-.034c.1-.031.205-.062.3-.1a2.752,2.752,0,0,0,.358-.167L528.17,312.8a1.227,1.227,0,0,0,.743-1.013l-.006-2v.006a1.205,1.205,0,0,0-.722-1L509.1,297.94A3.973,3.973,0,0,0,505.552,297.94Zm-10.864,8.146a1.681,1.681,0,0,1-.535-.458l0,0A1.7,1.7,0,0,0,494.688,306.087Z" transform="translate(-230.744 -179.971)" fill="#211b26"/>
                            <path id="Path_722" data-name="Path 722" d="M499.034,301.7l-10.861,6.14c-.656.371-.832.9-.607,1.375a.921.921,0,0,1-.127-.368l.006,2v.02a1.111,1.111,0,0,0,.017.141.771.771,0,0,0,.041.139,1.244,1.244,0,0,0,.067.141l.055.079.014.02.035.048a1.371,1.371,0,0,0,.153.164,2.015,2.015,0,0,0,.318.229l.032.017,19.081,10.86a2.863,2.863,0,0,0,.546.238c.072.02.147.034.223.054.04.009.075.02.119.028s.087.023.133.031c.1.02.211.034.318.045s.185.014.277.017h.168c.029,0,.058,0,.089,0,.081,0,.165-.006.246-.011s.162-.017.243-.028.168-.026.248-.042l.081-.017.035-.008c.049-.011.1-.023.144-.037.1-.028.205-.062.3-.1a2.467,2.467,0,0,0,.361-.17l10.858-6.14a1.236,1.236,0,0,0,.746-1.016l-.006-1.995,0,.006a1.209,1.209,0,0,0-.722-1L502.582,301.7A3.991,3.991,0,0,0,499.034,301.7Zm-10.864,8.149a1.671,1.671,0,0,1-.537-.461h0A1.683,1.683,0,0,0,488.17,309.852Z" transform="translate(-243.065 -173.083)" fill="#211b26"/>
                            <path id="Path_723" data-name="Path 723" d="M504.27,326.471l10.861-6.14a1.23,1.23,0,0,0,.74-1.01l-.006-1.995,0,0a1.209,1.209,0,0,0-.725-1L496.052,305.47a3.972,3.972,0,0,0-3.539,0l-10.861,6.14c-.647.368-.826.88-.615,1.35a.884.884,0,0,1-.119-.342l.006,1.995v.023a.756.756,0,0,0,.014.139,1.1,1.1,0,0,0,.04.139,1.079,1.079,0,0,0,.069.141.643.643,0,0,0,.055.079l.015.02.032.048a1.371,1.371,0,0,0,.156.164,2.019,2.019,0,0,0,.318.232l.032.017,19.081,10.86a2.909,2.909,0,0,0,.552.238c.069.023.144.034.217.051l.119.031c.046.009.089.025.139.034.1.017.208.031.318.042.09.009.182.014.275.017.043,0,.087,0,.13,0h.124c.081,0,.165-.006.246-.014s.162-.014.24-.026.168-.025.248-.042l.081-.02.035-.008c.049-.011.1-.02.145-.034a2.706,2.706,0,0,0,.3-.1A2.667,2.667,0,0,0,504.27,326.471Zm-22.621-12.855a1.713,1.713,0,0,1-.54-.461h0A1.717,1.717,0,0,0,481.649,313.616Z" transform="translate(-255.385 -166.194)" fill="#211b26"/>
                            <path id="Path_724" data-name="Path 724" d="M546.766,313.144l-.006-1.995v0a1.215,1.215,0,0,0-.725-1l-19.09-10.863a3.954,3.954,0,0,0-3.531,0l-12.745,7.2c-.653.371-.835.891-.615,1.364a.889.889,0,0,1-.121-.354l.006,1.995v.023a1.148,1.148,0,0,0,.017.139.749.749,0,0,0,.04.139.868.868,0,0,0,.066.139.485.485,0,0,0,.055.079l.012.02.035.048a1.348,1.348,0,0,0,.153.161,1.851,1.851,0,0,0,.318.229l.029.017,19.09,10.865a2.924,2.924,0,0,0,.543.235c.072.023.147.034.22.054l.121.028c.043.008.087.023.133.031.1.02.211.034.318.045s.188.014.28.017c.043,0,.09,0,.133,0h.032l.092,0c.084,0,.167-.009.248-.014s.165-.014.246-.025l.248-.042.075-.02.035-.008c.049-.011.1-.02.15-.034a3.069,3.069,0,0,0,.3-.1,2.76,2.76,0,0,0,.358-.167l12.742-7.2A1.22,1.22,0,0,0,546.766,313.144ZM510.657,308.5a1.684,1.684,0,0,1-.535-.458l0,0A1.668,1.668,0,0,0,510.657,308.5Z" transform="translate(-200.567 -177.496)" fill="#211b26"/>
                            <path id="Path_725" data-name="Path 725" d="M515.009,303.434l-10.861,6.14c-.647.368-.829.883-.615,1.355a.968.968,0,0,1-.121-.345l.006,1.995,0,.023a.748.748,0,0,0,.015.139,1.268,1.268,0,0,0,.04.139,1,1,0,0,0,.066.139c.017.026.038.051.055.079l.014.02.032.045a1.353,1.353,0,0,0,.153.164,1.847,1.847,0,0,0,.318.229l.029.017,19.093,10.865a2.713,2.713,0,0,0,.54.232c.072.023.147.037.222.054l.118.031c.046.008.087.023.133.031a2.94,2.94,0,0,0,.321.042c.093.011.185.017.277.02h.165c.032,0,.064,0,.1,0,.081,0,.165-.006.248-.011s.162-.017.243-.028.168-.025.248-.043l.075-.017.035-.009c.049-.011.1-.023.15-.037.1-.028.205-.062.3-.1a2.9,2.9,0,0,0,.355-.167l10.861-6.14a1.228,1.228,0,0,0,.74-1.016l-.006-1.995v0a1.209,1.209,0,0,0-.719-1l-19.093-10.865A3.973,3.973,0,0,0,515.009,303.434Zm-10.873,8.143a1.68,1.68,0,0,1-.534-.458v0A1.655,1.655,0,0,0,504.136,311.577Z" transform="translate(-212.888 -169.921)" fill="#211b26"/>
                            <path id="Path_726" data-name="Path 726" d="M508.486,307.2l-10.858,6.143c-.647.365-.829.88-.621,1.35a.927.927,0,0,1-.116-.342l.006,2v.02a.594.594,0,0,0,.017.142.8.8,0,0,0,.038.136,1.539,1.539,0,0,0,.066.141c.017.025.038.051.055.076l.014.02.032.048a1.644,1.644,0,0,0,.156.164,2.177,2.177,0,0,0,.315.229l.032.017,19.09,10.866a2.841,2.841,0,0,0,.543.232c.069.023.147.037.22.054l.118.028c.046.011.087.025.133.034.107.017.214.034.321.042s.185.017.28.02h.257c.084,0,.165-.006.248-.011s.162-.017.243-.028.168-.025.248-.042l.075-.017.035-.008c.052-.011.1-.023.15-.037.1-.028.205-.062.3-.1a2.724,2.724,0,0,0,.355-.167l10.861-6.14a1.232,1.232,0,0,0,.74-1.016l-.006-1.995v0a1.2,1.2,0,0,0-.719-1l-19.09-10.865A3.98,3.98,0,0,0,508.486,307.2Zm-10.87,8.146a1.651,1.651,0,0,1-.535-.458l0,0A1.668,1.668,0,0,0,497.616,315.343Z" transform="translate(-225.206 -163.034)" fill="#211b26"/>
                            <path id="Path_727" data-name="Path 727" d="M513.724,331.965l10.861-6.14a1.214,1.214,0,0,0,.737-1.007l-.006-1.995v0a1.215,1.215,0,0,0-.725-1L505.5,310.961a3.954,3.954,0,0,0-3.531,0l-10.861,6.14c-.656.371-.835.888-.618,1.358a.867.867,0,0,1-.121-.348l.006,1.995v.023a.752.752,0,0,0,.017.139.793.793,0,0,0,.04.136.667.667,0,0,0,.066.139.7.7,0,0,0,.055.082l.014.02.029.045a1.658,1.658,0,0,0,.156.164,1.851,1.851,0,0,0,.318.229l.032.02,19.09,10.863a2.77,2.77,0,0,0,.546.235c.069.023.144.037.217.054l.121.028c.046.011.089.025.136.034.1.02.211.034.321.045q.134.013.277.017h.159c.032,0,.064,0,.1,0,.084,0,.165-.006.246-.011a2.182,2.182,0,0,0,.243-.028c.084-.011.168-.025.248-.04l.075-.02.035-.009.15-.034q.156-.047.3-.1A2.433,2.433,0,0,0,513.724,331.965ZM491.1,319.1a1.66,1.66,0,0,1-.537-.456v0A1.665,1.665,0,0,0,491.1,319.1Z" transform="translate(-237.529 -156.145)" fill="#211b26"/>
                            <path id="Path_728" data-name="Path 728" d="M556.215,318.636l-.005-1.995v0a1.212,1.212,0,0,0-.728-1L536.4,304.786a3.973,3.973,0,0,0-3.54-.006l-12.745,7.207c-.647.365-.826.883-.613,1.355a.906.906,0,0,1-.118-.348l.006,1.995v.023a.822.822,0,0,0,.014.141,1.294,1.294,0,0,0,.041.139,1.026,1.026,0,0,0,.069.139.753.753,0,0,0,.052.079l.015.02.035.048a1.178,1.178,0,0,0,.156.164,1.822,1.822,0,0,0,.315.229l.032.02L539.2,326.85a2.973,2.973,0,0,0,.549.235c.069.023.144.037.219.054.04.011.078.02.118.028s.087.026.133.034c.1.017.211.031.318.042s.185.014.277.02h.257c.081,0,.165-.006.245-.014s.165-.014.243-.025.168-.025.248-.043l.081-.02.035-.008c.049-.011.1-.02.147-.034a3.137,3.137,0,0,0,.3-.1,3.233,3.233,0,0,0,.361-.17l12.742-7.207A1.217,1.217,0,0,0,556.215,318.636Zm-36.1-4.64a1.667,1.667,0,0,1-.537-.461v0A1.672,1.672,0,0,0,520.112,314Z" transform="translate(-182.709 -167.448)" fill="#211b26"/>
                            <path id="Path_729" data-name="Path 729" d="M524.455,308.925l-10.861,6.14c-.647.365-.826.886-.61,1.358a.875.875,0,0,1-.122-.351l.006,1.995v.023a.574.574,0,0,0,.017.139.9.9,0,0,0,.041.141.987.987,0,0,0,.066.139.494.494,0,0,0,.055.079l.012.02.034.048a1.656,1.656,0,0,0,.156.164,1.749,1.749,0,0,0,.318.229l.029.02,19.084,10.86a2.873,2.873,0,0,0,.546.235c.069.023.147.034.22.054.04.009.078.02.119.028s.087.026.133.034c.107.017.211.031.318.043s.185.014.277.017c.046,0,.093,0,.136,0h.121c.084,0,.165-.008.245-.014s.165-.014.246-.026.165-.025.246-.042l.081-.02.035-.008.147-.034c.1-.031.205-.062.3-.1a2.929,2.929,0,0,0,.358-.167l10.861-6.143a1.238,1.238,0,0,0,.743-1.013l-.006-2,0,.006a1.2,1.2,0,0,0-.719-1L528,308.925A3.974,3.974,0,0,0,524.455,308.925Zm-10.864,8.146a1.7,1.7,0,0,1-.537-.458v0A1.671,1.671,0,0,0,513.591,317.071Z" transform="translate(-195.029 -159.873)" fill="#211b26"/>
                            <path id="Path_730" data-name="Path 730" d="M517.937,312.688l-10.861,6.14c-.656.371-.835.9-.61,1.375a.957.957,0,0,1-.124-.368l.006,2v.02a1.1,1.1,0,0,0,.017.142.77.77,0,0,0,.041.139,1.039,1.039,0,0,0,.066.142c.017.025.038.051.055.079l.015.02.032.048a1.643,1.643,0,0,0,.156.164,2.008,2.008,0,0,0,.318.229l.029.017,19.084,10.86a2.784,2.784,0,0,0,.546.238c.072.02.147.034.22.054l.119.028c.046.009.09.023.136.031.1.02.211.034.318.045s.185.014.277.017c.043,0,.09,0,.133,0h.035a.865.865,0,0,0,.087,0c.084,0,.165-.006.248-.011s.162-.017.243-.028.165-.025.248-.04l.078-.02.038-.008c.046-.011.1-.023.144-.037.1-.028.205-.062.3-.1a2.441,2.441,0,0,0,.358-.17l10.861-6.14a1.226,1.226,0,0,0,.743-1.016l-.006-1.995v.006a1.213,1.213,0,0,0-.722-1l-19.084-10.86A3.985,3.985,0,0,0,517.937,312.688Zm-10.867,8.149a1.718,1.718,0,0,1-.535-.458l0,0A1.7,1.7,0,0,0,507.07,320.837Z" transform="translate(-207.35 -152.985)" fill="#211b26"/>
                            <path id="Path_731" data-name="Path 731" d="M523.172,337.455l10.861-6.14a1.224,1.224,0,0,0,.74-1.007l-.006-2v0a1.208,1.208,0,0,0-.728-1l-19.081-10.86a3.964,3.964,0,0,0-3.539-.006l-10.861,6.14c-.65.368-.826.88-.618,1.35a.933.933,0,0,1-.118-.342l.006,1.995v.023a1.155,1.155,0,0,0,.017.139.773.773,0,0,0,.041.139,1.035,1.035,0,0,0,.066.141c.017.025.038.054.058.079l.012.02.032.048a1.637,1.637,0,0,0,.156.164,2.2,2.2,0,0,0,.321.232l.032.017,19.081,10.86a2.827,2.827,0,0,0,.552.238c.069.023.144.034.214.054l.121.028c.046.008.09.025.136.034.1.017.211.031.318.042s.185.014.277.017c.043,0,.087,0,.13,0h.124c.081,0,.162-.006.243-.014s.162-.014.243-.025.165-.026.245-.042l.081-.02.037-.009c.046-.011.1-.02.144-.034a2.742,2.742,0,0,0,.3-.1A2.473,2.473,0,0,0,523.172,337.455ZM500.554,324.6a1.683,1.683,0,0,1-.54-.461h0A1.683,1.683,0,0,0,500.554,324.6Zm34.028,4.247c.041-.057.035-.122.064-.181-.029.059-.02.122-.061.181Z" transform="translate(-219.673 -146.096)" fill="#211b26"/>
                            <path id="Path_732" data-name="Path 732" d="M565.669,324.132l-.006-1.995h0a1.219,1.219,0,0,0-.731-1l-19.081-10.86a3.961,3.961,0,0,0-3.534,0l-12.742,7.2c-.65.368-.832.888-.618,1.361a.92.92,0,0,1-.118-.351l.006,1.995v.023a.559.559,0,0,0,.017.139.762.762,0,0,0,.04.139.673.673,0,0,0,.066.139.759.759,0,0,0,.052.079l.014.02.032.048a1.625,1.625,0,0,0,.156.161,1.809,1.809,0,0,0,.315.229l.032.02,19.081,10.86a2.973,2.973,0,0,0,.549.235c.072.023.147.037.22.054.04.011.078.02.121.028s.09.025.136.034c.1.02.214.034.321.045s.185.014.28.017c.043,0,.087,0,.127,0h.035c.032,0,.064,0,.1,0,.084,0,.165-.006.248-.011s.162-.017.243-.026l.248-.042.072-.02.035-.008.153-.034a3.083,3.083,0,0,0,.3-.1,2.25,2.25,0,0,0,.355-.167l12.745-7.2A1.225,1.225,0,0,0,565.669,324.132Zm-36.108-4.649a1.682,1.682,0,0,1-.535-.458l0,0A1.668,1.668,0,0,0,529.56,319.483Z" transform="translate(-164.852 -157.398)" fill="#211b26"/>
                            <path id="Path_733" data-name="Path 733" d="M533.912,314.419l-10.861,6.14c-.65.368-.832.888-.615,1.358a.865.865,0,0,1-.121-.348l.006,1.995v.023a1.124,1.124,0,0,0,.017.139.76.76,0,0,0,.04.139.978.978,0,0,0,.067.139.631.631,0,0,0,.055.079l.012.02.035.045a1.341,1.341,0,0,0,.153.164,1.844,1.844,0,0,0,.318.229l.029.017,19.084,10.86a2.664,2.664,0,0,0,.549.238c.069.023.145.034.217.054.04.008.081.02.121.028s.09.025.136.034c.107.017.214.034.321.042s.188.017.28.02h.257c.084,0,.167-.006.248-.011s.165-.017.243-.028.168-.025.248-.042l.075-.017.032-.009c.052-.011.1-.023.153-.037a3.112,3.112,0,0,0,.3-.1,2.75,2.75,0,0,0,.358-.167l10.858-6.14a1.238,1.238,0,0,0,.743-1.013l-.006-2,0,.006a1.217,1.217,0,0,0-.725-1l-19.084-10.86A3.973,3.973,0,0,0,533.912,314.419Zm-10.873,8.143a1.679,1.679,0,0,1-.534-.458l0,0A1.669,1.669,0,0,0,523.039,322.562Z" transform="translate(-177.173 -149.824)" fill="#211b26"/>
                            <path id="Path_734" data-name="Path 734" d="M527.391,318.184l-10.861,6.14c-.644.365-.826.88-.618,1.35a.993.993,0,0,1-.118-.342l.006,2,0,.02a.772.772,0,0,0,.015.141.929.929,0,0,0,.041.139.98.98,0,0,0,.066.139c.014.025.038.051.055.076l.014.02.032.048a1.335,1.335,0,0,0,.153.164,2,2,0,0,0,.318.229l.029.017,19.084,10.86a2.8,2.8,0,0,0,.549.238c.069.02.144.034.217.051.043.011.081.023.121.031s.09.025.139.034q.156.025.321.042c.093.008.185.014.277.02h.26c.081,0,.165-.006.246-.014s.165-.014.246-.025.165-.026.245-.042l.075-.017.035-.009c.049-.011.1-.023.15-.037.1-.028.205-.062.3-.1a2.868,2.868,0,0,0,.355-.167l10.861-6.14a1.234,1.234,0,0,0,.74-1.016l-.006-1.995,0,0a1.212,1.212,0,0,0-.725-1l-19.084-10.86A3.964,3.964,0,0,0,527.391,318.184Zm-10.873,8.143a1.682,1.682,0,0,1-.535-.458v0A1.656,1.656,0,0,0,516.518,326.328Z" transform="translate(-189.494 -142.937)" fill="#211b26"/>
                            <path id="Path_735" data-name="Path 735" d="M544.225,335.8l-.006-2v0a1.232,1.232,0,0,0-.734-1L524.4,321.946a3.955,3.955,0,0,0-3.531,0l-10.861,6.14c-.659.374-.838.894-.618,1.364a.877.877,0,0,1-.121-.354l.006,1.995v.023a.758.758,0,0,0,.015.139,1.2,1.2,0,0,0,.04.136,1.209,1.209,0,0,0,.066.139.843.843,0,0,0,.058.082l.012.02.032.045a1.367,1.367,0,0,0,.156.164,1.851,1.851,0,0,0,.318.229l.032.02,19.081,10.86a2.821,2.821,0,0,0,.552.238c.069.023.144.034.214.051l.124.031c.046.011.09.025.139.034a3.136,3.136,0,0,0,.321.042c.092.011.185.017.277.02h.159c.032,0,.064,0,.1,0,.081,0,.165-.006.246-.011s.162-.017.243-.028.165-.026.246-.04l.075-.02.035-.008c.049-.011.1-.023.15-.037.1-.028.205-.062.3-.1a2.442,2.442,0,0,0,.358-.17l10.861-6.14A1.225,1.225,0,0,0,544.225,335.8ZM510,330.092a1.7,1.7,0,0,1-.537-.458l0,0A1.719,1.719,0,0,0,510,330.092Z" transform="translate(-201.814 -136.048)" fill="#211b26"/>
                            <path id="Path_736" data-name="Path 736" d="M575.12,329.622l-.006-1.995v0a1.217,1.217,0,0,0-.728-1L555.3,315.766a3.979,3.979,0,0,0-3.534,0l-12.742,7.207c-.65.368-.826.886-.615,1.355a.89.89,0,0,1-.119-.348l.006,2V326a.748.748,0,0,0,.017.141.782.782,0,0,0,.04.139,1.065,1.065,0,0,0,.067.142c.014.025.035.051.052.076l.014.02.035.048a1.319,1.319,0,0,0,.153.164,2.077,2.077,0,0,0,.312.226l.032.017,19.09,10.865a3.041,3.041,0,0,0,.546.235c.072.023.147.037.219.054l.121.028c.043.011.087.025.133.034a2.98,2.98,0,0,0,.318.042c.093.008.185.014.278.02h.254c.084,0,.165-.006.248-.014s.162-.014.243-.026.168-.025.248-.042l.081-.02.035-.008c.046-.011.1-.02.144-.034.1-.028.205-.062.3-.1a2.96,2.96,0,0,0,.358-.17l12.745-7.2A1.231,1.231,0,0,0,575.12,329.622Zm-36.111-4.646a1.661,1.661,0,0,1-.532-.455l0,0A1.682,1.682,0,0,0,539.008,324.976Z" transform="translate(-146.996 -147.351)" fill="#211b26"/>
                            <path id="Path_737" data-name="Path 737" d="M543.36,319.911l-10.861,6.14c-.647.365-.823.88-.615,1.35a.882.882,0,0,1-.119-.342l.006,1.995v.023a1.1,1.1,0,0,0,.017.141.752.752,0,0,0,.04.139,1.08,1.08,0,0,0,.067.142.66.66,0,0,0,.055.076l.012.02.034.048a1.348,1.348,0,0,0,.153.164,1.969,1.969,0,0,0,.315.226l.029.017,19.09,10.865a2.973,2.973,0,0,0,.549.235c.069.023.147.034.22.054l.119.028c.043.011.087.025.133.034.1.017.211.031.318.042s.185.014.277.017c.046,0,.09,0,.136,0h.121c.081,0,.165-.006.246-.014s.162-.014.243-.025.168-.025.248-.042l.081-.02.035-.008c.049-.011.1-.02.145-.034a2.939,2.939,0,0,0,.3-.1,2.811,2.811,0,0,0,.361-.167l10.861-6.14a1.245,1.245,0,0,0,.742-1.016l-.006-2,0,.009a1.2,1.2,0,0,0-.722-1L546.9,319.905A3.973,3.973,0,0,0,543.36,319.911Zm-10.873,8.143a1.668,1.668,0,0,1-.532-.458v0A1.644,1.644,0,0,0,532.487,328.054Z" transform="translate(-159.317 -139.776)" fill="#211b26"/>
                            <path id="Path_738" data-name="Path 738" d="M560.2,337.521l-.006-1.995,0,.006a1.208,1.208,0,0,0-.719-1L540.378,323.67a3.982,3.982,0,0,0-3.539,0l-10.861,6.143c-.647.365-.826.883-.612,1.355a.962.962,0,0,1-.121-.348l.006,1.995,0,.023a.788.788,0,0,0,.014.141.906.906,0,0,0,.107.277c.017.025.038.051.055.079l.014.017.032.051a1.379,1.379,0,0,0,.156.161,1.793,1.793,0,0,0,.312.229l.029.017,19.093,10.862a2.7,2.7,0,0,0,.546.238c.069.023.147.034.22.054.04.009.078.02.118.028s.087.023.133.031c.1.02.211.034.318.045s.185.014.277.017c.046,0,.092,0,.136,0h.032c.032,0,.061,0,.09,0,.084,0,.165-.008.246-.014s.165-.017.246-.025.165-.028.246-.042l.081-.02.035-.008c.049-.011.1-.023.147-.037.1-.028.205-.062.3-.1a2.577,2.577,0,0,0,.358-.17l10.861-6.14A1.232,1.232,0,0,0,560.2,337.521Zm-34.233-5.7a1.619,1.619,0,0,1-.529-.456l0,0A1.607,1.607,0,0,0,525.966,331.817Z" transform="translate(-171.637 -132.888)" fill="#211b26"/>
                            <path id="Path_739" data-name="Path 739" d="M553.676,341.293l-.006-2v0a1.217,1.217,0,0,0-.728-1l-19.09-10.865a3.969,3.969,0,0,0-3.534,0l-10.858,6.14c-.662.374-.838.9-.613,1.372a.888.888,0,0,1-.124-.362l.006,1.995v.02a.765.765,0,0,0,.014.142,1.261,1.261,0,0,0,.041.139,1.01,1.01,0,0,0,.069.139.8.8,0,0,0,.052.079l.015.02.032.048a1.373,1.373,0,0,0,.156.161,1.813,1.813,0,0,0,.315.229l.032.017,19.09,10.865a2.8,2.8,0,0,0,.549.238c.069.023.144.034.217.054l.118.028c.046.009.093.025.139.034.1.017.211.031.318.042s.182.014.275.017c.043,0,.087,0,.133,0h.121c.084,0,.165-.006.246-.014s.162-.014.243-.025.165-.025.246-.042l.081-.02.034-.008c.049-.011.1-.02.144-.034a2.582,2.582,0,0,0,.306-.1,2.474,2.474,0,0,0,.361-.17l10.861-6.14A1.231,1.231,0,0,0,553.676,341.293Zm-34.228-5.713a1.679,1.679,0,0,1-.534-.456v0A1.623,1.623,0,0,0,519.448,335.581Z" transform="translate(-183.958 -125.999)" fill="#211b26"/>
                            <path id="Path_740" data-name="Path 740" d="M548.469,332.466,562.9,340.68a2.843,2.843,0,0,0,.546.235c.072.023.147.037.22.054l.121.031c.043.009.087.023.133.031.1.02.211.034.318.045s.185.014.277.017c.043,0,.09,0,.136,0h.032c.029,0,.058,0,.09,0,.081,0,.165-.006.245-.011s.162-.017.243-.028.168-.025.248-.042l.081-.017.035-.008c.049-.011.1-.023.145-.037.1-.028.205-.062.3-.1a2.3,2.3,0,0,0,.358-.17l10.48-5.922a2.8,2.8,0,0,0,1.684-2.3l-.006-2,0,.008a2.754,2.754,0,0,0-1.647-2.269l-12.2-6.938a3.955,3.955,0,0,0-3.531,0l-12.745,7.2c-.647.368-.829.886-.615,1.355a.878.878,0,0,1-.118-.345l.006,1.995v.023a.749.749,0,0,0,.014.139,1.1,1.1,0,0,0,.04.139,1.246,1.246,0,0,0,.066.139c.017.028.038.054.055.079l.014.02.032.048a1.359,1.359,0,0,0,.156.161,1.822,1.822,0,0,0,.315.229Zm-.006-2a1.615,1.615,0,0,1-.535-.456l0-.006A1.67,1.67,0,0,0,548.463,330.468Z" transform="translate(-129.138 -137.301)" fill="#211b26"/>
                            <path id="Path_741" data-name="Path 741" d="M541.948,335.542l14.435,8.217a2.8,2.8,0,0,0,.549.235c.069.023.147.037.22.054l.119.028c.043.011.087.025.133.034.1.017.211.034.318.042s.185.017.278.02h.257c.081,0,.165-.006.245-.014s.162-.014.243-.025.167-.025.248-.042l.081-.02.035-.009c.049-.011.1-.02.147-.034a3.126,3.126,0,0,0,.3-.1,3.246,3.246,0,0,0,.361-.17l10.861-6.14a1.238,1.238,0,0,0,.743-1.016l-.006-1.995,0,.006a1.2,1.2,0,0,0-.722-1L556.354,325.4a3.973,3.973,0,0,0-3.539.006l-10.861,6.14c-.65.368-.832.888-.618,1.358a.908.908,0,0,1-.118-.348l.006,1.995v.023a.577.577,0,0,0,.017.139.828.828,0,0,0,.041.139.988.988,0,0,0,.066.139c.015.025.035.051.052.079l.014.02.032.048a2.034,2.034,0,0,0,.156.161,1.816,1.816,0,0,0,.315.229Zm-.006-1.995a1.677,1.677,0,0,1-.534-.458l0,0A1.664,1.664,0,0,0,541.942,333.547Z" transform="translate(-141.458 -129.727)" fill="#211b26"/>
                            <path id="Path_742" data-name="Path 742" d="M535.427,339.308l14.438,8.217a2.871,2.871,0,0,0,.546.235c.069.023.147.037.22.054.04.008.078.02.119.028s.087.025.133.034c.107.017.211.031.321.042.089.009.182.014.274.017.046,0,.093,0,.136,0h.121c.084,0,.165-.006.246-.014s.165-.014.246-.025.165-.025.246-.042l.081-.02.035-.008.147-.034c.1-.031.205-.062.3-.1a2.765,2.765,0,0,0,.358-.167l10.861-6.14a1.24,1.24,0,0,0,.743-1.016l-.006-1.995v.006a1.212,1.212,0,0,0-.722-1l-14.438-8.217a3.964,3.964,0,0,0-3.539.006l-10.861,6.14c-.647.365-.829.88-.618,1.35a.867.867,0,0,1-.119-.342l.006,2v.02a1.126,1.126,0,0,0,.017.142.832.832,0,0,0,.041.139.974.974,0,0,0,.066.139.952.952,0,0,0,.055.079l.011.017.035.048a1.351,1.351,0,0,0,.153.164,2,2,0,0,0,.318.229Zm-.006-1.995a1.679,1.679,0,0,1-.534-.458l0,0A1.671,1.671,0,0,0,535.421,337.313Z" transform="translate(-153.779 -122.839)" fill="#211b26"/>
                            <path id="Path_743" data-name="Path 743" d="M528.908,343.072l14.438,8.217a2.921,2.921,0,0,0,.552.235c.066.023.141.037.214.054l.118.028c.046.011.093.025.139.034a2.968,2.968,0,0,0,.318.042c.093.011.182.017.275.02h.254c.084,0,.165-.006.245-.011s.162-.017.243-.028.164-.026.245-.042l.081-.017.035-.008c.049-.011.1-.023.144-.037.107-.028.208-.062.306-.1a3.243,3.243,0,0,0,.361-.17l10.861-6.143a1.223,1.223,0,0,0,.74-1.007l-.006-1.995v0a1.217,1.217,0,0,0-.728-1l-14.438-8.217a3.955,3.955,0,0,0-3.531,0l-10.861,6.143c-.656.371-.835.891-.615,1.364a.91.91,0,0,1-.124-.357l.006,1.995v.023a1.121,1.121,0,0,0,.017.139.825.825,0,0,0,.04.139,1.241,1.241,0,0,0,.066.139c.015.026.038.054.055.079l.014.02.032.045a1.33,1.33,0,0,0,.153.164,1.879,1.879,0,0,0,.321.229Zm-.006-1.995a1.715,1.715,0,0,1-.535-.458l0,0A1.7,1.7,0,0,0,528.9,341.077Z" transform="translate(-166.101 -115.95)" fill="#211b26"/>
                            <path id="Path_744" data-name="Path 744" d="M402.862,283.554l.006,1.995,0,.048a1.966,1.966,0,0,0,.035.32,1.61,1.61,0,0,0,.061.2l.017.062.014.051a2.258,2.258,0,0,0,.153.317c.029.051.069.1.1.15l.064.09a1.019,1.019,0,0,0,.063.091,3.211,3.211,0,0,0,.35.371l.038.026a4.259,4.259,0,0,0,.4.286c.1.071.176.144.283.209l.069.04,12.979,7.385a2.949,2.949,0,0,0,.546.235c.072.023.147.037.22.054l.121.028c.043.011.087.026.13.034.1.017.211.031.318.042s.185.014.277.017c.046,0,.092,0,.139,0h.118c.081,0,.165-.006.246-.014s.162-.014.243-.025.168-.025.248-.042l.087-.02.035-.009.142-.034c.107-.031.208-.065.306-.1a2.686,2.686,0,0,0,.364-.173l12.736-7.2a1.223,1.223,0,0,0,.74-1.007l-.006-1.995v0a1.217,1.217,0,0,0-.728-1l-15.221-8.661a3.955,3.955,0,0,0-3.531,0l-10.48,5.922c-1.274.721-1.8,1.7-1.624,2.64A1.958,1.958,0,0,1,402.862,283.554Zm1.28,2c.124.085.228.175.367.255a3.939,3.939,0,0,1-.35-.243Zm-.838-.772a3.438,3.438,0,0,0,.327.356,3.594,3.594,0,0,1-.321-.348Zm-.329-.611a2.276,2.276,0,0,0,.176.342,2.416,2.416,0,0,1-.173-.331Z" transform="translate(-402.862 -221.334)" fill="#211b26"/>
                            <path id="Path_745" data-name="Path 745" d="M452.643,290.135l-.006-1.995v0a1.225,1.225,0,0,0-.731-1l-19.084-10.86a3.954,3.954,0,0,0-3.531,0l-10.861,6.14c-.653.371-.832.883-.621,1.353a.884.884,0,0,1-.119-.342l.006,1.995v.02a1.2,1.2,0,0,0,.017.142.8.8,0,0,0,.04.136.873.873,0,0,0,.066.139.68.68,0,0,0,.055.082l.014.02.032.045a1.358,1.358,0,0,0,.153.164,2.01,2.01,0,0,0,.318.229l.032.017,19.084,10.863a2.759,2.759,0,0,0,.552.238c.069.02.142.034.214.051l.121.031c.046.008.092.025.142.034.1.017.211.034.321.042.092.009.185.017.277.02h.254c.084,0,.165-.006.246-.011s.165-.017.243-.028.168-.026.248-.043l.072-.017.035-.009c.052-.011.1-.023.15-.037.1-.028.205-.062.3-.1a2.474,2.474,0,0,0,.361-.17l10.858-6.14A1.219,1.219,0,0,0,452.643,290.135Zm-34.225-5.713a1.685,1.685,0,0,1-.535-.458l0,0A1.668,1.668,0,0,0,418.418,284.422Z" transform="translate(-374.846 -219.597)" fill="#211b26"/>
                            <path id="Path_746" data-name="Path 746" d="M410.64,288.612a.878.878,0,0,1-.121-.351l.006,1.995v.02a.8.8,0,0,0,.017.142.841.841,0,0,0,.04.139.98.98,0,0,0,.066.136.761.761,0,0,0,.052.079l.014.02.032.048a1.384,1.384,0,0,0,.156.161,1.817,1.817,0,0,0,.315.229l.032.02,19.081,10.86a2.972,2.972,0,0,0,.549.235c.069.023.144.037.22.054l.118.028c.046.011.089.025.136.034a3.1,3.1,0,0,0,.321.042c.092.011.185.017.28.02h.165c.029,0,.061,0,.092,0,.081,0,.165-.006.246-.011s.165-.017.246-.028.168-.025.248-.042l.078-.017.035-.008c.049-.011.1-.023.15-.037.1-.028.205-.062.3-.1a3.244,3.244,0,0,0,.361-.17l12.736-7.2a1.215,1.215,0,0,0,.734-1.007l-.006-1.995h0a1.219,1.219,0,0,0-.731-1l-19.084-10.86a3.955,3.955,0,0,0-3.531,0l-12.736,7.2C410.606,287.616,410.421,288.139,410.64,288.612Zm.066.178a1.669,1.669,0,0,0,.537.461,1.644,1.644,0,0,1-.535-.456Z" transform="translate(-388.395 -212.708)" fill="#211b26"/>
                            <path id="Path_747" data-name="Path 747" d="M420.088,294.1a.921.921,0,0,1-.118-.351l.006,1.995v.023a.782.782,0,0,0,.017.142.823.823,0,0,0,.04.139,1.026,1.026,0,0,0,.066.139c.014.025.035.051.052.076l.014.02.035.051a1.343,1.343,0,0,0,.153.161,2.081,2.081,0,0,0,.312.226l.032.017,19.09,10.865a2.856,2.856,0,0,0,.546.235c.069.023.147.037.22.054.04.011.078.02.118.028s.087.025.133.034c.1.017.211.031.318.042s.185.014.277.017c.046,0,.092,0,.139,0h.116c.084,0,.165-.006.249-.014s.162-.014.243-.025.168-.025.248-.042l.084-.02.038-.008.142-.034c.1-.031.208-.065.306-.1a3.051,3.051,0,0,0,.364-.173l12.736-7.2a1.23,1.23,0,0,0,.74-1.01l-.006-1.995,0,0a1.207,1.207,0,0,0-.725-1l-19.09-10.863a3.961,3.961,0,0,0-3.534,0l-12.736,7.2C420.054,293.1,419.875,293.628,420.088,294.1Zm.069.184a1.652,1.652,0,0,0,.534.458,1.628,1.628,0,0,1-.532-.456Z" transform="translate(-370.539 -202.661)" fill="#211b26"/>
                            <path id="Path_748" data-name="Path 748" d="M459.948,308.267l10.861-6.14a1.219,1.219,0,0,0,.737-1.007l-.006-1.992h0v0a1.225,1.225,0,0,0-.731-1l-19.084-10.86a3.955,3.955,0,0,0-3.531,0l-10.861,6.14c-.653.371-.832.883-.621,1.352a.882.882,0,0,1-.118-.342l.006,1.995v.023a.562.562,0,0,0,.017.139.787.787,0,0,0,.038.136,1.227,1.227,0,0,0,.066.139c.017.028.038.054.058.082l.012.02.032.045a1.629,1.629,0,0,0,.156.164,1.843,1.843,0,0,0,.318.229l.032.02,19.081,10.86a2.867,2.867,0,0,0,.555.238c.066.023.141.034.214.051l.121.031c.046.008.092.026.139.034.107.017.214.034.321.042s.185.017.277.02h.257c.084,0,.165-.006.246-.011s.162-.017.243-.028.165-.025.246-.042l.075-.017.035-.008c.049-.011.1-.023.15-.037.1-.028.205-.062.3-.1A2.436,2.436,0,0,0,459.948,308.267Zm-22.627-12.86a1.663,1.663,0,0,1-.537-.458v0A1.635,1.635,0,0,0,437.321,295.407Z" transform="translate(-339.132 -199.499)" fill="#211b26"/>
                            <path id="Path_749" data-name="Path 749" d="M429.538,299.583a.9.9,0,0,1-.116-.337l.006,1.995v.02a.752.752,0,0,0,.014.141,1.3,1.3,0,0,0,.04.139c.02.045.041.09.067.139.017.025.038.051.055.076l.014.02.032.048a1.144,1.144,0,0,0,.153.161,1.846,1.846,0,0,0,.318.229l.029.02,19.084,10.86a2.986,2.986,0,0,0,.549.235c.069.023.145.037.217.054l.121.031c.046.009.09.023.136.031.1.02.211.034.321.045q.139.013.277.017c.043,0,.09,0,.133,0h.035c.029,0,.061,0,.092,0,.081,0,.165-.006.246-.011s.165-.017.246-.028.167-.026.248-.043l.078-.017.035-.009c.049-.011.1-.023.147-.037.107-.028.208-.062.306-.1a3.276,3.276,0,0,0,.361-.17l12.736-7.2a1.221,1.221,0,0,0,.734-1.007l-.006-1.995h0a1.225,1.225,0,0,0-.731-1l-19.084-10.86a3.955,3.955,0,0,0-3.531,0l-12.736,7.2C429.511,298.6,429.33,299.113,429.538,299.583Zm.072.192a1.6,1.6,0,0,0,.534.461,1.629,1.629,0,0,1-.532-.456Z" transform="translate(-352.68 -192.611)" fill="#211b26"/>
                            <path id="Path_750" data-name="Path 750" d="M469.4,313.759l10.861-6.14a1.221,1.221,0,0,0,.737-1.007l-.006-2v0a1.212,1.212,0,0,0-.725-1l-19.09-10.865a3.963,3.963,0,0,0-3.531,0l-10.861,6.14c-.662.373-.838.9-.612,1.372a.885.885,0,0,1-.124-.365l.006,2v.02a.592.592,0,0,0,.017.141.906.906,0,0,0,.041.139,1,1,0,0,0,.066.139.656.656,0,0,0,.055.079l.011.02.035.048a1.346,1.346,0,0,0,.153.161,1.817,1.817,0,0,0,.315.229l.032.017,19.09,10.865a2.96,2.96,0,0,0,.546.235c.069.023.144.034.217.054l.119.028c.046.011.089.025.139.034.1.017.211.034.318.042s.185.017.277.02h.257c.084,0,.165-.006.246-.014s.165-.014.243-.025.167-.025.248-.042l.075-.017.035-.008c.049-.011.1-.023.15-.037.1-.028.205-.062.3-.1A2.77,2.77,0,0,0,469.4,313.759ZM446.769,300.9a1.712,1.712,0,0,1-.535-.455v0A1.68,1.68,0,0,0,446.769,300.9Z" transform="translate(-321.275 -189.451)" fill="#211b26"/>
                            <path id="Path_751" data-name="Path 751" d="M478.842,319.25l10.861-6.14a1.225,1.225,0,0,0,.74-1.01l-.006-1.995v0a1.221,1.221,0,0,0-.728-1l-19.081-10.86a3.961,3.961,0,0,0-3.534,0l-10.861,6.14c-.656.371-.835.891-.615,1.361a.88.88,0,0,1-.121-.351l.006,1.995v.023a.749.749,0,0,0,.014.139,1.189,1.189,0,0,0,.04.136.879.879,0,0,0,.067.139c.017.028.038.054.055.082l.014.02.032.045a1.177,1.177,0,0,0,.156.164,1.844,1.844,0,0,0,.318.229l.029.02,19.084,10.86a3.127,3.127,0,0,0,.552.238c.069.02.142.034.214.051l.118.028c.046.011.092.025.139.034.1.02.211.034.318.045s.185.014.275.017h.165c.029,0,.061,0,.093,0,.081,0,.162-.006.243-.011s.162-.017.243-.026l.246-.042.081-.02.035-.008.145-.034c.107-.031.208-.065.306-.1A2.468,2.468,0,0,0,478.842,319.25Zm-22.621-12.857a1.712,1.712,0,0,1-.535-.456v0A1.65,1.65,0,0,0,456.221,306.392Z" transform="translate(-303.417 -179.402)" fill="#211b26"/>
                            <path id="Path_752" data-name="Path 752" d="M488.3,324.744l10.861-6.14a1.223,1.223,0,0,0,.737-1.007l-.006-1.995h0a1.212,1.212,0,0,0-.725-1l-19.09-10.865a3.961,3.961,0,0,0-3.534,0l-10.861,6.14c-.656.371-.835.891-.615,1.361a.879.879,0,0,1-.121-.351l.006,1.995v.02a.788.788,0,0,0,.014.141,1.209,1.209,0,0,0,.04.136.862.862,0,0,0,.066.139c.017.028.037.054.055.082l.014.02.032.045a1.032,1.032,0,0,0,.156.161,1.855,1.855,0,0,0,.318.232l.029.017,19.093,10.865a2.7,2.7,0,0,0,.546.235c.069.023.144.034.214.054l.121.028c.046.011.09.025.139.034.1.017.211.034.318.042s.185.017.277.02h.257c.081,0,.165-.006.246-.011s.162-.017.243-.028.165-.026.248-.042l.075-.017.032-.009c.052-.011.1-.023.153-.037a3.068,3.068,0,0,0,.3-.1A2.463,2.463,0,0,0,488.3,324.744Zm-22.63-12.86a1.68,1.68,0,0,1-.535-.458l0,0A1.7,1.7,0,0,0,465.671,311.884Z" transform="translate(-285.562 -169.354)" fill="#211b26"/>
                            <path id="Path_753" data-name="Path 753" d="M497.749,330.236l10.861-6.14a1.231,1.231,0,0,0,.74-1.01l-.006-1.995v0a1.214,1.214,0,0,0-.728-1l-19.084-10.863a3.973,3.973,0,0,0-3.54,0l-10.861,6.14c-.647.368-.823.88-.615,1.347a.871.871,0,0,1-.118-.34l.006,1.995v.02a.749.749,0,0,0,.017.142.772.772,0,0,0,.04.139.879.879,0,0,0,.066.139c.014.028.037.054.055.082l.014.02.032.045a1.406,1.406,0,0,0,.156.164,1.769,1.769,0,0,0,.321.232l.029.02,19.084,10.86a2.806,2.806,0,0,0,.549.238c.069.02.145.034.217.051l.119.028c.046.011.09.026.139.034.1.02.211.034.318.045.09.008.182.014.275.017.043,0,.087,0,.13,0H496c.029,0,.061,0,.09,0,.084,0,.165-.006.246-.011s.162-.014.243-.025.165-.028.246-.042l.081-.02.035-.008.144-.034q.156-.047.3-.1A2.377,2.377,0,0,0,497.749,330.236Zm-22.621-12.857a1.7,1.7,0,0,1-.537-.458v0A1.668,1.668,0,0,0,475.128,317.378Zm34.031,4.25c.04-.057.035-.119.061-.178-.026.057-.02.119-.061.175Z" transform="translate(-267.706 -159.306)" fill="#211b26"/>
                            <path id="Path_754" data-name="Path 754" d="M507.206,335.729l10.861-6.14a1.229,1.229,0,0,0,.737-1.007l-.006-1.995h0a1.208,1.208,0,0,0-.722-1L498.98,314.726a3.954,3.954,0,0,0-3.531,0l-10.861,6.14c-.653.371-.832.886-.618,1.355a.9.9,0,0,1-.122-.345l.006,1.995v.02a1.142,1.142,0,0,0,.017.141.824.824,0,0,0,.04.136.872.872,0,0,0,.067.139c.014.028.037.054.055.082l.014.02.032.045a1.14,1.14,0,0,0,.153.161,1.886,1.886,0,0,0,.321.232l.029.017,19.093,10.865a2.913,2.913,0,0,0,.543.235c.069.023.144.034.217.054.041.008.081.02.121.028s.09.025.136.034a3.125,3.125,0,0,0,.321.042c.092.011.185.017.277.02h.257c.081,0,.162-.006.246-.011s.162-.017.243-.028.165-.026.246-.042l.078-.017.032-.008c.052-.011.1-.023.15-.037.1-.028.205-.062.3-.1A2.466,2.466,0,0,0,507.206,335.729Zm-22.63-12.86a1.682,1.682,0,0,1-.535-.458l0,0A1.668,1.668,0,0,0,484.576,322.869Z" transform="translate(-249.849 -149.257)" fill="#211b26"/>
                            <path id="Path_755" data-name="Path 755" d="M438.989,305.074a.91.91,0,0,1-.116-.34l.006,1.995v.023a.59.59,0,0,0,.017.141.628.628,0,0,0,.04.139.872.872,0,0,0,.067.139c.014.025.035.051.052.076l.014.02.032.051a1.629,1.629,0,0,0,.156.161,1.817,1.817,0,0,0,.312.226l.029.017,14.834,8.443,6.019,3.424,5.579,3.178,20.844,11.861,6.461,3.676,20.853,11.867,6.461,3.678,20.844,11.861,26.432,15.042a2.905,2.905,0,0,0,.54.235c.072.023.15.034.223.054l.118.028c.046.008.087.023.133.031.1.02.211.034.318.045s.185.014.28.017c.043,0,.09,0,.136,0h.032c.029,0,.061,0,.089,0,.084,0,.165-.006.248-.011s.165-.017.243-.028.168-.026.251-.043l.078-.017.035-.009c.049-.011.1-.023.15-.037.1-.028.205-.062.3-.1a3.238,3.238,0,0,0,.361-.17l12.736-7.2a1.226,1.226,0,0,0,.737-1.01l-.006-1.995v0a1.219,1.219,0,0,0-.725-1l-26.432-15.042L536.93,342.644l-6.461-3.678L509.616,327.1l-6.461-3.678-20.844-11.861-5.579-3.178-6.018-3.424-14.834-8.44a3.964,3.964,0,0,0-3.531,0l-12.736,7.2C438.963,304.086,438.784,304.6,438.989,305.074Zm.072.2a1.638,1.638,0,0,0,.532.458,1.615,1.615,0,0,1-.529-.456Z" transform="translate(-334.824 -182.563)" fill="#211b26"/>
                            <path id="Path_756" data-name="Path 756" d="M516.652,341.221l10.861-6.14a1.23,1.23,0,0,0,.74-1.01l-.006-1.995,0,0a1.217,1.217,0,0,0-.725-1l-19.084-10.86a3.972,3.972,0,0,0-3.539,0l-10.861,6.14c-.641.362-.821.869-.621,1.333a.9.9,0,0,1-.113-.325l.006,1.995v.023a.747.747,0,0,0,.014.139,1.219,1.219,0,0,0,.041.139.873.873,0,0,0,.069.139.667.667,0,0,0,.055.082l.014.02.032.045a1.2,1.2,0,0,0,.156.167,2.012,2.012,0,0,0,.318.229l.032.02,19.084,10.86a2.8,2.8,0,0,0,.549.238c.069.02.144.034.214.051l.121.031c.046.009.09.023.139.031.1.02.211.034.318.045.09.009.182.014.274.017.043,0,.087,0,.13,0h.032l.093,0c.081,0,.162-.009.245-.014s.162-.014.24-.025.168-.025.249-.042l.081-.02.035-.008.144-.034c.1-.031.205-.062.3-.1A2.666,2.666,0,0,0,516.652,341.221Zm-22.621-12.857a1.663,1.663,0,0,1-.537-.458l0,0A1.679,1.679,0,0,0,494.031,328.363Z" transform="translate(-231.991 -139.208)" fill="#211b26"/>
                            <path id="Path_757" data-name="Path 757" d="M486.249,332.548a.98.98,0,0,1-.121-.351l.006,1.995,0,.02a.768.768,0,0,0,.014.141,1.13,1.13,0,0,0,.041.139c.02.048.041.093.066.141.017.025.038.051.055.079l.014.02.032.045a1.391,1.391,0,0,0,.156.164,2.013,2.013,0,0,0,.318.232l.029.017,19.084,10.86a2.949,2.949,0,0,0,.546.235c.072.023.147.037.22.054l.118.028c.046.011.087.025.133.034.1.017.211.031.318.042s.185.014.277.017c.046,0,.092,0,.139,0h.116c.084,0,.165-.006.248-.014s.162-.014.243-.025.167-.025.248-.042l.084-.02.037-.008.142-.034c.107-.031.208-.065.306-.1a2.842,2.842,0,0,0,.364-.173l12.736-7.2a1.223,1.223,0,0,0,.74-1.007l-.006-1.995,0,0a1.207,1.207,0,0,0-.725-1l-19.084-10.86a3.973,3.973,0,0,0-3.539-.006l-12.736,7.2C486.215,331.552,486.033,332.075,486.249,332.548Zm.069.184a1.708,1.708,0,0,0,.537.464,1.687,1.687,0,0,1-.534-.461Z" transform="translate(-245.542 -132.321)" fill="#211b26"/>
                            <path id="Path_758" data-name="Path 758" d="M526.109,346.714l10.858-6.14a1.219,1.219,0,0,0,.737-1.007l-.006-1.995v0a1.225,1.225,0,0,0-.731-1l-19.084-10.86a3.955,3.955,0,0,0-3.531,0l-10.861,6.14c-.653.371-.832.883-.621,1.352a.881.881,0,0,1-.119-.342l.006,1.995v.023a.8.8,0,0,0,.017.139.8.8,0,0,0,.04.136.881.881,0,0,0,.121.221l.014.02.029.045a1.64,1.64,0,0,0,.156.164,2.021,2.021,0,0,0,.318.229l.032.017,19.081,10.863a3.258,3.258,0,0,0,.555.238c.066.023.142.034.214.051l.121.031c.046.009.092.026.142.034.1.017.211.034.321.042.09.008.182.017.277.02h.254c.084,0,.165-.006.246-.014s.162-.014.243-.025.165-.026.246-.043l.075-.017.035-.009c.052-.011.1-.023.15-.037.1-.028.205-.062.3-.1A2.472,2.472,0,0,0,526.109,346.714Zm-22.63-12.86a1.651,1.651,0,0,1-.535-.458l0,0A1.669,1.669,0,0,0,503.479,333.854Z" transform="translate(-214.135 -129.16)" fill="#211b26"/>
                            <path id="Path_759" data-name="Path 759" d="M495.7,338.03a.9.9,0,0,1-.115-.337l.006,1.995v.02a.59.59,0,0,0,.017.141.8.8,0,0,0,.04.136,1.013,1.013,0,0,0,.064.142c.017.025.038.051.055.076l.014.02.032.048a1.168,1.168,0,0,0,.156.161,1.714,1.714,0,0,0,.315.229l.029.017,19.084,10.863a2.974,2.974,0,0,0,.549.235c.069.023.144.037.22.054.041.011.078.02.119.028s.089.025.136.034c.107.02.214.034.321.045s.185.014.277.017h.168c.029,0,.061,0,.092,0,.081,0,.165-.006.246-.011s.165-.017.246-.028.168-.026.248-.042l.078-.017.035-.008c.049-.011.1-.023.15-.037.1-.028.205-.062.3-.1a3.244,3.244,0,0,0,.361-.17l12.736-7.2a1.219,1.219,0,0,0,.734-1.007l-.006-1.995h0a1.225,1.225,0,0,0-.731-1l-19.084-10.86a3.955,3.955,0,0,0-3.531,0l-12.736,7.2C495.673,337.045,495.488,337.56,495.7,338.03Zm.072.192a1.624,1.624,0,0,0,.534.461,1.629,1.629,0,0,1-.532-.456Z" transform="translate(-227.684 -122.271)" fill="#211b26"/>
                            <path id="Path_760" data-name="Path 760" d="M547.155,345.056l-.006-1.995v0a1.208,1.208,0,0,0-.728-1L527.331,331.2a3.964,3.964,0,0,0-3.531,0l-10.861,6.14c-.661.373-.838.9-.612,1.372a.9.9,0,0,1-.124-.365l.006,1.995v.023a.777.777,0,0,0,.018.141.907.907,0,0,0,.04.139,1.01,1.01,0,0,0,.066.139.666.666,0,0,0,.055.079l.012.02.034.048a1.329,1.329,0,0,0,.153.161,1.943,1.943,0,0,0,.315.229l.032.017,19.09,10.865a2.83,2.83,0,0,0,.552.238c.069.023.142.034.214.051l.121.031c.046.008.09.025.136.031.1.02.211.034.318.045s.185.014.277.017c.043,0,.087,0,.13,0h.032l.093,0c.081,0,.162-.008.243-.014s.162-.014.243-.025.165-.025.246-.042l.081-.02.035-.008.147-.034c.1-.031.205-.062.3-.1a2.468,2.468,0,0,0,.361-.17l10.861-6.14A1.225,1.225,0,0,0,547.155,345.056Zm-34.228-5.71a1.683,1.683,0,0,1-.535-.458h0A1.683,1.683,0,0,0,512.927,339.346Z" transform="translate(-196.278 -119.111)" fill="#211b26"/>
                            <path id="Path_761" data-name="Path 761" d="M505.149,343.533a.92.92,0,0,1-.118-.351l.006,1.995v.023a.59.59,0,0,0,.017.141.814.814,0,0,0,.04.139,1.008,1.008,0,0,0,.066.139c.014.025.035.051.052.076l.014.02.035.051a1.346,1.346,0,0,0,.153.161,2.074,2.074,0,0,0,.312.226l.029.017,19.093,10.865a2.864,2.864,0,0,0,.546.235c.07.023.147.037.22.054l.118.028c.043.011.087.025.133.034.1.017.211.031.318.042.09.009.182.014.275.02h.257c.084,0,.165-.006.246-.014s.165-.014.246-.025.167-.026.248-.042l.084-.02.038-.008.142-.034c.1-.031.208-.065.306-.1a3.034,3.034,0,0,0,.364-.173l12.736-7.2a1.23,1.23,0,0,0,.74-1.01l-.006-1.995,0,0a1.213,1.213,0,0,0-.725-1l-19.093-10.863a3.954,3.954,0,0,0-3.531,0l-12.736,7.2C505.115,342.54,504.936,343.06,505.149,343.533Zm.069.184a1.636,1.636,0,0,0,.532.458,1.616,1.616,0,0,1-.529-.456Z" transform="translate(-209.827 -112.224)" fill="#211b26"/>
                            <path id="Path_762" data-name="Path 762" d="M522.388,346.837l14.435,8.214a2.828,2.828,0,0,0,.552.238c.069.023.144.034.214.054l.121.028c.046.008.09.025.136.034.107.017.211.031.318.042s.185.014.277.017c.043,0,.087,0,.13,0h.124c.081,0,.162-.006.243-.014s.162-.014.243-.025.165-.026.246-.042l.081-.02.037-.008c.046-.011.1-.02.144-.034.1-.028.205-.062.3-.1a3.075,3.075,0,0,0,.364-.173l10.858-6.14a1.224,1.224,0,0,0,.74-1.007l-.006-2v0a1.211,1.211,0,0,0-.728-1L536.786,336.7a3.96,3.96,0,0,0-3.534,0l-10.858,6.14c-.656.371-.835.886-.621,1.355a.909.909,0,0,1-.118-.345l.006,1.995v.02a.788.788,0,0,0,.014.142,1.227,1.227,0,0,0,.04.136,1.25,1.25,0,0,0,.066.139c.017.028.038.054.055.082l.014.02.032.045a1.377,1.377,0,0,0,.156.164,2.017,2.017,0,0,0,.318.229Zm-.006-2a1.7,1.7,0,0,1-.538-.456l0-.006A1.649,1.649,0,0,0,522.382,344.839Z" transform="translate(-178.42 -109.062)" fill="#211b26"/>
                            <path id="Path_763" data-name="Path 763" d="M514.6,349.026a.906.906,0,0,1-.119-.348l.006,1.995v.02a.776.776,0,0,0,.014.141,1.2,1.2,0,0,0,.041.136,1.039,1.039,0,0,0,.066.141c.017.025.038.051.055.076l.014.02.032.048a1.149,1.149,0,0,0,.153.161,1.84,1.84,0,0,0,.318.229l.029.02L527.4,358.6a6.446,6.446,0,0,0,1.115.481c.046.014.081.04.127.054.1.031.205.045.3.074.188.051.373.1.566.139.07.014.133.037.205.048.162.031.329.048.5.068.052.008.107.017.159.023l.066.009c.211.023.419.034.633.042.087,0,.173,0,.26,0l.153,0c.055,0,.113,0,.167,0,.188-.006.376-.014.56-.031.072-.006.145-.014.214-.023l.142-.014c.066-.008.136-.014.2-.023.191-.025.381-.059.566-.1l.148-.037c.058-.011.11-.026.167-.04.093-.023.188-.04.28-.065.173-.051.338-.11.506-.17.046-.014.1-.028.142-.045l.043-.014a6.2,6.2,0,0,0,.821-.388l10.48-5.922a1.23,1.23,0,0,0,.74-1.01l-.006-1.995,0,0a1.21,1.21,0,0,0-.725-1l-14.438-8.217a3.955,3.955,0,0,0-3.531,0l-12.736,7.2C514.57,348.033,514.385,348.553,514.6,349.026Zm31.87,1.183c.041-.057.035-.116.064-.175-.029.056-.02.119-.061.175Zm-31.8-1a1.67,1.67,0,0,0,.537.461,1.6,1.6,0,0,1-.532-.456Z" transform="translate(-191.969 -102.174)" fill="#211b26"/>
                          </g>
                        </g>
                        <g id="Group_237" data-name="Group 237" transform="translate(252.768)">
                          <g id="Group_236" data-name="Group 236" style="isolation: isolate">
                            <path id="Path_764" data-name="Path 764" d="M586.717,330.069l8.81-5.011c1.722-.982,2.791-3.067,2.8-6.033l-8.81,5.014C589.508,327,588.439,329.09,586.717,330.069Z" transform="translate(-165.268 200.135)" fill="none"/>
                            <path id="Path_765" data-name="Path 765" d="M450.907,136.176l.055-.028a4.669,4.669,0,0,1,.48-.232l.1-.031c.052-.02.107-.037.162-.057.084-.028.165-.062.251-.085l-.055.031h0l.055-.031c.09-.028.185-.042.277-.065.055-.011.11-.025.168-.037l.092-.02a4.786,4.786,0,0,1,.581-.068h.037c.046,0,.092,0,.139,0,.15-.006.3-.011.457-.006.055,0,.107.014.162.017.092.006.191.017.286.028s.176.011.269.025.162.037.24.051c.13.023.26.051.393.082.072.017.142.025.214.045s.145.051.214.071q.334.1.676.229c.081.031.159.048.24.082.043.017.092.045.139.065a12.019,12.019,0,0,1,1.2.586l0,0h0l405.049,229.01h0a16.062,16.062,0,0,1,3.2,2.433q.542.518,1.049,1.092c.269.3.529.611.78.931.22.277.433.56.638.849.191.266.376.538.558.812s.335.529.5.8.3.526.451.8.28.529.413.8.26.543.381.818.243.563.353.843c.116.3.225.591.326.888.107.32.208.64.3.959q.152.539.269,1.078c.1.436.173.871.228,1.3a13.34,13.34,0,0,1,.092,1.386l.02-.008v.274c0,.059.011.125.011.184l-.014.009-.774,272.624c-.009,2.965-1.078,5.051-2.8,6.033l-8.81,5.011c1.722-.979,2.791-3.064,2.8-6.03l.821-272.65-.032.017a13.74,13.74,0,0,0-.121-1.836c-.058-.43-.136-.866-.228-1.3-.078-.359-.17-.719-.272-1.081-.09-.317-.191-.637-.3-.956-.1-.3-.211-.594-.326-.888s-.228-.563-.353-.843-.248-.546-.381-.818-.269-.535-.413-.8-.295-.529-.451-.792-.326-.535-.5-.8-.367-.546-.558-.815q-.308-.433-.639-.849c-.251-.317-.511-.628-.78-.928q-.507-.573-1.049-1.1a15.891,15.891,0,0,0-3.2-2.431L448.93,141.846l4.4-2.507-4.4,2.507a11.564,11.564,0,0,0-1.208-.589c-.127-.054-.251-.1-.379-.147q-.342-.131-.676-.229c-.142-.042-.286-.085-.428-.116s-.26-.059-.39-.082c-.173-.034-.344-.059-.511-.079-.1-.008-.191-.02-.286-.025a5.691,5.691,0,0,0-.618-.014c-.046,0-.093,0-.139,0a4.877,4.877,0,0,0-.711.088c-.055.009-.11.025-.168.037a4.877,4.877,0,0,0-.529.15c-.052.017-.107.034-.162.054a5.086,5.086,0,0,0-.63.294Z" transform="translate(-438.508 -135.545)" fill="url(#linear-gradient-9)"/>
                            <g id="Group_235" data-name="Group 235" transform="translate(0 5.01)">
                              <path id="Path_766" data-name="Path 766" d="M451.277,138.607c-5.308-3-9.616-.589-9.633,5.373l-.789,272.633c-.017,5.973,4.262,13.231,9.57,16.23L855.474,661.856c5.3,3,9.613.6,9.63-5.376l.789-272.633c.018-5.962-4.27-13.234-9.57-16.23Z" transform="translate(-440.855 -137.316)" fill="#2f2636"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_238" data-name="Group 238" transform="translate(269.93 30.396)">
                          <path id="Path_767" data-name="Path 767" d="M447.531,146.288l-.736,254.323L835.573,620.423l.736-254.323Z" transform="translate(-446.795 -146.288)" fill="#7932ab"/>
                        </g>
                        <g id="Group_241" data-name="Group 241" transform="translate(265.125 309.026)">
                          <g id="Group_240" data-name="Group 240" style="isolation: isolate">
                            <g id="Group_239" data-name="Group 239">
                              <path id="Path_768" data-name="Path 768" d="M448.019,251.692c-3.831,2.167-3.852,5.685-.046,7.852L798.863,459.235a15.56,15.56,0,0,0,13.849.006l12.265-6.935L460.284,244.76Z" transform="translate(-445.132 -244.76)" fill="#28202e"/>
                            </g>
                          </g>
                        </g>
                      </g>
                      <g id="Group_316" data-name="Group 316" transform="translate(142.993 340.766)">
                        <g id="Group_308" data-name="Group 308">
                          <g id="Group_243" data-name="Group 243" transform="translate(94.765)">
                            <path id="Path_769" data-name="Path 769" d="M436.4,262.849c-.974.552-.985,1.449-.012,2l15.224,8.664a3.972,3.972,0,0,0,3.531,0l12.742-7.207c.982-.554.988-1.449.012-2l-12.976-7.385a9.013,9.013,0,0,0-8.041.006Z" transform="translate(-435.66 -255.977)" fill="#2f2636"/>
                          </g>
                          <g id="Group_244" data-name="Group 244" transform="translate(75.925 10.966)">
                            <path id="Path_770" data-name="Path 770" d="M429.877,266.412c-.974.549-.988,1.449-.011,2l15.221,8.661a3.963,3.963,0,0,0,3.531,0l10.861-6.143c.982-.554.994-1.452.02-2.006l-15.224-8.664a3.972,3.972,0,0,0-3.539.006Z" transform="translate(-429.14 -259.853)" fill="#2f2636"/>
                          </g>
                          <g id="Group_245" data-name="Group 245" transform="translate(38.24 21.618)">
                            <path id="Path_771" data-name="Path 771" d="M416.836,280.828c-.982.555-.985,1.449-.012,2l15.221,8.664a3.961,3.961,0,0,0,3.534,0l17.954-10.152,4.58-2.589,7.166-4.052c.982-.555,1-1.452.02-2.009l-15.221-8.661a3.972,3.972,0,0,0-3.539,0l-7.166,4.052-4.583,2.592Z" transform="translate(-416.097 -263.617)" fill="#2f2636"/>
                          </g>
                          <g id="Group_246" data-name="Group 246" transform="translate(118.208 12.593)">
                            <path id="Path_772" data-name="Path 772" d="M444.511,268.048c-.974.552-.988,1.449-.011,2l19.084,10.86a3.973,3.973,0,0,0,3.54.006l12.742-7.2c.982-.557.979-1.454,0-2.009l-19.081-10.86a3.954,3.954,0,0,0-3.531,0Z" transform="translate(-443.774 -260.428)" fill="#2f2636"/>
                          </g>
                          <g id="Group_247" data-name="Group 247" transform="translate(99.368 24.307)">
                            <path id="Path_773" data-name="Path 773" d="M437.989,271.127c-.974.552-.985,1.449-.012,2l19.084,10.86A3.991,3.991,0,0,0,460.6,284l10.861-6.14c.979-.555.985-1.457.011-2.015l-19.084-10.86a3.973,3.973,0,0,0-3.539.006Z" transform="translate(-437.253 -264.568)" fill="#2f2636"/>
                          </g>
                          <g id="Group_248" data-name="Group 248" transform="translate(80.527 34.959)">
                            <path id="Path_774" data-name="Path 774" d="M431.468,274.893c-.971.549-.985,1.449-.011,2l19.084,10.86a3.991,3.991,0,0,0,3.539.006l10.861-6.143c.982-.555.985-1.457.012-2.012l-19.084-10.86a3.964,3.964,0,0,0-3.54.006Z" transform="translate(-430.733 -268.333)" fill="#2f2636"/>
                          </g>
                          <g id="Group_249" data-name="Group 249" transform="translate(61.683 45.613)">
                            <path id="Path_775" data-name="Path 775" d="M424.951,278.657c-.982.555-.988,1.446-.012,2l19.081,10.86a3.973,3.973,0,0,0,3.539,0l10.861-6.14c.982-.555.98-1.452,0-2.006l-19.082-10.863a3.955,3.955,0,0,0-3.531,0Z" transform="translate(-424.211 -272.098)" fill="#2f2636"/>
                          </g>
                          <g id="Group_250" data-name="Group 250" transform="translate(145.516 28.132)">
                            <path id="Path_776" data-name="Path 776" d="M453.959,273.54c-.974.552-.979,1.454-.011,2l19.09,10.865a3.979,3.979,0,0,0,3.534,0l12.742-7.207c.982-.555.988-1.449.011-2l-19.09-10.863a3.955,3.955,0,0,0-3.531,0Z" transform="translate(-453.225 -265.92)" fill="#2f2636"/>
                          </g>
                          <g id="Group_251" data-name="Group 251" transform="translate(126.675 39.847)">
                            <path id="Path_777" data-name="Path 777" d="M447.438,276.619c-.974.549-.98,1.452-.012,2l19.093,10.865a3.973,3.973,0,0,0,3.531,0l10.861-6.143c.98-.555.994-1.452.017-2.006l-19.09-10.865a3.973,3.973,0,0,0-3.539.006Z" transform="translate(-446.704 -270.06)" fill="#2f2636"/>
                          </g>
                          <g id="Group_252" data-name="Group 252" transform="translate(107.836 50.5)">
                            <path id="Path_778" data-name="Path 778" d="M440.915,280.384a1.054,1.054,0,0,0-.009,2L460,293.25a3.964,3.964,0,0,0,3.531,0l10.861-6.14c.982-.555.994-1.452.02-2.009l-19.093-10.863a3.982,3.982,0,0,0-3.539,0Z" transform="translate(-440.184 -273.825)" fill="#2f2636"/>
                          </g>
                          <g id="Group_253" data-name="Group 253" transform="translate(88.991 61.155)">
                            <path id="Path_779" data-name="Path 779" d="M434.4,284.145c-.982.555-.979,1.454-.012,2l19.09,10.865a3.954,3.954,0,0,0,3.531,0l10.861-6.14c.982-.555.988-1.449.012-2L448.791,278a3.973,3.973,0,0,0-3.531,0Z" transform="translate(-433.662 -277.591)" fill="#2f2636"/>
                          </g>
                          <g id="Group_254" data-name="Group 254" transform="translate(172.826 43.675)">
                            <path id="Path_780" data-name="Path 780" d="M463.414,279.033c-.974.552-.988,1.449-.011,2L482.484,291.9a3.982,3.982,0,0,0,3.539,0l12.745-7.2c.982-.555.979-1.454,0-2.009l-19.081-10.86a3.961,3.961,0,0,0-3.534,0Z" transform="translate(-462.677 -271.413)" fill="#2f2636"/>
                          </g>
                          <g id="Group_255" data-name="Group 255" transform="translate(153.985 55.389)">
                            <path id="Path_781" data-name="Path 781" d="M456.893,282.112c-.974.552-.988,1.449-.012,2l19.084,10.86a3.991,3.991,0,0,0,3.539.006l10.858-6.14c.982-.555.988-1.457.012-2.012l-19.081-10.862a3.973,3.973,0,0,0-3.539.006Z" transform="translate(-456.156 -275.553)" fill="#2f2636"/>
                          </g>
                          <g id="Group_256" data-name="Group 256" transform="translate(135.144 66.042)">
                            <path id="Path_782" data-name="Path 782" d="M450.371,285.877c-.974.549-.985,1.449-.012,2l19.084,10.86a3.992,3.992,0,0,0,3.54.006l10.861-6.143c.979-.555.985-1.457.012-2.012l-19.084-10.86a3.973,3.973,0,0,0-3.539.006Z" transform="translate(-449.635 -279.318)" fill="#2f2636"/>
                          </g>
                          <g id="Group_257" data-name="Group 257" transform="translate(116.301 76.696)">
                            <path id="Path_783" data-name="Path 783" d="M443.851,289.642c-.979.555-.985,1.449-.009,2l19.081,10.86a3.964,3.964,0,0,0,3.539,0l10.861-6.14c.982-.555.979-1.452,0-2.006L458.246,283.5a3.96,3.96,0,0,0-3.534,0Z" transform="translate(-443.114 -283.083)" fill="#2f2636"/>
                          </g>
                          <g id="Group_258" data-name="Group 258" transform="translate(200.134 59.215)">
                            <path id="Path_784" data-name="Path 784" d="M472.862,284.525c-.974.552-.98,1.454-.012,2l19.09,10.865a3.991,3.991,0,0,0,3.531,0l12.745-7.207c.982-.555.979-1.452.011-2l-19.09-10.863a3.961,3.961,0,0,0-3.534,0Z" transform="translate(-472.128 -276.905)" fill="#2f2636"/>
                          </g>
                          <g id="Group_259" data-name="Group 259" transform="translate(181.292 70.931)">
                            <path id="Path_785" data-name="Path 785" d="M466.341,287.6c-.974.549-.979,1.452-.012,2l19.09,10.865a4,4,0,0,0,3.534,0l10.858-6.143c.982-.555.988-1.457.02-2.006l-19.09-10.865a3.991,3.991,0,0,0-3.539.006Z" transform="translate(-465.607 -281.046)" fill="#2f2636"/>
                          </g>
                          <g id="Group_260" data-name="Group 260" transform="translate(162.451 81.582)">
                            <path id="Path_786" data-name="Path 786" d="M459.82,291.369c-.974.549-.979,1.452-.011,2L478.9,304.235a3.972,3.972,0,0,0,3.531,0l10.861-6.14c.98-.555.985-1.457.017-2.006l-19.09-10.865a3.982,3.982,0,0,0-3.54,0Z" transform="translate(-459.086 -284.81)" fill="#2f2636"/>
                          </g>
                          <g id="Group_261" data-name="Group 261" transform="translate(143.609 92.237)">
                            <path id="Path_787" data-name="Path 787" d="M453.3,295.13c-.982.555-.98,1.454-.014,2L472.381,308a3.963,3.963,0,0,0,3.531,0l10.861-6.14c.982-.555.98-1.454.012-2l-19.09-10.865a3.979,3.979,0,0,0-3.534,0Z" transform="translate(-452.565 -288.576)" fill="#2f2636"/>
                          </g>
                          <g id="Group_262" data-name="Group 262" transform="translate(227.442 74.757)">
                            <path id="Path_788" data-name="Path 788" d="M482.315,290.018c-.974.552-.985,1.449-.012,2l19.084,10.862a3.972,3.972,0,0,0,3.531,0l12.745-7.207c.982-.555.985-1.449.012-2l-19.084-10.86a3.955,3.955,0,0,0-3.531,0Z" transform="translate(-481.579 -282.398)" fill="#2f2636"/>
                          </g>
                          <g id="Group_263" data-name="Group 263" transform="translate(208.602 86.472)">
                            <path id="Path_789" data-name="Path 789" d="M475.8,293.1c-.974.552-.988,1.449-.012,2l19.082,10.86a3.961,3.961,0,0,0,3.534,0l10.858-6.14c.982-.554,1-1.451.02-2.006L490.2,286.951a3.973,3.973,0,0,0-3.54.006Z" transform="translate(-475.059 -286.538)" fill="#2f2636"/>
                          </g>
                          <g id="Group_264" data-name="Group 264" transform="translate(189.761 97.125)">
                            <path id="Path_790" data-name="Path 790" d="M469.275,296.862c-.974.549-.988,1.449-.012,2l19.084,10.86a3.964,3.964,0,0,0,3.531,0l10.861-6.14c.979-.555.994-1.451.017-2.009l-19.081-10.86a3.973,3.973,0,0,0-3.539.006Z" transform="translate(-468.538 -290.303)" fill="#2f2636"/>
                          </g>
                          <g id="Group_265" data-name="Group 265" transform="translate(170.918 107.779)">
                            <path id="Path_791" data-name="Path 791" d="M462.755,300.626c-.979.555-.985,1.446-.012,2l19.084,10.86a3.955,3.955,0,0,0,3.531,0l10.861-6.14c.982-.555.985-1.449.012-2l-19.084-10.86a3.937,3.937,0,0,0-3.531,0Z" transform="translate(-462.016 -294.068)" fill="#2f2636"/>
                          </g>
                          <g id="Group_266" data-name="Group 266" transform="translate(254.747 90.297)">
                            <path id="Path_792" data-name="Path 792" d="M491.765,295.51c-.974.552-.985,1.449-.012,2l19.093,10.865a3.992,3.992,0,0,0,3.531,0l12.745-7.207c.979-.555.977-1.452.012-2l-19.093-10.865a3.955,3.955,0,0,0-3.531,0Z" transform="translate(-491.029 -287.89)" fill="#2f2636"/>
                          </g>
                          <g id="Group_267" data-name="Group 267" transform="translate(235.907 102.011)">
                            <path id="Path_793" data-name="Path 793" d="M485.246,298.589c-.974.549-.988,1.449-.012,2l19.09,10.865a3.991,3.991,0,0,0,3.531,0l10.861-6.143c.982-.555.988-1.457.02-2.006l-19.09-10.865a3.973,3.973,0,0,0-3.539.006Z" transform="translate(-484.509 -292.03)" fill="#2f2636"/>
                          </g>
                          <g id="Group_268" data-name="Group 268" transform="translate(217.065 112.663)">
                            <path id="Path_794" data-name="Path 794" d="M478.725,302.355c-.974.549-.988,1.449-.011,2l19.09,10.863a3.979,3.979,0,0,0,3.534,0l10.858-6.14c.982-.555.988-1.457.02-2.006l-19.09-10.865a3.973,3.973,0,0,0-3.539,0Z" transform="translate(-477.988 -295.794)" fill="#2f2636"/>
                          </g>
                          <g id="Group_269" data-name="Group 269" transform="translate(198.222 123.318)">
                            <path id="Path_795" data-name="Path 795" d="M472.205,306.116c-.982.555-.985,1.449-.012,2l19.09,10.865a3.969,3.969,0,0,0,3.534,0l10.861-6.14c.979-.555.977-1.452.012-2L486.6,299.976a3.954,3.954,0,0,0-3.531,0Z" transform="translate(-471.466 -299.56)" fill="#2f2636"/>
                          </g>
                          <g id="Group_270" data-name="Group 270" transform="translate(282.056 105.837)">
                            <path id="Path_796" data-name="Path 796" d="M501.213,301a1.054,1.054,0,0,0,0,2.006l19.084,10.863a3.972,3.972,0,0,0,3.531,0l12.745-7.207c.979-.555.985-1.449.011-2L517.5,293.8a3.973,3.973,0,0,0-3.539-.006Z" transform="translate(-500.481 -293.382)" fill="#2f2636"/>
                          </g>
                          <g id="Group_271" data-name="Group 271" transform="translate(263.215 117.552)">
                            <path id="Path_797" data-name="Path 797" d="M494.693,304.08a1.054,1.054,0,0,0-.006,2.006l19.084,10.86a3.954,3.954,0,0,0,3.531,0l10.861-6.14c.982-.555.994-1.452.02-2.006L509.1,297.94a3.973,3.973,0,0,0-3.548,0Z" transform="translate(-493.96 -297.522)" fill="#2f2636"/>
                          </g>
                          <g id="Group_272" data-name="Group 272" transform="translate(244.374 128.204)">
                            <path id="Path_798" data-name="Path 798" d="M488.172,307.843a1.055,1.055,0,0,0,0,2.009l19.081,10.86a3.964,3.964,0,0,0,3.531,0l10.861-6.14c.982-.555,1-1.452.02-2.009L502.581,301.7a3.991,3.991,0,0,0-3.548,0Z" transform="translate(-487.439 -301.287)" fill="#2f2636"/>
                          </g>
                          <g id="Group_273" data-name="Group 273" transform="translate(225.529 138.859)">
                            <path id="Path_799" data-name="Path 799" d="M481.653,311.607c-.982.555-.979,1.454,0,2.009l19.081,10.86a3.96,3.96,0,0,0,3.534,0l10.861-6.14c.979-.555.985-1.449.011-2L496.054,305.47a3.973,3.973,0,0,0-3.539,0Z" transform="translate(-480.917 -305.053)" fill="#2f2636"/>
                          </g>
                          <g id="Group_274" data-name="Group 274" transform="translate(309.364 121.379)">
                            <path id="Path_800" data-name="Path 800" d="M510.668,306.495c-.974.552-.985,1.449-.012,2l19.09,10.865a4,4,0,0,0,3.534,0l12.742-7.207c.982-.555.98-1.452.012-2l-19.09-10.863a3.955,3.955,0,0,0-3.531,0Z" transform="translate(-509.932 -298.875)" fill="#2f2636"/>
                          </g>
                          <g id="Group_275" data-name="Group 275" transform="translate(290.523 133.094)">
                            <path id="Path_801" data-name="Path 801" d="M504.147,309.574c-.974.552-.985,1.449-.012,2l19.093,10.865a3.991,3.991,0,0,0,3.531,0l10.861-6.14c.98-.557.985-1.46.02-2.009l-19.093-10.865a3.973,3.973,0,0,0-3.54.006Z" transform="translate(-503.411 -303.015)" fill="#2f2636"/>
                          </g>
                          <g id="Group_276" data-name="Group 276" transform="translate(271.683 143.745)">
                            <path id="Path_802" data-name="Path 802" d="M497.628,313.34c-.974.549-.988,1.449-.012,2l19.09,10.863a3.972,3.972,0,0,0,3.531,0l10.861-6.14c.982-.555.988-1.457.02-2.006l-19.09-10.865a3.973,3.973,0,0,0-3.539,0Z" transform="translate(-496.891 -306.779)" fill="#2f2636"/>
                          </g>
                          <g id="Group_277" data-name="Group 277" transform="translate(252.838 154.4)">
                            <path id="Path_803" data-name="Path 803" d="M491.109,317.1c-.982.557-.988,1.449-.012,2l19.09,10.865a3.964,3.964,0,0,0,3.531,0l10.861-6.14c.982-.555.979-1.452.012-2L505.5,310.961a3.954,3.954,0,0,0-3.531,0Z" transform="translate(-490.369 -310.545)" fill="#2f2636"/>
                          </g>
                          <g id="Group_278" data-name="Group 278" transform="translate(336.672 136.919)">
                            <path id="Path_804" data-name="Path 804" d="M520.116,311.987a1.055,1.055,0,0,0,0,2.009l19.081,10.86a3.979,3.979,0,0,0,3.534,0l12.742-7.207c.982-.555.988-1.449.012-2L536.4,304.786a3.973,3.973,0,0,0-3.54-.006Z" transform="translate(-519.383 -304.367)" fill="#2f2636"/>
                          </g>
                          <g id="Group_279" data-name="Group 279" transform="translate(317.832 148.634)">
                            <path id="Path_805" data-name="Path 805" d="M513.594,315.065a1.054,1.054,0,0,0,0,2.006l19.084,10.86a3.955,3.955,0,0,0,3.531,0l10.861-6.14c.98-.555.994-1.452.02-2.006L528,308.925a3.974,3.974,0,0,0-3.548,0Z" transform="translate(-512.863 -308.507)" fill="#2f2636"/>
                          </g>
                          <g id="Group_280" data-name="Group 280" transform="translate(298.992 159.287)">
                            <path id="Path_806" data-name="Path 806" d="M507.075,318.831a1.054,1.054,0,0,0-.006,2.006l19.084,10.86a3.963,3.963,0,0,0,3.531,0l10.861-6.14c.982-.555.994-1.452.02-2.009l-19.084-10.86a3.985,3.985,0,0,0-3.545,0Z" transform="translate(-506.342 -312.272)" fill="#2f2636"/>
                          </g>
                          <g id="Group_281" data-name="Group 281" transform="translate(280.147 169.941)">
                            <path id="Path_807" data-name="Path 807" d="M500.556,322.592c-.982.555-.98,1.454,0,2.009l19.082,10.86a3.954,3.954,0,0,0,3.531,0l10.861-6.14c.982-.555.988-1.449.012-2l-19.081-10.86a3.964,3.964,0,0,0-3.539-.006Z" transform="translate(-499.82 -316.038)" fill="#2f2636"/>
                          </g>
                          <g id="Group_282" data-name="Group 282" transform="translate(363.981 152.462)">
                            <path id="Path_808" data-name="Path 808" d="M529.572,317.48c-.974.552-.988,1.449-.012,2l19.081,10.86a3.973,3.973,0,0,0,3.539.006l12.745-7.2c.982-.557.979-1.454,0-2.009l-19.081-10.86a3.961,3.961,0,0,0-3.534,0Z" transform="translate(-528.835 -309.86)" fill="#2f2636"/>
                          </g>
                          <g id="Group_283" data-name="Group 283" transform="translate(345.141 164.176)">
                            <path id="Path_809" data-name="Path 809" d="M523.05,320.559c-.974.552-.985,1.449-.011,2l19.084,10.86a3.991,3.991,0,0,0,3.54.006l10.861-6.14c.979-.557.985-1.457.012-2.015l-19.084-10.86a3.973,3.973,0,0,0-3.539.006Z" transform="translate(-522.314 -314)" fill="#2f2636"/>
                          </g>
                          <g id="Group_284" data-name="Group 284" transform="translate(326.299 174.828)">
                            <path id="Path_810" data-name="Path 810" d="M516.529,324.325c-.974.549-.985,1.449-.011,2l19.084,10.86a3.991,3.991,0,0,0,3.539.006L550,331.05c.982-.555.985-1.457.012-2.012l-19.084-10.86a3.964,3.964,0,0,0-3.539.006Z" transform="translate(-515.793 -317.765)" fill="#2f2636"/>
                          </g>
                          <g id="Group_285" data-name="Group 285" transform="translate(307.456 185.482)">
                            <path id="Path_811" data-name="Path 811" d="M510.012,328.086c-.982.557-.988,1.449-.012,2.006l19.081,10.86a3.973,3.973,0,0,0,3.54,0l10.861-6.14c.982-.555.979-1.452,0-2.009L524.4,321.946a3.954,3.954,0,0,0-3.531,0Z" transform="translate(-509.272 -321.53)" fill="#2f2636"/>
                          </g>
                          <g id="Group_286" data-name="Group 286" transform="translate(391.289 168.001)">
                            <path id="Path_812" data-name="Path 812" d="M539.02,322.972c-.974.552-.98,1.452-.011,2l19.09,10.865a3.972,3.972,0,0,0,3.531,0l12.745-7.207c.982-.555.988-1.449.012-2L555.3,315.766a3.979,3.979,0,0,0-3.534,0Z" transform="translate(-538.286 -315.352)" fill="#2f2636"/>
                          </g>
                          <g id="Group_287" data-name="Group 287" transform="translate(372.447 179.716)">
                            <path id="Path_813" data-name="Path 813" d="M532.5,326.051c-.974.549-.979,1.452-.012,2l19.09,10.865a3.979,3.979,0,0,0,3.534,0l10.861-6.143c.98-.555.994-1.452.017-2.006L546.9,319.905a3.973,3.973,0,0,0-3.539.006Z" transform="translate(-531.765 -319.492)" fill="#2f2636"/>
                          </g>
                          <g id="Group_288" data-name="Group 288" transform="translate(353.607 190.368)">
                            <path id="Path_814" data-name="Path 814" d="M525.977,329.816c-.974.549-.977,1.452-.011,2l19.093,10.865a3.964,3.964,0,0,0,3.531,0l10.861-6.14c.982-.555.994-1.452.02-2.009L540.378,323.67a3.982,3.982,0,0,0-3.539,0Z" transform="translate(-525.244 -323.257)" fill="#2f2636"/>
                          </g>
                          <g id="Group_289" data-name="Group 289" transform="translate(334.764 201.023)">
                            <path id="Path_815" data-name="Path 815" d="M519.46,333.577c-.982.555-.98,1.454-.012,2l19.09,10.865a3.954,3.954,0,0,0,3.531,0l10.861-6.14c.982-.555.988-1.449.011-2l-19.09-10.865a3.969,3.969,0,0,0-3.534,0Z" transform="translate(-518.723 -327.022)" fill="#2f2636"/>
                          </g>
                          <g id="Group_290" data-name="Group 290" transform="translate(0 53.578)">
                            <path id="Path_816" data-name="Path 816" d="M404.543,281.251c-2.225,1.259-2.245,3.3-.035,4.561l12.979,7.388a3.973,3.973,0,0,0,3.539-.006l12.736-7.2c.982-.555.988-1.449.012-2l-15.221-8.661a3.954,3.954,0,0,0-3.531,0Z" transform="translate(-402.862 -274.913)" fill="#2f2636"/>
                          </g>
                          <g id="Group_291" data-name="Group 291" transform="translate(42.843 56.266)">
                            <path id="Path_817" data-name="Path 817" d="M418.429,282.419c-.982.557-.985,1.449-.012,2l19.084,10.86a3.963,3.963,0,0,0,3.539.006l10.861-6.14a1.055,1.055,0,0,0,0-2.009l-19.084-10.86a3.954,3.954,0,0,0-3.531,0Z" transform="translate(-417.69 -275.863)" fill="#2f2636"/>
                          </g>
                          <g id="Group_292" data-name="Group 292" transform="translate(22.123 66.92)">
                            <path id="Path_818" data-name="Path 818" d="M411.261,287.245c-.979.555-.994,1.452-.017,2.006l19.081,10.863a3.992,3.992,0,0,0,3.548,0l12.736-7.2c.982-.555.98-1.454,0-2.009l-19.084-10.86a3.955,3.955,0,0,0-3.531,0Z" transform="translate(-410.519 -279.628)" fill="#2f2636"/>
                          </g>
                          <g id="Group_293" data-name="Group 293" transform="translate(49.431 82.459)">
                            <path id="Path_819" data-name="Path 819" d="M420.709,292.737c-.98.554-.985,1.457-.017,2.006l19.09,10.865a3.973,3.973,0,0,0,3.539-.006l12.736-7.2c.982-.555.985-1.449.011-2l-19.09-10.863a3.961,3.961,0,0,0-3.534,0Z" transform="translate(-419.97 -285.12)" fill="#2f2636"/>
                          </g>
                          <g id="Group_294" data-name="Group 294" transform="translate(97.46 87.349)">
                            <path id="Path_820" data-name="Path 820" d="M437.333,293.4c-.982.555-.988,1.449-.012,2l19.081,10.86a3.964,3.964,0,0,0,3.54.006l10.861-6.14c.982-.555.979-1.454.006-2.009l-19.084-10.86a3.955,3.955,0,0,0-3.531,0Z" transform="translate(-436.593 -286.848)" fill="#2f2636"/>
                          </g>
                          <g id="Group_295" data-name="Group 295" transform="translate(76.739 98.002)">
                            <path id="Path_821" data-name="Path 821" d="M430.165,298.23c-.982.555-.994,1.452-.02,2.006L449.229,311.1a3.991,3.991,0,0,0,3.548,0l12.736-7.2a1.055,1.055,0,0,0,0-2.009l-19.084-10.86a3.955,3.955,0,0,0-3.531,0Z" transform="translate(-429.422 -290.613)" fill="#2f2636"/>
                          </g>
                          <g id="Group_296" data-name="Group 296" transform="translate(124.767 102.89)">
                            <path id="Path_822" data-name="Path 822" d="M446.781,298.9c-.982.555-.979,1.454-.011,2l19.09,10.865a3.973,3.973,0,0,0,3.531,0l10.861-6.14c.982-.557.979-1.454.012-2l-19.09-10.865a3.963,3.963,0,0,0-3.531,0Z" transform="translate(-446.044 -292.34)" fill="#2f2636"/>
                          </g>
                          <g id="Group_297" data-name="Group 297" transform="translate(152.077 118.431)">
                            <path id="Path_823" data-name="Path 823" d="M456.233,304.389c-.98.557-.985,1.449-.009,2l19.082,10.862a3.954,3.954,0,0,0,3.531,0l10.861-6.143c.982-.555.988-1.449.011-2l-19.081-10.86a3.961,3.961,0,0,0-3.534,0Z" transform="translate(-455.496 -297.833)" fill="#2f2636"/>
                          </g>
                          <g id="Group_298" data-name="Group 298" transform="translate(179.381 133.971)">
                            <path id="Path_824" data-name="Path 824" d="M465.684,309.881c-.979.555-.985,1.449-.011,2l19.093,10.865a3.973,3.973,0,0,0,3.531,0l10.861-6.14c.982-.555.979-1.454.011-2l-19.09-10.865a3.961,3.961,0,0,0-3.534,0Z" transform="translate(-464.945 -303.325)" fill="#2f2636"/>
                          </g>
                          <g id="Group_299" data-name="Group 299" transform="translate(206.69 149.512)">
                            <path id="Path_825" data-name="Path 825" d="M475.131,315.372c-.979.555-.977,1.452,0,2.006l19.084,10.863a3.954,3.954,0,0,0,3.531,0L508.6,322.1c.982-.555.985-1.446.012-2l-19.084-10.863a3.973,3.973,0,0,0-3.54,0Z" transform="translate(-474.397 -308.818)" fill="#2f2636"/>
                          </g>
                          <g id="Group_300" data-name="Group 300" transform="translate(233.998 165.053)">
                            <path id="Path_826" data-name="Path 826" d="M484.587,320.866c-.982.555-.985,1.449-.011,2l19.093,10.865a3.972,3.972,0,0,0,3.531,0l10.861-6.14c.98-.555.977-1.454.012-2l-19.093-10.865a3.954,3.954,0,0,0-3.531,0Z" transform="translate(-483.848 -314.31)" fill="#2f2636"/>
                          </g>
                          <g id="Group_301" data-name="Group 301" transform="translate(104.047 113.543)">
                            <path id="Path_827" data-name="Path 827" d="M439.613,303.721c-.982.555-.985,1.457-.02,2.006l14.834,8.443,6.018,3.424,5.579,3.178,20.844,11.861,6.461,3.676,20.853,11.867,6.461,3.676,20.844,11.864,26.432,15.042a3.973,3.973,0,0,0,3.539-.006l12.736-7.2c.982-.557.98-1.454.012-2.006l-26.432-15.042L536.93,342.644l-6.461-3.678L509.617,327.1l-6.461-3.678-20.844-11.861-5.579-3.178-6.018-3.424-14.834-8.44a3.964,3.964,0,0,0-3.531,0Z" transform="translate(-438.873 -296.105)" fill="#2f2636"/>
                          </g>
                          <g id="Group_302" data-name="Group 302" transform="translate(261.306 180.594)">
                            <path id="Path_828" data-name="Path 828" d="M494.035,326.357c-.982.555-.979,1.452,0,2.006l19.084,10.863a3.954,3.954,0,0,0,3.531,0l10.861-6.143c.979-.555.985-1.446.012-2l-19.084-10.86a3.972,3.972,0,0,0-3.539,0Z" transform="translate(-493.299 -319.802)" fill="#2f2636"/>
                          </g>
                          <g id="Group_303" data-name="Group 303" transform="translate(240.587 191.246)">
                            <path id="Path_829" data-name="Path 829" d="M486.867,331.181c-.979.557-.985,1.457-.012,2.015l19.084,10.86a3.973,3.973,0,0,0,3.539-.006l12.736-7.2c.982-.555.985-1.449.012-2l-19.084-10.86a3.973,3.973,0,0,0-3.539-.006Z" transform="translate(-486.129 -323.567)" fill="#2f2636"/>
                          </g>
                          <g id="Group_304" data-name="Group 304" transform="translate(288.614 196.135)">
                            <path id="Path_830" data-name="Path 830" d="M503.491,331.851c-.982.555-.988,1.449-.012,2l19.081,10.86a3.979,3.979,0,0,0,3.542.006l10.858-6.14c.982-.555.979-1.454.006-2.009l-19.084-10.86a3.955,3.955,0,0,0-3.531,0Z" transform="translate(-502.751 -325.295)" fill="#2f2636"/>
                          </g>
                          <g id="Group_305" data-name="Group 305" transform="translate(267.894 206.789)">
                            <path id="Path_831" data-name="Path 831" d="M496.323,336.677c-.982.555-.994,1.452-.02,2.006l19.084,10.86a3.974,3.974,0,0,0,3.548,0l12.736-7.2c.98-.557.977-1.454,0-2.009l-19.084-10.86a3.955,3.955,0,0,0-3.531,0Z" transform="translate(-495.58 -329.06)" fill="#2f2636"/>
                          </g>
                          <g id="Group_306" data-name="Group 306" transform="translate(315.922 211.676)">
                            <path id="Path_832" data-name="Path 832" d="M512.939,337.342c-.982.555-.979,1.452-.011,2l19.09,10.865a3.955,3.955,0,0,0,3.531,0l10.861-6.143c.982-.555.988-1.446.012-2L527.331,331.2a3.964,3.964,0,0,0-3.531,0Z" transform="translate(-512.202 -330.787)" fill="#2f2636"/>
                          </g>
                          <g id="Group_307" data-name="Group 307" transform="translate(295.202 222.328)">
                            <path id="Path_833" data-name="Path 833" d="M505.771,342.166c-.982.557-.985,1.457-.02,2.009l19.093,10.865a3.973,3.973,0,0,0,3.539-.006l12.736-7.2c.979-.555.985-1.449.012-2l-19.093-10.863a3.954,3.954,0,0,0-3.531,0Z" transform="translate(-505.031 -334.552)" fill="#2f2636"/>
                          </g>
                        </g>
                        <g id="Group_315" data-name="Group 315" transform="translate(324.013 183.38)">
                          <g id="Group_309" data-name="Group 309" transform="translate(94.586)">
                            <path id="Path_834" data-name="Path 834" d="M548.472,328.41c-.971.549-.985,1.446-.009,2l14.435,8.214a3.964,3.964,0,0,0,3.531,0l10.48-5.922c2.233-1.265,2.245-3.3.035-4.561l-12.2-6.941a3.955,3.955,0,0,0-3.531,0Z" transform="translate(-547.738 -320.787)" fill="#2f2636"/>
                          </g>
                          <g id="Group_310" data-name="Group 310" transform="translate(75.745 11.878)">
                            <path id="Path_835" data-name="Path 835" d="M541.954,331.544c-.974.552-.988,1.449-.011,2l14.435,8.217a3.979,3.979,0,0,0,3.534,0l10.861-6.14c.979-.557.994-1.454.017-2.009L556.355,325.4a3.973,3.973,0,0,0-3.539.006Z" transform="translate(-541.217 -324.985)" fill="#2f2636"/>
                          </g>
                          <g id="Group_311" data-name="Group 311" transform="translate(56.904 22.532)">
                            <path id="Path_836" data-name="Path 836" d="M535.432,335.309c-.974.549-.985,1.449-.012,2l14.438,8.217a3.973,3.973,0,0,0,3.531,0l10.861-6.143c.982-.555.994-1.452.02-2.006l-14.438-8.217a3.973,3.973,0,0,0-3.539.006Z" transform="translate(-534.696 -328.75)" fill="#2f2636"/>
                          </g>
                          <g id="Group_312" data-name="Group 312" transform="translate(38.06 33.185)">
                            <path id="Path_837" data-name="Path 837" d="M528.913,339.074c-.979.555-.985,1.446-.011,2l14.438,8.214a3.955,3.955,0,0,0,3.531,0l10.861-6.14c.983-.555.988-1.449.012-2L543.3,332.931a3.955,3.955,0,0,0-3.531,0Z" transform="translate(-528.174 -332.515)" fill="#2f2636"/>
                          </g>
                          <g id="Group_313" data-name="Group 313" transform="translate(19.219 43.838)">
                            <path id="Path_838" data-name="Path 838" d="M522.394,342.836c-.982.555-.988,1.449-.012,2l14.435,8.217a3.961,3.961,0,0,0,3.534,0l10.858-6.14c.982-.555.988-1.449.012-2L536.786,336.7a3.96,3.96,0,0,0-3.534,0Z" transform="translate(-521.654 -336.28)" fill="#2f2636"/>
                          </g>
                          <g id="Group_314" data-name="Group 314" transform="translate(0 54.491)">
                            <path id="Path_839" data-name="Path 839" d="M515.745,347.662c-.979.555-.994,1.452-.02,2.006l12.2,6.941a9.031,9.031,0,0,0,8.041-.006l10.477-5.922c.982-.554.988-1.449.011-2l-14.438-8.217a3.954,3.954,0,0,0-3.531,0Z" transform="translate(-515.002 -340.045)" fill="#2f2636"/>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
                <g id="Group_454" data-name="Group 454" transform="translate(318.179 30.396)">
                  <g id="Group_445" data-name="Group 445">
                    <g id="Group_443" data-name="Group 443" transform="translate(18.496 29.368)" opacity="0.58" style="mix-blend-mode: color-dodge;isolation: isolate">
                      <g id="Group_442" data-name="Group 442">
                        <g id="Group_320" data-name="Group 320" transform="translate(96.52 228.134)">
                          <path id="Path_840" data-name="Path 840" d="M486.6,238.83l0-1.536,30.31,17.137,0,1.536Z" transform="translate(-486.601 -237.293)" fill="#963ed4"/>
                        </g>
                        <g id="Group_321" data-name="Group 321" transform="translate(96.631 189.543)">
                          <path id="Path_841" data-name="Path 841" d="M486.64,225.212l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-486.64 -223.655)" fill="#963ed4"/>
                        </g>
                        <g id="Group_322" data-name="Group 322" transform="translate(255.078 259.812)">
                          <path id="Path_842" data-name="Path 842" d="M541.478,250.046l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-541.478 -248.489)" fill="#963ed4"/>
                        </g>
                        <g id="Group_323" data-name="Group 323" transform="translate(0.962 116.137)">
                          <path id="Path_843" data-name="Path 843" d="M453.533,197.712l.7.4,30.291,17.126,0,1.557L454.23,199.665l-.7-.4Z" transform="translate(-453.529 -197.712)" fill="#963ed4"/>
                        </g>
                        <g id="Group_324" data-name="Group 324" transform="translate(96.743 150.974)">
                          <path id="Path_844" data-name="Path 844" d="M486.678,211.56l0-1.536,30.31,17.137,0,1.536Z" transform="translate(-486.678 -210.024)" fill="#963ed4"/>
                        </g>
                        <g id="Group_325" data-name="Group 325" transform="translate(255.19 221.222)">
                          <path id="Path_845" data-name="Path 845" d="M541.516,236.407l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-541.516 -234.85)" fill="#963ed4"/>
                        </g>
                        <g id="Group_326" data-name="Group 326" transform="translate(96.799 131.668)">
                          <path id="Path_846" data-name="Path 846" d="M486.7,204.758l0-1.557,30.31,17.137,0,1.557Z" transform="translate(-486.698 -203.201)" fill="#963ed4"/>
                        </g>
                        <g id="Group_327" data-name="Group 327" transform="translate(255.246 201.937)">
                          <path id="Path_847" data-name="Path 847" d="M541.536,229.592l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-541.536 -228.035)" fill="#963ed4"/>
                        </g>
                        <g id="Group_328" data-name="Group 328" transform="translate(96.855 112.383)">
                          <path id="Path_848" data-name="Path 848" d="M486.717,197.942l0-1.557,30.31,17.137,0,1.557Z" transform="translate(-486.717 -196.385)" fill="#963ed4"/>
                        </g>
                        <g id="Group_329" data-name="Group 329" transform="translate(255.302 182.652)">
                          <path id="Path_849" data-name="Path 849" d="M541.555,222.776l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-541.555 -221.219)" fill="#963ed4"/>
                        </g>
                        <g id="Group_330" data-name="Group 330" transform="translate(96.91 93.099)">
                          <path id="Path_850" data-name="Path 850" d="M486.736,191.126l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-486.736 -189.57)" fill="#963ed4"/>
                        </g>
                        <g id="Group_331" data-name="Group 331" transform="translate(255.358 163.347)">
                          <path id="Path_851" data-name="Path 851" d="M541.574,215.953l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-541.574 -214.396)" fill="#963ed4"/>
                        </g>
                        <g id="Group_332" data-name="Group 332" transform="translate(96.966 73.793)">
                          <path id="Path_852" data-name="Path 852" d="M486.756,184.3l0-1.557,30.31,17.137,0,1.557Z" transform="translate(-486.756 -182.747)" fill="#963ed4"/>
                        </g>
                        <g id="Group_333" data-name="Group 333" transform="translate(1.242 19.671)">
                          <path id="Path_853" data-name="Path 853" d="M453.63,163.619l.7.4,30.291,17.126,0,1.557-30.291-17.126-.7-.4Z" transform="translate(-453.626 -163.619)" fill="#963ed4"/>
                        </g>
                        <g id="Group_434" data-name="Group 434" style="isolation: isolate">
                          <g id="Group_334" data-name="Group 334" transform="translate(0.795 174.012)">
                            <path id="Path_854" data-name="Path 854" d="M453.475,218.166l.7.4,30.291,17.126,0,1.536L454.172,220.1l-.7-.4Z" transform="translate(-453.471 -218.166)" fill="#963ed4"/>
                          </g>
                          <g id="Group_335" data-name="Group 335" transform="translate(0.906 135.421)">
                            <path id="Path_855" data-name="Path 855" d="M453.514,204.527l.7.4,30.291,17.126,0,1.557L454.211,206.48l-.7-.4Z" transform="translate(-453.51 -204.527)" fill="#963ed4"/>
                          </g>
                          <g id="Group_336" data-name="Group 336" transform="translate(33.226 173.032)">
                            <path id="Path_856" data-name="Path 856" d="M464.7,219.356l0-1.536,30.291,17.127,0,1.536Z" transform="translate(-464.695 -217.819)" fill="#963ed4"/>
                          </g>
                          <g id="Group_337" data-name="Group 337" transform="translate(33.338 134.442)">
                            <path id="Path_857" data-name="Path 857" d="M464.734,205.738l0-1.557,30.291,17.127,0,1.557Z" transform="translate(-464.734 -204.181)" fill="#963ed4"/>
                          </g>
                          <g id="Group_338" data-name="Group 338" transform="translate(1.074 77.546)">
                            <path id="Path_858" data-name="Path 858" d="M453.572,184.073l.7.4L484.564,201.6l0,1.557-30.291-17.126-.7-.4Z" transform="translate(-453.568 -184.073)" fill="#963ed4"/>
                          </g>
                          <g id="Group_339" data-name="Group 339" transform="translate(64.957 171.635)">
                            <path id="Path_859" data-name="Path 859" d="M475.677,218.882l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-475.677 -217.326)" fill="#963ed4"/>
                          </g>
                          <g id="Group_340" data-name="Group 340" transform="translate(33.394 115.157)">
                            <path id="Path_860" data-name="Path 860" d="M464.753,198.9l0-1.536,30.291,17.126,0,1.536Z" transform="translate(-464.753 -197.365)" fill="#963ed4"/>
                          </g>
                          <g id="Group_341" data-name="Group 341" transform="translate(1.13 58.262)">
                            <path id="Path_861" data-name="Path 861" d="M453.591,177.258l.7.4,30.291,17.126,0,1.557-30.291-17.126-.7-.4Z" transform="translate(-453.587 -177.258)" fill="#963ed4"/>
                          </g>
                          <g id="Group_342" data-name="Group 342" transform="translate(128.194 246.042)">
                            <path id="Path_862" data-name="Path 862" d="M497.564,245.159l0-1.536,30.31,17.137,0,1.536Z" transform="translate(-497.564 -243.623)" fill="#963ed4"/>
                          </g>
                          <g id="Group_343" data-name="Group 343" transform="translate(33.505 76.566)">
                            <path id="Path_863" data-name="Path 863" d="M464.792,185.284l0-1.557,30.291,17.127,0,1.557Z" transform="translate(-464.792 -183.727)" fill="#963ed4"/>
                          </g>
                          <g id="Group_344" data-name="Group 344" transform="translate(128.25 226.758)">
                            <path id="Path_864" data-name="Path 864" d="M497.583,238.343l0-1.536,30.31,17.137,0,1.536Z" transform="translate(-497.583 -236.807)" fill="#963ed4"/>
                          </g>
                          <g id="Group_345" data-name="Group 345" transform="translate(65.124 113.76)">
                            <path id="Path_865" data-name="Path 865" d="M475.735,198.428l0-1.557L506.031,214l0,1.557Z" transform="translate(-475.735 -196.872)" fill="#963ed4"/>
                          </g>
                          <g id="Group_346" data-name="Group 346" transform="translate(33.561 57.282)">
                            <path id="Path_866" data-name="Path 866" d="M464.811,178.468l0-1.557,30.291,17.127,0,1.557Z" transform="translate(-464.811 -176.911)" fill="#963ed4"/>
                          </g>
                          <g id="Group_347" data-name="Group 347" transform="translate(65.18 94.475)">
                            <path id="Path_867" data-name="Path 867" d="M475.755,191.613l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-475.755 -190.056)" fill="#963ed4"/>
                          </g>
                          <g id="Group_348" data-name="Group 348" transform="translate(33.617 37.976)">
                            <path id="Path_868" data-name="Path 868" d="M464.831,171.645l0-1.557,30.291,17.127,0,1.557Z" transform="translate(-464.831 -170.088)" fill="#963ed4"/>
                          </g>
                          <g id="Group_349" data-name="Group 349" transform="translate(191.506 301.155)">
                            <path id="Path_869" data-name="Path 869" d="M519.475,264.657l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-519.475 -263.1)" fill="#963ed4"/>
                          </g>
                          <g id="Group_350" data-name="Group 350" transform="translate(63.352 36.607)">
                            <path id="Path_870" data-name="Path 870" d="M477.12,170.386l0,.768-.051,17.728,0,1.557-.051,17.748,0,1.557-.051,17.728,0,1.557-.051,17.728,0,1.557-.051,17.749,0,1.536-.051,17.749,0,1.557-.051,17.728,0,1.557-.051,17.748,0,1.536-.051,17.749,0,1.536-.052,17.748,0,1.557-.051,17.728,0,.789-1.384-.782,0-.789.052-17.728,0-1.557.051-17.749,0-1.536.051-17.749,0-1.536.051-17.749,0-1.557.051-17.728,0-1.557.051-17.748,0-1.536.051-17.749,0-1.556.051-17.728,0-1.557.051-17.728,0-1.557.051-17.749,0-1.557.051-17.728,0-.768Z" transform="translate(-475.122 -169.604)" fill="#963ed4"/>
                          </g>
                          <g id="Group_351" data-name="Group 351" transform="translate(191.562 281.87)">
                            <path id="Path_871" data-name="Path 871" d="M519.495,257.821l0-1.536,30.291,17.126,0,1.536Z" transform="translate(-519.495 -256.285)" fill="#963ed4"/>
                          </g>
                          <g id="Group_352" data-name="Group 352" transform="translate(160.036 206.076)">
                            <path id="Path_872" data-name="Path 872" d="M508.584,231.055l0-1.557L538.9,246.634l0,1.557Z" transform="translate(-508.584 -229.498)" fill="#963ed4"/>
                          </g>
                          <g id="Group_353" data-name="Group 353" transform="translate(128.473 149.577)">
                            <path id="Path_873" data-name="Path 873" d="M497.66,211.087l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-497.66 -209.53)" fill="#963ed4"/>
                          </g>
                          <g id="Group_354" data-name="Group 354" transform="translate(95.027 54.515)">
                            <path id="Path_874" data-name="Path 874" d="M488.082,176.716l0,.768-.052,17.728,0,1.557-.051,17.748,0,1.557-.051,17.728,0,1.557-.052,17.728,0,1.557-.051,17.749,0,1.536-.051,17.748,0,1.557-.051,17.728,0,1.557-.052,17.749,0,1.536-.051,17.749,0,1.536-.051,17.749,0,1.557-.051,17.728,0,.789-1.383-.782,0-.789.051-17.728,0-1.557.051-17.749,0-1.536.051-17.749,0-1.536.051-17.748,0-1.557.052-17.728,0-1.557.051-17.748,0-1.536.052-17.749,0-1.557.051-17.728,0-1.557.051-17.728,0-1.557.051-17.749,0-1.557L486.7,176.7l0-.768Z" transform="translate(-486.084 -175.933)" fill="#963ed4"/>
                          </g>
                          <g id="Group_355" data-name="Group 355" transform="translate(223.236 299.779)">
                            <path id="Path_875" data-name="Path 875" d="M530.457,264.15l0-1.536,30.291,17.127,0,1.536Z" transform="translate(-530.457 -262.614)" fill="#963ed4"/>
                          </g>
                          <g id="Group_356" data-name="Group 356" transform="translate(191.674 243.28)">
                            <path id="Path_876" data-name="Path 876" d="M519.533,244.2l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-519.533 -242.646)" fill="#963ed4"/>
                          </g>
                          <g id="Group_357" data-name="Group 357" transform="translate(191.729 223.995)">
                            <path id="Path_877" data-name="Path 877" d="M519.553,237.388l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-519.553 -235.83)" fill="#963ed4"/>
                          </g>
                          <g id="Group_358" data-name="Group 358" transform="translate(160.148 167.486)">
                            <path id="Path_878" data-name="Path 878" d="M508.623,217.416l0-1.557L538.937,233l0,1.557Z" transform="translate(-508.623 -215.859)" fill="#963ed4"/>
                          </g>
                          <g id="Group_359" data-name="Group 359" transform="translate(223.348 261.188)">
                            <path id="Path_879" data-name="Path 879" d="M530.5,250.532l0-1.557L560.791,266.1l0,1.557Z" transform="translate(-530.496 -248.975)" fill="#963ed4"/>
                          </g>
                          <g id="Group_360" data-name="Group 360" transform="translate(160.204 148.2)">
                            <path id="Path_880" data-name="Path 880" d="M508.642,210.6l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-508.642 -209.044)" fill="#963ed4"/>
                          </g>
                          <g id="Group_361" data-name="Group 361" transform="translate(128.641 91.702)">
                            <path id="Path_881" data-name="Path 881" d="M497.718,190.633l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-497.718 -189.076)" fill="#963ed4"/>
                          </g>
                          <g id="Group_362" data-name="Group 362" transform="translate(286.53 354.881)">
                            <path id="Path_882" data-name="Path 882" d="M552.363,283.645l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-552.363 -282.088)" fill="#963ed4"/>
                          </g>
                          <g id="Group_363" data-name="Group 363" transform="translate(191.841 185.405)">
                            <path id="Path_883" data-name="Path 883" d="M519.591,223.749l0-1.557,30.291,17.126,0,1.556Z" transform="translate(-519.591 -222.192)" fill="#963ed4"/>
                          </g>
                          <g id="Group_364" data-name="Group 364" transform="translate(160.26 128.916)">
                            <path id="Path_884" data-name="Path 884" d="M508.661,203.785l0-1.557,30.31,17.137,0,1.557Z" transform="translate(-508.661 -202.228)" fill="#963ed4"/>
                          </g>
                          <g id="Group_365" data-name="Group 365" transform="translate(158.394 90.343)">
                            <path id="Path_885" data-name="Path 885" d="M510,189.367l0,.768-.052,17.728,0,1.557-.052,17.749,0,1.557-.051,17.728,0,1.557-.052,17.728,0,1.557-.051,17.749,0,1.536-.052,17.748,0,1.557-.051,17.728,0,1.557-.051,17.749,0,1.536-.051,17.749,0,1.536-.051,17.748,0,1.557-.051,17.728,0,.789-1.365-.772,0-.789.051-17.728,0-1.557.051-17.749,0-1.536.051-17.749,0-1.536.051-17.749,0-1.557.051-17.728,0-1.557.051-17.749,0-1.536.051-17.749,0-1.557.051-17.728,0-1.557.052-17.727,0-1.557.052-17.749,0-1.557.051-17.728,0-.768Z" transform="translate(-508.016 -188.596)" fill="#963ed4"/>
                          </g>
                          <g id="Group_366" data-name="Group 366" transform="translate(255.023 279.097)">
                            <path id="Path_886" data-name="Path 886" d="M541.458,256.861l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-541.458 -255.304)" fill="#963ed4"/>
                          </g>
                          <g id="Group_367" data-name="Group 367" transform="translate(223.46 222.619)">
                            <path id="Path_887" data-name="Path 887" d="M530.535,236.88l0-1.536L560.83,252.47l0,1.536Z" transform="translate(-530.535 -235.344)" fill="#963ed4"/>
                          </g>
                          <g id="Group_368" data-name="Group 368" transform="translate(191.897 166.12)">
                            <path id="Path_888" data-name="Path 888" d="M519.611,216.933l0-1.557L549.906,232.5l0,1.557Z" transform="translate(-519.611 -215.376)" fill="#963ed4"/>
                          </g>
                          <g id="Group_369" data-name="Group 369" transform="translate(286.642 316.311)">
                            <path id="Path_889" data-name="Path 889" d="M552.4,269.993l0-1.536,30.309,17.137,0,1.536Z" transform="translate(-552.402 -268.456)" fill="#963ed4"/>
                          </g>
                          <g id="Group_370" data-name="Group 370" transform="translate(223.515 203.313)">
                            <path id="Path_890" data-name="Path 890" d="M530.554,230.078l0-1.557,30.291,17.127,0,1.556Z" transform="translate(-530.554 -228.521)" fill="#963ed4"/>
                          </g>
                          <g id="Group_371" data-name="Group 371" transform="translate(191.953 146.835)">
                            <path id="Path_891" data-name="Path 891" d="M519.63,210.118l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-519.63 -208.561)" fill="#963ed4"/>
                          </g>
                          <g id="Group_372" data-name="Group 372" transform="translate(190.069 108.251)">
                            <path id="Path_892" data-name="Path 892" d="M520.976,195.707l0,.768-.051,17.728,0,1.557-.051,17.748,0,1.557-.051,17.728,0,1.557-.051,17.728,0,1.557-.052,17.749,0,1.536-.051,17.749,0,1.557-.051,17.728,0,1.557-.052,17.749,0,1.536-.051,17.749,0,1.536-.051,17.748,0,1.557-.051,17.728,0,.789-1.384-.782,0-.789.052-17.728,0-1.557.052-17.749,0-1.536.052-17.749,0-1.536.052-17.749,0-1.557.051-17.728,0-1.557.051-17.748,0-1.536.051-17.749,0-1.557.051-17.728,0-1.557.052-17.728,0-1.557.051-17.749,0-1.557.052-17.728,0-.768Z" transform="translate(-518.978 -194.925)" fill="#963ed4"/>
                          </g>
                          <g id="Group_373" data-name="Group 373" transform="translate(223.571 184.028)">
                            <path id="Path_893" data-name="Path 893" d="M530.573,223.263l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-530.573 -221.706)" fill="#963ed4"/>
                          </g>
                          <g id="Group_374" data-name="Group 374" transform="translate(223.627 164.744)">
                            <path id="Path_894" data-name="Path 894" d="M530.592,216.447l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-530.592 -214.89)" fill="#963ed4"/>
                          </g>
                          <g id="Group_375" data-name="Group 375" transform="translate(318.427 295.629)">
                            <path id="Path_895" data-name="Path 895" d="M593.717,278.284l.682.386,0,1.557-.683-.386L563.4,262.7l0-1.557Z" transform="translate(-563.403 -261.147)" fill="#963ed4"/>
                          </g>
                          <g id="Group_376" data-name="Group 376" transform="translate(318.484 276.344)">
                            <path id="Path_896" data-name="Path 896" d="M593.736,271.468l.683.386,0,1.536-.682-.386-30.309-17.137,0-1.536Z" transform="translate(-563.422 -254.332)" fill="#963ed4"/>
                          </g>
                          <g id="Group_377" data-name="Group 377" transform="translate(286.976 200.561)">
                            <path id="Path_897" data-name="Path 897" d="M552.518,229.105l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-552.518 -227.548)" fill="#963ed4"/>
                          </g>
                          <g id="Group_378" data-name="Group 378" transform="translate(285.093 161.977)">
                            <path id="Path_898" data-name="Path 898" d="M553.864,214.694l0,.768-.051,17.728,0,1.557-.051,17.749,0,1.557-.051,17.728,0,1.557-.051,17.728,0,1.556-.052,17.749,0,1.536-.051,17.749,0,1.557-.051,17.728,0,1.557-.051,17.749,0,1.536-.051,17.749,0,1.536-.051,17.749,0,1.557-.052,17.728,0,.789-1.384-.782,0-.789.052-17.728,0-1.557.052-17.749,0-1.536L552.031,369l0-1.536.051-17.749,0-1.557.051-17.728,0-1.557.051-17.748,0-1.536.051-17.749,0-1.557.051-17.728,0-1.557.052-17.728,0-1.557.052-17.748,0-1.557.052-17.728,0-.768Z" transform="translate(-551.865 -213.912)" fill="#963ed4"/>
                          </g>
                          <g id="Group_379" data-name="Group 379" transform="translate(316.786 179.896)">
                            <path id="Path_899" data-name="Path 899" d="M564.814,221.017l0,.768-.051,17.728,0,1.557-.051,17.748,0,1.557-.051,17.728,0,1.557-.052,17.728,0,1.557-.051,17.749,0,1.536-.052,17.749,0,1.557-.052,17.728,0,1.557-.051,17.749,0,1.536-.051,17.749,0,1.536-.051,17.749,0,1.557-.052,17.728,0,.789-1.365-.772,0-.789.051-17.728,0-1.557.051-17.749,0-1.536L563,375.333l0-1.536.052-17.749,0-1.557.051-17.728,0-1.557.051-17.749,0-1.536.051-17.749,0-1.556.051-17.728,0-1.557.051-17.728,0-1.557.051-17.748,0-1.557.051-17.728,0-.768Z" transform="translate(-562.834 -220.245)" fill="#963ed4"/>
                          </g>
                          <g id="Group_380" data-name="Group 380" transform="translate(318.707 199.164)">
                            <path id="Path_900" data-name="Path 900" d="M593.813,244.191l.683.386,0,1.557-.682-.386L563.5,228.611l0-1.557Z" transform="translate(-563.499 -227.055)" fill="#963ed4"/>
                          </g>
                          <g id="Group_381" data-name="Group 381">
                            <path id="Path_901" data-name="Path 901" d="M453.814,156.667,803.639,354.453l-.621,213.753L453.2,370.42Zm348.4,217.856.688-1.171-.63-18.112L771.96,338.1l-1.364-1.539-30.312-16.369-1.381-1.551L708.61,302.286l-1.381-1.551-30.3-16.357-1.381-1.551-30.292-16.357-1.381-1.551L613.568,248.55l-1.364-1.542-30.312-16.366-1.361-1.542-30.312-16.369-1.381-1.551-30.292-16.357-1.384-1.551-30.292-16.357-1.381-1.551L455.2,159.007l-.052,17.727-.7,1.16.65,18.146-.708,1.16.65,18.126-.705,1.16.65,18.123-.705,1.16.65,18.146-.708,1.14.65,18.146-.705,1.16.65,18.123-.705,1.16.65,18.146-.708,1.14.65,18.146-.7,1.14.65,18.143-.705,1.16.65,18.126,30.289,17.127,1.381,1.57,30.3,16.338,1.381,1.57,30.292,16.338,1.381,1.57,30.312,16.349,1.364,1.559,30.309,16.349,1.364,1.562,30.312,16.346,1.381,1.57,30.292,16.338,1.381,1.573,30.295,16.338,1.381,1.57,30.292,16.338,1.381,1.57,30.313,16.349,1.364,1.559,30.309,16.349.052-17.73.688-1.169-.63-18.134.685-1.152-.63-18.134.688-1.152-.633-18.134.688-1.169-.63-18.115.685-1.171-.63-18.134.688-1.152-.633-18.134.688-1.169-.63-18.115.685-1.171-.63-18.115.688-1.171-.633-18.134" transform="translate(-453.196 -156.667)" fill="#963ed4"/>
                          </g>
                          <g id="Group_382" data-name="Group 382" transform="translate(0.739 193.297)">
                            <path id="Path_902" data-name="Path 902" d="M453.456,224.981l.7.4L484.448,242.5l0,1.557-30.291-17.126-.7-.4Z" transform="translate(-453.452 -224.981)" fill="#963ed4"/>
                          </g>
                          <g id="Group_383" data-name="Group 383" transform="translate(0.851 154.727)">
                            <path id="Path_903" data-name="Path 903" d="M453.5,211.35l.7.4,30.291,17.126,0,1.536-30.291-17.126-.7-.4Z" transform="translate(-453.49 -211.35)" fill="#963ed4"/>
                          </g>
                          <g id="Group_384" data-name="Group 384" transform="translate(33.17 192.317)">
                            <path id="Path_904" data-name="Path 904" d="M464.676,226.171l0-1.536,30.291,17.126,0,1.536Z" transform="translate(-464.676 -224.635)" fill="#963ed4"/>
                          </g>
                          <g id="Group_385" data-name="Group 385" transform="translate(64.789 229.51)">
                            <path id="Path_905" data-name="Path 905" d="M475.619,239.337l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-475.619 -237.78)" fill="#963ed4"/>
                          </g>
                          <g id="Group_386" data-name="Group 386" transform="translate(64.845 210.226)">
                            <path id="Path_906" data-name="Path 906" d="M475.639,232.5l0-1.536,30.291,17.126,0,1.536Z" transform="translate(-475.639 -230.964)" fill="#963ed4"/>
                          </g>
                          <g id="Group_387" data-name="Group 387" transform="translate(33.282 153.727)">
                            <path id="Path_907" data-name="Path 907" d="M464.715,212.553l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-464.715 -210.996)" fill="#963ed4"/>
                          </g>
                          <g id="Group_388" data-name="Group 388" transform="translate(1.018 96.852)">
                            <path id="Path_908" data-name="Path 908" d="M453.553,190.9l.7.4,30.291,17.126,0,1.536-30.291-17.126-.7-.4Z" transform="translate(-453.548 -190.896)" fill="#963ed4"/>
                          </g>
                          <g id="Group_389" data-name="Group 389" transform="translate(96.464 247.419)">
                            <path id="Path_909" data-name="Path 909" d="M486.582,245.666l0-1.557,30.31,17.137,0,1.557Z" transform="translate(-486.582 -244.109)" fill="#963ed4"/>
                          </g>
                          <g id="Group_390" data-name="Group 390" transform="translate(64.901 190.94)">
                            <path id="Path_910" data-name="Path 910" d="M475.658,225.685l0-1.536,30.291,17.126,0,1.536Z" transform="translate(-475.658 -224.148)" fill="#963ed4"/>
                          </g>
                          <g id="Group_391" data-name="Group 391" transform="translate(128.138 265.327)">
                            <path id="Path_911" data-name="Path 911" d="M497.544,251.995l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-497.544 -250.438)" fill="#963ed4"/>
                          </g>
                          <g id="Group_392" data-name="Group 392" transform="translate(96.575 208.849)">
                            <path id="Path_912" data-name="Path 912" d="M486.62,232.014l0-1.536,30.31,17.137,0,1.536Z" transform="translate(-486.62 -230.478)" fill="#963ed4"/>
                          </g>
                          <g id="Group_393" data-name="Group 393" transform="translate(65.012 152.35)">
                            <path id="Path_913" data-name="Path 913" d="M475.7,212.067l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-475.697 -210.51)" fill="#963ed4"/>
                          </g>
                          <g id="Group_394" data-name="Group 394" transform="translate(1.186 38.977)">
                            <path id="Path_914" data-name="Path 914" d="M453.611,170.442l.7.4L484.6,187.965l0,1.557L454.307,172.4l-.7-.4Z" transform="translate(-453.606 -170.442)" fill="#963ed4"/>
                          </g>
                          <g id="Group_395" data-name="Group 395" transform="translate(65.069 133.066)">
                            <path id="Path_915" data-name="Path 915" d="M475.716,205.231l0-1.536,30.291,17.126,0,1.536Z" transform="translate(-475.716 -203.695)" fill="#963ed4"/>
                          </g>
                          <g id="Group_396" data-name="Group 396" transform="translate(159.813 283.236)">
                            <path id="Path_916" data-name="Path 916" d="M508.507,258.324l0-1.557L538.821,273.9l0,1.557Z" transform="translate(-508.507 -256.767)" fill="#963ed4"/>
                          </g>
                          <g id="Group_397" data-name="Group 397" transform="translate(96.687 170.259)">
                            <path id="Path_917" data-name="Path 917" d="M486.659,218.4l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-486.659 -216.839)" fill="#963ed4"/>
                          </g>
                          <g id="Group_398" data-name="Group 398" transform="translate(31.678 18.698)">
                            <path id="Path_918" data-name="Path 918" d="M466.157,164.057l0,.768-.051,17.728,0,1.557-.051,17.749,0,1.557-.051,17.728,0,1.557-.051,17.728,0,1.557-.051,17.749,0,1.536-.051,17.748,0,1.557-.051,17.728,0,1.557-.051,17.748,0,1.536-.051,17.749,0,1.536-.051,17.749,0,1.557-.051,17.728,0,.789-1.383-.782,0-.789.051-17.728,0-1.557.051-17.749,0-1.536.051-17.749,0-1.536.051-17.749,0-1.557.051-17.728,0-1.557.051-17.748,0-1.536.052-17.749,0-1.557.051-17.728,0-1.557.051-17.728,0-1.557.052-17.748,0-1.557.051-17.728,0-.768Z" transform="translate(-464.159 -163.275)" fill="#963ed4"/>
                          </g>
                          <g id="Group_399" data-name="Group 399" transform="translate(159.869 263.951)">
                            <path id="Path_919" data-name="Path 919" d="M508.526,251.488l0-1.536,30.31,17.137,0,1.536Z" transform="translate(-508.526 -249.952)" fill="#963ed4"/>
                          </g>
                          <g id="Group_400" data-name="Group 400" transform="translate(128.306 207.452)">
                            <path id="Path_920" data-name="Path 920" d="M497.6,231.541l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-497.602 -229.984)" fill="#963ed4"/>
                          </g>
                          <g id="Group_401" data-name="Group 401" transform="translate(159.924 244.666)">
                            <path id="Path_921" data-name="Path 921" d="M508.545,244.672l0-1.536,30.31,17.137,0,1.536Z" transform="translate(-508.545 -243.136)" fill="#963ed4"/>
                          </g>
                          <g id="Group_402" data-name="Group 402" transform="translate(128.362 188.167)">
                            <path id="Path_922" data-name="Path 922" d="M497.621,224.726l0-1.557,30.31,17.136,0,1.557Z" transform="translate(-497.621 -223.168)" fill="#963ed4"/>
                          </g>
                          <g id="Group_403" data-name="Group 403" transform="translate(65.236 75.19)">
                            <path id="Path_923" data-name="Path 923" d="M475.774,184.8l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-475.774 -183.24)" fill="#963ed4"/>
                          </g>
                          <g id="Group_404" data-name="Group 404" transform="translate(159.98 225.361)">
                            <path id="Path_924" data-name="Path 924" d="M508.565,237.87l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-508.565 -236.313)" fill="#963ed4"/>
                          </g>
                          <g id="Group_405" data-name="Group 405" transform="translate(128.418 168.883)">
                            <path id="Path_925" data-name="Path 925" d="M497.641,217.889l0-1.536,30.309,17.136,0,1.536Z" transform="translate(-497.641 -216.353)" fill="#963ed4"/>
                          </g>
                          <g id="Group_406" data-name="Group 406" transform="translate(65.292 55.885)">
                            <path id="Path_926" data-name="Path 926" d="M475.793,177.974l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-475.793 -176.418)" fill="#963ed4"/>
                          </g>
                          <g id="Group_407" data-name="Group 407" transform="translate(223.18 319.063)">
                            <path id="Path_927" data-name="Path 927" d="M530.438,270.986l0-1.557,30.291,17.127,0,1.557Z" transform="translate(-530.438 -269.429)" fill="#963ed4"/>
                          </g>
                          <g id="Group_408" data-name="Group 408" transform="translate(191.618 262.585)">
                            <path id="Path_928" data-name="Path 928" d="M519.514,251.005l0-1.536L549.81,266.6l0,1.536Z" transform="translate(-519.514 -249.469)" fill="#963ed4"/>
                          </g>
                          <g id="Group_409" data-name="Group 409" transform="translate(160.092 186.791)">
                            <path id="Path_929" data-name="Path 929" d="M508.6,224.218l0-1.536,30.31,17.137,0,1.536Z" transform="translate(-508.603 -222.682)" fill="#963ed4"/>
                          </g>
                          <g id="Group_410" data-name="Group 410" transform="translate(128.529 130.292)">
                            <path id="Path_930" data-name="Path 930" d="M497.679,204.271l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-497.679 -202.714)" fill="#963ed4"/>
                          </g>
                          <g id="Group_411" data-name="Group 411" transform="translate(254.855 336.972)">
                            <path id="Path_931" data-name="Path 931" d="M541.4,277.315l0-1.557L571.7,292.885l0,1.557Z" transform="translate(-541.4 -275.759)" fill="#963ed4"/>
                          </g>
                          <g id="Group_412" data-name="Group 412" transform="translate(223.292 280.494)">
                            <path id="Path_932" data-name="Path 932" d="M530.477,257.334l0-1.536,30.291,17.126,0,1.536Z" transform="translate(-530.477 -255.798)" fill="#963ed4"/>
                          </g>
                          <g id="Group_413" data-name="Group 413" transform="translate(128.585 111.007)">
                            <path id="Path_933" data-name="Path 933" d="M497.7,197.456l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-497.699 -195.899)" fill="#963ed4"/>
                          </g>
                          <g id="Group_414" data-name="Group 414" transform="translate(126.72 72.434)">
                            <path id="Path_934" data-name="Path 934" d="M499.033,183.038l0,.768-.051,17.728,0,1.557-.052,17.748,0,1.557-.051,17.728,0,1.557-.051,17.728,0,1.557-.051,17.749,0,1.536L498.7,298l0,1.557-.051,17.728,0,1.557-.051,17.749,0,1.536-.051,17.749,0,1.536-.052,17.749,0,1.557-.051,17.728,0,.789-1.365-.772,0-.789.051-17.728,0-1.557.051-17.749,0-1.536.052-17.749,0-1.536.051-17.748,0-1.557.051-17.728,0-1.557.051-17.749,0-1.536.051-17.749,0-1.557.051-17.728,0-1.557.051-17.728,0-1.557.051-17.748,0-1.557.051-17.728,0-.768Z" transform="translate(-497.053 -182.266)" fill="#963ed4"/>
                          </g>
                          <g id="Group_415" data-name="Group 415" transform="translate(254.911 317.687)">
                            <path id="Path_935" data-name="Path 935" d="M541.42,270.479l0-1.536,30.291,17.126,0,1.536Z" transform="translate(-541.42 -268.943)" fill="#963ed4"/>
                          </g>
                          <g id="Group_416" data-name="Group 416" transform="translate(191.785 204.71)">
                            <path id="Path_936" data-name="Path 936" d="M519.572,230.551l0-1.536,30.291,17.126,0,1.536Z" transform="translate(-519.572 -229.015)" fill="#963ed4"/>
                          </g>
                          <g id="Group_417" data-name="Group 417" transform="translate(254.967 298.402)">
                            <path id="Path_937" data-name="Path 937" d="M541.439,263.663l0-1.536,30.291,17.126,0,1.536Z" transform="translate(-541.439 -262.127)" fill="#963ed4"/>
                          </g>
                          <g id="Group_418" data-name="Group 418" transform="translate(223.404 241.903)">
                            <path id="Path_938" data-name="Path 938" d="M530.515,243.716l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-530.515 -242.16)" fill="#963ed4"/>
                          </g>
                          <g id="Group_419" data-name="Group 419" transform="translate(286.586 335.596)">
                            <path id="Path_939" data-name="Path 939" d="M552.382,276.809l0-1.536L582.7,292.409l0,1.536Z" transform="translate(-552.382 -275.272)" fill="#963ed4"/>
                          </g>
                          <g id="Group_420" data-name="Group 420" transform="translate(160.315 109.61)">
                            <path id="Path_940" data-name="Path 940" d="M508.681,196.962l0-1.557,30.31,17.137,0,1.557Z" transform="translate(-508.681 -195.405)" fill="#963ed4"/>
                          </g>
                          <g id="Group_421" data-name="Group 421" transform="translate(318.26 353.504)">
                            <path id="Path_941" data-name="Path 941" d="M593.659,298.738l.682.386,0,1.536-.683-.386-30.309-17.137,0-1.536Z" transform="translate(-563.345 -281.601)" fill="#963ed4"/>
                          </g>
                          <g id="Group_422" data-name="Group 422" transform="translate(286.697 297.005)">
                            <path id="Path_942" data-name="Path 942" d="M552.421,263.19l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-552.421 -261.634)" fill="#963ed4"/>
                          </g>
                          <g id="Group_423" data-name="Group 423" transform="translate(255.134 240.527)">
                            <path id="Path_943" data-name="Path 943" d="M541.5,243.209l0-1.536L571.792,258.8l0,1.536Z" transform="translate(-541.497 -241.673)" fill="#963ed4"/>
                          </g>
                          <g id="Group_424" data-name="Group 424" transform="translate(192.009 127.529)">
                            <path id="Path_944" data-name="Path 944" d="M519.649,203.295l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-519.649 -201.738)" fill="#963ed4"/>
                          </g>
                          <g id="Group_425" data-name="Group 425" transform="translate(286.753 277.72)">
                            <path id="Path_945" data-name="Path 945" d="M552.44,256.375l0-1.557,30.309,17.137,0,1.557Z" transform="translate(-552.44 -254.818)" fill="#963ed4"/>
                          </g>
                          <g id="Group_426" data-name="Group 426" transform="translate(221.743 126.16)">
                            <path id="Path_946" data-name="Path 946" d="M531.938,202.036l0,.768-.052,17.728,0,1.557-.052,17.749,0,1.557-.051,17.728,0,1.557-.052,17.728,0,1.557-.051,17.749,0,1.536L531.606,317l0,1.557-.051,17.728,0,1.557-.051,17.749,0,1.536-.052,17.749,0,1.536-.051,17.749,0,1.557-.051,17.728,0,.789-1.383-.782,0-.789.051-17.728,0-1.557.051-17.748,0-1.536.051-17.749,0-1.536.051-17.748,0-1.557.051-17.728,0-1.557.051-17.749,0-1.536.051-17.749,0-1.557.051-17.728,0-1.557.051-17.728,0-1.557.051-17.749,0-1.557.051-17.728,0-.768Z" transform="translate(-529.941 -201.254)" fill="#963ed4"/>
                          </g>
                          <g id="Group_427" data-name="Group 427" transform="translate(286.809 258.436)">
                            <path id="Path_947" data-name="Path 947" d="M552.459,249.539l0-1.536,30.31,17.137,0,1.536Z" transform="translate(-552.459 -248.002)" fill="#963ed4"/>
                          </g>
                          <g id="Group_428" data-name="Group 428" transform="translate(223.683 145.438)">
                            <path id="Path_948" data-name="Path 948" d="M530.612,209.624l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-530.612 -208.067)" fill="#963ed4"/>
                          </g>
                          <g id="Group_429" data-name="Group 429" transform="translate(286.865 239.13)">
                            <path id="Path_949" data-name="Path 949" d="M552.479,242.736l0-1.557,30.31,17.137,0,1.557Z" transform="translate(-552.479 -241.18)" fill="#963ed4"/>
                          </g>
                          <g id="Group_430" data-name="Group 430" transform="translate(253.418 144.068)">
                            <path id="Path_950" data-name="Path 950" d="M542.9,208.365l0,.768-.051,17.728,0,1.557-.052,17.748,0,1.557-.051,17.728,0,1.557-.051,17.728,0,1.557-.051,17.749,0,1.536-.051,17.749,0,1.557-.051,17.728,0,1.557-.051,17.749,0,1.536L542.4,381.2l0,1.536-.051,17.748,0,1.557-.051,17.728,0,.789-1.383-.782,0-.789.051-17.728,0-1.557.052-17.748,0-1.536.051-17.749,0-1.536.052-17.748,0-1.557.051-17.728,0-1.557.052-17.749,0-1.536.052-17.749,0-1.557.052-17.728,0-1.557.051-17.728,0-1.557.051-17.749,0-1.557.051-17.728,0-.768Z" transform="translate(-540.903 -207.583)" fill="#963ed4"/>
                          </g>
                          <g id="Group_431" data-name="Group 431" transform="translate(286.921 219.845)">
                            <path id="Path_951" data-name="Path 951" d="M552.5,235.921l0-1.557L582.812,251.5l0,1.557Z" transform="translate(-552.498 -234.364)" fill="#963ed4"/>
                          </g>
                          <g id="Group_432" data-name="Group 432" transform="translate(318.539 257.039)">
                            <path id="Path_952" data-name="Path 952" d="M593.755,264.645l.683.386,0,1.557-.682-.386-30.31-17.137,0-1.556Z" transform="translate(-563.441 -247.509)" fill="#963ed4"/>
                          </g>
                          <g id="Group_433" data-name="Group 433" transform="translate(287.032 181.255)">
                            <path id="Path_953" data-name="Path 953" d="M552.537,222.282l0-1.557,30.309,17.136,0,1.557Z" transform="translate(-552.537 -220.726)" fill="#963ed4"/>
                          </g>
                        </g>
                        <g id="Group_435" data-name="Group 435" transform="translate(318.204 372.789)">
                          <path id="Path_954" data-name="Path 954" d="M593.639,305.554l.682.386,0,1.557-.683-.386-30.31-17.137,0-1.557Z" transform="translate(-563.325 -288.417)" fill="#963ed4"/>
                        </g>
                        <g id="Group_436" data-name="Group 436" transform="translate(33.114 211.602)">
                          <path id="Path_955" data-name="Path 955" d="M464.657,233.007l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-464.657 -231.451)" fill="#963ed4"/>
                        </g>
                        <g id="Group_437" data-name="Group 437" transform="translate(318.316 334.219)">
                          <path id="Path_956" data-name="Path 956" d="M593.678,291.922l.683.386,0,1.536-.683-.386-30.309-17.137,0-1.536Z" transform="translate(-563.364 -274.786)" fill="#963ed4"/>
                        </g>
                        <g id="Group_438" data-name="Group 438" transform="translate(318.372 314.914)">
                          <path id="Path_957" data-name="Path 957" d="M593.7,285.1l.683.386,0,1.557-.682-.386-30.31-17.137,0-1.557Z" transform="translate(-563.383 -267.963)" fill="#963ed4"/>
                        </g>
                        <g id="Group_439" data-name="Group 439" transform="translate(33.45 95.851)">
                          <path id="Path_958" data-name="Path 958" d="M464.773,192.1l0-1.557,30.291,17.126,0,1.557Z" transform="translate(-464.773 -190.542)" fill="#963ed4"/>
                        </g>
                        <g id="Group_440" data-name="Group 440" transform="translate(318.595 237.754)">
                          <path id="Path_959" data-name="Path 959" d="M593.775,257.83l.682.386,0,1.557-.683-.386L563.461,242.25l0-1.557Z" transform="translate(-563.461 -240.693)" fill="#963ed4"/>
                        </g>
                        <g id="Group_441" data-name="Group 441" transform="translate(318.651 218.469)">
                          <path id="Path_960" data-name="Path 960" d="M593.794,251.014l.682.386,0,1.557-.683-.386-30.31-17.137,0-1.557Z" transform="translate(-563.48 -233.878)" fill="#963ed4"/>
                        </g>
                      </g>
                    </g>
                    <g id="Group_444" data-name="Group 444">
                      <path id="Path_961" data-name="Path 961" d="M447.531,146.288l-.736,254.323L836.309,366.1Z" transform="translate(-446.795 -146.288)" fill="#fff" opacity="0.18" style="mix-blend-mode: color-dodge;isolation: isolate"/>
                    </g>
                  </g>
                  <g id="Group_453" data-name="Group 453" transform="translate(12.896 136.2)">
                    <path id="Path_962" data-name="Path 962" d="M486.561,202.425l-.408,160.155L657.31,459.351l.407-160.155Z" transform="translate(-385.327 -179.785)" fill="url(#linear-gradient-10)" style="mix-blend-mode: multiply;isolation: isolate"/>
                    <g id="Group_452" data-name="Group 452">
                      <path id="Path_963" data-name="Path 963" d="M486.355,196.545l5.779-2.122L658.5,288.486l-.181,36.079-5.779,2.122-166.356-94.06Z" transform="translate(-385.271 -194.423)" fill="#a1a1a1"/>
                      <g id="Group_451" data-name="Group 451" transform="translate(0 2.122)">
                        <path id="Path_964" data-name="Path 964" d="M486.183,231.255l.172-36.082,166.364,94.062-.181,36.079Z" transform="translate(-385.271 -195.173)" fill="url(#linear-gradient-11)"/>
                        <path id="Path_965" data-name="Path 965" d="M638.342,284.64l-.081,16.53L489.19,216.886l.081-16.53Z" transform="translate(-379.589 -185.691)" fill="#311445"/>
                        <g id="Group_450" data-name="Group 450" transform="translate(0 24.549)">
                          <g id="Group_449" data-name="Group 449" clip-path="url(#clip-path)">
                            <g id="Group_448" data-name="Group 448" transform="translate(16.857 -44.773)">
                              <path id="Path_966" data-name="Path 966" d="M776.255,255.111l-17.59-9.946L733.042,230.82l.124-.071-72.1-40.768c-4.606-2.6-12.072-2.612-16.66,0L460.5,294.64c-4.577,2.6-4.539,6.839.066,9.442l115.193,65.13c4.62,2.612,12.075,2.612,16.648.009l183.9-104.658C780.9,261.95,780.875,257.723,776.255,255.111Z" transform="translate(-457.092 -188.026)" fill="url(#linear-gradient-12)"/>
                              <g id="Group_446" data-name="Group 446" transform="translate(127.799 34.152)">
                                <path id="Path_967" data-name="Path 967" d="M623.967,210.539,519.793,269.824l-18.471-10.443L605.5,200.1Z" transform="translate(-501.322 -200.096)" fill="#fff"/>
                              </g>
                              <g id="Group_447" data-name="Group 447" transform="translate(76.017 42.723)">
                                <path id="Path_968" data-name="Path 968" d="M708.956,217.541,508.9,331.394l-25.5-14.417L683.458,203.125Z" transform="translate(-483.401 -203.125)" fill="#311445"/>
                              </g>
                            </g>
                          </g>
                        </g>
                      </g>
                      <path id="Path_970" data-name="Path 970" d="M543.841,229.789l5.779-2.122v20.088l-5.81,2.388Z" transform="translate(-276.392 -133.604)" fill="url(#linear-gradient-13)"/>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
          <g id="Group_472" data-name="Group 472" transform="translate(632.809 741.86)">
            <path id="Path_971" data-name="Path 971" d="M793.279,350.427a29.33,29.33,0,0,0-28.891-.068L524.1,486.023a13.662,13.662,0,0,0-.02,23.907L718.4,620.021h245.9V448.054Z" transform="translate(-517.046 -319.62)" fill="url(#linear-gradient-14)"/>
            <path id="Path_972" data-name="Path 972" d="M793.279,359.927a29.33,29.33,0,0,0-28.891-.068L524.1,495.523a13.662,13.662,0,0,0-.02,23.907L718.4,629.521h245.9V457.554Z" transform="translate(-517.046 -302.24)" fill="url(#linear-gradient-15)"/>
            <g id="Group_468" data-name="Group 468" transform="translate(24.063 38.66)">
              <g id="Group_467" data-name="Group 467">
                <g id="Group_466" data-name="Group 466">
                  <g id="Group_465" data-name="Group 465" style="isolation: isolate">
                    <g id="Group_458" data-name="Group 458" transform="translate(0 133.282)" style="isolation: isolate">
                      <path id="Path_973" data-name="Path 973" d="M525.374,397.825l.017,5.735,0,.181-.017-5.735c0-.062,0-.122,0-.181" transform="translate(-525.374 -397.825)" fill="#1b0d2e"/>
                      <path id="Path_974" data-name="Path 974" d="M525.375,397.889l.017,5.735a6.926,6.926,0,0,0,.139,1.188l-.018-5.738a6.907,6.907,0,0,1-.139-1.186" transform="translate(-525.372 -397.708)" fill="#1c0d2f"/>
                    </g>
                    <g id="Group_459" data-name="Group 459">
                      <path id="Path_975" data-name="Path 975" d="M746.09,354.216c8.244-4.663,21.6-4.657,29.787,0l86.375,49.155c8.188,4.66,8.145,12.238-.1,16.9L647.646,541.547c-8.24,4.66-21.6,4.66-29.787,0L531.485,492.39c-8.183-4.655-8.145-12.235.1-16.9ZM622.954,538.67c5.4,3.073,14.19,3.07,19.628-.006L857.088,417.385c5.438-3.076,5.467-8.056.067-11.131l-10.754-6.12a5.8,5.8,0,0,0-5.157,0l-2.317,1.31a13.134,13.134,0,0,1-11.7,0l-48.062-27.35c-3.219-1.833-3.2-4.8.041-6.635l2.317-1.31c1.427-.806,1.43-2.122-.356-3.135L770.777,357.1c-5.4-3.073-14.184-3.073-19.622,0L536.648,478.378c-5.438,3.076-5.472,8.058-.069,11.134l86.375,49.157" transform="translate(-525.374 -350.721)" fill="#281344"/>
                    </g>
                    <g id="Group_463" data-name="Group 463" transform="translate(7.174 4.071)">
                      <path id="Path_976" data-name="Path 976" d="M531.957,475.746c-5.438,3.076-5.472,8.058-.072,11.134l86.378,49.157c5.4,3.073,14.19,3.07,19.628-.006L852.4,414.753c5.438-3.076,5.467-8.056.064-11.131l-10.752-6.12a5.8,5.8,0,0,0-5.157,0l-2.317,1.31a13.135,13.135,0,0,1-11.7,0l-48.059-27.35c-3.222-1.833-3.2-4.8.038-6.635l2.317-1.31c1.427-.806,1.43-2.122.011-2.929l-10.754-6.12c-5.4-3.073-14.184-3.073-19.622,0Z" transform="translate(-527.857 -352.16)" fill="url(#linear-gradient-16)"/>
                    </g>
                    <g id="Group_464" data-name="Group 464" transform="translate(0 61.039)" style="isolation: isolate">
                      <path id="Path_978" data-name="Path 978" d="M868.365,372.293a7.738,7.738,0,0,1-1.546,4.53,10.969,10.969,0,0,1-.876,1.067,14.122,14.122,0,0,1-2.332,2c-.454.314-.939.62-1.456.911L647.646,502.08a23.257,23.257,0,0,1-3.146,1.463c-.731.277-1.485.523-2.26.747-.237.068-.479.127-.719.19-.434.11-.867.218-1.309.314-.292.062-.584.119-.876.173-.37.068-.742.133-1.118.19-.312.048-.624.091-.939.13-.353.042-.705.082-1.058.116-.324.031-.644.057-.968.079-.358.023-.716.042-1.078.056-.318.011-.638.02-.959.025-.387.006-.771,0-1.159-.006-.3-.006-.61-.011-.913-.026-.477-.02-.954-.054-1.427-.093a32.977,32.977,0,0,1-7.5-1.469c-.673-.221-1.329-.461-1.965-.727l-.422-.187c-.679-.3-1.344-.62-1.968-.976l-86.375-49.157c-.286-.161-.537-.334-.8-.5s-.514-.323-.751-.49c-.208-.15-.4-.306-.589-.458-.22-.173-.442-.342-.644-.521-.315-.277-.612-.563-.884-.852-.052-.054-.1-.11-.144-.164a8.126,8.126,0,0,1-2.294-5.4l.017,5.735a7.893,7.893,0,0,0,1.89,4.906l0,.034c.124.156.263.306.4.458.049.054.092.11.144.164.237.255.485.506.757.753.04.034.09.068.127.1.2.178.425.348.644.521.194.153.381.308.589.456.237.17.5.328.751.492.185.119.352.241.546.357.084.048.17.1.257.147l86.375,49.157a22.56,22.56,0,0,0,2.4,1.163c.237.1.488.178.731.272.488.187.968.385,1.476.549v-.037a32.566,32.566,0,0,0,6.677,1.364v.012c.191.017.384.02.575.037.474.039.951.074,1.427.093.113.006.225.017.338.023.191.006.381,0,.572,0,.387.006.774.008,1.161.006.142,0,.286,0,.428,0,.179,0,.355-.02.535-.028.358-.014.714-.031,1.072-.057.156-.008.315-.011.471-.023s.335-.04.5-.057c.353-.031.7-.071,1.055-.113.165-.023.332-.034.5-.057s.3-.051.448-.076c.373-.057.743-.119,1.112-.19.176-.031.355-.054.532-.088.115-.025.228-.059.347-.085.442-.093.875-.2,1.306-.314.179-.045.367-.079.543-.13.061-.017.119-.042.179-.059.774-.221,1.529-.467,2.256-.747.041-.014.081-.023.119-.037a23.315,23.315,0,0,0,3.008-1.412l.023-.011L862.17,386.537c4.149-2.346,6.221-5.427,6.212-8.506Z" transform="translate(-525.374 -372.293)" fill="#190c2b"/>
                    </g>
                  </g>
                </g>
              </g>
            </g>
            <g id="Group_471" data-name="Group 471" transform="translate(143.096)">
              <g id="Group_469" data-name="Group 469" transform="translate(8.859 96.972)" opacity="0.43" style="mix-blend-mode: color-dodge;isolation: isolate">
                <path id="Path_979" data-name="Path 979" d="M652.2,379.373c18.977,10.727,19.076,28.125.222,38.855s-49.521,10.727-68.5,0-19.064-28.12-.211-38.849S633.229,368.644,652.2,379.373Z" transform="translate(-569.637 -371.329)" fill="#fff"/>
              </g>
              <g id="Group_470" data-name="Group 470">
                <path id="Path_980" data-name="Path 980" d="M660.013,407.551a4.588,4.588,0,0,1,.422,3.274l-12.7,37.058c-.4,1.177-1.569,1.463-2.883.719l-44.262-25.027a5.064,5.064,0,0,1-1.167-.925l-2.82,7.181L644.827,457.1a5.4,5.4,0,0,1,2.5,4.25c-.006,1.565-1.13,2.2-2.522,1.418l-2.829-1.6a17.231,17.231,0,0,1,2.312,8.107c-.017,5.617-4.091,7.892-9.084,5.068s-9.041-9.691-9.023-15.308c.006-2.609.9-4.493,2.338-5.475L608.785,442.4A17.317,17.317,0,0,1,611.1,450.5c-.015,5.617-4.091,7.892-9.1,5.062s-9.041-9.691-9.023-15.308c.009-2.612.9-4.493,2.352-5.47L593,433.469a5.388,5.388,0,0,1-2.057-2.374,3.76,3.76,0,0,1-.3-2.759l4.568-11.59a1.319,1.319,0,0,1,1.555-.829l-15.516-59.646-12.774-12.886c-1.549-1.553-2.3-3.956-1.7-5.362.474-1.072,1.621-1.242,2.829-.557a5.227,5.227,0,0,1,1.095.849l14.071,14.2a6.986,6.986,0,0,1,1.737,3.036l2.771,10.636c.124.057.26.122.384.192l67.906,38.394A6.4,6.4,0,0,1,660.013,407.551Zm-50.188-15.313.023-7.64-18.5-10.464,2.332,8.972,16.149,9.131m41.39,23.4,2.207-6.406L635.844,399.3l-.02,7.64,15.392,8.7M609.782,407.8l.026-8.777-14.057-7.945,2.678,10.3,11.352,6.42m19.951,11.281.026-8.774-13.909-7.866-.026,8.774,13.909,7.866m17.012,9.618,2.514-7.368L635.8,413.725l-.026,8.774,10.968,6.2m-16.966-25.18.023-7.642-13.91-7.866-.023,7.643,13.909,7.866m-.087,29.71.023-7.36-13.909-7.866-.023,7.363,13.909,7.863m5.559,26.385c-2.219-1.254-4.037-.241-4.042,2.258a8.625,8.625,0,0,0,4.016,6.8c2.219,1.256,4.022.249,4.031-2.249a8.635,8.635,0,0,0-4-6.8m-33.207-18.774c-2.219-1.253-4.022-.235-4.031,2.264a8.611,8.611,0,0,0,4,6.791c2.219,1.253,4.036.255,4.042-2.244a8.65,8.65,0,0,0-4.016-6.811m7.7-18.893.02-7.36-9.257-5.235L602.758,418l6.984,3.947m32.922,18.616,2.127-6.171-9.032-5.107-.02,7.362,6.926,3.916" transform="translate(-566.571 -337.058)" fill="#fff"/>
              </g>
            </g>
          </g>
          <g id="Group_488" data-name="Group 488" transform="translate(727.956 490.977)">
            <g id="Group_485" data-name="Group 485">
              <g id="Group_473" data-name="Group 473" transform="translate(24.591)" opacity="0.4" style="mix-blend-mode: color-dodge;isolation: isolate">
                <path id="Path_981" data-name="Path 981" d="M730.02,335.4c12.725,7.193,23.011,24.625,22.968,38.943-.04,14.334-10.393,20.1-23.118,12.9L581.455,303.334c-12.725-7.2-23.011-24.625-22.968-38.96.04-14.317,10.393-20.081,23.118-12.886Z" transform="translate(-558.487 -248.391)" fill="#7932ab"/>
              </g>
              <g id="Group_474" data-name="Group 474" transform="translate(12.112 12.221)" style="mix-blend-mode: color-dodge;isolation: isolate">
                <path id="Path_982" data-name="Path 982" d="M725.7,339.72c12.725,7.193,23.011,24.625,22.968,38.943-.04,14.334-10.393,20.1-23.118,12.9L577.136,307.653c-12.725-7.2-23.011-24.625-22.967-38.96.04-14.317,10.393-20.081,23.118-12.886Z" transform="translate(-554.168 -252.71)" fill="#7932ab"/>
              </g>
              <g id="Group_475" data-name="Group 475" transform="translate(0 25.698)">
                <path id="Path_983" data-name="Path 983" d="M721.509,344.483c12.725,7.2,23.011,24.625,22.971,38.943-.043,14.334-10.4,20.1-23.121,12.9L572.944,312.416c-12.722-7.193-23.008-24.625-22.968-38.96.04-14.317,10.4-20.081,23.118-12.886Z" transform="translate(-549.976 -257.473)" fill="url(#linear-gradient-16)"/>
              </g>
              <g id="Group_484" data-name="Group 484" transform="translate(32.266 52.394)">
                <g id="Group_483" data-name="Group 483">
                  <g id="Group_476" data-name="Group 476">
                    <path id="Path_984" data-name="Path 984" d="M571.487,268.733l7,27.308-2.86-1.616-2.193-8.579L566.09,281.7l-2.179,6.106-2.768-1.565,7.114-19.329Zm-4.837,10.928,6.235,3.526-2.011-7.852c-.456-1.8-.748-3.356-1.057-4.881l-.055-.031c-.318,1.211-.653,2.456-1.063,3.639l-2.049,5.6" transform="translate(-561.143 -266.908)" fill="#fff"/>
                  </g>
                  <g id="Group_477" data-name="Group 477" transform="translate(20.384 7.541)">
                    <path id="Path_985" data-name="Path 985" d="M582.321,277.521l-7.535,5.659,8.058,17.99-3.173-1.794-6.793-15.3-1.979,1.437-.026,8.885-2.676-1.511.067-23.315,2.675,1.514-.032,11.253.093.051a20.234,20.234,0,0,1,1.647-1.562L579,275.645Z" transform="translate(-568.198 -269.573)" fill="#fff"/>
                  </g>
                  <g id="Group_478" data-name="Group 478" transform="translate(36.013 18.872)">
                    <path id="Path_986" data-name="Path 986" d="M580.81,274.744a16.807,16.807,0,0,1,4.574,3.729l-.745,2.032a15.235,15.235,0,0,0-3.927-3.322c-2.84-1.6-3.918-.32-3.921,1.276-.006,2.182,1.245,3.97,4.1,6.833,3.5,3.5,5.285,6.417,5.276,9.844-.011,3.591-2.381,5.37-7.27,2.606a19.468,19.468,0,0,1-5.29-4.488l.691-2.128a17.62,17.62,0,0,0,4.791,4.227c2.73,1.545,4.34.832,4.348-1.534.006-2.159-1.1-4.032-3.9-6.842-3.372-3.257-5.469-6.42-5.461-9.7C574.089,273.646,576.771,272.461,580.81,274.744Z" transform="translate(-573.607 -273.578)" fill="#fff"/>
                  </g>
                  <g id="Group_479" data-name="Group 479" transform="translate(80.061 45.27)">
                    <path id="Path_987" data-name="Path 987" d="M599.2,284.732l7,27.308-2.86-1.616-2.193-8.579-7.342-4.151L591.62,303.8l-2.768-1.565,7.114-19.328Zm-4.837,10.928,6.235,3.526-2.008-7.852c-.459-1.8-.748-3.356-1.06-4.881l-.055-.031c-.318,1.211-.653,2.456-1.063,3.639l-2.049,5.6" transform="translate(-588.852 -282.907)" fill="#fff"/>
                  </g>
                  <g id="Group_480" data-name="Group 480" transform="translate(66.36 33.504)">
                    <path id="Path_988" data-name="Path 988" d="M599.447,287.417l-.007,2.554-6.327-3.578-.06,20.76-2.712-1.533.06-20.76L584.11,281.3l.007-2.554Z" transform="translate(-584.11 -278.749)" fill="#fff"/>
                  </g>
                  <g id="Group_481" data-name="Group 481" transform="translate(50.639 28.632)">
                    <path id="Path_989" data-name="Path 989" d="M589.01,278.852l7,27.311-2.857-1.618-2.193-8.579-7.342-4.151-2.182,6.106-2.765-1.565,7.114-19.328Zm-4.834,10.928,6.235,3.526-2.011-7.852c-.456-1.8-.748-3.356-1.057-4.881l-.055-.031c-.318,1.214-.653,2.459-1.063,3.639l-2.048,5.6" transform="translate(-578.669 -277.027)" fill="#fff"/>
                  </g>
                  <g id="Group_482" data-name="Group 482" transform="translate(100.446 52.81)">
                    <path id="Path_990" data-name="Path 990" d="M610.033,293.52l-7.538,5.659,8.061,17.99-3.175-1.794-6.79-15.3-1.982,1.437-.026,8.885-2.675-1.511.066-23.315,2.676,1.514-.032,11.253.093.051a19.835,19.835,0,0,1,1.65-1.562l6.351-5.184Z" transform="translate(-595.907 -285.572)" fill="#fff"/>
                  </g>
                </g>
              </g>
            </g>
            <g id="Group_487" data-name="Group 487" transform="translate(179.414 159.621)">
              <g id="Group_486" data-name="Group 486">
                <path id="Path_991" data-name="Path 991" d="M612.07,304.8,642.7,337.822l-6.182,3.45,7.318,12.434-4.424,2.489L632.08,343.75l-6.2,3.439Z" transform="translate(-612.07 -304.804)" fill="#fff"/>
              </g>
            </g>
          </g>
          <g id="Group_499" data-name="Group 499" transform="translate(903.731 145.162)">
            <g id="Group_490" data-name="Group 490" transform="translate(0 117.425)" opacity="0.76">
              <g id="Group_489" data-name="Group 489" transform="translate(0 116.572)">
                <path id="Path_992" data-name="Path 992" d="M633.938,213.477l-.02,6.955a56.179,56.179,0,0,1,11.711,10.4l-4.132,8.788a45.6,45.6,0,0,0-11.254-9.745c-3.979-2.249-5.253-1.675-5.256-.107-.017,5.458,22.338,13.528,22.289,30.3-.02,7.012-4.536,10.577-13.494,7.272l-.02,7.2-8.142-4.6.02-6.887a62.788,62.788,0,0,1-14.828-12.937l4.424-8.681a51.24,51.24,0,0,0,13.329,11.7c3.86,2.182,5.253,2.054,5.259.5.017-5.716-22.341-13.749-22.292-30.695.023-7.351,4.77-10.843,14.245-6.986l.023-7.077Z" transform="translate(-610.811 -208.873)" fill="#7932ab"/>
              </g>
              <path id="Path_993" data-name="Path 993" d="M611,167.675l36.46,24.205-.169,233.931-36.46-24.205Z" transform="translate(-610.774 -167.675)" fill="url(#linear-gradient-18)" style="mix-blend-mode: overlay;isolation: isolate"/>
            </g>
            <g id="Group_496" data-name="Group 496" transform="translate(51.971)">
              <g id="Group_494" data-name="Group 494" transform="translate(0 113.793)">
                <g id="Group_491" data-name="Group 491" transform="translate(25.354 32.757)">
                  <path id="Path_994" data-name="Path 994" d="M646.816,179.36A18.711,18.711,0,0,1,656,195.438c-.02,6.989-3.984,8.633-9.243,5.659a18.587,18.587,0,0,1-9.182-16.077C637.593,178.132,641.557,176.386,646.816,179.36Zm-.043,15.718c1.1.62,2.173.122,2.182-3.625.011-3.709-1.055-5.452-2.156-6.075s-2.173-.088-2.181,3.622c-.011,3.746,1.055,5.455,2.156,6.078" transform="translate(-637.573 -177.968)" fill="#7932ab"/>
                </g>
                <g id="Group_492" data-name="Group 492" transform="translate(5.802 13.471)">
                  <path id="Path_995" data-name="Path 995" d="M654.6,171.152l8.38,4.738-23.8,25.633-8.38-4.738Z" transform="translate(-630.806 -171.152)" fill="#7932ab"/>
                </g>
                <g id="Group_493" data-name="Group 493">
                  <path id="Path_996" data-name="Path 996" d="M647.224,183.861c-.02,6.989-3.984,8.633-9.243,5.659a18.587,18.587,0,0,1-9.183-16.077c.02-6.887,3.985-8.633,9.243-5.659A18.712,18.712,0,0,1,647.224,183.861Zm-11.381-6.434c-.012,3.743,1.055,5.452,2.155,6.075s2.173.122,2.182-3.622c.012-3.712-1.055-5.455-2.155-6.078s-2.173-.088-2.182,3.625" transform="translate(-628.798 -166.391)" fill="#7932ab"/>
                </g>
              </g>
              <g id="Group_495" data-name="Group 495" transform="translate(4.428)" opacity="0.63">
                <path id="Path_997" data-name="Path 997" d="M630.5,126.175l36.46,24.205-.169,233.931-36.46-24.205Z" transform="translate(-630.331 -126.175)" fill="url(#linear-gradient-19)" style="mix-blend-mode: overlay;isolation: isolate"/>
              </g>
            </g>
            <g id="Group_498" data-name="Group 498" transform="translate(51.136 246.168)">
              <g id="Group_497" data-name="Group 497" transform="translate(0 132.185)">
                <path id="Path_998" data-name="Path 998" d="M655.608,263.165a41.47,41.47,0,0,1,16.325,17.178l-5.877,2.781c-2.713-4.952-6.048-8.641-10.032-10.894-5.042-2.849-9.136-2.439-11.26.852l14.372,8.126-.014,5.365-15.77-8.916a13.379,13.379,0,0,0-.072,1.686,15.333,15.333,0,0,0,.064,1.763l15.767,8.916-.014,5.365-14.375-8.126a26.145,26.145,0,0,0,11.219,13.562c3.987,2.252,7.33,2.377,10.064.39l5.842,9.445c-3.762,3.056-9.46,2.637-16.374-1.271a44.616,44.616,0,0,1-20.561-27.673l-6.4-3.619.017-5.368,5.55,3.141a16.034,16.034,0,0,1-.064-1.766,13.337,13.337,0,0,1,.075-1.684l-5.553-3.141.017-5.365,6.4,3.619C637.6,259.359,645.559,257.483,655.608,263.165Z" transform="translate(-628.509 -259.891)" fill="#7932ab"/>
              </g>
              <path id="Path_999" data-name="Path 999" d="M630.5,213.175l36.46,24.205-.169,233.931-36.46-24.205Z" transform="translate(-625.067 -213.175)" fill="url(#linear-gradient-19)" style="mix-blend-mode: overlay;isolation: isolate"/>
            </g>
          </g>
          <g id="Group_504" data-name="Group 504" transform="translate(554.089 114.89)">
            <g id="Group_500" data-name="Group 500" transform="translate(105.28)" opacity="0.37" style="mix-blend-mode: color-dodge;isolation: isolate">
              <path id="Path_1000" data-name="Path 1000" d="M533.08,116.393a14.6,14.6,0,0,1,6.8,11.533c-.011,4.236-3.074,5.945-6.842,3.814a14.619,14.619,0,0,1-6.8-11.53C526.25,115.971,529.315,114.262,533.08,116.393Z" transform="translate(-526.238 -115.476)" fill="#e3e4e8"/>
            </g>
            <g id="Group_501" data-name="Group 501" transform="translate(0 49.86)" opacity="0.37" style="mix-blend-mode: color-dodge;isolation: isolate">
              <path id="Path_1001" data-name="Path 1001" d="M496.643,134.013a14.612,14.612,0,0,1,6.8,11.533c-.014,4.239-3.077,5.948-6.845,3.817a14.623,14.623,0,0,1-6.8-11.53C489.812,133.591,492.878,131.885,496.643,134.013Z" transform="translate(-489.801 -133.097)" fill="#e3e4e8"/>
            </g>
            <g id="Group_502" data-name="Group 502" transform="translate(164.454 89.238)" opacity="0.2" style="mix-blend-mode: color-dodge;isolation: isolate">
              <path id="Path_1002" data-name="Path 1002" d="M553.56,147.931a14.609,14.609,0,0,1,6.8,11.533c-.012,4.239-3.074,5.948-6.842,3.817a14.613,14.613,0,0,1-6.8-11.53C546.729,147.509,549.8,145.8,553.56,147.931Z" transform="translate(-546.718 -147.014)" fill="#e3e4e8"/>
            </g>
            <g id="Group_503" data-name="Group 503" transform="translate(231.207 200.189)" opacity="0.37" style="mix-blend-mode: color-dodge;isolation: isolate">
              <path id="Path_1003" data-name="Path 1003" d="M576.666,187.143a14.616,14.616,0,0,1,6.8,11.533c-.012,4.236-3.074,5.945-6.845,3.814a14.619,14.619,0,0,1-6.8-11.53C569.833,186.721,572.9,185.012,576.666,187.143Z" transform="translate(-569.821 -186.226)" fill="#e3e4e8"/>
            </g>
          </g>
        </g>
        <g id="Group_511" data-name="Group 511" transform="translate(591.962 198.763)">
          <g id="Group_509" data-name="Group 509">
            <g id="Group_508" data-name="Group 508">
              <g id="Group_507" data-name="Group 507">
                <g id="Group_506" data-name="Group 506" transform="translate(1.592)">
                  <path id="Path_1004" data-name="Path 1004" d="M610.112,208.075,503.46,147.124s3.687-2.762,5.588-1.805l105.245,60.215a1.076,1.076,0,0,1,.546.934v129.2c0,1.6-4.181,3.916-4.181,3.916V209.009A1.076,1.076,0,0,0,610.112,208.075Z" transform="translate(-503.46 -145.118)" fill="#fff" opacity="0.5"/>
                </g>
                <path id="Path_1005" data-name="Path 1005" d="M611.72,207.745V337.919a1.091,1.091,0,0,1-1.638.934L503.452,277.532a1.073,1.073,0,0,1-.543-.934L503.2,146.91a1.089,1.089,0,0,1,1.635-.931l106.335,60.832A1.076,1.076,0,0,1,611.72,207.745Z" transform="translate(-502.909 -143.811)" opacity="0.3" fill="url(#linear-gradient-21)" style="mix-blend-mode: lighten;isolation: isolate"/>
              </g>
            </g>
          </g>
          <g id="Group_510" data-name="Group 510" transform="translate(18.477 40.201)">
            <path id="Path_1006" data-name="Path 1006" d="M574.465,272.8l-4.692-72.328a4.7,4.7,0,0,0-2.025-3.574l-9.893-5.619c-.017-11.6-7.174-25.087-15.969-30.083s-15.952.368-15.97,11.943l-9.893-5.617c-1.046-.6-1.924-.051-2.025,1.27l-4.692,67v.243c0,7.761,5.418,17.153,12.069,20.93l41.023,23.3c6.651,3.777,12.069.54,12.069-7.218ZM541.885,166.531c6.568,3.729,11.9,13.785,11.919,22.447l-23.837-13.536c.017-8.641,5.351-12.639,11.919-8.91ZM562.4,274.9l-41.023-23.3c-4.389-2.493-7.966-8.373-8.018-13.18l4.525-64.516,8.035,4.564v9.36a4.779,4.779,0,0,0,2.026,3.82c1.115.634,2.025-.048,2.025-1.517v-9.363L553.8,194.314v9.36a4.78,4.78,0,0,0,2.025,3.82c1.115.631,2.025-.051,2.025-1.519v-9.36l8.035,4.564,4.525,69.677c-.052,4.728-3.632,6.542-8.018,4.049Zm0,0" transform="translate(-509.304 -159.325)" fill="#fff"/>
            <path id="Path_1007" data-name="Path 1007" d="M536.767,182.65l-11.95,8.955-4.88-9.2c-.792-1.5-2.074-2.224-2.869-1.63s-.795,2.283,0,3.78l6.313,11.9a3.974,3.974,0,0,0,1.436,1.593,1.3,1.3,0,0,0,1.433.037l13.389-10.028c.792-.6.792-2.286,0-3.783-.795-1.471-2.077-2.2-2.872-1.63Zm0,0" transform="translate(-495.764 -120.453)" fill="#fff"/>
          </g>
        </g>
      </g>
    </g>
  </g>
              </svg>
          </div>
     </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>

          //  active nav 
          divSide = document.querySelectorAll(".container ul li a");
          divSide.forEach(aaa => {
               aaa.onclick = function(){
                    divSide.forEach(function(aaa){
                        aaa.classList.remove("active");
                    });
                    this.classList.add("active");
               };
          });
         
    </script>
  </body>
</html>