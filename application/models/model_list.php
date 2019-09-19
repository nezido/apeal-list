<?php

class Model_List extends Model
{
	
	public function get_data()
	{
	    $filename='list.json';
        return json_decode(file_get_contents($filename),TRUE);
	}

}
