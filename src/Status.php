<?php 
namespace vaultke\helpers;
use Yii;
/*
*  @author Ananda Douglas
*/
class Status{
  public static function getCode($code){
    $codes = array_merge($this->appCodes(),$this->coreCodes(),$this->notyCodes());
      if($this->checkCode($codes[$code])) {
        $r = $codes[$code];	
        return [
                'code'=>$code,
                'name'=>$r[0],
                'theme'=>$r[1]
              ];
      }
  }
  protected function notyCodes() {

  }
  protected function appCodes() {
    $codes = [
      0   => ['No', 'danger'],
      1   => ['Yes', 'success'],
      2   => ['Partial', 'warning'],
      3   => ['Cancelled', 'danger'],
      4   => ['Declined', 'warning'],
      5   => ['Approved', 'success'],
      6   => ['Pending', 'info'],
      7   => ['Archived', 'warning'],
      8   => ['Deleted', 'danger'],
      9   => ['Inactive', 'warning'],
      10  => ['Active', 'success'],
      11  => ['Due', 'info'],
      12  => ['Overdue', 'danger'],
      13  => ['Paid', 'success'],
      14  => ['Contract', 'info'],
      15  => ['Permanent', 'success'],
      16  => ['Terminated', 'danger'],
      17  => ['Suspended', 'warning'],
      18  => ['In Dispute', 'warning'],
      19  => ['Unpaid', 'warning'],
      20  => ['On Leave', 'info'],
    ];
    return $codes;
  }
  protected function coreCodes() {
      $codes = [
                  100 => ['Continue', 'info'],
                  101 => ['Switching Protocols', 'info'],
                  103 => ['Early Hints', 'info'],
                  200 => ['OK', 'success'],
                  201 => ['Record Created Successfully', 'success'],
                  202 => ['Accepted', 'success'],
                  203 => ['Non-Authoritative Information', 'success'],
                  204 => ['No Content', 'info'],
                  205 => ['Reset Content', 'success'],
                  206 => ['Partial Content', 'info'],
                  207 => ['Multi-Status', 'success'],
                  226 => ['IM Used', 'success'],
                  300 => ['Multiple Choices', 'danger'],
                  301 => ['Moved Permanently', 'danger'],
                  302 => ['Found', 'danger'],
                  303 => ['See Other', 'danger'],
                  304 => ['Not Modified', 'danger'],
                  305 => ['Use Proxy', 'danger'],
                  306 => ['Reserved', 'danger'],
                  307 => ['Temporary Redirect', 'danger'],
                  400 => ['Bad Request', 'danger'],
                  401 => ['Unauthorized', 'danger'],
                  402 => ['Payment Required', 'danger'],
                  403 => ['Forbidden', 'danger'],
                  404 => ['Not Found', 'danger'],
                  405 => ['Method Not Allowed', 'danger'],
                  406 => ['Not Acceptable', 'danger'],
                  407 => ['Proxy Authentication Required', 'danger'],
                  408 => ['Request Timeout', 'danger'],
                  409 => ['Conflict', 'danger'],
                  410 => ['Gone', 'danger'],
                  411 => ['Length Required', 'danger'],
                  412 => ['Precondition Failed', 'danger'],
                  413 => ['Request Entity Too Large', 'danger'],
                  414 => ['Request-URI Too Long', 'danger'],
                  415 => ['Unsupported Media Type', 'danger'],
                  416 => ['Requested Range Not Satisfiable', 'danger'],
                  417 => ['Expectation Failed', 'danger'],
                  422 => ['Unprocessable Entity', 'danger'],
                  423 => ['Locked', 'danger'],
                  424 => ['Failed Dependency', 'danger'],
                  426 => ['Upgrade Required', 'danger'],
                  500 => ['Internal Server Error', 'danger'],
                  501 => ['Not Implemented', 'danger'],
                  502 => ['Bad Gateway', 'danger'],
                  503 => ['Service Unavailable', 'danger'],
                  504 => ['Gateway Timeout', 'danger'],
                  505 => ['HTTP Version Not Supported', 'danger'],
                  506 => ['Variant Also Negotiates', 'danger'],
                  507 => ['Insufficient Storage', 'danger'],
                  510 => ['Not Extended', 'danger']
      ];
        return $codes;
  }
  protected function checkCode($values) {
		if((@count($values)>0 and !@empty($values) and @isset($values)) || $values=='0') {
			return true;
		}
	}


}

