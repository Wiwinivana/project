<?php

namespace app\models;

use Yii;
use yii\Helpers\ArrayHelper;
use app\models\Peminjaman;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $nama
 * @property string $username
 * @property string $password
 * @property integer $role
 *
 * @property Peminjaman[] $peminjamen
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'username', 'password', 'role'], 'required'],
            [['role'], 'integer'],
            [['nama', 'username', 'password'], 'string', 'max' => 255],
            [['nama', 'username', 'password', 'authKey', 'accessToken', 'role'], 'required'],
            [['role'], 'integer'],
            [['nama', 'username', 'password', 'authKey', 'accessToken'], 'string', 'max' => 255],
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
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'role' => 'Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamen()
    {
        return $this->hasMany(Peminjaman::className(), ['id_user' => 'id']);
    }
    public static function getList()
    {
        return ArrayHelper::map(Member::find()->all(),'id','nama');
    }
    public static function getCount()
    {
        return self::find()->count();
    }
    public static function getPeminjaman()
    {
        $chart = null;

        foreach(Peminjaman::find()->all as $data)
        {
            $chart .='{"label":"'.$data->nama.'","value":"'.$data->getCount().'"},';
        }
        return $chart;
    }
}
