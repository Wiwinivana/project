<?php

namespace app\models;

use Yii;
use yii\Helpers\ArrayHelper;
use app\models\User;


/**
 * This is the model class for table "peminjaman".
 *
 * @property integer $id
 * @property integer $id_buku
 * @property integer $id_user
 * @property string $waktu_dipinjam
 * @property string $waktu_pengembalian
 *
 * @property User $idUser
 * @property Buku $idBuku
 */
class Peminjaman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peminjaman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['waktu_dipinjam', 'waktu_pengembalian'], 'required'],
            [['waktu_dipinjam', 'waktu_pengembalian','id_buku','id_user'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_buku' => 'Buku',
            'id_user' => 'User',
            'waktu_dipinjam' => 'Waktu Dipinjam',
            'waktu_pengembalian' => 'Waktu Pengembalian',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(Member::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBuku()
    {
        return $this->hasOne(Buku::className(), ['id' => 'id_buku']);
    }
    public function getRelationField($relation, $field)
    {
        if (!empty($this->$relation->$field)){
            return $this->$relation->$field;
        }else{
            return null;
        }
    }

    public static function getGrafikPerBuku()
    {
        $chart = null;

        foreach(Buku::find()->all() as $data)
        {
            $chart .= '{"label":"'.$data->nama.'","value":"'.$data->getCountGrafikBuku().'"},';
        }
        return $chart;
    }

    public function beforeSave($insert)
    {
        if ($insert) {
            $this->id_user = Yii::$app->user->identity->id;
        }

        return true;
    }
}
