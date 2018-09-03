<?php

namespace SomeFolder;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;


use SomeFolder\ShowCommand;


class AddCommand extends Command {

	public function configure()
	{
		$this->setName('add')
			->setDescription('Add tasks.')
			->addArgument('description', InputArgument::REQUIRED);
	}

	public function execute( InputInterface $input,  OutputInterface $output)
	{
		$description = $input->getArgument('description');
		$this->addTasks($description);
		$output->writeln('<info> Task added! </info>');
		$this->showTasks($output);
	}

	public function addTasks($description)
	{
		$tasks = $this->database->addNewTask('tasks', $description);

	}

}