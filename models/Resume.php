<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "resumes".
 *
 * @property int $id
 * @property string $name
 * @property string $birthday
 * @property int $experience_years
 * @property null|UploadedFile $resume_path
 * @property string|null $comment
 * @property string|null $created_at
 *
 * @property Framework[] $frameworks
 */
class Resume extends ActiveRecord
{
//    public $resume_path;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resumes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'birthday'], 'required'],
            [['created_at'], 'safe'],
            ['birthday', 'date'],
            [['experience_years'], 'integer'],
            [['comment'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['resume_path'], 'file', 'skipOnEmpty' => false, 'extensions' => 'doc, docx, pdf, txt'],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_VALIDATE => ['birthday'],
                ],
                'value' => \Yii::$app->formatter->asDate($this->birthday,'Y-m-d'),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'birthday' => 'Birthday',
            'experience_years' => 'Experience Years',
            'resume_path' => 'Resume Path',
            'comment' => 'Comment',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Frameworks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFrameworks()
    {
        return $this->hasMany(Framework::class, ['id' => 'framework_id'])
            ->viaTable('framework_resume', ['resume_id' => 'id']);
    }

//    public function upload()
//    {
//        if ($this->validate()) {
//            $this->resume_path->saveAs('uploads/' . $this->resume_path->baseName . '.' . $this->resume_path->extension);
//            return true;
//        } else {
//            return false;
//        }
//    }
}
