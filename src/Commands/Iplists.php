<?php
namespace MikrotikAPI\Entity;

use Routerboard\Arjeapi\RouterOs;

class Iplists{

    public function Getiplist(){
        $API = new RouterOs();
        if ($API->connect(\Session::get('hostname'), \Session::get('username'), \Session::get('password'))) {

            $API->write('/ip/firewall/address-list/print');

            $READ = $API->read(false);
            $ListIpAddr = $API->parseResponse($READ);


            $API->disconnect();

        }
    }

}
