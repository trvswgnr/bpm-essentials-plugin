<?php
function formatPhoneNumber( $number ){
  $txt = preg_replace('/[\s\-|\.|\(|\)]/','',$number);
  $format = '[$1?$1 :][$2?($2):x][$3: ]$4[$5: ]$6[$7? $7:]';
  if( preg_match('/^(.*)(\d{3})([^\d]*)(\d{3})([^\d]*)(\d{4})([^\d]{0,1}.*)$/', $txt, $matches) ){
    $result = $format;
    foreach( $matches AS $k => $v ){
      $str = preg_match('/\[\$'.$k.'\?(.*?)\:(.*?)\]|\[\$'.$k.'\:(.*?)\]|(\$'.$k.'){1}/', $format, $filterMatch);
      if( $filterMatch ){
        $result = str_replace( $filterMatch[0], (!isset($filterMatch[3]) ? (strlen($v) ? str_replace( '$'.$k, $v, $filterMatch[1] ) : $filterMatch[2]) : (strlen($v) ? $v : (isset($filterMatch[4]) ? '' : (isset($filterMatch[3]) ? $filterMatch[3] : '')))), $result );
      }
    }
    return $result;
  }
  return $number;
}
?>
