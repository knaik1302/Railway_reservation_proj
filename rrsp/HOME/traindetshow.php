<?php
    $con = mysqli_connect('localhost','RRSP','','rrsp_registration',3307);

    if(!$con){
        echo 'Connection error: ' .mysqli_connect_error();
    }
$date =$_POST['DATE'];
$fplace=$_POST['FROMPLACE'];

if($fplace!=""){
$s = "select * from traindetails where traintime = '$date' and fromplace= '$fplace'";}
else{
    $s = "select * from traindetails where traintime = '$date'";
}
$result = mysqli_query($con, $s);
$num=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME PAGE</title>
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
         table{
             text-align : center;
             margin-left: 30%;
         }   
        
        </style>
    </head>
    <body>
    <?php include('D:\WebDev\XAMPPINSTALLEDFILE\htdocs\rrsp\HOME\header.php') ?>
    <?php include('D:\WebDev\XAMPPINSTALLEDFILE\htdocs\rrsp\HOME\nav.php') ?>
    <div id="table">
    <form action="http://localhost/rrsp/HOME/traindetshow.php" method="POST">
            <label for="date">ENTER THE DATE OF TRAVEL:</label>
            <input type="date" name="DATE" id="date" required><br>
            <p>ENTER THE PLACE OF STATION THAT YOU WANT TO TRAVEL FROM<br></p>
            <label for="fplace">From:</label><input list="fplaces" id="fplace" name="FROMPLACE">
                <datalist id="fplaces">
                <option value="gokarna">
                <option value="kumta">
                <option value="bhatkal">
                </datalist>
            <!-- <label for="tplace">To:</label><input list="tplaces" id="tplace" name="TOPLACE" required>       
            <datalist id="tplaces">
                <option value="udupi">
                <option value="surathkal">
                <option value="mangalore">
                </datalist> -->
            <br><input type="submit" name="traindet" value="submit"><br><br>
    </form>

    <?php
     if($result!="" && $num >0)
     {
         print("<h3>THE DETAILS OF TRAIN:</h3>");
         print("<table border= '3px solid'>
         <tr>
             <th> train id </th>
             <th> train name </th>
             <th> From </th>
             <th> To </th>
             <th> Date </th>
         </tr>");
        while($row=mysqli_fetch_assoc($result)){
             print ("<tr align:'center'>");
             print ("<td>".$row['trainid']."</td>");
             print ("<td>".$row['trainname']."</td>");
             print( "<td>".$row['fromplace']."</td>");
             print ("<td>".$row['toplace']."</td>");
             print ("<td>".$row['traintime']."</td></tr>");
         }
         print("</table>");
     }
     else{
         echo '<h3>NO TRAINS AVAILABLE</h3>';
     }
     mysqli_close($con);
    ?>
    </div>
     <?php include('D:\WebDev\XAMPPINSTALLEDFILE\htdocs\rrsp\HOME\footer.php') ?>
    </body>
</html>