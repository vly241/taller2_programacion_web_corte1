
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>nomina</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap.min.css">
		
</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">salario</th>
      <th scope="col">auxilio transporte</th>
      <th scope="col">salario devengado</th>
      <th scope="col">dias trabajados</th>
       <th scope="col">pension 4%</th>
       <th scope="col">salud 4%</th>
        <th scope="col">deudas </th>
        <th scope="col">cesantias 8,3%</th>
          <th scope="col">interese cesantias 1%</th>
           <th scope="col">vacaciones 4,1%</th>
            <th scope="col">prima servicios 8.3%</th>
             <th scope="col">neto a pagar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>
          <?php
          if($_POST[nombre_1]!=""){
               $nombre1 = $_POST['nombre_1'];
              print($nombre1);
          }
          ?>
      </td>
      <td>
            <?php
          if($_POST[s_1]!=""){
              print($_POST[s_1]);
          }
          ?>
        </td>
        
     <td>88.211</td>
     
     <td>
            <?php
          if($_POST[s_1]!=""){
              print($_POST[s_1]+88211);
          }
          ?>
        </td>
     
      <td>
          <?php
           if($_POST[d_t1]!=""){
               $d_t1 = $_POST['d_t1'];
              print($d_t1);
          }
          ?>
      </td>
      <td>
          <?php
         if($_POST[s_1]!=""){
             $s_1=$_POST[s_1]+88211;
             print($s_1*4/100);
         }
          ?>
      </td>
        <td>
            <?php
          if($_POST[s_1]!=""){
              $s_1=$_POST[s_1]+88211;
             print($s_1*4/100);
         }
          ?>
        </td>
        <td>
            <?php
          
          ?>
        </td>
        
        <td><?php
          if($_POST[s_1]!=""){
              $s_1=$_POST[s_1]+88211;
             print($s_1*8.3/100);
         }
          ?>
          </td>
        
        <td>
            <?php
          if($_POST[s_1]!=""){
              $s_1=$_POST[s_1]+88211;
             print($s_1*1/100);
         }
          ?>
        </td>
        <td>
            <?php
          if($_POST[s_1]!=""){
              $s_1=$_POST[s_1]+88211;
             print($s_1*4.1/100);
         }
          ?>
        </td>
        <td>
            <?php
          if($_POST[s_1]!=""){
              $s_1=$_POST[s_1]+88211;
             print($s_1*8.3/100);
         }
          ?>
        </td>
        <td>
            <?php
          if( $_POST[s_1]!=""){
          
          $s_1 = $_POST['s_1']+88211;
              
          $p_s=$s_1*4/100;
          $c_ps=$s_1*8.3/100;
          $vacaciones=$s_1*4.1/100;
          $int_c=$s_1*1/100;
            
        $deducciones=$p_s*2+$c_ps*2+$vacaciones+$int_c;      
            
          print($resp=$s_1-$deducciones);
}
          ?>
        </td>
        
    </tr>
    
    
    
    <tr>
      <th scope="row">2</th>
      <td>
          <?php
          if($_POST[nombre_2]!=""){
               $nombre2 = $_POST['nombre_2'];
              print($nombre2);
          }
          ?>
      </td>
      <td>
            <?php
          if($_POST[s_2]!=""){
              print($_POST[s_2]);
          }
          ?>
        </td>
        
      <td>88.211</td>
      
      <td>
            <?php
          if($_POST[s_2]!=""){
              print($_POST[s_2]+88211);
          }
          ?>
        </td>
      
      <td>
          <?php
          if($_POST[d_t2]!=""){
              print($_POST[d_t2]);
          }
          ?>
      </td>
      <td>
          <?php
         if($_POST[s_2]!=""){
             $s_2=$_POST[s_2]+88211;
             print($s_2*4/100);
         }
          ?>
      </td>
        <td>
            <?php
          if($_POST[s_2]!=""){
              $s_2=$_POST[s_2]+88211;
             print($s_2*4/100);
         }
          ?>
        </td>
        <td>
            <?php
          
          ?>
        </td>
        
        <td><?php
          if($_POST[s_2]!=""){
              $s_2=$_POST[s_2]+88211;
             print($s_2*8.3/100);
         }
          ?>
          </td>
        
        <td>
            <?php
          if($_POST[s_2]!=""){
              $s_2=$_POST[s_2]+88211;
             print($s_2*1/100);
         }
          ?>
        </td>
        <td>
            <?php
          if($_POST[s_2]!=""){
              $s_2=$_POST[s_2]+88211;
             print($s_2*4.1/100);
         }
          ?>
        </td>
        <td>
            <?php
           if($_POST[s_2]!=""){
              $s_2=$_POST[s_2]+88211;
             print($s_2*8.3/100);
         }
          ?>
        </td>
        <td>
            <?php
          if( $_POST[s_2]!=""){
          
          $s_1 = $_POST['s_2']+88211;
              
          $p_s=$s_2*4/100;
          $c_ps=$s_2*8.3/100;
          $vacaciones=$s_2*4.1/100;
          $int_c=$s_2*1/100;
            
        $deducciones=$p_s*2+$c_ps*2+$vacaciones+$int_c;      
            
          print($resp=$s_2-$deducciones);
}
          ?>
        </td>
       
    </tr>
    
    
    
    <tr>
      <th scope="row">3</th>
      <td>
          <?php
          if($_POST[nombre_3]!=""){
               $nombre3 = $_POST['nombre_3'];
              print($nombre3);
          }
          ?>
      </td>
      <td>
            <?php
          if($_POST[s_3]!=""){
              print($_POST[s_3]);
          }
          ?>
        </td>
       
       <td>88.211</td>
       
       <td>
          <?php
          if($_POST[s_3]!=""){
              print($_POST[s_3]+88211);
          }
          ?>
      </td>
      <td>
          <?php
          if($_POST[d_t3]!=""){
              print($_POST[d_t3]);
          }
          ?>
      </td>
      <td>
          <?php
         if($_POST[s_3]!=""){
             $s_3=$_POST[s_3]+88211;
             print($s_3*4/100);
         }
          ?>
      </td>
        <td>
            <?php
          if($_POST[s_3]!=""){
              $s_3=$_POST[s_3]+88211;
             print($s_3*4/100);
         }
          ?>
        </td>
        <td>
            <?php
          
          ?>
        </td>
        
        <td><?php
          if($_POST[s_3]!=""){
              $s_3=$_POST[s31]+88211;
             print($s_3*8.3/100);
         }
          ?>
          </td>
        <td>
            <?php
          if($_POST[s_3]!=""){
              $s_3=$_POST[s31]+88211;
             print($s_3*1/100);
         }
          ?>
        </td>
        <td>
            <?php
          if($_POST[s_3]!=""){
              $s_3=$_POST[s31]+88211;
             print($s_3*4.1/100);
         }
          ?>
        </td>
        <td>
            <?php
          if($_POST[s_3]!=""){
              $s_3=$_POST[s31]+88211;
             print($s_3*8.3/100);
         }
          ?>
        </td>
        <td>
            <?php
          if( $_POST[s_3]!=""){
          
          $s_1 = $_POST['s_3']+88211;
              
          $p_s=$s_3*4/100;
          $c_ps=$s_3*8.3/100;
          $vacaciones=$s_3*4.1/100;
          $int_c=$s_3*1/100;
            
        $deducciones=$p_s*2+$c_ps*2+$vacaciones+$int_c;      
            
          print($resp=$s_3-$deducciones);
}
          ?>
        </td>
        
    </tr>
  </tbody>
</table>
</body>
</html>