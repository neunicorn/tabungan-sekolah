<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "../img/wallet.png" >
    <title>nabungyuk!</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,900;1,300;1,400;1,500;1,700;1,900&display=swap');
        html{
            font-family: 'Roboto', sans-serif;
        }
        body {
            background-image: url("../img/269_Abstract_Background.jpg");
            background-repeat: no-repeat;
            background-attachment:fixed;
            background-size: 100%;
            
        }

        .container{
            background: white;
            margin: auto;
            margin-top: 15%;
            width: 25%;
            text-align: center;
            border: 1px solid white;
            border-radius: 10px;   
            padding: 12px 16px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        button{
            border: 1px solid green;
            padding: 10px;
            border-radius: 10px;
            font-weight: 500;
            background: white;
            outline: none;
        }
        button:hover{
            opacity: 0.8;
            background: green;
            color: green;
        }
        button a{
            color: green;
            text-decoration: none;
        }
        button a:hover{
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="../img/check-mark.png" width="70px" alt=""/>
        <p>Account has been created!</p>
        <button><a href="../index.php">click here to log in</a></button>
    </div>
    
</body>
</html>