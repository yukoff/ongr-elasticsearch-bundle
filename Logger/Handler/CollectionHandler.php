<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\ElasticsearchBundle\Logger\Handler;

use Monolog\Handler\AbstractProcessingHandler;

/**
 * Handler that saves all records to him self.
 */
class CollectionHandler extends AbstractProcessingHandler
{
    /**
     * @var array
     */
    private $records = [];

    /**
     * {@inheritdoc}
     */
    protected function write(array $record)
    {
        $this->records[] = $record;
    }

    /**
     * @return array
     */
    public function getRecords()
    {
        return $this->records;
    }
}
