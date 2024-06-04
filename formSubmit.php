<?php


    $name = $_POST['name']
    $visitor_email = $_POST['email']
    $phone_number = $_POST['phone']
    $message = $_POST['message']
        
    
    $email_from = 'khwidzhiliphindulo@gmail.com';

    $email_subject = 'New email';

    $email_body = "User Name: $name.\n".
        
                     "User Email: $visitor_email .\n".

                    "User Number:  $phone_number.\n".
        
                     "User Message:   $message.\n";
        

     $to = 'khwidzhiliim@gmail.com';
     
     $headers = "From: $email_from \r\n";

     $headers = "Reply-To:  $visitor_email\r\n ";

mail( $to,$email_subject,$email_body,$headers);

header("Location: contact.html");

//DATABASE 
/*$conn = new mysqli('localhost', 'root','KhwiDz#1', 'test');
if($conn->connect_error){
    die('Opps Connection Failed :' .$conn->connect_error);
    
}else{
    $stmt = $conn->prepare("insert into registrationFORM(name, email, phone, message) values (?, ?, ?, ?)");
    
    $stmt->bind_param("ssssi", $name, $visitor_email,  $phone_number, $message);
    $stmt->execute();
    echo "reg success";
    $stmt->close();
    $conn->close();
        
}*/
         

?>
















