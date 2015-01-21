
<?php include("htdocs/includes/header.php"); ?>

 <div class="pure-g"> 
       <?php include("htdocs/includes/leftsidebar.php"); ?>

        <div class="content pure-u-19-24">
        	<h2> Oι πληροφορίες σας</h2>
        <form method="POST" action="register?a" class="pure-u-10-24 fooForm">
        	<style>
        		.fooForm{
        				text-align:center;
        				margin:0 auto;
        				display: block;
        				line-height:2em;
        				background-color: azure;}
        		.fooForm label{
        			margin-right:2%;
        		}
        		.fooForm input{
        			margin-right:2%;
        		}
        	</style>
        	<label> Όνομα</label><input type="text" value="<?=$name?>" name="name" maxlength="100"/><br />
        	<label> Επώνυμο</label><input type="text" value="<?=$surname?>" name="surname" /><br />
        	<label> Διέυθυνση</label><input type="text" value="<?=$address?>" name="address" maxlength="600" /><br />
   	     	<label> T.K.</label><input type="text" value="<?=$postcode?>" name="postcode" /><br />
        	<label> Πόλη</label><input type="text" value="<?=$city?>" name="city" /><br />
        	<label> ΑΦΜ</label><input type="text" value="<?=$afm?>" name="afm" /><br />
        	<label> ΚΥΤ</label><input type="text" value="<?=$kyt?>" name="kyt" /><br />
        	<label> ΑΜΚΑ</label><input type="text" value="<?=$amka?>" name="amka" /><br />
        	<label> Αριθμός Σύνταξης</label><input value="<?=$pensionNo?>" type="text" name="pensionNo" /><br />
        	<label> ΙBAN</label><input type="text" value="<?=$iban?>" name="iban" /><br />
        	<label> Tράπεζα</label><input type="text" value="<?=$bank?>" name="bank" /><br />
   <input type="submit" name="submit" value="submit"/>
        	
        </form>
        <p>
      
     	</p>
     </div>
    
    </div>
<?php include("htdocs/includes/footer.php"); ?>