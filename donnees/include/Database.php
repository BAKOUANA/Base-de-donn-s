<?php
class Database{
 
    /**
     * database connection object
     * @var \PDO
     */
    protected $pdo;
 
    /**
     * Connect to the database
     */
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
	
	
	 public function getAllRecords($tableName='payment_request,payment_response', $fields='*', $cond='', $orderBy=' ORDER BY time desc', $limit='')
    {
        //echo "SELECT  $tableName.$fields FROM $tableName WHERE 1 ".$cond." ".$orderBy." ".$limit;
        //print "<br>SELECT $fields FROM $tableName WHERE 1 ".$cond." ".$orderBy." ".$limit;
        $stmt = $this->pdo->prepare("SELECT $fields FROM $tableName WHERE 1 ".$cond." ".$orderBy." ".$limit);
        //print "SELECT $fields FROM $tableName WHERE 1 ".$cond." ".$orderBy." " ;
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
	
	
}
?>