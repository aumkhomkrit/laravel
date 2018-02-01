<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>apiwat56</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                font-family: 'Tahoma';
                color: black;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            table{
                color: black;
                font-size: 18px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    APIWAT56
                    </div>
                <table>
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>price</th>
                        <th>author</th>
                        <th>Publish Date</th>
                        <th>Website</th>
                        <th>ID</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <form action="/apiwat56/{{ $apiwat->id}}/edit" method="POST">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                        <td><input type="text" name="title" placehoder="title" value="{{ $apiwat->title }}"></td>
                        <td><input type="text" name="author" placehoder="author" value="{{ $apiwat->author }}"></td>
                        <td><input type="text" name="price" placehoder="price" value="{{ $apiwat->price }}"></td>
                        <td><input type="text" name="publish_date" placehoder="publish_date" value="{{ $apiwat->publish_date }}"></td>
                        <td><input type="text" name="website" placehoder="publishing" value="{{ $apiwat->website }}"></td>
                        <td><input type="text" name="id" placehoder="id" value="{{ $apiwat->id }}"></td>
                    </tr>
                    <tr>
                        <td colspan="6"><input type="submit" value="submit"></td>
                    </tr>

                    </form>
                    </tbody>
                </table>
                <br><hr>
                <div class="links">
                    <a href="https://www.facebook.com/apiwat44">Facebook</a>
                    <a href="https://www.youtube.com/channel/UCba2DBvLKpkooMMZwGBGZnQ">Youtube Channel</a>
                </div>
            </div>
        </div>
    </body>
</html>
