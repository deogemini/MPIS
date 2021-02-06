<?php include 'layouts/main.php'; ?>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    form {
        border: 3px;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .cancelbtn {
        width: 140px;
        background-color: #f44336;
        margin-top: -20px;
        margin-left: 50px;

    }


    .container {
        padding: 30px;
    }

    .container2 {
        padding: 30px;
        margin-left: 200px;
        margin-right: 200px;
    }

    span.psw {
        float: right;
        margin-right: 100px;

    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            padding-top: 10px;

        }
    }
</style>
</head>

<body>

    <h2 class="form-text">Please login in MPIS</h2>
    <div class="container">
        <form action="signin.php" method="POST">
            <div class="form-group">
                <label for="uname"><b>First name</b></label>
                <input class="form-control" type="text" placeholder="Enter Username" name="firstname" required>
            </div>

            <div class="form-group">
                <label for="psw"><b>Password</b></label>
                <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
            </div>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>


            <div class="container2">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>

        </form>
    </div>
</body>

</html>


<?php include 'layouts/common_base.php'; ?>