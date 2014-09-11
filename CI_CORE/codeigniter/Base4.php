<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class CI_Base extends CI_Loader {
 
    /**
     * @var CI_User_agent
     */
    var $agent;
 
    /**
     * @var CI_Benchmark
     */
    var $benchmark;
   
    /**
     * @var CI_Calendar
     */
    var $calendar;
   
    /**
     * @var CI_Cart
     */
    var $cart;
   
    /**
     * @var CI_Config
     */
   
    var $config;
     
    /**
     * @var CI_DB_active_record
     */
    var $db;
     
    /**
     * @var CI_Email
     */
    var $email;
     
    /**
     * @var CI_Encrypt
     */
    var $encrypt;
     
    /**
     * @var CI_Form_validation
     */
    var $form_validation;
     
    /**
     * @var CI_FTP
     */
    var $ftp;
     
    /**
     * @var CI_Image_lib
     */
    var $image_lib;
     
    /**
     * @var CI_Input
     */
    var $input;
     
    /**
     * @var CI_Language
     */
    var $lang;
     
    /**
     * @var CI_Output
     */
    var $output;
     
    /**
     * @var CI_Pagination
     */
    var $pagination;
     
    /**
     * @var CI_Parser
     */
    var $parser;
     
    /**
     * @var CI_Session
     */
    var $session;
     
    /**
     * @var CI_Table
     */
    var $table;   
     
    /**
     * @var CI_Trackback
     */
    var $trackback;
     
    /**
     * @var CI_Typography
     */
    var $typography;
     
    /**
     * @var CI_Unit_test
     */
    var $unit;
     
    /**
     * @var CI_Upload
     */
    var $upload;
     
    /**
     * @var CI_URI
     */
    var $uri;
 
    /**
     * @var CI_Xmlrpc
     */
    var $xmlrpc;
     
    /**
     * @var CI_Xmlrpcs
     */
    var $xmlrpcs;
     
    /**
     * @var CI_Loader
     */
    var $load;
     
    /**
     * @var CI_Router
     */
    var $router;
     
    /**
     * @var CI_Zip
     */  
    var $zip;
 
    //------------------------------------------------------
    /**
     * CUSTOM LIBRARY
     *
     * Add your library here
     */ 
     
    /**
     * @var Resume_lib
     */
    var $resume_lib;
     
    /**
     * @var Autoform
     */
    var $autoform;   
 
    //------------------------------------------------------
    /**
     * CUSTOM MODEL
     *
     * Add your model here
     */
     
    /**
     * @var resume_model
     */
    var $resume;
 
   
 function CI_Base()
 {
  // This allows syntax like $this->load->foo() to work
  parent::CI_Loader();
  $this->load =& $this;
   
  // This allows resources used within controller constructors to work
  global $OBJ;
  $OBJ = $this->load; // Do NOT use a reference.
   
 }
  
  
}
 
function &get_instance()
{
 global $CI, $OBJ;
  
 if (is_object($CI))
 {
  return $CI;
 }
  
 return $OBJ->load;
}
 
/* End of file Base4.php */
/* Location: ./system/codeigniter/Base4.php */