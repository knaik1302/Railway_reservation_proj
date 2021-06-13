
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
    <form action="http://localhost/rrsp/HOME/ticketshow2.php" method="POST">
             <label for="username">ENTER YOUR USERNAME:</label>
             <input type="text" name="username" id="username"required>
            <br><br><input type="submit" name="ticketbook" value="check">
    </form>
    </div>
     <?php include('D:\WebDev\XAMPPINSTALLEDFILE\htdocs\rrsp\HOME\footer.php') ?>
    </body>
</html> 