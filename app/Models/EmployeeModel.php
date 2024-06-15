<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'employee_id'; 

  public function department()
    {
        return $this->belongsTo(DepartmentModel::class, 'department_id', 'department_id');
    }
  public function college()
    {
        // Assuming 'college_id' is the foreign key column in the EmployeeModel
        return $this->belongsTo(CollegeModel::class, 'college_id', 'id');
    }
    use HasFactory;
}
