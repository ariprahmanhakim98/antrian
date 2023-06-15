<?php
class M_proses extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	public function getData($tbl, $where)
	{
		$dbarif = $this->load->database('default', TRUE);
        return $dbarif->select('*')->from($tbl)->where($where)->get();
	}
	
	public function listJoin($where)
	{
		$dbarif = $this->load->database('default', TRUE);
        return $dbarif->select('*')
		->from('visitors v')
		->join('queue q', 'v.v_id = q.v_id')
		->join('poli p', 'p.p_id = q.p_id')
		->where($where)
		->limit(3)
		->get();
	}

	public function listJoinSecond($where)
	{
		$dbarif = $this->load->database('default', TRUE);
        return $dbarif->select('*')
		->from('visitors v')
		->join('queue q', 'v.v_id = q.v_id')
		->join('poli p', 'p.p_id = q.p_id')
		->where($where)
		->limit(100, 3)
		->get();
	}

    function insert($tables,$data){
        $dbarif = $this->load->database('default', TRUE);
        $dbarif->insert($tables, $data);
    }
  
    function delete($table, $data)
    {
        $dbarif = $this->load->database('default', TRUE);
        return  $dbarif->where($data)->delete($table);
    }
  
    function updates($data, $where)
    {
        $dbarif = $this->load->database('default', TRUE);
        return  $dbarif->where($where)->update($this->table, $data);
    }


}
