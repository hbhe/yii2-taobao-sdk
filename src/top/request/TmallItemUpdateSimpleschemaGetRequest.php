<?php
/**
 * TOP API: tmall.item.update.simpleschema.get request
 * 
 * @author auto create
 * @since 1.0, 2016.02.24
 */
class TmallItemUpdateSimpleschemaGetRequest
{
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function getApiMethodName()
	{
		return "tmall.item.update.simpleschema.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
