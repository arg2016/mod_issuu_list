<?php

//class modSliderUnachHelper

class modIssuuListHelper
{
    
    public static function getPublicationsList($apikey)
    {
        $url = 'http://api.issuu.com/1_0?action=issuu.documents.list&apiKey='.$apikey.'&format=json&pageSize=10&responseParams=name,documentId,title&startIndex=0&signature=854d3625faf40b970ac317cca2d4f338';
        $contenido = json_decode(file_get_contents($url), true);
        return $contenido;
    }
}