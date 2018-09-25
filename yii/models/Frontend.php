<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "front_end".
 *
 * @property int $id_front_end
 * @property string $headline
 * @property string $headline2
 * @property string $headline_service
 * @property string $tes
 */
class Frontend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'front_end';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['headline', 'headline2', 'headline_service', 'tes'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_front_end' => 'Id Front End',
            'headline' => 'Headline',
            'headline2' => 'Headline2',
            'headline_service' => 'Headline Service',
            'tes' => 'Tes',
        ];
    }
}
