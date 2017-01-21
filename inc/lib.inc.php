<?php 

/*------------ FUNCTIONS FOR PORTFOLIO ----------*/
 //adding  fileName and thumbPath to table
    function addItemToTable($fileName, $thumbName) {
        
        $sql = 'INSERT INTO portfolio (fileName, thumbName) VALUES (?, ?)';
        
        if (!$stmt = DBConnection::$conn->prepare($sql)) return false;
        
	    $stmt->bind_param("ss", $fileName, $thumbName);
	    
        $stmt->execute();

        echo "New records created successfully";

        //$stmt->close();
        //DBConnection::$conn->close();
        //return true;
    }
    
    function selectAllItems(){
        
        $sql = 'SELECT id, fileName, thumbName, photoName, photoCaption FROM portfolio';
        if (!$result = DBConnection::$conn->query($sql)) return false;
        
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC); 
        mysqli_free_result($result);
        return $items;
    }
    
    function select16Items($numPage){
        
        if ($numPage){
            $limit = $numPage * 16 - 16;
        } else {
            $limit = 0;
        }
        
        //echo $limit;
        $sql = "SELECT id, fileName, thumbName, photoName, photoCaption FROM portfolio LIMIT $limit, 16";
        if (!$result = DBConnection::$conn->query($sql)) return false;
        
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC); 
        mysqli_free_result($result);
        return $items;
    }
    
    	$amountPagesGlobal = 0;
    
    function portfolioPaginaton($numPage){
        $photoAmount = 0;
        $thumbsArr = new DirectoryIterator("img/portfolio/thumbs");


        foreach ($thumbsArr as $finfo) {
        	if (!$finfo->isDot() && !$finfo->isDir()) {
        	    $photoAmount++;
    	    }
        }
      
      
        $amountPages = ceil($photoAmount / 16) ;
        $GLOBALS['amountPagesGlobal'] = $amountPages;
        
        for ($a = 1; $a <= $amountPages; $a++){
            
            $class = ($numPage == $a) ? "active" : "" ;
            
            echo <<<EOT
            <li><a class="btn-link btn-pagination $class" href="index.php?id=portfolio&num=$a" >$a</a></li>
EOT;
        }
    }
    
    function prevPage($numPage){
        if ($numPage <= 1){
            $numPage = "1" ;
        } else{
            $numPage--;
        }
        
        echo $numPage;
    }
    
    function nextPage($numPage){
        $am = $GLOBALS['amountPagesGlobal'];
        
        if ($numPage >= $am){
            $numPage = "$am" ;
        } else{
            $numPage++;
        }
        
        echo $numPage;
    }

/*------------  END FUNCTIONS FOR PORTFOLIO ----------*/
