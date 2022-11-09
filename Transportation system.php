<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel ="icon" href="best-1.JPG" type="images/gif/JPG">
    <!--google font-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff&family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700;1,800&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--Awesome Font-->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">



    <title>Transportation Management System</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./bodypicture/fontawesome/css/all.min.css">
<link rel="stylesheet" href="./bodypicture/fontawesome/css/fontawesome.min.css">



    

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">






    <!--Css Start-->
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding:0;
            list-style-type:none;
            text-decoration: none;
            text-transform: capitalize;
            transition: all 0.3s linear;
            outline: none;

        }
        *::selection{
            background-color: yellow-green;
            color: #fff;

        }
        body{
            
            font-family: 'Open Sans', sans-serif;
        
        }
        header{
            width:100%;
            height:100vh;
            background-image: linear-gradient(rgba(0,0,0.1),rgba(0,0,0,0.1)),
            url('./image/h.jpg');
            background-position: center;
            background-size: cover;
            
        }
        nav{
            padding: 2% 6%;
            display: flex;
            justify-content:  space-between;
            align-items: center;
            color: #fff;
        }
        nav.logo{
            font-size: 3rem;
            cursor: pointer;
        }
        nav.logo span{
            color: yellowgreen;
        }
        nav .links{
            padding-left: 0;
        }
        nav .links li{
            display: inline-block;
            margin: 1rem;
            font-size: 1.5rem;
        }
        .links .active{
            color: yellowgreen;
        }
        nav .links li a:hover{
            color: yellowgreen;
            text-style:bold;

        }
        header .content{
            position: absolute;
            padding: 10%;
            top: 50%;
          
          
            transform: translate(-2%,-2%,);
            text-align: center;
        }
        header .content h1{
            font-size: 3.5rem;
            text-transform: uppercase;
            color: #fff;
        }
        .btn{
            padding: 0.5rem 1.5rem;
            background-color: transparent;
            border: 0.3rem solid yellowgreen;
            color: yellowgreen;
            margin-top: 1.8rem;
            cursor: pointer;
            border-radius: 0.5rem;
            font-size: 2rem;
        }
        .btn:hover{
            background-color: yellowgreen;
        }
        nav .open,.close{
            font-size: 1.8rem;
            cursor: pointer;
            color: #fff;
        }
        @media(max-width:850px){
            nav .links{
                height: 25rem;
                width: 60%;
                position:fixed;
                top:0;
                right:0;
                border-radius: 1.2rem;
                background-color: #fff;
                display: none;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                z-index: 9999;
            }
            nav .links li{
                font-size: 1.8rem;
                margin: 0.5rem;
            }
            nav .links li a{
                color:black;
            }
            header .content h1{
                font-size: 6rem;
            }
          
            
            
        }



        /*start ABOUT*/

        .about .row{
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                padding: 2% 6%;
            }
            .about .row .image{
                flex: 1 1 40rem;
                padding: 2rem;
            }
    .about .row .image img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .about .row .content {
        flex: 1 1 40rem;
        padding: 2rem;
        text-align: center;
    }
    .about .row .content h1{
        font-size: 3rem;
        color:yellowgreen;
        margin-bottom: 5rem;
        
     

    }
    .about .row .content p{
        line-height: 1.7;
        font-size: 1.2rem;
        margin-bottom: 1.2rem;
        text-transform: uppercase;
    }


   




























footer{
    color: #fff;
    padding: 2rem;
    text-align: center;
    background-color: #333;
    font-size :1.8rem;
}
.video{
    position:absolute;
    right:0;
    bottom:0;
    z-index:-1;
    transition:10sec;

}
@media(min-aspect-ratio:16/9){
    .back-video{
        width:100%;
        height:auto;
    }
}
@media(max-aspect-ratio:16/9){
    .back-video{
        width:auto;
        height:100%;
    }





































































            






    </style>

</head>
<body>






    





    <!--Start Header-->
    <header>
        <nav>
            <a href="Transportation system.php">Transportation Management System</a>
           
            
              
            
        

        <ul class="links">
                <li><a href="Transportation System.php" >Home</a></li>
                <li><a href="homepage.php">BUS </a></li>
                
                
            
                <li> | </li>
                <li><a href="contract.php">CONTRACT US</a></li>
           
             
            
                
            </ul>
            
                
            

        </nav>
        





       
    </header>



</html>










          

























































    <!--JavA Script Start-->
    <script>
        var mainMenu= document.querySelector('.links')
        var openMenu= document.querySelector('.open')
        var closeMenu= document.querySelector('.close')
        openMenu.addEventListener('click',show)
        closeMenu.addEventListener('click',close)
        function show(){
            mainMenu.style.display='flex'
            mainMenu.style.right='0'
        }
        function close(){
            mainMenu.style.right='-60%'
        }
        alert("Anik The Fit Boy");
        console.log("I Love Fitness");
        
        
    </script>

</body>
</html>