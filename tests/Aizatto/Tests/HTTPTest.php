<?php

namespace Aizatto\Tests;

use Aizatto\HTTP;

class HTTPTest extends \Aizatto\Tests\AizattoTestCase {

  public function informationalCodes() {
    return array(
      array(HTTP::CCONTINUE),
      array(HTTP::SWITCHING_PROTOCOLS),
      array(HTTP::PROCESSING),
    );
  }

  /**
   * @dataProvider informationalCodes
   */
	public function testInformational($status) {
		$this->assertTrue(HTTP::isInformational($status));
	}

  public function successCodes() {
    return array(
      array(HTTP::OK),
      array(HTTP::CREATED),
      array(HTTP::ACCEPTED),
      array(HTTP::NON_AUTHORITATIVE_INFORMATION),
      array(HTTP::NO_CONTENT),
      array(HTTP::RESET_CONTENT),
      array(HTTP::PARTIAL_CONTENT),
      array(HTTP::MULTI_STATUS),
      array(HTTP::ALREADY_REPORTED),
      array(HTTP::IM_USED),
    );
  }

  /**
   * @dataProvider successCodes
   */
	public function testSuccess($status) {
		$this->assertTrue(HTTP::isSuccess($status));
	}

	public function redirectCodes() {
		return array(
			array(HTTP::MULTIPLE_CHOICES),
			array(HTTP::MOVED_PERMANENTLY),
			array(HTTP::FOUND),
			array(HTTP::SEE_OTHER),
			array(HTTP::NOT_MODIFIED),
			array(HTTP::USE_PROXY),
			array(HTTP::TEMPORARY_REDIRECT),
			array(HTTP::PERMANENT_REDIRECT),
		);
	}

	/**
	 * @dataProvider redirectCodes
	 */
	public function testRedirect($status) {
		$this->assertTrue(HTTP::isRedirect($status));
	}

	public function clientErrorCodes() {
		return array(
			array(HTTP::BAD_REQUEST),
			array(HTTP::UNAUTHORIZED),
			array(HTTP::PAYMENT_REQUIRED),
			array(HTTP::FORBIDDEN),
			array(HTTP::NOT_FOUND),
			array(HTTP::METHOD_NOT_ALLOWED),
			array(HTTP::NOT_ACCEPTABLE),
			array(HTTP::PROXY_AUTHENTICATION_REQUIRED),
			array(HTTP::REQUEST_TIMEOUT),
			array(HTTP::CONFLICT),
			array(HTTP::GONE),
			array(HTTP::LENGTH_REQUIRED),
			array(HTTP::PRECONDITION_FAILED),
			array(HTTP::REQUEST_ENTITY_TOO_LARGE),
			array(HTTP::REQUEST_URI_TOO_LONG),
			array(HTTP::UNSUPPORTED_MEDIA_TYPE),
			array(HTTP::REQUESTED_RANGE_NOT_SATISFIABLE),
			array(HTTP::EXPECTATION_FAILED),
			array(HTTP::UNPROCESSABLE_ENTITY),
			array(HTTP::LOCKED),
			array(HTTP::FAILED_DEPENDANCY),
			array(HTTP::UNORDERED_COLLECTION),
			array(HTTP::UPGRADE_REQUIRED),
			array(HTTP::PRECONDITION_REQUIRED),
			array(HTTP::TOO_MANY_REQUESTS),
			array(HTTP::REQUEST_HEADER_FIELDS_TOO_LARGE),
		);
	}

	/**
	 * @dataProvider clientErrorCodes
	 */
	public function testClientErrorCodes($status) {
		$this->assertTrue(HTTP::isClientError($status));
	}

	public function serverErrorCodes() {
		return array(
			array(HTTP::INTERNAL_SERVER_ERROR),
			array(HTTP::NOT_IMPLEMENTED),
			array(HTTP::BAD_GATEWAY),
			array(HTTP::SERVICE_UNAVAILABLE),
			array(HTTP::GATEWAY_TIMEOUT),
			array(HTTP::HTTP_VERSION_NOT_SUPPORTED),
			array(HTTP::VARIANT_ALSO_NEGOTIATES),
			array(HTTP::INSUFFICIENT_STORAGE),
			array(HTTP::LOOP_DETECTED),
			array(HTTP::NOT_EXTENDED),
			array(HTTP::NETWORK_AUTHENTICATION_REQUIRED),
		);
	}

	/**
	 * @dataProvider serverErrorCodes
	 */
	public function testServerErrorCodes($status) {
		$this->assertTrue(HTTP::isServerError($status));
	}

}

