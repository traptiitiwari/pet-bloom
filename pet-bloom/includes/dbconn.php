 <?php
/* Database config FOR HEROKU SERVER */

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

/* End config */

// ////////////////////////////////////////////////////////////////

/* Database config FOR LOCALHOST*/

// $db_host		= 'localhost';
// $db_user		= 'root';
// $db_pass		= '';
// $db_database	= 'dbcnp'; 
// $con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);

/* End config */

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
