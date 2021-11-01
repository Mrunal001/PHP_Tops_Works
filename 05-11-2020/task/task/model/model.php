<?php
class model
{
    public $connection="";
    public function __construct()
    {
    
        try
        {
        $this->connection=new mysqli("sql101.byethost31.com","b31_27133801","t12345","b31_27133801_task");

        }
        catch(exception $e)
        {
           die(mysqli_error($this->connection,$e));
           
        }

        
    }
    //create a member function for select all data

     public function sellalldata($table)
     {
        $select="select * from $table";
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_array($query))
        {
            $arr[]=$result;
        }
        return $arr;
     }  

    
}



?>