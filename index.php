<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    
    <title>Sample Deployment File</title>

    <link href="./resources/css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="./resources/jquery.min.js"></script>
    <script>$(function(){$(".article-list div").click(function(){window.location=$(this).find("a").attr("href");return false;});});</script>

    <style type="text/css" media="print">body{margin:0px}</style>

    <style type="text/css">html{margin:0;padding:0;width:100%}body{font-family:Lato;margin:0px auto;width:940px;background:#f1ead6;padding-bottom:150px}h2{text-align:center;margin-bottom:5px;margin-top:43px;font-style:italic}#header{color:#333;font-style:italic;font-weight:300;font-size:28px;background:#f1ead6;padding:20px 0px 10px 0px;margin:0px auto;text-align:center}#header img{position:relative;top:18px;border:0}#header a,#header a:hover{text-decoration:none}.article-list>a{display:block;text-decoration:none;color:#333;width:156px;height:100px;text-align:center;background:#e5e5e5;border:1px solid #ccc;font-size:14px;font-family:PT\ serif,serif;float:left;padding:5px 10px;margin:10px 10px 0px 0px}.article-list>a:hover{background:#888;color:#fafafa;border: 1px solid #e5e5ee5}.article-list>a:hover h2{color:#fafafa}#legend{width:100%;color:#333;font-size:16px;margin-top:10px;margin-bottom:0px}#legend b{color:#6d1525;font-style:italic}.article-list{border-top:1px solid #ccc;margin:0px auto;margin-bottom:60px;width:942px;overflow:auto;padding-left:10px}.article-list h2,.article-list h2 a{font-size:18px;font-style:normal;font-family:Lato,sans-serif;color:#333;text-decoration:none;margin:5px 0px 10px 0px}#about{border-top:1px solid #ccc;margin-top:10px;padding-top:10px;font-style:italic;font-weight:300;text-align:center}#about .intuition{display:inline-block;background:#e5e5e5;border:1px solid #ccc;font-style:normal;font-weight:normal;padding:4px}.intuition a{color:#333;text-decoration:none}.intuition a:hover{text-decoration:underline}</style>
   

<body>

    <div id="header">
        <div id="logo">
            <a href="">
                <img src="./resources/urbancode.gif" >
            </a>
        </div>
		<br />
        <div id="legend">
            <b>Congrats!! You are seeing this page because the deployment has been successful.  </b>
        </div>

    </div>

    <h2>Sample Database Data</h2>
	<div style="text-align:center">
		Below data is read as part of testing from MySQL database.
	</div>
	<br />
    <div class="article-list ui-sortable" style="padding-left:100px;">
<?php
$con=mysqli_connect("localhost","root","","test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM t_employee");
while($row = mysqli_fetch_array($result)) {
  echo "<a href='#'>";
  echo "<h2>ID: " . $row['id'] . " </h2>" ;
  echo $row['name'] . "<br />";
  echo $row['location'];
  echo "</a>";
}



mysqli_close($con);
?> 



</body></html>