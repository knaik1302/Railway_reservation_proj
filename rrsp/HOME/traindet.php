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
    <form action="http://localhost/rrsp/HOME/traindetshow.php" method="POST">
            <label for="date">ENTER THE DATE OF TRAVEL:</label>
            <input type="date" name="DATE" id="date" required><br>
            <p>ENTER THE PLACE OF STATION THAT YOU WANT TO TRAVEL<br></p>
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
            <br><br><input type="submit" name="traindet" value="submit">
    </form>
    </div>
     <?php include('D:\WebDev\XAMPPINSTALLEDFILE\htdocs\rrsp\HOME\footer.php') ?>
    </body>
</html>