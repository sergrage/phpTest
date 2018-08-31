<?php 

namespace SomeFolder;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SayHelloCommand extends Command {


	public function configure()
	{
		$this->setName('sayHelloTo')
			->setDescription('Offer a greeting to the given person.')
			->addArgument('name', InputArgument::REQUIRED, 'Your name');	
	}

	public function execute(InputInterface $input, OutputInterface $output)
	{
		$name = $input->getArgument('name');
		$message = '<comment>Hello, ' . $name . '</comment>';
		$output->writeln($message);
		$output->writeln('<info>Hello, ' . $name . '</info>');
	}
}