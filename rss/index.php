<?php
    
    header("Content-Type: application/rss+xml; charset=ISO-8859-1");

    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>' . "\n";
    $rssfeed .= '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">'  . "\n\t";
    $rssfeed .= '<channel>' . "\n\t\t";
    $rssfeed .= '<title>DanMall.me</title>' . "\n\t\t";
    $rssfeed .= '<atom:link href="http://danmall.me./rss/" rel="self" type="application/rss+xml" />' . "\n\t\t";
    $rssfeed .= '<link>http://danmall.me/</link>' . "\n\t\t";
    $rssfeed .= '<description>Posts from DanMall.me</description>' . "\n\t\t";
    $rssfeed .= '<language>en-us</language>' . "\n\t\t";
    $rssfeed .= '<copyright>Copyright (C) 2005 - ' . date('Y') . ' Dan Mall</copyright>' . "\n\t\t";


    $file = $_SERVER["DOCUMENT_ROOT"].'/articles/articles.json';
    $articles = json_decode(file_get_contents($file), true);
	$articlesLength = sizeof($articles);
	$ARTICLES_DIRECTORY = '/articles/';

	for($i = 0; $i < $articlesLength; $i++){
		$rssfeed .= '<item>' . "\n\t\t\t";
		$rssfeed .= '<title>' . json_encode(htmlspecialchars_decode(str_replace(array('&rsquo;', '&quot;', '&ldquo;', '&rdquo;', '&amp;', '&ndash;', '&mdash;', '&hellip;', '&oacute;', '&iacute;', '&eacute;', '&Eacute;'), array("'", '"', '"', '"', 'and', '-', '-', '...', 'o', 'i', 'e', 'E'), $articles[$i]['title'])), true) . '</title>' . "\n\t\t\t";
		$rssfeed .= '<link>http://danmall.me' . $ARTICLES_DIRECTORY . $articles[$i]['slug'] . '</link>' . "\n\t\t\t";
		$rssfeed .= '<guid isPermaLink="false">http://danmall.me' . $ARTICLES_DIRECTORY . $i . '</guid>' . "\n\t\t\t";

		// crazy special characters function: https://www.webdeveloper.com/forum/d/260941-re-converting-html-rsquo-to-xml-acceptable-character
		$rssfeed .= '<description>' . json_encode(htmlspecialchars_decode(str_replace(array('&rsquo;', '&quot;', '&ldquo;', '&rdquo;', '&amp;', '&ndash;', '&mdash;', '&hellip;', '&oacute;', '&iacute;', '&eacute;', '&Eacute;'), array("'", '"', '"', '"', 'and', '-', '-', '...', 'o', 'i', 'e', 'E'), $articles[$i]['dek'])), true) . '</description>' . "\n\t\t\t";		

		// convert date to RFC822 format
		$convertedDate = date(DATE_RFC822, strtotime($articles[$i]['date']));
		$rssfeed .= '<pubDate>' . $convertedDate . '</pubDate>' . "\n\t\t";

		if($i == ($articlesLength-1)){
			$rssfeed .= '</item>' . "\n\t";
		}else{
			$rssfeed .= '</item>' . "\n\t\t";
		}

	}	


    $rssfeed .= '</channel>' . "\n";
    $rssfeed .= '</rss>';

    echo $rssfeed;

?>