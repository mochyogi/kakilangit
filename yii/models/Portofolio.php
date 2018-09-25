<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portofolio".
 *
 * @property int $id_portofolio
 * @property string $title
 * @property string $deskripsi
 * @property string $gambar
 */
class Portofolio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file_gambar;

    public static function tableName()
    {
        return 'portofolio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deskripsi'], 'string'],
            [['title', 'tipe'], 'string', 'max' => 50],
            ['gambar', 'file', 'extensions' => ['png', 'jpg', 'gif'], 'maxSize' => 1024*1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_portofolio' => 'Id Portofolio',
            'title' => 'Title',
            'tipe' => 'Tipe',
            'deskripsi' => 'Deskripsi',
            'gambar' => 'Gambar',
        ];
    }
}
