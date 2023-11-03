<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de reacondicionamiento de ordenadores - BLACK MARKET</title>
    <link rel="stylesheet" type="text/css" href="../../../../src/views/konponenteak/css/pagina_konponenteak.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../../../src/css/styleMenu.css"  media="screen">
    <style>
        /* Aquí puedes agregar tus estilos personalizados */
    </style> 
</head>
<body>

    <div class="container">


        <!-- hau da menua eta logoa, pagina guztietan berdina (hemen hasten da) -->

        <header>
            <a href="../../../../src/views/index/php/index.php"><img src="../../../../public/MicrosoftTeams-image.png" alt="Logo de BLACK MARKET" style="width: 200px; height: 100px;" ></a>
        </header>
 
        <nav id="menu">
            <a class="invisibleDiv"></a>
            <a href="../../../../src/views/index/php/index.php">Guri buruz</a>
            <a href="">konponenteak</a>
            <a href="../../../../src/views/berriak/php/berriak.php">Berriak</a>
            <a href="../../../../src/views/Hornitzaileak/php/Hornitzaileak.php">Hornitzaileak</a>
            
            <div class="search-form">
                <input aria-label="Buscar" id="search-input" placeholder="Buscar" class="search-input" value="">
                <button aria-label="Search" type="submit" class="search-button" id="search-button">Buscar</button>
            </div>
            <a class="invisibleDiv"></a>
        </nav>

        <div class="h1"><H1>Gure Produktuak</H1></div>
        <div class="productuak">
            <?php
            $servername = "localhost"; 
            $username = "root"; 
            $password = "1WMG2023";  
            $dbname = "erronka"; 

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Errorea: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM konponenteak";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                
                
                while ($row = $result->fetch_assoc()) {
                    echo "<div><img src='../../../../public/".$row["img"]."' ><br><br>" . "<b>" .$row["modelo"] . "<br>" .$row["prezioa"]."€ <b> </div>";
                }
                
            } else { 
                echo "Ez dago datuak taulan.";
            }
            
            $conn->close();
            ?>
        </div>
        






    </div>
    
    
    







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

    








    
</body>
</html>
