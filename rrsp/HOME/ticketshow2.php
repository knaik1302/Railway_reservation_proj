<?php
    $con = mysqli_connect('localhost','RRSP','','rrsp_registration',3307);

    if(!$con){
        echo 'Connection error: ' .mysqli_connect_error();
    }
    $uname=$_POST['username'];
     $q1="select t.ticketid, td.trainname, td.traintime, td.trainid, t.ttime from ticket t, traindetails td, train_ticket tt 
            where t.ticketid=tt.ticketid and tt.trainid=td.trainid and t.id 
            in (select t.id from user u, ticket t where t.id = u.id and username='$uname')";

    $result = mysqli_query($con, $q1);
    $num=mysqli_num_rows($result);
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
        label{
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
        table{
            margin-left:460px;
        }
        
        </style>
    </head>
    <body>
    <?php include('D:\WebDev\XAMPPINSTALLEDFILE\htdocs\rrsp\HOME\header.php') ?>
    <?php include('D:\WebDev\XAMPPINSTALLEDFILE\htdocs\rrsp\HOME\nav.php') ?>
    <div id="table">
    <form action="http://localhost/rrsp/HOME/ticketshow2.php" method="POST">
             <label for="username">ENTER YOUR USERNAME:</label>
             <input type="text" name="username" id="username"required>
            <br><br><input type="submit" name="ticketbook" value="check">
    </form>
		<?php	
            if($result!="" && $num > 0)
            {
                print("<br><h4><u>THE DETAILS OF TICKET BOOKED:</u></h4>");
               while($row=mysqli_fetch_assoc($result)){
                print("<table border= '3px solid'>");
                print("<td align:'center'><strong>PNR NUMBER : </strong>".$row['ticketid']."<br>");
                print("<strong>TRAIN NUMBER : </strong>".$row['trainid']."<br>");
                print("<strong>TRAIN NAME: </strong>".$row['trainname']."<br>");
                   print("<strong>TRAIN TIME : </strong>".$row['traintime']."<br>");
                   print("<strong>BOOKED TIME: </strong>".$row['ttime']."<br></td>");
                   print("</table>");
                }
            }
            else{
                echo "Ticket is not booked...!!!!";
            }
            mysqli_close($con);
            ?>
    </div>
     <?php include('D:\WebDev\XAMPPINSTALLEDFILE\htdocs\rrsp\HOME\footer.php') ?>
    </body>
</html> 