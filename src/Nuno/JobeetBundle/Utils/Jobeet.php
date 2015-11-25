<?php

namespace Nuno\JobeetBundle\Utils;
 
class Jobeet
{
	static public function slugify($text)
	{
		// Replace non letter or digits by -
		$text = preg_replace('~[^\\pL\d]+~u', '-', $text);

		// Trim
		$text = trim($text, '-');

		// Transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// Lowercase
		$text = strtolower($text);

		// Remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		if (empty($text))
		{
			return 'n-a';
		}

		return $text;
	}
}