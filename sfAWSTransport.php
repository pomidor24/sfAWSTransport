<?php

    /*
     * Amazon SES for Symfony 1.4
     * 
     * This file is distributed under the BSD License.
     * 
     * This file requires SwiftMailer and Swift_AWSTransport.
     * 
     * 2011 (c) Roman Drapeko
     */

    /**
     * Throws AWSConnectionError exception
     * @author drapeko
     */
    class sfAWSTransport extends Swift_AWSTransport {
        
        public function __construct() {}
        
        public function setAccessKeyId($val) {
            $this->AWSAccessKeyId = $val;
        }
        
        public function setSecretKey($val) {
            $this->AWSSecretKey = $val;
        }
        
        public function setDebug($val) {
            $this->debug = $val;
        }
        
        public function setEndpoint($val) {
            $this->endpoint = $val;
        }
    }

?>
