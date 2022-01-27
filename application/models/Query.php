<?php

class Query extends CI_Model {

    public function sign_in($arry_data) {
        $this->load->database();
        $qry = $this->db->select('*')->where($arry_data)->from('admin')->get();
        $return_val = "";
        $return_val = $qry->result();
        
        return $return_val;
    }

    public function insertMultiple($table = null, $data = array()) {
        $insert = $this->db->insert_batch($table, $data);
        $return_val = "";
        $return_val = $insert ? true : false;
        
        return $return_val;
    }

    public function query_build($sql, $type = 'result', $array = Null) {
//$sql = "SELECT * FROM some_table WHERE id IN ? AND status = ? AND author = ?";
//$this->db->query($sql, array(array(3, 6), 'live', 'Rick'));
        $return_val = "";
        if ($array == Null) {
            $qry = $this->db->query($sql);
            if ($type == 'row') {
                
                $return_val = $qry->row();
            } elseif ($type == 'count') {
                
                $return_val = $this->db->count_all_results();
            } elseif ($type == 'num') {
                
                $return_val = $qry->num_rows();
            } elseif ($type == 'array') {
                
                $return_val = $qry->result_array();
            } elseif ($type == 'field') {
                
                $return_val = $qry->num_fields();
            } elseif ($type == 'view') {
                
                $return_val = $this->db->last_query();
// $sql = $this->db->get_compiled_select();
//  return $sql;
            } else {
                
                $return_val = $qry->result();
            }
        } else {
            $this->db->query($sql, $array);
            if ($type == 'row') {
                
                $return_val = $qry->row();
            } elseif ($type == 'count') {
                
                $return_val = $this->db->count_all_results();
            } elseif ($type == 'num') {
                
                $return_val = $qry->num_rows();
            } elseif ($type == 'array') {
                
                $return_val = $qry->result_array();
            } elseif ($type == 'field') {
                
                $return_val = $qry->num_fields();
            } elseif ($type == 'view') {
                $sql = $this->db->get_compiled_select();
                
                $return_val = $sql;
            } else {
                
                $return_val = $qry->result();
            }
        }
        
        return $return_val;
    }

    public function select($select = '*', $table, $where = null, $type = 'result', $order = null, $limit = null, $group = null, $multiWhereType = False) 
    {
        $return_val = "";
        if (is_array($select)) {
            switch ($select[0]) {
                case 'max':
                    if (count($select) == 3) {
                        $this->db->select_max($select[1], $select[2]);
                    } else {
                        $this->db->select_max($select[1]);
                    }
                    break;
                case 'min':
                    if (count($select) == 3) {
                        $this->db->select_min($select[1], $select[2]);
                    } else {
                        $this->db->select_min($select[1]);
                    }
                    break;
                case 'avg':
                    if (count($select) == 3) {
                        $this->db->select_avg($select[1], $select[2]);
                    } else {
                        $this->db->select_avg($select[1]);
                    }
                    break;
                case 'sum':
                    if (count($select) == 3) {
                        $this->db->select_sum($select[1], $select[2]);
                    } else {
                        $this->db->select_sum($select[1]);
                    }
                    break;
            }
        } else {
            $this->db->select($select);
        }

        $this->db->from($table);

        if ($where != null) {
            if ($multiWhereType == True) {
                for ($k = 0; $k < count($where); $k++) {
                    if (count($where[$k]) == 3) {
                        switch ($where[$k][2]) {
                            case 'or':
                                $this->db->or_where($where[$k][0], $where[$k][1]);
                                break;
                            case 'in':
                                $this->db->where_in($where[$k][0], $where[$k][1]);
                                break;
                            case 'orin':
                                $this->db->or_where_in($where[$k][0], $where[$k][1]);
                                break;
                            case 'notin':
                                $this->db->where_not_in($where[$k][0], $where[$k][1]);
                                break;
                            case 'ornotin':
                                $this->db->where_not_in($where[$k][0], $where[$k][1]);
                                break;
                        }
                    } else {
                        $this->db->where($where[$k][0], $where[$k][1]);
                    }
                }
            } else {
                $this->db->where($where);
            }
        }

        if ($group != null) {
            $this->db->group_by($group);
        }

        if ($limit != null) {
            if (is_array($limit)) {
// $this->db->limit($limit['limit'],$limit['offset']);
                $this->db->limit($limit[0], $limit[1]);
            } else {
                $this->db->limit($limit);
            }
        }

        if ($order != null) {
            foreach ($order as $key => $value) {
                $this->db->order_by($key, $value);
            }
        }

        switch ($type) {
            case 'row':
                $qry = $this->db->get();
                $return_val = $qry->row();
                break;

            case 'count':
                $qry = $this->db->count_all_results();
                $return_val = $qry;
                break;

            case 'num':
                $qry = $this->db->get();
                $return_val = $qry->num_rows();
                break;

            case 'array':
                $qry = $this->db->get();
                $return_val = $qry->result_array();
                break;

            case 'field':
                $qry = $this->db->get();
                $return_val = $qry->num_fields();
                break;

            case 'view':
// return $this->db->last_query();
                $sql = $this->db->get_compiled_select();
                $return_val = $sql;
                break;

            default:
                $qry = $this->db->get();
                $return_val = $qry->result();
                break;
        }
        
        return $return_val;
    }

