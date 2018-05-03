<?php
/* Создаем класс Машина.
Свойства: 3, все обязательные. Бренд str, цвет str, нравится или нет bool */
class Car
{
    private $brand; //Бренд текстом
    private $color; //цвет текстом
    private $like; //нравится или нет

    // конструктор
    public function __construct($brand, $color, $like)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->like = $like;
    }

    // если нравится, узнать цвет
    public function whatILike()
    {
        if($this->like) {
            $color = $this->color;
            echo 'Мне нравится эта машина цвета:'. $color.'.';
        } else {
            echo "Мне не нравится эта машина.";
        }
    }
}

echo '<br>Машины:<br><pre>';

print_r($car1 = new Car('ВАЗ', 'слишком старая, чтобы определить', true));
print_r($car2 = new Car('BMW', 'красный', false));
print_r($car3 = new Car('Lexus', 'стальной', false));

echo '</pre>';

/* Создаем класс Телевизор.
Свойства: 3, оба обязательные. Бренд str, формат str, Цветной bool.
Константа USEFULNESS всегда ложь. */
class TV
{
    const USEFULNESS = false;
    private $brand;
    private $format; //формат текстом
    private $colorful; //цветной или нет bool

    // конструктор
    public function __construct($brand, $format, $colorful)
    {
       $this->brand = $brand;
        $this->format = $format;
        $this->colorful = $colorful;
    }

    // узнать,полезен ли телевизор
    public function showUsefulness()
    {
        echo $this::USEFULLNESS;
    }
}

echo '<br>Телевизеры:<br><pre>';

print_r($tv1 = new TV('Samsung', 'цифровой', true));
print_r($tv2 = new TV('Горизонт', 'аналоговый', false));
print_r($tv3 = new TV('-', 'аналоговый', false));

echo '</pre>';

/* Создаем класс Шариковая ручка.
Свойства: 2, оба обязательные. Бренд str, количество в наличии int.*/
class BallPointPen
{
    private $brand; //бренд текстом
    private $number; //количество в наличии int

    // конструктор:
    public function __construct($brand, $number)
    {
        $this->brand = $brand;
        $this->number = $number;
    }

    // узнать, сколько ручек этого бренда сейчас в наличии
    public function getNumberOfBallPointPens()
    {
        $brand = $this->brand;
        $number = $this->number;
        echo 'Ручек бренда '.$brand.' сейчас в наличии: '.$number.'.';
    }
}

echo '<br>Шариковые ручки:<br><pre>';

print_r($ballPointPen1 = new BallPointPen('Pilot', 3));
print_r($ballPointPen1 = new BallPointPen('Erick Crause', 568));
print_r($ballPointPen1 = new BallPointPen('Parker', 0));

echo '</pre>';

/* Создаем класс Утка.
Свойства: 2, оба обязательные. Имя str, возраст в месяцах int, вид str. */
class Duck
{
    private $alias; //имя текстом
    private $age; //возраст в месяцах
    private $spiecy = 'кряква'; //вид текстом

    // конструктор: нужно указать имя, возраст в месяцах и вид
    public function __construct($alias, $age, $spiecy)
    {
        $this->alias = $alias;
        $this->age = $age;
        $this->spiecy = $spiecy;
    }

    // узнать вид утки
    public function getSpiecy()
    {
        echo $this->spiecy;
    }

    // узнать имя утки
    public function getAlias()
    {
        echo $this->alias;
    }
}

echo '<br><br><pre>';

print_r($duck1 = new Duck('Funny', 3, 'морянка'));
print_r($duck1 = new Duck('Утёночка', 15, 'кряква'));
print_r($duck1 = new Duck('Утка', 3, 'патагонская хохлатая'));

echo '</pre>';

/* Создаем класс Товар.
Свойств: 5, все обязательные.
Категория str, подкатегория str, бренд str, цена в рублях int, размер партии int, осталось на складе int. */
class Product
{
    private $category; //категория текстом
    private $subcategory; //категория текстом
    private $brand; //бренд текстом
    private $price; //цена в рублях int
    private $stockSize; //Размер партии int
    private $leftInStock; //осталось на складе int

    // конструктор
    public function __construct($category, $subcategory, $brand, $price, $stockSize, $leftInStock)
    {
        $this->category = $category;
        $this->subcategory = $subcategory;
        $this->brand = $brand;
        $this->price = $price;
        $this->stockSize = $stockSize;
        $this->leftInStock = $leftInStock;
    }

    // вывести карточку товара
    public function printProduct()
    {
        $category = $this->category;
        $subcategory = $this->subcategory;
        $brand = $this->brand;
        $price = $this->price;
        $stockSize = $this->stockSize;
        $leftInStock = $this->leftInStock;

        echo $subcategory.' из категории ' . $category . ' бренда ' . $brand . ' стоит ' . $price . ' рублей. <br>';

        if ($leftInStock === NULL OR $leftInStock === 0) {
            echo "Товара нет на складе. Доступен предзаказ - обратитесь к нашему менеджеру! : )";
        } else {
            if ($leftInStock <= 0.3 * $stockSize) {
            echo '<strong>Товар заканчивается на складе!</strong>';
        } else {
            echo 'Товар на складе';
        }
        }
    }
}

echo '<br>Товары:<br><pre>';

print_r($product1 = new Product('Посуда', 'Пиала','Авторская', 456, 150, 54));
print_r($product2 = new Product('Посуда', 'Чашка', 'Русский фарфор', 55000, 14, 10));
print_r($product3 = new Product('Бытовая техника', 'Утюг', 'Phillips', 1500, 240, 0));

echo '</pre>';

?>