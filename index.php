<?php
$CC_TITLE='Creative Commons (CC) Library';
$COMPLIANCE='This site is compliant with the Creative Commons Licenses';
$STYLESHEET='/cc.css';
$LIC='cc0';
?>
<html>
    <head>
    <link rel="stylesheet" href="<?php echo $STYLESHEET;?>">
    <title><?php echo $CC_TITLE;?></title>
    </head>
    <center>
        <h1><?php echo $CC_TITLE;?></h1>
        <h3><?php echo $COMPLIANCE;?></h3>
    </center>
<br></br>
<br></br>
<br></br>
<h1>Audio Tracks:</h1>
<center>
<table>
     <tr>
    <td><h1><a href="/library/dropofwhisper.php">Drop of whisper (2005)</h1></td>
</table>
</center>
<!-----------BEGIN LICENSE CHOOSER CODE----->
<center>
    <h3><?php
    if ($LIC == 'cc0'){
        echo '<center><a href="https://creativecommons.org/publicdomain/zero/1.0/"><img src="/lic/img/cc0.png" width="8%" height="8%"></img></a></center>';
    }
    if ($LIC == 'smrr'){
        echo '<center><a href="https://nothing"><img src="/lic/img/ccsmr.png" width="8%" height="8%"></img></a></center>';
    }
    if ($LIC == 'by'){
        echo '<center><a href="https://creativecommons.org/licenses/by/4.0/"><img src="/lic/img/by.png" width="8%" height="8%"></img></a></center>';
    }
    if ($LIC == 'by-sa'){
        echo '<center><a href="https://creativecommons.org/licenses/by-sa/4.0/"><img src="/lic/img/by-sa.png" width="8%" height="8%"></img></a></center>';
    }
    if ($LIC == 'by-nd'){
        echo '<center><a href="https://creativecommons.org/licenses/by-nd/4.0/"><img src="/lic/img/by-nd.png" width="8%" height="8%"></img></a></center>';
    }
    if ($LIC == 'by-nc'){
        echo '<center><a href="https://creativecommons.org/licenses/by-nc/4.0/"><img src="/lic/img/by-nc.png" width="8%" height="8%"></img></a></center>';
    }
    if ($LIC == 'by-nc-nd'){
        echo '<center><a href="https://creativecommons.org/licenses/by-nc-nd/4.0/"><img src="/lic/img/by-nc-nd.png" width="8%" height="8%"></img></a></center>';
    }
    if ($LIC == 'by-nc-sa'){
        echo '<center><a href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><img src="/lic/img/by-nc-sa.png" width="8%" height="8%"></img></a></center>';
    }
    ?>
</h3>
</center>
<!-----------END LICENSE CHOOSER CODE----->
</html>