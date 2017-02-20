<?php
/**
 * Environment Get
 * @param $envname: Environment Lable
 */
function E ( $envname ) {

    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') { // Redefine slashes for Windows or Xnix
        $SLASHES = "\\";
    } else {
        $SLASHES = "/";
    }

    switch ( $envname ) { // Environment List
        
        case 'MOEFRAME_ROOT': return dirname(dirname(__FILE__));
        case 'MOEFRAME_TMP_ROOT': return dirname(dirname(__FILE__)).$SLASHES."storage".$SLASHES."tmp";
        default: return null;
        
    }

}
?>