<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .main{
            width:100%;
            height:663px;
            /* background:yellow; */
        }
        .small1{
            width:50%;
            height:663px;
            float:left;
            background: gray;

        }
        .small2{
            width:50%;
            height:663px;
            float: right;
            background: hotpink;
        }
        form{
            margin-top: 150px;
            padding:20px;
            margin-left: 150px;
        }
        p{
            padding: 7px;
        }
        input{
            width:50%;
            padding: 18px;
            border-radius: 5px;
            font-weight:bolder;
            color: gray;
        }
        .submit{
            margin-left: 25px;
            
        }
        .small3{
            width:50%;
            height:400px;
            margin-left: 170px;
            margin-top: 120px;
            position: relative;
            border-radius: 50px;
        }
        .small4{
                position: absolute;
                top: 130px;
                left:90px;
                font-size: larger;
                font-weight: bolder;
                color: white;
             }

    </style>
</head>
<body>
    <div class="main">
        <div class="small1">
            <form action="" method="post">
                <p><input type="text" name="name" placeholder="Name"></p>
                <p><input type="email" name="email" placeholder="Email"></p>
                <p><input type="number" name="number" placeholder="Mobile-Number"></p>
                <p class="submit"><input type="submit" name="submit" value="Submit"></p>
            </form>
        </div>
        <div class="small2">
            <div class="small3" style="background:<?php echo $_GET['id'] ?> ;">
                <div class="small4">
                <p><?php echo @$_POST['name']?></p>
                <p><?php echo @$_POST['email']?></p>
                <p><?php echo @$_POST['number']?></p>
            </div>
                
            </div>
        </div>




    </div>
</body>
</html>