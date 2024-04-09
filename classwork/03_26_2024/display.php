<?PHP
// where img are saved
    $directory = "uploaded/";
    // open dir

    if(is_dir($directory)){
        // loop through 
        if($dir = opendir($directory)){
            while($file = readdir($dir)){
                // check if file is not a directory
                if($file != "." && $file != ".."){
                    echo('<img src="' . $directory . $file . '">');
                }
                // close dir
                
             } // }whilepi
             
             closedir($dir);

        }// }if
        

        
    }// if




?>