<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="Praktikum.css">
</head>
<body>
    <div class="content">
        <div class="head">
            <div class="lock"></div>
            <h2 class="title">LOGIN</h2>
        </div>
		<form action="Terusan.php" method="POST">
        <div class="article">
            <form action="#" method="post">
                <div class="group">
                    <label for="email">E-mail Address or Username</label>
                    <input type="text" placeholder="enter your email address or username..." name="name" required>
                </div>
				<hr>
				<br>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="password" placeholder="enter your password..." name="pass" required>
                </div>
				<hr>
				<br>
                <div class="grup">
                    <input type="submit" value="Sign In">
                </div>
            </form>
        </div>
    </div>
</body>
</html>