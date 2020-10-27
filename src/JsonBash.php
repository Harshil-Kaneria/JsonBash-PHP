<?php

namespace Json\Bash;

class JsonBash
{
	public function jsonmanager($status,$message,$data,$params=null)
    {
		$result=array();
    	
    	// Check Object Remove Request Or Not
    	if(!is_null($status))
    	{
    		$result['status'] = $status;
    	}

		// Check Object Remove Request Or Not
    	if(!is_null($message))
    	{
    		$result['message'] = $message;
    	}
    	
    	// Check Object Remove Request Or Not
    	if(!is_null($data) && is_array($data)){
			$result['data'] = $data;
    	}

    	// Check Object Remove Request Or Not
    	if(!is_null($params))
    	{
    		// Check Given Array is Associative Or Not
    		if(array_keys($params) !== range(0, count($params) - 1))
    		{
    			// Generate Objects Based On Key And Value 
    			foreach($params as $key => $value)
    			{
					$result[$key] = $value;
				}
    		}
    	}

        return json_encode($result);
        // Retuen All Data in JsonFormate
    }
}
