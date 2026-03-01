<!DOCTYPE html>
<html>
<head>
<title>dl panel: صفحۀ مدیریت</title>
<meta charset="utf-8">
</head>
<body>
<?php
if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['action']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$struser="mahdi";
$strpass="dlserver7151panel";
$action=$_POST['action'];
if($username==$struser&&$password==$strpass)
{
switch($action)
{
case "start":
exec("dlserver.exe");
break;
case "restart":
exec("taskkill /IM dlserver.exe /f");
exec("dlserver.exe");
break;
case "stop":
exec("taskkill /IM dlserver.exe /f");
break;
default:
echo "not valid";
}
}
else
{
echo "نام کاربری یا رمز عبور شما اشتباه است.";
}
}
?>
<header>
<p id="time"></p>
</header>
<main>
<h1>خوش آمدید: جهت مدیریت سرور از دکمه های زیر استفاده کنید.</h1>
<p>در نظر داشته باشید فقط یک بار بر روی دکمه های مورد نظر کلیک کنید و منتظر انجام نتیجه باشید.</p>
<h2>اطلاعات کاربری که باآن وارد dl panel شده اید.</h2>
<p>شما با آدرس ip  <?php echo $_SERVER['REMOTE_ADDR']; ?> وارد dl panel شده ايد</p><hr>
<h2>ورود اطلاعات خواسته شده</h2>
<p>توجه: در کادر هاي مربوطه کليه اطلاعات خواسته شده را وارد کنيد. 
<form method="post">
<label for="username">نام کاربری را وارد کنید*</label>
<input type="text" name="username" id="username" required><br>
<label for="password">رمز ورود خود را وارد کنید*</label>
<input type=password name="password" id="password" required><br>
<h2>انجام عملیات</h2>
<p>در لیست کشویی زیر، انتخاب کنید که چه عملیاتی را مایلید انجام دهید، به صورت پیشفرض روشن کردن سِروِر انتخاب شده است.</p>
<select name="action" id="action">
<option value="start">شروع سِروِر</option>
<option value="stop">خاموش کردن سِروِر</option>
<option value="restart">راه اندازی مجدد سِروِر</option><br>
</select>
<input type="submit" value="انجام عملیات"><hr>
</form>
</main>
<footer>
<p>&copy; <a href="https://www.jm-hosting.ir">طراحی و توسعه، jm-hosting.ir</a></p>
</footer>
</body>
</html>