<?php 
include('1connection.php'); 


if(isset($_POST['btnlogin'])){

       $user=$_POST['username'];
       $pass=$_POST['password'];
 
       $s = mysqli_query($con,"SELECT * FROM account where pass='$pass' and user = '$user'") or die(mysqli_errno($con));
       $r = mysqli_fetch_object($s);
       $count=mysqli_num_rows($s);
       if($count>0){
        $_SESSION['account']=$r->accountID;

          //admin Link
        echo"<script type='text/javascript'>window.location.replace('index.php');('Login Successfully!')</script>";  
        }
       else
       {
        echo"<script type='text/javascript'>window.location.replace('login.php');('Wrong username or paassword!');</script>";
       }      
}

if(isset($_POST['btnaddtocart'])){ 

           
            $quant=$_POST['quant'];
            $itemID=$_POST['itemID'];
            $accountID=$_POST['accountID'];
            date_default_timezone_set('Asia/Manila');
            $date = date('F d, Y h:i:sa', time());

            $item=mysqli_query($con,"SELECT * from book where book_id = '$itemID'")or die(mysqli_error($con));
            $rowitem=mysqli_fetch_object($item);
            $message= $rowitem->book_title." is added to your my booked list.";
            $status='2';
            $minus=mysqli_query($con,"UPDATE book set book_available = book_available-'$quant'  WHERE book_id='$itemID'");
            $plus=mysqli_query($con,"UPDATE book set  book_available = book_available + '$quant' WHERE book_id='$itemID'");
            $addto=mysqli_query($con,"INSERT into cart ( 
                cartCOUNT,
                accountID,
                itemID,
                orderID,
                cartDATE, 
                cartPENDING, 
                cartSTATUS
            ) VALUES(
                '$quant',
                '$accountID',
                '$itemID',
                '1',
                '$date',
                '$date',
                '$status'
            )")or die(mysqli_error($con));

            $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$accountID',
                'buyer',            
                '$message',
                '$date'
            ) ");
            if($addto)
            {
                echo"<script type='text/javascript'>window.location.replace('cart.php');</script>";  
            
            }
}
if(isset($_POST['btncomfirm2'])){ 

           
            $iddd=$_POST['iddd'];
           
            date_default_timezone_set('Asia/Manila');
             $date2 = date('F d, Y h:i:sa', time());
            $date = date('mdYhi', time());
            $newID="RPD-LRC".$date;
            $message= "Borrowed ID No." . $newID." is successfully place book.!";
            $delll=mysqli_query($con,"UPDATE cart SET orderID = '$newID' WHERE accountID ='$iddd' AND orderID = '1' ");
            $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$iddd',
                'buyer',            
                '$message',
                '$date2'
            ) ");
            if($delll)
            {
                echo"<script type='text/javascript'>window.location.replace('viewprofile.php');('Successfully Placed Borrowed Book Please Go To Librian To Get Your Book!')</script>";  
            }
}




if(isset($_POST['btnupdateaddress']))
{
         
            $lat=$_POST['lat'];
            $long=$_POST['long'];
            $accountID=$_POST['accountID'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());
            if(empty($long) || empty($lat)  || empty($accountID) ){
            $message = 'Updating your address failed, Some info is missing!';    
            }else{
            $message = 'You Have Successfully Updated Your Address!';
            $seller=mysqli_query($con,"SELECT account.* from account where accountID = '$accountID'")or die(mysqli_error($con));
            $rowseller=mysqli_fetch_object($seller); 
           
            $editprofile=mysqli_query($con,"UPDATE account set 
                lat = '$lat',
                longi = '$long'
            WHERE 
                accountID='$accountID'
            ")or die(mysqli_error($con));
             
            }
            $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$accountID',
                'buyer',            
                '$message',
                '$txtdate'
            ) ");
            echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('$message');</script>";  
            
            
}

