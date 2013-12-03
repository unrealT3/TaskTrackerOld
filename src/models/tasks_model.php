<?php
class Tasks_Model extends Model
{
    public function __construct(){
        parent::__construct();

    }
    public function getTasks(){
        Session::init();
        $sth = $this->db->prepare("SELECT * FROM tasks WHERE user_id = :userID");
        $sth->execute(array(
            ':userID' => Session::get('userID')
        ));

        //$data = $sth->fetchAll();
        $count = $sth->rowCount();
        //if results
        if($count > 0){
            while($row = $sth->fetch(PDO::FETCH_ASSOC))
            {
                $results[] = $row;

            }

            return $results;
        }


    }
}
?>