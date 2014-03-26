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

class Message
{
	public var $sender,$reciever;
	public var $msg,$datetime;

	public function __construct($sender,$receiver,$msg)
	{
		//Input Validation
		$this->sender=$sender;
		$this->reciever=$reciever;
		$this->msg=$msg;
		$this->datetime=DateTime("now") //check
	}
}

class Conversation
{
	var $party1,$party2;
	var $msglist;

	public function __construct($party1,$party2)
	{
		if(array_search($party1,$GLOBAL_userlist) || array_search($party2,$GOLBAL_userlist)
?>
</body></html>
