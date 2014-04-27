<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<style>
		{
			padding: 0px;
			margin: 0px;
		}
		body{
			width: 270px;
			height: 270px;
			background: black;
			color: white;
			border: 1px solid red;
		}
		td{
			border: 1px solid red;
			padding: 3px;
		}
	</style>
	<script src="js/jquery.js"></script>
	<script>
		function process() {
			right=document.getElementById("right").innerHTML;
			extra=document.getElementById("input").value;
			right+="<hr />"+extra;
			document.getElementById("right").innerHTML=right;
			document.getElementById("butt").scrollIntoView();
		}
		var id=-1;
		
		function update_ajax()
		{
			var Sender,Reciever;
			Sender= "<?php echo $_SESSION['handle'];?>";
			Reciever="<?php echo $_GET['reciever'];?>"; 

			var data=$.ajax({
					type: 'post',
					url : 'msg_fetch.php',
					data: {sender:Reciever, reciever:Sender},
					success: function(data,status){
						if(id != data.id) {
							id=data.id;
							left=document.getElementById("left").innerHTML;
							extra=data.Message;
							left+="<hr />"+extra;
							document.getElementById("left").innerHTML=left;
							document.getElementById("butt").scrollIntoView();
						}
					},
					dataType: 'json'
					});
		}
		
		function populate()
		{
			// Sender is assumed to be the present USer
			var Sender,Reciever;
			Sender="<?php echo $_SESSION['handle'];?>";
			Reciever="<?php echo $_GET['reciever'];?>";
			var array;
			var data=$.ajax({
					type: 'get',
					url : 'msg_fetch_all.php',
					data: {sender:Sender, reciever:Reciever},
					success: function(data,status){
						console.log("success!");
						for (var i=0;i<data.length;i++) {
							if (data[i].Sender==Sender) {
								//right
								console.log("right");
								right=document.getElementById("right").innerHTML;
								extra=document.getElementById("input").value;
								right+="<hr />"+extra;
								document.getElementById("right").innerHTML=right;
								document.getElementById("butt").scrollIntoView();
							}
							else {
								//left
								console.log("left");
								left=document.getElementById("left").innerHTML;
								extra=data.Message;
								left+="<hr />"+extra;
								document.getElementById("left").innerHTML=left;
								document.getElementById("butt").scrollIntoView();
							}
						}
					},
					dataType: 'json'
					});
		}
		


	</script>
</head>
<body>
	<div id="chat">
		<table>
			<tr>
				<td id="left">
					krishna tulsyan
				</td>
				<td id="right">
					krishna tulsyan
				</td>
			</tr>
		</table>
		<input id="input" width="100px" placeholder="send message" />
		<button id="butt">Submit</button>
	</div>
</body>
	<script>
	function Update_to_DB(e) {
		var sender,reciever; // To Be Updated
		reciever="<?php echo $_GET['reciever'];?>";
		sender="<?php echo $_SESSION['handle'];?>";
	
		sent_msg=document.getElementById("input").value;
		console.log(sent_msg)
		$.ajax({
			type: 'post',
			url : 'msg_insert.php',
			data: {Message : sent_msg, Sender : sender, Reciever : reciever},
			success: function(){console.log("No Error");}
				});
		e.preventDefault();
	}
	</script>
<script> 
	document.getElementById("butt").addEventListener("click",process);
	document.getElementById("butt").addEventListener("click",Update_to_DB);
	populate();
</script>
</html>
