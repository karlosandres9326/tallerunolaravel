<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TALLER UNO - @yield('numfmt_get_pattern')</title>
    </head>
    <body>

        <center>
        <table border=1>
            <tr>
                <td colspan=2><center><b>@yield('title') </b></center></td>
            </tr>

          
            @for ($i=1; $i<=10; $i++)

            <tr>
                <td> <b> {{$num_table}} x {{$i}} </b> </td>
                <td>{{$num_table * $i}} </td> 
                
            </tr>

                @endfor
            

            <tr>
                <td colspan=2><center><b>@yield('footer')</b></center></td>
            </tr>
        </table>
        </center>
        
    </body>
</html>