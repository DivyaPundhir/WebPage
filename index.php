<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divs Classes</title>
    <link rel="stylesheet" href="Divya.css">
    <style>
        body {
            color: white;
            margin: 0px;
            
            padding: 0px;
            background: url('fav.jpg');
        }
        
        .left {
            /* border: 2px solid red; */
            position: absolute;
            left: 34px;
            top: 20px;
        }
        
        .left img {
            width: 136px;
        }
        
        .left div {
            text-align: center;
        }
        
        .mid {
            display: block;
            width: 50%;
            margin: 20px auto;
            /* border: 2px solid green; */
        }
        
        .right {
            position: absolute;
            right: 34px;
            top: 43px;
            display: inline-block;
            /* border: 2px solid yellow; */
        }
        
        .navbar {
            display: inline-block;
        }
        
        .navbar li {
            display: inline-block;
            font-size: 25px;
        }
        
        .navbar li a {
            color: white;
            text-decoration: none;
            padding: 34px 23px;
        }
        
        .navbar li a:hover,
        .navbar li a.active {
            text-decoration: underline;
            color: gray;
        }
        
        .btn {
            font-family: Arial: margin: 0px 0px;
            background-color: black;
            color: white;
            padding: 4px 14px;
            border: 2px solid gray;
            border-radius: 10px;
            font-size: 20px;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: gray:
        }
        
        .container {
            border: 2px solid white;
            margin: 106px 80px;
            padding: 75px;
            width: 33%;
            border-radius: 28px;
            background-color: antiquewhite;
        }
        
        .form-group input {
            text-align: center;
            display: block;
            width: 500px;
            padding: 1px;
            border: 2px solid black;
            margin: 11px auto;
            border-radius: 8px;
        }
        
        .container h1 {
            text-align: center;
            color: brown;
        }
        
        .container button {
            margin: auto;
            width: 23%;
            display: block;
        }
    </style>

</head>

<body>
    <header class="header">
        <!-- Left box for logo -->
        <div class="left">
            <img src="book.jpg">
            <div> Divs Classes</div>

        </div>
        <!-- Mid box for navbar -->
        <div class="mid">
            <ul class="navbar">
                <li> <a href="#" class="active"> Home</a></li>
                <li> <a href="#"> About Us</a></li>
                <li> <a href="#"> Notes</a></li>
                <li> <a href="#"> Contact Us</a></li>
            </ul>
        </div>

        <!-- Right box for buttons	 -->
        <div class="right">
            <button class="btn">Call us Now</button>
            <button class="btn">Email us</button>
        </div>

    </header>
    <div class="container">
        <h1>Join the best coaching classes of Sikandra Rao</h1>
        <form action="noaction.php">
            <div class="form-group">
                <input type="text" name="" placeholder="Enter your Full Name">
            </div>
            <div class="form-group">
                <input type="text" name="" placeholder="Enter your Class">
            </div>
            <div class="form-group">
                <input type="text" name="" placeholder="Enter your School Name ">
            </div>
            <div class="form-group">
                <input type="text" name="" placeholder="Enter your Locality">
            </div>
            <button class="btn"> Submit</button>

        </form>
    </div>



</body>

</html>