<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "steps".
 *
 * @property integer $step_id
 * @property string $step_header
 * @property string $video_url
 * @property string $description
 */
class Steps extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'steps';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['step_header', 'video_url', 'description'], 'required'],
            [['video_url', 'description'], 'string'],
            [['step_header'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'step_id' => 'Step ID',
            'step_header' => 'Step Header',
            'video_url' => 'Video Url',
            'description' => 'Description',
        ];
    }

    public function getData()
    {
      $query = Steps::find()->orderBy('step_id')->all();
      return $query ;
    }
}
