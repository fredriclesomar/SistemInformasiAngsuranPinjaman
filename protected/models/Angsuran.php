<?php

/**
 * This is the model class for table "angsuran".
 *
 * The followings are the available columns in table 'angsuran':
 * @property integer $id
 * @property integer $pinjaman_id
 * @property integer $anggota_id
 * @property integer $angsuran_ke
 * @property integer $besar_angsuran
 * @property string $tanggal_jatuh_tempo
 * @property string $tanggal_bayar
 * @property integer $status_bayar
 *
 * The followings are the available model relations:
 * @property Pinjaman $pinjaman
 * @property Anggota $anggota
 */
class Angsuran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'angsuran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pinjaman_id, anggota_id, angsuran_ke, besar_angsuran, tanggal_jatuh_tempo, tanggal_bayar', 'required'),
			array('pinjaman_id, anggota_id, angsuran_ke, besar_angsuran, status_bayar', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pinjaman_id, anggota_id, angsuran_ke, besar_angsuran, tanggal_jatuh_tempo, tanggal_bayar, status_bayar', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'pinjaman' => array(self::BELONGS_TO, 'Pinjaman', 'pinjaman_id'),
			'anggota' => array(self::BELONGS_TO, 'Anggota', 'anggota_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pinjaman_id' => 'Pinjaman',
			'anggota_id' => 'Anggota',
			'angsuran_ke' => 'Angsuran Ke',
			'besar_angsuran' => 'Besar Angsuran',
			'tanggal_jatuh_tempo' => 'Tanggal Jatuh Tempo',
			'tanggal_bayar' => 'Tanggal Bayar',
			'status_bayar' => 'Status Bayar',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('pinjaman_id',$this->pinjaman_id);
		$criteria->compare('anggota_id',$this->anggota_id);
		$criteria->compare('angsuran_ke',$this->angsuran_ke);
		$criteria->compare('besar_angsuran',$this->besar_angsuran);
		$criteria->compare('tanggal_jatuh_tempo',$this->tanggal_jatuh_tempo,true);
		$criteria->compare('tanggal_bayar',$this->tanggal_bayar,true);
		$criteria->compare('status_bayar',$this->status_bayar);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Angsuran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
