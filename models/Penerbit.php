<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penerbit".
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property double $lat
 * @property double $lng
 */
class Penerbit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penerbit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alamat', 'lat', 'lng'], 'required'],
            [['lat', 'lng'], 'number'],
            [['nama', 'alamat'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'lat' => 'Lat',
            'lng' => 'Lng',
        ];
    }

     public static function getCount()
    {
        return self::find()->count();
    }
    
}
