
<?php
//including the database connection file
$databaseHost = 'localhost';
 $databaseName = 'bluehorizon';
 $databaseUsername = 'root';
 $databasePassword = '';
 $mysqli = mysqli_connect($databaseHost, $databaseUsername,
$databasePassword, $databaseName);

 
 $fname = $_POST['first_name'];
 $lname = $_POST['last_name'];
 $nname = $_POST['nick_name'];
 $mail = $_POST['uname'];
 $dob = $_POST['dob'];
 $location = $_POST['location'];
 $id = $_POST['cpwd'];
 $checkin = $_POST['checkin'];
 $checkout = $_POST['checkout'];


 //insert data to database
 $sql = "INSERT INTO register (fname,lname,nname,mail,dob,loc,id,checkin,checkout)values ( '$fname',
 ' $lname',' $nname', ' $mail',' $dob','$location',' $id',' $checkin', '$checkout')";
 $final = $mysqli->query($sql);
 if ($final == true){
     ?>
     <html>
         <head>
         <link rel="stylesheet" href="regpage.css">
             <!--Boostrap-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          <script>

function success(){
            
            swal({
                   title: "BlueHorizon inn.",
             text: "Alas!! Booked Succesfully.",
            icon: "success",
            button: true,
            dangerMode: false,
              })
            .then((willDelete) => {
             if (willDelete) {
              swal("Eager to catch up with you!", {
                  icon: "success",
                });
            } 
         });
        }
      </script>
      <style>
          
    
        marquee{
            color:white;
            font-weight:bolder;
            font-size:20px;
        }
        marquee:hover{
            color:tomato;
            font-weight:bold;
           
        }
        
      </style>
      
         </head>
         <body>
     

         
         <marquee  direction="rtl">
             Hello <?php
             echo'<span style="color:#0000FF;">'.$fname.'</span>';
             ?> 
             welcome to BlueHorizon inn.
        </marquee>
            
             
            
          
        <button type=" submit " class="btn btn-danger btn-lg " id="btn-color confirm" style="margin-left: 5%; margin-top: 2%; " 
        onclick="success()">View Confirmation message!!</button>
        <form action="ticket.php" method="post">
            <input type="hidden" name="fname" value=<?php echo $fname; ?>>
          <button type=" submit " class="btn btn-danger btn-lg" id="btn-color ticket" style="margin-left: 5%; margin-top: 2%; "
         onclick="" >View Ticket!!</button>
    </form>
         </body>
     </html>

     <?php
 }
 else{
     echo "Failure";
 }

 ?>
