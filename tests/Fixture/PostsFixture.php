<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PostsFixture
 */
class PostsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id' => 1,
                'Title' => 'Lorem ipsum dolor ',
                'Content' => 'Lorem ipsum dolor sit amet',
                'Date' => '2022-10-29',
            ],
        ];
        parent::init();
    }
}
