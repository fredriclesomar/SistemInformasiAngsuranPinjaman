<?php

/**
 * This is the model class for table "anggota".
 *
 * The followings are the available columns in table 'anggota':
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property integer $agama_id
 * @property integer $pekerjaan_id
 * @property integer $penghasilan_perbulan
 *
 * The followings are the available model relations:
 * @property Pekerjaan $pekerjaan
 */
class Anggota extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'anggota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, alamat, jenis_kelamin, tanggal_lahir, agama_id, pekerjaan_id, penghasilan_perbulan', 'required'),
			array('agama_id, pekerjaan_id, penghasilan_perbulan', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>60),
			array('alamat', 'length', 'max'=>75),
			array('jenis_kelamin', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, alamat, jenis_kelamin, tanggal_lahir, agama_id, pekerjaan_id, penghasilan_perbulan', 'safe', 'on'=>'search'),
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
			'pekerjaan' => array(self::BELONGS_TO, 'Pekerjaan', 'pekerjaan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'jenis_kelamin' => 'Jenis Kelamin',
			'tanggal_lahir' => 'Tanggal Lahir',
			'agama_id' => 'Agama',
			'pekerjaan_id' => 'Pekerjaan',
			'penghasilan_perbulan' => 'Penghasilan Perbulan',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('agama_id',$this->agama_id);
		$criteria->compare('pekerjaan_id',$this->pekerjaan_id);
		$criteria->compare('penghasilan_perbulan',$this->penghasilan_perbulan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Anggota the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
