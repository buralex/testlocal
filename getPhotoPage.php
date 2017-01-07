<?php



$photos = select16Items($num);
	
       //var_dump($photos);   
 
    foreach ($photos as $item) {
                  
    	$fn= $item['fileName'];
    	$pn= $item['photoName'];
    	$pc= $item['photoCaption'];
    	$tn= $item['thumbName'];
	
    	echo <<<EOT
            <li class="xs-12 ssm-8 sm-6" data-src="img/portfolio/$fn" data-sub-html="<h4>$pn</h4><p>$pc</p>">
                <a href="#">
                    <img class="" src="img/portfolio/thumbs/$tn">
                </a>
            </li>
EOT;

    }


?>
