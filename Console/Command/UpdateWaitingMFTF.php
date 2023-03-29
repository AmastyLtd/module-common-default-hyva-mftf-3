<?php

declare(strict_types=1);

namespace Amasty\CommonDefaultHyvaMFTF3\Console\Command;

use Magento\Framework\Console\Cli;
use Magento\Framework\Filesystem\DirectoryList;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateWaitingMFTF extends Command
{
    const MFTF_DIR = 'vendor/magento/magento2-functional-testing-framework';
    const TIMEOUT_FILE_PATH = 'src/Magento/FunctionalTestingFramework/Module/MagentoWebDriver.php';
    const OLD_WAIT_JS = '!!window.jQuery && window.jQuery.active == 0;';
    const NEW_WAIT_JS = '!window.jQuery || window.jQuery.active == 0;';

    /**
     * @var DirectoryList
     */
    private $dirList;

    public function __construct(
        DirectoryList $dirList
    ) {
        $this->dirList = $dirList;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('amasty-mftf:hyva:waiting-update');
        parent::configure();
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        if (!is_dir($this->dirList->getRoot() . DIRECTORY_SEPARATOR . self::MFTF_DIR)) {
            $output->writeln('<info>Sorry, "magento2-functional-testing-framework" is not installed... </info>');

            return Cli::RETURN_FAILURE;
        }

        $originalWaits = file_get_contents(
            $this->dirList->getRoot() . DIRECTORY_SEPARATOR . self::MFTF_DIR . DIRECTORY_SEPARATOR .
            self::TIMEOUT_FILE_PATH
        );
        $newWaits = str_replace(self::OLD_WAIT_JS, self::NEW_WAIT_JS, $originalWaits);
        file_put_contents(
            $this->dirList->getRoot() . DIRECTORY_SEPARATOR . self::MFTF_DIR . DIRECTORY_SEPARATOR .
            self::TIMEOUT_FILE_PATH,
            $newWaits
        );

        $output->writeln('<info>Script is finished, waiting scripts are updated!".</info>');

        return Cli::RETURN_SUCCESS;
    }
}
