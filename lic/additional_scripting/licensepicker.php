//License Picker V1.0 ©2022-infinity Kiss Kornél and the Kiss Family.
//Licensed Under Creative Commons Zero v1.0 Universal['https://creativecommons.org/publicdomain/zero/1.0/']
<?php
function lic(){
    if ($LIC == 'cc0'){
        echo '<center><a href="https://creativecommons.org/publicdomain/zero/1.0/"><img src="/lic/img/cc0.png" width="50%" height="50%"></img></a></center>';
    }
    if ($LIC == 'smrr'){
        echo '<center><a href="https://nothing"><img src="/lic/img/ccsmr.png" width="50%" height="50%"></img></a></center>';
    }
    if ($LIC == 'by'){
        echo '<center><a href="https://creativecommons.org/licenses/by/4.0/"><img src="/lic/img/by.png" width="50%" height="50%"></img></a></center>';
    }
    if ($LIC == 'by-sa'){
        echo '<center><a href="https://creativecommons.org/licenses/by-sa/4.0/"><img src="/lic/img/by-sa.png" width="50%" height="50%"></img></a></center>';
    }
    if ($LIC == 'by-nd'){
        echo '<center><a href="https://creativecommons.org/licenses/by-nd/4.0/"><img src="/lic/img/by-nd.png" width="50%" height="50%"></img></a></center>';
    }
    if ($LIC == 'by-nc'){
        echo '<center><a href="https://creativecommons.org/licenses/by-nc/4.0/"><img src="/lic/img/by-nc.png" width="50%" height="50%"></img></a></center>';
    }
    if ($LIC == 'by-nc-nd'){
        echo '<center><a href="https://creativecommons.org/licenses/by-nc-nd/4.0/"><img src="/lic/img/by-nc-nd.png" width="50%" height="50%"></img></a></center>';
    }
    if ($LIC == 'by-nc-sa'){
        echo '<center><a href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><img src="/lic/img/by-nc-sa.png" width="50%" height="50%"></img></a></center>';
    }
}
?>