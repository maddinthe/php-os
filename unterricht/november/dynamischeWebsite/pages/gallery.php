<?php

function createGallery($srcdir, $n, $width, $height = null)
{
    $ret = '<table><tbody><tr>';
    $bilder = glob($srcdir . '*.jpg');
    $counter=1;
    if ($height == null) {
        foreach ($bilder as $bild) {
            $ret .= '<td><a href="' . $bild . '"target="blank"><img src="' . $bild . '"width="' . $width . '"/></a></td>';
            if ($counter++==$n){ $ret .= '</tr><tr>';
            $counter=1;}
        }
    } else {
        foreach ($bilder as $bild) {
            $ret .= '<td><a href="' . $bild . '"target="blank"><img src="' . $bild . '"width="' . $width . '"height="' . $height . '"/></a></td>';
            if ($counter++==$n){ $ret .= '</tr><tr>';
                $counter=1;}
        }

    }
    while($counter++<=$n){
        $ret.='<td></td>';
    }
    return $ret . '</tr></tbody></table>';
}

echo createGallery('./bilder/', 5, 100);

?>
