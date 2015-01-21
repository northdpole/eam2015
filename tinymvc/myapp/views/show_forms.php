
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
        	<input type="text" /><br />
        	<label> Αριθμός Σύνταξης</label>
        	<br />
        	<input type="text" /><br />
        	<label> Αριθμός AMKA</label>
        	<br />
        	<input type="text" />
        	<br />
        	<input type="submit"/>
        	
        </form>
       
           </div>
    
    </div>
<?php include("htdocs/includes/footer.php"); ?>