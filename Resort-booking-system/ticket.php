<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="ticket.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</head>
<body style="background-color:#212529" >
    <div class=" parent1">
        <div style="text-align: center;">
        <h1 style="color:#FFFFFF ">Your Ticket is here!!</h1>
        </div>  
        <br><br>
    <img src="bluehorizon.png">
    <div class="parent2 " >
      <br><br><br><br><br>
    <?php 
       $fname = $_POST['fname'];
        $con = new mysqli("localhost","root","","bluehorizon");
        $sql = "SELECT * FROM register WHERE fname='$fname'";
        $result =  $con->query($sql);
        
        while ($row=$result->fetch_assoc()){
            echo " <div class='ticket'>";
            echo "<div class='above'> <div class='name1'><b class='d-inline name'>$row[fname]</b></div><div class='date1'><b  class='d-inline date '>$row[checkin]</b></div> ";
            
            echo "  <b class='d-inline id'>";
             echo rand(100,999);
            echo "</b>  <b class='d-inline time'>";
            date_default_timezone_set("Asia/Kolkata");
            echo  date('h:i:a');
            echo "</b> "; 
            
            echo "</div></div>  ";
            echo " </div>";
            
           exit();
        }
        

        $con->close();
        ?>
        </div>
        </div>

        
    </body>
    </html>