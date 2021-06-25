<?php 
    function uploadFile(){
        if(move_uploaded_file($_FILES['picture']['tmp_name'][0],"./".$_FILES['picture']['name'][0])){
            echo "file uploaded successfully";
        }
    }
    ?>