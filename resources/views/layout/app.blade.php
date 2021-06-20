<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$name_page}}</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{url('css/fontawesome.min.css')}}">
    <script src="{{url("/js/webfont.min.js")}}"></script>
    <script>
        WebFont.load({
            google: {"families": ["Lato:300,400,700,900"]},
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['{{url('/css/fonts.min.css')}}']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    @stack('css')
</head>
<body>
<div class="container">
    @yield("content")
</div>
</body>
<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/datatables.min.js')}}"></script>
@stack('js')
</html>
