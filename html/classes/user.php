<html><body>
<?php
# User class to hold information about the User

/*
   Return values
   < 0 : Fatal Error
   0   : Job Done but without complete success
   1   : Done with complete success
*/

$GLOBAL_userlist=array();
$GLOBAL_activeusers=array();

class User
{
	public $user_name,$user_handle;
	var $user_dob,$email,$passwd;

	var $interest=array(),$friends=array();

	public function __construct($name,$handle,$dob,$email,$passwd) 
	{
		if ($name==NULL || $handle==NULL || $passwd==NULL )
			return -1;

		$maillest='/^[a-z0-9]*[@][a-z]*[.][a-z]*$/';
		$flag=preg_match($mailtest,$email);
		if(flag!=1)
			return -1;

		$class=get_class($dob);
		if ($class!="DateTime")
			return -1;

		$this->user_name= $name;
		$this->user_handle= $handle;
		$this->user_dob= $dob;
		$this->email= $email;
		$this->passwd= $passwd;
		
		array_push($GLOBAL_userlist,$name);
		//array_push($GLOBAL_activeusers,$this);

		return 1;
	}

# edit add_friend to update the friend's frndlist 
	public function add_friend($name)
	{
		if($name==NULL || array_search($name,$GLOBAL_userlist)==FALSE)
			return -1;
		if(array_search($name,$this->friends)!=FALSE)
			return 0;



		array_push($this->friends,$name);
		return 1;
	}
	public function remove_friend($name)
	{
		$index=array_search($name,$this->friends);
		if($index==FALSE)
			return -1;

		unset( $this->friends[$index] );
		$this->friends=array_values($this->friends);
	}
#--------------------------------------------------------------------------------------------------------
	public function add_interest($intr)
	{
		if($intr==NULL)
			return -1;
	
		if(array_search($intr,$this->interest)!=FALSE)
			return 0;
		array_push($this->interest,$intr);
		return 1;
	}


	public function remove_interest($intr)
	{
		$index=array_search($intr,$this->interest);
		if($index==FALSE)
			return -1;

		unset( $this->interest[$index] );
		$this->interest=array_values($this->interest);
	}

}
echo "Aaditya"
?>
</body></html>
