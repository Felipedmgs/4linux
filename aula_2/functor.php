<?php

class Fibonacci
{

	public function calculateFib($n)
	{
		if($n < 1)
		{
			return 1;
		}

		return $this->f($n-1) + $this->f($n-2);
	}

	public function __invoke($n)
	{
		if(!in_array($n, $this->cache)){
			$this->cache[$n] = $this->f($n);
		}

		return $this->cache[$n];
	}
}

$f = new Fibonacci();

for($i = 0; $i < 100; $i++)
{
	echo $f($i) . '<br>';
}


?>