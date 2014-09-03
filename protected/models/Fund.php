<?php

/**
 * This is the model class for table "fund".
 *
 * The followings are the available columns in table 'fund':
 * @property integer $id_fund
 * @property integer $id_prizovnyk
 * @property string $dateUnfitness
 * @property string $why
 */
class Fund extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Fund the static model class
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
		return 'fund';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prizovnyk, dateUnfitness, why', 'required'),
			array('id_prizovnyk', 'numerical', 'integerOnly'=>true),
			array('why', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_fund, id_prizovnyk, dateUnfitness, why', 'safe', 'on'=>'search'),
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
            )
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_fund' => 'Id Непридатного',
			'id_prizovnyk' => 'Призовник',
			'dateUnfitness' => 'Дата непридатності',
			'why' => 'Причина',
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

		$criteria->compare('id_fund',$this->id_fund);
		$criteria->compare('id_prizovnyk',$this->id_prizovnyk);
		$criteria->compare('dateUnfitness',$this->dateUnfitness,true);
		$criteria->compare('why',$this->why,true);

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