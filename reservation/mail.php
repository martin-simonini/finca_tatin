$errors = '';
$myemail = 'soy_martin98@yahoo.com';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
   empty($_POST['email'])

{
    $errors .= "\n Error: all fields are required";
}
$name = $_POST['name'];
$email_address = $_POST['email'];
$tel = $_POST['tel'];
$arrival = $_POST['arrival'];
$people = $_POST['people'];
$arrival_place = $_POST['arrival_place'];
$comments = $_POST['comments'];
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
$to = $myemail;
$email_subject = "Reservasion de Finca Tatin";
$email_body = "Habia una reserva hecha en FincaTatin.com ".
" Los detalles:\n Nombre: $name \n ".
"Email: $email_address\n Numero De telephono \n $tel
\n Fecha de llegada: $arrival \n Numero De Personas: $people \n
Lugar de llegada: $arrival_place \n totros commetarios: $comments";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
//redirect to the 'thank you' page
header('Location: sent.html');
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
