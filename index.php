<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRARY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="pic">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="intro.php">Intro</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="test.php">Contact</a>
          </li>
          
        </ul>
      </nav>
      <div class="container">
          <div class="row">
              <div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
              <div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <table class="table table-borderless">
                    <tr>
                        <td style="color:rgb(255, 238, 0);">BOOKNAME</td>
                        <td><input type="text" id="bname" class="form-control"></td>
                    </tr>
                    <tr>
                        <td style="color:rgb(255, 238, 0);">AUTHORNAME</td>
                        <td><input type="text" id="aname" class="form-control"></td>
                    </tr>
                    <tr>
                        <td style="color:rgb(255, 238, 0);">DISTRIBUTOR</td>
                        <td><input type="text" id="dist" class="form-control"></td>
                    </tr>
                    <tr>
                        <td style="color:rgb(255, 238, 0);">PUBLISHER</td>
                        <td><input type="text" id="pub" class="form-control"></td>
                    </tr>
                    <tr>
                        <td style="color:rgb(255, 238, 0);">MRP</td>
                        <td><input type="text" id="mrp" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><button onclick="index()" class="btn btn-secondary">SUBMIT</button></td>
                    </tr>
            
            
                </table>



              </div>
              <div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>



          </div>




      </div>
      <script>
        function index()
        {
          var bookname=document.getElementById("bname").value
          var authorname=document.getElementById("aname").value
          var distributer=document.getElementById("dist").value
          var publisher=document.getElementById("pub").value
          var MRP=document.getElementById("mrp").value


          console.log(bookname)
          console.log(authorname)
          console.log(distributer)
          console.log(publisher)
          console.log(MRP)




        }


      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>