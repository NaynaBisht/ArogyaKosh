<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>ArogyaKosh</title>

    <style>
        .background_image {
            background-image: url('medical-banner-with-doctor-working-laptop.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 150vh;
            background-position: center;
            padding: 20px;
            border: 2px ;
            border-radius: 10px;
            margin-left: 40px;
            margin-right: 40px;
            margin-top: 10px;
            margin-bottom: 20px;
            opacity: 0.8;
            position: relative; /* Position the container relatively */
        }

        .container {
            max-width: 1200px; /* Adjust maximum width */
            margin: 0 auto; /* Center the container horizontally */
        }

        .text-center {
            text-align: center; /* Center align text */
        }

        .form-container {
            position: absolute; /* Position the form absolutely */
            top: 50%; /* Align the form to the center vertically */
            left: 50%; /* Align the form to the center horizontally */
            transform: translate(-50%, -50%); /* Center the form */
            padding: 20px; /* Add padding to the form */
            border-radius: 10px; /* Rounded corners */
            opacity: 0.9; /* Adjust the opacity of the form background */
            background-color: #ffffff; /* Background color for the form */
        }
    </style>
    

</head>
<body>

    <iframe src="header.php" style="height:65; width:100%;"></iframe>

    <div class=" background_image">
        
        <form action="login.php" method="post" class="form-container border-gray-300 p-3 border-2 w-1/2">

            <h1 class="text-3xl font-bold text-center">Sign In</h1>

            <hr class="my-5">
    
                <div class="text-left mb-5">
    
                    <div class="flex justify-between items-center mb-2">
                        <label for="username" class="mr-2 font-semibold">User/Institute ID :</label>
                        <input type="text" id="username" placeholder="Enter your ID" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>
    
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="mr-2 font-semibold">Password :</label>
                        <input type="password" id="password" placeholder="Enter your password" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>
    
                    <div class="flex justify-between items-center mb-2">
                        <label for="user-type" class="mr-2 font-semibold">User Type :</label>
                        <select class="border-2 border-gray-300 px-14 py-2 rounded-lg mr-16" id="user-type" >
                            <option value="patient">Patient</option>
                            <option value="doctor">Institute</option>
                            <option value="admin">Doctor</option>
                            <option value="lab">Lab</option>

                        </select>
                    </div>
                    
                    <input type="submit" value="Sign In" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-700 block w-full">

                    <p class="text-gray-500 text-center mt-3">Forgot password? <a href="forgot-password.html" class="text-blue-500">Reset password</a></p>

                    <input type="hidden" name="csrf_token" value="a2f3b4e5c6d7e8f9">
                    <input type="hidden" name="csrf_token" value="a2f3b4e5c6d7e8f9">     </div>

                    <p class="text-gray-500 text-center mt-3">Don't have an account? <a href="landing.php" class="text-blue-500">Sign up</a></p>
                </div>
        </form>
        
    </div>
    
    <iframe src="footer.php" style="height:40%; width:100%;"></iframe>
    
</body>
</html>
