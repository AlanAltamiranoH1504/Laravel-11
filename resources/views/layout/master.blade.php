<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantilla Maestra - LayOut</title>
</head>
<body>
    <header style="font-family: Arial; font-size: medium; font-weight: bolder; border: solid 1px orangered; margin-bottom: 15px; max-width: 400px; text-align: center">
        @yield('header')
    </header>

    <footer style="border: solid 1px purple; max-width: 400px; text-align: center">
        @yield('footer')
    </footer>
</body>
</html>
