<?php
return array(
    // set your paypal credential
    'client_id' => 'ATCR6vU2h47y7ZCy_xYGakj88Yw333d1s0rQHC6pgOmsG9dThdaO8mvngiqSstfuDYGWK-ntS7WwzR0f',
    'secret' => 'EP2uukVeAdFVV3rzeFNFgl6HqdoTo7QAPYRGXx9fGZ_DDOW631ZYf6X2-wNh9yUyt_htddo5IDxa370y',

    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'live',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
