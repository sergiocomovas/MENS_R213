<?php 
$name = 
[
'31-12-2018' =>'LU.',
'01-01-2019' =>'MA.',
'02-01-2019' =>'MI.',
'03-01-2019' =>'JU.',
'04-01-2019' =>'VI.',
'05-01-2019' =>'SÁ.',
'06-01-2019' =>'DO.',
'07-01-2019' =>'LU.',
'08-01-2019' =>'MA.',
'09-01-2019' =>'MI.',
'10-01-2019' =>'JU.',
'11-01-2019' =>'VI.',
'12-01-2019' =>'SÁ.',
'13-01-2019' =>'DO.',
'14-01-2019' =>'LU.',
'15-01-2019' =>'MA.',
'16-01-2019' =>'MI.',
'17-01-2019' =>'JU.',
'18-01-2019' =>'VI.',
'19-01-2019' =>'SÁ.',
'20-01-2019' =>'DO.',
'21-01-2019' =>'LU.',
'22-01-2019' =>'MA.',
'23-01-2019' =>'MI.',
'24-01-2019' =>'JU.',
'25-01-2019' =>'VI.',
'26-01-2019' =>'SÁ.',
'27-01-2019' =>'DO.',
'28-01-2019' =>'LU.',
'29-01-2019' =>'MA.',
'30-01-2019' =>'MI.',
'31-01-2019' =>'JU.',
'01-02-2019' =>'VI.',
'02-02-2019' =>'SÁ.',
'03-02-2019' =>'DO.',
'04-02-2019' =>'LU.',
'05-02-2019' =>'MA.',
'06-02-2019' =>'MI.',
'07-02-2019' =>'JU.',
'08-02-2019' =>'VI.',
'09-02-2019' =>'SÁ.',
'10-02-2019' =>'DO.',
'11-02-2019' =>'LU.'
 ]; ?> 

<!doctype html>
<html lang="en">
  <head>
    <title>Mensajería</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>

  <table class="table table-striped table-responsive">
      <thead class="thead-default">
          <tr>
              <th>Día</th>
              <th>Fecha</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
          </tr>
          </thead>
          <tbody>

          <?php 
          
          foreach ($name as $key => $value) {


            echo '<tr>
                  <td scope="row">'.$value.'</td>
                  <td>'.$key.'</td>
                  <td><a target="_black" href="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/Reparto/Pedro/'.$value.'-'.$key.'">Pedro</td>
                  <td><a target="_black" href="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/Reparto/Curro/'.$value.'-'.$key.'">Curro</td>
                  <td><a target="_black" href="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/Reparto/Juanje/'.$value.'-'.$key.'">Juanje</td>
                  <td><a target="_black" href="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/Reparto/Arles/'.$value.'-'.$key.'">Arlés</td>
                  <td><a target="_black" href="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/Diario/Reparto/Candido/'.$value.'-'.$key.'">Cándido</td>
              </tr>';
           }
          
          ?>
       
              
          </tbody>
  </table>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
