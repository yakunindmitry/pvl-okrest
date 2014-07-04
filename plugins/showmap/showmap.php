<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


class PlgContentShowMap extends JPlugin
{
	public function onContentPrepare($context, &$article, &$params, $page = 0)
	{
		$document = JFactory::getDocument();

		// simple performance check to determine whether bot should process further
		if ( JString::strpos( $article->text, '{showmap' ) === false ) 
		{
			return true;
		}	
		
		$regex = "#{showmap}(.*?){\/showmap}#s";				
		if(preg_match_all($regex,$article->text,$matches,PREG_SET_ORDER)) 						
		{	
			$pararray = preg_split("/[,]/", $matches[0][1]);

			//$article->text=str_replace($matches[0][0],'<img src=/images/smile.gif />', $article->text);

			$document->addScript('http://api-maps.yandex.ru/2.0-stable/?load=package.standard&amp;lang=ru-RU');
			$document->addScript('http://yandex.st/jquery/1.6.4/jquery.min.js');
			$document->addScript(JURI::base(true).'/plugins/content/showmap/showmap.js');
			
			$html = '<span id=\'ontext1\' style=\'display: inline;\'>' . "\n";
			$html = $html .'<a href="javascript:on(\'1\',\''.$pararray[0].'\',\''.$pararray[1].'\',\''.$pararray[2].'\',\''.$pararray[3].'\',\''.$pararray[4].'\',\''.$pararray[5].'\');">Показать на карте</a>' . "\n";
			$html = $html .'</span>' . "\n";
			$html = $html .'<span id=\'offtext1\' style=\'display: none;\'>' . "\n";
			$html = $html .'<a href="javascript:off(\'1\');">Скрыть карту</a>' . "\n";
			$html = $html .'</span>' . "\n";
//			$html = $html .'<!-- Скрытый текст -->
			$html = $html .'<div id=\'text1\' style=\'display: none;\'>' . "\n";
			$html = $html .'<div id="map" style="width: 710px; height: 700px;"> </div>' . "\n";
			$html = $html .'</div>' . "\n";

			$article->text=str_replace($matches[0][0], $html, $article->text);
			
		}
		
		return true;
		
	}
}  

