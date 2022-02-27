<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/homestyle.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header> 
    
<div class="logo">
    NFTHOUSE.
</div>       
<nav>
    <ul class="navlinks">
        <li><a href="#">HOME</a></li>
        <li><a href="#">MARKETPLACE</a></li>
        <li><a href="#">ABOUT</a></li>
</ul>
</nav>
<a class ="sign" href ="#"><button>SIGN</button></a>
</header>
@yield('content')

</body>
</html>