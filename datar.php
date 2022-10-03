
        <?php
        $a=$_POST["name"];
        $b=$_POST["mail"];
        $c=$_POST["number"];
        
        $conn1=new mysqli("localhost","root","samyakjain10","dbmsproj");
        $sql=" INSERT INTO user_data values('$a','$b','$c')";
        $conn1->query($sql);
        
        
        $conn1->close();



        ?>
