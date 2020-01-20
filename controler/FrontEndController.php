<?php
    function home(){
        include("view/home.php");
    }
    function pageError()
    {
        include("view/pageError.php");
    }
function contact()
{
    
    if (isset($_POST['sendMail'])) {

        $name = htmlspecialchars($_POST['name']);
        $firstName = htmlspecialchars($_POST['firstName']);
        $mail = htmlspecialchars($_POST['mail']);
        $content = htmlspecialchars($_POST['message']);
        

        if(!empty($name) and !empty($firstName) and !empty($mail) and !empty($content)){
              
                $to = 'chenalcyril87@gmail.com';
                $subject= 'Envoi depuis CYC-developpement';
            
                mail($to, $subject, $content, 'From: ' . $mail);
                
                $_SESSION['message'] = "Le message est bien envoyé ! ";
                $_SESSION['msg_type'] = "success";
                header('Location:index.php?action=contact');
                exit();

            }else{
                $_SESSION['message'] = "Tous les champs sont obligatoire ! ";
                $_SESSION['msg_type'] = "danger";
            }
    }
        include("view/contact.php");
    }

?>