<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8" />
        <title>battel ship</title>   
        <link rel="stylesheet" type="text/css" href="farHTML.css">
        
    </head>
    <body>
   
        <h1>Hallo</h1>
        <br>
        
                
        <table border="1"> 
            <?php
            for ($row = 1; $row <= 7; $row++) {
                echo "<tr>";
                for ($colon = 1; $colon <= 6; $colon++) {
                    $cell = "$row"."$colon";

                    echo "<td onclick=shoot($row$colon) id=board$row$colon class=button ></td>";
                }
                echo"</tr>";
            }
            $gussy=(rand(1,7));
            $gussx=(rand(2,5));
            $guss=[$gussy.$gussx-1,$gussy.$gussx,$gussy.$gussx+1];
            echo $guss[0],$guss[1],$guss[2];
            echo '<script>';
            echo 'var ship = ' . json_encode($guss) .';';
            echo '</script>';
            ?>
        </table>
     
    <script>
        
            
            
            function shoot(q) {
                if(q==ship[0] || q ==ship[1] || q ==ship[2] ){
                   document.getElementById("board"+q).style.background='red';
                if(checkwin(ship)){
                    alert("ship has sunk");
                }

                }else{
                   document.getElementById("board"+q).style.background='blue'; 
                }   
            }
            function checkwin(shipx){
                for (x=0;x < shipx.length;x++){
                var dekleur = document.getElementById('board'+shipx[x]).style.backgroundColor;
                    if(dekleur != 'red'){
                           return false;
                    }
                //alert(shipx[x]+x+dekleur);
                }
                return true;
            }
    </script>   
</body>


</html>