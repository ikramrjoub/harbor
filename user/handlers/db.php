<?php 
session_start();
include('connect.php');
function getAll($table){
    global $conn;
   $getAll= "SELECT * FROM $table" ;
   $getAll= mysqli_query($conn,$getAll);
   $getAll= mysqli_fetch_all($getAll,MYSQLI_ASSOC);
   return ($getAll);

}
function getOnce($table,$where=1){
    global $conn;
    $getOnce= "SELECT * FROM $table WHERE $where" ;
    $getOnce= mysqli_query($conn,$getOnce);
    $getOnce= mysqli_fetch_assoc($getOnce);
    return ($getOnce);

}
function getwhere($table,$where){
    global $conn;
   $getAll= "SELECT * FROM $table WHERE $where" ;
   $getAll= mysqli_query($conn,$getAll);
   $getAll= mysqli_fetch_all($getAll,MYSQLI_ASSOC);
   return ($getAll);

}
function Add($table,$cols,$value,$goTo){
    global $conn;
    $add= " INSERT INTO $table($cols) VALUES ($value) ";
    if(mysqli_query($conn,$add)){
        $_SESSION['Add']="$table Added succssfuly";
        header("location:../../admin/$goTo");
        
    }else{
        echo mysqli_error($conn);
    }

}

function delete($table,$id,$goTo){
    global $conn;
    $delete= "DELETE FROM $table WHERE id= $id";
    if(mysqli_query($conn,$delete)){
        $_SESSION['delete']="$table delete succssfuly";
        header("location:../../admin/$goTo");

    }else{
        echo mysqli_error($conn);
    }
}
function Edit($table,$cols,$id,$goTo){
    global $conn;
    $update ="UPDATE $table SET $cols where id=$id ";
    if(mysqli_query($conn , $update)){
     $_SESSION['Edit']="Update $table succssfuly";;
     header("location:../../admin/$goTo");
 }else{
    echo mysqli_error($conn);
 }
   
}


