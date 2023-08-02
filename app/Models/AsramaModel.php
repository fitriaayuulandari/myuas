<?php

namespace App\Models;

use CodeIgniter\Model;

class AsramaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'asrama';
    protected $primaryKey       = 'kdasrama';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['kdasrama', 'namaasrama', 'noasrama','password'];

    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];
    
    protected function hashPassword(array $data)
    {
        if (! isset($data['data']['password'])) {
            return $data;
        }

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }

}
