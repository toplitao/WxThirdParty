<?php

namespace App\Http\Controllers\WxThirdParty;

use App\Http\Controllers\Controller;
use Cache;

class VerifyTicketController extends Controller
{
    public function saveVerifyTicket(){
        // $data1='<xml>
        // <AppId><![CDATA[wxc734fe744bd6db62]]></AppId>
        // <Encrypt><![CDATA[eNvHzDjSd/HTGDwvt3SLJsoEANq5ENHpvlokeG7L0CUYu2arJffoxUiUBAjYaIuYBL1LRPtKxRS8svzYXYUP/HpAi5oueDlmpMWTlxk4nJRwzOkI0jeKE+Mw7Gk37Btu88VkJl+D/bCtemPebVixWpIVw3ZkxX5lK7ZCfRaxmia0Jb+SgXiFK3CaX3b+f0lm+8b8dIJ1rlQCqedvUfUOio8iJPnF4qu6wgZv5za25PvCYuT1WKVsHifqBNxGO1hi1D1iR32AsIhBi5vkRirC+Q01LMMRpR2asLPTLy0LKDDv4kVb0uWlSfQm6ZjSPcPtAY437Ydd6JB9GrTn7ope4VOGlOJ/83J8a+lC+vQ4bwIiSypxuK1cdDYfrDFn+Vmalq2tdBuzG47atS1m6csrpqbwZrWlTzHAVf5TOUZuHrlbdo45hs9Ye+9PLkXqEnabKweRk7M5bwAr+h9qc7bFjg==]]></Encrypt>
        // </xml>';
        // $data2=json_decode('{"signature":"8e7adc2b727110fc95aee9e06f9d9ed8abde74e6","timestamp":"1514536788","nonce":"1988271604","encrypt_type":"aes","msg_signature":"71766a7fd1deff2fd79a6747b80065f823c3382d"}',true);
        // Cache::store('file')->put('verify_ticket_post_data', $data1, 100);
        // Cache::store('file')->put('verify_ticket_get_data', $data2, 100);
        Cache::store('file')->put('verify_ticket_post_data', file_get_contents('php://input'), 100);
        Cache::store('file')->put('verify_ticket_get_data', $_GET, 100);
    }
}