if(isset($_POST['addwhatwedo'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $status=$_POST['status'];
    $img= $_FILES['img'];
   $imgName=$img['name'];
   $imgTmp=$img['tmp_name'];
   $t=time();
   $nowdate=date('y-m-d',$t);
   $rendomString="$nowdate".hexdec(uniqid());
   $exe=pathinfo($imgName,PATHINFO_EXTENSION);
   $imgNew = "$rendomString.$exe";
   $imgNewDb = "harbor-master/fonts/flaticon/svg/";
   $imgNewDb .= "$rendomString.$exe";
    Add("whatwedo","title,description,img,status","' $title','$description','$imgNewDb','$status'","whatWedo.php");
    move_uploaded_file($imgTmp ,"../harbor-master/fonts/flaticon/svg/$imgNew");
   
}
if(isset($_POST['addsliders'])){
    $status=$_POST['status'];
    $img= $_FILES['img'];
   $imgName=$img['name'];
   $imgTmp=$img['tmp_name'];
   $t=time();
   $nowdate=date('y-m-d',$t);
   $rendomString="$nowdate".hexdec(uniqid());
   $exe=pathinfo($imgName,PATHINFO_EXTENSION);
   $imgNew = "$rendomString.$exe";
   $imgNewDb = "harbor-master/images/";
   $imgNewDb .= "$rendomString.$exe";
    Add("sliders","img,status","'$imgNewDb','$status'","sliders.php");
    move_uploaded_file($imgTmp ,"../harbor-master/images/$imgNew");
}
if(isset($_POST['addwork'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $status=$_POST['status'];
    $img= $_FILES['img'];
   $imgName=$img['name'];
   $imgTmp=$img['tmp_name'];
   $t=time();
   $nowdate=date('y-m-d',$t);
   $rendomString="$nowdate".hexdec(uniqid());
   $exe=pathinfo($imgName,PATHINFO_EXTENSION);
   $imgNew = "$rendomString.$exe";
   $imgNewDb = "harbor-master/images/";
   $imgNewDb .= "$rendomString.$exe";
    Add("works","title,description,img,status","' $title','$description','$imgNewDb','$status'","works.php");
    move_uploaded_file($imgTmp ,"../harbor-master/images/$imgNew");
}
if(isset($_POST['addtestimonial'])){
    $title=$_POST['name'];
    $description1=$_POST['description1'];
    $description2=$_POST['description2'];
    $status=$_POST['status'];
    Add("testimonials","name,description1,description2,status","'$title','$description1','$description2','$status'","testimonials.php");
}

if(isset($_POST['addfeatures'])){
    $title=$_POST['name'];
    $status=$_POST['status'];
    Add("features","name,status","' $title','$status'","features.php");
}
if(isset($_POST['addConst_sliders'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $link=$_POST['link'];
    $status=$_POST['status'];
    Add("const_sliders","title,description,link,status","' $title','$description','$link','$status'","const_sliders.php");
}
if(isset($_POST['addcontact'])){
    $title=$_POST['name'];
    $icon=$_POST['icon'];
    $status=$_POST['status'];
    Add("contacts","name,icon,status","'$title','$icon','$status'","Contacts.php");
}
if(isset($_POST['addabout'])){
    $description=$_POST['description'];
    Add("aboutus","description","'$description'","aboutus.php");
}
if(isset($_POST['register'])){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    Add("masseges","firstName,lastName,email,massege","' $firstName','$lastName','$email','$message'","../user/contact.php");
    if(mysqli_query($conn,$add)){
        $_SESSION['Add']="$table send succssfuly";
        header("location:../contact.php");
        
    }else{
        echo mysqli_error($conn);
    }
    }
if(isset( $_GET['action']) && $_GET['action']=="deleteSliders"){
    $id= $_GET['id'];
    $sliders= getwhere("sliders","id=$id");
    $sliders= $sliders[0]['img'];
    delete("sliders",$id,"sliders.php");
    unlink("../$sliders");
}
if(isset( $_GET['action']) && $_GET['action']=="deleteconst_slider"){
    $id= $_GET['id'];
    delete("const_sliders",$id,"const_sliders.php");
}





if(isset( $_GET['action']) && $_GET['action']=="deleteMessage"){
    $id= $_GET['id'];
    delete("masseges",$id,"message.php");
}


if(isset( $_GET['action']) && $_GET['action']=="deleteWork"){
    $id= $_GET['id'];
    $work= getwhere("works","id=$id");
    $work= $work[0]['img'];
    delete("works",$id,"works.php");
    unlink("../$work");

}
if(isset( $_GET['action']) && $_GET['action']=="deleteWhatwedo"){
    $id= $_GET['id'];
    $whatwedo= getwhere("whatwedo","id=$id");
    $whatwedo= $whatwedo[0]['img'];
    delete("whatwedo",$id,"whatWedo.php");
    unlink("../$whatwedo");

}
if(isset( $_GET['action']) && $_GET['action']=="deleteTestimonial"){
    $id= $_GET['id'];
    delete("testimonials",$id,"testimonials.php");
}
if(isset( $_GET['action']) && $_GET['action']=="deletefeatures"){
    $id= $_GET['id'];
    delete("features",$id,"features.php");
}
if(isset( $_GET['action']) && $_GET['action']=="deletecontacts"){
    $id= $_GET['id'];
    delete("contacts",$id,"contacts.php");
}
if(isset( $_GET['action']) && $_GET['action']=="deleteaboutus"){
    $id= $_GET['id'];
    delete("aboutus",$id,"aboutus.php");
}
if(isset($_POST['editwork'])){
    $title= $_POST['title'];
    $description= $_POST['description'];
    $status=$_POST['status'];
    $img= $_FILES['img'];
    $id= $_POST['id'];
    $works= getwhere("works","id = $id");
    $worksImg=$works[0]['img'];
    if(isset($_FILES['img']['name'])!=" " || strlen($_FILES['img']['name'] > 0)){   
   $imgName=$img['name'];
   $imgTmp=$img['tmp_name'];
   $t=time();
   $nowdate=date('y-m-d',$t);
   $rendomString="$nowdate".hexdec(uniqid());
   $exe=pathinfo($imgName,PATHINFO_EXTENSION);
   $imgNew = "$rendomString.$exe";
   $imgNewDb = "harbor-master/images/";
   $imgNewDb .= "$rendomString.$exe";
        Edit("works","title='$title', `description`='$description', img='$imgNewDb',`status`='$status'",$id,"works.php");
        move_uploaded_file($imgTmp ,"../harbor-master/images/$imgNew");
        unlink("../$work");
    }else{
        
        Edit("works","title='$title', `description`='$description', img='$slidersImg',`status`='$status'",$id,"works.php");
    }  
}
if(isset($_POST['editsliders'])){
    $status=$_POST['status'];
    $img= $_FILES['img'];
    $id= $_POST['id'];
    $sliders= getwhere("sliders","id = $id");
    $slidersImg=$sliders[0]['img'];
    if(isset($_FILES['img']['name'])!=" " || strlen($_FILES['img']['name'] > 0)){   
   $imgName=$img['name'];
   $imgTmp=$img['tmp_name'];
   $t=time();
   $nowdate=date('y-m-d',$t);
   $rendomString="$nowdate".hexdec(uniqid());
   $exe=pathinfo($imgName,PATHINFO_EXTENSION);
   $imgNew = "$rendomString.$exe";
   $imgNewDb = "harbor-master/images/";
   $imgNewDb .= "$rendomString.$exe";
        Edit("sliders", "img='$imgNewDb',`status`='$status'",$id,"sliders.php");
        move_uploaded_file($imgTmp ,"../harbor-master/images/$imgNew");
        unlink("../$sliders");
    }else{
        
        Edit("sliders"," img='$slidersImg',`status`='$status'",$id,"sliders.php");
    }  
}
if(isset($_POST['editwhatwedo'])){
    $title= $_POST['title'];
    $description= $_POST['description'];
    $status=$_POST['status'];
    $img= $_FILES['img'];
    $id= $_POST['id'];
    $whatwedo= getwhere("whatwedo","id = $id");
    $whatwedoImg=$whatwedo[0]['img'];
    if(isset($_FILES['img']['name'])!=" " || strlen($_FILES['img']['name'] > 0)){   
   $imgName=$img['name'];
   $imgTmp=$img['tmp_name'];
   $t=time();
   $nowdate=date('y-m-d',$t);
   $rendomString="$nowdate".hexdec(uniqid());
   $exe=pathinfo($imgName,PATHINFO_EXTENSION);
   $imgNew = "$rendomString.$exe";
   $imgNewDb = "harbor-master/images/";
   $imgNewDb .= "$rendomString.$exe";
        Edit("whatwedo", "title='$title', `description`='$description', img='$imgNewDb',`status`='$status'",$id,"whatWedo.php");
        move_uploaded_file($imgTmp ,"../harbor-master/images/$imgNew");
        unlink("../$whatwedo");
    }else{
        
        Edit("whatwedo","title='$title', `description`='$description', img='$slidersImg',`status`='$status'",$id,"whatWedo.php");
    }  
}
if(isset($_POST['editTestimonial'])){
    $name= $_POST['name'];
    $description1= $_POST['description1'];
    $description2= $_POST['description2'];
    $status=$_POST['status'];
    $id= $_POST['id'];
    Edit("testimonials","name='$name', `description1`='$description1',`description2`='$description2', `status`='$status'",$id,"testimonials.php");
}
if(isset($_POST['editfeatures'])){
    $name= $_POST['name'];
    $status=$_POST['status'];
    $id= $_POST['id'];
    Edit("features","name='$name', `status`='$status'",$id,"features.php");
}
if(isset($_POST['editcontacts'])){
    $name= $_POST['name'];
    $icon= $_POST['icon'];
    $status=$_POST['status'];
    $id= $_POST['id'];
    Edit("contacts","name='$name', `icon`='$icon', `status`='$status'",$id,"contacts.php");

}


if(isset($_POST['editconst_sliders'])){
    $title= $_POST['title'];
    $description= $_POST['description'];
    $status=$_POST['status'];
    $link= $_POST['link'];
    $id= $_POST['id'];




    Edit("const_sliders","title='$title', `description`='$description',link='$link', `status`='$status'",$id,"const_sliders.php");

}
if(isset($_POST['editaboutus'])){
    $description= $_POST['description'];
    $id= $_POST['id'];
    Edit("aboutus"," `description`='$description'",$id,"aboutus.php");
}

function login($table,$where){
    global $conn;
    global $count;
    global $passwordDB;
    $loginAdmin="SELECT * FROM $table WHERE $where";
    $login=mysqli_query($conn,$loginAdmin);
    $loginAdminData= mysqli_fetch_assoc($login);
    $passwordDB= $loginAdminData['password'];
    $count= mysqli_num_rows($login);
    return($loginAdminData);
}

if(isset($_POST['login'])){
    $email= $_POST['email'];
    $password= $_POST['password'];
    login("admins","email='$email'");
    if($count > 0){
        if(password_verify($password,$passwordDB)){
            $_SESSION['login']= true;
            header('location:../../admin/index.php');
        }else{
            $_SESSION['error']="Password Error";
        header('location:../../admin/login.php');
        }
    }else{
        $_SESSION['error']="Email Error";
        header('location:../../admin/login.php');
    }

 }else{
    echo mysqli_error($conn);
}









?>