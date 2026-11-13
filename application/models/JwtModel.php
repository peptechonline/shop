<?php
class JwtModel extends CI_Model {
    private $JwtSecretKey = "SecretCode"; // Define as a class property

    public function __construct() {
        parent::__construct();
    }

    public function encode($data) {
        $jwt = new JWT();
		$token = $jwt->encode($data,$this->JwtSecretKey,'HS256');
		return $token;
    }

    public function decode($headers) {
        $token = substr($headers, 7); //Bearer Token
		$jwt = new JWT();
		$decoded_token = $jwt->decode($token, $JwtSecretKey, 'HS256');
		return $jwt->jsonEncode($decoded_token);
    }
}

?>
