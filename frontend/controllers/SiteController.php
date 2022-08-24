<?php

namespace frontend\controllers;

use common\models\StudyingBranchName;
use common\models\StudyingFieldName;
use common\models\StudyingUniversityName;
use common\models\User;
use common\models\UserCurrentEducation;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\helpers\ArrayHelper;
use yii\helpers\FileHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\UploadedFile;
use function Symfony\Component\String\u;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $educationView = '@app/views/_partial/_education';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @param $renderAjax
     * @return string|void
     */
    public function actionStepOne($renderAjax = false)
    {
        Yii::$app->view->title = 'Form Step One';
        $user_id = Yii::$app->user->identity->id;
        $user = User::findOne(['id' => $user_id]);
        $user_education = UserCurrentEducation::findOne(['user_id' => $user_id]);
        if (!$user_education){
            $user_education = new UserCurrentEducation();
        }
        $user_education->scenario = $user_education::STEP_ONE;

        $card_title = 'Your Current Education';
        $form_information = 'Please give same detail as in your college.';
        $step = 1;

        $content = [
            'view_name' => 'step-one',
            'user' =>   $user,
            'user_education' => $user_education,
            'card_title' => $card_title,
            'form_information' => $form_information,
            'step' => $step,
        ];
        if ($renderAjax){
            return $this->renderAjax($this->educationView, $content);
        }
        if (Yii::$app->request->isPost){
            if ($user_education->load(Yii::$app->request->post())){
                $user_education->user_id = $user_id;
                if ($user_education->save()) {
                    return $this->actionStepTwo(true);
                }
            }
        }else{
            return $this->render($this->educationView,$content);
        }
    }

    /**
     * @param $renderAjax
     * @return string|void|null
     */
    public function actionStepTwo($renderAjax = false){
        Yii::$app->view->title = 'Form Step Two';
        $user_id = Yii::$app->user->identity->id;
        $user_education = UserCurrentEducation::findOne(['user_id' => $user_id]);
        $card_title = 'Education Type & University Name';
        $form_information = 'Please give same detail as in your college.';
        $step = 2;
        $content = [
            'view_name' => 'step-two',
            'user' => null,
            'user_education' => $user_education,
            'card_title' => $card_title,
            'form_information' => $form_information,
            'step' => $step,
        ];
        $user_education->scenario = $user_education::STEP_TWO;
        if ($renderAjax) {
            return  $this->renderAjax($this->educationView,$content);
        }
        if (Yii::$app->request->isPost){
            if ($user_education->load(Yii::$app->request->post())) {
                if ($user_education->save()){
                    return $this->actionStepThree(true);
                }else{
                    echo '<pre>';
                    print_r($user_education);
                    die();
                }
            }
        }else{
            return $this->render($this->educationView,$content);
        }
    }

    /***
     * @param $renderAjax
     * @return string|void|null
     */
    public function actionStepThree($renderAjax = false)
    {
        Yii::$app->view->title = 'From Step Three';
        $user_id = Yii::$app->user->identity->id;
        $user_education = UserCurrentEducation::findOne(['user_id' => $user_id]);
        $card_title = 'Current Field & Branch';
        $form_information = 'Please give same detail as in your college.';
        $step = 3;
        $content = [
            'view_name' => 'step-three',
            'user' => null,
            'user_education' => $user_education,
            'card_title' => $card_title,
            'form_information' => $form_information,
            'step' => $step,
        ];

        $user_education->scenario = $user_education::STEP_THREE;
        if ($renderAjax) {
            return $this->renderAjax($this->educationView,$content);
        }
        if (Yii::$app->request->isPost) {
            if ($user_education->load(Yii::$app->request->post())) {
                if ($user_education->save()) {
                    return $this->actionStepFour(true);
                }else{
                    echo '<pre>';
                    print_r($user_education);
                    die();
                }
            }
        }else{
            return $this->render($this->educationView,$content);
        }
    }

    /**
     * @param $renderAjax
     * @return string|void|null
     */
    public function actionStepFour($renderAjax = false)
    {
        Yii::$app->view->title = 'From Step Four';
        $user_id = Yii::$app->user->identity->id;
        $user_education = UserCurrentEducation::findOne(['user_id' => $user_id]);
        $card_title = 'Current Field & Branch';
        $form_information = 'Please give same detail as in your college.';
        $step = 4;
        $content = [
            'view_name' => 'step-four',
            'user' => null,
            'user_education' => $user_education,
            'card_title' => $card_title,
            'form_information' => $form_information,
            'step' => $step,
        ];
        $user_education->scenario = $user_education::STEP_FOUR;
        if ($renderAjax) {
            return $this->renderAjax($this->educationView,$content);
        }
        if (Yii::$app->request->isPost) {
            if ($user_education->load(Yii::$app->request->post())) {
                $user_education->created_at = date('Y-m-d');
                if ($user_education->save()) {
                    return $this->actionVerifyDetail(true);
                }
            }
        } else {
            return $this->render($this->educationView, $content);
        }
    }

    /**
     * @param $renderAjax
     * @return string|null
     */
    public function actionVerifyDetail($renderAjax = false)
    {
        Yii::$app->view->title = 'View Details';
        $user_id = Yii::$app->user->identity->id;
        $user_education = UserCurrentEducation::findOne(['user_id' => $user_id]);
        $card_title = 'Verify Your Detail';
        $form_information = 'Please verify your details and press confirm';
        $step = 5;
        $content = [
            'view_name' => 'verify-detail',
            'user' => null,
            'user_education' => $user_education,
            'card_title' => $card_title,
            'form_information' => $form_information,
            'step' => $step
        ];
        if (!$user_education) {
            return $this->actionStepOne();
        }
        if ($renderAjax) {
            return $this->renderAjax($this->educationView, $content);
        }
        return $this->render($this->educationView, $content);
    }

    public function actionCurrentEducation()
    {
        $model = UserCurrentEducation::findOne(['user_id' => Yii::$app->user->identity->id]);
        return $this->render('current-education', [
            'model' => $model
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $user_current_education = UserCurrentEducation::findOne(['user_id' => Yii::$app->user->identity->id]);
            if ($user_current_education){
                return $this->goBack();
            }else{
              return $this->redirect(['step-one']);
            }
        }
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    /**
     * @return string|\yii\web\Response
     * @throws \yii\base\Exception
     */
    public function actionProfile()
    {
        $path = User::getPath();
        if (!is_dir($path)) {
            FileHelper::createDirectory($path,$mode= 777,$recursive = true);
        }

        $profile_image = null;
        $model = User::findOne(['id' => Yii::$app->user->id]);

        if ($model->profile_image) {
            $profile_image = $model->profile_image;
        }

        if ($model->load(Yii::$app->request->post())){
            $profile = UploadedFile::getInstance($model,'profile_image');

            if ($profile) {
                $model->profile_image = $model->getImageName($profile);
            }else{
                $model->profile_image = $profile_image;
            }

            if ($model->save()) {
                if ($profile) {
                    $profile->saveAs(User::getPath($model->profile_image));
                }
                Yii::$app->session->setFlash('success','Profile updated successfully!');
                return $this->redirect(['index']);
            }

        }
        return $this->render('profile',[
            'model' => $model
        ]);
    }

    /**
     * @return string
     */
    public function actionTest()
    {
        $user = User::findOne(['id' => Yii::$app->user->identity->id]);
        return $this->render('dev',[
            'user' => $user
        ]);
    }

    /**
     * @param $id
     * @return void
     */
    public function actionChildUniversity($id)
    {
            $countModel = StudyingUniversityName::find()->where(['type_id' => $id])->count();
            $model = StudyingUniversityName::find()->where(['type_id' => $id])->orderBy(['id' => SORT_ASC])->all();

        $data = [];
        if ($countModel > 0){
            foreach ($model as $key){
                $data[$key->id] = $key->university_name;
            }
            asort($data);
            echo "<option></option>";
            foreach ($data as $key=>$val){
                if(!empty($val)){
                    echo "<option value='".$key."'>".$val."</option>";
                }
            }
        }
        else{
            echo "<option></option>";
        }
    }
    public function actionChildBranchName($id)
    {
        $countModel = StudyingBranchName::find()->where(['field_id' => $id])->count();
        $model = StudyingBranchName::find()->where(['field_id' => $id])->orderBy(['id' => SORT_ASC])->all();

        $data = [];
        if ($countModel > 0){
            foreach ($model as $key){
                $data[$key->id] = $key->branch_name;
            }
            asort($data);
            echo "<option></option>";
            foreach ($data as $key=>$val){
                if(!empty($val)){
                    echo "<option value='".$key."'>".$val."</option>";
                }
            }
        }
        else{
            echo "<option></option>";
        }
    }
}
