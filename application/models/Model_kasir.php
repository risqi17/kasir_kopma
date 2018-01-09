<?php
 class Model_kasir extends CI_Model{
 	public function read($table){
 		$this->db->from($table);
        $query = $this->db->get();
        return $query->result();
 	}
 	public function save($data, $table){     
       	$this->db->insert($table, $data);
       	return true;
    }
    public function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function edit($where, $table){		
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
	 function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function cek($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function dTransaksi($id){
		$data = $this->db->query("select * from tb_detail_transaksi inner join tb_barang on tb_barang.BRG_ID=tb_detail_transaksi.BRG_ID where tb_detail_transaksi.TRANS_ID = '$id' ");
		return $data->result();
	}
	function total($id){
		$data = $this->db->query("select sum(TRANS_SEMUA) as total from tb_detail_transaksi where TRANS_ID = '$id' ");
		return $data->result();
	}
}