<HTML>

<HEAD>
<TITLE>E-Mail Formulaire</TITLE>
</HEAD>
<BODY>

<FORM method="POST" action="">
<P>Votre nom:<br>
<INPUT type="text" name="nom" size=30>
</p>
<P>Votre adresse E-Mail:<br>
<INPUT type="text" name="email" size=30>
</p>
<P>Message:<br>
<textarea name="message" cols=30 rows=5></textarea>
</p><INPUT type="submit" value="Envoyer">
</FORM>
</BODY>

<?php

$msg = "Nom:\t$Nomr\n";
$msg .= "E-mail:\t$email\n";
$msg .= "Message:\t$message\n\n";

$recipient = "tonCourriel@mail.com";
$subject = "Formulaire";

$mailheaders = "From: Mon site web<> \n";
$mailheaders .= "Reply-To: $CP\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $nom </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo "</BODY></HTML>";

?>

</HTML>