

<html>
    <head>
        
        <style>
            body{
                margin-left: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
            }
            ul{
                list-style-type:none;
                padding: 0px;
                margin:0px;
                overflow: hidden;
             background-color: transparent;
  
            }
            li{
                display: inline;
                float:right;
                display: block;
                text-align: center;
                padding: 14px 16px;
               
                
                
                
  
 
                
            }
        li:hover{
                
                background-color:black;
        }
        .he{
            font-size:50px;
            font-family:Cursive;
            position:absolute;
            top: 300px;
            left: 520px;
            
        }
        tr{
            font-size:50px;
            font-family:cursive;
            position:absolute;
            top: 69px;
            left: 580px;
        }
    
h2:hover{
                color:brown;
                text-decoration: solid underline;
                text-decoration-color: blueviolet ;
                
                
                
                
            }
            h1:hover{
                text-transform: uppercase;
                color: crimson;
            }
            .registerbtn {
  background-color:darkgreen;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  width: 300px;
  position:absolute;
            top: 500px;
            left: 520px;
}

.registerbtn:hover {
  opacity: 2;
}
            
        </style>
       <script type="text/javascript">
        
        var info=["Home","About Us","Contact","Services","Event","Activities","Food","Login"];
        
    
    </script>
        </head>
        <body>
            
    
        <div>
        <img src="pay.jpg" height="800px" width="100%" >
        <div style=" width: 100%;position:absolute;top:20px;right: 400px;">
            <center>
            
            
            <ul>
                <li>
                
                    <a style="text-decoration:lavenderblush;color: white;" href="login.html"><script> document.write(info[7]);</script>  </a>
                   </li>
                   <li>
                       <a style="text-decoration: lavenderblush;color: white;"href="food.html"> <script> document.write(info[6]) </script></a>
                   </li>
                   <li>
                       <a style="text-decoration: lavenderblush;color: white;"href="ent.html"> <script> document.write(info[5]) </script></a>
                   </li>
                   <li>
                       <a style="text-decoration: lavenderblush;color: white;"href="events.html"> <script> document.write(info[4]) </script></a>
   
                   </li>
                   <li style="text-decoration: lavenderblush;color: white;" href="services.html">  <script> document.write(info[3]) </script> </a></li>
                   <li style="text-decoration: lavenderblush;color: white;" href="event.html">  <script> document.write(info[2]) </script> </a></li>
                   <li> <a style="text-decoration: lavenderblush;color: white;" href="home.html"> <script> document.write(info[1]) </script> </a></li>
                   <li>  <a style="text-decoration: lavenderblush;color: white;" href="h.html"> <script> document.write(info[0]) </script> </a></li>
               </ul>
            </center>
           </div>

<?php
$a=$_POST["name"];
$b=$_POST["lname"];
$c=$_POST["email"];
$d=$_POST["num"];
$e=$_POST["cd"];
$f=$_POST["cod"];
$g=$_POST["room"];
$h=$_POST["adults"];
$i=$_POST["child"];
$j=$_POST["supp"];

$conn=new mysqli("localhost","root","samyakjain10","dbmsproj");
$sql="INSERT INTO bookings VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
$conn->query($sql);

$conn->close();
?>


<h3 class="he" > Thank YOU!  </h3>
<h3  class="he"> 
<?php
$conn1=new mysqli("localhost","root","samyakjain10","dbmsproj");
$sql1="SELECT total from roomin WHERE room_type='$g' ";
$conn1->query($sql1);
$result=$conn1->query($sql1);

if ($result->num_rows > 0) 
{
    echo "<table>";
  
  while($row = $result->fetch_assoc())
 {
     echo "<br>";
     echo"Your total will be : Rs. ";
      echo  "<tr><td>". $row["total"] ."</td> </tr>"."<br>";
  }
  echo "</table>";
} 
else {
  echo "0 results";
}
$conn1->close();
?>    

</h3>
<button class="registerbtn"><a href="payu.html" style="text-decoration:none;color:white;"> Proceed to Payment </a></button>
</center>



<div style="background-color:#1f3646; height: 300px; padding: 0px;position:absolute;top:800px;width:100%;">
<p align="left" style="font-family: cursive;color: aliceblue;" > Copyright:2019-2021</p>
            <p align="center" style="font-family: cursive;color: aliceblue; font-size: larger;"> Social Media links </p> <a href="facebook.com/staycation">
            <p align="center" style="font-family: cursive;color: aliceblue;"> facebook.com/staycation </p> </a> <a href="instagram.com/staycation">
            <p align="center" style="font-family: cursive;color: aliceblue;"> instagram.com/staycation </p> </a> <a href="linked.com/staycation">
            <p align="center" style="font-family: cursive;color: aliceblue;"> linkedin.com/staycation </p> </a>
          
        </div>


    </body>
</html>