<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item"  style=" width:100%; height: 700px !important;">
            <img src="images/CHESSS.jpeg"  style="position: relative;" class="d-block w-100">
                
                <div class="container">
                    <div class="carousel-caption text-start" style="background: rgba(0, 0, 0, .5)">
                        <h1>Chess.</h1>
                        <p>Two players or madgame modes only. Test your brain.</p>
                        <p><a class="btn btn-lg btn-light" href="jogos/xadrez/index.php">Play</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active" style="width:100%; height: 700px !important;">
            <img src="images/SIC.png"  style="position: relative;" class="d-block w-100">

                <div class="container" >
                    <div class="carousel-caption" style="background: rgba(0, 0, 0, .5)">
                        <h1>Space Invaders.</h1>
                        <p>Can you safe the universe?</p>
                        <p><a class="btn btn-lg btn-light" href="jogos/jogo-de-navinha/index.html">Play</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item"  style=" width:100%; height: 700px !important;">
            <img src="images/RIVERCROSSING.jpg"  style="position: relative;" class="d-block w-100">

                <div class="container">
                    <div class="carousel-caption text-end" style="background: rgba(0, 0, 0, .5)">
                        <h1>River Crossing.</h1>
                        <p>Are you smart enough to cross everyone to the other side?</p>
                        <p><a class="btn btn-lg btn-light" href="jogos/travessia-do-rio/index.php">Play</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>