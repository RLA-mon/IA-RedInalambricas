<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id_usuarios
 * @property string $usuarios_us
 * @property string $password_us
 * @property string $nombre
 * @property string $apellido
 */
class Usuario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'usuarios_us' => true,
        'password_us' => true,
        'nombre' => true,
        'apellido' => true,
    ];
}
