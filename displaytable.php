
        <?php
        $users=[
            [1,"Somanath","patilsomanath292@gmail.com"],
            [2,"Srujal","srujal292@gmail.com"],
            [3,"Sai","sai292@gmail.com"],
            [4,"Sagar","sagar@gmail.com"],
        ];  

            echo "<table border=1>";
        for($i=0; $i<count($users);$i++){
            echo"<tr>";
            for($j=0; $j<count($users[$i]);$j++){
                echo "<td>";
                echo $users[$i][$j];
                echo"<br/>";
                echo"</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>