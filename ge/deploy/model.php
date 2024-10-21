
<?

require_once 'deploy/db_config.php';

class Model {

    protected $db;

    public function __construct() {
        $this->db = new PDO(
        "mysql:host=".MYSQL_HOST.";dbname=".MYSQL_DBNAME.";charset=utf8", MYSQL_USER, MYSQL_PASS);
        $this->deploy();
    }

    private function _deploy() {
        $query = $this->db->query('SHOW TABLES');
        $tables = $query->fetchAll();
        if(count($tables) == 0) {
            $sql = file_get_contents('g27_db_webespectaculos');
            $this->db->query($sql);
        }
    }
}

?>