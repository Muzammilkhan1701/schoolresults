<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FinalresultsFixture
 */
class FinalresultsFixture extends TestFixture
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
                'Student_id' => 1,
                'term1_total' => 1,
                'term2_total' => 1,
                'final_total' => 1,
                'final_percentage' => 1.5,
            ],
        ];
        parent::init();
    }
}
