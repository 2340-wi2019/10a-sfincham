<?php
    /*
        Plugin Name: 2340 Sample Plugin
        Plugin URI: https://faculty.mccneb.edu/grosas/
        Description: A sample plugin for INFO 2340.
        Version: 1.0
        Author: Guillermo J. Rosas
        Author URI: http://faculty.mccneb.edu/grosas/
        License: GPL

    */

    add_shortcode("wittyquote", "get_quote");

    function get_quote($atts) {
        $quotes = array (
            "I can do all things through Christ, who gives me strength",
            "The race isn't always to the swift, but to those who keep on running. ",
            "Chloe: 'Dad, it's snowing!' Me: 'Yes, God is making it snow.' Chole: 'No, Elsa is.' ",
            "I bet when Cheetahs race and one of them cheats, the other one goes, 'Man, you're such a Cheetah!' ",
            "If you ever find someone who is unconcious, but now is waking up, tell him, 'I just saved your life.' "
        );

        return $quotes[array_rand($quotes)];
    }

