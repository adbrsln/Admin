<footer id="footer" class="footer navbar-fixed-bottom" >
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>
<?php
       if(isset($_GET['s'])){
           $s = $_GET['s'];
         switch ($s){
            case 't':
            echo  '<script type="text/javascript" language="javascript"> 
            swal("Succesful", "Successs Adding to Cart", "success");</script>';
            break;
            case 'f':
            echo  '<script type="text/javascript" language="javascript"> swal("Failed", "Fail to add to cart", "error");
            </script>';
            break;
            case 'lt':
            echo  '<script type="text/javascript" language="javascript"> swal("Succesful", "Welcome user!", "success");
            </script>';
            break;
            case 'llt':
            echo  '<script type="text/javascript" language="javascript"> swal("Succesfully Registered", "Please Login to continue", "success");
            </script>';
            break;
             case 'lf':
            echo  '<script type="text/javascript" language="javascript"> swal("Failed", "username or password went wrong", "error");
            </script>';
            break;
            case 'sf':
            echo  '<script type="text/javascript" language="javascript"> swal("Failed", "You have no Access! Login First!", "error");
            </script>';
             break;
            case 'p':
            echo  '<script type="text/javascript" language="javascript"> swal("Succesful", "You have Successfully delete the record!", "success");
            </script>';
            break;
        default:  
            }
       }?>
  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>