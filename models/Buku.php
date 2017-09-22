<?php

namespace app\models;

use Yii;
use yii\Helpers\ArrayHelper;



/**
 * This is the model class for table "buku".
 *
 * @property int $id
 * @property string $nama
 * @property int $id_jenis
 * @property string $cover
 * @property int $id_penulis
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_jenis', 'id_penulis'], 'integer'], 
            [['file'],'file'],
            [['cover', 'id_penulis'], 'required'],
            [['nama', 'cover'], 'string', 'max' => 255],
            [['id_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => Jenis::className(), 'targetAttribute' => ['id_jenis' => 'id']],
            [['id_penulis'], 'exist', 'skipOnError' => true, 'targetClass' => Penulis::className(), 'targetAttribute' => ['id_penulis' => 'id']],
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
            'id_jenis' => 'Jenis',
            'file' => 'Cover',
            'id_penulis' => 'Penulis',
        ];
    }
    public function getJenis()
    {
        return $this->hasOne(Jenis::className(), ['id' => 'id_jenis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenulis()
    {
        return $this->hasOne(Penulis::className(), ['id' => 'id_penulis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    //hasmany  return array
    public function getPeminjamen()
    {
        return $this->hasMany(Peminjaman::className(), ['id_buku' => 'id']);
    }

    //cara pertama bikin fungsi getRelationField
    public function getRelationField($relation, $field)
    {
        if (!empty($this->$relation->$field)){
            return $this->$relation->$field;
        }else{
            return null;
        }
    }

    public static function getList()
    {
        return ArrayHelper::map(Buku::find()->all(),'id','nama');
    }

    public static function getCount()
    {
        return self::find()->count();
    }
    public static function getGrafikPerPenulis()
    {
        $chart = null;

        foreach(Penulis::find()->all() as $data)
        {
            $chart .= '{"label":"'.$data->nama.'","value":"'.$data->getCountGrafik().'"},';
        }
        return $chart;
    }
    public function getCountGrafikBuku()
    {
        return Peminjaman::find()
        ->andWhere(['id_buku' => $this->id])
        ->count();
    }
}


