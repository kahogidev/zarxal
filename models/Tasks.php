<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property string $created_at
 * @property string|null $updated_at
 * @property string $begin_at
 * @property string $ended_at
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

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
//            BlameableBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'begin_at', 'ended_at', 'task_name'], 'required'],
            [['created_at', 'updated_at', 'begin_at', 'ended_at'], 'safe'],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'begin_at' => 'Begin At',
            'ended_at' => 'Ended At',
            'employee_id' => 'Employee ID',
            'task_name' => 'Task Name',
            'status' => 'Status',
        ];
    }

}
