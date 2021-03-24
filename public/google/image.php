<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" /> <!-- reset css -->
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

<style>
</style>

<script>
window.onload = function(){
     var canvas = document.getElementById("myCanvas");
     var context = canvas.getContext("2d");
     var imageObj = new Image();
     imageObj.onload = function(){
         context.drawImage(imageObj, 10, 10);
         context.font = "40pt Calibri";
         context.fillText("My TEXT!", 20, 20);
     };
     imageObj.src = "fofo.jpg"; 
};
</script>

</head>

<body>
    <canvas id="canvas" width=400 height=300></canvas>
</body>
</html>