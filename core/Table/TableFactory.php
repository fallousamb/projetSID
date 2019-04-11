<?php

namespace Core\Table;

use Core\Database\Database;

class TableFactory {

    protected $table;
    protected $db;

    public function __construct(Database $db){
        $this->db = $db;
        if(is_null($this->table)){
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $class_name = str_replace('Table', '', $class_name);
            $this->table = strtolower($class_name);
        }
    }

    public function query($statement, $attributes = null, $one = false){
        if($attributes){
            return $this->db->prepare(
                $statement,
                $attributes,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        } else {
            return $this->db->query(
                $statement,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        }
    }

    public function all(){
        return $this->query("SELECT * FROM " . $this->table);
    }

    public function find($id){
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }

    public function update($id, $fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[]= $v;
        }
        $attributes[] = $id;
        $sql_part = (implode(',', $sql_parts));
        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id = ?", $attributes, true);
    }
    public function create($fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[]= $v;
        }
        $sql_part = (implode(',', $sql_parts));
        return $this->query("INSERT INTO {$this->table} SET $sql_part", $attributes, true);
    }
    public function delete($id){
        return $this->query("DELETE FROM {$this->table}  WHERE id = ?", [$id], true);
    }


    public function extract($key, $value){
        $records = $this->all();
        $returns =[];
        foreach($records as $v){
            $returns[$v->$key] = $v->$value;
        }
        return $returns;
    }


}