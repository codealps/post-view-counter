<?php
include_once "dbc.php";
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body class="teal lighten-3">
    <nav class="blue-grey">
    <a href="index.php" class="brand-logo center">View Counter</a>
    </nav>

<div class="row">
<div class="col l6 offset-l3">
<div class="card-panel">
<?php
$id=$_GET['id'];
$id=mysqli_real_escape_string($conn,$id);
$id=htmlentities($id);
$sql="select * from posts where id=$id limit 1";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
$x=mysqli_fetch_assoc($res);
echo $x['content'];
$views=$x['views'];
$sql="update posts set views=$views+1 where id=$id";
$res=mysqli_query($conn,$sql);
}
else
{
    header("Location: index.php");
}
?>
</div>
</div>
</div>
    <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
