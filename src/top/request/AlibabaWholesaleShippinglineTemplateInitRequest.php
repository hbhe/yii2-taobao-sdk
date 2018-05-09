<?php
/**
 * TOP API: alibaba.wholesale.shippingline.template.init request
 * 
 * @author auto create
 * @since 1.0, 2015.07.29
 */
class AlibabaWholesaleShippinglineTemplateInitRequest
{
	/** 
	 * 创建初始运费模板参数
	 **/
	private $initialTemplate;
	
	private $apiParas = array();
	
	public function setInitialTemplate($initialTemplate)
	{
		$this->initialTemplate = $initialTemplate;
		$this->apiParas["initial_template"] = $initialTemplate;
	}

	public function getInitialTemplate()
	{
		return $this->initialTemplate;
	}

	public function getApiMethodName()
	{
		return "alibaba.wholesale.shippingline.template.init";
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
