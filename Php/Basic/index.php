<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n="name";
        $name ="<strong>Chandan</strong>"; //$name is variable
        $abc=1;
    ?>
     <h3>
       using <?php echo "php"; ?>
   </h3>
        Hi I am <?php echo $name;?> 
        <br> 
        

     <h3>
       using <?print "print"; ?>
   </h3>
        Hi I am <?print $name;?> 
        <br>

   <h3>
       using <?php echo "="; ?>
   </h3>
        Hi I am <?= $name;?> 
        <br>
   we have $GLOBALS variable
   <?php
        echo $GLOBALS['name'];
    ?>
    <br>
    Request variable
    <?php
        echo $_REQUEST['username']." and ".$_REQUEST['name'];
    ?>
<br>

    <?php
        echo "<br> PHP_SELF".$_SERVER['PHP_SELF'];
        echo "<br> GATEWAY_INTERFACE".$_SERVER['GATEWAY_INTERFACE'];
        echo "<br> SERVER_ADDR".$_SERVER['SERVER_ADDR'];
        echo "<br> SERVER_NAME".$_SERVER['SERVER_NAME'];
        echo "<br> SERVER_SOFTWARE".$_SERVER['SERVER_SOFTWARE'];
        echo "<br> SERVER_PROTOCOL".$_SERVER['SERVER_PROTOCOL'];
        echo "<br> REQUEST_METHOD".$_SERVER['REQUEST_METHOD'];
        echo "<br> REQUEST_TIME".$_SERVER['REQUEST_TIME'];
        echo "<br> REQUEST_TIME_FLOAT".$_SERVER['REQUEST_TIME_FLOAT'];
        echo "<br> QUERY_STRING".$_SERVER['QUERY_STRING'];
        echo "<br> DOCUMENT_ROOT".$_SERVER['DOCUMENT_ROOT'];
        echo "<br> HTTP_ACCEPT".$_SERVER['HTTP_ACCEPT'];
        echo "<br> HTTP_ACCEPT_CHARSET".$_SERVER['HTTP_ACCEPT_CHARSET'];
        echo "<br> HTTP_HOST".$_SERVER['HTTP_HOST'];
        echo "<br> HTTP_REFERER".$_SERVER['HTTP_REFERER'];
        echo "<br> HTTP_USER_AGENT".$_SERVER['HTTP_USER_AGENT'];
        echo "<br> HTTPS".$_SERVER['HTTPS'];
        echo "<br> REMOTE_ADDR".$_SERVER['REMOTE_ADDR'];
        echo "<br> REMOTE_HOST".$_SERVER['REMOTE_HOST'];
        echo "<br> REMOTE_PORT".$_SERVER['REMOTE_PORT'];
        echo "<br> SCRIPT_FILENAME".$_SERVER['SCRIPT_FILENAME'];
        echo "<br> SERVER_ADMIN".$_SERVER['SERVER_ADMIN'];
        echo "<br> SERVER_PORT".$_SERVER['SERVER_PORT'];
        echo "<br> SERVER_SIGNATURE".$_SERVER['SERVER_SIGNATURE'];
        echo "<br> PATH_TRANSLATED".$_SERVER['PATH_TRANSLATED'];
        echo "<br> SCRIPT_NAME".$_SERVER['SCRIPT_NAME'];
        echo "<br> REQUEST_URI".$_SERVER['REQUEST_URI'];
        echo "<br> PHP_AUTH_DIGEST".$_SERVER['PHP_AUTH_DIGEST'];
        echo "<br> PHP_AUTH_USER".$_SERVER['PHP_AUTH_USER'];
        echo "<br> PHP_AUTH_PW".$_SERVER['PHP_AUTH_PW'];
        echo "<br> AUTH_TYPE".$_SERVER['AUTH_TYPE'];
        echo "<br> PATH_INFO".$_SERVER['PATH_INFO'];
        echo "<br> ORIG_PATH_INFO".$_SERVER['ORIG_PATH_INFO'];
        echo "<br> ORIG_SCRIPT_NAME".$_SERVER['ORIG_SCRIPT_NAME'];
        echo "<br> PHP_SELF".$_SERVER['PHP_SELF'];
        echo "<br> argv".$_SERVER['argv'];
        echo "<br> argc".$_SERVER['argc'];
        
    ?>
</body>
</html>