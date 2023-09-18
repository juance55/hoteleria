<?php
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "../ssl/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
mysqli_real_connect($con, "dbhoteleria.mysql.database.azure.com", "Administrador", "Autenticacion1234", "hotel", 3306, MYSQLI_CLIENT_SSL);
?>