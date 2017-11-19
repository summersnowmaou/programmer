<?php 
	namespace Admin\Controller;
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

		
		public function order_list(){

			$this ->display();
		}

		public function product_list(){
			$data = M('Goods') -> select();
			$this -> assign('data',$data);
			$this ->display();
		}

		public function product_category(){

			$this ->display();
		}

		public function recycle_bin(){

			$this ->display();
		}

		public function user_list(){

			$this ->display();
		}

		public function add_user(){

			$this ->display();
		}

		public function user_rank(){

			$this ->display();
		}

		public function user_message(){

			$this ->display();
		}

		public function basic_settings(){

			$this ->display();
		}

		public function admin_list(){

			$this ->display();
		}

		public function advertising_list(){

			$this ->display();
		}

		public function edit_product(){

			//请求类型判断
			if (IS_POST) {
				$post = $_POST;
				$post['upd_time'] = $post['add_time'] = time();
				if (M('Goods') -> add($post)) {
					$this -> success('商品添加成功');
				}else{
					$this -> error('商品添加失败');
				}
			} else {
				$this ->display();
			}
		}

	}
 ?>