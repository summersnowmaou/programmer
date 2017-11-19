<?php 
	namespace Home\Controller;
	//引入需要使用的类元素
	use Think\Controller;
	//声明类并且继承
	class GoodsController extends Controller
	{
		
	/**	public function test()
		{	
			$time = date('Y-m-d H:i:s',time());
			echo "我滴个心态啊" ;
			$this -> assign('time',$time);
			$this -> display();
		
		}
	*/
		public function showList(){

			$this ->display();
		}
	}


 ?>