<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Finalresult Entity
 *
 * @property int $id
 * @property int $Student_id
 * @property int $term1_total
 * @property int $term2_total
 * @property int $final_total
 * @property string $final_percentage
 *
 * @property \App\Model\Entity\Student $student
 */
class Finalresult extends Entity
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
        'term1_total' => true,
        'term2_total' => true,
        'final_total' => true,
        'final_percentage' => true,
        'student' => true,
    ];
}
