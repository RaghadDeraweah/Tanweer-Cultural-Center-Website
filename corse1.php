<?php
session_start();
$mycourse=0;
$user=$_SESSION["loginuser"] ;
$pass=$_SESSION["loginpassword"] ;
if(isset($_POST['btn1'])){
    try{
        $db=new mysqli('localhost','root','','tanweer');
        $qrystr="select * from member";
        $res=$db->query($qrystr);
        for($i=0;$i<$res->num_rows;$i++){
            $row=$res->fetch_object();
            if($row->email == $user&& sha1($pass)== $row->password){
                $v=$row->se_id;
                if($row->se_id == 1){
                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("لقد سجلت في هذا الدرس بالفعل ! ");
               } 
               </script>';
                }
                else if($row->se_id == null){
                    $str="update member set se_id='1' where password = '".sha1($pass)."'";
                    $rs=$db->query($str);
                    $db->commit();
                    $db->close();
                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert(" تم التسجيل  ");
               } 
               </script>';
                }
                else{

                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("لا يمكنك التسجيل في هذا الدرس , لقد سجلت في درس اخر !");
               } 
               </script>';


                }
            }
        }

    }
    catch (Exception $e){

    }}

else if(isset($_POST['btn2'])){
    try{
        $db=new mysqli('localhost','root','','tanweer');
        $qrystr="select * from member";
        $res=$db->query($qrystr);
        for($i=0;$i<$res->num_rows;$i++){
            $row=$res->fetch_object();
            if($row->email == $user&& sha1($pass)== $row->password){
                $v=$row->se_id;
                if($row->se_id == 2){
                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("لقد سجلت في هذا الدرس بالفعل ! ");
               } 
               </script>';
                }
                else if($row->se_id == null){
                    $str="update member set se_id='2' where password = '".sha1($pass)."'";
                    $rs=$db->query($str);
                    $db->commit();
                    $db->close();
                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert(" تم التسجيل  ");
               } 
               </script>';
                }
                else{

                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("لا يمكنك التسجيل في هذا الدرس , لقد سجلت في درس اخر !");
               } 
               </script>';


                }
            }
        }

    }
    catch (Exception $e){

    }}
elseif(isset($_POST['btn3'])){
    try{
        $db=new mysqli('localhost','root','','tanweer');
        $qrystr="select * from member";
        $res=$db->query($qrystr);
        for($i=0;$i<$res->num_rows;$i++){
            $row=$res->fetch_object();
            if($row->email == $user&& sha1($pass)== $row->password){
                $v=$row->se_id;
                if($row->se_id == 3){
                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("لقد سجلت في هذا الدرس بالفعل ! ");
               } 
               </script>';
                }
                else if($row->se_id == null){
                    $str="update member set se_id='3' where password = '".sha1($pass)."'";
                    $rs=$db->query($str);
                    $db->commit();
                    $db->close();
                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert(" تم التسجيل  ");
               } 
               </script>';
                }
                else{

                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("لا يمكنك التسجيل في هذا الدرس , لقد سجلت في درس اخر !");
               } 
               </script>';


                }
            }
        }

    }
    catch (Exception $e){

    }}
elseif(isset($_POST['btn4'])){
    try{
        $db=new mysqli('localhost','root','','tanweer');
        $qrystr="select * from member";
        $res=$db->query($qrystr);
        for($i=0;$i<$res->num_rows;$i++){
            $row=$res->fetch_object();
            if($row->email == $user&& sha1($pass)== $row->password){
                $v=$row->se_id;
                if($row->se_id == 4){
                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("لقد سجلت في هذا الدرس بالفعل ! ");
               } 
               </script>';
                }
                else if($row->se_id == null){
                    $str="update member set se_id='4' where password = '".sha1($pass)."'";
                    $rs=$db->query($str);
                    $db->commit();
                    $db->close();
                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert(" تم التسجيل  ");
               } 
               </script>';
                }
                else{

                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("لا يمكنك التسجيل في هذا الدرس , لقد سجلت في درس اخر !");
               } 
               </script>';


                }
            }
        }

    }
    catch (Exception $e){

    }}
