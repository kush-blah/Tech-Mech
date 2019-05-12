<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css" type="text/css">
</head>
<body>
    <div class="form">
        <form class="register-form" id="registrationFrom" method="post" action="/Connections/Database.php"  >
            <input type="text" placeholder="Name"/>
            <input type="password" placeholder="Password"/>
            <input type="password" placeholder=" Confirm Password"/>
            <button type="submit" name="register">Create</button>
            <p class="message">Already registered? <a href="javascript:toggleForms()">Sign In</a></p>
            <p class="message"><a href="javascript:closeDiv()"><strong>Close</strong></a></p>

        </form>

        <form class="login-form" id="loginForm" method = 'get' action="AboutUs">
            <input type="text" placeholder="Uername"/>
            <input type="password" placeholder="Password"/>
            <button type="submit" name="login">login</button>
            <p class="message">Not registered? <a href="javascript:toggleForms()">Create an account</a></p>
            <p class="message"><a href="javascript:closeDiv()"><strong>Close</strong></a></p>

        </form>
    </div>
</body>
</html>
