<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASEDIR ?>/htdocs/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASEDIR ?>/htdocs/css/megamenu.css">    
<script src="<?php echo BASEDIR ?>/htdocs/js/jquery-accessibleMegaMenu.js"></script>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<link rel="stylesheet" href="<?php echo BASEDIR ?>/htdocs/css/font-awesome-4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo BASEDIR ?>/htdocs/css/font-awesome-4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo BASEDIR ?>/htdocs/css/my.css">
<script src="<?php echo BASEDIR ?>/htdocs/js/main.js"></script>
    
    <script>
       $(document).ready(function(){
           var loginShow = false;
           $("#loginClose").click(function(){
                $("#loginForm").hide();
                loginShow = false;
            }
)});</script>
    <script>
    $(document).ready(
    		function(){
    			$(".accessible-megamenu-panel").width( $(".accessible-megamenu").width()-10);				$(".accessible-megamenu-panel").offset({left:$(".accessible-megamenu").position().left});
})
       $(document).ready(function(){
//           alert("Vale ena X icon panw de3ia sth forma kai dwstou id=\"loginClose\" kai meta phgaine ston kwdika grammh 24 kai diegrapse to alert");
           var loginShow = false;
           $("#loginButton").click(function(){
            if(!loginShow){
                $("#loginForm").show();
                loginShow = true;
            }else{
                $("#loginForm").hide();
                loginShow = false;
            }
})});</script>
<script>

$(".accessible-megamenu-top-nav-item").mouseover(function(){$(".open").with= $(".accessible-megamenu").width;})
        $("nav:first").accessibleMegaMenu({
            /* prefix for generated unique id attributes, which are required 
               to indicate aria-owns, aria-controls and aria-labelledby */
            uuidPrefix: "accessible-megamenu",

            /* css class used to define the megamenu styling */
            menuClass: "nav-menu",

            /* css class for a top-level navigation item in the megamenu */
            topNavItemClass: "nav-item",

            /* css class for a megamenu panel */
            panelClass: "sub-nav",

            /* css class for a group of items within a megamenu panel */
            panelGroupClass: "sub-nav-group",

            /* css class for the hover state */
            hoverClass: "hover",

            /* css class for the focus state */
            focusClass: "focus",

            /* css class for the open state */
            openClass: "open"
        });
    </script>
	
</script>
</head>
<body>
	<div id="container">
		<header class="header">
    
    <!--  header   -->
<div class="pure-g">
<!--   logo     -->
    <div class="pure-u-3-24 head_utils">       <!--    div 1.1    -->
        
        <img class="pure-img" src="<?php echo BASEDIR ?>/htdocs/images/logo.png"> 
    </div>
<!--   Font size picker , search    -->
    <div class="pure-u-17-24 head_utils">  <!--    div 1.2    -->
        
        <div class="pure-u-24-24  above_search">  <!--    div 1.2.1    -->
           <div class="pure-u-4-24 float-right">
                <form class="pure-form v-align-box ">
                    <fieldset>
                        <select id="language">
                            <option>Ελληνικά</option>
                            <option>English</option>
                            <option>Shqip</option>
                            <option>زبان فارسی</option>
                        </select>
                    </fieldset>
                </form>
            </div>
            <div class="pure-u-3-24 float-right">
                <div class="pure-u-6-24 align-right v-align-box">
                    <div class="fsize-stack v-align-box">a</div>
                </div>
                <div class="pure-u-6-24 margin-left-2 align-right v-align-box">
                    <div class="fa-lg fsize-stack v-align-box">a</div>
                </div>
                <div class="pure-u-6-24 margin-left-2 align-right v-align-box">
                    <div class="fa-2x fsize-stack v-align-box">a</div>
                </div>
            </div>
            
        </div>
<!-- Search -->
        <div class="pure-u-1 search">                                  <!--    div 1.2.2    -->
            <form class="pure-form pure-g" action="search">
                <div class="pure-u-22-24">
                    <input class="pure-input-1" type="text">
                </div>
                    <div class="pure-u-1-24 left-padding"><button class="pure-button">
                        <i class="fa fa-search"></i>
                        </button></div>
            </form>
        </div>
        </div>
<!-- login-register -->
        <div class="pure-u-3-24 head_utils register">                <!--    div 1.3    -->
            <div class=" left-padding-2x ">       <!--    div 1.3.1    -->
			<?php	if(!isset($_SESSION['uid'])){
  	$login = '<div class=" left-padding-2x relative_pos">       <!--    div 1.3.1    -->
                   <a class="pure-button button" id="loginButton" onclick="loginToggle" href="#">Είσοδος</a>  
                   <form method="POST" action="login" class="pure-form pure-form-aligned hiden" id="loginForm">                  <!--  the form for login  -->
                        <i id="loginClose" class="fa fa-times upper-corner"></i>
                        <fieldset>
                            <div class="pure-control-group">
                                <label for="name">Όνομα Χρήστη</label>
                                <input id="name" type="text" placeholder="Username">
                            </div>

                            <div class="pure-control-group">
                                <label for="password">Κωδικός Πρόσβασης</label>
                                <input id="password" type="password" placeholder="Password">
                            </div>
                                <button type="submit" class="pure-button pure-button-primary">Submit</button>
                        </fieldset>
                        
                    </form>  
                </div> <div class="left-padding-2x margin-top-2">
            <a class="pure-button button" href="#">Εγγραφή</a>
            </div>';
	}else{ $login = 'Καλωσήρθατε '.$_SESSION['uname'].'<p><a href="login?out=1">Aποσύνδεση</a>';}
        	    echo $login; ?>    
		

           
            </div>
        </div>  
   
    
