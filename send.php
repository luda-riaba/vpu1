<?php 

if(isset($_POST['submit'])){
    $to = "2006luda@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма
    $from = "no-reply@epicblog.net"; // Здесь нужно написать e-mail, от кого будут приходить письма, например no-reply@epicblog.net
    $first_name = $_POST['first_name'];
    $subject = "Форма отправки сообщений с сайта";
    $subject2 = "Copy of your form submission";
    $message = "ФИО посетителя: ". $first_name . " | Адрес электронной почты: "  . $_POST['email'] . " | Комментарий: " . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
	
    mail($to,$subject,$message,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
	echo "<br /><br /><a href='https://luda-riaba.github.io/vpu1'>Вернуться на сайт.</a>";

}

?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://luda-riaba.github.io/vpu1/kontakt.php");}
window.setTimeout("changeurl();",3000);
</script>