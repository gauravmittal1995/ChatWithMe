<html><body>

<?php

// Classes to hold messages and conversations
// Instances of messages are created in Conversation b/w two parties

/*
   Messages are allowed only to people on your friend list

   Error Codes:
   		< 0 : Fatal Error
		  0 : Job Done with some errors
		  1 : Job Done without errors
*/


include 'user.php';

class Message
{
	public $sender,$reciever;
	public $msg,$datetime;

	public function __construct($send,$rec,$msg)
	{
		//Input Validation
		$this->sender=$send;
		$this->reciever=$rec;
		$this->msg=$msg;
# Add code for Date Input
	}
}

class Conversation
{
	var $party1,$party2;
	var $msglist;

	public function __construct($party1,$party2)
	{
		global $GLOBAL_userlist,$GLOBAL_activeusers;
		//if( !array_search($party1,$GLOBAL_userlist) || !array_search($party2,$GOLBAL_userlist) )
		//	return -2;
		
		// Code to open Database and read a party1/party2 data here
		// and check whether two are friends

		$this->party1=$party1;
		$this->party2=$party2;
		$this->msglist=array();
	}

	public function add_msg($sender,$reciever,$msg)
	{
		if($sender==$this->party1 && $reciever!=$this->party2 || $sender==$this->party2 && $reciever!=$this->party1)
			return -1;
		$message=new Message($sender,$reciever,$msg);
		array_push($this->msglist,$message);
	}

}

$test=new Conversation("Nair","Paul");
$var=$test->add_msg("Nair","Paul","This is BullShit.");
echo $var;
?>
</body></html>
