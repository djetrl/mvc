<?php
	namespace Project\Controllers;
	use Core\Controller;
	
	class UserController extends 
		Controller 
	{
		private $users;
		
		public function __construct()
		{
			$this->users = [
                1 => ['name'=>'user1', 'age'=>'23', 
                    'salary' => 1000], 
                2 => ['name'=>'user2', 'age'=>'24', 
                    'salary' => 2000], 
                3 => ['name'=>'user3', 'age'=>'25', 
                    'salary' => 3000], 
                4 => ['name'=>'user4', 'age'=>'26', 
                    'salary' => 4000], 
                5 => ['name'=>'user5', 'age'=>'27', 
                    'salary' => 5000], 
            ];
		}
		
		// public function show($params)
		// {
        //     $p = $this->users[$params['id']];
        //     foreach ($p as $row) {
        //         echo $row . "\r\n";
        //     }
		// }
        // public function info($params)
		// {
		// 	$p = $this->users[$params['id']];
        //     $s = $p[$params['key']];
        //     echo $s;
		// }
        // public function all()
		// {
        //     for ($i=1; $i <= 5; $i++) {  
        //     $p = $this->users[$i];
        //         foreach($p as $row){
        //         echo $row . "\r\n";
        //         }
        //         echo '<br>';
        //     }
		// }
        public function first($params)
		{   

            for ($i=1; $i <= $params['n']; $i++) {  
            $p = $this->users[$i];
                foreach($p as $row){
                echo $row . "\r\n";
                }
                echo '<br>';
            }
		}
	}
?>