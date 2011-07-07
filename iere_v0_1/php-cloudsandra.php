<?php

class CloudsandraApi {

	/* 
	 * Your credentials
	 */
	 
	var $token = 'YOUR TOKEN HERE';
	var $accountId = 'YOUR ACCOUNTID HERE';  

	function urlBuilder() {
      	for ($i = 0; $i < func_num_args(); $i++) {
        	if ($i == 0) {
        		$url = "http://api.cloudsandra.net/v0.3/".func_get_arg($i);
        	} else {
        		$url = $url."/".func_get_arg($i);
        	}
      	}

		return $url;
	}
	
	function getUrlBuilder($paramsArray, $realtime) {
		$count = 0;
				
		foreach ($paramsArray as $key => $value) {
			if ($value != NULL) {
				if ($count == 0) {
				 	$url = "?".$key."=".$value;
				} else {
					$url = $url."&".$key."=".$value;
				}
				$count++;
			}
		}
		
		if ($realtime)
			$url = $url."?realtime=true";
			
		return $url;	
	}
	
	/**
	*
	* Creates a Column Family
	* 
	* http://api.cloudsandra.net/v0.3/COLUMNFAMILY/{cfName}/{cType}
	*/
	function createColumnFamily($cfName, $cfType) {
		return $this->request("POST", $this->urlBuilder("COLUMNFAMILY", $cfName, $cfType), NULL);	
	}
	
	/**
	*
	* Creates a Column in a Column Family
	* 
	* http://api.cloudsandra.net/v0.3/COLUMN/{cfName}/{cName}/{cType}
	*/
	function createColumn($cfName, $cName, $cType) {
		return $this->request("POST", $this->urlBuilder("COLUMN", $cfName, $cName, $cType), NULL);
	}

	/**
	*
	* Creates an Indexed Column in a Column Family
	* 
	* http://api.cloudsandra.net/v0.3/COLUMN/{cfName}/{cName}/{cType}
	*/
	function createIndexedColumn($cfName, $cName, $cType) {
		$postParams = array (
			'isIndex' => 'true'
		);
		return $this->request("POST", $this->urlBuilder("COLUMN", $cfName, $cName, $cType), $postParams);
	}
	
	/**
	*
	* Removes an Indexed Column from a Column Family
	* 
	* http://api.cloudsandra.net/v0.3/COLUMN/{cfName}/{cName}/{cType}
	*/
	function removeIndexedColumn($cfName, $cName, $cType) {
		$postParams = array (
			'isIndex' => 'false'
		);
		return $this->request("POST", $this->urlBuilder("COLUMN", $cfName, $cName, $cType), $postParams);
	}
	
	/**
	* 
	* Returns a Column Family Description
	*
	* http://api.cloudsandra.net/v0.3/COLUMNFAMILY/{cfname}
	*/
	function getColumnFamilyDescription($cfName) {
		return $this->request("GET", $this->urlBuilder("COLUMNFAMILY", $cfName), NULL);
	}
	
	/**
	* 
	* Returns all the Column Family descriptions
	*
	* http://api.cloudsandra.net/v0.3/COLUMNFAMILY
	*/
	function getColumnFamilies() {
		return $this->request("GET", $this->urlBuilder("COLUMNFAMILY"), NULL);
	}
	
	/**
	*
	* Posts data to a Column Family with a given Row Key
	* 
	* http://api.cloudsandra.net/v0.3/DATA/{cfName}/{rowKey}?ttl={seconds}&realtime={boolean}
	*/
	function postData($cfName, $rowKey, $paramsArray, $ttl) {
		$postParams = array (
			"ttl" => $ttl
		);
		return $this->request("POST", $this->urlBuilder("DATA", $cfName, $rowKey, $this->getUrlBuilder($postParams, true)), $paramsArray);
	}
	
	/**
	*
	* Posts bulk data in JSON form to a Column Family
	* 
	* http://api.cloudsandra.net/v0.3/DATA/{cfName}
	*/
	function bulkPostData($cfName, $jsonStringObject) {
		return $this->request("POST", $this->urlBuilder("DATA", $cfName), $jsonStringObject);
	}
	
