<?php

namespace App\Http\Controllers\WxThirdParty;

use App\Http\Controllers\Controller;
use Cache;
use App\Http\Controllers\WxThirdParty\Services\WxThirdPartyService;

class AuthorizerAccessController extends Controller
{
    public function getComponentLoginPage(){
        $wx=new WxThirdPartyService();
        $pre_auth_code=$wx->getPreAuthCode()['pre_auth_code'];
        $url="https://mp.weixin.qq.com/cgi-bin/componentloginpage?component_appid=$wx->appId&pre_auth_code=$pre_auth_code&redirect_uri=http://auth.weixin.yilu.co&auth_type=3";
        return ($url);
    }
}