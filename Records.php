<?php
class Records{
    public string $name,$email,$gender,$date,$city;//,$phone;
        

    function __construct(string $name,string $email,string $gender,string $date,$city)
    {
            $this->name=$name;
            $this->email=$email;
            $this->gender=$gender;
            $this->date=$date;
            $this->city=$city;
           
    }

   
  

}
?>
