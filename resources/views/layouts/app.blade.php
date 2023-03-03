<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{ asset('vendor/glider-js/glider.min.css')}}">
<<<<<<< HEAD
<<<<<<< HEAD
          <link rel="stylesheet" href="{{ asset('vendor/flexSlider/flexslider.css')}}">
=======
>>>>>>> parent of 5fd7a3f (flexslider)
=======
>>>>>>> parent of 5fd7a3f (flexslider)
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ asset('vendor/glider-js/glider.min.js') }}" defer></script>
<<<<<<< HEAD
<<<<<<< HEAD
        <script src="{{ asset('vendor/flexSlider/jquery.flexslider-min.js') }}" ></script>
        <script src="{{ asset('vendor/flexSlider/node_modules/jquery/dist/jquery.min.js) }}" ></script>
         </head>
=======
=======
>>>>>>> parent of 5fd7a3f (flexslider)
    </head>
>>>>>>> parent of 5fd7a3f (flexslider)
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation')


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <script>
            function dropdown(){
                return {
                    open: false,
                    show(){
                        if(this.open){
                            this.open = false;
                            document.getElementsByTagName('html')[0].style.overflow = 'auto'
                        }else{
                            this.open = true;
                            document.getElementsByTagName('html')[0].style.overflow = 'hidden'
                        }
                    },
                    close(){
                        this.open = false;
                        document.getElementsByTagName('html')[0].style.overflow = 'auto'
                    }
                }
            }
        </script>

        @stack('scripts')

    </body>
</html>
