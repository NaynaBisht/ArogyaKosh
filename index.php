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
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 20px;
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
        
        <div class="flex h-screen justify-center">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Welcome To ArogyaKosh</h1>
                <h2 class="text-2xl">Your Ultimate Health Vault</h2>
            </div>
        </div>
        
        <div class="form-container border-gray-300 p-3 border-2 w-1/2 ">

            <h1 class="text-3xl font-bold text-center">Sign Up</h1>
            <br>
            <p class="text-gray-500 text-center">Please fill in this form to create an account.</p>

            <p class="text-gray-500 text-center mt-3">Already have an account? <a href="login.php" class="text-blue-500">Sign In</a></p>

            <hr class="my-5">

                <div class="text-left mb-5">
    
                    <div class="flex justify-between items-center mb-2">
                        <label for="name" class="mr-2 font-semibold">Full Name :</label>
                        <input type="text" id="name" placeholder="Enter your full name" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>
                    
    
                    <div class="flex justify-between items-center mb-2">
                        <label for="username" class="mr-2 font-semibold">Username :</label>
                        <input type="text" id="username" placeholder="Enter your username" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>
    
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="mr-2 font-semibold">Password :</label>
                        <input type="password" id="password" placeholder="Enter your password" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>
    
                    <div class="flex justify-between items-center mb-2">
                        <label for="confirm-password" class="mr-2 font-semibold">Confirm Password :</label>
                        <input type="password" id="confirm-password" placeholder="Confirm your password" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>
    
                    <div class="flex justify-between items-center mb-2">
                        <label for="dob" class="mr-2 font-semibold">Date of Birth :</label>
                        <input type="date" id="dob" class="border-2 border-gray-300 p-2 rounded-lg mr-24">
                    </div>
    
                    <div class="flex justify-between items-center mb-2">
                        <label for="aadhar" class="mr-2 font-semibold">Aadhar Number :</label>
                        <input type="text" id="aadhar" placeholder="XXXX-XXXX-XXXX" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>
    
                    <div class="flex justify-between items-center mb-2">
                        <label for="phone" class="mr-2 font-semibold">Phone Number :</label>
                        <input type="text" id="phone" placeholder="Enter your phone number" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>
                    
                    <div>
                        <a href="login.php" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-700 block w-full text-center">Sign Up</a>
                    </div>
                    
                </div>
        </div>
    </div>

    <iframe src="footer.php" style="height:40%; width:100%;"></iframe>

</body>
</html>
