<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../htdocs/css/main.css">
<link rel="stylesheet" type="text/css" href="../htdocs/css/megamenu.css">    
<script src="../htdocs/js/jquery-accessibleMegaMenu.js"></script>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<link rel="stylesheet" href="../htdocs/css/font-awesome-4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../htdocs/css/font-awesome-4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../htdocs/css/my.css">
<script src="../htdocs/js/main.js"></script>
    
    <script>
       $(document).ready(function(){
           var loginShow = false;
           $("#loginClose").click(function(){
                $("#loginForm").hide();
                loginShow = false;
            }
)});</script>
    <script>
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

<header class="header">
    
    <!--  header   -->
<div class="pure-g">
    <div>                       <!--   div 1     -->
<!--   logo     -->
    <div class="pure-u-3-24">       <!--    div 1.1    -->
        
        <img class="pure-img" src="../htdocs/images/logo.png"> 
    </div>
<!--   Font size picker     -->
    <div class="pure-u-18-24">  <!--    div 1.2    -->
        
        <div class="pure-u-5-24 float-right">  <!--    div 1.2.1    -->
            <div class="pure-u-10-24">
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
            <div class="pure-u-10-24">
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
        </div>
<!-- Search -->
        <div class="pure-u-1">                                  <!--    div 1.2.2    -->
            <form class="pure-form pure-g">
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
        <div class="pure-u-3-24">                <!--    div 1.3    -->
            <div class=" left-padding-2x">       <!--    div 1.3.1    -->
                 <div class=" left-padding-2x">       <!--    div 1.3.1    -->
                    <a class="pure-button button" id="loginButton" onclick="loginToggle" href="#">Είσοδος</a>  
                   <form class="pure-form pure-form-aligned hiden" id="loginForm">                  <!--  the form for login  -->
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
                            </div>
                        </fieldset>
                    </form>  
            <div class="left-padding-2x margin-top-2">
            <a class="pure-button button" href="#">Εγγραφή</a>
            </div>
            </div>
        </div>  
    </div>
    
<!-- Menu -->
    
    <div class="menu pure-u-1 LayoutCenter PanelDiffuseShadow PanelFillExtraLight small-font">
		<nav class="megamenu">
    <ol class="menu-list">
        <li>
            <h2><a href="http://www.w3.org/TR/WCAG/#perceivable">Αρχική Σελίδα</a></h2>
            <div class="cols-4">
                <ol>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="http://www.w3.org/TR/WCAG/#text-equiv">1.1 Text Alternatives</a></h3>
                        <p>Provide text alternatives for any non-text content so that it can be changed into other forms people need, such as large print, braille, speech, symbols or simpler language.</p>
                       
            </div>
        </li>
        <li>
            <h2><a href="http://www.w3.org/TR/WCAG/#operable">Το Ταμείο Μας</a></h2>
            <div class="cols-4b">
                <p>User interface components and navigation must be operable.</p>
                <ol>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="http://www.w3.org/TR/WCAG20/#keyboard-operation">2.1 Keyboard Accessible</a></h3>
                        <p>Make all functionality available from a keyboard.</p>
                        <ol>
                            <li><a href="http://www.w3.org/TR/WCAG20/#keyboard-operation-keyboard-operable">2.1.1 Keyboard</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#keyboard-operation-trapping">2.1.2 No Keyboard Trap</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#keyboard-operation-all-funcs">2.1.3 Keyboard (No Exception)</a></li>
                        </ol>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="http://www.w3.org/TR/WCAG20/#seizure">2.3 Seizures</a></h3>
                        <p>Do not design content in a way that is known to cause seizures.</p>
                        <ol>
                            <li><a href="http://www.w3.org/TR/WCAG20/#seizure-does-not-violate">2.3.1 Three Flashes or Below Threshold</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#seizure-three-times">2.3.2 Three Flashes</a> </li>
                        </ol>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="http://www.w3.org/TR/WCAG20/#navigation-mechanisms">2.4 Navigable</a></h3>
                        <p>Provide ways to help users navigate, find content, and determine where they are.</p>
                        <ol>
                            <li><a href="http://www.w3.org/TR/WCAG20/#navigation-mechanisms-skip">2.4.1 Bypass Blocks</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#navigation-mechanisms-title">2.4.2 Page Titled</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#navigation-mechanisms-focus-order">2.4.3 Focus Order</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#navigation-mechanisms-refs">2.4.4 Link Purpose (In Context)</a>
                                <hr/>
                            </li>
                        </ol>
                    </li>
                </ol>
            </div>
        </li>
        <li class="menu-small-width">
            <h2><a href="http://www.w3.org/TR/WCAG/#understandable">Νέα</a></h2>
            <div class="cols-3">
                <p>Information and the operation of user interface must be understandable.</p>
            </div>
        </li>
        <li>
            <h2><a href="http://www.w3.org/TR/WCAG/#robust">Ασφαλισμένοι</a></h2>
            <div class="cols-1">
                <p>Content must be robust enough that it can be interpreted reliably by a wide variety of user agents, including assistive technologies.</p>
            </div>
        </li>
        <li>
            <h2><a href="http://www.w3.org/TR/WCAG/#robust">Συνταξιούχοι</a></h2>
            <div class="cols-1">
                <p>Content must be robust enough that it can be interpreted reliably by a wide variety of user agents, including assistive technologies.</p>
            </div>
        </li><li>
            <h2><a href="http://www.w3.org/TR/WCAG/#robust">Εταιρίες</a></h2>
            <div class="cols-1">
                <p>Content must be robust enough that it can be interpreted reliably by a wide variety of user agents, including assistive technologies.</p>
            </div>
        </li><li>
            <h2><a href="http://www.w3.org/TR/WCAG/#robust">Πιστούχοι</a></h2>
            <div class="cols-1">
                <p>Content must be robust enough that it can be interpreted reliably by a wide variety of user agents, including assistive technologies.</p>
            </div>
        </li><li class="menu-large-width">
            <h2><a href="http://www.w3.org/TR/WCAG/#robust">Συχνές Ερωτήσεις</a></h2>
            <div class="cols-1">
                <p>Content must be robust enough that it can be interpreted reliably by a wide variety of user agents, including assistive technologies.</p>
            </div>
        </li><li>
            <h2><a href="http://www.w3.org/TR/WCAG/#robust">Επικοινωνία</a></h2>
            <div class="cols-1">
                <p>Content must be robust enough that it can be interpreted reliably by a wide variety of user agents, including assistive technologies.</p>
            </div>
        </li>
    </ol>
</nav>
        </div>
   <!-- Menu-->
    </div>
</header>
