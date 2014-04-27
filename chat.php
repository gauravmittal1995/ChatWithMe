<!DOCTYPE html>


<?php
include "headerfooter.php";
?>
<script src="js/jquery.js"></script>	
<style>
.circle{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	border-color: rgba(0, 0, 0, 0.7);
	border-width: 1px;
	position: relative;
	background: black;
	color: white;
	text-align:center;
	padding-top:50px;
	padding-left:25px;
	padding-right:25px;
	font-size:1em;
	-webkit-transition: all ease-in-out 0.5s;
	-moz-transition: all ease-in-out 0.5s;
	-o-transition: all ease-in-out 0.5s;
	transition: all ease-in-out 0.5s;
	}
.square{
	background: black;
	color: white;
	position: relative;
	width: 300px;
	height: 300px;
	border-radius: 0px;
	border-color: rgba (0,0,0,0.7);
	border-width: 1px;
	text-align: center;
	padding-top: 20px;
	padding-right: 10px;
	padding-left: 10px;
	font-size: 1em;
	-webkit-transition: all ease-in-out 0.5s;
	-moz-transition: all ease-in-out 0.5s;
	-o-transition: all ease-in-out 0.5s;
	transition: all ease-in-out 0.5s;
}

</style>

<div class="circle" id="1" style="left: 200px; top:200px;">
	<div class="Reciever">Aaditya</div>

	<div class="ChatBox">
		<iframe src="chatframe.php?reciever=aaditya" seamless height="280px" width="280px" frameborder="0"></iframe>
	</div>
</div>

<div class="circle" id="2" style="left: 600px; top:100px;">
	<div class="Reciever">Krishna</div>

	<div class="ChatBox">
		<iframe src="chatframe.php?reciever=krishna" seamless height="280px" width="280px" frameborder="0"></iframe>
	</div>
</div>

<script type="text/javascript">
	function createCircle(s) {
		var reciever=document.createElement("div");
		reciever.class="Reciever";
		reciever.appendChild(document.createTextNode(s));
		var frame=document.createElement("iframe");
		frame.src="chatframe.php?reciever="+s;
		frame.seamless="1";
		frame.height="280px";
		frame.width="280px";
		frame.frameborder="0";
		chat=document.createElement("div");
		chat.appendChild(frame);
		chat.class="ChatBox";
		id++;
		circle=document.createElement("div");
		circle.appendChild(reciever);
		circle.appendChild(chat);
		circle.class="circle";
		circle.id=id.toString();
		circle.style.left="200px";
		circle.style.top="200px";
		document.getElementsByTagName("body")[0].appendChild(circle);
	}
</script>

<script type="text/javascript">

	function update(s)
	{
		$(this).toggleClass("circle");
		$(this).toggleClass("square");
		$(".Reciever",this).toggle();
		$(".ChatBox",this).toggle();
	}
	console.log("yo!");
	document.getElementById("1").addEventListener("dblclick", update );
	document.getElementById("2").addEventListener("dblclick", update );
	$(".ChatBox").toggle();

</script>
