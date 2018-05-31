<?php
/**
* @package janitor.itemtypes
* This file contains itemtype functionality
*/

class TypeSarah extends Itemtype {

	/**
	* Init, set varnames, validation rules
	*/
	function __construct() {

		// construct ItemType before adding to model
		parent::__construct(get_class());


		// itemtype database
		$this->db = SITE_DB.".item_sarah";


		$this->addToModel("name", array(
			"type" => "string",
			"label" => "Item name",
			"required" => true,
			"hint_message" => "Type the item name",
			"error_message" => "The item name must be a string"
		));

		$this->addToModel("full_name", array(
			"type" => "string",
			"label" => "Full name",
			"required" => true,
			"hint_message" => "Type your full name",
			"error_message" => "Your name must be a string"
		));

		$this->addToModel("email", array(
			"type" => "email",
			"label" => "Email address",
			"required" => true,
			"hint_message" => "Type your email address",
			"error_message" => "You must type a valid email address"
		));

		// $this->addToModel("v_html", array(
		// 	"type" => "html",
		// 	"label" => "HTML",
		// 	"allowed_tags" => "p,h1,h2,h3,h4,h5,h6,code,ul,ol,download,png,jpg,vimeo,youtube", //",mp4",
		// 	"required" => true,
		// 	"hint_message" => "Type html",
		// 	"error_message" => "HTML must be HTML"
		// ));

	}

}

?>
