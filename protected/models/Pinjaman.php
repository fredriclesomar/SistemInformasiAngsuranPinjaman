<?php

/**
 * This is the model class for table "pinjaman".
 *
 * The followings are the available columns in table 'pinjaman':
 * @property integer $id
 * @property integer $anggota_id
 * @property integer $jenis_pinjaman_id
 * @property integer $besar_pinjaman
 * @property integer $diangsur_kali
 * @property string $tanggal_jatuh_tempo
 * @property integer $pokok_dibayar
 * @property string $tanggal
 *
 * The followings are the available model relations:
 * @property Angsuran[] $angsurans
 * @property Anggota $anggota
 * @property JenisPinjaman $jenisPinjaman
 */
class Pinjaman extends CActiveRecord
{
	public $bunga;
	public $besar_angsuran;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pinjaman';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('anggota_id, jenis_pinjaman_id, besar_pinjaman, diangsur_kali, tanggal_jatuh_tempo, pokok_dibayar, tanggal', 'required'),
			array('anggota_id, jenis_pinjaman_id, besar_pinjaman, diangsur_kali, pokok_dibayar', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, anggota_id, jenis_pinjaman_id, besar_pinjaman, diangsur_kali, tanggal_jatuh_tempo, pokok_dibayar, tanggal', 'safe', 'on'=>'search'),
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
			'angsurans' => array(self::HAS_MANY, 'Angsuran', 'pinjaman_id'),
			'anggota' => array(self::BELONGS_TO, 'Anggota', 'anggota_id'),
			'jenisPinjaman' => array(self::BELONGS_TO, 'JenisPinjaman', 'jenis_pinjaman_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'anggota_id' => 'Anggota',
			'jenis_pinjaman_id' => 'Jenis Pinjaman',
			'besar_pinjaman' => 'Besar Pinjaman',
			'diangsur_kali' => 'Diangsur Kali',
			'tanggal_jatuh_tempo' => 'Tanggal Jatuh Tempo',
			'pokok_dibayar' => 'Pokok Dibayar',
			'tanggal' => 'Tanggal',
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
		$criteria->compare('anggota_id',$this->anggota_id);
		$criteria->compare('jenis_pinjaman_id',$this->jenis_pinjaman_id);
		$criteria->compare('besar_pinjaman',$this->besar_pinjaman);
		$criteria->compare('diangsur_kali',$this->diangsur_kali);
		$criteria->compare('tanggal_jatuh_tempo',$this->tanggal_jatuh_tempo,true);
		$criteria->compare('pokok_dibayar',$this->pokok_dibayar);
		$criteria->compare('tanggal',$this->tanggal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pinjaman the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
