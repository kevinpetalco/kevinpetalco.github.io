<?php include('../1connection.php'); ?>
<?php 
if(isset($_POST['updateimage']))
{
         
            $sellerID=$_POST['sellerID'];
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
                    $copied = move_uploaded_file($tmpName, "../img/user/".$final_filename)or die();
                    $message='Successfully Changing Your Avatar!';
            }
            else
            {
                $final_filename='null.png';
                $message='Unsuccessfully Changing Your Avatar!';
            } 

            
            $add=mysqli_query($con,"UPDATE seller set 
                sellerimage = '$final_filename' 
            WHERE 
                sellerID='$sellerID'
            ")or die(mysqli_error($con));

             $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$sellerID',
                'seller',            
                '$message',
                '$txtdate'
            ) ");
         
            if($add)
            {
                echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('$message');</script>";  
            
            }
}

if(isset($_POST['btnitemadds']))
        { 

           
            $name=$_POST['name'];
            $author=$_POST['author'];
            $publisher=$_POST['publisher'];
            $callnumber=$_POST['callnumber'];
            $quantity=$_POST['quantity'];
            $category=$_POST['category'];
            $description=$_POST['description'];
            $department=$_POST['department'];
            $abstract=$_POST['abstract'];
            $sellerID=$_POST['sellerID'];
            $accession=$_POST['accession'];
            $price=$_POST['price'];
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
                    $copied = move_uploaded_file($tmpName, "../img/product/".$final_filename)or die();
            }
            else
            {
                    $final_filename='null.png';
            }

              
            date_default_timezone_set('Asia/Manila');
            $date = date('m/d/Y h:i:s a', time());
            for($x=0;$x<$quantity;$x++){
            $add=mysqli_query($con,"INSERT book (  
                book_title,  
                book_author,
                book_publisher ,
                book_abstract, 
                book_callnumber,
                category_id,
                department_id,
                book_image1,
                book_available,
                book_fines,
                totalborrow,
                useruploaded,
                book_accession
            ) VALUES(
                '$name',
                '$author',            
                '$publisher',
                '$abstract',
                '$callnumber',
                '$category',
                '$department',
                '$final_filename',          
                '$quantity',        
                '$price',
                '0',
                '$sellerID',
                '$accession'
            ) ");
            $accession++;}
         
            if($add)
            {
                echo"<script type='text/javascript'>window.location.replace('addnewproduct.php');('Successfully Added!')</script>";  
            
            }
}

if(isset($_POST['btneditprofile']))
{
         
            $name=$_POST['name'];
            $number=$_POST['number'];
            $email=$_POST['email'];
            $sellerID=$_POST['sellerID'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());

            if(empty($name) || empty($number) || empty($email) || empty($sellerID) ){
            $message = 'Updating profile info failed, Some Info is Missing!';    
            }else{

            $message = 'You Have Successfully Updated Your Profile Info!';
            $seller=mysqli_query($con,"SELECT seller.* from seller where sellerID = '$sellerID'")or die(mysqli_error($con));
            $rowseller=mysqli_fetch_object($seller); 
            
            $editprofile=mysqli_query($con,"UPDATE seller set 
                sellername = '$name',
                sellermobilenumber = '$number',
                selleremail = '$email'
            WHERE 
                sellerID='$sellerID'
            ")or die(mysqli_error($con));
            }

            $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$sellerID',
                'seller',            
                '$message',
                '$txtdate'
            ) ");

            
            echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('$message');</script>";  
            
            
}

if(isset($_POST['btnupdatesecurity']))
{
         
            $username=$_POST['username'];
            $password=$_POST['password'];
            $sellerID=$_POST['sellerID'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());
            if(empty($username) || empty($password)  || empty($sellerID) ){
            $message = 'Updating your security failed, Some info is missing!';    
            }else{
            $message = 'You Have Successfully Updated Your Security!';
            $seller=mysqli_query($con,"SELECT seller.* from seller where sellerID = '$sellerID'")or die(mysqli_error($con));
            $rowseller=mysqli_fetch_object($seller); 
            if ($rowseller->sellerpass==$password){
            $message = 'Updating your security failed, You entered same old password!'; 
            }else{
            $editprofile=mysqli_query($con,"UPDATE seller set 
                sellerpass = '$username',
                selleruser = '$password'
            WHERE 
                sellerID='$sellerID'
            ")or die(mysqli_error($con));
            }   
            }
            $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$sellerID',
                'seller',            
                '$message',
                '$txtdate'
            ) ");
            echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('$message');</script>";  
            
            
}



