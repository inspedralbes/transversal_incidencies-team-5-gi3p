
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrar Actuació</title>
        <link rel="stylesheet" href="form.css">
        <?php include_once "header.php"?>

    </head>

 
    <body>  
    <a href="landing_page.php" class="back-button"></a>
        
            <form action="registrar_actuacion.php" method="POST">
                    <div class="form-group">
                        <label for="id_incidencia">Id de l'incidencia</label>
                        <input type="number" id="id_incidencia" name="id_incidencia" min="1" max="10000">
                    </div>
                    <div class="form-group">
                        <label for="descripcio">Descripció</label>
                        <textarea class="form-control" id="descripcio" name="descripcio" rows="3"></textarea>
                    <br>
                        <label for="data">Data:</label>
                        <input type="date" id="data" name="data">          
                    <br>
                    
                    <label for="tempsInvertit">Temps Invertit [en minuts]</label>
                    <input type="number" id="tempsInvertit" name="tempsInvertit" min="1" max="180">
                    
                    <br>
                    <label for="tecnic_actuacio">Tècnic assignat</label>
                            <select class="form-control" id="tecnic_actuacio" name="tecnic_actuacio">
                            <option value="1">Alvaro</option>
                            <option value="2">Lopez</option>
                            <option value="3">Maria</option>
                            <option value="4">Ermengol</option> 
                        </select>   
                    <br>
                    <label for="estat">Estat</label>
                            <select class="form-control" id="estat" name="estat">
                            <option value="1">Resolta</option>
                            <option value="2">En procès</option>
                
                        </select>   
                    <br>
                    <label for="visible">Visibilitat</label>
                            <select class="form-control" id="visible" name="visible">
                            <option value="1">Si</option>
                            <option value="2">No</option>
                        </select>   
                    </div>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Enviar"><br><br>
        </form>

    </body>
    
</html>