elseif(isset($_POST['btn5'])){
    try{
        $db=new mysqli('localhost','root','','tanweer');
        $qrystr="select * from member";
        $res=$db->query($qrystr);
        for($i=0;$i<$res->num_rows;$i++){
            $row=$res->fetch_object();
            if($row->email == $user&& sha1($pass)== $row->password){
                $v=$row->se_id;
                if($row->se_id == 5){
                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("لقد سجلت في هذا الدرس بالفعل ! ");
               } 
               </script>';
                }
                else if($row->se_id == null){
                    $str="update member set se_id='5' where password = '".sha1($pass)."'";
                    $rs=$db->query($str);
                    $db->commit();
                    $db->close();
                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert(" تم التسجيل  ");
               } 
               </script>';
                }
                else{

                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("لا يمكنك التسجيل في هذا الدرس , لقد سجلت في درس اخر !");
               } 
               </script>';


                }
            }
        }

    }
    catch (Exception $e){

    }}


?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="corse1.css">
    <title>اللغات</title>
</head>
<body dir="rtl">
<div class="navbar">
    <img src="img/img6.png" alt="logo" class="logo" >
    <ul>
        <li class="corses"><a href="#">الدورات</a></li>
        <li><a href="books.html">الكتب</a></li>
        <li><a href="activity.html">نشاطاتنا</a></li>
        <li><a href="myaccount.php">حسابي</a></li>
        <li><a href="home.html">تسجيل خروج</a></li>
    </ul>
</div>
<div class="container">

    <div class="para">
        <p class="main">ان ما تحمله عبارة الخط العربي من الفخامة والأصالة تعبر تماما عن أهميته كعلم متكامل يضم تقنيات وأدوات تخصه في التكوين والتدريب على الإحاطة بكل أساسياته. يساهم تعلم الخط العربي للناشئة فرصة ممتازة لربطهم بأصولهم العربية العريقة،إن الخط العربي يرتبط ارتباطا وثيقا بالدين الإسلامي الحنيف فهو ما استعمل لخط حروف القرآن الكريم وجزء كبير من سيرة النبي محمد صلى الله عليه وسلم لهذا فتعلم الخط العربي يعتبر مفخرة لنا كمسلمين،لذلك نقدم لكم هذه الدورة لتعليم الخط العربي على يد نخبة من الخطاطين المحترفين الذين تم اختيارهم بعناية لمشاركة خبراتهم من خلال الدورات التدريبية.</p>
        <span class="line"></span>
        <p class="sec"> تكلفة الدورة : 300 شيكل </p>
        <p class="sec">عدد ساعات الدورة : 18 ساعةً </p>
    </div>
    <form method="post" class="tabel1">

        <table id="maintable">
            <tr>
                <th>اسم الخطاط</th>
                <th>الايام</th>
                <th>الوقت</th>
                <th> رقم القاعة</th>
                <th></th>

            </tr>
            <tr>

                <td> ابراهيم العرافي</td>
                <td> احد/ثلاثاء/خميس</td>
                <td>4-2</td>
                <td> 1</td>
                <td> <input type="submit" class="submet" value="تسجيل" name="btn1"> </input></td>

            </tr>
            <tr>
                <td> عبد العزيز البديوي</td>
                <td>اثنين/اربعاء</td>
                <td>4-2</td>
                <td> 2</td>
               <td> <input type="submit" class="submet" value="تسجيل" name="btn2"> </input></td>
            </tr>
            <tr>
                <td> صالح العمري</td>
                <td> احد/ثلاثاء/خميس</td>
                <td>4-2</td>
                <td> 2</td>
                <td> <input type="submit" class="submet" value="تسجيل" name="btn3"> </input></td>
            </tr>
            <tr>
                <td> هاني الطويل</td>
                <td>اثنين/اربعاء</td>
                <td>5-3</td>
                <td> 3</td>
                <td> <input type="submit" class="submet" value="تسجيل" name="btn4"> </input></td>
            </tr>
            <tr>
            <td>بلال المختار</td>
            <td> احد/ثلاثاء/خميس</td>
            <td>5-3</td>
            <td> 3</td>
                <td> <input type="submit" class="submet" value="تسجيل" name="btn5"> </input></td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>