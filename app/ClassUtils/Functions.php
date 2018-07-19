<?php
namespace App\ClassUtils;

use App\Collaboration;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use Config;
use DB;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Redirect;
use Route;
use URL;

// Models
use App\Models\Users\Users;

class Functions extends Controller{

  static function CDNurl() {
    return 'http://'.$_SERVER['HTTP_HOST'].'/assets';
  }

  static function hashL2($Password){
  	return base64_encode(pack('H*', sha1(utf8_encode($Password))));
  }

}// End Functions
