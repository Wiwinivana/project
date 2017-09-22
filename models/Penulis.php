<?php

namespace app\models;

use Yii;
use yii\Helpers\ArrayHelper;
use app\models\Buku;


/**
 * This is the model class for table "penulis".
 *
 * @property int $id
 * @property string $nama
 * @property int $id_jenis_kelamin
 * @property string $alamat
 * @property string $lat
 * @property string $lng
 * @property string $gambar
 */
class Penulis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penulis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'id_jenis_kelamin', 'lat', 'lng', 'gambar'], 'required'],
            [['id_jenis_kelamin'], 'integer'],
            [['alamat'], 'string'],
            [['nama'], 'string', 'max' => 255],
            [['lat', 'lng'], 'string', 'max' => 20],
            [['gambar'], 'string', 'max' => 50],
            [['id_jenis_kelamin'], 'exist', 'skipOnError' => true, 'targetClass' => JenisKelamin::className(), 'targetAttribute' => ['id_jenis_kelamin' => 'id']],
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
            'id_jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'gambar' => 'Gambar',
        ];
    }
     public function getJenisKelamin()
    {
        return $this->hasOne(JenisKelamin::className(), ['id' => 'id_jenis_kelamin']);
    }
    public static function getList()
    {
        return ArrayHelper::map(Penulis::find()->all(),'id','nama');
    }
     public static function getCount()
    {
        return self::find()->count();
    }
    public function getCountGrafik()
    {
        return Buku::find()
        ->andWhere(['id_penulis' => $this->id])
        ->Count();
    }
}
