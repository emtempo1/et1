<?php
/**
 * Scripts para a inclusão de anúncios
 */


// Anúncios do Governo do Estado do Amazonas - Lista A

    // [anuncio_gov-300x600]
    function ads_gov_300x600() {
        return '<div id="gpt-passback-600">
                <script>
                    window.googletag = window.googletag || {cmd: []};
                    googletag.cmd.push(function() {
                    googletag.defineSlot("/21799500428/192emtempo", [300, 600], "gpt-passback-600").addService(googletag.pubads());
                    googletag.enableServices();
                    googletag.display("gpt-passback"-600);
                </script>
            </div>';
    }
    add_shortcode('anuncio_gov-300x600', 'ads_gov_300x600');


    // [anuncio_gov-1140x90]
    function ads_gov_1140x90() {
        return '<div id="gpt-passback-90">
                <script>
                    window.googletag = window.googletag || {cmd: []};
                    googletag.cmd.push(function() {
                    googletag.defineSlot("/21799500428/193emtempo", [1140, 90], "gpt-passback-90").addService(googletag.pubads());
                    googletag.enableServices();
                    googletag.display("gpt-passback-90");
                    });
                </script>
            </div>';
    }
    add_shortcode('anuncio_gov-1140x90', 'ads_gov_1140x90');


    // [anuncio_gov-1140x140]
    function ads_gov_1140x140() {
        return '<div id="gpt-passback-140">
            <script>
                window.googletag = window.googletag || {cmd: []};
                googletag.cmd.push(function() {
                googletag.defineSlot("/21799500428/195emtempo", [1140, 140], "gpt-passback-140").addService(googletag.pubads());
                googletag.enableServices();
                googletag.display("gpt-passback-140");
                });
            </script>
            </div>';
    }
    add_shortcode('anuncio_gov-1140x140', 'ads_gov_1140x140');


    // [anuncio_gov-1140x190]
    function ads_gov_1140x190() {
        return '<div id="gpt-passback-190">
            <script>
                window.googletag = window.googletag || {cmd: []};
                googletag.cmd.push(function() {
                googletag.defineSlot("/21799500428/196emtempo", [[970, 90], [970, 250], [1140, 190], [1, 1], [300, 600], [300, 50], [320, 50], [300, 250], [300, 75], [336, 280]], "gpt-passback-190").addService(googletag.pubads());
                googletag.enableServices();
                googletag.display("gpt-passback-190");
                });
            </script>
            </div>';
    }
    add_shortcode('anuncio_gov-1140x190', 'ads_gov_1140x190');


    // [anuncio_gov-1140x285]
    function ads_gov_1140x285() {
        return '<div id="gpt-passback-285">
            <script>
                window.googletag = window.googletag || {cmd: []};
                googletag.cmd.push(function() {
                googletag.defineSlot("/21799500428/194emtempo", [[300, 50], [300, 600], [300, 250], [336, 280], [300, 75], [1140, 285], [970, 250], [1, 1], [320, 50], [970, 90]], "gpt-passback-285").addService(googletag.pubads());
                googletag.enableServices();
                googletag.display("gpt-passback-285");
                });
            </script>
            </div>';
    }
    add_shortcode('anuncio_gov-1140x285', 'ads_gov_1140x285');

// Lista A




// Anúncios do Governo do Estado do Amazonas - Lista B

    // [anuncio_gov-1140x410]
    function ads_gov_1140x410() {
        return '<div id="gpt-passback-410">
            <script>
                window.googletag = window.googletag || {cmd: []};
                googletag.cmd.push(function() {
                googletag.defineSlot("/21799500428/213emtempo", [[1140, 410], [300, 250]], "gpt-passback-410").addService(googletag.pubads());
                googletag.enableServices();
                googletag.display("gpt-passback-410");
                });
            </script>
            </div>';
    }
    add_shortcode('anuncio_gov-1140x410', 'ads_gov_1140x410');

// Lista B




// Anúncios Ad Manager 

    // TO VERIFY
        // [anuncio_et1_300x250_geral]
        function admanager_et1_300x250_geral() {
            return '<!-- /245408516/et1_300x250_geral -->
            <div id="div-gpt-ad-1671132062708-0" style="min-width: 300px; min-height: 250px;">
            <script>
                googletag.cmd.push(function() { googletag.display("div-gpt-ad-1671132062708-0"); });
            </script>
            </div>';
        }
        add_shortcode('anuncio_et1_300x250_geral', 'admanager_et1_300x250_geral');

        // [anuncio_et1_1140x90_geral]
        function admanager_et1_1140x90_geral() {
            return '<!-- /245408516/et1_1140x90_geral -->
            <div id="div-gpt-ad-1671469270170-0" style="min-width: 1140px; min-height: 90px;">
            <script>
                googletag.cmd.push(function() { googletag.display("div-gpt-ad-1671469270170-0"); });
            </script>
            </div>';
        }
        add_shortcode('anuncio_et1_1140x90_geral', 'admanager_et1_1140x90_geral');
    // TO VERIFY








// Ad Manager






// Anúncio Ad Manager ET1

    // [anuncio_et1_home_300x250_1]
    function admanager_et1_home_300x250_1 () {
        echo '<!-- /22860165856/et1_home_300x250_1 -->
            <div id="div-gpt-ad-1671736118587-0" style="min-width: 300px; min-height: 250px;">
                <script>
                    googletag.cmd.push(function() { googletag.display("div-gpt-ad-1671736118587-0"); });
                </script>
            </div>';
    }
    add_shortcode('anuncio_et1_home_300x250_1', 'admanager_et1_home_300x250_1');

    // [anuncio_et1_home_300x250_2]
    function admanager_et1_home_300x250_2 () {
        echo '<!-- /22860165856/et1_home_300x250_2 -->
            <div id="div-gpt-ad-1671737512675-0" style="min-width: 300px; min-height: 250px;">
            <script>
                googletag.cmd.push(function() { googletag.display("div-gpt-ad-1671737512675-0"); });
            </script>
            </div>';
    }
    add_shortcode('anuncio_et1_home_300x250_2', 'admanager_et1_home_300x250_2');

    // [anuncio_et1_home_300x600_1]
    function admanager_et1_home_300x600_1 () {
        echo '<!-- /22860165856/et1_home_300x600_1 -->
            <div id="div-gpt-ad-1671819763493-0" style="min-width: 300px; min-height: 600px;">
            <script>
                googletag.cmd.push(function() { googletag.display("div-gpt-ad-1671819763493-0"); });
            </script>
            </div>';
    }
    add_shortcode('anuncio_et1_home_300x600_1', 'admanager_et1_home_300x600_1');


    // [anuncio_et1_home_horizontal_1]
    function admanager_et1_home_horizontal_1() {
        return '<!-- /22860165856/et1_home_horizontal_1 -->
        <div id="div-gpt-ad-1671821845656-0" style="min-width: 728px; min-height: 90px;">
            <script>
            googletag.cmd.push(function() { googletag.display("div-gpt-ad-1671821845656-0"); });
            </script>
        </div>';
    }
    add_shortcode('anuncio_et1_home_horizontal_1', 'admanager_et1_home_horizontal_1');


?>