    public function Fild_quey() {
        $this->db->select_max('id');
        $query = $this->db->get('query_check');
        $return_val = "";
        $return_val = $query->result();
        
        return $return_val;
    }

    public function insert($table, $array, $last_id = false, $multi = FALSE, $view_query = FALSE) {
        //echo $this->db->affected_rows();
        $return_val = "";
        if ($multi == TRUE) {
            $qry = $this->db->insert_batch($table, $array);
        } else {
            $qry = $this->db->insert($table, $array);
        }
        if ($view_query == TRUE) {
            $str = $this->db->get_compiled_insert();
            
            $return_val = $str;
        } elseif ($last_id == true && $qry == true) {
            
            $return_val = $this->db->insert_id();
        } elseif ($qry) {
            
            $return_val = TRUE;
        } else {
            
            $return_val = FALSE;
        }
        
        return $return_val;
    }

    public function update($table, $where, $set, $multi = FALSE) {
        $return_val = "";
        if ($multi == True) {
            $qry = $this->db->update_batch($table, $set, $where);
        } else {
            $qry = $this->db->set($set)->where($where)->update($table);
        }

        if ($qry) {
            $return_val = TRUE;
        } else {
            $return_val = FALSE;
        }
        
        return $return_val;
    }

    public function delete($table, $where, $truncate = 0) {
        $return_val = "";
        if ($truncate == 1) {
            $this->db->truncate($table);
            
            $return_val = true;
        } else {
            $this->db->where($where)->delete($table);
            
            $return_val = true;
        }
        
        return $return_val;
    }

