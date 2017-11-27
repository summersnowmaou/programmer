window.onload=function(){
	 
	 var obtn=document.getElementsByTagName("button");
	 var oparent=document.getElementsByClassName("panel-body")[0];

	 var ocurrent=new Date();
	 var startdate=new Date(2016,10,21);
	 var oendtime=new Date(2016,10,29);  //定义报名截止日期


	 var arr=Byclass("bottom","div");


	 obtn[1].onclick=function(){
		 if(ocurrent<startdate){
			 arr[0].getElementsByTagName("label")[0].innerHTML="还没有开始报名，你可以返回";
			 arr[0].style.display="block";
		 } else if(ocurrent>oendtime){

	 	arr[0].style.display="block";
	 	obtn[1].disabled=true;

	 }else{
             window.location="sign_in.html";
	 	
	}
}
	function Byclass(sclass,obj){
		var ele=document.getElementsByTagName(obj);
		var arr=[];
		var pattern=new RegExp("(^ |)"+sclass+"( |$)");
		for(var i=0;i<ele.length;i++){
			  if(pattern.test(ele[i].className)){
			  	  arr.push(ele[i]);
			  }
		}
		return arr;
	}
}