if(isset($_POST['updateimage']))
{
         
            $accountID=$_POST['accountID'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());

            if(isset($_FILES["imageupload"]['name'])&&$_FILES["imageupload"]['name']!='')
            {
                $fileName = $_FILES["imageupload"]['name'];
                $tmpName  = $_FILES["imageupload"]['tmp_name']; 
                $fileSize = $_FILES["imageupload"]['size'];
                $fileType = $_FILES["imageupload"]['type'];

                function getExtension($str)
                         {
                             $i = strrpos($str,".");
                             if (!$i) { return ""; }
                             $l = strlen($str) - $i;
                             $ext = substr($str,$i+1,$l);
                             return $ext;
                         }
                    $extension = getExtension($fileName);
                    $extension = strtolower($extension);
                    $final_filename = time().".".$extension;
                    $copied = move_uploaded_file($tmpName, "img/user/".$final_filename)or die();
                    $message='Successfully Changing Your Avatar!';
            }
            else
            {
                $final_filename='null.png';
                $message='Unsuccessfully Changing Your Avatar!';
            } 

            
            $add=mysqli_query($con,"UPDATE account set 
                image = '$final_filename' 
            WHERE 
                accountID='$accountID'
            ")or die(mysqli_error($con));

             $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$accountID',
                'buyer',            
                '$message',
                '$txtdate'
            ) ");
         
            if($add)
            {
                echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('$message');</script>";  
            
            }
}

if(isset($_POST['btneditprofile']))
{
         
            $name=$_POST['name'];
            $number=$_POST['number'];
            $no=$_POST['no'];
            // $address=$_POST['add'];
            $region=$_POST['region2'];
            $province=$_POST['province2'];
            $city=$_POST['city2'];
            $barangay=$_POST['barangay2'];
            $address=$no.", ".$barangay.", ".$city.", ".$province.", Philippines";
            $accountID=$_POST['accountID'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());

            if(empty($name) || empty($number)  || empty($accountID) ){
            $message = 'Updating profile info failed, Some Info is Missing!';    
            }else{

            $message = 'You Have Successfully Updated Your Profile Info!';
            $seller=mysqli_query($con,"SELECT * from account where accountID = '$accountID'")or die(mysqli_error($con));
            $rowseller=mysqli_fetch_object($seller); 
            
            $editprofile=mysqli_query($con,"UPDATE account set 
                name = '$name',
                mobilenumber = '$number',
               
                addresshead= '$address'
            WHERE 
                accountID='$accountID'
            ")or die(mysqli_error($con));
            }

            $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$accountID',
                'buyer',            
                '$message',
                '$txtdate'
            ) ");

            
            echo"<script type='text/javascript'>window.location.replace('viewprofile.php');('$message');</script>";  
            
            
}
if(isset($_POST['btnupdatesecurity']))
{
         
            $username=$_POST['username'];
            $password=$_POST['password'];
            $accountID=$_POST['accountID'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());
            if(empty($username) || empty($password)  || empty($accountID) ){
            $message = 'Updating your security failed, Some info is missing!';    
            }else{
            $message = 'You Have Successfully Updated Your Security!';
            $seller=mysqli_query($con,"SELECT * from account where accountID = '$accountID'")or die(mysqli_error($con));
            $rowseller=mysqli_fetch_object($seller); 
            if ($rowseller->sellerpass==$password){
            $message = 'Updating your security failed, You entered same old password!'; 
            }else{
            $editprofile=mysqli_query($con,"UPDATE account set 
                pass = '$username',
                user = '$password'
            WHERE 
                accountID='$accountID'
            ")or die(mysqli_error($con));
            }   
            }
            $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$accountID',
                'buyer',            
                '$message',
                '$txtdate'
            ) ");
            echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('$message');</script>";  
            
            
}
 if(isset($_POST['deletecartitem']))
        { 

            $id=$_POST['id'];
            $count=$_POST['count'];
            $itemno=$_POST['itemno'];
           
            
            $delll=mysqli_query($con,"DELETE FROM cart WHERE cartID='$itemno'");
            $filterdashboard=mysqli_query($con,"UPDATE item set itemQUANTITY = itemQUANTITY+'$count' , itemTOTALSELL = itemTOTALSELL - '$count' WHERE itemID='$id'");
         
            if($delll)
            {
               $_SESSION['mess']='add';
                echo"<script type='text/javascript'>window.location.replace('cart.php');</script>";  
            
            }
        }

