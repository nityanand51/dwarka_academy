<?php

class DB{ 
    private $dbHost     = "localhost"; 
    private $dbUsername = "root"; 
    private $dbPassword = ""; 
    private $dbName     = "inline_edit"; 
    private $table      = "members"; 
     
    public function __construct(){ 
        if(!isset($this->db)){ 
            // Connect to the database 
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName); 
            if($conn->connect_error){ 
                die("Failed to connect with MySQL: " . $conn->connect_error); 
            }else{ 
                $this->db = $conn; 
            } 
        } 
    } 
     
    /* 
     * Returns rows from the database based on the conditions 
     * @param array select, where, order_by, limit and return_type conditions 
     */ 
	 
	public function add_row($userData= array()){
		
		$columns = implode(", ", array_keys($userData));
		global $db;
		    // Escape each value for security using the database connection
		$escapedValues = array_map(function($value) {
            // Use $this->connection for mysqli_real_escape_string
            return "'" . mysqli_real_escape_string($this->db, $value) . "'";
        }, array_values($userData));

		// Join escaped values into a string
		$values = implode(", ", $escapedValues);

		// Construct SQL query
		$query = "INSERT INTO members ($columns) VALUES ($values)";		
        
		$this->db->query($query);
		
		if($this->db->affected_rows){		
            
			return true; 

        }else{ 

            return false; 

        } 
	 
	}
    public function getRows($conditions = array()){ 
        $sql = 'SELECT '; 
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*'; 
        $sql .= " FROM {$this->table} "; 
        if(array_key_exists("where",$conditions)){ 
            $sql .= ' WHERE '; 
            $i = 0; 
            foreach($conditions['where'] as $key => $value){ 
                $pre = ($i > 0)?' AND ':''; 
                $sql .= $pre.$key." = '".$value."'"; 
                $i++; 
            } 
        } 
         
        if(array_key_exists("order_by",$conditions)){ 
            $sql .= ' ORDER BY '.$conditions['order_by'];  
        }else{ 
            $sql .= " ORDER BY id ASC ";  
        } 
         
        if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){ 
            $sql .= ' LIMIT '.$conditions['start'].','.$conditions['limit'];  
        }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){ 
            $sql .= ' LIMIT '.$conditions['limit'];  
        } 
         
        $result = $this->db->query($sql); 
         
        if(array_key_exists("return_type", $conditions) && $conditions['return_type'] != 'all'){ 
            switch($conditions['return_type']){ 
                case 'count': 
                    $data = $result->num_rows; 
                    break; 
                case 'single': 
                    $data = $result->fetch_assoc(); 
                    break; 
                default: 
                    $data = ''; 
            } 
        }else{ 
            if($result->num_rows > 0){ 
                while($row = $result->fetch_assoc()){ 
                    $data[] = $row; 
                } 
            } 
        } 
        return !empty($data)?$data:false; 
    } 
     
    /* 
     * Update data into the database 
     * @param array the data for updating into the table 
     * @param array where condition on updating data 
     */ 
    public function update($data, $conditions){ 
        if(!empty($data) && is_array($data)){ 
            $colvalSet = ''; 
            $whereSql = ''; 
            $i = 0; 
            if(!array_key_exists('modified',$data)){ 
                $data['modified'] = date("Y-m-d H:i:s"); 
            } 
            foreach($data as $key=>$val){ 
                $pre = ($i > 0)?', ':''; 
                $colvalSet .= $pre.$key."='".$this->db->real_escape_string($val)."'"; 
                $i++; 
            } 
            if(!empty($conditions)&& is_array($conditions)){ 
                $whereSql .= ' WHERE '; 
                $i = 0; 
                foreach($conditions as $key => $value){ 
                    $pre = ($i > 0)?' AND ':''; 
                    $whereSql .= $pre.$key." = '".$value."'"; 
                    $i++; 
                } 
            } 
            $query = "UPDATE {$this->table} SET ".$colvalSet.$whereSql; 
            $update = $this->db->query($query); 
            return $update?$this->db->affected_rows:false; 
        }else{ 
            return false; 
        } 
    } 
     
    /* 
     * Delete data from the database 
     * @param array where condition on deleting data 
     */ 
    public function delete($conditions){ 
        $whereSql = ''; 
        if(!empty($conditions)&& is_array($conditions)){ 
            $whereSql .= ' WHERE '; 
            $i = 0; 
            foreach($conditions as $key => $value){ 
                $pre = ($i > 0)?' AND ':''; 
                $whereSql .= $pre.$key." = '".$value."'"; 
                $i++; 
            } 
        } 
        $query = "DELETE FROM {$this->table} $whereSql"; 
        $delete = $this->db->query($query); 
        return $delete?true:false; 
    } 
	
	public function getSeminarRows(){
		$data = array();
		
		$sql="SELECT * FROM seminar_data";
		
		$result = $this->db->query($sql); 
		
		if($result->num_rows > 0){ 
                while($row = $result->fetch_assoc()){ 
                    $data[] = $row; 
                } 
            } 
        
        return $data; 
	}
	
	public function getSeminarAttainerOption(){
	$option = '';
	
	$sql="SELECT * FROM members";
		
		$result = $this->db->query($sql); 
		
		if($result->num_rows > 0){ 
                while($row = $result->fetch_assoc()){ 
                    $option .= "<option value='$row[first_name]'>$row[first_name] ($row[job_profile])</option>"; 
                } 
            } 
			
	return $option;
	}
} 
 
?>