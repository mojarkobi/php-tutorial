<?php

class Database
{
    private $columns = [];
    private $table;
    private $whereCondition;
    private $orderByColumn;
    private $orderByDirection;
    private $limit;

    public function select(...$columns)
    {
        $this->columns = $columns;
        return $this;
    }

    public function from($table)
    {
        $this->table = $table;
        return $this;
    }

    public function where($condition)
    {
        $this->whereCondition = $condition;
        return $this;
    }

    public function orderBy($column, $direction = 'ASC')
    {
        $this->orderByColumn = $column;
        $this->orderByDirection = $direction;
        return $this;
    }

    public function limit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    public function execute()
    {
        // For the sake of the example, let's just echo the SQL query.
        $query = "SELECT " . implode(', ', $this->columns) .
            " FROM {$this->table}" .
            " WHERE {$this->whereCondition}" .
            " ORDER BY {$this->orderByColumn} {$this->orderByDirection}" .
            " LIMIT {$this->limit}";
        echo $query;
        // In a real-world scenario, you would execute the query against the database.
    }
}

// Usage
$db = new Database();
$query = $db->select('column1', 'column2')
    ->from('table')
    ->where('condition')
    ->orderBy('column1', 'DESC')
    ->limit(10)
    ->execute();
?>
