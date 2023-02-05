<?php
if (isset ($_POST)){
   print ("Name" . $_POST['fio']);
   print ("<br>Email:" . $_POST['mail']);
   print ("<br>Theme:" . $_POST['title']);
   print ("<br>Message" . $_POST['msg']);
}