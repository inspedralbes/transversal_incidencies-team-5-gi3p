    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrar Incidencia</title>
        <link rel="stylesheet" href="form.css">
        <?php include_once "includes.php"?>

    </head>

 
    <body>  
    <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
          <a href="landing_page.php" class="back-button"></a>
          <?php include_once "header.php"?>

            <form action="registrar.php" method="POST">     
                    <div class="form-group">
                       
                        <label for="departament">Departament</label>
                            <select class="form-control" id="departament" name="departament">
                            <option value="1">Castellà</option>
                            <option value="2">Anglès</option>
                            <option value="3">Matemàtiques</option>
                            <option value="4">Alemany</option> 
                        </select>   
                    </div>
                    <div class="form-group">
                    <label for="tipologia">Tipologia</label>
                        <select class="form-control" id="tipologia" name="tipologia">
                        <option value="1">Malfuncionaments</option>
                        <option value="2">Elèctric</option>
                        <option value="3">Hard-Ware</option>
                        <option value="4">Soft-Ware</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descripcio">Descripció</label>
                        <textarea class="form-control" id="descripcio" name="descripcio" rows="3"></textarea>
                    </div>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Enviar">
        </form>

    </body>
   
</html>

    