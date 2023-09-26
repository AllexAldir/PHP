<?php

//-> final evita uma sobresção do código:

abstract class A
{
	final public function t()
	{
		print_r('###Final modificador não poderá ser mudado###');
	}
}

