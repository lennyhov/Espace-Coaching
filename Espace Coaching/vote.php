<?php

require_once("db.inc.php");

    
 function setVote($object_id,$note,$mail,$type) {
        $mail = mysql_real_escape_string($mail);
        $note = mysql_real_escape_string($note);
        $sql = 'INSERT INTO vote  (id, mail, type, object_id, note) VALUE (NULL, "'.$mail.'", "'.$type.'", "'.$object_id.'", "'.$note.'")';
        mysql_query($sql); 
    }

?>