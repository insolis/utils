<?php

namespace Insolis;

class Utils
{
    public static function slugify($text)
    {
        //source: http://svn.jobeet.org/trunk/lib/Jobeet.class.php
        $oldlocale = setlocale(LC_CTYPE, "en_US.UTF8");
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = trim($text, '-');
        $text = iconv('utf8', 'us-ascii//TRANSLIT', $text);
        $text = strtolower($text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        setlocale(LC_CTYPE, $oldlocale);

        return $text;
    }
}
