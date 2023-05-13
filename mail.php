

<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "contacto@pikapak.app";  //My email address
 //getting customer data
 $name = $_POST['name']; //getting customer name
 $name1 = $_POST['name1']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $phone = $_POST['phone']; //getting customer Phome number
 // $country = $_POST['country']; //getting subject line from client
 // $url = $_POST['url'];
 // $companyName = $_POST['companyName'];
 $msg = $_POST['msg'];

 $subject2 = "Confirmation: Message was submitted successfully."; // For customer confirmation
 

 //Email body I will receive
 $message = "Cleint Name: " . $name . " " . $name1 . "\n"
 
 . "Phone Number: " . $phone . "\n"
 // . "Country Name: " . $country . "\n"
 // . "URL: " . $url . "\n"
 // . "Company Name: " . $companyName . "\n\n"
 . "Client Message: " . "\n" . $_POST['msg'];
 
 //Message for client confirmation
 $message2 = "Dear " . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $_POST['msg'] . "\n\n"
 . "Regards," . "\n" . "- Pikapak";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 

 //PHP mailer function
 
  $result1 = mail($mailto, $name, $message, $headers); // This email sent to My address

  //$result1 = mail($mailto, $name, $name1, $phone, $country, $url, $companyName, $msg, $headers); 


  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>



