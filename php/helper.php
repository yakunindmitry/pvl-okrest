<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_random_image
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_random_image
 *
 * @package     Joomla.Site
 * @subpackage  mod_random_image
 * @since       1.5
 */
class modRandomImageHelper
{
	public static function getRandomImage(&$params, $images)
	{
		$width	= $params->get('width');
		$height	= $params->get('height');

		$i      = count($images);
		$random = mt_rand(0, $i - 1);
		$image  = $images[$random];
		$size   = getimagesize(JPATH_BASE . '/' . $image->folder . '/' . $image->name);

		if ($width == '') {
			$width = 100;
		}

		if ($size[0] < $width) {
			$width = $size[0];
		}

		$coeff = $size[0] / $size[1];
		if ($height == '') {
			$height = (int) ($width / $coeff);
		} else {
			$newheight = min($height, (int) ($width / $coeff));
			if ($newheight < $height) {
				$height = $newheight;
			} else {
				$width = $height * $coeff;
			}
		}

		$image->width	= $width;
		$image->height	= $height;
		$image->folder	= str_replace('\\', '/', $image->folder);

		return $image;
	}


	public static function getImages(&$params, $folder)
	{
		$type		= $params->get('type', 'jpg');

		$files	= array();
		$images	= array();

		$dir = JPATH_BASE . '/' . $folder;

		// check if directory exists
		if (is_dir($dir))
		{
            /*
			if ($handle = opendir($dir)) {
				while (false !== ($file = readdir($handle))) {
					if ($file != '.' && $file != '..' && $file != 'CVS' && $file != 'index.html') {
						$files[] = $file;
					}
				}
			}
			closedir($handle);
            */
            //dump($files,'$files');

	        $array = scandir($dir);
	        $array = array_splice($array, 2); // ������� 2 ������ �������� ������� - "." � ".."

	        $i = 0;
	        while ( $i < count($array) )
	        {
	                if ( is_dir($dir . '/' . $array[$i]) )
	                {
	                        $array_tmp = scandir($dir . '/' . $array[$i]);
	                        $array_tmp = array_splice($array_tmp, 2); // ������� 2 ������ �������� ������� - "." � ".."
	                        for ($k = 0; $k < count($array_tmp); $k++)
	                        {
	                                $array_tmp[$k] = $array[$i] . '/' . $array_tmp[$k];
	                        }

	                        unset( $array[$i] );
	                        $array = array_values($array);
	                        $array = array_merge($array_tmp, $array);
	                        $i = 0;
	                }
	                $i++;
	        }

            $files = $array;

			$i = 0;
			foreach ($files as $img)
			{
				if (!is_dir($dir . '/' . $img))
				{
					if (preg_match('/'.$type.'/', $img)) {
						$images[$i] = new stdClass;

						$images[$i]->name	= $img;
						$images[$i]->folder	= $folder;
						$i++;
					}
				}
			}
		}

		return $images;
	}

	public static function getFolder(&$params)
	{
		$folder	= $params->get('folder');

		$LiveSite	= JURI::base();

		// if folder includes livesite info, remove
		if (JString::strpos($folder, $LiveSite) === 0) {
			$folder = str_replace($LiveSite, '', $folder);
		}
		// if folder includes absolute path, remove
		if (JString::strpos($folder, JPATH_SITE) === 0) {
			$folder = str_replace(JPATH_BASE, '', $folder);
		}
		$folder = str_replace('\\', DIRECTORY_SEPARATOR, $folder);
		$folder = str_replace('/', DIRECTORY_SEPARATOR, $folder);

		return $folder;
	}

}
