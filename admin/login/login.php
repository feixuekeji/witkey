<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>威客管理平台</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

  <section class="container">
    <div class="login">
      <h1>管理平台登录</h1>
      <form method="post" action="check.php">
        <p><input type="text" name="username" value="" placeholder="用户名"></p>
        <p><input type="password" name="password" value="" placeholder="密码"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            记住密码
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="登录"></p>
      </form>
    </div>
  </section>
<div style="text-align:center;">
<p>   飞雪威客   </p>
</div>
</body>
</html>