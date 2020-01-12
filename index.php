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
    <body>
    <nav class="blue-grey">
    <a href="" class="brand-logo center">View Counter</a>
    </nav>

<div class="row">
<div class="col l6 offset-l3">
<ul class="collection">
<?php
$sql="select * from posts";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
    while($x=mysqli_fetch_assoc($res))
    {
?>
<li class="collection-item">
<p><a href="post.php?id=<?php echo $x['id'];?>"><?php echo $x['title'];?></a></p>
<span class="grey-text">by <?php echo $x['author'];?> on <?php echo $x['publish_date'];?></span>
<br>
<span class="grey-text text-darken-2"><?php echo $x['views'];?><i class="material-icons left">visibility</i></span>
</li>
<?php
    }
}
else
{
?>
<li>
<p>Sorry, NO post in database.</p>
</li>
<?php
}
?>
</ul>
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
