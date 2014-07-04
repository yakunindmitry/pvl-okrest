<?php
/**
* Helper class for File_Count module
*
* @package Joomla.Tutorials
* @subpackage Modules
* @link 
*/

class modFileCountHelper
{
/**
* Retrieves the hello message
*
* @param array $params An object containing the module parameters
* @access public
*/
	function getFileCount( &$params )
	{
		$type		= $params->get('type', 'jpg');
		$folder	= $params->get('folder', 'images');

		$files	= array();

		$dir = JPATH_BASE . '/' . $folder;

		// check if directory exists
		if (is_dir($dir))
		{
			// Выбор поддиректорий
	        $array = scandir($dir);
	        $array = array_splice($array, 2); // Удаляем 2 первых элемента массива - "." и ".."
	        $i = 0;
	        while ( $i < count($array) )
	        {
	                if ( is_dir($dir . '/' . $array[$i]) )
	                {
	                        $array_tmp = scandir($dir . '/' . $array[$i]);
	                        $array_tmp = array_splice($array_tmp, 2); // Удаляем 2 первых элемента массива - "." и ".."
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
			// Выбор поддиректорий

			$i = 0;
			foreach ($files as $img)
			{
				if (!is_dir($dir . '/' . $img))
				{
					if (preg_match('/'.$type.'/', $img))
					{
						$i++;
					}
				}
			}
		}

		return (string) $i;
	}

	function getLink( &$params )
	{
		$link		= $params->get('link', '');

		return $link;
	}

}
?>