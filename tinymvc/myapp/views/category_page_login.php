<?php include("htdocs/includes/header.php"); ?>

    <div class="pure-g"> 
    <?php include("htdocs/includes/leftsidebar.php"); ?>
        <div class="pure-u-19-24">
            <div class="pure-u-20-24">
<<<<<<< HEAD
                
                
                <div class="pure-u-1 margin-top-2">
                <aside id="categ_box" align="center">            
            <table class="pure-table pure-table-horizontal " align=center>
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
                        <td>509,47</td>
                        <td>01/10/2008</td>
                        <td>σήμερα </td>
                    </tr>

                    <tr>
                        <td> 33,88</td>
                        <td>01/10/2008</td>
                        <td>σήμερα </td>
                    </tr>
                    <tr>
                        <td>--</td>
                        <td>01/10/2008</td>
                        <td>σήμερα </td>
                    </tr>
=======
                <div class="pure-u-1">
                <aside id="categ_box" align="center"> 
>>>>>>> 512baf159452eea1c4942ad5f89ed73566bb1b1e

                	<h2>Πίνακας Προσωπικής Σύνταξης</h2>           
            		<select>
            			<option  selected="selected">Γήρατος Προσωπικη</option>
            			<option>Aναπηρική Προσωπικη</option>
            			<option>Θανάτου 75%</option>
            			<option>Θανάτου 60%</option>
            			<option>Θανάτου 25%</option>
            		</select>
            		<input id="rand" value="" type="text"  />
            		<input type="submit" id="pen" />
										<script type="text/javascript">
              			$("#pen").click(function(){console.log("clicked"); $("#rand").val(Math.floor((Math.random()*1000)))});
                	</script>
                </aside>
            </div>
            <div class="pure-u-1 margin-top-2">
                <aside id="categ_box">
                      <table class="pure-table pure-table-horizontal" align=center>
                <thead>
                    <tr>
                        <th>Οι Αιτήσεις σας</th>
                        <th colspan="2">Ισχύς Πίνακα</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th>Βεβαιώσεις</th>
                        <th>Αίτηση</th>
                        <th>Κατάσταση</th>
                    </tr>

                    <tr>
                        <td>Βεβαίωση Σύνταξης</td>
                        <td>NAI</td>
                        <td class="red">Έλεγχος εκρεμεί </td>
                    </tr><tr>
                        <td>Βεβαίωση Σύνταξης (με αιτιολόγηση συνταξιοδότησης)</td>
                        <td>OXI</td>
                        <td></td>
                    </tr><tr>
                        <td>Βεβαίωση Αποδοχών Συνταξιούχων</td>
                        <td>NAI</td>
                        <td  class="red">Έλεγχος εκκρεμεί</td>
                    </tr><tr>
                        <td>Βεβαίωση Κρατήσεων για ΚΥΤ</td>
                        <td>OXI</td>
                        <td></td>
                    </tr><tr>
                        <td>Βεβαίωση Εφορίας Συνταξιούχου</td>
                        <td>OXI</td>
                        <td></td>
                    </tr><tr>
                        <td>Βεβαίωση Αναλυτικών Κρατήσεων Συνταξιούχου</td>
                        <td>NAI</td>
                    <td class="green"><a href="<?php echo BASEDIR ?>/htdocs/pdf/add_time_of_service.pdf" target="_blank">Έκτύπωση</a></td>
                    </tr>
                    
                </tbody>
            </table>
                </aside>
                <h2>Tα τελευταία άρθρα απο τις συνδρομές σας ανα κατηγορία/h2>
               <?=$articles?>
            </div>
            
        </div>
            <div class="pure-u-3-24">
            <table class="pure-table pure-table-horizontal ">
    <thead>
        <tr>
            <th>Έγγραφα</th>
        </tr>
    </thead>

    <tbody>
        <tr><td><a href="<?php echo BASEDIR ?>/htdocs/pdf/add_time_of_service.pdf" target="_blank">Αίτηση αναγνώρισης ΧΡΟΝΟΥ ΣΤΡΑΤΙΩΤΙΚΗΣ ΘΗΤΕΙΑΣ στην ΕΙΔΙΚΗ ΠΡΟΣΑΥΞΗΣΗ</a></td></tr>
        <tr><td><a href="<?php echo BASEDIR ?>/htdocs/pdf/add_children_time.pdf" target="_blank">Αίτηση αναγνώρισης ΧΡΟΝΟΥ ΠΑΙΔΙΩΝ στην ΕΙΔΙΚΗ ΠΡΟΣΑΥΞΗΣΗ</a></td></tr>   
        <tr><td><a href="<?php echo BASEDIR ?>/htdocs/pdf/add_degree_time.pdf" target="_blank">Αίτηση αναγνώρισης ΧΡΟΝΟΥ ΦΟΙΤΗΣΗΣ στην ΚΥΡΙΑ ΣΥΝΤΑΞΗ </a></td></tr>
    </tbody>
</table>

            </div>
        </div>
        
    </div>
<?php include("htdocs/includes/footer.php"); ?>