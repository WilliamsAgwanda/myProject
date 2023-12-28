
<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
       <link rel="stylesheet" href="bootstrap.min.css">
       <link rel="stylesheet" href="font/css/fontawesome.css">
        <link rel="stylesheet" href="custom.css">
 </head>
 <body>
     <div class="container" style="margin-top: 200px;">
         <div class="row">
             <div class="col-md-4 col-md-offset-4">
                 <div class="panel panel-default">
                     <h4> STUDENTS LOGIN PAGE</h4>
                     <div class="panel-body">
                          <form action="reg3.php" method="POST">
                              <div class="form-group">
                                 <input type="email" name="email" class="form-control"
                                 placeholder="Enter email"> 
                              </div>
                              <div class="form-group">
                                <input type="password" name="pass" class="form-control"
                                placeholder="Enter password"> 
                             </div>
                             <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-success btn-lg btn-block"
                               value ="LOGIN"> 
                             </div>
                          </form>
                      </div>  
                 </div>
                 <a href="lec.php"class="primary btn btn-primary">lecturers login portal</a> 
             </div> 
         </div>

     </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>

 </body>   
</html>