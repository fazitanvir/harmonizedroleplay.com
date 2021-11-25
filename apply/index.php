<?php 
    include(__DIR__ . "/../config.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        extract($_POST);

        $namep = $_POST["name"];
        $email = $_POST["email"];
        $discord = $_POST["discord"];
        $age = $_POST["age"];
        $timezone = $_POST["timezone"];
        $department = $_POST["department"];

        if ($name == "" or null || $email == "" or null || $discord == "" or null || $age == "" or null || $timezone == "" or null || $department == "" or null) {
        }

        elseif ($name !== "" or null || $email !== "" or null || $discord !== "" or null || $age !== "" or null || $timezone !== "" or null || $department !== "" or null) {
            $timestamp = date("c", strtotime("now"));

            $json_data = json_encode([
                // Text-to-speech
                "tts" => false,

                // Embeds Array
                "embeds" => [
                    [
                        "title" => "New Application",
                        "type" => "rich",
                        "timestamp" => $timestamp,
                        "color" => hexdec(str_replace("#", "", $colorhex)),

                        "footer" => [
                            "text" => $name,
                            "icon_url" => $logo
                        ],

                        "author" => [
                            "name" => $namep,
                        ],

                        "fields" => [
                            [
                                "name" => "Name",
                                "value" => $namep,
                                "inline" => true
                            ],
                            [
                                "name" => "Email",
                                "value" => $email,
                                "inline" => true
                            ],
                            [
                                "name" => "Discord",
                                "value" => $discord,
                                "inline" => true
                            ],
                            [
                                "name" => "Age",
                                "value" => $age,
                                "inline" => true
                            ],
                            [
                                "name" => "Timezone",
                                "value" => $timezone,
                                "inline" => true
                            ],
                            [
                                "name" => "Department",
                                "value" => $department,
                                "inline" => true
                            ]
                        ]
                    ]
                ]

            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


            $ch = curl_init( $webhookurl );
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
            curl_setopt( $ch, CURLOPT_POST, 1);
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
            curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt( $ch, CURLOPT_HEADER, 0);
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec( $ch );
            curl_close( $ch );

        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $name ?> | Apply</title>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="<?php echo $color ?>">
    <meta property="og:title" content="<?php echo $name ?>">
    <meta property="og:description" content="<?php echo $desc ?>">
    <meta property="og:image" content="<?php echo $logo ?>">
    <link rel="icon" type="image/png" href="<?php echo $logo ?>">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<style>
    	form {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}

		form input, form select {
			-webkit-appearance: none;
			flex-basis: calc(50% - 3%);
			margin-left: 1.5%;
			margin-right: 1.5%;
			box-sizing: border-box;
			margin-bottom: 2vh;
			padding: .5vh .25%;
			outline: none;
			font-size: 1.75vh;
			border: .05vh solid #b5b5b5;
			border-radius: .5vh;
		}

		form .bottom {
			text-align: center;
		}

		form input[type=submit] {
			display: inline-block;
			margin-top: 2.5vh;
			flex-basis: auto;
			width: auto;
			padding: 1vh 5%;
			background-color: <?php echo $color ?>;
			outline: none;
			border: none;
			color: #fff;
			cursor: pointer;
		}
    </style>

<body class="bg-<?php echo $theme ?>">

    <?php include(__DIR__ . "/../includes/scrollbar.inc.php") ?>

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-<?php echo $theme ?>" style="background-color: <?php echo $color ?>; box-shadow: 0 0.01vh 1vh 0 #000;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $domain ?>">
                <img src="<?php echo $logo ?>" alt="" width="30" height="30" class="d-inline-block align-text-top"> <?php echo $name ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    foreach ($linkarray as $key => $link) {
                        if ($link !== "" && $link !== "#" && $link !== null) {
                            $piece = explode("#", $link);

                            if ($piece[0] == "Apply") {
                                echo '<li class="nav-item"> <a class="nav-link active" href="' . $piece[1] . '">' . $piece[0] . '</a> </li>';
                            } elseif ($piece[0] !== $domain) {
                                echo '<li class="nav-item"> <a class="nav-link" href="' . $piece[1] . '">' . $piece[0] . '</a> </li>';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="apply">
        <h1>Application</h1>
        <form method="POST">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="discord" placeholder="Discord">
            <input type="number" name="age" placeholder="Age">
            <input type="type" name="timezone" placeholder="Timezone"> 
            <select name="department">
                <option selected disabled>Select Department</option>
                <?php 
                    foreach ($departments as &$department) {
                ?>
                    <option value="<?php echo $department ?>"><?php echo $department ?></option>
                <?php }?>
            </select>
            <div class="bottom">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>