<?php

namespace App;

use File as FileParent;

class File extends FileParent
{
    public static function createName($file)
    {
    	$extension = $file->getClientOriginalExtension();
		$name = md5(microtime() . rand(0, 9999));
		return $name.'.'.$extension;
    }

    public static function upload($file, $path, $filename = false)
    {
    	if (!$filename) $filename = self::createName($file);
    	if (!$file->move(public_path() . '/' .$path, $filename)) return false;
		return $filename;
    }
}
