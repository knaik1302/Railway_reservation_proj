<?php
    $con = mysqli_connect('localhost','RRSP','','rrsp_registration',3307);

    if(!$con){
        echo 'Connection error: ' .mysqli_connect_error();
    }
    $tid =$_POST['tid'];
    $ttime =$_POST['DATE'];
    $uname=$_POST['username'];
     $q1="select id from user where username= '$uname'";
    $q2="select * from traindetails where trainid= '$tid' and traintime= '$ttime'";
    $result = mysqli_query($con, $q1);
     $result2= mysqli_query($con, $q2);

     $num=mysqli_num_rows($result);
     $num2=mysqli_num_rows($result2);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>HOME PAGE</title><link rel="stylesheet" type="text/css" href="background.css">
         <style>
        div {
            margin-top: 20px;
            text-align : center;
        }
        label,p{
            font-weight: bold;
        }
        input{
	        text-align: center;
	        outline: none;
	        background-color: lightgray;
            width: 200px;
            height: 25px;			
        	border:2px thin ;
            border-radius: 10px;
            margin: 10px auto;
        }
        
        </style>
    </head>
    <body>
    <?php include('D:\WebDev\XAMPPINSTALLEDFILE\htdocs\rrsp\HOME\header.php') ?>
    <?php include('D:\WebDev\XAMPPINSTALLEDFILE\htdocs\rrsp\HOME\nav.php') ?>
    <div id="table">
    <form action="http://localhost/rrsp/HOME/bookticketshow.php" method="POST">
            <label for="id">ENTER THE TRAIN ID FOR TRAIN BOOKING:</label>
            <input type="number" name="tid" id="id" required><br>
             <label for="username">ENTER YOUR USERNAME:</label>
             <input type="text" name="username" id="username"required><br>
             <label for="date">ENTER THE DATE OF TRAVEL:</label>
            <input type="date" name="DATE" id="date" required><br>
            <br><br><input type="submit" name="ticketbook" value="book">
    </form>
		<?php	
            if($result!="" && $num > 0  && $num2 > 0 && $result2!="")
            {
                print("<h3>Booked Successfully..!!");
                $row=mysqli_fetch_assoc($result);
                 $uuid=$row['id'];
                 $q3="insert into ticket (id) values ('$uuid')";
                 mysqli_query($con,$q3);
                 
                 $row2=mysqli_fetch_assoc($result2);
                 $uutid=$row2['trainid'];
                //  $uuname=$row2['trainname'];

                $q4="select ticketid from ticket t, user u where t.id = u.id and u.id='$uuid'";
                $result3=mysqli_query($con,$q4);
                $row3=mysqli_fetch_assoc($result3);
                $tickid=$row3['ticketid'];
                echo "<h3>Your Ticket(PNR) Number is $tickid </h3>";

                $q5="insert into train_ticket (trainid, ticketid) values ('$uutid',' $tickid')";
                mysqli_query($con,$q5);
            }
            else if($num2==0){?>
               <script> alert("Trian is not available..!!");</script><?php
            }
            else{
                echo "there is an error...!! Ticket is not booked...";
            }
            mysqli_close($con);
            ?>
    </div>
     <?php include('D:\WebDev\XAMPPINSTALLEDFILE\htdocs\rrsp\HOME\footer.php') ?>
    </body>
</html> 