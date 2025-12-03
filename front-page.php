<?php get_header()?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS2 Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="page-wrapper">

        <section class="hero-section">
            <h1 class="title">Counter-Strike 2</h1>
            <img src="<?php echo esc_url(get_theme_file_uri("cs2.png"))?>" alt="site banner" width='200px', height='200px'>
        </section>

        <section class="info-section">
            <h2 class="section-title">What is CS2?</h2>
            <p class="section-text">
                Counter-Strike 2 is Valve’s updated version of CS:GO, built on the Source 2 engine.
                It brings upgraded graphics, responsive smokes, and improved gameplay mechanics.
            </p>
        </section>

        <section class="reasons-section">
            <h2 class="section-title">Why People Love It</h2>
            <ul class="reasons-list">
                <li class="reason-item">Competitive 5v5 gameplay</li>
                <li class="reason-item">Team-based strategy and tactics</li>
                <li class="reason-item">Source 2 visual upgrades</li>
                <li class="reason-item">Massive esports scene</li>
            </ul>
        </section>

        <section class="guns-section">
            <h2 class="section-title">All the guns list</h2>
            
            <h5>First-gun:</h5>
            <select name="First-gun" id="">
                <option value="Ak-47">AK-47 $2700</option>
                <option value="Galil-AR">Galil-AR $1800</option>
                <option value="M4A1-S">M4A1-S $2900</option>
                <option value="M4A4">M4A4 $3100</option>
                <option value="Famas">Famas $2050</option>
                <option value="AWP">AWP $4750</option> 
            </select>
            </br>
            <h5>Pistols:</h5>
            <select name="secondary" id="">
                <option value="USP-S">USP-S $200</option>
                <option value="Tec-9">Tec-9  $500</option>
                <option value="Glock-18">Glock-18 $200</option>
                <option value="Five-SeveN">Five-SeveN  $500</option>
                <option value="Dual Berettas">Dual Berettas  $300</option>
                <option value="R8-Revolver">R8-Revolver $600</option>
                <option value="Deagle">Desert Eagle $700 </option>
            </select>
            </br>
            <h5>Granades:</h5>
            <p>*you can have 4 nades in a round</p>
            <select name="grenades" id="">
                <option value="Flashbang">Flashbang $200</option>
                <option value="HE Grenade">HE Grenade $300</option>
                <option value="Molotov">Incendiary Grenade $500</option>
                <option value="Smoke Grenade">Smoke Grenade $400</option>
                <option value="Decoy">Decoy $50</option>
                
            </select>
             <select name="grenades" id="">
                <option value="Flashbang">Flashbang $200</option>
                <option value="HE Grenade">HE Grenade $300</option>
                <option value="Molotov">Incendiary Grenade $500</option>
                <option value="Smoke Grenade">Smoke Grenade $400</option>
                <option value="Decoy">Decoy $50</option>
                
            </select>
             <select name="grenades" id="">
                <option value="Flashbang">Flashbang $200</option>
                <option value="HE Grenade">HE Grenade $300</option>
                <option value="Molotov">Incendiary Grenade $500</option>
                <option value="Smoke Grenade">Smoke Grenade $400</option>
                <option value="Decoy">Decoy $50</option>
                
            </select>
             <select name="grenades" id="">
                <option value="Flashbang">Flashbang $200</option>
                <option value="HE Grenade">HE Grenade $300</option>
                <option value="Molotov">Incendiary Grenade $500</option>
                <option value="Smoke Grenade">Smoke Grenade $400</option>
                <option value="Decoy">Decoy $50</option>
                
            </select>
        </section>
        </br>
        <section class="skins-section" style="    display: inline-flex; align-items: center; flex-direction: column;">
    
    
            <h2 class="section-title1">Use your favourite skins</h2>
            <h5 class="section-paragraph">Upgrade your loadout with stunning CS2 skins! From vibrant commons to rare, high-tier collectibles, skins let you show off your style and stand out in every match. Open cases, trade, and build your dream inventory today</h5>
            <video width="700" height="540" autoplay muted loop class='video'>
                <source src="<?php echo esc_url(get_theme_file_uri("weapon.mp4"))?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </section>

    </div>

</body>
</html>



<?php get_footer()?>
