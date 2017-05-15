<!DOCTYPE html>

<html>
<head>
<title>
English Cricket Team Social Networks Home Page

</title>
<style media = "screen" type="text/css">

h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}

.navbar{
width:1000px;
background:#439EC9;
margin-left:auto;
margin-right:auto;	
	
}

.searchbox{
float:right;
padding-top:8px;	

}

#menu {
width:700px;
float:left;	
	
}


#menu ul {
margin:0;
padding-top:5px;
line-height:2em;	
}

#menu ul  li{
list-style:none;	
display:inline;
margin:5px;
width:60px;
}

#menu ul  li a:link{
color:white;	
margin:5px;	
padding:3px;	
text-decoration:none;
}


#menu ul  li a:hover{
color:#32CD32;	
text-decoration:underline;
}
.container{
padding:0;
margin:0;	
background:#E8E6FB;		
	
}

#header_wrapper{
width:100%;
height:20px;	
border-bottom:5px solid brown;	
background:#439EC9;
margin-top:-10px;
}

#sidebar{
width:300px;
background:#439EC9;	
float:left;	
margin-right:129px;
height:590px;

}

.container_sidebar{
width:200px;
height:230px;
background:white;
border-radius:5px;
margin-left:50px;
margin-top:300px;
}
</style>
<body>

<div class="navbar">
<div id="menu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="#">About Social Network</a></li>
<li><a href="#">News</a></li>
<li><a href="#">Videos</a></li>
<li><a href="contact.php">Contact Us</a></li>
<li><a href="privacypolicy.php">Privacy Policy</a></li>
</ul>
</div>
<div class="searchbox">  
<form action="search.php" method="get">
<input type="text" size="25"  name= "search" placeholder="Search this site" >
<input type="submit" name="submit" value="Search">
</form>
</div>

</div>
<div class="container">


<div id="header_wrapper" style="padding:10px;">
</div>
<h1 style="float:right">Welcome To English Cricket Team Social Networks Home Page</h1>
</div>
<div id="sidebar">
<div class="container_sidebar">
<?php
  
include("includes/connection.php");
  $query  = "SELECT user_name,user_country FROM users";                           
  $result = mysqli_query($con,$query);
  $row    = mysqli_fetch_assoc($result);

// echo out the contents of each row into a table

      ?>      
Name   :   <?php echo '<td>'.$row['user_name'] . '</td>' ?><br><br>
Country:   <?php echo '<td>'. $row['user_country'] . '</td>' ?>
  
</div> 
</div>
</body>
</html> 
