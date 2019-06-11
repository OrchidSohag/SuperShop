<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sujon Super Shop</title>
    <link href="{{ asset('css/Bootstrap/bootstrap.mmin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/SuperShopHome.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>
<header class="SuperShop">
    <div class="container text-center my-auto">
        <h1>Welcome </h1>
        <h1>SSS Inventory System</h1>
        <h3>
            <em>Please Sign In To Enter The System </em>
        </h3>
        <a class="btn btn-primary" href={{route('AdminRegister')}} >Sign Up </a>
        <a class="btn btn-primary" href={{route('AdminLogin')}} >Sign In</a>

    </div>
</header>
</body>
</html>
