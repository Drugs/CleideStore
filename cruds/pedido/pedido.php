<?php include "conexao.php"?>

<!DOCTYPE HTML>
<html lang="">
    <head>
    <!--ESTILO CSS BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
    
    </head>
    <body>
    
   <!-- <canvas class="my-4 w-100" id="myChart" width="500" height="100"></canvas>

      <h2 style="text-align:center;">Tabela do produto</h2>
      <div class="table-responsive">
        <table style="text-align: center;" class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">id pedido</th>
              <th scope="col">id cliente</th>
              <th scope="col">data</th>
              <th scope="col">status</th>
              <th scope="col">tipo</th>
            </tr>
          </thead>
          <tbody>
-->
        <?php
         $query = "SELECT * FROM `pedido`";
         $conectar = mysqli_query($GLOBALS['mysql'], $query);
          echo "teste";
           echo "
              <canvas class='my-4 w-100' id='myChart' width='500' height='100'></canvas>

      <h2 style='text-align:center;'>Tabela do produto</h2>
      <div class='table-responsive'>
        <table style='text-align: center;' class='table table-striped table-sm'>
          <thead>
            <tr>
              <th scope='col'>id pedido</th>
              <th scope='col'>id cliente</th>
              <th scope='col'>data</th>
              <th scope='col'>status</th>
              <th scope='col'>tipo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>293619</td>
              <td>08374526</td>
              <td>27/09/2021- 8:11 - noite</td>
              <td>pagamento Aprovado</td>
              <td>monitor</td>
            </tr>
            <tr>
              <td>037383</td>
              <td>75373734</td>
              <td>06/05/2021- 7:49 - manhã</td>
              <td>A caminho</td>
              <td>Cabo HDMI</td>
            </tr>
        
         </tbody>
        </table>
      </div>
           ";

           var_dump($conectar);
        ?>
          <!--  <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>text</td>
              <td>random</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>placeholder</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>placeholder</td>
              <td>tabular</td>
              <td>information</td>
              <td>irrelevant</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>text</td>
              <td>placeholder</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>visual</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>random</td>
              <td>tabular</td>
              <td>information</td>
              <td>text</td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </main>
  </div>
    </body>
</html>