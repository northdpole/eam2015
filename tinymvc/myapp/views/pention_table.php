<?php include("htdocs/includes/header.php"); ?>


<body class="init">
    <div class="pure-g"> 
       <?php include("htdocs/includes/leftsidebar.php"); ?>

        <div class="content pure-u-19-24">
        	<h2> Πινακας Σύνταξης</h2>
            
            <table class="pure-table pure-table-horizontal" align="center">
                <thead>
                    <tr>
                        <th>Πίνακας Προσωπικής Σύνταξης</th>
                        <th colspan="2">Ισχύς Πίνακα</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th></th>
                        <th>από</th>
                        <th>έος</th>
                    </tr>

                    <tr>
                        <td><a href="<?php echo BASEDIR ?>/htdocs/pdf/regular_pention.pdf" target="_blank">Ποσά Κύριας Σύνταξης</a></td>
                        <td>01/10/2008</td>
                        <td>σήμερα </td>
                    </tr>

                    <tr>
                        <td> <a href="<?php echo BASEDIR ?>/htdocs/pdf/special_incriment.pdf" target="_blank">Ποσά Ειδικής Προσαύξησης</a></td>
                        <td>01/10/2008</td>
                        <td>σήμερα </td>
                    </tr>
                    <tr>
                        <td><a href="<?php echo BASEDIR ?>/htdocs/pdf/efapax_new.pdf" target="_blank">Εφάπαξ Βοήθημα Νέων Ασφαλισμένων</a></td>
                        <td>01/10/2008</td>
                        <td>σήμερα </td>
                    </tr>

                    <tr>
                        <td><a href="<?php echo BASEDIR ?>/htdocs/pdf/efapax_old.pdf" target="_blank">Εφάπαξ Βοήθημα Παλαιών Ασφαλισμένων</a></td>
                        <td>01/10/2008</td>
                        <td>σήμερα </td>
                    </tr>
                    
                </tbody>
            </table>