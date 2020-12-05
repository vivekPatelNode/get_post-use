<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main{
           width:70%;
           height: 250px;
           /* background-color: aqua; */
           margin: auto;
           margin-top: 160px;
           
        }
    .red{
        background:red;
        width:30%;
        height:200px;
        float:left;
        margin:5px;
        text-align: center;
       
        
    }
    .green{
        background:green;
        width:30%;
        height:200px;
        float:left;
        margin:5px;
        
    }
    .blue{
        background:blue;
        width:30%;
        height:200px;
        float:left;
        margin:5px;
        
    }

    a:hover{
        opacity: 0.6;
        
    }



    
    
    </style>
</head>
<body>
    <div class="main">
    <a href="other.php?id=red"><div class="red"></div></a>
    <a href="other.php?id=green"><div class="green"></div></a>
    <a href="other.php?id=blue"><div class="blue"></div></a>
</div>
</body>
</html>