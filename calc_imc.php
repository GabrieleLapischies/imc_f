<!DOCTYPE html>
< html  lang = " pt " >
< cabeça >
    < meta  charset = " UTF-8 " >
    < meta  name = " viewport "  content = " width=device-width, initial-scale=1.0 " >
    < title >Página inicial</ title >
    < link  rel = " folha de estilo "  type = " text/css "   href = " css/style.css " >
</ cabeça >
< corpo >
    <div class="inicial">
        <?php
            If (isset($_post["en"])){
               $peso = $_post["ps"];
               $altura = $_post["al"];
              
              $res = $peso / $altura**2;
                
               if ($res < 16):
                  echo "O resultado do IMC é - MAGREZA GRAVE";
               else if ($res = 16 and $res < 17):
                  echo "O resultado do IMC é - MAGREZA MODERADA";
              else if ($res = 17 and $res < 18,5):
                  echo "O resultado do IMC é - MAGREZA LEVE";
              else if ($res = 18,5 and $res < 25):
                  echo "O resultado do IMC é - SAUDÁVEL";
              else if ($res = 25 and $res < 30):
                  echo "O resultado do IMC é - SOBREPESO";
              else if ($res = 30 and $res < 35):
                  echo "O resultado do IMC é - OBESIDADE GRAU I";
              else if ($res = 35 and $res < 40):
                  echo "O resultado do IMC é - OBESIDADE GRAU II";
              else if ($res >= 40):
                  echo "O resultado do IMC é - OBESIDADE GRAU III";
            }
        ?>  
    </div> 
</ corpo >
</html> 
