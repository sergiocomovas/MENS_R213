<!doctype html>
<html lang="en">
  <head>
    <title>Subir Precios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container m-4">
        
        <div class="h1">CAMBIO PRECIO MENSAJERÍA</div><hr>


        <div class="form-group">
          <label for=""><h3>PASO 1: INTRODUCE EL PRECIO ANTIGUO:</h3></label>
          <big><big><input style="background-color:#81BEF7;" onkeyup="datos()" onchange="datos()" type="number" step="0.01" autofocus 
            class="form-control form-lg" name="" id="p1" aria-describedby="helpId" placeholder="EJEMPLO: 3.50"></big></big>
          <small id="helpId" class="form-text text-muted">PARA DECIMALES USA UN PUNTO O UNA COMA</small>
        </div>

        <div class="row m-1 p-4 border">

            <div class="col-6">

                <div class="form-group py-1">
                <label for=""><h3>Subida de Precio</h3></label>
                <input readonly type="text" name="" id="p2" class="form-control" placeholder="" aria-describedby="helpId">
                
                </div>


                <!--<hr>
                <input readonly type="text" name="" id="afx" class="form-control" placeholder="PRUEBA" aria-describedby="helpId">-->


            
            </div>

            <div class="col-6">

                <div class="form-group py-1">
                <label for=""><h3>Redondeo</h3></label>
                <input readonly type="text" name="" id="p3" class="form-control" placeholder="" aria-describedby="helpId">
                
                </div>

            </div>

        </div>
        
    </div>
      
    <!-- Optional JavaScript -->

    <script>

    function datos(){
        
        var p = document.getElementById("p1").value;

        var y = p*0.035;

        //var af = round(y,0.01);
        //document.getElementById("afx").value = parseFloat(p); 
        //parseFloat(af)+;

        var x = Math.round((y + Number.EPSILON) * 100) / 100;
        //var x = Math.round(y * 100) / 100;
        x = parseFloat(x)+parseFloat(p); 

        var z = round(x,0.05);
  

        document.getElementById("p2").value = x;
        document.getElementById("p3").value = z;
    }

    function round(value, step) {

        step || (step = 1.0);
        var inv = 1.0 / step;
        return Math.round(value * inv) / inv;

    }


    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>