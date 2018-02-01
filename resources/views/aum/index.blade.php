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
                color: black;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
           
            <table >
                <thead>
                    <tr>
                        <td>Action</td>
                        <td>Name</td>
                        <td>Lastname</td>
                        <td>ddd</td>
                        <td>gggg</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($aums as $aum)
                <tr>
                    <td><a href="/aumkhrit/{{$aum->id}}/delete">delete</a></td>
                    <td><a href="/aumkhrit/{{$aum->id}}">{{$aum->name}}</a></td>
                    <td>{{$aum->lname}}</td>
                    <td>{{$aum->created_at}}</td>
                    <td>{{$aum->updated_at}}</td>
                </tr>
                @endforeach
                <form action="/aumkhrit" method="POST">
                {{csrf_field()}}
                <tr>
                <td>
                       &nbsp;
                    </td>
                    <td>
                        <input type="text" name="name" placehoder="Name">
                    </td>
                    <td>
                        <input type="text" name="lname" placehoder="LastName">
                    </td>
                    <td>
                       &nbsp;
                    </td>
                    <td>
                    &nbsp;
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><input type="submit" value='ส่งข้อมูล' ></td>
                </tr>
                </form>
                </tbody>
            </table>
            </div>
        </div>
    </body>
</html>
