<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Headers extends CI_Model {

	private $xAuthtoken    // X-Auth-Token     required
	private $contentType   // Content-type     required
	private $appVersion    // app_version      not required
	private $platform      // platform         not required
	private $userAgent     // User-agent       required
	private $osVersion     // os_version       not required
	
	function __construct()
	{
		parent::__construct();
		$this->xAuthtoken = "";
		$this->contentType = "application/json";
		$this->appVersion = "";
		$this->platform = "";
		$this->userAgent = "User-Agent: Tinder/3.0.4 (iPhone; iOS 7.1; Scale/2.00)";
		$this->osVersion = "";
	}
	
	public function get_json($tinderToken)
	{
		$this->xAuthtoken = $tinderToken;
		$json = 
		{ 
			"X-Auth-Token": $xAuthtoken, "Content-type" : $contentType, "app_version": 
			$appVersion, "platform" : $platform, "User-agent": $userAgent, "os_version" : $osVersion 
		};
		return json_encode($json);
	}
}
