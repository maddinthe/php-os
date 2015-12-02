<?php

function createGallery($srcdir, $n, $width, $height=null){
    $ret='<table><tbody><tr>';
    $bilder=glob($srcdir.'*.jpg');
    foreach ($bilder as $key =>$bild){
       $ret.='<td><a href="'.$bild.'"target="blank"><img src="'.$bild.'" alt=""width="'.$width.'"/></a></td>';
        if ((($key+1)%$n)==0)$ret.='</tr><tr>';
    }
    return $ret.'</tr></tbody></table>';
}

echo createGallery('./bilder/',7,100);

?>
