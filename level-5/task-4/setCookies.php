<?php
setcookie('login', 'admin', 0, '/');
setcookie('name', 'ivan', time() + 20, '/');
echo 'Cookie установлены';