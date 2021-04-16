<?php
class modelSPP extends CI_Model{
	function cek_login($table, $where){
		return $this->db->get_where($table, $where);
	}

	function getTableColumnNames($fieldNames){
		$this->fieldNames = $fieldNames;
		return $this->db->list_fields($fieldNames);
	}
	function getTableContent($tableName){
		$this->tableName = $tableName;
		return $this->db->get($tableName)->result();
	}
	function getTableFieldMetadata($fieldName){
		$this->fieldName = $fieldName;
		return $this->db->field_data($fieldName);
	}

	function convertTyping($fieldType){
		$this->fieldType = $fieldType;
		switch($fieldType){
			case "int":
				return $fieldType = "number";
			break;
			case "date":
				return $fieldType = "date"; 
			default:
				return $fieldType = "text";
		}
	}

	function genNisn($date = NULL){
		$this->date = $date;
		if(isset($date)){		
			$date = date_parse($date);	
			$year = $date->year;		
		}else{
			$this->date = "000";
			$year = $this->date;
		}
		 
		$partOne = substr($year, 1);
		$partTwo = mt_rand(100, 999);
		$partThree = mt_rand(1000, 9999);
		$val = $partOne . $partTwo . $partThree;

		return $val;
	}

	function genNis(){
		$partOne = "1819";
		$partTwo = mt_rand(1000, 9999);
		$val = $partOne . $partTwo;

		return $val;
	}

	function insertDatas($data, $tableName){
		$this->db->insert($tableName, $data);
	}


}
?>