<?php 

function getData($string, $callback){
	if(is_callable($string)){
		call_user_func($string);
		echo "Possible";
	}else{
		echo "Not possible<br>";
	}


	if(is_callable($callback)){
		call_user_func($callback);
		// echo "Possible"; 
	}else{
		echo "Not possible";
	}
}
getData('Hello', function(){
	echo "I am callable";
});
// where 'Hello' is not a function but other one is a function.

?>