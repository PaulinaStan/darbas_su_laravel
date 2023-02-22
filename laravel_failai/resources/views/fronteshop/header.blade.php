<!DOCTYPE html>

{{--Stilius:--}}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<!-- ... -->
</body>
</html>



{{--  Skriptas: --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mano svetainė</title>
</head>
<body>
<h1>Didžiausias antraštės tekstas</h1>
<h2>Antra didžiausia antraštės tekstas</h2>
<h3>Trečia didžiausia antraštės tekstas</h3>
<h4>Ketvirta didžiausia antraštės tekstas</h4>
<h5>Penkta didžiausia antraštės tekstas</h5>
<h6>Mažiausia antraštės tekstas</h6>

<p>Tai yra paprastas tekstas.</p>

<a href="https://www.product.com">Nuoroda į kitą puslapį</a>

<ul>
    <li>Pirmas sąrašo elementas</li>
    <li>Antras sąrašo elementas</li>
    <li>Trečias sąrašo elementas</li>
</ul>

<ol>
    <li>Pirmas numeruojamo sąrašo elementas</li>
    <li>Antras numeruojamo sąrašo elementas</li>
    <li>Trečias numeruojamo sąrašo elementas</li>
</ol>

<img src="image.jpg" alt="Paveikslėlio aprašymas">

<form>
    <label for="vardas">Vardas:</label>
    <input type="text" id="vardas" name="vardas">

    <label for="pavarde">Pavardė:</label>
    <input type="text" id="pavarde" name="pavarde">

    <label for="email">El. pašto adresas:</label>
    <input type="email" id="email" name="email">

    <label for="slaptazodis">Slaptažodis:</label>
    <input type="password" id="slaptazodis" name="slaptazodis">

    <input type="submit" value="Siųsti">
</form>

<table>
    <thead>
    <tr>
        <th>Pirma stulpelio antraštė</th>
        <th>Antra stulpelio antraštė</th>
        <th>Trečia stulpelio antraštė</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Pirma lentelės eilutė, pirmas stulpelis</td>
        <td>Pirma lentelės eilutė, antras stulpelis</td>
        <td>Pirma lentelės eilutė, trečias stulpelis</td>
    </tr>


{{-- Navigation menu:--}}

 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Website</title>
<script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<h1>Sveiki atvykę į mano puslapį!</h1>
<p>Čia rasite daug naudingos informacijos apie produktus.</p>
<ul>
<li><a href="{{ route('home') }}">Home</a></li>
<li><a href="{{ route('products') }}">Products</a></li>
<li><a href="{{ route('cart.index') }}">Cart</a></li>
</ul>
</body>
</html>
