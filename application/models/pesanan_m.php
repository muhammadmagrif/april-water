<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 21/04/2018
 * Time: 2:30
 */
class pesanan_m extends CI_Model
{
    
    public function insPes(){
        $nama = $this->input->post('nama',true);
        $ktp = $this->input->post('ktp',true);
        $alamat = $this->input->post('alamat',true);
        $noHp = $this->input->post('noHp',true);
        $jml = $this->input->post('jml',true);
        $jenis = $this->input->post('jenis',true);
        $metpem = $this->input->post('metpem',true); //metode pembayaran
        $tgl = date("Y-m-d");
        $statpes = "Belum dibayar";

        $wherecust1 = array('nama' => $nama
            );

        $wherecust2 = array(
            'ktp' => $ktp
        );

        $wherecust3 = array('nama' => $nama,
            'ktp' => $ktp
        );

        $cekcustnama = $this->db->get_where("customer",$wherecust1)->num_rows();
        $cekcustktp = $this->db->get_where("customer",$wherecust2)->num_rows();
        $cekcust = $this->db->get_where("customer",$wherecust3)->num_rows();

        if($cekcustnama>0 && $cekcustktp>0 && $cekcust>0 ){
            $datPes = array('ktp' => $ktp,
                'alamat' => $alamat,
                'noHp' => $noHp,
                'jml' => $jml,
                'jenis' => $jenis,
                'metode_pembayaran' => $metpem,
                'tanggal_pemesanan' => $tgl,
                'status_pesanan' => $statpes);

            $insert = $this->db->insert('pesan', $datPes);
            redirect(base_url());
        }else if($cekcustnama==0 && $cekcustktp==0 && $cekcust==0){
            $dataPem = array('nama' => $nama,
                'ktp' => $ktp);

            $datPes = array('ktp' => $ktp,
                'alamat' => $alamat,
                'noHp' => $noHp,
                'jml' => $jml,
                'jenis' => $jenis,
                'metode_pembayaran' => $metpem,
                'tanggal_pemesanan' => $tgl,
                'status_pesanan' => $statpes);

            $insert = $this->db->insert('customer', $dataPem);
            $insert = $this->db->insert('pesan', $datPes);
            redirect(base_url());
        }else if($cekcustktp>0 && $cekcust==0){
            echo '<script language="javascript">';
            echo 'alert ("nomor KTP sudah digunakan dengan nama lain")';
            echo '</script>';
            redirect(base_url());
        }

        
    }

}