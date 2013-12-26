<?php   
class Item{
	//类属性
	public $id;					//id
	public $gatherType;		//jiazaishibie
	public $gameType;		//gameType
   	public $name; 		//name
	public $cp;				//company
   	public $price;			//price
   	public $capacity;		//capacity
	public $title;			//title
	public $content;		//content
	public $star;				//star
	public $downloadURL;	//download url
	public $iconurl;		//iconurl
	public $imgurl1;
	public $imgurl2;
	
	//类方法
	//显示游戏内容
	public function echoall()
	{
		echo "游戏名称：".$this->name;
		echo "调用类型：".$this->gatherType;
		echo "游戏类型：".$this->gameType;
		echo "游戏名称：".$this->name;
		echo "开发商：".$this->cp;
		echo "价格：".$this->price;
		echo "容量：".$this->capacity;
		echo "简介：".$this->title;
		echo "介绍：".$this->content;
		echo "星级：".$this->star;
		echo"<br>";
	}
}
?> 