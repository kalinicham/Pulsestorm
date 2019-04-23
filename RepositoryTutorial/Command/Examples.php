<?php
namespace Pulsestorm\Repository\Command;

use Magento\Framework\ObjectManagerInterface;
use Symfony\Component\Console\Command\Command;


class Examples extends Command
{
    protected $objectManager;

    public function __construct(
        ObjectManagerInterface $manager,
        \Magento\Framework\App\State $appState,
        $name=null
    )
    {
        $this->objectManager = $manager;
        $appState->setAreaCode('frontend');
        parent::__construct();
    }

}