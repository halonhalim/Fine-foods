<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	// Sendmail Config
	$config['protocol'] = 'sendmail';
	$config['mailpath'] = '/usr/sbin/sendmail';
	$config['charset'] = 'iso-8859-1';
	$config['wordwrap'] = TRUE;
	$config['mailtype'] = 'html'; // Append This Line