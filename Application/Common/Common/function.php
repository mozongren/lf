<?php
/**
 * 根据数组列表进行父子级排序成数组
 * @param array $cate 未分类数据集合
 * @param string $pid 获取该分类下的数据关系集合
 * @return array 返回分类数据集合
 */
function categroy_list($cate,$pid=0,$level=-1){
   $arr  = array();
   $level = $level+1;
   foreach($cate as $v){
     if($v['pid'] == $pid){ 
	    $v['level'] = $level;
	    $arr[] = $v;
	    $arr = array_merge($arr,categroy_list($cate,$v['id'],$level));
	 }
   }
   return $arr;
}
/**
 * 根据数组列表进行父子级组合成数组
 * @param array $cate 未分类数据集合
 * @param string $pid 获取该分类下的数据关系集合
 * @return array 返回分类数据集合
 */
function categroy_tree($cate,$pid=0)
{
   $arr = array();
   foreach($cate as $v){
     if($v['pid'] == $pid)
	 {
		$v['childs'] = categroy_tree($cate,$v['id']);
		$arr[] = $v;
	 }
   }
   return $arr;
}
/**
 * 根据数组列表获取改分类下的所有父级节点集合
 * @param array  $cate 未分类数据集合
 * @param string $pid 获取该分类父级节点集合的标记ID
 * @return array 返回分类数据集合
 */
function get_parents($cate,$id=0){
   $arr = array();
   foreach($cate as $v){
     if($v['id'] == $id)
	 {
	    $arr[] = $v;
	    $arr = array_merge($arr,get_parents($cate,$v['pid']));//跟换顺序可以得到相反数据队列如：123456 654321
	 }
   }
   return $arr;
}

/**
 * 根据数组列表获取改分类下的所有子级节点ID
 * @param array  $cate 未分类数据集合
 * @param string $pid 获取该分类父级节点集合的标记ID
 * @return array 返回分类数据集合
 */
function get_childs_ids($cate,$pid){

   $arr  = array();
   foreach($cate as $v){
     if($v['pid'] == $pid){
		$arr[] = $v['id'];
		$arr = array_merge($arr,get_childs_ids($cate,$v['id']));
	 }
   }
  return $arr;
}

/**
 * 根据数组列表获取改分类下的所有子级节点集合
 * @param array  $cate 未分类数据集合
 * @param string $pid 获取该分类父级节点集合的标记ID
 * @return array 返回分类数据集合
 */
function get_childs($cate,$pid){
   $arr  = array();
   foreach($cate as $v){
     if($v['pid'] == $pid){ 
	    $arr[] = $v;
	    $arr = array_merge($arr,get_childs($cate,$v['id']));
	 }
   }
  return $arr;
}


