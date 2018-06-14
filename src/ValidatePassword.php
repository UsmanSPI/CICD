<?php

class ValidatePassword
{
	public function validateLength($password)
	{
		if(strlen($password)<4){
			return true;
		}else{
			return false;
		}
	}
}
