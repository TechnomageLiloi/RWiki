<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" type="image/png" href="/Signum.png">

        <!-- @todo: add function to link scripts and styles -->
        <script src="<?php echo ROOT_URL; ?>/vendor/technomage-liloi/rune-framework/Frontside/Library/Jquery.min.js"></script>
        <script src="<?php echo ROOT_URL; ?>/vendor/technomage-liloi/rune-framework/Frontside/Library/Underscore.min.js"></script>
        <script src="<?php echo ROOT_URL; ?>/vendor/technomage-liloi/rune-framework/Frontside/Library/Backbone.min.js"></script>
        <script src="<?php echo ROOT_URL; ?>/vendor/technomage-liloi/rune-api/Client/API.js"></script>
        <script src="<?php echo ROOT_URL; ?>/vendor/technomage-liloi/stylo/Source/Stylo.js"></script>

        <link href="<?php echo ROOT_URL; ?>/Engine/Style.css" rel="stylesheet" />
        <link href="<?php echo ROOT_URL; ?>/Engine/API/Style.css" rel="stylesheet" />

        <script src="<?php echo ROOT_URL; ?>/Engine/API/Requests.js"></script>
        <script src="<?php echo ROOT_URL; ?>/Engine/Bootstrap.js"></script>

        <script src="<?php echo ROOT_URL; ?>/Engine/API/Security/Password/Requests.js"></script>
        <script src="<?php echo ROOT_URL; ?>/Engine/API/Wiki/Requests.js"></script>
        <script src="<?php echo ROOT_URL; ?>/Modules/News/API/Requests.js"></script>

        <title>rWiki</title>
    </head>
    <body>
        <div id="head">
            <?php if($admin): ?>
                <a href="/" class="butn">Map</a>
                <a href="javascript:void(0)" onclick="Rune.News.Topics.show();" class="butn">Topics</a>
                <a href="javascript:void(0)" class="butn" onclick="Rune.Security.Password.logout();">Logout</a>
            <?php else: ?>
                <a href="/" class="butn">Map</a>
                <a href="javascript:void(0)" class="butn" onclick="Rune.Security.Password.show();">Login</a>
            <?php endif; ?>
        </div>

        <div id="page" class="stylo">
            <script>
                Rune.Wiki.show();
            </script>
        </div>
    </body>
</html>