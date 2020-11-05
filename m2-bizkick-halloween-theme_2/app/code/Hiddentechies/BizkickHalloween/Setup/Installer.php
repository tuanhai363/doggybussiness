<?php

/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Hiddentechies\BizkickHalloween\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface {

    /**
     * @var \Magento\CmsSampleData\Model\Page
     */
    private $page;

    /**
     * @var \Magento\CmsSampleData\Model\Block
     */
    private $block;

    /**
     * @param \Hiddentechies\BizkickHalloween\Model\Page $page
     * @param \Hiddentechies\BizkickHalloween\Model\Block $block
     */
    public function __construct(
    \Hiddentechies\BizkickHalloween\Model\Page $page, 
            \Hiddentechies\BizkickHalloween\Model\Block $block
    ) {
        $this->page = $page;
        $this->block = $block;
    }

    /**
     * {@inheritdoc}
     */
    public function install() {

        //$this->page->install(['Hiddentechies_BizkickHalloween::fixtures/pages/pages.csv']);
        $this->page->install(
                [

                    'Hiddentechies_BizkickHalloween::DemoPages/pages.csv',
                ]
        );
        $this->block->install(
                [

                    'Hiddentechies_BizkickHalloween::DemoBlocks/blocks.csv',
                ]
        );
    }

}
