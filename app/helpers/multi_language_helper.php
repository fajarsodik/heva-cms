<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('get_phrase')) {
  function get_phrase($phrase = '') {
    $CI =& get_instance();
    $CI->load->database();
    $current_language = $CI->db->get_where();
  }
}
