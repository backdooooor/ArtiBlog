<?
 class Template extends Model {
//модель для работы с записями,получение записей,удаление,добавление,
    function Template()
    {
        parent::Model();
	 $CI = get_instance(); 
    }
    function doPost($title,$id_post,$text,$id_cat,$name_cat,$date,$sum){
        $code='<article>
            	<h2>'.$title.'</h2>
                '.$text.'
                <br>
                Дата '.$date.' &nbsp;&nbsp;  Категория:'.$name_cat.' &nbsp;  <a href="#" onclick="doPost('.$id_post.')">Комментарии('.$sum.')</a>
            </article> ';
            return $code;
    }
 }