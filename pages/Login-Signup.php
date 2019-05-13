<html>
<!--Created by Kush Singh Chibber-->
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css" type="text/css">
</head>
<body>
    <div class="form">
        <form class="register-form" id="registrationFrom">
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="password"/>
            <input type="text" placeholder="email address"/>
            <button>create</button>
            <p class="message">Already registered? <a href="javascript:toggleForms()">Sign In</a></p>
            <p class="message"><a href="javascript:closeDiv()"><strong>Close</strong></a></p>

        </form>
        <form class="login-form" id="loginForm">
            <input type="text" placeholder="username"/>
            <input type="password" placeholder="password"/>
            <button>login</button>
            <p class="message">Not registered? <a href="javascript:toggleForms()">Create an account</a></p>
            <p class="message"><a href="javascript:closeDiv()"><strong>Close</strong></a></p>

        </form>
    </div>
</body>
</html>