if(isset($_POST['btnacceptorder']))
{
            $cartID=$_POST['cartID'];
            $itemID=$_POST['itemID'];
            $orderID=$_POST['orderID'];
            $accountID=$_POST['accountID'];
            $sellerID=$_POST['sellerID'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());
            $orderIDmodified =$orderID."-".$accountID;

            if(empty($orderID) || empty($accountID) ){
            $message = 'Accepting Transaction failed, Some info is missing!';    
            }else{
            $message = 'You Have Successfully Accepted the Transaction with ID#: '.$orderIDmodified;
            
            $seller=mysqli_query($con,"SELECT seller.* from seller where sellerID = '$sellerID'")or die(mysqli_error($con));
            $rowseller=mysqli_fetch_object($seller);

            $item=mysqli_query($con,"SELECT book.* from book where book_id = '$itemID'")or die(mysqli_error($con));
            $rowitem=mysqli_fetch_object($item);
            $notification = 'Your Book name'.$rowitem->book_title;

            
            $editprofile=mysqli_query($con,"UPDATE cart set 
                orderID = '$orderIDmodified',
                cartSTATUS = '3',
                cartACCEPTED = '$txtdate'
            WHERE 
                cartID='$cartID'
            ")or die(mysqli_error($con));
            

            }
            $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$sellerID',
                'seller',            
                '$message',
                '$txtdate'
            ) ");
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
            echo"<script type='text/javascript'>window.location.replace('pending.php');alert('$message');</script>";  
            
            
}

if(isset($_POST['btnorderpickup']))
{
            
            $orderID=$_POST['orderID'];
            $accountID=$_POST['accountID'];
            $sellerID=$_POST['sellerID'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());

            $orderIDmodified =$orderID."-".$accountID."-".$sellerID;

            if(empty($orderID) || empty($accountID)  || empty($sellerID) ){
            $message = 'Pick-Up order failed, Some info is missing!';    
            }else{
            $message = 'You Have Successfully pick-up the Order with ID#: '.$orderIDmodified;
            
            $seller=mysqli_query($con,"SELECT seller.* from seller where sellerID = '$sellerID'")or die(mysqli_error($con));
            $rowseller=mysqli_fetch_object($seller);

            $notification = 'Your order ID'.$orderID.'is change the status by seller from accepted to already pickup!';

            
            $update=mysqli_query($con,"UPDATE cart set 
                cartSTATUS = '7',
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

            echo"<script type='text/javascript'>window.location.replace('pickup.php');alert('$message');</script>";  
            }else{
            echo"<script type='text/javascript'>window.location.replace('accepted.php');alert('There is an error in the system, Please  try again later!');</script>";   
            }

            $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$sellerID',
                'seller',            
                '$message',
                '$txtdate'
            ) ");
}

if(isset($_POST['btndelivery']))
{
            
            $orderID=$_POST['orderID'];
            $accountID=$_POST['accountID'];
            $sellerID=$_POST['sellerID'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());

            $orderIDmodified =$orderID."-".$accountID."-".$sellerID;

            if(empty($orderID) || empty($accountID)  || empty($sellerID) ){
            $message = 'Borrowed order failed, Some info is missing!';    
            }else{
            $message = 'You Have Successfully change status from Accepted to Borrowed the Transaction with ID#: '.$orderIDmodified;
            
            $seller=mysqli_query($con,"SELECT seller.* from seller where sellerID = '$sellerID'")or die(mysqli_error($con));
            $rowseller=mysqli_fetch_object($seller);

            $notification = 'Your Transaction ID'.$orderID.'is change the status by'.$rowseller->sellername.' from accepted to Delivery!';

            
            $update=mysqli_query($con,"UPDATE cart set 
                cartSTATUS = '4',
                cartDELIVERY = '$txtdate'
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

            echo"<script type='text/javascript'>window.location.replace('shipped.php');alert('$message');</script>";  
            }else{
            echo"<script type='text/javascript'>window.location.replace('accepted.php');alert('There is an error in the system, Please  try again later!');</script>";   
            }

            $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$sellerID',
                'seller',            
                '$message',
                '$txtdate'
            ) ");
}

