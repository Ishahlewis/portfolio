<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ishah Lewis Portfolio</title>
    <?php wp_head()?>
</head>
<body>

<div class="wrapper">


    <header>

        <div class="menu">
            
            <div class="logo"> 
                <a href="work.html" <?php echo get_permalink(1); ?>>Ishah Lewis</a>
                <span>WEB / UX Designer</span>
            </div>

            <div class="bars"><i class="fas fa-bars"></i></div>
        
            <ul class="nav">
                <li>
                    <a href="work.html">
                        work
                    </a>
                </li>
                <li>
                    <a href="about.html">
                        about
                    </a>
                </li>
                <li>
                    <a href="contact.html">
                        contact
                    </a>
                </li>
                <li class="back-up">
                    <i class="fas fa-chevron-up"></i>
                </li>
            </ul>
        </div>

    </header>