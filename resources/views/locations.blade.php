<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }
            
            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
              text-align: center !important
            }
            
            tr:nth-child(even) {
              background-color: #dddddd;
            }
            </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

           <div style="width:80%;margin:auto">

                <div style="text-align: center">
                    <h3>
                        all locations for provider : 
                        <b style="color: #000"> {{$provider->user_name}} </b>
                    </h3>
                </div>

                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">latitude</th>
                            <th scope="col">longitude</th>
                        </tr>
                    </thead>
                    <tbody>


                        @if($provider->locations != null && $provider->locations()->count() > 0)

                            @foreach ($provider->locations as $item)
                                <tr>
                                    <th scope="row">{{$x}}</th>
                                    <td>{{$item->latitude}}</td>
                                    <td>{{$item->longitude}}</td>
                                </tr>

                                @php $x = $x + 1; @endphp

                            @endforeach

                        @else 
                            <tr>
                                <td colspan="4">
                                    there no any locations in this provider yet
                                </td>
                            </tr>
                        @endif
                        
                    </tbody>
                </table>
           </div>

        </div>
    </body>
</html>
