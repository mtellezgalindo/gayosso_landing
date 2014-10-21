<?php
require_once 'mail/Mandrill.php'; //Not required with Composer
//TEST API
//$mandrill = new Mandrill('YnXQERsyhJ4aPMX5FgYbGg');

//PRODUCTION API
$mandrill = new Mandrill('T97dGRjeBLJbFEQ65c8rJQ');

$message = array(
    'subject' => $c_name_s . ', Munlogic acepta tu misión',
    'from_email' => 'alberto@munlogic.com',
    'to' => array(array('email' => $c_email_s, 'name' => $c_name_s . " " . $c_lastName_s)),
    'merge_vars' => array(array(
        'rcpt' => 'alberto@munlogic.com',
        'vars' =>
        array(
            array(
                'name' => 'Alberto',
                'content' => 'Recipient 1 first name'),
            array(
                'name' => 'Castillo',
                'content' => 'Last name')
    ))));

$template_name = 'gracias';
$template_content = '';
/*$template_content = array(
    array(
        'name' => 'main',
        'content' => 'Hi *|FIRSTNAME|* *|LASTNAME|*, thanks for signing up.'),
    array(
        'name' => 'footer',
        'content' => 'Copyright 2013.')

);*/

$response = $mandrill->messages->sendTemplate($template_name, $template_content, $message);
//print_r($response);
?>