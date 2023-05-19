<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property string $created_date
 * @property string|null $updated_date
 * @property string $begin_date
 * @property string $ended_date
 * @property int|null $employee_id
 * @property string $task_name
 * @property int|null $status
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_date', 'begin_date', 'ended_date', 'task_name'], 'required'],
            [['created_date', 'updated_date', 'begin_date', 'ended_date'], 'safe'],
            [['employee_id', 'status'], 'integer'],
            [['task_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'begin_date' => 'Begin Date',
            'ended_date' => 'Ended Date',
            'employee_id' => 'Employee ID',
            'task_name' => 'Task Name',
            'status' => 'Status',
        ];
    }
}
