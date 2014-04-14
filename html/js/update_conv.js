// Code to update the conversation both during "Send" click and regular updates
// Requires Jquery.

/* 
 * The sender and reciever is assumed to be provided somewhere in the code.
 */

function Update_to_DB(e)
{
	var sender,reciever; // To Be Updated

	sent_msg=document.getElementById("msgtext").innerHTML;
	$.ajax({
		type: 'post',
		url : '../msg_insert.db?Sender='+Sender+'&Reciever='+reciever,
		data: {Message : sent_msg },
		success: function(){console.log("No Error");}
			});
	
	e.preventDefault();
}


