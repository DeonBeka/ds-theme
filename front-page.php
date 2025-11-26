<?php get_header()?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <section class="hero">
    <img src="<?php echo esc_url(get_theme_file_uri("banner.png"))?>" alt="site banner">
        </section>
        <section class="features">
            <br>
            <h2 id="heading"> Why choose us?</h2>
            <br>

            <li>
                <img src="<?php echo esc_url(get_theme_file_uri("project.png"))?>" alt="img">
                <span>Projects based learning</span>
            </li>

            <li>
                <img src="<?php echo esc_url(get_theme_file_uri("settings.png"))?>" alt="img">
                <span>Instructors who inspire</span>
            </li>

            <li>
                <img src="<?php echo esc_url(get_theme_file_uri("online.png"))?>" alt="img">
                <span>Feature ready digital skills</span>
            </li>

            <li>
                <img src="<?php echo esc_url(get_theme_file_uri("learn.jpg"))?>" alt="img">
                <span>Online or in person learning</span>
            </li>
        </section>

        <section class="section-pad">
            <h2 id="curricula-heading">Curriculum by Age</h2>
            <ul class="curricula-grid">

                <li><strong>Content:</strong>Learning the Logic</li>
                <li><strong>Period:</strong>Learning the Logic</li>
                <li><strong>Intensity:</strong>Learning the Logic</li>
                <li><strong>Method:</strong>Learning the Logic</li>
            </ul>
        </section>
    </main>
</body>
</html>






<?php get_footer()?>
