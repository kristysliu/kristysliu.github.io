<header>
    <!--<h1 id="title"><?php echo $title; ?></h1>--><!--for project pages-->
    <div class = "navigation_flex2">
        <span class="<?php if($title=="work"){echo "active";}?>"><a href = "index.php">work</a></span>&nbsp;&nbsp;&nbsp;
        <span class="<?php if($title=="resume"){echo "active";}?>">
        <a href="images/resume.pdf" type="application/pdf" width="100%" height="600px">resume</a>
        </span>&nbsp;&nbsp;&nbsp;
        <span class="<?php if($title=="about"){echo "active";}?>"><a href = "about.php">say hi</a></span>
    </nav>
</header>
