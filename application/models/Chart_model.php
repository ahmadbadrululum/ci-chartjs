<?php

class Chart_model extends CI_MOdel 
{
    public function getMahasiswa()
    {
        $query = "SELECT b.tahun, count(a.angkatan_id) as jumlah from mahasiswa as a LEFT JOIN angkatan as b on b.id=a.angkatan_id group by a.angkatan_id order by tahun asc";
        return $this->db->query($query)->result();
    }
}
