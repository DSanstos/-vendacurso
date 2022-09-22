<?php
    /**
     * Write code on Method
     *
     * @return response()
     */
    if (! function_exists('encrypPassBr')) {
        function encrypPassBr($string)
        {
            return base64_encode(env("APP_KEY").md5( env("APP_KEY").sha1( $string .env("APP_KEY") ) ) );
        }
    }
?>