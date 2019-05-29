<?php

// แปลงรหัสสาขา เป็นฟิลด์ใช้ในการค้นหาที่เทเบิ้ล regis_job
if(!function_exists('serviceID_2_nameServiceField'))
{
	function serviceID_2_nameServiceField($service_id){ 
		$field = array(
			"1"  => "name_service1",
			"2"  => "name_service2",
			"3"  => "name_service3",
			"4"  => "name_service4",
			"5"  => "name_service5",
			"6"  => "name_service6",
			"7"  => "name_service7",
			"8"  => "name_service8",
			"9"  => "name_service9",
			"10" => "name_service10",
			"11" => "name_service11",
			"12" => "name_service12",
			"13" => "name_service13",
			"14" => "name_service14",
			"15" => "name_service15",
			"16" => "name_service16",
			"17" => "name_service17"
		);
		return $field[$service_id];
	}
}

// แปลงรหัสสาขา เป็นไอค่อน
if(!function_exists('serviceID_2_icon'))
{
	function serviceID_2_icon($service_id){ 
		$icon = array(
			"1"  => "cable.png",
			"2"  => "air.png",
			"3"  => "car.png",
			"4"  => "welder.png",
			"5"  => "pc.png",
			"6"  => "oven.png",
			"7"  => "bike.png",
			"8"  => "tile.png",
			"9"  => "",
			"10" => "",
			"11" => "painter.png",
			"12" => "construct.png",
			"13" => "brick.png",
			"14" => "window.png",
			"15" => "shower.png",
			"16" => "",
			"17" => "technician.png"
		);
		return $icon[$service_id];
	}
}

// แปลงรหัสสาขา เป็นชื่อสาขา
if(!function_exists('serviceID_2_name'))
{
	function serviceID_2_name($service_id){ 
		$name = array(
			"1"  => "ช่างเดินสายไฟฟ้าภายในอาคาร",
			"2"  => "ช่างซ่อมเครื่องปรับอากาศ",
			"3"  => "ช่างซ่อมรถยนต์",
			"4"  => "ช่างเชื่อม",
			"5"  => "ช่างซ่อมคอมพิวเตอร์",
			"6"  => "ช่างซ่อมเครื่องใช้ไฟฟ้าในบ้าน",
			"7"  => "ช่างซ่อมรถจักรยานยนต์",
			"8"  => "ช่างปูกระเบื้อง",
			"9"  => "",
			"10" => "",
			"11" => "ช่างสีอาคาร",
			"12" => "ช่างก่อสร้าง / ต่อเติมอาคาร",
			"13" => "ช่างก่ออิฐฉาบปูน",
			"14" => "ช่างทำมุ้งลวด / เหล็กดัด",
			"15" => "ช่างประปา / สุขภัณฑ์",
			"16" => "",
			"17" => "ช่างอเนกประสงค์(ช่างชุมชน)"
		);
		return $name[$service_id];
	}
}