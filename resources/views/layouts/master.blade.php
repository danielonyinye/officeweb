<!Doctype>
<html>
<head>
    <title>App name - @yield('title')</title>
</head>
<body>

@section('sidebar')
    This is the master side bar
@show

<div class="container">
    @yield ('content')

</div>

<div>
    @yield('footer')
</div>


</body>
</html>