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

	public function __construct($sender,$receiver,$msg)
	{
		//Input Validation
		$this->sender=$sender;
		$this->reciever=$reciever;
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
		if( !array_search($party1,$GLOBAL_userlist) || !array_search($party2,$GOLBAL_userlist) )
			return -2;
		
		// Code to open Database and read a party1/party2 data here
		// and check whether two are friends

		$this->party1=$party1;
		$this->party2=$party2;
		$this->msglist=array();
	}

	public add_msg($sender,$reciever,$msg)
	{
		if($sender==$party1 && $reciever!=$party2 || $sender==$party2 && $reciever!=$party1)
			return -1;
		$message=new Message($sender,$reciever,$msg);
		array_push($this->msglist,$message);
	}

}
?>
</body></html>
