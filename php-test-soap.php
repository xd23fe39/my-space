#!/usr/bin/php
<?php
        function testSoap() {

                $wsdl_url = "http://server:8765/service?wsdl";
                $search = "*1234*";

                try {
                        $client = new SoapClient($wsdl_url , array());

                        /* $client = new SoapClient($wsdl_url , array(
                                'proxy_host'     => "proxy",
                                'proxy_port'     => 8080));  */

                        $i = $client->createContext("XXXXXXXXXEGHEDJDDHGHZXVS32");
                        $res_str = $client->searchPerson("(employeenumber=*$search*)");

                        echo $res_str;
                }
                catch(SoapFault $e) {
                        die("Soap Exception: " . $e->getMessage() );
                }
        }

        /**
         * MAIN
         */
        testSoap();
?>
