<?php include 'function_article.php';

if(isset($_SESSION['userid']) && $_SESSION['type_user']=="admin"){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Members Area</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Members Area" /></a>
	    </div>
        <div class="content">
            
                <?php 
                
                      $articles = unvalidate_article(); 

                
                //echo $count;
                //echo $count.' new article to validate';
                
                ?>
            
            <TABLE BORDER="1"> 
        
            <CAPTION> Voici le titre du tableau </CAPTION> 
        <TR> 
            <TH> Username </TH> 
            <TH> Title  </TH> 
            <TH> Date </TH> 
        </TR> 
      
        <?php 
        while($rows = mysql_fetch_array($articles)){
                
                ?>
        <TR> 
            <TD> <a href="../Profil-coach.php?id=<?php echo $rows['id_users'];?>"><?php echo $rows['username'];?></a> </TD> 
            <TD> <a href="article.php?id=<?php echo $rows['id_article']?>"><?php echo $rows['titre'];?></a></TD> 
            <TD> <?php echo $rows['date_creation'];?> </TD> 
        </TR> 
        <?php  }
          
            ?>
            </TABLE>
            
            </div>
        </body>
    <?php }?>