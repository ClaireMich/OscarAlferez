<?php

namespace Escuela\Http\Controllers\Api;

use Illuminate\Http\Request;
use Escuela\Http\Controllers\Controller;
use Escuela\Http\Requests;

use Form;

class ApiController extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	protected function response($type = 'Success', $message = null, $data = [], $httpStatusCode = null)
	{
		if (substr($message, 0, 9) == "messages.")
			$message = trans($message);

		$response = [
			'type'    => $type,
			'message' => $message,
			'data'    => $data,
		];

		if (!is_null($httpStatusCode))
		{
			return response($response, $httpStatusCode)->header('Content-Type', 'text/json');
		}

		return $response;
	}

	protected function success($message = null, $data = [], $httpStatusCode = null)
	{
		if (!is_null($message) && $message !== false && substr($message, 0, 9) != "messages." && str_replace(' ', '', $message) == $message){
			$message = "messages.success.".$message;
		}

		return $this->response('Success', $message, $data, $httpStatusCode);
	}

	protected function error($message = null, $data = [], $httpStatusCode = null)
	{
		if (!is_null($message) && $message !== false && substr($message, 0, 9) != "messages." && str_replace(' ', '', $message) == $message)
			$message = "messages.errors.".$message;

		if (is_null($message) && $message !== false)
			$message = "messages.errors.general";


		if (!isset($data['errors']))
			$data['errors'] = Form::getErrors();
		return $this->response('Error', $message, $data, $httpStatusCode);
	}

	protected function warning($message = null, $data = [], $httpStatusCode = null)
	{
		return $this->response('Warning', $message, $data, $httpStatusCode);
	}

	protected function info($message = null, $data = [], $httpStatusCode = null)
	{
		return $this->response('Info', $message, $data, $httpStatusCode);
	}

}