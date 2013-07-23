<?php

/**
 * This is the model class for table "ygs_types".
 *
 * The followings are the available columns in table 'ygs_types':
 * @property integer $t_id
 * @property string $t_name
 */
class Types extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Types the static model class
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
		return 'ygs_types';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('t_id', 'required'),
			array('t_id', 'numerical', 'integerOnly'=>true),
			array('t_name', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('t_id, t_name', 'safe', 'on'=>'search'),
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
			'ygs_games' => array(self::MANY_MANY, 'YgsGames', 'ygs_games_types(gt_game_id, gt_type_id)'),
                        'tgame'=>array(self::HAS_MANY, 'Games', 't_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			't_id' => 'ID жанра',
			't_name' => 'Жанр',
		);
	}
        
        public function safeAttributes() 
        {
                return array('t_id', 't_name');
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

		$criteria->compare('t_id',$this->t_id);

		$criteria->compare('t_name',$this->t_name,true);

		return new CActiveDataProvider('Types', array(
			'criteria'=>$criteria,
		));
	}
}