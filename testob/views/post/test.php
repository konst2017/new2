		

<?php

/* @var $this yii\web\View */


use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;

use yii\data\Pagination;
use app\models\Region;
use app\models\City;
use app\controllers\CategoryController;
use yii\web\UploadedFile;
AppAsset::register($this);
ltAppAsset::register($this);$this->title = 'My Yii Application';
?>	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 


 <div class="form-sub-title-type-2 text-dark mr-bottom-5">Форма отправки обращения</div>
                                <div class="post-content text-black pd-bottom-15">
                                    Поля, отмеченные *, обязательны для заполнения
                                </div>
								<br>

<?php

//debug($model);
?>

 <?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','id' => 'testForm']]) ?>
<?= $form->field($model, 'name')?>
<?= $form->field($model, 'fam')?>
<?= $form->field($model, 'oth')?>
<?= $form->field($model, 'tem')?>


<?= $form->field($model, 'sohpol')->dropDownList(['Выбирете статус' => 'Выберите статус...',рабочий => 'рабочий', инженер => 'инженер', начальник => 'начальник'])?>


Вариант получения ответа
<br>
 <input type="radio" name="chetyre" id="chetyre2"/>Почтовое отправление
<input type="radio" name="chetyre" id="chetyre3"/>Электронная почта

<div class="Green1">


 <?=  $form->field($model,'stran')->dropDownList(
    ArrayHelper::map(
     \app\models\Region::find()->all(), 
     'id','naim' 
    ), 
    [ 
     'prompt' => Yii::t('app','Выберите статус...'), 
     'onchange'=>' 
     $.get("'.Yii::$app->urlManager->createUrl('post/dropdown?id=').'"+$(this).val(), function(data) { 
     $("select#subcat").html(data); 
     })' 
    ] 
) 
 ?>   
<?=$form->field($model, 'region', ['inputOptions'=>['id'=>'subcat',]])->dropDownList(['Выбирете статус' => 'Выберите статус...']) ?>
<?= $form->field($model, 'index')->textInput(['value' => нет])?>


<?= $form->field($model, 'tipnas')->dropDownList(['Выбирете статус' => 'Выберите статус...',Город => 'Город', Посёлок_городского_типа => 'Посёлок городского типа', Село => 'Село'])?>
<?= $form->field($model, 'naspunct')->textInput(['value' => нет])?>
<?= $form->field($model, 'raion')->textInput(['value' => нет])?>
<?= $form->field($model, 'tipul')->dropDownList(['Выбирете статус' => 'Выберите статус...',Улица => 'Улица', Переулок => 'Переулок'])?>


<?= $form->field($model, 'naimul')->textInput(['value' => нет])?>

<?= $form->field($model, 'dom')->textInput(['value' => нет])?>
<?= $form->field($model, 'kor')->textInput(['value' => нет])?>
<?= $form->field($model, 'kwar')->textInput(['value' => нет])?>

</div>
<br>
 
<div class="Green2">
<?= $form->field($model, 'email')->input('email')->textInput(['value' => нет ])?>
</div>


 <?= $form->field($model, 'text')->textarea(['value' =>Текст_обращения_неболее_2000_символов , 'rows' => 8, 'maxlength'=> 2000])?>
 <p>В целях объективного и всестороннего рассмотрения Вашего обращения в установленные сроки НЕОБХОДИМО в тексте обращения указывать адрес описанного Вами места действия, факта или события, а также МОЖНО указать телефон для возможного уточнения содержания Вашего обращения</p>
  
  <?= $form->field($model, 'file')->fileInput() ?> <br>
  <p>Вы можете приложить дополнительные документы или материалы в электронной форме, более полно раскрывающие суть Вашего обращения. Размер файла вложения не может превышать 5 Мб. Для вложений допустимы следующие форматы файлов: docx, doc, xls, xlsx, ppt, pptx, rtf, txt, pdf, jpeg, jpg, bmp, png, tiff, tif, odt, ods, odp. </p>
 
 
 <p>Ответственное лицо: ЗАЙЦЕВ СЕРГЕЙ АЛЕКСЕЕВИЧ — начальник Отдела по работе с обращениями граждан. Справочный телефон: (495) 606-15-20 — отдел по работе с обращениями граждан. Адрес: 127994, ГСП-4, Г. МОСКВА, УЛ. ИЛЬИНКА, Д. 21</P>
 <input type="checkbox" id="askAddress3">
 С порядком приема и рассмотрения обращений ознакомлен(а) 
 
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success','id' => 'name','disabled' => 'disabled'])?>

<p></p>





<?php //echo $form->field($model, 'text')->textarea(['rows' => 5])?>

 
<?php ActiveForm::end() ?>
 <h1> <?= Html::encode($target) ?></h1>

<script type="text/javascript"> 
 
    $('#askAddress3').on('change', function() { 
 
    if ($('#askAddress3').is(":checked")) { 
 document.getElementById("name").disabled = false;
     
 
    } else if ($('#askAddress3').is(":not(:checked)")) { 
 document.getElementById("name").disabled = true;
    
 
    } 
 
    }); 
 
</script>

		
									
														
														
													
						
			
		
		

	
 
