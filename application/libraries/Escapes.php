<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Escapes {

	public function throwFeed($result, $code)
	{
		$CI =& get_instance();

		$CI->output->set_status_header(200,$this->codeMessage($code))
			->set_content_type('application/json')
			->set_output(json_encode($result));
	}

	public function trowEscapes($status, $message, $code)
	{
		$CI =& get_instance();

		$response = array(
			'status' => $status,
			'date' => date('r'),
			'messages' => $message
		);

		$CI->output->set_status_header($code, $this->codeMessage($code))
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	public function codeMessage($code)
	{
		if ($code == 100) {
			return 'Continue';
		} elseif ($code == 101) {
			 return 'Switching Protocol';
		} elseif ($code == 102) {
			 return 'Processing (WebDAV)';
		} elseif ($code == 200) {
			 return 'OK';
		} elseif ($code == 201) {
			return'Created';
		} elseif ($code == 202) {
			return 'Accepted';
		} elseif ($code == 203) {
			return 'Non-Authoritative Information';
		} elseif ($code == 204) {
			return 'No Content';
		} elseif ($code == 205) {
			return 'Reset Content';
		} elseif ($code == 206) {
			return 'Partial Content';
		} elseif ($code == 300) {
			return 'Multiple Choice';
		} elseif ($code == 301) {
			return 'Moved Permanently';
		} elseif ($code == 302) {
			return 'Found';
		} elseif ($code == 303) {
			return 'See Other';
		} elseif ($code == 304) {
			return 'Not Modified';
		} elseif ($code == 305) {
			return 'Not Modified';
		} elseif ($code == 306) {
			return 'Unused';
		} elseif ($code == 307) {
			return 'Temporary Redirect';
		} elseif ($code == 308) {
			return 'Permanent Redirect';
		} elseif ($code == 400) {
			return 'Bad Request';
		} elseif ($code == 401) {
			return 'Unauthorized';
		} elseif ($code == 402) {
			return 'Payment Required';
		} elseif ($code == 403) {
			return 'Forbidden';
		} elseif ($code == 404) {
			return 'Not Found';
		} elseif ($code == 405) {
			return 'Method Not Allowed';
		} elseif ($code == 406) {
			return 'Not Acceptable';
		} elseif ($code == 407) {
			return 'Proxy Authentication Required';
		} elseif ($code == 408) {
			return 'Request Timeout';
		} elseif ($code == 409) {
			return 'Conflict';
		} elseif ($code == 410) {
			return 'Gone';
		} elseif ($code == 411) {
			return 'Length Required';
		} elseif ($code == 412) {
			return 'Precondition Failed';
		} elseif ($code == 413) {
			return 'Payload Too Large';
		} elseif ($code == 414) {
			return 'URI Too Long';
		} elseif ($code == 415) {
			return 'Unsupported Media Type';
		} elseif ($code == 416) {
			return 'Requested Range Not Satisfiable';
		} elseif ($code == 417) {
			return 'Expectation Failed';
		} elseif ($code == 421) {
			return 'Misdirected Request';
		} elseif ($code == 426) {
			return 'Upgrade Required';
		} elseif ($code == 428) {
			return 'Precondition Required';
		} elseif ($code == 429) {
			return 'Too Many Requests';
		} elseif ($code == 431) {
			return 'Request Header Fields Too Large';
		} elseif ($code == 451) {
			return 'Unavailable For Legal Reasons';
		} elseif ($code == 500) {
			return 'Internal Server Error';
		} elseif ($code == 501) {
			return 'Not Implemented';
		} elseif ($code == 502) {
			return 'Bad Gateway';
		} elseif ($code == 503) {
			return 'Service Unavailable';
		} elseif ($code == 504) {
			return 'Gateway Timeout';
		} elseif ($code == 505) {
			return 'HTTP Version Not Supported';
		} elseif ($code == 506) {
			return 'Variant Also Negotiates';
		} elseif ($code == 507) {
			return 'Variant Also Negotiates';
		} elseif ($code == 511) {
			return 'Network Authentication Required';
		} else {
			return 'Not Implement';
		}
	}
}