if(isset($_POST['btnrecieved']))
{
            
            $orderID=$_POST['orderID'];
            $accountID=$_POST['accountID'];
            $sellerID=$_POST['sellerID'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());

            $orderIDmodified =$orderID."-".$accountID."-".$sellerID;

            if(empty($orderID) || empty($accountID)  || empty($sellerID) ){
            $message = 'Returned Book failed, Some info is missing!';    
            }else{
            $message = 'You Have Successfully change status from Borrowed to Returned the Transaction with ID#: '.$orderIDmodified;
            
            $seller=mysqli_query($con,"SELECT seller.* from seller where sellerID = '$sellerID'")or die(mysqli_error($con));
            $rowseller=mysqli_fetch_object($seller);

            $notification = 'Your Transaction ID'.$orderID.'is change the status by Librarian from Borrowed to Returned!';

            
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

            echo"<script type='text/javascript'>window.location.replace('Delivered.php');alert('$message');</script>";  
            }else{
            echo"<script type='text/javascript'>window.location.replace('shipped.php');alert('There is an error in the system, Please  try again later!');</script>";   
            }

            $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$sellerID',
                'seller',            
                '$message',
                '$txtdate'
            ) ");
}


if(isset($_POST['btnupdateaddress']))
{
         
            $lat=$_POST['lat'];
            $long=$_POST['long'];
            $sellerID=$_POST['sellerID'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());
            if(empty($long) || empty($lat)  || empty($sellerID) ){
            $message = 'Updating your address failed, Some info is missing!';    
            }else{
            $message = 'You Have Successfully Updated Your Address!';
            $seller=mysqli_query($con,"SELECT seller.* from seller where sellerID = '$sellerID'")or die(mysqli_error($con));
            $rowseller=mysqli_fetch_object($seller); 
           
            $editprofile=mysqli_query($con,"UPDATE seller set 
                sellerlatitude = '$lat',
                sellerlongitude = '$long'
            WHERE 
                sellerID='$sellerID'
            ")or die(mysqli_error($con));
             
            }
            $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                activitylogUSERID,  
                activitylogUSERTYPE,
                activitylogDESCRIPTION,
                activitylogDATE
            ) VALUES(
                '$sellerID',
                'seller',            
                '$message',
                '$txtdate'
            ) ");
            echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('$message');</script>";  
            
            
}

