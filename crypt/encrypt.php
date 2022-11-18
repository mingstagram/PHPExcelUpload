<?php 
class Encrypt {
    function __construct (){
    }
    public function aes_encrypt($str) {
        $encrpyt = base64_encode(openssl_encrypt($str, 'aes-128-cbc', CRYPT_KEY , OPENSSL_RAW_DATA));
        return $encrpyt;
    }   
    public function sha_encrypt($str) {
        $hashed = base64_encode(hash('sha256', $str, true));
        return $hashed;
    }   
}
?>