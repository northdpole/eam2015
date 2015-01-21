<?php require_once("htdocs/includes/header.php"); ?>


<body>
    <div class="pure-g"> 
<?php  require_once("htdocs/includes/leftsidebar.php"); ?>

        <div class="pure-u-19-24">
            <div class="pure-u-11-24">
                <aside id="categ_box">
                    <?=$content?>
                    here go ALL titles of articles from the database based on date
                </aside>
            </div>
            <div class="pure-u-12-24">
                <aside id="categ_box">
                     <?=$pensions?>
                </aside>
                <aside id="categ_box" class="margin-top-2">
                     <?=$nosilia?>
                </aside>
                <aside id="categ_box" class="margin-top-2">
                     <?=$eisfores?>
                     Here we put the ones about eisfores
                </aside>
            </div>
        </div>
        
    </div>
<?php include("htdocs/includes/footer.php"); ?>