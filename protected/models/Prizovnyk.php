<?php

/**
 * This is the model class for table "prizovnyk".
 *
 * The followings are the available columns in table 'prizovnyk':
 * @property integer $id_prizovnyk
 * @property string $name
 * @property string $address
 * @property string $birthday
 * @property string $education
 */

class Prizovnyk extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Prizovnyk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'prizovnyk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, address, birthday, education, foto', 'required'),
			array('name, address, education', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_prizovnyk, name, address, birthday, education', 'safe', 'on'=>'search'),
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

        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_prizovnyk' => 'Id Призовника',
			'name' => 'Ім\'я',
			'address' => 'Адреса',
			'birthday' => 'Дата народження',
			'education' => 'Освіта',
            'foto' => 'Фото',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_prizovnyk',$this->id_prizovnyk);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('education',$this->education,true);
        $criteria->compare('foto',$this->foto,true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    /**
    * Возвращаем массив id=>имя из _table
    * @return array
    */
    public static function all(){
        $all = CHtml::listData(self::model()->findAll(),'id_prizovnyk','name');
        return $all;
    }

    //які ще не придатні та не воєннозобов'язані
    public static function allV(){
        //подключаемся
        $_conn = Yii::app()->db;
        $sql = "SELECT p.id_prizovnyk, p.name FROM prizovnyk p
                WHERE p.id_prizovnyk NOT IN (SELECT f.id_prizovnyk FROM fund f)
                AND p.id_prizovnyk NOT IN (SELECT v.id_prizovnyk FROM vzabovyazanyj v)
               ";

        $query = $_conn->createCommand($sql);
        $res = $query->queryAll();

        /*echo '<pre>';
        print_r($res);
        echo '</pre>';
        */
        $all = CHtml::listData($res,'id_prizovnyk','name');
        return $all;
    }
}