if(isset($_POST['btnsubquant']))
{
         
            $cartID=$_POST['cartID'];
            $quant=$_POST['quant'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());

            $carts=mysqli_query($con,"SELECT * from cart where cartID = '$cartID'")or die(mysqli_error($con));
            $rowcarts=mysqli_fetch_object($carts);

            if(empty($cartID) || ($rowcarts->cartCOUNT =='1')   ){
            $message = 'Updating failed';  
            echo"<script type='text/javascript'>window.location.replace('cart.php');alert('$message');</script>";   
            }else{
           
           
            $cart=mysqli_query($con,"UPDATE cart set cartCOUNT 
                 = cartCOUNT-1
            WHERE 
                cartID='$cartID'
            ")or die(mysqli_error($con));
             
            }
           
            echo"<script type='text/javascript'>window.location.replace('cart.php');</script>";  
            
            
}

if(isset($_POST['btnaddquant']))
{
         
            $cartID=$_POST['cartID'];
            $quant=$_POST['quant'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());

            $carts=mysqli_query($con,"SELECT * from cart where cartID = '$cartID'")or die(mysqli_error($con));
            $rowcarts=mysqli_fetch_object($carts);

            if(empty($cartID)   ){
            $message = 'Updating failed';  
            echo"<script type='text/javascript'>window.location.replace('cart.php');alert('$message');</script>";   
            }else{
           
           
            $cart=mysqli_query($con,"UPDATE cart set cartCOUNT 
                 = cartCOUNT+1
            WHERE 
                cartID='$cartID'
            ")or die(mysqli_error($con));
             
            }
           
            echo"<script type='text/javascript'>window.location.replace('cart.php');</script>";  
            
            
}
if(isset($_POST['btnrecieved']))
{
            
            $orderID=$_POST['orderID'];
            $accountID=$_POST['accountID'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());

            $orderIDmodified =$orderID."-".$accountID;

            if(empty($orderID) || empty($accountID)  || empty($sellerID) ){
            $message = 'Returned Book failed, Some info is missing!';    
            }else{
            $message = 'You Have Successfully change status from Borrowed to Returned the Transaction with ID#: '.$orderIDmodified;
            
            $notification = 'Your Transaction ID'.$orderID.'is change the status by you from from Borrowed to Returned!';

            
            $update=mysqli_query($con,"UPDATE cart set 
                cartSTATUS = '5',
                cartRECIEVED = '$txtdate'
            WHERE 
                orderID='$orderID' 
            ")or die(mysqli_error($con));
            

            }

            if($update){
            $insertNOTIFICATION=mysqli_query($con,"INSERT into notification (
                notificationCLIENTID,  
                notificationCLIENTTYPE,
                notificationMESSAGE,
                notificationDATE
            ) VALUES(
                '$accountID',
                'customer',            
                '$notification',
                '$txtdate'
            ) ");

            echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('$message');</script>";  
            }else{
            echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('There is an error in the system, Please  try again later!');</script>";   
            }

            
}

if(isset($_POST['btncancel']))
{
            
            $orderID=$_POST['orderID'];
            $accountID=$_POST['accountID'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());

            $orderIDmodified =$orderID."-".$accountID;

            if(empty($orderID) || empty($accountID) ){
            $message = 'Cancel book failed, Some info is missing!';    
            }else{
            $message = 'You Have Successfully change status  form Borrowed to Cancelled  with the Transaction ID#: '.$orderIDmodified;


            $notification = 'Your Transaction ID'.$orderID.'is change the status by you to Book Cancelled!';

            
            $update=mysqli_query($con,"UPDATE cart set 
                cartSTATUS = '6',
                cartRECIEVED = '$txtdate'
            WHERE 
                orderID='$orderID' 
            ")or die(mysqli_error($con));
            

            }

            if($update){
            $insertNOTIFICATION=mysqli_query($con,"INSERT into notification (
                notificationCLIENTID,  
                notificationCLIENTTYPE,
                notificationMESSAGE,
                notificationDATE
            ) VALUES(
                '$accountID',
                'customer',            
                '$notification',
                '$txtdate'
            ) ");

            echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('$message');</script>";  
            }else{
            echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('There is an error in the system, Please  try again later!');</script>";   
            }

            
}

if(isset($_POST['btnsearch']))
{
            
            $search=$_POST['search'];
            if(empty($search)){
             echo"<script type='text/javascript'>window.location.replace('shop.php');</script>";
            }else{
             echo"<script type='text/javascript'>window.location.replace('shopsearch.php?info=$search');</script>";      
            }
           
            
         

            
}

if(isset($_POST['btnchat']))
{
            
            $id=$_POST['id'];
            $message=$_POST['message'];
            
           
            $chat=mysqli_query($con,"INSERT into chat (
                accountID,  
                adminID,
                chatPOS,
                chatDES
            ) VALUES(
                '$id',
                '0',            
                'right',
                '$message'
            ) ");
         
             if($chat){
             echo"<script type='text/javascript'>window.location.replace('messages.php');</script>";
            }else{
             echo"<script type='text/javascript'>window.location.replace('messages.php');</script>";      
            }
            
}
?>