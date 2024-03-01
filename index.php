<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="js/JsBarcode.all.min.js">
    </script>
    <title> Era Lucknow Medical College
    </title>
  </head>
  <body>
    <div class="container">
        <form action="report.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="serialnum" >Starting Serial Number</label>
                        <input type="text" name="serialnum" id="serialnum" class="form-control" required>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="count">Count</label>
                        <input type="text" name="count" id="count" class="form-control" required>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="Submit" name="Submit" id="submit" value="Submit" class="btn btn-primary mt-4">
                    </div>
                    
                </div>

            </div>
        </form>
    </div>
  </body>
</html>
