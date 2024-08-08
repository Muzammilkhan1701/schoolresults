<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Term2Fixture
 */
class Term2Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'term2';
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
                'Student_id' => 1,
                'English' => 'Lorem ipsum dolor sit amet',
                'Hindi' => 'Lorem ipsum dolor sit amet',
                'Marathi' => 'Lorem ipsum dolor sit amet',
                'Maths' => 'Lorem ipsum dolor sit amet',
                'EVS' => 'Lorem ipsum dolor sit amet',
                'total' => 1,
                'percentage' => 1.5,
            ],
        ];
        parent::init();
    }
}
