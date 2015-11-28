<?php

$baseFilename = "20151127_rteone-latelate-thelatelat_cl10498592_10498593_260_drm__1024k";
$baseURL = 'http://cdn.rasset.ie/hds-vod/2015/1127/20151127_rteone-latelate-thelatelat_cl10498592_10498593_260_drm_/20151127_rteone-latelate-thelatelat_cl10498592_10498593_260_drm__512k.mp4';

$segment=1;  //Gotten from stream page by viewing network traffic.
$fragments = 1810;  //Gotten from stream page by viewing network traffic and going to the end of the transmission


for ($fragment = 0; $fragment <= $fragments; $fragment += 1) {
    storeUrlToFilesystem($baseURL, $segment, $fragment);
}

function storeUrlToFilesystem($baseURL, $segment ,$fragment) {
    $source = $baseURL . 'Seg' . $segment . "-Frag" . $fragment;
    $destination = $fragment . ".f4f";
    try {
        $data = file_get_contents($source);
        $handle = fopen($destination, "w");
        fwrite($handle, $data);
        fclose($handle);
        return true;
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
    return false;
}