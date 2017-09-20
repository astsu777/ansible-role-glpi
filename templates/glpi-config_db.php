<?php
 class DB extends DBmysql {

 public $dbhost     = '{{ db_server }}';

 public $dbuser     = '{{ glpi_user }}';

 public $dbpassword = '{{ glpi_db_password }}';

 public $dbdefault  = '{{ glpi_user }}_glpi';

}