if(isset($_POST['btncreateaccount']))
{
            $name=$_POST['name'];
            $number=$_POST['number'];
            $email=$_POST['email'];

            $username=$_POST['username'];
            $password=$_POST['password'];
            
            $lat=$_POST['lat'];
            $lng=$_POST['lng'];

             $no=$_POST['no'];
            $region=$_POST['region2'];
            $province=$_POST['province2'];
            $city=$_POST['city2'];
            $barangay=$_POST['barangay2'];

             $address=$no.", ".$barangay.", ".$city.", ".$province.", Philippines";

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
                    $copied = move_uploaded_file($tmpName, "../img/user/".$final_filename)or die();
                    
            }
            else
            {
                $final_filename='null.png';
                
            }


            if(empty($username) || empty($password)  ){
            $message = 'Failed to create account!';    
            }else{
            $message = 'You Have Successfully Created your Account';
           
            
            $insertaccount=mysqli_query($con,"INSERT into seller (
                sellername,  
                selleruser,
                sellerpass,
                sellerimage,
                sellerlatitude,  
                sellerlongitude,
                sellermobilenumber,
                sellerdatecreated,
                selleremail,
                sellerSTATUS,
                selleraddress
            ) VALUES(
                '$name',
                '$username',            
                '$password',
                '$final_filename',
                '$lat',
                '$lng',            
                '$number',
                '$txtdate',
                '$email',
                'active',
                '$address'
            ) ");
             
            }
            
            echo"<script type='text/javascript'>window.location.replace('login.php');('$message');</script>";  
            
            
}
if(isset($_POST['btnupdatesproducts']))
{
         
            $id=$_POST['id'];
            $name=$_POST['name'];
            $author=$_POST['author'];
            $publisher=$_POST['publisher'];
            $callnumber=$_POST['callnumber'];
            $quantity=$_POST['quantity'];
            $category=$_POST['category'];
            $department=$_POST['department'];
            $abstract=$_POST['abstract'];
            $price=$_POST['price'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());

           
            $add=mysqli_query($con,"UPDATE book set 
                book_title='$name',  
                book_author='$author',
                book_publisher ='$publisher',
                book_abstract='$abstract', 
                book_callnumber='$callnumber',
                category_id='$category',
                department_id='$department',
                book_available='$quantity',
                book_fines='$price'
            WHERE 
                book_id='$id'
            ")or die(mysqli_error($con));

            
         
            if($add)
            {
                echo"<script type='text/javascript'>window.location.replace('viewproduct.php?itemid=$id');('You have succesfully update this book info!');</script>";  
            
            }
}
if(isset($_POST['btnupdatesproductsimg']))
{
            $id=$_POST['id'];
            $iamgedefault=$_POST['iamgedefault'];
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
                    $copied = move_uploaded_file($tmpName, "../img/product/".$final_filename)or die();
                    $message='Successfully Changing Product Image!';
            }
            else
            {
                $final_filename='$iamgedefault';
                $message='Unsuccessfully Changing Product Imagee!';
            } 

            
            $add=mysqli_query($con,"UPDATE book set 
                book_image1 = '$final_filename' 
            WHERE 
                book_id='$id'
            ")or die(mysqli_error($con));

         
            if($add)
            {
                echo"<script type='text/javascript'>window.location.replace('viewproduct.php?itemid=$id');alert('$message');</script>";  
            
            }
}
if(isset($_POST['deactivethis']))
{

            $accountID=$_POST['accountid'];
            $txtdate = date('Y-m-d H:i:s');

            $add=mysqli_query($con,"UPDATE account set 
                                    status = 'blocked' 
                                    WHERE 
                                    accountID='$accountID'");
            if($add)
            {
                echo"<script type='text/javascript'>window.location.replace('viewcustomer.php?customerID=$accountID');</script>";  
            }
}
if(isset($_POST['activethis']))
{

            $accountID=$_POST['accountid'];
            $txtdate = date('Y-m-d H:i:s');

            $add=mysqli_query($con,"UPDATE account set 
                                    status = 'active' 
                                    WHERE 
                                    accountID='$accountID'");
            if($add)
            {
                echo"<script type='text/javascript'>window.location.replace('viewcustomer.php?customerID=$accountID');</script>";  
                 
            }
}
if(isset($_POST['btnmissing']))
{
            
            $orderID=$_POST['orderID'];
            $accountID=$_POST['accountID'];
            $sellerID=$_POST['sellerID'];
            $ammount=$_POST['ammount'];
            date_default_timezone_set('Asia/Manila');
            $txtdate = date('F d, Y h:i:sa', time());

            $orderIDmodified =$orderID."-".$accountID."-".$sellerID;

            if(empty($orderID) || empty($accountID)  || empty($sellerID) ){
            $message = 'Missing Book failed, Some info is missing!';    
            }else{
            $message = 'You Have Successfully change status from Borrowed to Missing the Transaction with ID#: '.$orderIDmodified;
            
            $seller=mysqli_query($con,"SELECT seller.* from seller where sellerID = '$sellerID'")or die(mysqli_error($con));
            $rowseller=mysqli_fetch_object($seller);

            $notification = 'Your Transaction ID'.$orderID.'is change the status by Librarian from Borrowed to Missing!';

            
            $update=mysqli_query($con,"UPDATE cart set 
                cartSTATUS = '7',
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
                        $insertMISSING=mysqli_query($con,"INSERT into missing (
                            missingCART,  
                            missingAMOUNT,
                            missingACCOUNT,
                            missingDATE
                        ) VALUES(
                            '$orderID',
                            '$ammount',            
                            '$accountID',
                            '$txtdate'
                        ) ");
                        
                        $insertactivitylog1=mysqli_query($con,"INSERT into activitylog (
                            activitylogUSERID,  
                            activitylogUSERTYPE,
                            activitylogDESCRIPTION,
                            activitylogDATE
                        ) VALUES(
                            '$sellerID',
                            'seller',            
                            '$message',
                            '$txtdate'
                        ) ");
            

                     echo"<script type='text/javascript'>window.location.replace('vieworder.php?orderid=$orderID&accountID=$accountID.php');alert('There is an error in the system, Please  try again later!');alert('$message');</script>";  
            }else{
            echo"<script type='text/javascript'>window.location.replace('vieworder.php?orderid=$orderID&accountID=$accountID.php');</script>";   
            }

}
if(isset($_POST['btneditcategory']))
{
         
            $cat=$_POST['cat'];
            $id=$_POST['id'];
            $edit=mysqli_query($con,"UPDATE category set 
                categoryNAME = '$cat'
            WHERE 
                categoryID='$id'
            ")or die(mysqli_error($con));
             
           if ($editprofile) {
              echo"<script type='text/javascript'>window.location.replace('category.php');alert('Successfully Updated!');</script>";  
           }else{
             echo"<script type='text/javascript'>window.location.replace('category.php');alert('Error!');</script>";  
           }
           
            
            
}
if(isset($_POST['btndeletecategory']))
{
         
            $id=$_POST['id'];
            $delete=mysqli_query($con,"DELETE FROM category 
            WHERE 
                categoryID='$id'
            ")or die(mysqli_error($con));
             
           if ($delete) {
              echo"<script type='text/javascript'>window.location.replace('category.php');alert('Successfully Deleted!');</script>";  
           }else{
             echo"<script type='text/javascript'>window.location.replace('category.php');alert('Error!');</script>";  
           }
           
            
            
}

if(isset($_POST['btnaddcategory']))
{
         
            $cat=$_POST['cat'];
            $cate=mysqli_query($con,"INSERT into category (
                            categoryNAME
                        ) VALUES(
                            '$cat'
                        ) ");
             
           if ($cate) {
              echo"<script type='text/javascript'>window.location.replace('category.php');('Successfully Added!');</script>";  
           }else{
             echo"<script type='text/javascript'>window.location.replace('category.php');('Error!');</script>";  
           }
           
            
            
}
if(isset($_POST['btneditdepartment']))
{
         
            $cat=$_POST['cat'];
            $id=$_POST['id'];
            $edit=mysqli_query($con,"UPDATE department set 
                department_name = '$cat'
            WHERE 
                department_id='$id'
            ")or die(mysqli_error($con));
             
           if ($editprofile) {
              echo"<script type='text/javascript'>window.location.replace('dept.php');alert('Successfully Updated!');</script>";  
           }else{
             echo"<script type='text/javascript'>window.location.replace('dept.php');alert('Error!');</script>";  
           }
           
            
            
}
if(isset($_POST['btndeletedepartment']))
{
         
            $id=$_POST['id'];
            $delete=mysqli_query($con,"DELETE FROM department 
            WHERE 
                department_id='$id'
            ")or die(mysqli_error($con));
             
           if ($delete) {
              echo"<script type='text/javascript'>window.location.replace('dept.php');alert('Successfully Deleted!');</script>";  
           }else{
             echo"<script type='text/javascript'>window.location.replace('dept.php');alert('Error!');</script>";  
           }
           
            
            
}

if(isset($_POST['btnadddepartment']))
{
         
            $cat=$_POST['cat'];
            $cate=mysqli_query($con,"INSERT into department (
                            department_name
                        ) VALUES(
                            '$cat'
                        ) ");
             
           if ($cate) {
              echo"<script type='text/javascript'>window.location.replace('dept.php');('Successfully Added!');</script>";  
           }else{
             echo"<script type='text/javascript'>window.location.replace('dept.php');('Error!');</script>";  
           }
           
            
            
}

if(isset($_POST['btnaddcourse']))
{
         
            $cat=$_POST['cat'];
            $checkbox1=$_POST['techno']; 
            $chk="";  
                foreach($checkbox1 as $chk1)  
                   {  
                      $chk .= $chk1.",";  
                   } 
            $cate=mysqli_query($con,"INSERT into course (
                            courseNAME,
                            courseRECOMMENDATION
                        ) VALUES(
                            '$cat',
                            '$chk'
                        ) ");
             
           if ($cate) {
              echo"<script type='text/javascript'>window.location.replace('course.php');('Successfully Added!');</script>";  
           }else{
             echo"<script type='text/javascript'>window.location.replace('course.php');('Error!');</script>";  
           }
           
            
            
}
if(isset($_POST['btneditcourse']))
{
         
            $cat=$_POST['cat'];
            $id=$_POST['id'];
            $checkbox1=$_POST['techno']; 
            $chk="";  
                foreach($checkbox1 as $chk1)  
                   {  
                      $chk .= $chk1.",";  
                   } 
            $edit=mysqli_query($con,"UPDATE course set 
                courseNAME = '$cat',
                courseRECOMMENDATION = '$chk'
            WHERE 
                courseID='$id'
            ")or die(mysqli_error($con));
             
           if ($edit) {
              echo"<script type='text/javascript'>window.location.replace('course.php');alert('Successfully Updated!');</script>";  
           }else{
             echo"<script type='text/javascript'>window.location.replace('course.php');alert('Error!');</script>";  
           }
           
            
            
}
if(isset($_POST['btndeletecourse']))
{
         
            $id=$_POST['id'];
            $delete=mysqli_query($con,"DELETE FROM course 
            WHERE 
                courseID='$id'
            ")or die(mysqli_error($con));
             
           if ($delete) {
              echo"<script type='text/javascript'>window.location.replace('course.php');alert('Successfully Deleted!');</script>";  
           }else{
             echo"<script type='text/javascript'>window.location.replace('course.php');alert('Error!');</script>";  
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
                'left',
                '$message'
            ) ");
         
             if($chat){
             echo"<script type='text/javascript'>window.location.replace('messages.php?accountID=$id');</script>";
            }else{
             echo"<script type='text/javascript'>window.location.replace('messages.php?accountID=$id');</script>";      
            }
            
}

if(isset($_POST['btnregister'])){ 

    $no=$_POST['no'];
    $region=$_POST['region2'];
    $province=$_POST['province2'];
    $city=$_POST['city2'];
    $barangay=$_POST['barangay2'];
    $lat=$_POST['lat'];
    $lng=$_POST['lng'];
    $studentid=$_POST['studentid'];
    $course=$_POST['course'];
    
    // $email=$_POST['email'];
    $phone=$_POST['phone'];
    $name=$_POST['name'];
    $user=$_POST['username'];
    $pass=$_POST['password'];

    $address=$no.", ".$barangay.", ".$city.", ".$province.", Philippines";

    date_default_timezone_set('Asia/Manila');
    $date = date('mdYhi', time());

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
            $copied = move_uploaded_file($tmpName, "../img/user/".$final_filename)or die();
            
    }
    else
    {
        $final_filename='null.png';
        
    }

  
    $insertactivitylog1=mysqli_query($con,"INSERT into account (
        mobilenumber,
        name,  
        user,
        pass,
        image,
        lat,
        longi,
        addresshead,
        studentID,
        course
    ) VALUES(
        '$phone',
        '$name',
        '$user',            
        '$pass',
        '$final_filename',
        '$lat',            
        '$lng',
        '$address',
        '$studentid',
        '$course'
    ) ");
    if($insertactivitylog1)
    {
        echo"<script type='text/javascript'>window.location.replace('studentnew.php');('Successfully Register!')</script>";  
    }
}

if(isset($_POST['btndeletebook']))
{
         
            $id=$_POST['id'];
            $delete=mysqli_query($con,"DELETE FROM book 
            WHERE 
                book_id='$id'
            ")or die(mysqli_error($con));
             
           if ($delete) {
              echo"<script type='text/javascript'>window.location.replace('product.php');alert('Successfully Deleted!');</script>";  
           }else{
             echo"<script type='text/javascript'>window.location.replace('product.php');alert('Error!');</script>";  
           }
           
            
            
}
?>