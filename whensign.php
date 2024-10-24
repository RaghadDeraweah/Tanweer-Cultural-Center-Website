<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
  <link rel="stylesheet" href="whensign.css">
    <title >أهـلاً</title>
</head>

<body dir="rtl">
<div class="container">
 <div class="navbar">
        <img src="img/img6.png" alt="logo" class="logo" >
        <ul>
            <li><a href="corses.html">الدورات</a></li>
            <li><a href="books.html">الكتب</a></li>
            <li><a href="activity.html">نشاطاتنا</a></li>
            <li><a href="myaccount.php">حسابي</a></li>
            <li><a href="home.html">تسجيل خروج</a></li>
        </ul>
    </div>
<div class="caption">
    <p class="main"> أهــلاً بـك! </p>

    <p class="sec">تـنـويـر ينـير حـياتك..</p>

</div>
<div class="w3-content w3-section" style="max-width:100%">
    <img class="mySlides" src="img/slid1.jpg" style="width:100%">
    <img class="mySlides" src="img/slid2.jpg" style="width:100%">
    <img class="mySlides" src="img/slid3.jpg" style="width:100%">
    <img class="mySlides" src="img/slid3.jpg" style="width:100%">
    <img class="mySlides" src="img/slid3.jpg" style="width:100%">
</div>
</div>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
</body>
</html>