	/**
	* 
	* Returns data from a Column Family with a given Row Key
	*
	* http://api.cloudsandra.net/v0.3/DATA/{cfname}/{rowKey}
	*/
	function getRow($cfName, $rowKey) {
		return $this->request("GET", $this->urlBuilder("DATA", $cfName, $rowKey), NULL);
	}
	
	/**
	* 
	* Returns paginateable data from a Column Family with a given Row Key based on a limit
	*
	* http://api.cloudsandra.net/v0.3/DATA/{cfname}/{rowKey}?fromKey={fromKey}&limit={limit}
	*/
	function paginateRow($cfName, $rowKey, $fromKey, $limit) {
		$postParams = array (
			"fromKey" => $fromKey, 
			"limit" => $limit
		);
		return $this->request("GET", $this->urlBuilder("DATA", $cfName, $rowKey, $this->getUrlBuilder($postParams, false)), NULL);
	}
	
	/**
	*
	* Deletes data from a Column Family with a given Row Key and Column Name
	* 
	* http://api.cloudsandra.net/v0.3/DATA/{cfName}/{rowKey}/{cName}
	*/
	function deleteDataFromRow($cfName, $rowKey, $cName) {
		return $this->request("DELETE", $this->urlBuilder("DATA", $cfName, $rowKey, $cName), NULL);
	}
	
	/**
	*
	* Deletes a Row from a Column Family
	* 
	* http://api.cloudsandra.net/v0.3/DATA/{cfName}/{rowKey}
	*/
	function deleteRow($cfName, $rowKey) {
		return $this->request("DELETE", $this->urlBuilder("DATA", $cfName, $rowKey), NULL);
	}
		
	/**
	*
	* Deletes a Column Family
	* 
	* http://api.cloudsandra.net/v0.3/COLUMNFAMILY/{cfName}
	*/
	function deleteColumnFamily($cfName) {
		return $this->request("DELETE", $this->urlBuilder("COLUMNFAMILY", $cfName), NULL);
	}
	
	/**
	* 
	* CQL
	*
	* http://api.cloudsandra.net/v0.3/CQL/{cfname}?query={query}
	*/
	function queryCQL($cfName, $cql) {
		$postParams = array (
			"query" => urlencode($cql)
		);
		return $this->request("GET", $this->urlBuilder("CQL", $cfName, $this->getUrlBuilder($postParams, false)), NULL);
	}
	
	/**
	* 
	* Increment a counter
	*
	* http://api.cloudsandra.net/v0.3/COUNTER/{rowKey}/{cName}
	*/
	function incrementCount($rowKey, $cName, $value) {
		$paramsArray = array (
			'increment' => $value
		);
		return $this->request("POST", $this->urlBuilder("COUNTER", $rowKey, $cName), $paramsArray);
	}
	
	/**
	* 
	* Decrement a counter
	*
	* http://api.cloudsandra.net/v0.3/COUNTER/{rowKey}/{cName}
	*/
	function decrementCount($rowKey, $cName, $value) {
		$paramsArray = array (
			'decrement' => $value
		);
		return $this->request("POST", $this->urlBuilder("COUNTER", $rowKey, $cName), $paramsArray);
	}
	
	/**
	* 
	* Get a counter
	*
	* http://api.cloudsandra.net/v0.3/COUNTER/{rowKey}/{cName}
	*/
	function getCount($rowKey, $cName) {
		return $this->request("GET", $this->urlBuilder("COUNTER", $rowKey, $cName), NULL);
	}
		
	function request($method, $url, $paramsArray) {
		
		$curl_handle = curl_init();
		curl_setopt($curl_handle, CURLOPT_URL, $url);
		curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_USERPWD, $this->token.":".$this->accountId);
		curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);

		if ($method == "GET") 
			curl_setopt($curl_handle, CURLOPT_DNS_USE_GLOBAL_CACHE, FALSE);

		if ($method == "POST") {
			curl_setopt($curl_handle, CURLOPT_POST, 1);
			curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $paramsArray);
		}

		if ($method == "DELETE") {
			curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, "DELETE");
			curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $paramsArray);
		}
	
		$buffer = curl_exec($curl_handle);
		$error = curl_error($curl_handle);
		curl_close($curl_handle);

		if (empty($buffer)) {
			return "Error: ".$error;
		} else {
			return $buffer;
		}
	}
}
			
?>