<!-- Menu -->
    
    <div class="menu pure-u-1 LayoutCenter PanelDiffuseShadow PanelFillExtraLight small-font">
		<nav class="megamenu">
    <ol class="menu-list">
        <li>
            <h2><a href="<?php echo HOME ?>">Αρχική Σελίδα</a></h2>
            <div class="cols-4 nodisplay-menu">
               
            </div>
        </li>
        <li>
            <h2><a href="<?php echo HOME ?>about">Το Ταμείο Μας</a></h2>
            <div class="cols-4b ">
                <ol>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="<?php echo HOME ?>about_contracts">Συμβάσεις </a></h3>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="<?php echo HOME ?>about_contests">Διαγωνισμοί</a></h3>
                    </li>
                </ol>
            </div>
        </li>
        <li class="menu-small-width">
            <h2><a href="<?php echo HOME ?>news">Νέα</a></h2>
            <div class="cols-3 nodisplay-menu">
                <p>Information and the operation of user interface must be understandable.</p>
            </div>
        </li>
        <li>
            <h2><a href="<?php echo HOME ?>#">Ασφαλισμένοι</a></h2>
            <div class="cols-4b ">
                <p>Ένας Συνταξιούχος του Τ.Σ.Μ.Ε.Δ.Ε. έχει τις εξής δυνατότητες :</p>
                <ol>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="<?php echo HOME ?>browse"> Στοιχεία Ασφαλισμένου (login) </a></h3>
                        Ένας ασφαλισμένος μπορεί να δει πληροφορίες σχετικά με τους κλάδους στους οποίους είναι εγγεγραμμένος για τις οφειλές του και τους διακανονισμούς πληρωμής που έχει με το ταμείο.
                                                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="<?php echo HOME ?>browse">Υποβολή Αιτήσεων για βεβαιώσεις (aithseis)</a></h3>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3>Έγγραφα</h3>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3>Σύνταξη</h3>
                    </li>
                </ol>
            </div>
        </li>
        <li>
            <h2><a href="<?php echo HOME ?>browse">Συνταξιούχοι</a></h2>
            <div class="cols-4b ">
                <p>Ένας Συνταξιούχος του Τ.Σ.Μ.Ε.Δ.Ε. έχει τις εξής δυνατότητες :</p>
                <ol>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="<?php echo HOME ?>browse"> Στοιχεία Συντάξης (login) </a></h3>
                        <p>Ένας συνταξιούχος μπορεί να ενημερωθεί γύρο από τα θέματα της σύνταξης του.</p>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="<?php echo HOME ?>browse">Υποβολή Αιτήσεων για βεβαιώσεις (aithseis)</a></h3>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3>Έγγραφα</h3></br>
                        Βεβαίωση Σύνταξης</br>
                        Βεβαίωση Σύνταξης (με αιτιολόγηση συνταξιοδότησης)</br>
                        Βεβαίωση Αποδοχών Συνταξιούχων</br>
                        Βεβαίωση Εφορίας Συνταξιούχου</br>
                        Βεβαίωση Αναλυτικών Κρατήσεων Συνταξιούχου
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3>Σύνταξη</h3>
                    </li>
                </ol>
            </div>
        </li><li>
            <h2><a href="<?php echo HOME ?>#">Εργοδότες</a></h2>
            <div class="cols-4b ">
                <p>Ένας Εργοδότης που απασχολεί ασφαλισμένους του Τ.Σ.Μ.Ε.Δ.Ε. έχει τις εξής δυνατότητες :</p>
                <ol>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="<?php echo HOME ?>browse"> Δήλωση Αντιπροσώπων (login) </a></h3>
                        <p>Ένας συνταξιούχος μπορεί να ενημερωθεί γύρο από τα θέματα της σύνταξης του.</p>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="http://www.w3.org/TR/WCAG20/#seizure">Υποβολή Αιτήσεων Εργοδοτικών Εισφορών (aithseis)</a></h3>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3>Έγγραφα</h3>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3>Στοιχεία Υπάλληλων</h3>
                    </li>
                </ol>
            </div>
        </li><li>
            <h2><a href="<?php echo HOME ?>#">Πιστούχοι</a></h2>
            <div class="cols-1 nodisplay-menu">
                <p>Content must be robust enough that it can be interpreted reliably by a wide variety of user agents, including assistive technologies.</p>
            </div>
        </li><li class="menu-large-width">
            <h2><a href="<?php echo HOME ?>showarticle?id=5">Συχνές Ερωτήσεις</a></h2>
            <div class="cols-1 nodisplay-menu">
                <p>Content must be robust enough that it can be interpreted reliably by a wide variety of user agents, including assistive technologies.</p>
            </div>
        </li><li>
            <h2><a href="<?php echo HOME ?>communication">Επικοινωνία</a></h2>
            <div class="cols-1 nodisplay-menu">
                <p>Content must be robust enough that it can be interpreted reliably by a wide variety of user agents, including assistive technologies.</p>
            </div>
        </li>
    </ol>
</nav>
        </div>
   <!-- Menu-->
    </div>
</header>
