<style>
    .content{
        width:50%;
        height:10%;
    }
    </style>
<html>
<head>
    <title>Form Wizard Example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>jQeury.steps Demos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="plugins/jquery-steps-master/demo/css/normalize.css">
    <link rel="stylesheet" href="plugins/jquery-steps-master/demo/css/main.css">
    <link rel="stylesheet" href="plugins/jquery-steps-master/demo/css/jquery.steps.css">
    <script src="plugins/jquery-steps-master/lib/modernizr-2.6.2.min.js"></script>
    <script src="plugins/jquery-steps-master/lib/jquery-1.9.1.min.js"></script>
    <script src="plugins/jquery-steps-master/lib/jquery.cookie-1.3.1.js"></script>
    <script src="plugins/jquery-steps-master/build/jquery.steps.js"></script>
    <script src="../js/jquery.validate.js"></script>
</head>
<body>
<div class="content">
    <script>
        $(function () {
            var form = $("#wizard");
            form.validate({
                errorPlacement: function errorPlacement(error, element) {
                    element.after(error);
                },
                rules: {
                    userName: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                    confirm: {
                        required: true,
                        equalTo: "#password"
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    userName: {
                        required: "Please Provide Username"
                    },
                    confirm: {
                        required: "Enter a valid password",
                        equalTo: "Provide correct confirm password"
                    },
                    email: {
                        required: "Enter a valid email address",
                        email: "Provide correct email address"
                    }
                }
            });
            form.children("div").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                onStepChanging: function (event, currentIndex, newIndex) {
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onFinishing: function (event, currentIndex) {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function (event, currentIndex) {
                    alert("Submitted!");
                }
            });
        });
    </script>
    <form id="wizard" action="#" method="post">
        <div>
            <h3>Account</h3>
            <section>
                <label for="userName">User name</label>
                <input id="userName" name="userName" type="text" class="required">
                <span id="userName-error" class="error" for="userName"></span>
                <label for="password">Password</label>
                <input id="password" name="password" type="text" class="required">
                <span id="password-error" class="error" for="userName"></span>
                <label for="confirm">Confirm Password</label>
                <input id="confirm" name="confirm" type="text" class="required">
                <span id="confirm-error" class="error" for="userName"></span>
                <p>(*) Mandatory</p>
            </section>
            <h3>Profile</h3>
            <section>
                <label for="name">First name *</label>
                <input id="name" name="name" type="text" class="required">
                <label for="surname">Last name *</label>
                <input id="surname" name="surname" type="text" class="required">
                <label for="email">Email *</label>
                <input id="email" name="email" type="text" class="required email">
                <label for="address">Address</label>
                <input id="address" name="address" type="text">
                <p>(*) Mandatory</p>
            </section>
            <h3>Hints</h3>
            <section>
                <ul>
                    <li>Foo</li>
                    <li>Bar</li>
                    <li>Foobar</li>
                </ul>
            </section>
            <h3>Finish</h3>
            <section>
                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> 
                <label for="acceptTerms">
                    I agree with the Terms and Conditions.</label>
                <input id="submit" name="submit" type="submit" class="required" value="Add User">
            </section>
        </div>
    </form>
</div>
</body>
</html>