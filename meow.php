<?php
/**
*Created by raflidev
*Meownime ongoing update
**/
function grabbing($url){
     $data = curl_init();
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     $output = curl_exec($data);
     curl_close($data);
     return $output;
}
 $ambilhtml = grabbing('https://meownime.com/tag/ongoing/');
 
 echo "
 ___  ___                         _                
 |  \/  |                        (_)               
 | .  . | ___  _____      ___ __  _ _ __ ___   ___ 
 | |\/| |/ _ \/ _ \ \ /\ / / '_ \| | '_ ` _ \ / _ \
 | |  | |  __/ (_) \ V  V /| | | | | | | | | |  __/
 \_|  |_/\___|\___/ \_/\_/ |_| |_|_|_| |_| |_|\___|
                                Ongoing Update v.1
                                                   
";
 
//link
 $link = explode('<h1 class="entry-title title-font"><a href="',$ambilhtml);
 //judul
 $judul = explode('alt="',$ambilhtml);
 
 for($x=1;$x<6;$x++){
    $filterjudul = explode('">',$judul[$x]);
     $filterlink = explode('" rel="bookmark">', $link[$x]);

    print "$filterjudul[0]\n";
    print "$filterlink[0]\n\n";
    
    }
?>
