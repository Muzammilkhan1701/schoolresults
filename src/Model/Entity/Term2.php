<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Term2 Entity
 *
 * @property int $id
 * @property int $Student_id
 * @property string $English
 * @property string $Hindi
 * @property string $Marathi
 * @property string $Maths
 * @property string $EVS
 * @property int $total
 * @property string $percentage
 *
 * @property \App\Model\Entity\Student $student
 */
class Term2 extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'Student_id' => true,
        'English' => true,
        'Hindi' => true,
        'Marathi' => true,
        'Maths' => true,
        'EVS' => true,
        'total' => true,
        'percentage' => true,
        'student' => true,
    ];
}
