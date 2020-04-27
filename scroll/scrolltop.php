<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/links.php'?>
   <?php include 'css/style.php'?>
</head>
<body>
	<div class="container scrollTop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>


<script type="text/javascript">
  mybutton = document.getElementById("myBtn");
  window.onscroll = function() {scrollFuntion()};
  function scrollFuntion() {
  if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
      mybutton.style.display = "block";
    }else{
      mybutton.style.display = "none";
    }
}
  function topFunction(){
    document.body.scrollTop=0;
    document.documentElement.scrollTop=0;
  }






</script>


</body>
</html>