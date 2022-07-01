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
        // "Economy Server" => [
        //     "IP" => "174.136.235.57",
        //     "port" => "30121"
        // ],
        "vMenu Server" => [
            "IP" => "174.136.235.57",
            "port" => "30120"
        ],
        "Discord Bot" => [
            "IP" => "174.136.235.57",
            "port" => "8081"
        ],
    ];

    // Gallery
    $gallery = [
        "https://cdn.discordapp.com/attachments/958505539426467880/985344370737807370/unknown.png",
        "https://cdn.discordapp.com/attachments/958505539426467880/985344472323858462/unknown.png",
        "https://cdn.discordapp.com/attachments/958505539426467880/983777651804229734/jraZiOf.jpg",
        "https://cdn.discordapp.com/attachments/958505539426467880/983760443539607572/unknown.png",
        "https://cdn.discordapp.com/attachments/977370546566201344/979817148144828416/KyawHMX.png",
        "https://i.imgur.com/XMAo6T5.jpg",
        "https://i.imgur.com/4D04RmQ.png"
    ];

    // Navbar Links
    $link1label = "About";
    $link1href = $domain."about";

    $link2label = "Forums";
    $link2href = $domain."forums";

    $link3label = "Status";
    $link3href = $domain."status";

    $link4label = "Gallery";
    $link4href = $domain."gallery";

    $link5label = "CAD";
    $link5href = "https://cad.harmonizedroleplay.com";

    $link6label = "Store";
    $link6href = "https://harmonized-roleplay.tebex.io/";

    // Navbar Array
    $linkarray = array("link1" => "$link1label#$link1href", "link2" => "$link2label#$link2href", "link3" => "$link3label#$link3href", "link4" => "$link4label#$link4href", "link5" => "$link5label#$link5href", "link6" => "$link6label#$link6href");

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
