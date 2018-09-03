<?php

namespace SomeFolder;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

use SomeFolder\ShowCommand;

class CompleteCommand extends Command {

	public function configure()
	{
		$this->setName('complete')
			->setDescription('Show all tasks.')
			->addArgument('id', InputArgument::REQUIRED);
	}

	public function execute( InputInterface $input,  OutputInterface $output)
	{
		$id = $input->getArgument('id');
		$this->completeTask($id);
		$output->writeln('<info> Task complete! </info>');
		$this->showTasks($output);
	}

	public function completeTask($id)
	{
		$this->database->completeTaskId('tasks', $id);
	}

}