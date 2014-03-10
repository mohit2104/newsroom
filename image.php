<form enctype="multipart/form-data" action="" method="POST"> 
 <input type="file" name="photo" style='background:rgba(0,0,0,0.4);'><br> 
<input type="submit" value="Add"> 
</form> 

<?php 
$target = "images/"; 
$target = $target . basename( $_FILES['photo']['name']); 
$pic=($_FILES['photo']['name']); 
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
{ 
echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory"; 
} 
else { 

//Gives and error if its not 
echo "Sorry, there was a problem uploading your file."; 
} 
?>