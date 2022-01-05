<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>nabungyuk!</title>
    <link rel = "icon" href = "../img/wallet.png" >
</head>
<body>
    <header>
        <nav>
            <ul>
            <li class="center-img"><img src="../img/wallet.png" alt="" ></li>
            <li><a href="main.php">Home</a></li>
            <li><a href="user.php">User</a></li>
            <li><a href="wallet.php">Wallet</a></li>    
            </ul>
        </nav>
        <div class="top-bar">
            <a href="main.php"><h1 class="midle-of-navbar">nabungyuk!</h1></a>
            <img src="../img/user2.png" alt="zulfan" width="25px" class="midle-of-container"/>
            <div class="dropdown">   
                <ul>
                    <!-- <li><img src="img/user2.png" alt="zulfan" width="25px" class="midle-of-container"/></li> -->
                    <li><?php if(isset($_SESSION['nama_akun'])){
                        echo $_SESSION['nama_akun'];
                        }?>
                    </li>   
                </ul>
                <br>
                <br>
            <div class="dropdown-content">
                <a href="logout.php">Log out</a>
            </div> 
            </div>
                      
        </div>    
    </header>