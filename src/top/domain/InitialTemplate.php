<?php

/**
 * 创建初始运费模板参数
 * @author auto create
 */
class InitialTemplate
{
	
	/** 
	 * 运费模板发货地，可选值：US（美国）,UK(英国),DE(德国),ES(西班牙),CN(中国)
	 **/
	public $dispatch_locations;
	
	/** 
	 * 运费模板类型，可选值：freeshipping(全球免邮)，not(全球不发货)
	 **/
	public $template_type;	
}
?>