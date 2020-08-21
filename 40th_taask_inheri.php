<?php 
	class school
	{
		public $name;
		public $id;
		public $salary;
		function input()
		{
			$this->name=array("piyush", "ram", "abdul", "ishanu");
			$this->id=array(101,102,103,104);
			$this->salary=array(37262,42334,23424,36322);
		}
	}
	class reporting extends school
	{

		function output($ids)
		{ $f=0;
			for ($i=0; $i<count($this->id); $i++)	
			{		
				if ($ids==$this->id[$i])
				{ $f=1;
					echo "Name=".$this->name[$i];
					echo "<br>Salary=".$this->salary[$i];
				}
			}
			if($f==0)
				{
					echo "no record found";
				}
			}
		}
	$obj=new reporting();
	$obj->input();
	$obj->output(101);

?>