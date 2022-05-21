<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="flex justify-evenly content-evenly w-screen">
        <div>
            <span>Welcome {{auth()->user()->name}}</span>
        </div>
        <div class="flex">
            <ul style="list-style-type: none;" class="flex">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        Admin area
    </div>
</body>
</html>
