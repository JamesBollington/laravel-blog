<html>
<head>

    <!-- Bootstrap core CSS -->
    <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href = {{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet" />

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}"></head>
<body>
<div class="col-6">
<h1>Laravel Blog</h1><!--
<form method="POST" action="/posts/searchresults">
    {{csrf_field()}}
    <div >
        <input type="text" name="title" placeholder="search by title">
    </div>

    <button type="submit">search</button>
</form>-->
@yield('content')
</div>
</body>
</html>