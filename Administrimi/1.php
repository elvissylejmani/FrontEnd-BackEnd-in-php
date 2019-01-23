<?php  
include('../config.php');
if (isset($_POST['submit'])) {
    
	$imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
//	$name = $_FILES['userfile']['name'];
$maxsize = 10000000; //set to approx 10 MB

    $title = $_POST['title'];
     $text = $_POST['text'];
     $text1 = $_POST['text2'];
     if(empty($imgData) || empty($title) || empty($text) || empty($text1)) {
				
		if(empty($pic)) {
			echo "<font color='red'>picture field is empty.</font><br/>";
		}
		
		if(empty($title)) {
			echo "<font color='red'>title field is empty.</font><br/>";
		}
		
		if(empty($text)) {
			echo "<font color='red'> text field is empty.</font><br/>";
        }
        if(empty($text1)) {
			echo "<font color='red'> Second text field is empty.</font><br/>";
        }
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    }
    else {
      // $pic = base64_encode();
        $result = mysqli_query($conn,"INSERT INTO header(pic,p1,p2,p3) 
            VALUES('$imgData','$title','$text','$text1')");
            header('Location: index.php');
    }

}
else if (isset($_POST['submit1'])) {
    
	$imgData1 = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
//	$name = $_FILES['userfile']['name'];
$maxsize = 10000000; //set to approx 10 MB
$title = $_POST['title'];
$p = $_POST['text'];
$p1 = $_POST['text1'];
$p2 = $_POST['text2'];
$p3 = $_POST['text3'];
$p4 = $_POST['text4'];
$p5 = $_POST['text5'];
$p6 = $_POST['text6'];
if(empty($imgData1) || empty($title) || empty($p) || empty($p1) || empty($p2) || empty($p3) || empty($p4) || empty($p5)|| empty($p6)) {
    echo "<font color='red'> You didn't fill all fields.</font><br/>";
}
else {
    $result = mysqli_query($conn,"INSERT INTO section(p1,p2,p3,p4,p5,p6,p7,p8,pic) 
    VALUES('$title','$p','$p1','$p2','$p4','$p5','$p6','$imgData1')");
    header('Location: index.php');
    
}

}
else if (isset($_POST['submit2'])) {
    
	$imgData1 = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
//	$name = $_FILES['userfile']['name'];
$maxsize = 10000000; //set to approx 10 MB
$title = $_POST['title'];
$text = $_POST['text'];
$text1 = $_POST['text2'];
if(empty($imgData) || empty($title) || empty($text) || empty($text1)) {
           
   if(empty($imgData)) {
       echo "<font color='red'>picture field is empty.</font><br/>";
   }
   
   if(empty($title)) {
       echo "<font color='red'>title field is empty.</font><br/>";
   }
   
   if(empty($text)) {
       echo "<font color='red'> text field is empty.</font><br/>";
   }
   if(empty($text1)) {
       echo "<font color='red'> Second text field is empty.</font><br/>";
   }
   echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
}
else {
 // $pic = base64_encode();
   $result = mysqli_query($conn,"INSERT INTO section2(title,p1,p2,pic) 
       VALUES('$title','$text','$text1','$imgData')");
       header('Location: index.php');
}



}

else if (isset($_POST['submit3'])) {
    
	$imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
//	$name = $_FILES['userfile']['name'];
$maxsize = 10000000; //set to approx 10 MB
$title = $_POST['title'];
$text = $_POST['text'];
$text1 = $_POST['text2'];
if(empty($imgData) || empty($title) || empty($text) || empty($text1)) {
           
   if(empty($imgData)) {
       echo "<font color='red'>picture field is empty.</font><br/>";
   }
   
   if(empty($title)) {
       echo "<font color='red'>title field is empty.</font><br/>";
   }
   
   if(empty($text)) {
       echo "<font color='red'> text field is empty.</font><br/>";
   }
   if(empty($text1)) {
       echo "<font color='red'> Second text field is empty.</font><br/>";
   }
   echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
}
else {
 // $pic = base64_encode();
   $result = mysqli_query($conn,"INSERT INTO courses(pic,title,name,Category) 
       VALUES('$imgData','$title','$text','$text1')");
       header('Location: blog.php?ID=1');
}
}
else if (isset($_POST['submit4'])) {
    $title = $_POST['title'];
    $path = $_POST['text'];
    $id = $_POST['id'];

   // $id = $_POST['ID'];
    if(empty($path) || empty($title)) {
echo "Woooooow";
    if(empty($title)) {
        echo "<font color='red'>title field is empty.</font><br/>";
    }
    
    if(empty($path)) {
        echo "<font color='red'>Video link field is empty.</font><br/>";
    }
    }
    else {
$result = mysqli_query($conn,"INSERT INTO htmlcourse(title,path,CorsID) 
        VALUES('$title','$path','$id')");
        header('Location: blog.php?ID=1');
    echo "hello";
    }    

}