    public function multiple_delete($table, $delete_id, $idname = 'id') {
        $this->db->where_in($idname, $delete_id);
        $return_val = "";
        $return_val = $this->db->delete($table);
        
        return $return_val;
    }

//  join formate  $to_table, $condition, $on = ''
    public function join($select = '*', $from_table, $join_multi_array, $where = null, $type = 'result', $order = null, $limit = null, $group = null, $multiWhereType = null) {
        $return_val = "";
        if (count($join_multi_array) != '') {
            $this->db->select($select);
        } else {
            $return_val = false;
        }

        $this->db->from($from_table);

        if (count($join_multi_array) != 0 && is_array($join_multi_array)) {
            for ($i = 0; $i < count($join_multi_array); $i++) {
                if (count($join_multi_array[$i]) == 2) {
                    $this->db->join($join_multi_array[$i][0], $join_multi_array[$i][1]);
                } elseif (count($join_multi_array[$i]) == 3) {
                    $this->db->join($join_multi_array[$i][0], $join_multi_array[$i][1], $join_multi_array[$i][2]);
                } else {
                    
                    $return_val = false;
                }
            }
        } else {
            
            $return_val = false;
        }

        if ($where != null) {
            if ($multiWhereType == True) {
                for ($k = 0; $k < count($where); $k++) {
                    if (count($where[$k]) == 3) {
                        switch ($where[$k][2]) {
                            case 'or':
                                $this->db->or_where($where[$k][0], $where[$k][1]);
                                break;
                            case 'in':
                                $this->db->where_in($where[$k][0], $where[$k][1]);
                                break;
                            case 'orin':
                                $this->db->or_where_in($where[$k][0], $where[$k][1]);
                                break;
                            case 'notin':
                                $this->db->where_not_in($where[$k][0], $where[$k][1]);
                                break;
                            case 'ornotin':
                                $this->db->where_not_in($where[$k][0], $where[$k][1]);
                                break;
                        }
                    } else {
                        $this->db->where($where[$k][0], $where[$k][1]);
                    }
                }
            } else {
                $this->db->where($where);
            }
        }

        if ($group != null) {
            $this->db->group_by($group);
        }

        if ($limit != null) {
            if (is_array($limit)) {
// $this->db->limit($limit['limit'],$limit['offset']);
                $this->db->limit($limit[0], $limit[1]);
            } else {
                $this->db->limit($limit);
            }
        }

        if ($order != null) {
            foreach ($order as $key => $value) {
                $this->db->order_by($key, $value);
            }
        }

        switch ($type) {
            case 'row':
                $qry = $this->db->get();
                $return_val = $qry->row();
                break;

            case 'count':
                $qry = $this->db->count_all_results();
                $return_val = $qry;
                break;

            case 'num':
                $qry = $this->db->get();
                $return_val = $qry->num_rows();
                break;

            case 'array':
                $qry = $this->db->get();
                $return_val = $qry->result_array();
                break;

            case 'field':
                $qry = $this->db->get();
                $return_val = $qry->num_fields();
                break;

            case 'view':
// return $this->db->last_query();
                $sql = $this->db->get_compiled_select();
                $return_val = $sql;
                break;

            default:
                $qry = $this->db->get();
                $return_val = $qry->result();
                break;
        }
        
        return $return_val;
    }

    /*

      take the name of the input in array formate

      $student=count($this->input->post('student'));
      $student_data=$this->input->post('student');

      Creating key in string Formate for query

      $key="b_id,stu_id,test_id,status";

      $value="";
      for ($i=0; $i < $student ; $i++)
      {
      $value.="('".$this->input->post('b_id')."','".$student_data[$i]."','".$this->input->post('test_id')."','Pending'),";
      }

      Creat values  in string Formate for query

      $value= rtrim($value,",");

      Creat Normal Numeric Array  for query !!!  No Asscociative array

      $insert_data=[$key,$value];

      See This Function dyn_multiple_insert  in dynamic Query

      if ($this->Query->dyn_multiple_insert('allot_test',$insert_data))

     */

    public function multiple_insert($table, $data) {
        $this->db->query('insert into ' . $table . '(' . $data[0] . ')value' . $data[1]);
        $return_val = true;
        
        return $return_val;
    }

    public function load_data_filequery($file, $table) {

//name.csv file here
        $qry = $this->db->query("LOAD DATA LOCAL INFILE '" . base_url($file) . "'
                      INTO TABLE " . $table . "
                      FIELDS TERMINATED BY ','
                      OPTIONALLY ENCLOSED BY '\"'
                      LINES TERMINATED BY '\r\n'
                      IGNORE 1 LINES
                      (@name,@email,@contact) SET name=NULLIF(@name, 'null'),email=NULLIF(@email, 'null'),contact=NULLIF(@contact, 'null')");
//column name change
        return $qry;
    }

// UNion Query Where table columns should be same in count
    public function Search($keyword) {
        $qry = $this->db->query("(SELECT fid,title,image,type,blog_link, content FROM forum WHERE content LIKE '%" .
                $keyword . "%' OR title LIKE '%" . $keyword . "%')
           UNION
           (SELECT pid,title,image ,pid as type,package_link as blog_link, content FROM packages WHERE content LIKE '%" .
                $keyword . "%' OR title LIKE '%" . $keyword . "%')
           UNION
           (SELECT gid,title,image ,gid=null as type,group_link as blog_link, content FROM groups WHERE content LIKE '%" .
                $keyword . "%' OR title LIKE '%" . $keyword . "%')");
        return $qry->result();
    }

}
