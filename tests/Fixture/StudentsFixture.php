<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
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
                'id' => 1,
                'rollno' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'MothersName' => 'Lorem ipsum dolor sit amet',
                'class' => 'Lor',
                'year' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
