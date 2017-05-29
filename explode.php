<!DOCTYPE html>
<html>
<body>



<?php
$str = "created:asc";
print_r(explode(":", $str));
?>


// $product = "";
		$searchKey = "";
		$orderby = "";
		if (isset($_GET['orderby'])) {
			$str = $_GET['orderby'];
			$searchItem = explode(":", $str);
			$searchKey = $searchItem[0];
			$orderby = $searchItem[1];

			dd($searchKey);

			$category = Category::with(
				['products' => function ($product_img) {
					return $product_img->with(['images'])->orderBy($GLOBALS['searchKey'] , $GLOBALS['orderby'])->get();
				},
				])->where('slug', $slug)->paginate(8);

		}

















</body>
</html>