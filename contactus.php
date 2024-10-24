<?php
if(isset($_POST['uname'])&&isset($_POST['email']) && isset($_POST['uphonenum']) && isset($_POST['unote'])){
    $username=$_POST['uname'];
    $useremail=$_POST['email'];
    $userphone=$_POST['uphonenum'];
    $note=$_POST['unote'];
    try{
        $db=new mysqli('localhost','root','','tanweer');
        $qrystr="INSERT INTO `contact` (`con_id`,`name`,`email`,`phone`,`msg`) VALUES (NULL,'".$username."','".$useremail."','".$userphone."','".$note."')";
        $res=$db->query($qrystr);
        $db->commit();
        $db->close();
        if($res==1){
            echo '<script type = "text/javascript">
               window.onload=function(){
               alert(" تم ارسال رسالتك بنجاح ");
               } 
               </script>';
        }



    }
    catch (Exception $e){
echo $e;
    }
}
?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>اتصل بنا</title>
  <link rel="stylesheet" href="Contactuscss.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
</head>
<body dir="rtl">

    <div class="navbar">
        <img src="assets/img/logo.png" alt="logo" class="logo" >
        <ul>
            <li><a href="home.html">الـرئـيـسـيـة</a></li>
            <li><a href="about.html">عـن الـمـركـز</a></li>
            <li class="contact"><a  href="contactus.html">اتـصـل بـنـا</a></li>
            <li ><a href="joinUs.php">انـضـم لـنـا</a></li>
        </ul>
    </div>

<div class="content">
   <div class="right_col">
       <form method="post">
      <h1>للاستفسار والمساعدة اتصل بنا!</h1>
      <label for="uname">الاسم:         </label>
      <input name="uname" type="text" id="uname" class="un"></br>
      <label for="uphonenum">رقم الهاتف:</label>
      <input name="uphonenum" type="tel" id="uphonenum" class="uph">
      </br>
      <label for="email">الايميل :</label>
      <input type="email" id="email" name="email" class="ue">
      </br>
           <div class="note">
      <label for="unote">ملاحظة:</label>
               <textarea type="text" id="unote" name="unote" rows="4" cols="30" class="unote"></textarea>
     </div>
      </br>
     <!-- <button type="button" id="send" class="send">ارسال</button>-->

               <input type="submit" value="ارسـال" class="send" id="send">


    </form>
   </div>
  <div class="centerinfo">

        <div class="info">
            <p>Email:tanweer5@gmail.com</p>
            <p>Phone: 0568445672</p>
            <p>WhatsUp: +972 56845672</p>
        </div>
      <div class="location"><img src="assets/img/locator.png" class="locator">
      </div>
      <div class="social">
          <h5>للتواصل عبر مواقعنا الالكترونية</h5>
          <a class="icon" href="#"><i class="fa-brands fa-facebook"></i><!--<img  src="assets/img/facebook.png" class="media1">--></a>
          <a class="icon" href="#"> <i class="fa-regular fa-at" ></i></a>
          <a class="icon" href="#"><i class="fa-brands fa-instagram" ></i></a>
          <a class="icon" href="#"> <i class="fa-brands fa-whatsapp" ></i></a>
      </div>

    </div>
  </div>

</body>
</html>