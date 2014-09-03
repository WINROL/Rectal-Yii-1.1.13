<?php

/**
 * This is the model class for table "vzabovyazanyj".
 *
 * The followings are the available columns in table 'vzabovyazanyj':
 * @property integer $id_vzabovyazanyj
 * @property integer $id_prizovnyk
 * @property string $dateIn
 * @property string $dateOut
 * @property string $term
 * @property integer $id_troop
 * @property integer $id_unit
 */
class Vzabovyazanyj extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vzabovyazanyj the static model class
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
		return 'vzabovyazanyj';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prizovnyk, dateIn, dateOut, term, id_troop, id_unit', 'required'),
			array('id_prizovnyk, id_troop, id_unit', 'numerical', 'integerOnly'=>true),
			array('term', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_vzabovyazanyj, id_prizovnyk, dateIn, dateOut, term, id_troop, id_unit', 'safe', 'on'=>'search'),
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
            'p' => array(
                self::BELONGS_TO,
                'Prizovnyk',
                'id_prizovnyk',
            ),
            'unit' => array(
                self::BELONGS_TO,
                'Unit',
                'id_unit',
            ),
            'troop' => array(
                self::BELONGS_TO,
                'Troop',
                'id_troop',
            ),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_vzabovyazanyj' => 'Id Військовозабов\'язаного',
			'id_prizovnyk' => 'Призовник',
			'dateIn' => 'Дата початку служби',
			'dateOut' => 'Дата закінчення служби',
			'term' => 'Термін',
			'id_troop' => 'Військо',
			'id_unit' => 'Частина',
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

		$criteria->compare('id_vzabovyazanyj',$this->id_vzabovyazanyj);
		$criteria->compare('id_prizovnyk',$this->id_prizovnyk);
		$criteria->compare('dateIn',$this->dateIn,true);
		$criteria->compare('dateOut',$this->dateOut,true);
		$criteria->compare('term',$this->term,true);
		$criteria->compare('id_troop',$this->id_troop);
		$criteria->compare('id_unit',$this->id_unit);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    /**
    * Возвращаем массив id=>имя из _table
    * @return array
    */
    public static function all(){
        //return CHtml::listData(self::model()->findAll(),'id_user','name');
    }
}