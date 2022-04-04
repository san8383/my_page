<?php
/*
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
 */
class DateCalculator
{
	private $age;
	private $birthday;
	private $month;

	public function __construct($input_date)
	{
		$this -> birthday = strtotime($input_date);
	}
	
	private function calcAge() //Вычисляем возраст
	{
		if ((date("n", $this -> birthday) >= getdate()['mon']) && ( date("j", $this -> birthday) >= getdate()['wday'])) {
			$this -> age = getdate()['year'] - date("Y", $this -> birthday) - 1; //Если день рождения еще не наступил в текущем году, то -1 год к разнице в годах
		} else {
			$this -> age = getdate()['year'] - date("Y", $this -> birthday);
		}
	}
	public function getAge()
	{
		$this -> calcAge();
		return $this -> age;
	}
	public function getMonth($lang='en',$switch=FALSE)
	{
		if ($lang == 'en') {
			$this -> month = mb_strtolower(date("F", $this -> birthday));
		} elseif ($lang == 'ru') {
			if (!boolval($switch)) { /*При отключенных ошибках сервера может принять даже строку без кавычек как TRUE*/
				$arr = ['0','январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь'];	
			} else { //При переключателе swith=TRUE (или любом не пустом, не нулевом ('0',"0") и не равным []) даем склоненные месяцы
				$arr = ['0','января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря'];
			}
			$this -> month = $arr[date("n", $this -> birthday)]; //передаем русское название месяца в переменную согласно номеру месяца
		} else {
			$this -> month = "Язык может быть установлен 'ru' или 'en'";//исключаем кривой ввод языка
		}
		return $this -> month;
	}
	public function getDay()
	{
		return date("j", $this -> birthday);
	}
	public function getYear()
	{
		return date("Y", $this -> birthday);
	}
}
/*
$date = new dateCalculator('1983-04-07');
echo $date -> getAge();
echo $date -> getMonth('ru');
*/

