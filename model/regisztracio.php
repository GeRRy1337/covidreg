<?php
class regisztracio{
    private $id;
    private $taj;
    private $nev;
    private $email;
    private $szul;
    private $vakcina;
    private $megjegyzes;

    public function set_jelentkezo($beid,$conn)
    {
        $sql="Select * from regisztracio where id=".$beid;
        if ($result = $conn->query($sql)){
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $this->id=$row['id'];
                    $this->taj=$row['taj'];
                    $this->nev=$row['nev'];
                    $this->email=$row['email'];
                    $this->szul=$row['szuletes'];
                    $this->vakcina=$row['vakcina'];
                    $this->megjegyzes=$row['megjegyzes'];
                }
            }
        }
    }

    public function get_id (){
        return $this->id;
    }
    public function get_taj (){
        return $this->taj;
    }
    public function get_nev (){
        return $this->nev;
    }
    public function get_email (){
        return $this->email;
    }
    public function get_szul (){
        return $this->szul;
    }
    public function get_vakcina (){
        return $this->vakcina;
    }
    public function get_megjegyzes (){
        return $this->megjegyzes;
    }

}
?>