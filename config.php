<?php
    // Website Name
    $name = "Harmonized Roleplay";

    // Description
    $desc = "Realistic FiveM Roleplay Community";

    // Discord Server ID
    $serverid = "863229062885802044";

    // FiveM Connect Link
    $fivem = "fivem://connect/51.81.215.16:30121";

    // Discord Invite
    $discord = "https://discord.gg/harmonizedrp";
    
    // Theme (light or dark)
    $theme = "dark";

    // Domain (with trailing slash)
    $domain = "https://harmonizedroleplay.com/";

    // Discord Domain
    $discordomain = "https://harmonizedroleplay.com/discord";

    // Color (hex)
    $color = "#ae47ff";

    // Logo (must be an image ".png, .jpg, .gif, etc")
    $logo = $domain."assets/img/logo.png";

    // About Page
    $about = "Harmonized Roleplay is an upcoming Economy FiveM server with exciting new features and looking to grow the community. With LEO positions available and staff applications open, we are welcoming new members with open arms and getting you involved! Hosting frequent giveaways and new events weekly, there is a diverse range of community events for you to join in with. Our friendly staff ensure your experience with us in nothing but the best, and are dedicated to ensure you have a fun time within Harmonized.";

    // Status Page
    $servers = [
		"Economy Server" => [
			"IP" => "15.204.147.172",
			"port" => "30121"
		],
        "vMenu Server" => [
            "IP" => "15.204.147.172",
            "port" => "30120"
        ],
		"Discord Bot" => [
			"IP" => "15.204.147.172",
			"port" => "8081"
		],
	];

    // Gallery
    $gallery = [
		"https://cdn.discordapp.com/attachments/875906782327885894/896546735646732308/screenshot.jpg",
		"https://cdn.discordapp.com/attachments/875906782327885894/911184680429178890/screenshot.jpg",
        "https://cdn.discordapp.com/attachments/875906782327885894/893347750618476594/screenshot.jpg"
	];

    // Navbar Links

    $link1label = "About";
    $link1href = $domain."about";

    $link2label = "Apply";
    $link2href = $domain."apply";

    $link3label = "Status";
    $link3href = $domain."status";

    $link4label = "Gallery";
    $link4href = $domain."gallery";

    $link5label = "Store";
    $link5href = "https://harmonized-roleplay.tebex.io/";

    // Navbar Array
    $linkarray = array("link1" => "$link1label#$link1href", "link2" => "$link2label#$link2href", "link3" => "$link3label#$link3href", "link4" => "$link4label#$link4href", "link5" => "$link5label#$link5href");

    // Text Color
    if ($theme == "light"){
        $txtcolor = "dark";
    } else if ($theme == "dark") {
        $txtcolor = "light";
    }

    // Discord Member Count
    $link = file_get_contents('https://discord.com/api/guilds/'.$serverid.'/widget.json');
    $JSON = json_decode($link, true);
    $members = $JSON['presence_count'];
?>
