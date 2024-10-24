<?php
$fname="";
$lname="";
$email="";
$password="";
$address="";
$phonenum="";
if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['address']) &&isset($_POST['phonenum'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $phonenum=$_POST['phonenum'];

    try{
        $db=new mysqli('localhost','root','','tanweer');
        $qrystr="INSERT INTO `member` (`mem_id`, `se_id`, `fname`, `lname`, `email`, `password`, `phonenum`, `address`) VALUES (NULL, NULL,'".$fname."','".$lname."','".$email."',SHA1('".$password."'),'".$phonenum."','".$address."')";
        $res=$db->query($qrystr);
        $db->commit();
        $db->close();
        if($res==1){
            echo '<script type = "text/javascript">
                window.onload=function(){
                alert(" تم اضافة عضو جديد بنجاح ! ");
                }
                    </script>';
        }
    }
    catch (Exception $e){

    }
}
?>
<?php
$cname="";
$chours="";
$cost="";
$cdescription="";
$ccover="";
if(isset($_POST['cname'])&&isset($_POST['chours'])&&isset($_POST['cost'])&&isset($_POST['cdescription'])&&isset($_POST['ccover']) ){
    $cname=$_POST['cname'];
    $chours=$_POST['chours'];
    $cost=$_POST['cost'];
    $cdescription=$_POST['cdescription'];
    $ccover=$_POST['ccover'];


    try{
        $db=new mysqli('localhost','root','','tanweer');
        $qrystr="INSERT INTO `course` (`c_id`, `cname`, `cost`, `chours`, `description`, `img`) VALUES (NULL,'".$cname."','".$cost."','".$chours."','".$cdescription."','".$ccover."')";
        $res=$db->query($qrystr);
        $db->commit();
        $db->close();
        if($res==1){
            echo '<script type = "text/javascript">
                window.onload=function(){
                alert(" تم اضافة كورس جديد بنجاح ! ");
                }
                    </script>';
        }
    }
    catch (Exception $e){

    }
}
?>
<?php
$bbname="";
$numpage="";
$language="";
$size="";
$author="";
$bdescription="";
$bcover="";
if(isset($_POST['bname'])&&isset($_POST['numpage'])&&isset($_POST['language'])&&isset($_POST['size'])&&isset($_POST['author'])&&isset($_POST['bdescription'])&&isset($_POST['bcover']) ){
    $bbname=$_POST['bname'];
    $numpage=$_POST['numpage'];
    $language=$_POST['language'];
    $size=$_POST['size'];
    $author=$_POST['author'];
    $bdescription=$_POST['bdescription'];
    $bcover=$_POST['bcover'];



    try{
        $db=new mysqli('localhost','root','','tanweer');
        $qrystr="INSERT INTO `book` (`b_id`, `bname`, `bdescription`, `numpage`, `blanguage`, `bsize`,`author`,`bcover`) VALUES (NULL,'".$bbname."','".$bdescription."', '".$numpage."', '".$language."', '".$size."','".$author."','".$bcover."')";
        $res=$db->query($qrystr);
        $db->commit();
        $db->close();
        if($res==1){
            echo '<script type = "text/javascript">
                window.onload=function(){
                alert(" تم اضافة كتاب جديد بنجاح ! ");
                }
                    </script>';
        }
    }
    catch (Exception $e){

    }
}
?>
<?php
$title="";
$loc="";
$at="";
$ad="";
$aimg="";
if(isset($_POST['title'])&&isset($_POST['location'])&&isset($_POST['actime'])&&isset($_POST['actdate'])&&isset($_POST['actimg'])){
    $title=$_POST['title'];
    $loc=$_POST['location'];
    $at=$_POST['actime'];
    $ad=$_POST['actdate'];
    $aimg=$_POST['actimg'];

    try{
        $db=new mysqli('localhost','root','','tanweer');

        $qrystr="INSERT INTO `activity` (`act_id`, `title`, `location`, `acttime`, `actdate`, `actimg`) VALUES (NULL'".$title."','".$loc."','".$at."','".$ad."','".$aimg."')";

        $res=$db->query($qrystr);
        $db->commit();
        $db->close();
        if($res==1){
            echo '<script type = "text/javascript">
                window.onload=function(){
                alert(" تم اضافة نشاط جديد بنجاح ! ");
                }
                    </script>';
        }
    }
    catch (Exception $e){
        echo $e;
    }
}
?>

<?php
if((isset($_POST['search']))){
    $sid=$_POST['search'];

    try{

        $db2=new mysqli('localhost','root','','tanweer');
        $st2="SELECT  * from member ";
        $rs2=$db2->query($st2);
        for($i=0;$i<$rs2->num_rows;$i++){
            $row=$rs2->fetch_object();
            if($row->mem_id == $sid ){
                $db3=new mysqli('localhost','root','','tanweer');
                $st3="DELETE FROM member WHERE mem_id='".$sid."' ";
                $rs3=$db3->query($st3);
                if($rs3==1){
                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("تم الحذف ");
               } 
               </script>'; }
                $db3->close();

            }

        }

        $db2->close();

    }
    catch (Exception $e){
    }
}
?>
<?php
if((isset($_POST['delc']))){
    $cid=$_POST['delc'];

    try{

        $db2=new mysqli('localhost','root','','tanweer');
        $st2="SELECT  * from course";
        $rs2=$db2->query($st2);
        for($i=0;$i<$rs2->num_rows;$i++){
            $row=$rs2->fetch_object();
            if($row->c_id == $cid ){
                $db3=new mysqli('localhost','root','','tanweer');
                $st3="DELETE FROM course WHERE c_id='".$cid."' ";
                $rs3=$db3->query($st3);
                if($rs3==1){
                    echo '<script type = "text/javascript">
               window.onload=function(){
               alert("تم الحذف ");
               } 
               </script>'; }
                $db3->close();

            }

        }

        $db2->close();

    }
    catch (Exception $e){
    }
}
?>
<?php
if((isset($_POST['delb']))){
$bid=$_POST['delb'];

try{

$db2=new mysqli('localhost','root','','tanweer');
$st2="SELECT  * from book ";
$rs2=$db2->query($st2);
for($i=0;$i<$rs2->num_rows;$i++){
$row=$rs2->fetch_object();
if($row->b_id == $bid ){
$db3=new mysqli('localhost','root','','tanweer');
$st3="DELETE FROM book WHERE b_id='".$bid."' ";
$rs3=$db3->query($st3);
if($rs3==1){
echo '<script type = "text/javascript">
    window.onload=function(){
        alert("تم الحذف ");
    }
</script>'; }
$db3->close();

}

}

$db2->close();

}
catch (Exception $e){
}
}
?>
<?php
if((isset($_POST['dela']))){
    $aid=$_POST['dela'];

    try{

        $db2=new mysqli('localhost','root','','tanweer');
        $st2="SELECT  * from activity ";
        $rs2=$db2->query($st2);
        for($i=0;$i<$rs2->num_rows;$i++){
            $row=$rs2->fetch_object();
            if($row->act_id == $aid ){
                $db3=new mysqli('localhost','root','','tanweer');
                $st3="DELETE FROM activity WHERE act_id='".$aid."' ";
                $rs3=$db3->query($st3);
                if($rs3==1){
                    echo '<script type = "text/javascript">
    window.onload=function(){
        alert("تم الحذف ");
    }
</script>'; }
                $db3->close();

            }

        }

        $db2->close();

    }
    catch (Exception $e){
    }
}
?>

<!DOCTYPE html>

<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <script>

        let deletemem;
        let dela;
        let deletecourse;
        let deletebook;

        deletemem=`
        <form class="deleteuser spa" method="post">
                <label for="dfname"> الرقم التسلسلي للعضو</label>
                <input name="search" type="text" id="idm" class="fname">
                </br>

                </br>
                <input type="submit" class="btn2" name="deletemem" id="btnd" value="حذف">
            </form>

        `;
        dela=`
        <form class="deleteactivity spa" method="post">
                <label for="dfname">  الرقم التسلسلي للنشاط</label>
                <input name="dela" type="text" id="idm" class="fname">
                </br>

                </br>
                <input type="submit" class="btn2" name="deleteactivity" id="btnd" value="حذف">
            </form>

        `;
        deletecourse=`
        <form class="deletecourse spa" method="post">
                <label for="dfname"> الرقم التسلسلي للدورة</label>
                <input name="delc" type="text" id="idm" class="fname">
                </br>

                </br>
                <input type="submit"  class="btn2" name="deletecourse" id="btnd" value="حذف">
            </form>

        `;
        deletebook=`
        <form class="deletebook spa" method="post">
                <label for="dfname"> الرقم التسلسلي للكتاب</label>
                <input name="delb" type="text" id="idm" class="fname">
                </br>

                </br>
                <input type="submit" class="btn2" name="deletecourse" id="btnd" value="حذف">
            </form>

        `;
        let newmem;
        let newbook;
        let newcourse;
        let newact;

        let editmem;
        let editcourse;
        let editbook;
        let editact;

        newmem=`
              <form class="addnewuser">
                <label for="fname">الاسم الأول:         </label>
                <input name="fname" type="text" id="fname" class="fname">
                </br>
                <label for="lname">الاسم الأخير:         </label>
                <input name="lname" type="text" id="lname" class="lname">
                </br>
                <label for="email">الايميل :</label>
                <input type="email" id="email" name="email" class="ue">
                </br>
                <label for="password">كلمة السر:</label>
                <input name="password" type="password" id="password" class="uph">
                </br>
                <label for="address"> العنوان:</label>
                <input name="address" type="text" id="address" class="address">
                </br>
                <label for="phonenum">رقم الهاتف:</label>
                <input name="phonenum" type="tel" id="phonenum" class="phonenum">
                </br>
                <input type="submit" class="btn1" value="تسجيل عضو جديد">

            </form>
            `;
        newcourse=`
               <form class="addnewcourse" method="post">
                <label for="cname">اسم الدورة : </label>
                <input name="cname" type="text" id="cname" class="cname">
                </br>
                <label for="chours">     عدد الساعات:   </label>
                <input name="chours" type="number" id="chours" class="chours">
                </br>
                <label for="cost">تكلفة الدورة :</label>
                <input type="number" id="cost" name="cost" class="cost">
                </br>
                <div class="des_design">
                <label for="cdescription" class="des_lable">وصف للدورة:</label>
                <textarea type="text "rows="5" cols="100" name="cdescription"  id="cdescription" class="cdescription"></textarea>
                </div>
                </br>
                <label for="ccover">غلاف الدورة:</label>
                <input name="ccover" type="file"  class="ccover">
                </br>
                <input type="submit" value="حفظ">

            </form>
            `;
        newbook=`
            <form class="addnewbook" method="post">
                <label for="bname">اسم الكتاب : </label>
                <input name="bname" type="text" id="bname" class="bname">
                </br>
                <label for="numpage">     عدد الصفحات:   </label>
                <input name="numpage" type="number" id="numpage" class="numpage">
                </br>
                <label for="language">اللغة:</label>
                <input type="text" id="language" name="language" class="language">
                </br>
                <label for="size">الحجم:</label>

                <input name="size" type="number" id="size" class="size">
                </br>
                <label for="author"> الكاتب :</label>
                <input name="author" type="text" id="author" class="author">
                </br>
                <div class="des_design">
                <label for="bdescription" class="des_lable">وصف للكتاب:</label>
                <textarea type="text "rows="5" cols="100" name="bdescription"  id="bdescription" class="bdescription"></textarea>
                </div>
                </br>
                <label for="bcover">غلاف الكتاب:</label>
                <input name="bcover" type="file" id="bcover" class="bcover">
                </br>
                <input type="submit" value="حفظ">

            </form>`;
        newact=`
             <form class="addnewact" method="post">
                <label for="title"> عنوان  : </label>
                <input name="title" type="text" id="title" class="tittle">
                </br>
                <label for="location">     الموقع :   </label>
                <input name="location" type="text" id="location" class="location">
                </br>
                <label for="actime">الوقت :</label>
                <input type="time" id="actime" name="actime" class="actime">
                </br>
                <label for="actdate">التاريخ :</label>

                <input name="actdate" type="date" id="actdate" class="actdate">
                </br>
                <label for="actimg">   النشاط:</label>
                <input name="actimg" type="file" id="actimg" class="actimg">
                </br>
                <input type="submit" value="حفظ">

            </form>
            `;
        let showmem;
        let showcourses;
        let showbooks;
        let showacts;
        showmem=`
            <?php
        $con = mysqli_connect("localhost", "root", "", "tanweer");
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, "SELECT fname,lname,email,phonenum,address FROM member");

        echo "<table  class='tabl' style='font-size: 20px;font-weight: bold;margin-top: 30px;margin-right: 80px;text-align: center ;border-radius: 10px; border:2px solid black'  dir='rtl' border='1'>
                <tr>
                <th style='border:none;padding: 10px'>الاسم الأول</th>
                <th style='border:none;padding: 10px'>الاسم الأخيـر</th>
                <th style='border:none;padding: 10px'>الايمـل</th>
                <!--<th>كلمـة السـر</th>-->
                <th style='border:none;padding: 10px'>رقـم الـهاتـف</th>
                <th style='border:none;padding: 10px'>العنوان</th>
                </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td style=' padding: 10px'>" . $row['fname'] . "</td>";
            echo "<td style='padding: 10px'>" . $row['lname'] . "</td>";
            echo "<td style='padding: 10px'>" . $row['email'] . "</td>";
            //echo "<td>" . sha1($row['password']) . "</td>";
            echo "<td style='padding: 10px'>" . $row['phonenum'] . "</td>";
            echo "<td style='padding: 10px'>" . $row['address'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($con);


        ?>`;
        showcourses=`
            <?php
        $con = mysqli_connect("localhost", "root", "", "tanweer");
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, "SELECT cname,cost,chours FROM course");

        echo "<table class='tabl' style='font-size: 20px;font-weight: bold;margin-top: 30px;margin-right: 300px;text-align: center ;border-radius: 10px; border:2px solid black' dir='rtl' border='1'>
                <tr>
                <th style=' padding: 10px;border: none'>اسم الدورة</th>
                <th style=' padding: 10px;border: none'>التكلـفة</th>
                <th style=' padding: 10px;border: none'>عدد السـاعات</th>
                
               
                </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td style=' padding: 10px'>" . $row['cname'] . "</td>";
            echo "<td style=' padding: 10px'>" . $row['cost'] . "</td>";
            echo "<td style=' padding: 10px'>" . $row['chours'] . "</td>";

            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($con);
        ?>
            `;
        showbooks=`
             <?php
        $con = mysqli_connect("localhost", "root", "", "tanweer");
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, "SELECT bname,bdescription,numpage,blanguage,bsize,author FROM book");

        echo "<table class='tabl' style='font-size: 20px;font-weight: bold;margin-top: 30px;margin-right: 200px;text-align: center ;border-radius: 10px; border:2px solid black' dir='rtl' border='1'>
                <tr>
                <th style='padding: 10px;border: none'>اسم الكتاب</th>
                <th style='padding: 10px;border: none'>عدد الصفحـات</th>
                 
                 <th style='padding: 10px;border: none'>الكاتـب</th>
              <!--  <th>الوصـف</th>-->
               
                </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td style='padding: 10px;'>" . $row['bname'] . "</td>";
            echo "<td style='padding: 10px;'>" . $row['numpage'] . "</td>";
            // echo "<td>" . $row['blanguage'] . "</td>";
            //echo "<td>" . $row['bsize'] . "</td>";
            echo "<td style='padding: 10px;'>" . $row['author'] . "</td>";
            //  echo "<td>" . $row['bdescription'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($con);
        ?>
            `;
        showacts=`
                  <?php
        $con = mysqli_connect("localhost", "root", "", "tanweer");
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, "SELECT title,location,acttime,actdate FROM activity");

        echo "<table class='tabl' style='font-size: 20px;font-weight: bold;margin-top: 30px;margin-right: 200px;text-align: center ;border-radius: 10px; border:2px solid black' dir='rtl' border='1'>
                <tr>
                <th style='border: none;padding: 10px'>اسم النشاط</th>
                <th style='border: none;padding: 10px'>المكان</th>
                <th style='border: none;padding: 10px'>الوقت</th>
                <th style='border: none;padding: 10px'>التاريخ </th>
              <!--  <th>الوصـف</th>-->
               
                </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td style='padding: 10px;'>" . $row['title'] . "</td>";
            echo "<td style='padding: 10px;'>" . $row['location'] . "</td>";
            echo "<td style='padding: 10px;'>" . $row['acttime'] . "</td>";
            echo "<td style='padding: 10px;'>" . $row['actdate'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($con);
        ?>`;

    </script>
</head>
<body dir="rtl">
<div class="container">
  <div class="header">

    <img class="logo" src="assets/img/logo.png">
      <h1>مركـز التـنـويـر الـثـقـافـي </h1>
      <button ><a   href="home.html"><i class="fa-solid fa-arrow-right-from-bracket"></i>تسجيل خروج</a></button>
  </div>
    <div class="content">
        <div class="admin-info">
            <img src="assets/img/admin.png" class="admin-pic">
            <!-- <h3>اسم الادمن</h3>-->
        </div>
        <div class="vcontent">
          <!--  <div class="admin-info">
                <img src="assets/img/admin.png" class="admin-pic">
               -- <h3>اسم الادمن</h3>
            </div>-->
            <ul>
                <li>الأعضـاء
                    <ul>
                        <li class="in" onclick=document.getElementById("inner_class").innerHTML=newmem><i class="fa-solid fa-user-plus"></i><a href="" >   تسجيل عضو جديد </a></li>
                        <li class="in" onclick=document.getElementById("inner_class").innerHTML=deletemem><i class="fa-regular fa-pen-to-square"></i><a href="">حذف عضو</a> </li>
                        <li class="in" onclick=document.getElementById("inner_class").innerHTML=showmem><i class="fa-solid fa-eye"></i><a href=""> عرض قائمة الاعضاء</a></li>
                    </ul>
                </li>
                <li>الـدورات
                    <ul>
                        <li class="in" onclick=document.getElementById("inner_class").innerHTML=newcourse><i class="fa-solid fa-circle-plus"></i><a href="">ادراج دورة جديدة</a></li>
                        <li class="in" onclick=document.getElementById("inner_class").innerHTML=deletecourse> <i class="fa-regular fa-pen-to-square"></i><a href="">حذف دورة</a></li>
                        <li class="in" onclick=document.getElementById("inner_class").innerHTML=showcourses><i class="fa-solid fa-eye"></i><a href="">عرض قائمة الدورات</a></li>
                        <li class="in"><i class="fa-solid fa-circle-plus"></i><a href="">اضافة شعبة</a></li>
                    </ul>
                </li>
                <li> الكـتـب
                    <ul>
                        <li class="in" onclick=document.getElementById("inner_class").innerHTML=newbook><i class="fa-solid fa-file-circle-plus"></i><a href="">ادراج كتاب جديد</a></li>
                        <li class="in" onclick=document.getElementById("inner_class").innerHTML=deletebook> <i class="fa-regular fa-pen-to-square"></i><a href="">حذف كتاب</a></li>
                        <li class="in" onclick=document.getElementById("inner_class").innerHTML=showbooks><i class="fa-solid fa-eye" ></i><a href="">عرض قائمةالكتب</a></li>
                    </ul>
                </li>
                <li> النشاطات
                    <ul>
                        <li class="in" onclick=document.getElementById("inner_class").innerHTML=newact><i class="fa-regular fa-calendar-plus"></i><a href="">تعيين نشاط جديد</a></li>
                        <li class="in" onclick=document.getElementById("inner_class").innerHTML=dela><i class="fa-regular fa-pen-to-square"></i><a href=""> حذف نشاط</a> </li>
                        <li class="in" onclick=document.getElementById("inner_class").innerHTML=showacts><i class="fa-solid fa-eye"></i><a href="">عرض قائمةالنشاطات</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="hcontent">
            <div class="inner_class" id="inner_class">

            </div>
        </div>

    </div>
</div>
</body>
</html>