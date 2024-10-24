<?php
if(isset($_POST['edit'])){
if(isset($_POST['uphone']) && isset($_POST['upassword'])){
    $phone=$_POST['uphone'];
    $pass=$_POST['upassword'];
    try{
        $db=new mysqli('localhost','root','','tanweer');
        $qrystr="select * from member";
        $res=$db->query($qrystr);
        for($i=0;$i<$res->num_rows;$i++) {
            $row=$res->fetch_object();
            if($row->phonenum == $phone){
                $str="UPDATE member SET password='".sha1($pass)."' where phonenum='".$phone."'";
                $r1=$db->query($str);
                $db->commit();
                $db->close();
            }
        }
        if($r1==1){
            echo '<script type = "text/javascript">
               window.onload=function(){
               alert("  تم التعديل ");
               } 
               </script>'; }
    }
    catch (Exception $e){

    }

}
elseif (!isset($_POST['uphone'])){
    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("يجب عليك إدخال رقم الهاتف   ");
               } 
               </script>';
}
elseif (!isset($_POST['upassword'])){
    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("يجب عليك إدخال كلمة السر الجديدة   ");
               } 
               </script>';
}}
?>
<?php
session_start();
if(isset($_POST['signin'])){
if(isset($_POST['uname'])&& isset($_POST['upassword'])){
    $username=$_POST['uname'];
    $userpassword=$_POST['upassword'];


// Storing session data
    $_SESSION["loginuser"] = $username;
    $_SESSION["loginpassword"] = $userpassword;
    try{
        $db=new mysqli('localhost','root','','tanweer');
        $qrystr="select email , password from member";
        $res=$db->query($qrystr);
        for($i=0;$i<$res->num_rows;$i++){
            $row=$res->fetch_object();
            if($row->email == $username && sha1($userpassword)== $row->password){
                header('location:whensign.php');
            }
            else{
                echo '<script type = "text/javascript">
               window.onload=function(){
               alert(" !الايميل او كلمة السر غير صحيحة ");
               } 
               </script>';
            }
        }
        $db->close();
    }
    catch (Exception $e){

    }
}
elseif (isset($_POST['uname'])){
    echo '<script type = "text/javascript">
               window.onload=function(){
               alert(" يجب عليك إدخال الايميل الخاص بك  ");
               } 
               </script>';
}
elseif (isset($_POST['upassword'])){
    echo '<script type = "text/javascript">
               window.onload=function(){
               alert(" يجب عليك إدخال كلمة السر  ");
               } 
               </script>';
}}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="joinUs.css">
    <title>تسجيل دخول </title>
    <script>
        let pp;
        pp=`
        <form method="post">
            <div class="input-container">
                <img class="icon1" src="img/mobile-button.png" alt="username">
                <input  type="tel" id="un" name="uphone" placeholder="رقم الهاتف "/>
            </div>

            <div class="input-container">
                <img class="icon2" src="img/lock.png" alt="username">
                <input type="password" id="up" name="upassword" placeholder="كلمة المرور الجديدة"/>
            </div>
            <div class="input-container pass">
<button type="submit" class="icon2" onclick=document.getElementById("userform").innerHTML=document.getElementById("log").innerHTML><img class="icon1" src="img/back.png" alt="username"></button>
                <button type="submit" name="edit" class="btn">تعديل</button>

        </form>
        `;




    </script>
</head>
<body dir="rtl">
<div class="navbar">
    <img src="img/img6.png" alt="logo" class="logo" >
    <ul>
        <li><a href="home.html">الـرئـيـسـيـة</a></li>
        <li><a href="about.html">عـن الـمـركـز</a></li>
        <li><a href="contactus.php">اتـصـل بـنـا</a></li>
        <li class="joinus"><a href="joinUs.html">تسجيل دخول</a></li>
    </ul>
</div>
<div class="login">
<img src="img/user.png" alt="user" class="user">
    <div id="userform" class="userform">
        <form method="post" id="log">
            <div class="input-container">
                <img class="icon1" src="img/icon1.png" alt="username">
                <input  type="email" id="un" name="uname" placeholder="الإيميل"/>
            </div>

            <div class="input-container">
                <img class="icon2" src="img/lock.png" alt="username">
                <input type="password" id="up" name="upassword" placeholder="كلمة المرور"/>
            </div>
            <div class="input-container pass">
                <button type="submit" name="signin" class="btn bb1">دخول</button>

            </div>
            <div class="forgetpass">
                <input type="submit" name="forgetpass" class="forgetpass" value="هل نسيت كلمة السر ؟"  onclick=document.getElementById("userform").innerHTML=pp />

            </div>
        </form>
    </div>

</div>
</body>
</html>