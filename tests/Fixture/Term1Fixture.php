<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Term1Fixture
 */
class Term1Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'term1';
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
                'English' => 1,
                'Hindi' => 1,
                'Marathi' => 1,
                'Maths' => 1,
                'EVS' => 1,
                'total' => 1,
                'percentage' => 1.5,
            ],
        ];
        parent::init();
    }
}
