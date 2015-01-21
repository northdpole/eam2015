
<?php include("htdocs/includes/header.php"); ?>


<body class="init">
    <div class="pure-g"> 
       <?php include("htdocs/includes/leftsidebar.php"); ?>

        <div class="content pure-u-19-24">
        	<h2> Yπολογισμός IBAN</h2>
        <form class="pure-u-10-24 fooForm">
        	<style>
        		.fooForm{
        				text-align:center;
        				margin:0 auto;
        				display: block;
        				line-height:2em;
        				background-color: azure;}
        		.fooForm label{
        			
        		}
        		.fooForm input{
        			margin-right:2%;
        		}
        	</style>
        	<input type="radio"/>Ασφαλισμένος
        	<input type="radio"/>Συνταξιούχος
        	<br />
        	<label> Αριθμός Δύναμης ΚΥΤ</label><br />
        	<input type="text" maxlength="10"/><br />
        	<label> Αριθμός Σύνταξης</label>
        	<br />
        	<input type="text" /><br />
        	<label> Αριθμός AMKA</label>
        	<br />
        	<input type="text" maxlength="6" />
        	<br />
        	<input type="submit"/>
        	
        </form>
        <p>
       <form class="pure-u-10-24 fooForm">
      	  	<label>Επιλέξτε την Βεβαίωση που θέλετε να ελέγξετε </label>
            <select name="dnn$ctr726$ViewDM_ASF_AUTHENTICATION$ViewDM_ASF_AUTHENTICATION$AsfAppList" id="dnn_ctr726_ViewDM_ASF_AUTHENTICATION_ViewDM_ASF_AUTHENTICATION_AsfAppList" style="width:500px;">
				<option value="DM_ASF_VS01">ΒΣ01. ΑΠΛΗ ΒΕΒΑΙΩΣΗ ΣΥΝΤΑΞΗΣ</option>
				<option value="DM_ASF_VS02">ΒΣ02.  ΒΕΒΑΙΩΣΗ ΣΥΝΤΑΞΗΣ ΜΕ ΑΙΤΙΟΛΟΓΙΑ ΣΥΝΤΑΞΙΟΔΟΤΗΣΗΣ</option>
				<option value="DM_ASF_VS03">ΒΣ03. ΒΕΒΑΙΩΣΗ ΜΗΝΙΑΙΩΝ ΑΠΟΔΟΧΩΝ ΣΥΝΤΑΞΙΟΥΧΟΥ</option>
				<option value="DM_ASF_VS04">ΒΣ04. ΒΕΒΑΙΩΣΗ ΚΡΑΤΗΣΕΩΝ ΠΕΡΙΘΑΛΨΗΣ ΣΥΝΤΑΞΙΟΥΧΟΥ</option>
				<option value="DM_ASF_VS05">ΒΣ05. ΒΕΒΑΙΩΣΗ ΚΑΤΑΘΕΣΗΣ ΔΙΚΑΙΟΛΟΓΗΤΙΚΩΝ ΣΥΝΤΑΞΙΟΔΟΤΗΣΗΣ</option>
				<option value="DM_ASF_VS06">ΒΣ06. ΒΕΒΑΙΩΣΗ ΕΦΟΡΙΑΣ ΣΥΝΤΑΞΙΟΥΧΟΥ</option>
				<option value="DM_ASF_VA01">ΒΑ01. ΒΕΒΑΙΩΣΗ ΑΣΦΑΛΙΣΗΣ ΜΗΧΑΝΙΚΟΥ</option>
				<option value="DM_ASF_VA02">ΒΑ02. ΒΕΒΑΙΩΣΗ ΑΣΦΑΛΙΣΗΣ ΜΗΧΑΝΙΚΟΥ ΓΙΑ ΔΙΑΚΟΠΗ ΟΑΕΕ</option>
				<option value="DM_ASF_VE01">ΒΕ01. ΒΕΒΑΙΩΣΗ ΑΣΦΑΛΙΣΤΙΚΗΣ ΕΝΗΜΕΡΟΤΗΤΑΣ ΜΙΣΘΩΤΟΥ</option>
				<option value="DM_ASF_VE03">ΒΕ03. ΒΕΒΑΙΩΣΗ ΓΙΑ ΕΦΟΡΙΑ ΕΙΣΟΔΗΜΑΤΟΣ</option>
				<option value="DM_ASF_VE04">ΒΕ04. ΒΕΒΑΙΩΣΗ ΠΡΟΥΠΗΡΕΣΙΑΣ</option>
				<option value="DM_ASF_VE02">ΒΕ02. ΒΕΒΑΙΩΣΗ ΑΣΦΑΛΙΣΤΙΚΗΣ ΕΝΗΜΕΡΟΤΗΤΑΣ ΕΛΕΥΘΕΡΟΥ ΕΠΑΓΓΕΛΜΑΤΙΑ</option>
				<option value="DM_ASF_VE05">ΒΕ05. ΒΕΒΑΙΩΣΗ ΕΦΟΡΙΑΣ ΓΙΑ ΘΕΩΡΗΣΗ ΒΙΒΛΙΩΝ</option>
				<option value="DM_ASF_VA03">ΒΑ03. ΒΕΒΑΙΩΣΗ ΑΣΦΑΛΙΣΗΣ ΜΗΧΑΝΙΚΟΥ ΓΙΑ ΔΙΑΚΟΠΗ ΙΚΑ</option>
				<option value="DM_ASF_RETRIEVE">TEST RETRIEVE DATA</option>
				<option value="DM_KAT_KA01">ΚΑ01. Αίτηση για Κατασκήνωση</option>
				<option value="DC_Doctor_DC01">Λίστα Γιατρών (Ειδικότητα - Νομό - Δήμο)</option>
				<option value="DC_Doctor_DC02">Λίστα Γιατρών (Νομό - Δήμο - Ειδικότητα)</option>
				<option value="DC_Doctor_DC03">Λίστα Γιατρών (Νομό - Ειδικότητα - Δήμο)</option>
				<option value="DC_Doctor_DC04">Λίστα Νοσοκομείων (Ειδικότητα - Νομό - Δήμο)</option>
				<option value="DM_ASF_VS07">ΒΣ07. ΒΕΒΑΙΩΣΗ ΚΡΑΤΗΣΕΩΝ ΣΥΝΤΑΞΙΟΥΧΟΥ</option>
				<option value="DM_ASF_VS07b">ΒΣ07b. ΒΕΒΑΙΩΣΗ ΚΡΑΤΗΣΕΩΝ ΣΥΝΤΑΞΙΟΥΧΟΥ</option>
				<option value="DM_ASF_VE06">ΒΕ06. ΑΥΤΟΚΟΛΛΗΤΑ ΓΙΑ ΘΕΩΡΗΣΗ ΒΙΒΛΙΑΡΙΟΥ ΥΓΕΙΑΣ ΓΙΑ ΕΛΕΥΘΕΡΟΥΣ ΕΠΑΓΓΕΛΜΑΤΙΕΣ</option>
				<option value="DM_ASF_VE07">ΒΕ07. ΑΥΤΟΚΟΛΛΗΤΑ ΓΙΑ ΘΕΩΡΗΣΗ ΒΙΒΛΙΑΡΙΟΥ ΥΓΕΙΑΣ ΓΙΑ ΜΙΣΘΩΤΟΥΣ</option>
				<option value="DM_ASF_VE08">ΒΕ08. ΑΥΤΟΚΟΛΛΗΤΑ ΓΙΑ ΘΕΩΡΗΣΗ ΒΙΒΛΙΑΡΙΟΥ ΥΓΕΙΑΣ</option>
				<option value="DM_ASF_VE09">ΒΕ09. ΒΕΒΑΙΩΣΗ ΑΣΦΑΛΙΣΤΙΚΗΣ ΕΝΗΜΕΡΟΤΗΤΑΣ ΑΣΦΑΛΙΣΜΕΝΟΥ</option>
				<option value="DM_ASF_VE10">ΒΕ10. ΒΕΒΑΙΩΣΗ ΑΣΦΑΛΙΣΤΙΚΗΣ ΕΝΗΜΕΡΟΤΗΤΑΣ ΚΑΙ ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΟΦΕΙΛΗΣ </option>
			</select>
			<label>Συμπληρώστε τον Αριθμό Πρωτοκόλου της Βεβαίωσης : 	</label>            
        	<input type="text" />
       		<label>Συμπληρώστε το Έτος Έκδοσης της Βεβαίωσης :</label>
			<input type="text" />
			<label>Συμπληρώστε τον Αριθμό Μητρώου του κατόχου της βεβαίωσης: </label>
			<input type="text" />
       	</form>
     	</p>
     </div>
    
    </div>
<?php include("htdocs/includes/footer.php"); ?>