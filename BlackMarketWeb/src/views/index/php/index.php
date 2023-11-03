<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de reacondicionamiento de ordenadores - BLACK MARKET</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../../../src/css/styleMenu.css"  media="screen"/>
    <style>
        /* Aquí puedes agregar tus estilos personalizados */
    </style>
    <script src="https://kit.fontawesome.com/7f605dc8fe.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">





 



        <!-- hau da menua eta logoa, pagina guztietan berdina (hemen hasten da) -->

        <header>
            <a href="../../../../src/views/index/php/index.php"><img src="../../../../public/MicrosoftTeams-image.png" alt="Logo de BLACK MARKET" style="width: 200px; height: 100px;" ></a>
        </header>

        <nav id="menu">
            <a class="invisibleDiv"></a>
            <a href="">Guri buruz</a>
            <a href="../../../../src/views/konponenteak/php/pagina_konponenteak.php">konponenteak</a>
            <a href="../../../../src/views/berriak/php/berriak.php">Berriak</a>
            <a href="../../../../src/views/Hornitzaileak/php/Hornitzaileak.php">Hornitzaileak</a>
            
            <div class="search-form">
                <input aria-label="Buscar" id="search-input" placeholder="Buscar" class="search-input" value="">
                <button aria-label="Search" type="submit" class="search-button" id="search-button">Buscar</button>
            </div>
            <a class="invisibleDiv"></a>
        </nav>

        <!-- hau da menua eta logoa, pagina guztietan berdina (hemen bukatzen da) -->













        <!-- ZER EGITEN DUGU? (hemen HASTEN da) -->
        <div class="main-content">
            <h1>Ongi etorri BLACK MARKET-era</h1>
            <p>Hemen ordenagailuak berregokitu eta prezio harrigarrietan saltzen ditugu.
            </p>
            <!-- Puedes añadir más contenido aquí -->
        </div>
        <!-- ZER EGITEN DUGU? (hemen BUKATZEN da) -->









        <!-- SARE SOZIALAK? (hemen HASTEN da) -->
        <div class="footer">
            <div><h2>Kontakto eta sare sozialak:</h2></div>
            <nav id="sareSozialak">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-tiktok"></i>Tik tok</a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-youtube"></i>Youtube</a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-twitter"></i>Twitter</a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-instagram"></i>Instagram</a>
            </nav>
        </div>
        <!-- SARE SOZIALAK? (hemen BUKATZEN da) -->


        <!-- BILATZAILEAREN SCRIPTA -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                document.getElementById('search-button').addEventListener('click', function (e) {
                    e.preventDefault();
                    var searchTerm = document.getElementById('search-input').value;
                    searchProducts(searchTerm);
                });

                function searchProducts(term) {
                    var found = window.find(term, false, false, true, false, true, false);
                    if (!found) {
                        alert("No se encontraron coincidencias.");
                    }
                }
            });
        </script>
        <!-- BILATZAILEAREN SCRIPTA -->




    </div>
    
</body>
</html>
