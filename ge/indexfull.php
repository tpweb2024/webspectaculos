
<?php

    class DDBB {

        private static $domainName = 'localhost';
        private static $dbName = 'g27_db_webspectaculos';
        private static $usrName = 'root';
        private static $passw = '';
        private static $error;
        private static $dbConnection;
         
        public static function getDBConnection(){
            DDBB::$error = null;
            DDBB::$dbConnection = null;
            try{
                DDBB:: $dbConnection = new PDO(
                    'mysql:host='.DDBB::$domainName.';'.
                    'dbname='.DDBB::$dbName, 
                    DDBB::$usrName, 
                    DDBB::$passw);
                DDBB::$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                DDBB::$error = "Error de conexión: " . $e->getMessage();
            }
        }

        public static function getQueryResults( $query, $queryParams){
            if ( !isset(DDBB::$dbConnection) )
                DDBB::getDBConnection();
            if ( !isset(DDBB::$error) ){
                $query = DDBB::$dbConnection->prepare($query);
                $query->execute($queryParams);
                return $query->fetchAll(PDO::FETCH_OBJ);
            }
            return null;
        }
    }

/*
    $htmlLogin = '
            nombre: <input type="text" name="user" /> <br>
            contraseña: <input type="text" name="passw" /> <br>
            <input type="button" value="ingresar" id="btnLogin" />
            <script src="main.js"></script>
            ';
            
    if ( !isset($_POST["user"]) ){
        echo $htmlLogin;
        die();
    } 
*/

    DDBB::getDBConnection();
    if ( !isset( DDBB::$error ) ){
        $dataTipoE = DDBB::getQueryResults('SELECT * FROM tipoevento', []);
        echo "<ul>";
        foreach($dataTipoE as $eTipoE){
            echo '<li><h3>' . $eTipoE->nombre . '</h3></li>';
            echo '<code>| duración_máxima:' . $eTipoE->duracion_maxima . 'hs.</code><br>';
            echo '<code>| capacidad_máxima:' . $eTipoE->capacidad_maxima . ' asistentes</code><br><br>';
           $dataEvento = DDBB::getQueryResults('SELECT * FROM evento WHERE tipo = ?', [$eTipoE->id]);
           echo "<ul>";
           foreach($dataEvento as $eEvento){
              echo '<li><b>' . $eEvento->nombre . '</b><br><i>' .
                            $eEvento->fecha . '<br>' .
                            $eEvento->descripcion . '</i></li>';
            }
            echo "</ul>";
        }
    }
    echo '<input type="button" value="extra" />';
    echo '<script src="extra.js"></script>';





?>