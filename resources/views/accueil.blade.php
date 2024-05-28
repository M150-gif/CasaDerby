<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CasaDerby</title>
    <link rel="stylesheet" href="{{asset('styles.css')}}">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="title">
                <a href="accueil.html">CasaDerby</a>
            </div>
            <div class="shop-button">
                <a href="{{route('store_home')}}">CasaDerby Shop</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="images-container">
            <div class="raja">
                <img src="images/rca/rca.png" alt="RCA" class="rcaImg">
                <br></br>
                <br></br>
                <center>
                <div class="rca-button" >
                    <a href="{{ url('/rca') }}">Raja Club Athletic</a>
                </div>
                </center>
            </div>
            <div class="wydad">
                <img src="images/wac/wac.png" alt="WAC" class="wacImg">
                <br></br>
                <br></br>
                <center>
                    <div class="wac-button" >
                        <a href="{{ url('/wac') }}">Wydad Athletic Club</a>
                    </div>
                </center>
            </div>
        </div>
        
    </main>
</body>
</html>
