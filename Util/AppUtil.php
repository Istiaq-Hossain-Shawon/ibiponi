<?php
/**
 * Created by PhpStorm.
 * User: Istiaq
 * Date: 9/6/14
 * Time: 5:30 AM
 */

namespace Util;


class AppUtil {
    public static function getFileNames($url) {
        $file_information = array();
        $Path = realpath($url);
        $i = 0;

        if (is_dir($Path)) {
            if ($dh = opendir($Path)) {
                while (($file = readdir($dh)) !== FALSE) {
                    if ($file == '.' || $file == '..') {
                        continue;
                    }
                    $file_information[$i]=$file;
                    //echo " <br> filename: " . $file . "\n";

                    $i++;
                }
                closedir($dh);
            }
        }
        return $file_information;
    }

    public static function get_file_title($file_name) {
        if(strpos($file_name, '.')) {
            return substr($file_name, 0, strrpos($file_name, '.'));
        }
        return $file_name;
    }
} 