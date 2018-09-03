<?php

namespace SomeFolder;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;



class ShowCommand extends Command {

	public function configure()
	{
		$this->setName('show')
			->setDescription('Show all tasks.');
	}

	public function execute( InputInterface $input,  OutputInterface $output)
	{
		$this->showTasks($output);
	}

}