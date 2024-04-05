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

    <script>
        // JavaScript to show fields based on selected option
        function showFields() {
            var userType = document.getElementById("userType").value;
            var patientFields = document.getElementById("patientFields");
            var instituteFields = document.getElementById("instituteFields");
            var doctorFields = document.getElementById("doctorFields");
            var labFields = document.getElementById("labFields");

            if (userType === "patient") {
                patientFields.style.display = "block";
                instituteFields.style.display = "none";
                doctorFields.style.display = "none";
                labFields.style.display = "none";
            } else if (userType === "institute") {
                patientFields.style.display = "none";
                instituteFields.style.display = "block";
                doctorFields.style.display = "none";
                labFields.style.display = "none";
            } else if (userType === "doctor") {
                patientFields.style.display = "none";
                instituteFields.style.display = "none";
                doctorFields.style.display = "block";
                labFields.style.display = "none";
            } else if (userType === "lab"){
                patientFields.style.display = "none";
                instituteFields.style.display = "none";
                doctorFields.style.display = "none";
                labFields.style.display = "block";
            }
            else {
                patientFields.style.display = "none";
                instituteFields.style.display = "none";
                doctorFields.style.display = "none";
                labFields.style.display = "none";
            }
        }
    </script>
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

            <form method="POST" action="includes/signup.inc.php">

                <h1 class="text-3xl font-bold text-center">Sign Up</h1>
                <br>
                <p class="text-gray-500 text-center">Please fill in this form to create an account.</p>

                <p class="text-gray-500 text-center mt-3">Already have an account? <a href="login.php" class="text-blue-500">Sign In</a></p>

                <hr class="my-5">

                <!-- Dropdown for user type -->
                <div class="flex justify-center items-center mb-4">
                    <select id="userType" class="border-2 border-gray-300 p-2 rounded-lg" onchange="showFields()">
                        <option value="" disabled selected>Select User Type</option>
                        <option value="patient">Patient</option>
                        <option value="institute">Institute</option>
                        <option value="doctor">Doctor</option>
                        <option value="lab">Pathology Labs</option>
                    </select>
                </div>

            <!-- Patient fields -->
            <div id="patientFields" style="display: none;">
                <div class="text-left mb-5">

                    <div class="flex justify-between items-center mb-2">
                        <label for="name" class="mr-2 font-semibold">Full Name :</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="username" class="mr-2 font-semibold">Username :</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="mr-2 font-semibold">Password :</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="confirm-password" class="mr-2 font-semibold">Confirm Password :</label>
                        <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm your password" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="dob" class="mr-2 font-semibold">Date of Birth :</label>
                        <input type="date" id="dob" name="dob" class="border-2 border-gray-300 p-2 rounded-lg mr-24">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="aadhar" class="mr-2 font-semibold">Aadhar Number :</label>
                        <input type="text" id="aadhar" name="aadhar" placeholder="XXXX-XXXX-XXXX" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="phone" class="mr-2 font-semibold">Phone Number :</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>
                </div>
            </div>

            <!-- Institute fields -->
            <div id="instituteFields" style="display: none;">
                <div class="text-left mb-5">

                    <div class="flex justify-between items-center mb-2">
                        <label for="institute_name" class="mr-2 font-semibold">Institute Name :</label>
                        <input type="text" id="institute_name" name="institute_name" placeholder="Enter institute name" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="license" class="mr-2 font-semibold">License :</label>
                        <input type="text" id="license" name="license" placeholder="Enter license number" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="institute_id" class="mr-2 font-semibold">Institute ID :</label>
                        <input type="text" id="institute_id" name="institute_id" placeholder="Enter institute ID" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="mr-2 font-semibold">Password :</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="address" class="mr-2 font-semibold">Address :</label>
                        <input type="text" id="address" name="address" placeholder="Enter your phone number" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="phone" class="mr-2 font-semibold">Phone Number :</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>
                </div>
            </div>

            <!-- Doctor fields -->
            <div id="doctorFields" style="display: none;">
                <!-- Add doctor-specific fields here -->
                <div class="text-left mb-5">
                    <div class="flex justify-between items-center mb-2">
                        <label for="doctor_name" class="mr-2 font-semibold">Doctor Name :</label>
                        <input type="text" id="doctor_name" placeholder="Enter doctor name" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="institute_id" class="mr-2 font-semibold">Institute ID :</label>
                        <input type="text" id="institute_id" placeholder="Enter institute ID" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="mr-2 font-semibold">Password :</label>
                        <input type="password" id="password" placeholder="Enter password" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="address" class="mr-2 font-semibold">Address :</label>
                        <input type="text" id="address" placeholder="Enter your address" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>
                </div>
            </div>

            <!-- Lab fields -->
            <div id="labFields" style="display: none;">
                <div class="text-left mb-5">

                    <div class="flex justify-between items-center mb-2">
                        <label for="institute_name" class="mr-2 font-semibold">Lab Name :</label>
                        <input type="text" id="institute_name" name="institute_name" placeholder="Enter institute name" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="license" class="mr-2 font-semibold">License :</label>
                        <input type="text" id="license" name="license" placeholder="Enter license number" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="institute_id" class="mr-2 font-semibold">Lab ID :</label>
                        <input type="text" id="institute_id" name="institute_id" placeholder="Enter Lab ID" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="mr-2 font-semibold">Password :</label>
                        <input type="password" id="password" placeholder="Enter password" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <label for="phone" class="mr-2 font-semibold">Address :</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" class="border-2 border-gray-300 p-2 rounded-lg mr-14">
                    </div>
                </div>
            </div>

            <!-- Sign Up button -->
                <div>
                    <button type="submit" name = "submit" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-700 block w-full text-center">Sign Up</a>
                </div>
            </form>
            <?php
                    if(isset($_GET["error"])) {
                        if($_GET["error"] == "emptyinput"){
                            echo "<p>Fill in all the Fields!</p>";
                        }
                        else if($_GET["error"] == "usernameexists"){
                            echo "<p>Registration number already exists.</p>";
                        }
                        else if($_GET["error"] == "stmtfail" || $_GET["error"] == "stmtfailed") {
                            echo "<p>Please try again.</p>";
                        }
                        else if($_GET["error"] == "none") {
                            echo "<p>You have registered successfully!</p>";
                        }
                    }
                ?>
        </div>
    </div>

    <iframe src="footer.php" style="height:40%; width:100%;"></iframe>

</body>
</html>
