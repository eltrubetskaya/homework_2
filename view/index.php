<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Doctrine\Common\Inflector\Inflector;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HomeWork_2</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 jumbotron">
            <header class="col-lg-12" >
                <h1>HomeWork_2</h1>
            </header>
            <main>
                <section  class="col-lg-12">
                    <h4>
                        <?php
                        // create a log channel
                        $log = new Logger('test');

                        $log->pushHandler(new StreamHandler('../log/test.log', Logger::DEBUG));
                        $log->addInfo('Adding a new user', array('username' => 'test'));

                        // add records to the log
                        $log->warning('Foo');
                        echo 'log add';
                        ?>
                    </h4>
                </section>
                <section  class="col-lg-12">
                    <h4>
                        <?php
                        $string = "reality is quite different than it actually is";
                        $word = 'P_H_P';
                        echo '"reality is quite different than it actually is" => '.Inflector::ucwords($string).'<br/>'; //Uppercases words with configurable delimeters between words.
                        echo '"P_H_P" => '.Inflector::classify($word); //Converts a word into the format for a Doctrine class name.
                        ?>
                    </h4>
                </section>
            </main>
        </div>
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>