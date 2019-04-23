<?php

class Examples extends \Symfony\Component\Console\Command\Command
{
    protected $objectManager;

    protected function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Magento\Framework\App\State $appState,
        $name = null
    )
    {
        $this->objectManager = $objectManager;
        $appState->setAreaCode('frontend');
        parent::__construct($name);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $repo = $this->objectManager->get('Magento\Catalog\Model\ProductRepository');
        $page = $repo->getById(2);
        echo get_class($page),"\n";
    }

}