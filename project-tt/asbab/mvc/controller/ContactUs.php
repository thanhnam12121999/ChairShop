<?php
    require_once "../mvc/core/MailSMTP/PHPMailer.php";
    require_once "../mvc/core/MailSMTP/Exception.php";
    require_once "../mvc/core/MailSMTP/OAuth.php";
    require_once "../mvc/core/MailSMTP/POP3.php";
    require_once "../mvc/core/MailSMTP/SMTP.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class ContactUs extends Controller
    {
        public function __construct()
        {
            session_start();
            if (empty($_SESSION['username']))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/login");
                exit();
            }
            $this->dataProduct = $this->link_model("Product");
            $this->dataContact = $this->link_model("Contact");
        }
//
        public function index ()
        {
            $this->link_view("master1",[
                "page" => "contact",
                "data" => ""
            ]);
        }
//        send mail
        public function sendMessage ()
        {
            if (!isset($_POST['submit']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message']))
            {
                $_SESSION['error'] = 'Please! Fill in the input blank in the form.';
                header("location:http://localhost:8080/project-tt/asbab/public/contactus");
                exit();
            }
//
            $this->dataContact->updateContact() ;
            $_SESSION['success'] = 'We have received your message and we will';
            header("location:http://localhost:8080/project-tt/asbab/public/contactus");
            exit();
        }
//
        public function wait ()
        {
            //start send mail smtp
            $email = 'anhhuou6@gmail.com';
            $tennd = 'namnamnam';
            $stringRand =  substr(md5(rand()), 0, 11);
            $code =  strtoupper($stringRand);                         //code discount
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                $mail->isSMTP();
                $mail->CharSet 	= "utf-8";                                    // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'thanhnam12121999@gmail.com';                 // SMTP username
                $mail->Password = 'namthanh000...????""""';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('thanhnam12121999@gmail.com',"SHOP-X");
                $mail->addAddress($email,$tennd);     // Add a recipient
                // $mail->addAddress('ellen@example.com');               // Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Mã giảm giá từ shop';
                $mail->Body    =  '$code' ;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }
//end send mail smtp
        }
    }
