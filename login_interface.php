<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #0074D9;
    }

    .wrapper {
        position: relative;
        max-width: 410px;
        width: 100%;
        background: #3498db;
        border-radius: 6px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
    }

    .button-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 14px;
     align-items: center;
    }

    .btn-admin,
    .btn-patient,
    .btn-hospital {
        margin: 0px;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        border: none;
        border-radius: 11px;
        cursor: pointer;
        background-color: #0074D9;
        transition: background-color 0.3s ease;
        color: #fff;
    }

    .btn-admin:hover,
    .btn-patient:hover,
    .btn-hospital:hover {
        background-color: #ecf0f1;
        color: #000;
    }

    .login-form {
        display: none;
        
    }

    .login-form.active {
        display: block;
    }
</style>

<body>
    <div class="wrapper">
        <div class="button-container">
            <button class="btn-patient" onclick="showForm('patient')">Patient</button>
            <button class="btn-admin" onclick="showForm('admin')">Admin</button>
            <button class="btn-hospital" onclick="showForm('hospital')">Hospital</button>
        </div>

        <div id="loginForms">
            <form id="patient_login_form" class="login-form">
                <?php include 'patient/patient_login.php' ?>
            </form>

            <!-- Admin Login Form -->
            <form id="admin_login_form" class="login-form">
                <?php include 'admin_login.php' ?>
            </form>

            <!-- Hospital Login Form -->
            <form id="hospital_login_form" class="login-form">
                <?php include 'hospital_login.php' ?>
            </form>
        </div>

        <script>
            // Show the patient form by default
            showForm('patient');

            function showForm(formType) {
                // Get the loginForms div element
                const loginFormsDiv = document.getElementById('loginForms');

                // Hide all forms first
                const forms = loginFormsDiv.getElementsByClassName('login-form');
                for (let i = 0; i < forms.length; i++) {
                    forms[i].classList.remove('active');
                }

                // Show the selected form
                const selectedForm = document.getElementById(formType + '_login_form');
                if (selectedForm) {
                    selectedForm.classList.add('active');
                }
            }
        </script>
    </div>
</body>

</html>