<?php
$total=$publicaciones['rsp']['_content']['result']['totalCount'];
//print_r($publicaciones['rsp']['_content']['result']['_content'][0]['document']['documentId']);

//https://issuu.com/alexisaguilar/docs/extension_direccion_editorial
//http://image.issuu.com/151106180100-933f176dcf5f673cd414910a32b12d1b/jpg/page_1_thumb_large.jpg

for($i=0; $i<4;$i++)
{
    echo '<div class="large-3 columns"><a target="_blank" href="https://issuu.com/alexisaguilar/docs/'.$publicaciones['rsp']['_content']['result']['_content'][$i]['document']['name'].'">'
        . '<img src="http://image.issuu.com/'.$publicaciones['rsp']['_content']['result']['_content'][$i]['document']['documentId'].'/jpg/page_1_thumb_large.jpg"></a>'
        . '</div>';

}
