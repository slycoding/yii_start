<?php

/**
 * This is the model class for table "ygs_games".
 *
 * The followings are the available columns in table 'ygs_games':
 * @property integer $g_id
 * @property integer $g_rate
 * @property string $g_name_url
 * @property string $g_main_type
 * @property integer $g_type
 * @property string $g_added
 * @property integer $g_size
 * @property string $g_name
 * @property string $g_medium_pic
 * @property string $g_small_pic
 * @property string $g_download_link
 * @property string $g_shortdescr
 * @property string $g_fulldescr
 * @property string $g_publish_date
 * @property integer $g_state
 */
class Games extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ygs_games';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('g_id, g_rate, g_name_url, g_type, g_added, g_size, g_name, g_medium_pic, g_small_pic, g_download_link, g_state', 'required'),
			array('g_id, g_rate, g_type, g_size, g_state', 'numerical', 'integerOnly'=>true),
			array('g_name_url, g_main_type, g_name, g_medium_pic, g_small_pic, g_download_link', 'length', 'max'=>255),
			array('g_shortdescr, g_fulldescr, g_publish_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('g_id, g_rate, g_name_url, g_main_type, g_type, g_added, g_size, g_name, g_medium_pic, g_small_pic, g_download_link, g_shortdescr, g_fulldescr, g_publish_date, g_state', 'safe', 'on'=>'search'),
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
			'ygs_types' => array(self::MANY_MANY, 'YgsTypes', 'ygs_games_types(gt_game_id, gt_type_id)'),
			'ygs_screenshots' => array(self::HAS_MANY, 'YgsScreenshots', 's_game_id'),
                        'gtype' => array(self::BELONGS_TO, 'Types', 'g_main_type'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'g_id' => 'G',
			'g_rate' => 'G Rate',
			'g_name_url' => 'G Name Url',
			'g_main_type' => 'G Main Type',
			'g_type' => 'G Type',
			'g_added' => 'G Added',
			'g_size' => 'G Size',
			'g_name' => 'G Name',
			'g_medium_pic' => 'G Medium Pic',
			'g_small_pic' => 'G Small Pic',
			'g_download_link' => 'G Download Link',
			'g_shortdescr' => 'G Shortdescr',
			'g_fulldescr' => 'G Fulldescr',
			'g_publish_date' => 'G Publish Date',
			'g_state' => 'G State',
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
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('g_id',$this->g_id);

		$criteria->compare('g_rate',$this->g_rate);

		$criteria->compare('g_name_url',$this->g_name_url,true);

		$criteria->compare('g_main_type',$this->g_main_type,true);

		$criteria->compare('g_type',$this->g_type);

		$criteria->compare('g_added',$this->g_added,true);

		$criteria->compare('g_size',$this->g_size);

		$criteria->compare('g_name',$this->g_name,true);

		$criteria->compare('g_medium_pic',$this->g_medium_pic,true);

		$criteria->compare('g_small_pic',$this->g_small_pic,true);

		$criteria->compare('g_download_link',$this->g_download_link,true);

		$criteria->compare('g_shortdescr',$this->g_shortdescr,true);

		$criteria->compare('g_fulldescr',$this->g_fulldescr,true);

		$criteria->compare('g_publish_date',$this->g_publish_date,true);

		$criteria->compare('g_state',$this->g_state);

		return new CActiveDataProvider('Games', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return Games the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}