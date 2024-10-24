<?php
session_start();
$namelogin= $_SESSION["loginuser"];
$passlogin=$_SESSION["loginpassword"] ;
$email="";
$fname="";
$lname="";
$address="";
$phonenum=0;
$id=0;
$fn="";
$ln="";
$e="";
$a="";
$p=0;
try{
    $db1=new mysqli('localhost','root','','tanweer');
    $str="SELECT  * from member ";
    $rs=$db1->query($str);
    for($i=0;$i<$rs->num_rows;$i++){
        $row=$rs->fetch_object();
        if($row->email == $namelogin && $row->password ==sha1($passlogin)){
            $email=$row->email;
            $fname=$row->fname;
            $lname=$row->lname;
            $id=$row->mem_id;
            $address=$row->address;
            $phonenum=$row->phonenum;
        }
    }
}
catch (Exception $e){

}

?>
<?php
if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['email'])&&isset($_POST['address']) &&isset($_POST['phonenum'])){
    $fn=$_POST['fname'];
    $ln=$_POST['lname'];
    $e=$_POST['email'];
    $a=$_POST['address'];
    $p=$_POST['phonenum'];
    try{

        $db2=new mysqli('localhost','root','','tanweer');

        $str="UPDATE member SET fname= '".$fn."',lname= '".$ln."', email = '".$e."', phonenum = '".$p."', address = '".$a."' WHERE mem_id = '".$id."'";
        $rs2=$db2->query($str);
        $db2->commit();
        $db2->close();
        if($rs2==1){
            echo '<script type = "text/javascript">
               window.onload=function(){
               alert("  تم التعديل ");
               } 
               </script>'; }

    }
    catch (Exception $e){

    }}
?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>حسابي</title>
    <link rel="stylesheet" href="myaccount.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
</head>
<body dir="rtl">
<div class="navbar">
    <img src="img/img6.png" alt="logo" class="logo" >
    <ul>
        <li><a href="corses.html">الدورات</a></li>
        <li><a href="books.html">الكتب</a></li>
        <li ><a href="activity.html">نشاطاتنا</a></li>
        <li class="myacount"><a href="myaccount.html">حسابي</a></li>
        <li><a href="home.html">تسجيل خروج</a></li>
    </ul>
</div>
<div class="inside">
    <i class="fa-solid fa-user acc"></i>
    <form class="myaccountform" method="post">
    <div class="name">
        <div class="first">
        <label for="fname">الاسم الأول:         </label>
        <br>
        <input name="fname" type="text" id="fname" style="font-size: 25px" class="fname" value="<?php echo $fname ?>">
        </div>
        <div class="last">
        <label for="lname">الاسم الأخير:         </label>
        <br>
        <input name="lname" type="text" id="lname" style="font-size: 25px" class="lname" value="<?php echo $lname ?>" >
        </div>
    </div>
    <div class="email">
        <label for="email">الايميل :</label>
        <br>
        <input  type="email" id="email" name="email"style="font-size: 25px" class="ue" value="<?php echo $email ?>">
    </div>
    <div class="addr">
        <label for="address"> العنوان:</label>
        <br>
        <input name="address" type="text" id="address"  style="font-size: 25px" class="address" value="<?php echo $address ?>" >
    </div>
    <div class="phone">
        <label for="phonenum">رقم الهاتف:</label>
        <br>
        <input name="phonenum" type="tel" id="phonenum" style="font-size: 25px" class="phonenum" value="<?php echo $phonenum ?>">
    </div>
    <div class="buttons">
        <input type="submit" class="save"  value="تعديل">

    </div>
    </form>



</div>
</body>
</html>