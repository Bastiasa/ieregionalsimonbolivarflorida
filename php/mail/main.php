<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    require 'Exception.php';
    require 'HPMailer.php';
    require 'SMTP.php';

    class MessageReceptor {

        public string $name = "";
        public string $email = "";

        function __construct(string $name, string $email) {
            $this->name = $name;
            $this->email = $email;
        }


    }

    class MessageHeader {

        public string $name = "";
        public string $value = "";

        function __construct(string $name, string $value) {
            $this->value = ($value);
            $this->name = ($name);
        }
    }

    function SendMessage(array | MessageReceptor $to, array | MessageHeader $headers, string $subject, string $body, bool $isHtml = true)
    {
        $mail = new PHPMailer;
        $mail->isSMTP(); 


        $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
        $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
        $mail->Port = 587; // TLS only
        $mail->SMTPSecure = 'tls'; // ssl is deprecated
        $mail->SMTPAuth = true;

        if(gettype($to) == "array") {
            foreach($to as $index => $receptor) {
                $mail->addAddress($receptor->email, $receptor->name);
            }
        } else if ($to instanceof MessageReceptor) { 
            $mail->addAddress($to->email, $to->name);
        } else {
            return false;
        }

        if(gettype($headers) == "array") {
            foreach($headers as $index => $header) {
                $mail->addCustomHeader($header->name, $headers->value);
            }
        } else if ($headers instanceof MessageHeader) { 
            $mail->addCustomHeader($headers->name, $headers->value);
        } else {
            return false;
        }

        $mail->Username = 'bastiasa.mailer@gmail.com'; // email
        $mail->Password = 'nydpqvpmwopruzau'; // password
        $mail->setFrom('bastiasa.mailer@gmail.com', 'Reportes Institucionales'); // From email and name

        $mail->Subject = $subject; //Set the message's subject
        
        $mail->Body=$body;
        $mail->isHTML($isHtml);

        $mail->AltBody = 'No es posible visualizar HTML.'; // If html emails is not supported by the receiver, show this body
        // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
        $mail->SMTPOptions = array(
                            'ssl' => array(
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                            )
                        );
        if(!$mail->send()){
            return false;
        }else{
            return true;
        }
    }


?>