 <?php
    function encrypt($string){
      $long = strlen($string);
      $str = '';
      for($x = 0; $x < $long; $x++){
        $str.=($x % 2) != 0 ? md5($string[$x) : $x;
      }
      return md5($str);
    }
    $db = new Conexion();

    $pass = encrypt($_POST['contrasena']);
    $usuario = $db->real_escape_string($_POST['usuario']);
    $email = $db->real_escape_string($_POST['email']);

    $sql = $db->query("SELECT usuario FROM usuarios WHERE usuario = '$usuario' OR correoElectronico = '$email' LIMIT 1;");
    if($db->rows($sql) == 0){
       //Haciendo la confirmación por $email
       //incluir php mailer
        
        $keyreg = md5(time());
        // These must be at the top of your script, not inside a function
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        //Load Composer's autoloader
        require 'vendor/autoload.php';

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'p3plcpnl0173.prod.phx3.secureserver.net';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'user@example.com';                 // SMTP username
            $mail->Password = 'Prinick2016';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('public@ocrend.com', 'Vittaz');         //QUIEN MANDA EL CORREO
            $mail->addAddress($email, $usuario);     //A QUIEN LE LLEGA EL COR
            $mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');

            //Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Activación de la cuenta';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'Hola .$usuario.para confirmar tu correo presiona el link.$link';

            $mail->send();
            $db->query("INSERT INTO usuario(usuario, correoElectronico, contrasena) VALUES('$usuario', '$pass', '$email')");
            $_SESSION['correoElectronico'] = $email;
            $HTML = 1;
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }else{
      $HTML = '<div class = "alert alert-dismissible alert-danger">
      <button type = "button" class = "close" data-dismiss = "alert">x</button>
      <strong>ERROR:</strong> El email ingresado ya existe!
      </div>';
    }

    $db->close();
    echo $HTML;
 ?>
