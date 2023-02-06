<?php
if (isset ($_POST)){
   echo "Ваша форома отправлена. <br> Наши специалисты свяжуться с вами в течениии 20 минут!";
   print ("<br>Name: " . $_POST['fio']);
   print ("<br>Email: " . $_POST['mail']);
   print ("<br>Theme: " . $_POST['title']);
   print ("<br>Message: " . $_POST['msg']);
} 
