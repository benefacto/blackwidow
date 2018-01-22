<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Headers extends CI_Model {

	private $xAuthtoken    // X-Auth-Token
	private $contentType   // Content-type
	private $appVersion    // app_version
	private $platform      // platform
	private $userAgent     // User-agent
	private $osVersion     // os_version
	
	public Headers($tinderToken)
	{
		$this->xAuthtoken = $tinderToken;
		$this->contentType = "";
		$this->appVersion = "";
		$this->platform = "";
		$this->userAgent = "";
		$this->osVersion = "";
	}
	
	public function get_json()
	{
		return $json;
	}
}
