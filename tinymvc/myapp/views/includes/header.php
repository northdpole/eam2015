<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="htdocs/css/main.css">
<link rel="stylesheet" type="text/css" href="htdocs/css/megamenu.css">    
<script src="htdocs/js/jquery-accessibleMegaMenu.js"></script>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<link rel="stylesheet" href="htdocs/css/font-awesome-4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="htdocs/css/font-awesome-4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="htdocs/css/my.css">

<script src="htdocs/js/main.js"></script>
<script>
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
        
        <img class="pure-img" src="htdocs/images/logo.png"> 
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
            <a class="pure-button button" href="#">Είσοδος</a>
            <div class="margin-top-2">
            <a class="pure-button button" href="#">Εγγραφή</a>
            </div>
            </div>
        </div>  
    </div>
<!-- Menu -->
    <div class="menu pure-u-1 LayoutCenter PanelDiffuseShadow PanelFillExtraLight">
		<nav class="megamenu">
    <ol class="menu-list">
        <li>
            <h2><a href="http://www.w3.org/TR/WCAG/#perceivable">Perceivable</a></h2>
            <div class="cols-4">
                <p>Information and user interface components must be presentable to users in ways they can perceive.</p>
                <ol>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="http://www.w3.org/TR/WCAG/#text-equiv">1.1 Text Alternatives</a></h3>
                        <p>Provide text alternatives for any non-text content so that it can be changed into other forms people need, such as large print, braille, speech, symbols or simpler language.</p>
                        <ol>
                            <li><a href="http://www.w3.org/TR/WCAG20/#text-equiv-all">1.1.1 Non-text Content</a></li>
                        </ol>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="http://www.w3.org/TR/WCAG/#media-equiv">1.2 Time-based Media</a></h3>
                        <p>Provide alternatives for time-based media.</p>
                        <ol>
                            <li><a href="http://www.w3.org/TR/WCAG20/#media-equiv-av-only-alt">1.2.1 Audio-only and Video-only (Prerecorded)</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#media-equiv-captions">1.2.2 Captions (Prerecorded)</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#media-equiv-audio-desc">1.2.3 Audio Description or Media Alternative (Prerecorded)</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#media-equiv-captions">1.2.4 Captions (Live)</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#media-equiv-audio-desc-only">1.2.5 Audio Description (Prerecorded)</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#media-equiv-sign">1.2.6 Sign Language (Prerecorded)</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#media-equiv-extended-ad">1.2.7 Extended Audio Description (Prerecorded)</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#media-equiv-text-doc">1.2.8 Media Alternative (Prerecorded)</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#media-equiv-live-audio-only">1.2.9 Audio-only (Live)</a></li>
                        </ol>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="http://www.w3.org/TR/WCAG20/#content-structure-separation">1.3 Adaptable</a></h3>
                        <p>Create content that can be presented in different ways (for example simpler layout) without losing information or structure.</p>
                        <ol>
                            <li><a href="http://www.w3.org/TR/WCAG20/#content-structure-separation-programmatic">1.3.1 Info and Relationships</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#content-structure-separation-sequence">1.3.2 Meaningful Sequence</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#content-structure-separation-understanding">1.3.3 Sensory Characteristics</a></li>
                        </ol>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="http://www.w3.org/TR/WCAG20/#visual-audio-contrast">1.4 Distinguishable</a></h3>
                        <p>Make it easier for users to see and hear content including separating foreground from background.</p>
                        <ol>
                            <li><a href="http://www.w3.org/TR/WCAG20/#visual-audio-contrast-without-color">1.4.1 Use of Color</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#visual-audio-contrast-dis-audio">1.4.2 Audio Control</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#visual-audio-contrast-contrast">1.4.3 Contrast (Minimum)</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#visual-audio-contrast-scale">1.4.4 Resize Text</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#visual-audio-contrast-text-presentation">1.4.5 Images of Text</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#visual-audio-contrast7">1.4.6 Contrast (Enhanced)</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#visual-audio-contrast-noaudio">1.4.7 Low or No Background Audio</a></li>
                            <li><a href="http://www.w3.org/WAI/WCAG20/quickref/#qr-visual-audio-contrast-visual-presentation">1.4.8 Visual Presentation</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#visual-audio-contrast-text-images">1.4.9 Images of Text (No Exception)</a></li>
                        </ol>
                    </li>
                </ol>
            </div>
        </li>
        <li>
            <h2><a href="http://www.w3.org/TR/WCAG/#operable">Operable</a></h2>
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
                        <h3><a href="http://www.w3.org/TR/WCAG20/#time-limits">2.2 Enough Time</a></h3>
                        <p>Provide users enough time to read and use content.</p>
                        <ol>
                            <li><a href="http://www.w3.org/TR/WCAG20/#time-limits-required-behaviors">2.2.1 Timing Adjustable</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#time-limits-pause">2.2.2 Pause, Stop, Hide</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#time-limits-no-exceptions">2.2.3 Interruptions</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#time-limits-postponed">2.2.4 Interruptions</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#time-limits-server-timeout">2.2.5 Re-authenticating</a></li>
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
                            <li><a href="http://www.w3.org/TR/WCAG20/#navigation-mechanisms-mult-loc">2.4.5 Multiple Ways</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#navigation-mechanisms-descriptive">2.4.6 Headings and Labels</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#navigation-mechanisms-focus-visible">2.4.7 Focus Visible</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#navigation-mechanisms-location">2.4.8 Location</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#navigation-mechanisms-link">2.4.9 Link Purpose (Link Only)</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#navigation-mechanisms-headings">2.4.10 Section Headings</a></li>
                        </ol>
                    </li>
                </ol>
            </div>
        </li>
        <li>
            <h2><a href="http://www.w3.org/TR/WCAG/#understandable">Understandable</a></h2>
            <div class="cols-3">
                <p>Information and the operation of user interface must be understandable.</p>
                <ol>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="http://www.w3.org/TR/WCAG20/#meaning">3.1 Readable</a></h3>
                        <p>Make text content readable and understandable.</p>
                        <ol>
                            <li><a href="http://www.w3.org/TR/WCAG20/#meaning-doc-lang-id">3.1.1 Language of Page</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#meaning-other-lang-id">3.1.2 Language of Parts</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#meaning-idioms">3.1.3 Unusual Words</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#meaning-located">3.1.4 Abbreviations</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#meaning-supplements">3.1.5 Reading Level</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#meaning-pronunciation">3.1.6 Pronunciation</a></li>
                        </ol>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="http://www.w3.org/TR/WCAG20/#consistent-behavior">3.2 Predictable</a></h3>
                        <p>Make Web pages appear and operate in predictable ways.</p>
                        <ol>
                            <li><a href="http://www.w3.org/TR/WCAG20/#consistent-behavior-receive-focus">3.2.1 On Focus</a> </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#consistent-behavior-unpredictable-change">3.2.2 On Input</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#consistent-behavior-consistent-locations">3.2.3 Consistent Navigation</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#consistent-behavior-consistent-functionality">3.2.4 Consistent Identification</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#consistent-behavior-no-extreme-changes-context">3.2.5 Change on Request</a></li>
                        </ol>
                    </li>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="http://www.w3.org/TR/WCAG20/#minimize-error">3.3 Input Assistance</a></h3>
                        <p>Help users avoid and correct mistakes.</p>
                        <ol>
                            <li><a href="http://www.w3.org/TR/WCAG20/#minimize-error-identified">3.3.1 Error Identification</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#minimize-error-cues">3.3.2 Labels or Instructions</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#minimize-error-suggestions">3.3.3 Error Suggestion</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#minimize-error-reversible">3.3.4 Error Prevention (Legal, Financial, Data)</a>
                                <hr/>
                            </li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#minimize-error-context-help">3.3.5 Help</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#minimize-error-reversible-all">3.3.6 Error Prevention (All)</a></li>
                        </ol>
                    </li>
                </ol>
            </div>
        </li>
        <li>
            <h2><a href="http://www.w3.org/TR/WCAG/#robust">Robust</a></h2>
            <div class="cols-1">
                <p>Content must be robust enough that it can be interpreted reliably by a wide variety of user agents, including assistive technologies.</p>
                <ol>
                    <li class="accessible-megamenu-panel-group">
                        <h3><a href="http://www.w3.org/TR/WCAG20/#ensure-compat">4.1 Compatible</a></h3>
                        <p>Maximize compatibility with current and future user agents, including assistive technologies.</p>
                        <ol>
                            <li><a href="http://www.w3.org/TR/WCAG20/#ensure-compat-parses">4.1.1 Parsing</a></li>
                            <li><a href="http://www.w3.org/TR/WCAG20/#ensure-compat-rsv">4.1.2 Name, Role, Value</a></li>
                        </ol>
                    </li>
                </ol>
            </div>
        </li>
    </ol>
</nav>
        </div>
   <!-- Menu-->
    </div>
</header>
