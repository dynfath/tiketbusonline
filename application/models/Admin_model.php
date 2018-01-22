<?php 
	class Admin_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}


		public function getpesanan()
		{
			$status = 0;
			$data = array(
				'status' => $status
			);
			$this->db->order_by('kd_pesan', 'DESC');
			$query = $this->db->get_where('pemesanan', $data);
			return $query->result();
		}

		public function getKota(){
			$query = $this->db->get('kota');
			return $query->result();
		}

		public function getBus(){
			$query = $this->db->get('bus');
			return $query->result();
		}

		public function getKodeTiket($dataKode)
		{
			$this->db->select('kd_tiket, kd_bus, asal, tujuan, tgl, jam, harga, sisa_tiket, k1.`nama_kota` AS kota_asal, k2.`nama_kota` AS kota_tujuan');
            $this->db->from('tiket');
            $this->db->join('kota k1', 'tiket.asal = k1.id_kota');
            $this->db->join('kota k2', 'tiket.tujuan = k2.id_kota');
            $this->db->where('kd_tiket', $dataKode['kd_tiket']);
            $query = $this->db->get();
			return $query->result();
		}

		public function konfirmpesan($id)
		{
			$data = array(
				'status' => 1
			);

			$this->db->where('kd_pesan', $id['kd_pesan']);
			$this->db->update('pemesanan',$data);
			return true;
		}
		
		function deletetiket($dataCari){

			$kd_tiket = $dataCari['kd_tiket'];
			$data = array(
				'kd_tiket' => $kd_tiket
			);
			$query = $this->db->delete('tiket', $data);
			return true;
		}



	}
?>