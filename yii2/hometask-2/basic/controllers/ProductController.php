<?php

// index.php?r=product
namespace app\controllers;

use app\models\Product;
use yii\web\Controller;

class ProductController extends Controller {
	// отключение использование Layout
	// public $layout = false;

	public function actionIndex() {

        // Как мы работаем в контроллерах с моделями
	    // $product = Product::findOne(1);
        // return $this->render('index', ['product' => $product]);

        // Удаление записи с которой работаем
        // $product->delete();
        // либо
        // Product::deleteAll(['id' => 15]); Удаление по условию id=15

//        $product = Product::findOne(1);
        // INSERT нового значения в БД несмотря на то, что findOne нашел значение
//        $product = isNewRecord = true;
        // Сбрасываем ID чтобы оно было уникально
//        $product->id = null;
//        $product->price = 200;
//        $product->save();

        // Создание нового Active Record
//	    $product = new Product();
//        $product->name = 'торт Наполеон';
//        $product->price = 400;
//        $product->save();

	    //		$product = Product::findOne(1);
        //		var_dump($product->name);

		// Примеры запросов

		// Если используем в запросах не выборку, то применяем метод execute()
		// $res = \Yii::$app->db->createCommand("INSERT")->execute();

		// Если нужно сделать несколько запросов
		// $command = \Yii::$app->db->createCommand("SELECT * FROM product WHERE id = :id");
		// var_dump($command->bindValue(':id', 1)->queryOne());
		// var_dump($command->bindValue(':id', 2)->queryOne());

		// Можно написать 2-м параметром в createCommand
		// $res = \Yii::$app->db->createCommand("SELECT * FROM product WHERE id = :id", [':id'=>1])->queryAll();

		// $res = \Yii::$app->db->createCommand("SELECT name FROM product WHERE id = :id")
		// Привязываем параметр id=1
		// ->bindValue(':id', 1)
		// ->queryColumn();

		// Обращение к DB, получение ответа при выборке
		// $res = \Yii::$app->db->createCommand("SELECT * FROM product")->queryAll();
		// queryColumn();
		// queryScalar();
		// queryOne();


		return $this->render('index',
		['id'=>'1',
    	'category_id'=>'2',
    	'title'=>'Цифровой фотоаппарат FUJIFILM X-T1 Body Graphite Silver',
    	'photo'=>'https://www.onlinetrade.ru/img/items/b/fujifilm_x_t1_body_graphite_silver_1.jpg',
    	'short_description'=>'В камере X-T1 нашли себя все лучшие разработки компании, а также появился ряд революционных решений, превращающих фотосъемку в высокотехнологичный творческий процесс.',
    	'description'=>'<h3>Видоискатель</h3>
    	<p>Системная фотокамера Fujifilm X-T1 оснащена широкоугольным электронным OLED-видоискателем с самым большим в мире среди цифровых фотоаппаратов 0,77-кратным коэффициентом увеличения. Это позволяет фотографу уйти с головой в процесс фотосъемки и буквально погрузиться в разворачивающиеся в кадре события. Преимуществ добавляют разрешение дисплея в 2,36 млн. пикселей и диагональ угла обзора в 38 градусов. Но все же, главной отличительной особенностью высокоточного видоискателя является скорость его работы. Задержка составляет всего 0,005 секунды – для сравнения, это десятая часть времени, которое характеризует работу видоискателей существующих цифровых фотоаппаратов. Помимо всего этого, видоискатель Fujifilm X-T1 предлагает высокотехнологичный пользовательский интерфейс. Во-первых, на дисплее отображается вся необходимая фотографу информация о настройках камеры. Во-вторых, видоискатель имеет 4 различных режима работы, между которыми можно переключаться в зависимости от ситуации и целей съемки. Такого фотографу не предложит ни один оптический видоискатель. Режим «Full» предлагает пользователю высокий коэффициент увеличения для наиболее полного охвата фотографируемой сцены. Режим «Normal» обеспечивает оптимальный просмотр сцены и удобное расположение настроек. Режим «Dual» делит дисплей на несколько зон – обычный просмотр и ручной фокус. Обе зоны можно настраивать и регулировать одновременно. Режим «Vertical» идеален для съемки портретов, так как с изменением положения камеры настройки, транслируемые в видоискатель, автоматически поворачиваются.</p>

	<h3>Скорость</h3>
<p>Как и положено камере премиум-класса, Fujifilm X-T1 имеет впечатляющую скорость работы. Впечатляющую настолько, что бьет все мировые рекорды среди существующих цифровых фотоаппаратов с APS-C-матрицей и матрицей больших размеров. Благодаря технологии фазового распознавания съемочной зоны автофокус справляется со своей задачей всего за 0,08 секунды. Время включения камеры составляет всего полсекунды, а время срабатывания затвора равно и вовсе 0,05 секунды. Интервал между снимками составляет полсекунды, также можно снимать серии кадров со скоростью 8 снимков в секунду. Казалось бы, чем еще можно удивить фотографа? Компания Fujifilm припрятала специально для этого в рукаве еще один туз. Дело в том, что X-T1 является первой в мире фотокамерой, совместимой с картами памяти SDXC UHS-II. Это значит, что скорость записи данных серийной съемки в сравнении с обычными носителями увеличивается примерно в два раза.</p>

	<h3>Надежность</h3>
<p>Можно быть уверенным – системная фотокамера Fujifilm X-T1 не подведет своего обладателя в любой ситуации. Пыле- и брызгозащищенный корпус оберегает от загрязнений внутренние компоненты камеры. Также модель X-T1 не боится зимней съемки и прекрасно работает при минусовой температуре до -10 градусов. Наклонный ЖК-дисплей защищён прочнейшим закаленным стеклом.</p>

	<h3>Высококачественное изображение</h3>
<p>Основу фотокамеры Fujifilm X-T1 составили уже известная по модели X-E2 матрица CMOS X-Trans II и производительный процессор EXR II. Такой тандем позволил довести качество изображения до совершенства. Муар и цветовые аберрации сводятся к минимуму, детализация улучшена, нечеткость и размытие по краям кадра побеждены, цветопередача естественная и не искажается. На выходе пользователь получает снимок полноценно сопоставимый по качеству с фотографией, сделанной на полнокадровую зеркальную фотокамеру.</p>

	<h3>Классика дизайна</h3>
<p>Каждую фотокамеру компании Fujifilm можно назвать иконой стиля. Не уступает в этом и модель X-T1. Высокопрочный литой корпус, выполненный из магниевого сплава, великолепно сочетается с алюминиевыми дисками управления. С помощью семи дисков фотограф может полностью настроить свою камеру для съемки: установить скорость срабатывания затвора, экспозицию, чувствительность, а также выбрать режим съемки. Помимо дисков камера оборудована шестью настраиваемыми клавишами, команды которым пользователь может задать самостоятельно, исходя из своей манеры съемки. Все элементы камеры Fujifilm X-T1 удивительно сочетаются друг с другом, создавая идеальный фотоаппарат для идеальной работы.</p>',
    	'price'=>'64 990 руб.']);
	}
}