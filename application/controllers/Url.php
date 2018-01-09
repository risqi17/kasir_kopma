<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url extends CI_Controller {
	public function __construct(){
			parent:: __construct();
			$this->load->model('model_kasir');
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->library('pdf');
			if (isset($_SESSION['status']) == "") {
        	redirect('login');
        	}
		}
	public function index()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(trans_id,3)) AS idmax FROM tb_transaksi");
			$kd = ""; //kode awal
			if($q->num_rows()>0){ //jika data ada
				foreach($q->result() as $k){
					$tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
					$kd = sprintf('%03s', $tmp); //kode ambil 3 karakter terakhir
				}
			}else{ //jika data kosong diset ke kode awal
				$kd = "001";
			}
			$kar = "TRANS"; //karakter depan kodenya
		$data['TRANS_ID'] = $kar.$kd;
		$data['head'] = 'Home';
		$this->load->view('header', $data);
		$this->load->view('kasir');
		$this->load->view('footer');
	}
	public function transaksi($id){
		$d = array(
			'TRANS_ID' => $id,
			'KSR_ID' => 'KS001',
			'TRANS_TGL' => date("Y-m-d")
		);
		$cek = $this->model_kasir->cek("tb_transaksi", $d)->num_rows();
		if ($cek == 0) {
			$this->model_kasir->save($d, 'tb_transaksi');	
		}
		
		$data['head'] = 'Home';
		$data['fungsi'] = 'transaksi';
		$data['id'] = $id;
		$w = array(
			'TRANS_ID' => $id
		);
		$data['transaksi'] = $this->model_kasir->dtransaksi($id);
		$data['total'] = $this->model_kasir->total($id);
		$this->load->view('header', $data);
		$this->load->view('kasir');
		$this->load->view('footer');
	}
	public function sTrans($id){
		$d = array(
			'TRANS_ID' => $id,
			'BRG_ID' => $this->input->post('kode'),
			'TRANS_QTY' => $this->input->post('qty'),
			'TRANS_HARGA_SATUAN' => $this->input->post('satuan'),
			'TRANS_SEMUA' => $this->input->post('total')
		);
		$whe = array(
			'TRANS_ID' => $id,
			'BRG_ID' => $this->input->post('kode')
		);
		$cek = $this->model_kasir->cek_login("tb_detail_transaksi", $whe)->num_rows();
		$w = array(
			'BRG_ID' => $this->input->post('kode')
		);
		$brgstok = $this->model_kasir->cek("tb_barang", $w)->row();
		$sisa = $brgstok->BRG_STOCK - $this->input->post('qty');

		if ($cek > 0) {
			$this->session->set_flashdata("trans", " <script> alert('Data telah ditambahkan, Hapus Dan Tambahkan jumlah beli'); </script>");
		} else {
			$this->model_kasir->save($d, 'tb_detail_transaksi');
			$b = array(
				'BRG_STOCK' => $sisa
			);
			$this->model_kasir->update($w, $b, "tb_barang");
		}
		redirect('url/transaksi/'.$id);
	}
	public function dtransaksi($id, $brg, $stok){
		$where = array(
			'TRANS_ID' => $id,
			'BRG_ID' => $brg
		);
		$this->model_kasir->delete($where, "tb_detail_transaksi");
		$w = array(
			'BRG_ID' => $brg
		);
		$brgstok = $this->model_kasir->cek("tb_barang", $w)->row();
		$sisa = $brgstok->BRG_STOCK + $stok;
		$d = array(
			'BRG_STOCK' => $sisa
		);
		$this->model_kasir->update($w, $d, "tb_barang");
		redirect('url/transaksi/'.$id);
	}
	public function endTransaksi($id, $total){
		$w = array(
			'TRANS_ID' => $id
		);
		$d = array(
			'TRANS_TOTAL' => $total
		);
		$this->model_kasir->update($w, $d, "tb_transaksi");
		redirect('url');
	}
	public function caribarang()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		// cari di database
		$data = $this->db->from('tb_barang')->like('BRG_NAMA',$keyword)->where('BRG_STOCK !=', 0)->get();	

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->BRG_NAMA,
				'harga'	=>$row->BRG_HARGA_JUAL,
				'id'	=>$row->BRG_ID

			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}
	public function caribarang2()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		// cari di database
		$data = $this->db->from('tb_barang')->like('BRG_ID',$keyword)->where('BRG_STOCK !=', 0)->get();	

		// format keluaran di dalam array
		foreach($data->result() as $row)

		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->BRG_ID,
				'harga'	=>$row->BRG_HARGA_JUAL,
				'nama'	=>$row->BRG_NAMA

			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}

	public function barang()
	{
		$data['head'] = 'Data Barang';
		$data['barang'] = $this->model_kasir->read('tb_barang');
		$this->load->view('header', $data);
		$this->load->view('databarang');
		$this->load->view('footer');
	}
	public function save_barang(){
		$data = array(
			'BRG_ID' => $this->input->post('id'),
			'BRG_NAMA' => $this->input->post('nama'),
			'BRG_STOCK' => $this->input->post('stok'),
			'BRG_HARGA' => $this->input->post('beli'),
			'BRG_HARGA_JUAL' => $this->input->post('jual'),
			'BRG_EXPIRED' => $this->input->post('kadaluarsa'),
			'BRG_INPUT_TGL' => date("Y/m/d")
		);
		$this->model_kasir->save($data, 'tb_barang');
		redirect('url/barang');
	}
	public function delete_barang($id){
		$where = array(
			'BRG_ID' => $id
		);
		$this->model_kasir->delete($where, 'tb_barang');
		redirect('url/barang');
	}
	public function edit_barang($id)
	{
		$data['head'] = 'Data Barang';
		$data['fungsi'] = 'edit';
		$where = array(
			'BRG_ID' => $id
		);
		$data['edit'] = $this->model_kasir->edit($where, 'tb_barang');
		$data['barang'] = $this->model_kasir->read('tb_barang');
		$this->load->view('header', $data);
		$this->load->view('databarang');
		$this->load->view('footer');
	}
	public function update_barang(){
		$data = array(
			'BRG_NAMA' => $this->input->post('nama'),
			'BRG_STOCK' => $this->input->post('stok'),
			'BRG_HARGA' => $this->input->post('beli'),
			'BRG_HARGA_JUAL' => $this->input->post('jual'),
			'BRG_EXPIRED' => $this->input->post('kadaluarsa')
		);
		$where = array(
			'BRG_ID' => $this->input->post('id')
		);
		$this->model_kasir->update($where, $data, 'tb_barang');

		redirect('url/barang');
	}
	public function kasir()
	{
		$data['head'] = 'Data Kasir';
		$data['tb_kasir'] = $this->model_kasir->read("tb_kasir");
		$this->load->view('header', $data);
		$this->load->view('datakasir');
		$this->load->view('footer');
	}
	function aksi_daftar(){
		$ksr_id=$this->input->post('ksr_id');
		$ksr_nama= $this->input->post('ksr_nama');
		$ksr_password = $this->input->post('ksr_password');
		$ksr_jabatan = $this->input->post('ksr_jabatan');
		
 
		$data = array(
			'KSR_ID' => $ksr_id,
			'KSR_NAMA' => $ksr_nama,
			'KSR_PASSWORD' => $ksr_password,
			'KSR_JABATAN' => $ksr_jabatan
			);
		$this->model_kasir->save($data,'tb_kasir');
		redirect('url/kasir');
	}
	
	function hapuskasir($id){
		$where = array('KSR_ID' => $id);
		$this->model_kasir->delete($where,'tb_kasir');
		redirect('url/kasir');
	}
	function editkasir($id){
		$where = array('KSR_ID' => $id);
		$data['head'] = 'Data Kasir';
		$data['fungsi'] = 'edit';
		$data['tb_kasir'] = $this->model_kasir->read("tb_kasir");
		$data['kasir'] = $this->model_kasir->edit($where,'tb_kasir');
		$this->load->view('header', $data);
		$this->load->view('datakasir',$data);
		$this->load->view('footer');
	}
	
	function updatekasir(){//untuk form
		$ksr_id=$this->input->post('ksr_id');
		$ksr_nama = $this->input->post('ksr_nama');
		$ksr_password = MD5($this->input->post('ksr_password'));
		$ksr_jabatan= $this->input->post('ksr_jabatan');

		$data = array(///masuk database
			'KSR_ID' => $ksr_id,
			'KSR_NAMA' => $ksr_nama,
			'KSR_PASSWORD' => $ksr_password,
			'KSR_JABATAN' => $ksr_jabatan
		);

		$where = array(
			'KSR_ID' => $ksr_id
		);

		$this->model_kasir->update($where,$data,'tb_kasir');
		redirect('url/kasir');
	}

	public function penjualan()
	{
		$data['head'] = 'Data Penjualan';
		$this->load->view('header', $data);
		$this->load->view('datapenjualan');
		$this->load->view('footer');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function cetakpdf(){
		$pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'ID',1,0);
        $pdf->Cell(85,6,'Password',1,0);
        $pdf->Cell(27,6,'Nama',1,0);
        $pdf->Cell(25,6,'Jabatan',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('tb_kasir')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(20,6,$row->KSR_ID,1,0);
            $pdf->Cell(85,6,$row->KSR_PASSWORD,1,0);
            $pdf->Cell(27,6,$row->KSR_NAMA,1,0);
            $pdf->Cell(25,6,$row->KSR_JABATAN,1,1); 
        }
        $pdf->Output();
	}
}
