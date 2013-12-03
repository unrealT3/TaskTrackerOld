<?php
class Tasks_Model extends Model
{
    public function __construct(){
        parent::__construct();

    }
    public function getTasks(){

        $sth = $this->db->prepare("SELECT * FROM tasks");
        $sth->execute();

        //$data = $sth->fetchAll();
        $count = $sth->rowCount();

        if($count > 0){
            while($row = $sth->fetch(PDO::FETCH_ASSOC))
            {
                $results[] = $row;

            }

            return $results;



        }
        else{
            //no dice
            header('location: ../login');

        }

    }
}
?>