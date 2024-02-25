<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'awaisahmed18may@gmail.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["subject"]; // Add the Phone field
    $comment = $_POST["message"]; // Add the Message field

    // Build the email message
    $to = "awaisahmed18may@gmail.com"; // Replace with your email address
    $subject = "Eco Homes Solution Contact Form Submission from $name";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n"; // Include Phone in the message
    $message .= "Message: $comment\n"; // Include Message in the message


    // Add other form fields to the message

    // Send the email
    if (mail($to, $subject, $message)) {
        echo '<div class="center-container">';
        echo '<p class="thank-you-message">Thank you for your submission!</p>';
        echo '<p class="thank-you-message">Please stay with us, as we will be in touch with you shortly.</p>';
        echo '<button class="goback-button" onclick="goBack()">Go back</button>';
        echo '</div>';
    } else {
        echo "Failed to send the email. Please try again later.";
        echo '<button class="goback-button" onclick="goBack()">Go back</button>';
    }
}

?>
<script>
function goBack() {
    window.location.href = "https://ecohomessolutions.co.uk/"; // Replace with your website's home page URL
}
</script>
<style>
  .goback-button {
    background-color: #b28332;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  .thank-you-message {
    color: green;
    font-size: 24px;
    line-height:10px
  }
  .center-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 70vh; /* This centers vertically on the page */
  }
</style>