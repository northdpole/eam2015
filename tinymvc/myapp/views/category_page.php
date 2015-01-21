<?php include("htdocs/includes/header.php"); ?>

<body>
    <div class="pure-g"> 
    <?php include("htdocs/includes/leftsidebar.php"); ?>
        <div class="pure-u-21-24">
            <div class="pure-u-23-24">
                <div class="l-box">
<!--
                	<h2> This is a  category page, it loads the array provided.
                		The array may contain either documents or articles in an organized fashion as such
                		{[CategoryName]=>{Articles/Documents In the category}} </h2>                  
-->
  <aside>
                Προς πληροφόρηση όλων των ασφαλισμένων όλων των Τομέων του Ε.Τ.Α.Α. ως Πρόεδρος του, έχω υποχρέωση να αναφέρω τα εξής:
                        </aside>
                </div>
            </div>
            <div class="pure-u-6-24">
                <aside id="categ_box">  
                    <h4>Είσοδος/Ενγγραφή</h4>
                    Με την είσοδο σας σο σύστημα μπορείτε να δείτε:
                <ul>
                    <li>Hμερομηνία παραλαβής της συντάξεως </li>
                    <li>Kρατήσεις</li>
                    <li>Στοιχεία συντάξεων των τελευταίων μηνών</li>
                </ul>
                    <div align="center">       <!--    div 1.3.1    -->
                        
                         <div>      <!--    div 1.3.1    -->
                            <a class="pure-button button align-middle" id="loginButton" onclick="loginToggle" href="#">Είσοδος</a>  
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
                                </fieldset>
                            </form>  
                        </div>
                        <div class="margin-top-2">
                        <a class="pure-button button" href="#">Εγγραφή</a>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="pure-u-6-24">
                <aside id="categ_box">
                    <h4>Μηχανογραφιμένες Βεβαιώσεις</h4>
                    <ul>
                        <li>Βεβαίωση Σύνταξης</li>
                        <li>Βεβαίωση Σύνταξης (με αιτιολόγηση συνταξιοδότησης)</li>
                        <li>Βεβαίωση Αποδοχών Συνταξιούχων</li>
                        <li>Βεβαίωση Εφορίας Συνταξιούχου</li>
                        <li>Βεβαίωση Αναλυτικών Κρατήσεων Συνταξιούχου</li>
                    </ul>
                </aside>
                <div class="l-box"><img class="pure-img" src="http://upload.wikimedia.org/wikipedia/commons/9/92/1923_Daimler_57hp_9.4_Litre_Hooper_Limousine_IMG_1024.jpg">
                </div>
            </div>
            <div class="pure-u-6-24">
                <div class="l-box"><img class="pure-img" src="http://upload.wikimedia.org/wikipedia/commons/9/92/1923_Daimler_57hp_9.4_Litre_Hooper_Limousine_IMG_1024.jpg">
                </div>
                <aside id="categ_box">
                    <h4>Νέα</h4>
                    <ul>
                        <li><a href="<?php echo HOME ?>" target="_blank">Ρύθμιση οφειλών προς τους Φορείς Κοινωνικής Ασφάλισης</a></li>
                        <li><a href="<?php echo HOME ?>" target="_blank">ΕΙδοποιητήριο Β΄ Εξαμήνου 2014</a></li>
                        <li><a href="<?php echo HOME ?>" target="_blank">Εκτύπωση Διαδικτυακού Ειδοποιητηρίου </a></li>
                    </ul>
                </aside>
            </div>
            <div class="pure-u-2-24">
            <table class="pure-table">
    <thead>
        <tr>
            <th>Έγγραφα</th>
        </tr>
    </thead>

    <tbody>
        <tr><td><a href="<?php echo BASEDIR ?>/htdocs/pdf/add_time_of_service.pdf" target="_blank">Αίτηση αναγνώρισης ΧΡΟΝΟΥ ΣΤΡΑΤΙΩΤΙΚΗΣ ΘΗΤΕΙΑΣ στην ΕΙΔΙΚΗ ΠΡΟΣΑΥΞΗΣΗ</a></td></tr>
        <tr class="pure-table-odd"><td><a href="<?php echo BASEDIR ?>/htdocs/pdf/add_children_time.pdf" target="_blank">Αίτηση αναγνώρισης ΧΡΟΝΟΥ ΠΑΙΔΙΩΝ στην ΕΙΔΙΚΗ ΠΡΟΣΑΥΞΗΣΗ</a></td></tr>   
        <tr><td><a href="<?php echo BASEDIR ?>/htdocs/pdf/add_degree_time.pdf" target="_blank">Αίτηση αναγνώρισης ΧΡΟΝΟΥ ΦΟΙΤΗΣΗΣ στην ΚΥΡΙΑ ΣΥΝΤΑΞΗ </a></td></tr>
    </tbody>
</table>
            </div>
        </div>
        
    </div>
<?php include("htdocs/includes/footer.php"); ?>