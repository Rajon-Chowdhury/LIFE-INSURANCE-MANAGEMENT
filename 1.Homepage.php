<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>







*{
  margin: 0;
  padding: 0;
}




* {
  box-sizing: border-box;
}

body {
  margin: 0;
}








.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}


.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}




.load{
  animation: slide 1s;
}


.slider{
  background-repeat:no-repeat;
  background-size:cover;
  background-position:center;
  width:100%;
  height:100vh;
  animation: slide 30s infinite;

}

.content{
  color: #fff;
  width:100%;
  height:100vh;
  background-color: rgba(0, 0, 0, 0.1);
}





.principal{
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  position: absolute;
  letter-spacing: 5px;
  text-align: center;
}


.principal h1{
  font-size: 70px;
  margin-bottom: 20px;
}

.principal p{
  font-size: 20px;
}







@keyframes slide {
  0%{
    background-image: url('3.jpg');
  }

  20%{
      background-image: url('3.jpg');
  }


  20.01%{
    background-image: url('2.jpg');
  }

  40%{
      background-image: url('2.jpg');
  }

  40.01%{
    background-image: url(3.jpg');
  }

  60%{
      background-image: url('3.jpg');
  }


  60.01%{
    background-image: url('2.jpg');
  }

  80%{
      background-image: url('2.jpg');
  }

  80.01%{
      background-image: url('3.jpg');
  }

  100%{
      background-image: url('3.jpg');
  }
}





</style>
</head>
<body>



  <div class="header">
    <h1><font color="black">Life Insurance Management System</font></h1>

    </div>




    <div class="topnav">
      <a href="2.Home.php">Home</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
      <a href="">Viewer's Rivew</a>
      <a href="Help.php">Help</a>
    </div>


  <div class="slider">
    <div class="load">
    </div>

    <div class="content">


    </div>
  </div>
  </div>
</body>
</html>
