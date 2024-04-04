<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>

    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- <style>
        .row{
            border: 1px solid black;
            display: flex;
            flex-wrap: wrap;
        }
        .row h1{
            width: 100%;
            text-align: center;
            font-size: 3.75em;
            font-weight: 600;
            margin: 0.6em 0;
            columns: #070024;
        }
        .column{
            border: 1px solid orange;
            padding-left: 1em;
        }
        .card{
            padding: 3.1em 1.25em;
            text-align: center;
            background: linear-gradient(0deg, #397ef6 10px);
            box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.15);
            background-repeat: no-repeat;
            background-position: 0 0.62em;
            border-radius: 0.5em;
        }
        .card .icon{
            font-size: 2.5em;
            height: 2em;
            width: 2em;
            margin: auto;
            display: grid;
            place-items: center;
            color: #ffffff;
            border-radius: 50%;
        }

        .card h3{
            font-size: 1.5em;
            font-weight: 600;
            margin: 1.5em 0 0.5em;
            color: #070024;
            letter-spacing: 0.3px;
        }
    </style> -->

    <!-- <style>
        html, body {
            height: 100%;
        }
    </style> -->


</head>
<body class="flex flex-col justify-between min-h-screen">

    <iframe src="header.php" style="height:65; width:100%;"></iframe>

    <main class="flex-grow overflow-y-auto">

        <section class="container mx-auto mt-20 ">
            <div class="flex justify-center">

                <!-- column 1 -->
                <div class="flex-shrink-0 w-64 m-4">
                    <a href="patientCases.php" class="block rounded-lg overflow-hidden border border-gray-300 hover:border-gray-800 hover:shadow-md">
                        <div class="card p-6 flex flex-col items-center justify-center">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 64 64"><path fill="#888888" d="M5.482 33.956h5.547c.421 0 .811.21 1.043.556c0 0 1.057 1.596 2.112 3.179c.585-5.186 2.622-23.314 2.622-23.314c.07-.598.561-1.07 1.171-1.105a1.245 1.245 0 0 1 1.287.956s2.656 11.137 3.913 16.399l1.663-4.708a1.248 1.248 0 0 1 2.35-.014s2.467 6.701 2.961 8.051h4.814c.421 0 .811.21 1.042.556c0 0 1.058 1.596 2.111 3.18c.587-5.186 2.624-23.314 2.624-23.314a1.25 1.25 0 0 1 2.458-.149l3.911 16.399l1.666-4.708a1.247 1.247 0 0 1 2.348-.014s2.47 6.701 2.963 8.051h4.92l.262-.5c2.39-4.112 4.135-11.726 4.135-17.271c0-7.075-5.149-15.621-15.183-15.621c-14.338 0-16.181 13.431-16.181 13.431S30.263.63 15.934.63C6.254.63 1.061 8.866 1.061 16.186c0 6.322 2.768 14.126 4.186 17.331z"/><path fill="#888888" d="M53.216 36.456c-.526 0-.993-.329-1.172-.818l-2.068-5.617l-1.915 5.432c-.185.523-.69.862-1.243.829a1.238 1.238 0 0 1-1.149-.958l-3.238-13.567l-2.208 19.623a1.247 1.247 0 0 1-.951 1.072a1.248 1.248 0 0 1-1.334-.521s-3.03-4.561-3.642-5.476H29.28a1.25 1.25 0 0 1-1.171-.818l-2.068-5.616a4924.56 4924.56 0 0 0-1.92 5.432a1.24 1.24 0 0 1-1.243.829a1.248 1.248 0 0 1-1.153-.958l-3.232-13.558l-2.207 19.614a1.248 1.248 0 0 1-.95 1.072a1.25 1.25 0 0 1-1.335-.521s-3.03-4.561-3.642-5.476H6.84c8.964 15.927 25.201 26.417 25.201 26.417S48.572 52.38 57.679 36.455h-4.462z"/></svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 hover:text-blue-600">View Active/Past Cases</h3>
                        </div>
                    </a>
                </div>


                
                <!-- column 2 -->
                <div class="flex-shrink-0 w-64 m-4">
                    <a href="patientUpload.php" class="block rounded-lg overflow-hidden border border-gray-300 hover:border-gray-800 hover:shadow-md">
                        <div class="card p-6 flex flex-col items-center justify-center">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 64 64"><path fill="#888888" d="M56.277 20.663a7.294 7.294 0 1 1-14.588 0a7.294 7.294 0 0 1 14.588 0M3.292 6.261V19.49H1.314a.677.677 0 0 1-.679-.678V1.742c0-.578.431-1.048 1.022-1.048h8.747c.59 0 1.022.469 1.022 1.046v1.002h13.523c.378 0 .68.303.68.676v3.838H14.085V6.251c0-.577-.432-1.046-1.024-1.046H4.317c-.592 0-1.024.477-1.024 1.056z"/><path fill="#888888" d="M30.946 27.5a.676.676 0 0 1-.68.676H6.631a.676.676 0 0 1-.679-.677v-17.07c0-.578.431-1.048 1.022-1.048h8.745c.592 0 1.024.469 1.024 1.046v1.002h13.523c.377 0 .68.303.68.676zm-10.484-9.719v-4.026h-4.028v4.026h-4.027v4.028h4.027v4.027h4.028v-4.027h4.027v-4.028zM56.19 29.836a7.311 7.311 0 0 1 7.317 7.31l.015 26.733H38.978V41.718h-.994l-4.526 6.753c-.737 1.005-2.233 1.492-3.426 1.492H19.406a3.197 3.197 0 0 1-3.198-3.193c0-1.76 1.433-3.15 3.198-3.15h9.665l6.705-10.138c1.606-2.452 4.748-3.637 7.277-3.637l13.136-.008z"/></svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 hover:text-blue-600">Upload Reports</h3>
                        </div>
                    </a>
                </div>

                <!-- column 3 -->
                <div class="flex-shrink-0 w-64 m-4">
                    <a href="Subscription.php" class="block rounded-lg overflow-hidden border border-gray-300 hover:border-gray-800 hover:shadow-md">
                        <div class="card p-6 flex flex-col items-center justify-center">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 64 64"><path fill="#888888" d="M14.551 11.92a4.837 4.837 0 0 0 4.837-4.839a4.837 4.837 0 1 0-9.674 0a4.84 4.84 0 0 0 4.837 4.839m36.302-.068a4.916 4.916 0 0 0 4.915-4.914a4.913 4.913 0 1 0-9.827 0a4.912 4.912 0 0 0 4.912 4.914M12.764 39.458c-6.36 0-11.516 5.155-11.516 11.515s5.156 11.516 11.516 11.516S24.28 57.333 24.28 50.973c0-6.359-5.156-11.515-11.516-11.515m1.365 18.825v1.84h-2.753v-1.84c-2.936-.336-4.809-3.131-4.809-4.958h2.935c0 .821.633 1.912 1.901 2.173v-3.45c-.633-.122-.987-.222-1.666-.408c-1.735-.479-2.936-1.94-2.936-3.802c0-1.845 1.801-3.915 4.576-4.282v-1.719h2.753v1.719c2.943.379 4.753 2.553 4.753 4.726l-2.875-.001c-.002-.95-.792-1.813-1.878-1.919v3.236c.799.176.799.156 1.533.356c2.738.745 3.355 2.537 3.355 4.04c-.001 2.308-1.846 3.892-4.889 4.29z"/><path fill="#888888" d="M11.376 49.092c-1.23-.219-1.571-.745-1.571-1.313c0-.663.834-1.302 1.571-1.388zm2.786 6.393v-2.916c1.215.174 1.985.697 1.985 1.448c0 .664-.717 1.42-1.985 1.468M8.238 20.3h1.907l-2.204 8.203H21.16L18.956 20.3h1.907l2.259 8.203h4.253l-2.729-9.95c-.728-2.406-3.109-4.959-6.229-4.959h-7.736c-3.123 0-5.503 2.552-6.232 4.959l-2.726 9.95h4.253z"/><path fill="#888888" d="M56.104 13.545a4.372 4.372 0 0 1 4.373 4.369l-.007 13.414h2.815v5.499l-5.696.003v22.774c0 1.592-1.306 2.883-2.899 2.883a2.884 2.884 0 0 1-2.881-2.883V36.832h-1.837v22.772a2.885 2.885 0 0 1-2.886 2.883a2.894 2.894 0 0 1-2.895-2.883v-22.77l-42.945.013v-5.519h42.945V18.413l-9.174 10.862c-1.93 2.229-5.367-.555-3.43-2.939l9.506-11.421c.615-.612 1.166-1.37 3.436-1.37h11.573z"/></svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 hover:text-blue-600">Subscription</h3>
                        </div>
                    </a>
                </div>

        </section>

    </main>


    <iframe src="footer.php" style="height:40%; width:100%;"></iframe>
    
</body>
</html>







