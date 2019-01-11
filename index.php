<?PHP
    /**
     * @brief  PHP Error Exception Handler
     **/
    set_error_handler(function($code, $message, $file, $line) {
        /**
         * $code    => Error Code
         * $message => Error Message
         * $file    => Error file
         * $line    => The line in which an error occurs in the error file.
         **/
        throw new ErrorException($message, 0, $code, $file, $line);
    },-1);

    /**
     * @brief  example use code
     **/
    $fileRoot = "/var/www/html/log/PHP_Exception.txt";
    if(!file_exists($fileRoot)) {
        $fp = fopen($fileRoot, "w");
        fwrite($fp, "error msg");
    } else {
        $fp = fopen($fileRoot, "a");
        fwrite($fp, "error msg");
    }
    fclose($fp);