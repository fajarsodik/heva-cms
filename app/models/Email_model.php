<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function do_email($to = NULL, $from = NULL, $pass = NULL, $subject = NULL, $msg = NULL, $attach = NULL)
	{
		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'mail.getittech.co.id',
			'smtp_port' => 587,
			'smtp_user' => $from,
			'smtp_pass' => $pass,
			'newline'   => '\r\n',
			'charset'   => 'utf-8',
	    );
	    $this->load->library('email' , $config);

	    $this->email->from($from, 'test');
	    $this->email->to($to);
	    $this->email->subject($subject);
	    $this->email->message($msg);
	    if ($attach != NULL) {
	      $this->email->attach($attach);
	    }

	    $send = $this->email->send();
	    return $send;

	    // TODO: table  setting untuk konfigurasi base data si website
	}

}
