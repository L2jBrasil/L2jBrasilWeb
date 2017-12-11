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
use App\Models\Balance;
use App\Models\ServerConfigurations;
use App\Models\ServerConnections;
use App\Models\Users\Users;

class Functions extends Controller{

  static function CDNurlApp() {
    return 'http://'.$_SERVER['HTTP_HOST'].'/app';
  }

  static function CDNurlSystem() {
    return 'http://'.$_SERVER['HTTP_HOST'].'/system';
  }

  static function ActiveClass($URL = null, $ListItem = false) {
    $Route = Route::currentRouteName();

    if ($Route == $URL):
      if ($ListItem == True):
        return 'class=active';
      else:
        return 'active';
      endif;
    endif;
  }

  static function ActiveClassServer($URL = null, $ListItem = false) {
    $Route = Route::currentRouteName();

    if ($Route == $URL):
      if ($ListItem == True):
        if (Route::getCurrentRoute()->parameters['ServerID'] == $ListItem):
          return 'class=active';
        endif;
      endif;
    endif;
  }

  static function getServerData() {
    $Server = ServerConfigurations::where('user_id', Auth::id())->get();
    return $Server;
  }


  static function DocumentClear($Document){
      $Document = trim($Document);
      $Document = str_replace(".", "", $Document);
      $Document = str_replace(",", "", $Document);
      $Document = str_replace("-", "", $Document);
      $Document = str_replace("/", "", $Document);
      return $Document;
  }


  static function HasCastle($Number){

    $castelo['0'] = "<font color='GRAY'>No Castle</font>";
    $castelo['1'] = "<b><font color='#039BE5'>Gludio</font></b>";
    $castelo['2'] = "<b><font color='#039BE5'>Dion</font></b>";
    $castelo['3'] = "<b><font color='#039BE5'>Giran</font></b>";
    $castelo['4'] = "<b><font color='#039BE5'>Oren</font></b>";
    $castelo['5'] = "<b><font color='#039BE5'>Aden</font></b>";
    $castelo['6'] = "<b><font color='#039BE5'>Innadril</font></b>";
    $castelo['7'] = "<b><font color='#039BE5'>Goddard</font></b>";
    $castelo['8'] = "<b><font color='#039BE5'>Rune</font></b>";
    $castelo['9'] = "<b><font color='#039BE5'>Schuttgart</font></b>";

    echo $castelo[$Number];

  }

  static function HasAlly($AllyName){

        if($AllyName != NULL):
          echo "<b><font color='#38c36e'>".$AllyName."</font></b>";
        else:
          echo "<font color='GRAY'>No Ally</font>";
        endif;
      }


  static function ClanName($ClanName){
          echo "<b><font color='#bf1e53'>".$ClanName."</font></b>";

      }

  static function EnchantPlayerList($Value){
          if($Value > '0'):
              echo "<b><font color='#067098'>+".$Value."</font></b>";
          elseif($Value == '0'):
              echo '';
          endif;
      }

  static function Enchant($Value){
          if($Value > '0'):
              return ' <span style="color:red">+'.$Value.'</span>';
          elseif($Value = '0'):
              return '';
          endif;
      }

  static function aNumberFormat($number_in_iso_format, $no_of_decimals=3, $decimals_separator='.', $thousands_separator='', $digits_grouping=3){
      // Check input variables
      if (!is_numeric($number_in_iso_format)){
          error_log("Warning! Wrong parameter type supplied in my_number_format() function. Parameter \$number_in_iso_format is not a number.");
          return false;
      }
      if (!is_numeric($no_of_decimals)){
          error_log("Warning! Wrong parameter type supplied in my_number_format() function. Parameter \$no_of_decimals is not a number.");
          return false;
      }
      if (!is_numeric($digits_grouping)){
          error_log("Warning! Wrong parameter type supplied in my_number_format() function. Parameter \$digits_grouping is not a number.");
          return false;
      }


      // Prepare variables
      $no_of_decimals = $no_of_decimals * 1;


      // Explode the string received after DOT sign (this is the ISO separator of decimals)
      $aux = explode(".", $number_in_iso_format);
      // Extract decimal and integer parts
      $integer_part = $aux[0];
      $decimal_part = isset($aux[1]) ? $aux[1] : '';

      // Adjust decimal part (increase it, or minimize it)
      if ($no_of_decimals > 0){
          // Check actual size of decimal_part
          // If its length is smaller than number of decimals, add trailing zeros, otherwise round it
          if (strlen($decimal_part) < $no_of_decimals){
              $decimal_part = str_pad($decimal_part, $no_of_decimals, "0");
          } else {
              $decimal_part = substr($decimal_part, 0, $no_of_decimals);
          }
      } else {
          // Completely eliminate the decimals, if there $no_of_decimals is a negative number
          $decimals_separator = '';
          $decimal_part       = '';
      }

      // Format the integer part (digits grouping)
      if ($digits_grouping > 0){
          $aux = strrev($integer_part);
          $integer_part = '';
          for ($i=strlen($aux)-1; $i >= 0 ; $i--){
              if ( $i % $digits_grouping == 0 && $i != 0){
                  $integer_part .= "{$aux[$i]}{$thousands_separator}";
              } else {
                  $integer_part .= $aux[$i];
              }
          }
      }

      $processed_number = "{$integer_part}{$decimals_separator}{$decimal_part}";
      return $processed_number;
  }




  static function getBalance($Account = null) {

    if ($Account == null):
      $Account = Auth::user()->email;
    endif;

    $Result = Balance::where('account', $Account)
            ->get();

    if (sizeof($Result) > 0):
      return $Result[0]->value;
    else:
      return 0;
    endif;

  }








}// End Functions
