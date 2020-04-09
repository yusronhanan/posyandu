<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_data extends CI_Model {
    public function __construct() {
        /* jika memerlukan kode yang harus dieksekusi sebelum kode di dalam function, maka tulis disini */
    }
    
    public function statusHead($head,$age){
		if($age > 6 && $age<= 12){
            if($head >= 43 && $head <= 46){
                return "Normal";
            } else if ($head > 46){
                return "Big";
            } else{
                return "Small";
            }
        } else if($age >= 3){
            if($head >= 40.5 && $head <= 43){
                return "Normal";
            }else if ($head > 43){
                return "Big";
            } else{
                return "Small";
            }
        } else if($age >= 0){
            if($head >= 34.5 && $head <= 40.5){
                return "Normal";
            } else if ($head > 40.5){
                return "Big";
            } else{
                return "Small";
            }
        } else{
            return "Undefined.";
        }
    }
    public function statusWeight($weight,$gender,$age){
        if( $gender == "Male" ){
            if($age > 48 && $age <= 63){ // 60+3
                if($weight >= 15 && $weight <= 22.6){
                    return "Normal";
                } else if ($weight > 22.6){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age >= 48){ // 48+3
                if($weight >= 13.6 && $weight <= 19.9){
                    return "Normal";
                }else if ($weight > 19.9){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age >= 36){ 
                if($weight >= 12.1 && $weight <= 17.2){
                    return "Normal";
                }else if ($weight > 17.2){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            }  else if($age >= 24){
                if($weight >= 10.5 && $weight <= 14.4){
                    return "Normal";
                }else if ($weight > 14.4){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age >= 12){ 
                if($weight >= 8.3 && $weight <= 11){
                    return "Normal";
                }else if ($weight<= 11){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age == 11){ 
                if($weight >= 8.1 && $weight <= 10.6){
                    return "Normal";
                }else if ($weight > 10.6){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age == 10){ 
                if($weight >= 7.9 && $weight <= 10.3){
                    return "Normal";
                }else if ($weight > 10.3){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age == 9){ 
                if($weight >= 7.6 && $weight <= 9.9){
                    return "Normal";
                }else if ($weight > 9.9){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age == 8){ 
                if($weight >= 7.2 && $weight <= 9.5){
                    return "Normal";
                }else if ($weight > 9.5){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age == 7){ 
                if($weight >= 6.8 && $weight <= 9){
                    return "Normal";
                }else if ($weight<= 9){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age == 6){ 
                if($weight >= 6.3 && $weight <= 8.4){
                    return "Normal";
                }else if ($weight > 8.4){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age == 5){ 
                if($weight >= 5.8 && $weight <= 7.8){
                    return "Normal";
                }else if ($weight > 7.8){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age == 4){ 
                if($weight >= 5.3 && $weight <= 7.1){
                    return "Normal";
                }else if ($weight > 7.1){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age == 3){ 
                if($weight >= 4.8 && $weight <= 6.4){
                    return "Normal";
                }else if ($weight > 6.4){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age == 2){ 
                if($weight >= 4.2 && $weight <= 5.5){
                    return "Normal";
                }else if ($weight > 5.5){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age == 1){ 
                if($weight >= 3.4 && $weight <= 4.7){
                    return "Normal";
                }else if ($weight > 4.7){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            } else if($age == 0){ 
                if($weight >= 2.8 && $weight <= 3.9){
                    return "Normal";
                }else if ($weight > 3.9){
                    return "Obese";
                } else{
                    return "Malnutrition";
                }
            }
        } else if( $gender == "Female" ){
            if($age > 48 && $age <= 63){ // 60+3
                if($weight >= 14.4 && $weight <= 21.7){
                    return "Normal";
                }else if ($weight > 21.7) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age >= 48){ // 48+3
                if($weight >= 13.0 && $weight <= 19.2){
                    return "Normal";
                }else if ($weight > 19.2) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age >= 36){ 
                if($weight >= 11.5 && $weight <= 16.5){
                    return "Normal";
                }else if ($weight > 16.5) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            }  else if($age >= 24){
                if($weight >= 9.7 && $weight <= 13.7){
                    return "Normal";
                }else if ($weight > 13.7) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age >= 12){ 
                if($weight >= 7.7 && $weight <= 10.5){
                    return "Normal";
                }else if ($weight > 10.5) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age == 11){ 
                if($weight >= 7.5 && $weight <= 10.2){
                    return "Normal";
                }else if ($weight > 10.2) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age == 10){ 
                if($weight >= 7.2 && $weight <= 9.8){
                    return "Normal";
                }else if ($weight > 9.8) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age == 9){ 
                if($weight >= 6.9 && $weight <= 9.3){
                    return "Normal";
                }else if ($weight > 9.3) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age == 8){ 
                if($weight >= 6.6 && $weight <= 9){
                    return "Normal";
                }else if ($weight > 9) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age == 7){ 
                if($weight >= 6.2 && $weight <= 8.5){
                    return "Normal";
                }else if ($weight > 8.5) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age == 6){ 
                if($weight >= 5.8 && $weight <= 7.9){
                    return "Normal";
                }else if ($weight > 7.9) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age == 5){ 
                if($weight >= 5.3 && $weight <= 7.3){
                    return "Normal";
                }else if ($weight > 7.3) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age == 4){ 
                if($weight >= 4.9 && $weight <= 6.7){
                    return "Normal";
                }else if ($weight > 6.7) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age == 3){ 
                if($weight >= 4.4 && $weight <= 6){
                    return "Normal";
                }else if ($weight > 6) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age == 2){ 
                if($weight >= 3.8 && $weight <= 5.2){
                    return "Normal";
                }else if ($weight > 5.2) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age == 1){ 
                if($weight >= 3.3 && $weight <= 4.4){
                    return "Normal";
                }else if ($weight > 4.4) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            } else if($age == 0){ 
                if($weight >= 2.7 && $weight <= 3.7){
                    return "Normal";
                }else if ($weight > 3.7) {
                    return "Obese";
                } else {
                    return "Malnutrition";
                }
            }
        }
    }
    public function statusHeight($height,$gender,$age){
        if( $gender == "Male" ){
            if($age > 48 && $age <= 63){ // 60+3
                if($height >= 102 && $height <= 115.1){
                    return "Normal";
                }else if ($height > 115.1){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age >= 48){ // 48+3
                if($height >= 95.5 && $height <= 108.2){
                    return "Normal";
                }else if ($height > 108.2){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age >= 36){ 
                if($height >= 89.4 && $height <= 100.8){
                    return "Normal";
                }else if ($height > 100.8){
                    return "Tall";
                } else{
                    return "Short";
                }
            }  else if($age >= 24){
                if($height >= 82.5 && $height <= 91.5){
                    return "Normal";
                }else if ($height > 91.5){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age >= 12){ 
                if($height >= 71.5 && $height <= 79.7){
                    return "Normal";
                }else if ($height > 79.7){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 11){ 
                if($height >= 70.2 && $height <= 78.2){
                    return "Normal";
                }else if ($height > 78.2){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 10){ 
                if($height >= 68.9 && $height <= 76.7){
                    return "Normal";
                }else if ($height > 76.7){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 9){ 
                if($height >= 67.4 && $height <= 75){
                    return "Normal";
                }else if ($height > 75){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 8){ 
                if($height >= 65.9 && $height <= 73.2){
                    return "Normal";
                }else if ($height > 73.2){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 7){ 
                if($height >= 64.2 && $height <= 71.3){
                    return "Normal";
                }else if ($height > 71.3){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 6){ 
                if($height >= 62.4 && $height <= 69.2){
                    return "Normal";
                }else if ($height > 69.2){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 5){ 
                if($height >= 60.4 && $height <= 67.1){
                    return "Normal";
                }else if ($height > 67.1){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 4){ 
                if($height >= 58.1 && $height <= 64.6){
                    return "Normal";
                }else if ($height > 64.6){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 3){ 
                if($height >= 55.7 && $height <= 61.9){
                    return "Normal";
                }else if ($height > 61.9){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 2){ 
                if($height >= 53.2 && $height <= 59.1){
                    return "Normal";
                }else if ($height > 59.1){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 1){ 
                if($height >= 50.4 && $height <= 56.2){
                    return "Normal";
                }else if ($height > 56.2){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 0){ 
                if($height >= 47.6 && $height <= 53.1){
                    return "Normal";
                }else if ($height > 53.1){
                    return "Tall";
                } else{
                    return "Short";
                }
            }
        } else if( $gender == "Female" ){
            if($age > 48 && $age <= 63){ // 60+3
                if($height >= 101.1 && $height <= 113.9){
                    return "Normal";
                }else if ($height > 113.9){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age >= 48){ // 48+3
                if($height >= 95 && $height <= 106.9){
                    return "Normal";
                }else if ($height > 106.9){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age >= 36){ 
                if($height >= 88.1 && $height <= 99.2){
                    return "Normal";
                }else if ($height > 99.2){
                    return "Tall";
                } else{
                    return "Short";
                }
            }  else if($age >= 24){
                if($height >= 80.8 && $height <= 89.9){
                    return "Normal";
                }else if ($height > 89.9){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age >= 12){ 
                if($height >= 68.8 && $height <= 78.9){
                    return "Normal";
                }else if ($height > 78.9){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 11){ 
                if($height >= 67.7 && $height <= 77.6){
                    return "Normal";
                }else if ($height > 77.6){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 10){ 
                if($height >= 66.7 && $height <= 76.1){
                    return "Normal";
                }else if ($height > 76.1){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 9){ 
                if($height >= 65.5 && $height <= 74.5){
                    return "Normal";
                }else if ($height > 74.5){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 8){ 
                if($height >= 64.2 && $height <= 72.8){
                    return "Normal";
                }else if ($height > 72.8){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 7){ 
                if($height >= 62.6 && $height <= 71.1){
                    return "Normal";
                }else if ($height > 71.1){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 6){ 
                if($height >= 60.9 && $height <= 69.1){
                    return "Normal";
                }else if ($height > 69.1){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 5){ 
                if($height >= 58.9 && $height <= 66.9){
                    return "Normal";
                }else if ($height > 66.9){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 4){ 
                if($height >= 56.8 && $height <= 64.5){
                    return "Normal";
                }else if ($height > 64.5){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 3){ 
                if($height >= 54.4 && $height <= 61.8){
                    return "Normal";
                }else if ($height > 61.8){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 2){ 
                if($height >= 52 && $height <= 59){
                    return "Normal";
                }else if ($height > 59){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 1){ 
                if($height >= 49.4 && $height <= 56){
                    return "Normal";
                }else if ($height > 56){
                    return "Tall";
                } else{
                    return "Short";
                }
            } else if($age == 0){ 
                if($height >= 46.8 && $height <= 52.9){
                    return "Normal";
                }else if ($height > 52.9){
                    return "Tall";
                } else{
                    return "Short";
                }
            }
        } 
    }
    public function get_listArticles() {
        return $this->db->order_by('date','desc')
                        ->get('article')->result();
    }
    public function get_listArticles_search($keyword) {
        return $this->db->like('title',$keyword,'both')
                        ->or_like('content',$keyword.'both')
                        ->order_by('date','desc')
                        ->get('article')->result();
    }
    public function get_listArticles_limit($limit,$start) {
        return $this->db->limit($limit,$start)
                        ->order_by('date','desc')
                        ->get('article')->result();
    }
    public function get_listArticles_search_limit($limit,$start,$keyword) {
        return $this->db->limit($limit,$start)
                        ->like('title',$keyword,'both')
                        ->or_like('content',$keyword.'both')
                        ->order_by('date','desc')
                        ->get('article')->result();
    }
    public function get_listArticles_home() {
        return $this->db->limit(3)
                        ->order_by('date','desc')
                        ->get('article')->result();
    }
    public function get_article($id_article) {
        return $this->db->where('id_article',$id_article)
                        ->get('article')->row();
    }

    public function get_listSchedules() {
        return $this->db->order_by('age_inMonth','asc')
                        ->get('schedule')->result();
    }
    public function get_listSchedules_where($age) {
        return $this->db->where('age_inMonth', $age)
                        ->or_where('age_inMonth', $age+1)
                        ->or_where('age_inMonth', $age+2)
                        ->or_where('age_inMonth', $age+3)
                        ->order_by('age_inMonth','asc')
                        ->get('schedule')->result();
    }
    public function get_ageInMonth_where($age){
        return $this->db->where('age_inMonth', $age)
                        ->or_where('age_inMonth', $age+1)
                        ->or_where('age_inMonth', $age+2)
                        ->or_where('age_inMonth', $age+3)
                        ->order_by('age_inMonth','asc')
                        ->group_by('age_inMonth')
                        ->get('schedule')->result();        
    }
    public function get_ageInMonth(){
        return $this->db->order_by('age_inMonth','asc')
                        ->group_by('age_inMonth')
                        ->get('schedule')->result();        
    }
}
