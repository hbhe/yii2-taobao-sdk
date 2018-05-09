<?php
/**
 * TOP API: tmall.item.update.wireless.description request
 * 
 * @author auto create
 * @since 1.0, 2016.01.26
 */
class TmallItemUpdateWirelessDescriptionRequest
{
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 需要更新的商品无线描述信息
	 **/
	private $jsonStr;
	
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

	public function setJsonStr($jsonStr)
	{
		$this->jsonStr = $jsonStr;
		$this->apiParas["json_str"] = $jsonStr;
	}

	public function getJsonStr()
	{
		return $this->jsonStr;
	}

	public function getApiMethodName()
	{
		return "tmall.item.update.wireless.description";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->jsonStr,"jsonStr");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
