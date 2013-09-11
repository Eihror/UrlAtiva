<?php include_once 'urlAtiva.php'; ?>
<?php
    $url_base = "http://localhost/urlAtiva";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Url Ativa</title>
        
        <style>
            a{
                color:#000;
                text-decoration: none;
            }
            .active{
                color: #f00;
                text-decoration: none;
            }
        </style>
    </head>
    
    <body>
        
        <a href="<?php echo $url_base; ?>/" <?php if(ativandUrl('')) { echo "class='active'"; } ?> />Home</a>
        &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
        <a href="<?php echo $url_base; ?>/empresa.php" <?php if(ativandUrl('empresa')) { echo "class='active'"; } ?> />Empresa</a>
        &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
        <a href="<?php echo $url_base; ?>/contato.php" <?php if(ativandUrl('contato')) { echo "class='active'"; } ?> />Contato</a>
