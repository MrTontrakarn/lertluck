<?php 
    require_once('connection.php');

    if (isset($_REQUEST['update_id'])) {
        try {
            $id = $_REQUEST['update_id'];
            $select_stmt = $db->prepare("SELECT * FROM db_op WHERE id = :id");
            $select_stmt->bindParam(':id', $id);
            $select_stmt->execute();
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
        } catch(PDOException $e) {
            $e->getMessage();
        }
    }

    if (isset($_REQUEST['btn_update'])) {
        $name_op_up = $_REQUEST['txt_name_op'];
        $timeing_up = $_REQUEST['txt_timeing'];
        $new_ptc_up = $_REQUEST['txt_new_ptc'];

        $size_v1_up = $_REQUEST['txt_size_v1'];
        $size_v2_up = $_REQUEST['txt_size_v2'];
        $size_v3_up = $_REQUEST['txt_size_v3'];
        $size_v4_up = $_REQUEST['txt_size_v4'];
        $size_v5_up = $_REQUEST['txt_size_v5'];
        $size_v6_up = $_REQUEST['txt_size_v6'];
        $size_v7_up = $_REQUEST['txt_size_v7'];
        $size_v8_up = $_REQUEST['txt_size_v8'];

        $on_pdv1_up = $_REQUEST['txt_on_pdv1'];
        $on_pdv2_up = $_REQUEST['txt_on_pdv2'];
        $on_pdv3_up = $_REQUEST['txt_on_pdv3'];
        $on_pdv4_up = $_REQUEST['txt_on_pdv4'];
        $on_pdv5_up = $_REQUEST['txt_on_pdv5'];
        $on_pdv6_up = $_REQUEST['txt_on_pdv6'];
        $on_pdv7_up = $_REQUEST['txt_on_pdv7'];
        $on_pdv8_up = $_REQUEST['txt_on_pdv8'];

        $od_v1_up = $_REQUEST['txt_od_v1'];
        $od_v2_up = $_REQUEST['txt_od_v2'];
        $od_v3_up = $_REQUEST['txt_od_v3'];
        $od_v4_up = $_REQUEST['txt_od_v4'];
        $od_v5_up = $_REQUEST['txt_od_v5'];
        $od_v6_up = $_REQUEST['txt_od_v6'];
        $od_v7_up = $_REQUEST['txt_od_v7'];
        $od_v8_up = $_REQUEST['txt_od_v8'];
        
        $if_v1_up = $_REQUEST['txt_if_v1'];
        $if_v2_up = $_REQUEST['txt_if_v2'];
        $if_v3_up = $_REQUEST['txt_if_v3'];
        $if_v4_up = $_REQUEST['txt_if_v4'];
        $if_v5_up = $_REQUEST['txt_if_v5'];
        $if_v6_up = $_REQUEST['txt_if_v6'];
        $if_v7_up = $_REQUEST['txt_if_v7'];
        $if_v8_up = $_REQUEST['txt_if_v8'];
    
        $mer_v1_up = $_REQUEST['txt_mer_v1'];
        $mer_v2_up = $_REQUEST['txt_mer_v2'];
        $mer_v3_up = $_REQUEST['txt_mer_v3'];
        $mer_v4_up = $_REQUEST['txt_mer_v4'];
        $mer_v5_up = $_REQUEST['txt_mer_v5'];
        $mer_v6_up = $_REQUEST['txt_mer_v6'];
        $mer_v7_up = $_REQUEST['txt_mer_v7'];
        $mer_v8_up = $_REQUEST['txt_mer_v8'];

        $cut_v1_up = $_REQUEST['txt_cut_v1'];
        $cut_v2_up = $_REQUEST['txt_cut_v2'];
        $cut_v3_up = $_REQUEST['txt_cut_v3'];
        $cut_v4_up = $_REQUEST['txt_cut_v4'];
        $cut_v5_up = $_REQUEST['txt_cut_v5'];
        $cut_v6_up = $_REQUEST['txt_cut_v6'];
        $cut_v7_up = $_REQUEST['txt_cut_v7'];
        $cut_v8_up = $_REQUEST['txt_cut_v8'];

        $cuttrue_v1_up = $_REQUEST['txt_cuttrue_v1'];
        $cuttrue_v2_up = $_REQUEST['txt_cuttrue_v2'];
        $cuttrue_v3_up = $_REQUEST['txt_cuttrue_v3'];
        $cuttrue_v4_up = $_REQUEST['txt_cuttrue_v4'];
        $cuttrue_v5_up = $_REQUEST['txt_cuttrue_v5'];
        $cuttrue_v6_up = $_REQUEST['txt_cuttrue_v6'];
        $cuttrue_v7_up = $_REQUEST['txt_cuttrue_v7'];
        $cuttrue_v8_up = $_REQUEST['txt_cuttrue_v8'];

        $details_up = $_REQUEST['txt_details'];
        $details_v1_up = $_REQUEST['txt_details_v1'];
        $details_v2_up = $_REQUEST['txt_details_v2'];
        $details_v3_up = $_REQUEST['txt_details_v3'];
        $details_v4_up = $_REQUEST['txt_details_v4'];
        $details_v5_up = $_REQUEST['txt_details_v5'];
        $details_v6_up = $_REQUEST['txt_details_v6'];
        $details_v7_up = $_REQUEST['txt_details_v7'];
        $details_v8_up = $_REQUEST['txt_details_v8'];

        $pin1_up = $_REQUEST['txt_pin1'];
        $pin2_up = $_REQUEST['txt_pin2'];
        $pack1_up = $_REQUEST['txt_pack1'];
        $pack2_up = $_REQUEST['txt_pack2'];

        $ss1_up = $_REQUEST['txt_ss1'];
        $ss2_up = $_REQUEST['txt_ss2'];
        $ss3_up = $_REQUEST['txt_ss3'];
        $ss4_up = $_REQUEST['txt_ss4'];
        $ss5_up = $_REQUEST['txt_ss5'];
        $ss6_up = $_REQUEST['txt_ss6'];
        $ss7_up = $_REQUEST['txt_ss7'];

        $s1_up = $_REQUEST['txt_s1'];
        $s2_up = $_REQUEST['txt_s2'];
        $s3_up = $_REQUEST['txt_s3'];
        $s4_up = $_REQUEST['txt_s4'];
        $s5_up = $_REQUEST['txt_s5'];
        $s6_up = $_REQUEST['txt_s6'];
        $s7_up = $_REQUEST['txt_s7'];

        $m1_up = $_REQUEST['txt_m1'];
        $m2_up = $_REQUEST['txt_m2'];
        $m3_up = $_REQUEST['txt_m3'];
        $m4_up = $_REQUEST['txt_m4'];
        $m5_up = $_REQUEST['txt_m5'];
        $m6_up = $_REQUEST['txt_m6'];
        $m7_up = $_REQUEST['txt_m7'];

        $l1_up = $_REQUEST['txt_l1'];
        $l2_up = $_REQUEST['txt_l2'];
        $l3_up = $_REQUEST['txt_l3'];
        $l4_up = $_REQUEST['txt_l4'];
        $l5_up = $_REQUEST['txt_l5'];
        $l6_up = $_REQUEST['txt_l6'];
        $l7_up = $_REQUEST['txt_l7'];

        $xl1_up = $_REQUEST['txt_xl1'];
        $xl2_up = $_REQUEST['txt_xl2'];
        $xl3_up = $_REQUEST['txt_xl3'];
        $xl4_up = $_REQUEST['txt_xl4'];
        $xl5_up = $_REQUEST['txt_xl5'];
        $xl6_up = $_REQUEST['txt_xl6'];
        $xl7_up = $_REQUEST['txt_xl7'];

        $xl21_up = $_REQUEST['txt_xl21'];
        $xl22_up = $_REQUEST['txt_xl22'];
        $xl23_up = $_REQUEST['txt_xl23'];
        $xl24_up = $_REQUEST['txt_xl24'];
        $xl25_up = $_REQUEST['txt_xl25'];
        $xl26_up = $_REQUEST['txt_xl26'];
        $xl27_up = $_REQUEST['txt_xl27'];

        $xl31_up = $_REQUEST['txt_xl31'];
        $xl32_up = $_REQUEST['txt_xl32'];
        $xl33_up = $_REQUEST['txt_xl33'];
        $xl34_up = $_REQUEST['txt_xl34'];
        $xl35_up = $_REQUEST['txt_xl35'];
        $xl36_up = $_REQUEST['txt_xl36'];
        $xl37_up = $_REQUEST['txt_xl37'];

        $result_v1_up = $od_v1 + $od_v2 + $od_v3 + $od_v4 + $od_v5 + $od_v6 + $od_v7 + $od_v8;
        $result_v2_up = $if_v1 + $if_v2 + $if_v3 + $if_v4 + $if_v5 + $if_v6 + $if_v7 + $if_v8;
        $result_v3_up = $mer_v1 + $mer_v2 + $mer_v3 + $mer_v4 + $mer_v5 + $mer_v6 + $mer_v7 + $mer_v8;
        $result_v4_up = $cut_v1 + $cut_v2 + $cut_v3 + $cut_v4 + $cut_v5 + $cut_v6 + $cut_v7 + $cut_v8;
        $result_v5_up = $cuttrue_v1 + $cuttrue_v2 + $cuttrue_v3 + $cuttrue_v4 + $cuttrue_v5 + $cuttrue_v6 + $cuttrue_v7 + $cuttrue_v8;
       
        $result_v6_up = $od_v1 + $od_v2 + $od_v3 + $od_v4 + $od_v5 + $od_v6 + $od_v7 + $od_v8 + 
        $if_v1 + $if_v2 + $if_v3 + $if_v4 + $if_v5 + $if_v6 + $if_v7 + $if_v8 + 
        $mer_v1 + $mer_v2 + $mer_v3 + $mer_v4 + $mer_v5 + $mer_v6 + $mer_v7 + $mer_v8 + 
        $cut_v1 + $cut_v2 + $cut_v3 + $cut_v4 + $cut_v5 + $cut_v6 + $cut_v7 + $cut_v8 + 
        $cuttrue_v1 + $cuttrue_v2 + $cuttrue_v3 + $cuttrue_v4 + $cuttrue_v5 + $cuttrue_v6 + $cuttrue_v7 + $cuttrue_v8;


        $detv1_up = intval($_REQUEST['txt_detv1']);
        $detv2_up = intval($_REQUEST['txt_detv2']);
        $detv3_up = intval($_REQUEST['txt_detv3']);
        $detv4_up = intval($_REQUEST['txt_detv4']);
        $detv5_up = intval($_REQUEST['txt_detv5']);
        $detv6_up = intval($_REQUEST['txt_detv6']);
        $detv7_up = intval($_REQUEST['txt_detv7']);
        $detv8_up = intval($_REQUEST['txt_detv8']);

        

        $note_up = $_REQUEST['txt_note'];
   
                     $result_v1 = 0;
                    $result_v2 = 0;
                    $result_v3 = 0;
                    $result_v4 = 0;
                    $result_v5 = 0;
                    $result_v6 = 0;

                    // แปลงค่าสตริงเป็นตัวเลขก่อนที่จะทำการบวก
                    $od_v1 = floatval($od_v1);
                    $od_v2 = floatval($od_v2);
                    $od_v3 = floatval($od_v3);
                    $od_v4 = floatval($od_v4);
                    $od_v5 = floatval($od_v5);
                    $od_v6 = floatval($od_v6);
                    $od_v7 = floatval($od_v7);
                    $od_v8 = floatval($od_v8);
                    
                    $if_v1 = floatval($if_v1);
                    $if_v2 = floatval($if_v2);
                    $if_v3 = floatval($if_v3);
                    $if_v4 = floatval($if_v4);
                    $if_v5 = floatval($if_v5);
                    $if_v6 = floatval($if_v6);
                    $if_v7 = floatval($if_v7);
                    $if_v8 = floatval($if_v8);
                    
                    $mer_v1 = floatval($mer_v1);
                    $mer_v2 = floatval($mer_v2);
                    $mer_v3 = floatval($mer_v3);
                    $mer_v4 = floatval($mer_v4);
                    $mer_v5 = floatval($mer_v5);
                    $mer_v6 = floatval($mer_v6);
                    $mer_v7 = floatval($mer_v7);
                    $mer_v8 = floatval($mer_v8);

                    $cut_v1 = floatval($cut_v1);
                    $cut_v2 = floatval($cut_v2);
                    $cut_v3 = floatval($cut_v3);
                    $cut_v4 = floatval($cut_v4);
                    $cut_v5 = floatval($cut_v5);
                    $cut_v6 = floatval($cut_v6);
                    $cut_v7 = floatval($cut_v7);
                    $cut_v8 = floatval($cut_v8);

                    $cuttrue_v1 = floatval($cuttrue_v1);
                    $cuttrue_v2 = floatval($cuttrue_v2);
                    $cuttrue_v3 = floatval($cuttrue_v3);
                    $cuttrue_v4 = floatval($cuttrue_v4);
                    $cuttrue_v5 = floatval($cuttrue_v5);
                    $cuttrue_v6 = floatval($cuttrue_v6);
                    $cuttrue_v7 = floatval($cuttrue_v7);
                    $cuttrue_v8 = floatval($cuttrue_v8);

                    $result_v1 = $od_v1 + $od_v2 + $od_v3 + $od_v4 + $od_v5 + $od_v6 + $od_v7 + $od_v8;
                    $result_v2 = $if_v1 + $if_v2 + $if_v3 + $if_v4 + $if_v5 + $if_v6 + $if_v7 + $if_v8;
                    $result_v3 = $mer_v1 + $mer_v2 + $mer_v3 + $mer_v4 + $mer_v5 + $mer_v6 + $mer_v7 + $mer_v8;
                    $result_v4 = $cut_v1 + $cut_v2 + $cut_v3 + $cut_v4 + $cut_v5 + $cut_v6 + $cut_v7 + $cut_v8;
                    $result_v5 = $cuttrue_v1 + $cuttrue_v2 + $cuttrue_v3 + $cuttrue_v4 + $cuttrue_v5 + $cuttrue_v6 + $cuttrue_v7 + $cuttrue_v8;
                
                    $result_v6 = $od_v1 + $od_v2 + $od_v3 + $od_v4 + $od_v5 + $od_v6 + $od_v7 + $od_v8 + 
                    $if_v1 + $if_v2 + $if_v3 + $if_v4 + $if_v5 + $if_v6 + $if_v7 + $if_v8 + 
                    $mer_v1 + $mer_v2 + $mer_v3 + $mer_v4 + $mer_v5 + $mer_v6 + $mer_v7 + $mer_v8 + 
                    $cut_v1 + $cut_v2 + $cut_v3 + $cut_v4 + $cut_v5 + $cut_v6 + $cut_v7 + $cut_v8 + 
                    $cuttrue_v1 + $cuttrue_v2 + $cuttrue_v3 + $cuttrue_v4 + $cuttrue_v5 + $cuttrue_v6 + $cuttrue_v7 + $cuttrue_v8;
                    
                    
        

        


        if (empty($name_op_up)) {
            $errorMsg = "Please Enter Fisrtname";
        } 
        else {
            try {
                if (!isset($errorMsg)) {
                    $update_stmt = $db->prepare("UPDATE db_op SET name_op = :np, new_ptc = :nt, timeing = :tm, 
                    size_v1 = :si1, size_v2 = :si2, size_v3 = :si3, size_v4 = :si4, size_v5 = :si5, size_v6 = :si6, size_v7 = :si7, size_v8 = :si8, 
                    on_pdv1 = :onp1, on_pdv2 = :onp2, on_pdv3 = :onp3, on_pdv4 = :onp4, on_pdv5 = :onp5, on_pdv6 = :onp6, on_pdv7 = :onp7, on_pdv8 = :onp8, 
                    od_v1 = :od1, od_v2 = :od2, od_v3 = :od3, od_v4 = :od4, od_v5 = :od5, od_v6 = :od6, od_v7 = :od7, od_v8 = :od8, 
                    if_v1 = :if_1, if_v2 = :if_2, if_v3 = :if_3, if_v4 = :if_4, if_v5 = :if_5, if_v6 = :if_6, if_v7 = :if_7, if_v8 = :if_8, 
                    mer_v1 = :mer1, mer_v2 = :mer2, mer_v3 = :mer3, mer_v4 = :mer4, mer_v5 = :mer5, mer_v6 = :mer6, mer_v7 = :mer7, mer_v8 = :mer8, 
                    cut_v1 = :cut1, cut_v2 = :cut2, cut_v3 = :cut3, cut_v4 = :cut4, cut_v5 = :cut5, cut_v6 = :cut6, cut_v7 = :cut7, cut_v8 = :cut8, 
                    cuttrue_v1 = :ct1, cuttrue_v2 = :ct2, cuttrue_v3 = :ct3, cuttrue_v4 = :ct4, cuttrue_v5 = :ct5, cuttrue_v6 = :ct6, cuttrue_v7 = :ct7, cuttrue_v8 = :ct8, 
                    details = :dt, details_v1 = :dt1, details_v2 = :dt2, details_v3 = :dt3, details_v4 = :dt4, details_v5 = :dt5, details_v6 = :dt6, details_v7 = :dt7, details_v8 = :dt8, 
                    detv1 = :dv1, detv2 = :dv2, detv3 = :dv3, detv4 = :dv4, detv5 = :dv5, detv6 = :dv6, detv7 = :dv7, detv8 = :dv8, 
                    pin1 = :p1, pin2 = :p2, pack1 = :pa1, pack2 = :pa2, 
                    note = :note, 
                    result_v1 = :result1, result_v2 = :result2, result_v3 = :result3, result_v4 = :result4, result_v5 = :result5, result_v6 = :result6, 
                    s1 = :s1, s2 = :s2, s3 = :s3, s4 = :s4, s5 = :s5, s6 = :s6, s7 = :s7, 
                    ss1 = :ss1, ss2 = :ss2, ss3 = :ss3, ss4 = :ss4, ss5 = :ss5, ss6 = :ss6, ss7 = :ss7, 
                    m1 = :m1, m2= :m2, m3= :m3, m4= :m4, m5= :m5, m6= :m6, m7= :m7, 
                    l1= :l1, l2= :l2, l3= :l3, l4= :l4, l5= :l5, l6= :l6, l7= :l7, 
                    xl1 = :xl1, xl2 = :xl2, xl3 = :xl3, xl4 = :xl4, xl5 = :xl5, xl6 = :xl6, xl7 = :xl7, 
                    xl21 = :xl21, xl22 = :xl22, xl23 = :xl23, xl24 = :xl24, xl25 = :xl25, xl26 = :xl26, xl27 = :xl27, 
                    xl31 = :xl31, xl32 = :xl32, xl33 = :xl33, xl34 = :xl34, xl35 = :xl35, xl36 = :xl36, xl37 = :xl37

                    WHERE id = :id");

                    $update_stmt->bindParam(':s1', $s1_up);  
                    $update_stmt->bindParam(':s2', $s2_up);  
                    $update_stmt->bindParam(':s3', $s3_up);  
                    $update_stmt->bindParam(':s4', $s4_up);  
                    $update_stmt->bindParam(':s5', $s5_up);
                    $update_stmt->bindParam(':s6', $s6_up);
                    $update_stmt->bindParam(':s7', $s7_up);

                    $update_stmt->bindParam(':ss1', $ss1_up);  
                    $update_stmt->bindParam(':ss2', $ss2_up);  
                    $update_stmt->bindParam(':ss3', $ss3_up);  
                    $update_stmt->bindParam(':ss4', $ss4_up);  
                    $update_stmt->bindParam(':ss5', $ss5_up);
                    $update_stmt->bindParam(':ss6', $ss6_up);
                    $update_stmt->bindParam(':ss7', $ss7_up);

                    $update_stmt->bindParam(':m1', $m1_up);  
                    $update_stmt->bindParam(':m2', $m2_up);  
                    $update_stmt->bindParam(':m3', $m3_up);  
                    $update_stmt->bindParam(':m4', $m4_up);  
                    $update_stmt->bindParam(':m5', $m5_up);
                    $update_stmt->bindParam(':m6', $m6_up);
                    $update_stmt->bindParam(':m7', $m7_up);

                    $update_stmt->bindParam(':l1', $l1_up);  
                    $update_stmt->bindParam(':l2', $l2_up);  
                    $update_stmt->bindParam(':l3', $l3_up);  
                    $update_stmt->bindParam(':l4', $l4_up);  
                    $update_stmt->bindParam(':l5', $l5_up);
                    $update_stmt->bindParam(':l6', $l6_up);
                    $update_stmt->bindParam(':l7', $l7_up);

                    $update_stmt->bindParam(':xl1', $xl1_up);  
                    $update_stmt->bindParam(':xl2', $xl2_up);  
                    $update_stmt->bindParam(':xl3', $xl3_up);  
                    $update_stmt->bindParam(':xl4', $xl4_up);  
                    $update_stmt->bindParam(':xl5', $xl5_up);
                    $update_stmt->bindParam(':xl6', $xl6_up);
                    $update_stmt->bindParam(':xl7', $xl7_up);

                    $update_stmt->bindParam(':xl21', $xl21_up);  
                    $update_stmt->bindParam(':xl22', $xl22_up);  
                    $update_stmt->bindParam(':xl23', $xl23_up);  
                    $update_stmt->bindParam(':xl24', $xl24_up);  
                    $update_stmt->bindParam(':xl25', $xl25_up);
                    $update_stmt->bindParam(':xl26', $xl26_up);
                    $update_stmt->bindParam(':xl27', $xl27_up);

                    $update_stmt->bindParam(':xl31', $xl31_up);  
                    $update_stmt->bindParam(':xl32', $xl32_up);  
                    $update_stmt->bindParam(':xl33', $xl33_up);  
                    $update_stmt->bindParam(':xl34', $xl34_up);  
                    $update_stmt->bindParam(':xl35', $xl35_up);
                    $update_stmt->bindParam(':xl36', $xl36_up);
                    $update_stmt->bindParam(':xl37', $xl37_up);

                    $update_stmt->bindParam(':result1', $result_v1_up);  
                    $update_stmt->bindParam(':result2', $result_v2_up);  
                    $update_stmt->bindParam(':result3', $result_v3_up);  
                    $update_stmt->bindParam(':result4', $result_v4_up);  
                    $update_stmt->bindParam(':result5', $result_v5_up);
                    $update_stmt->bindParam(':result6', $result_v6_up);

                    $update_stmt->bindParam(':np', $name_op_up);
                    $update_stmt->bindParam(':nt', $new_ptc_up);
                    $update_stmt->bindParam(':tm', $timeing_up);
                    $update_stmt->bindParam(':si1', $size_v1_up);
                    $update_stmt->bindParam(':si2', $size_v2_up);
                    $update_stmt->bindParam(':si3', $size_v3_up);
                    $update_stmt->bindParam(':si4', $size_v4_up);
                    $update_stmt->bindParam(':si5', $size_v5_up);
                    $update_stmt->bindParam(':si6', $size_v6_up);
                    $update_stmt->bindParam(':si7', $size_v7_up);
                    $update_stmt->bindParam(':si8', $size_v8_up);
                    
                    $update_stmt->bindParam(':onp1', $on_pdv1_up);
                    $update_stmt->bindParam(':onp2', $on_pdv2_up);
                    $update_stmt->bindParam(':onp3', $on_pdv3_up);
                    $update_stmt->bindParam(':onp4', $on_pdv4_up);
                    $update_stmt->bindParam(':onp5', $on_pdv5_up);
                    $update_stmt->bindParam(':onp6', $on_pdv6_up);
                    $update_stmt->bindParam(':onp7', $on_pdv7_up);
                    $update_stmt->bindParam(':onp8', $on_pdv8_up);

                    $update_stmt->bindParam(':od1', $od_v1_up);
                    $update_stmt->bindParam(':od2', $od_v2_up);
                    $update_stmt->bindParam(':od3', $od_v3_up);
                    $update_stmt->bindParam(':od4', $od_v4_up);
                    $update_stmt->bindParam(':od5', $od_v5_up);
                    $update_stmt->bindParam(':od6', $od_v6_up);
                    $update_stmt->bindParam(':od7', $od_v7_up);
                    $update_stmt->bindParam(':od8', $od_v8_up);

                    $update_stmt->bindParam(':if_1', $if_v1_up);
                    $update_stmt->bindParam(':if_2', $if_v2_up);
                    $update_stmt->bindParam(':if_3', $if_v3_up);
                    $update_stmt->bindParam(':if_4', $if_v4_up);
                    $update_stmt->bindParam(':if_5', $if_v5_up);
                    $update_stmt->bindParam(':if_6', $if_v6_up);
                    $update_stmt->bindParam(':if_7', $if_v7_up);
                    $update_stmt->bindParam(':if_8', $if_v8_up);

                    $update_stmt->bindParam(':mer1', $mer_v1_up);
                    $update_stmt->bindParam(':mer2', $mer_v2_up);
                    $update_stmt->bindParam(':mer3', $mer_v3_up);
                    $update_stmt->bindParam(':mer4', $mer_v4_up);
                    $update_stmt->bindParam(':mer5', $mer_v5_up);
                    $update_stmt->bindParam(':mer6', $mer_v6_up);
                    $update_stmt->bindParam(':mer7', $mer_v7_up);
                    $update_stmt->bindParam(':mer8', $mer_v8_up);

                    $update_stmt->bindParam(':cut1', $cut_v1_up);
                    $update_stmt->bindParam(':cut2', $cut_v2_up);
                    $update_stmt->bindParam(':cut3', $cut_v3_up);
                    $update_stmt->bindParam(':cut4', $cut_v4_up);
                    $update_stmt->bindParam(':cut5', $cut_v5_up);
                    $update_stmt->bindParam(':cut6', $cut_v6_up);
                    $update_stmt->bindParam(':cut7', $cut_v7_up);
                    $update_stmt->bindParam(':cut8', $cut_v8_up);

                    $update_stmt->bindParam(':ct1', $cuttrue_v1_up);
                    $update_stmt->bindParam(':ct2', $cuttrue_v2_up);
                    $update_stmt->bindParam(':ct3', $cuttrue_v3_up);
                    $update_stmt->bindParam(':ct4', $cuttrue_v4_up);
                    $update_stmt->bindParam(':ct5', $cuttrue_v5_up);
                    $update_stmt->bindParam(':ct6', $cuttrue_v6_up);
                    $update_stmt->bindParam(':ct7', $cuttrue_v7_up);
                    $update_stmt->bindParam(':ct8', $cuttrue_v8_up);

                    $update_stmt->bindParam(':dt', $details_up);
                    $update_stmt->bindParam(':dt1', $details_v1_up);
                    $update_stmt->bindParam(':dt2', $details_v2_up);
                    $update_stmt->bindParam(':dt3', $details_v3_up);
                    $update_stmt->bindParam(':dt4', $details_v4_up);
                    $update_stmt->bindParam(':dt5', $details_v5_up);
                    $update_stmt->bindParam(':dt6', $details_v6_up);
                    $update_stmt->bindParam(':dt7', $details_v7_up);
                    $update_stmt->bindParam(':dt8', $details_v8_up);
                    
                    $update_stmt->bindParam(':dv1', $detv1_up);
                    $update_stmt->bindParam(':dv2', $detv2_up);
                    $update_stmt->bindParam(':dv3', $detv3_up);
                    $update_stmt->bindParam(':dv4', $detv4_up);
                    $update_stmt->bindParam(':dv5', $detv5_up);
                    $update_stmt->bindParam(':dv6', $detv6_up);
                    $update_stmt->bindParam(':dv7', $detv7_up);
                    $update_stmt->bindParam(':dv8', $detv8_up);

                    $update_stmt->bindParam(':p1', $pin1_up);
                    $update_stmt->bindParam(':p2', $pin2_up);
                    $update_stmt->bindParam(':pa1', $pack1_up);
                    $update_stmt->bindParam(':pa2', $pack2_up);

                    $update_stmt->bindParam(':note', $note_up);

                    

                    $update_stmt->bindParam(':id', $id);

                    if ($update_stmt->execute()) {
                        $updateMsg = "Record update successfully...";
                        header("refresh:2;index.php");
                    }
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <?php include 'nav.php' ?>
</head>
<body>
<br>
<br>
    <div class="container">
    <div class="display-5 text-center">แก้ไขใบผลิต</div>

    <?php 
         if (isset($errorMsg)) {
    ?>
        <div class="alert alert-danger">
            <strong>Wrong! <?php echo $errorMsg; ?></strong>
        </div>
    <?php } ?>
    

    <?php 
         if (isset($updateMsg)) {
    ?>
        <div class="alert alert-success">
            <strong>Success! <?php echo $updateMsg; ?></strong>
        </div>
    <?php } ?>

    <div class="container d-flex justify-content-center">
         <form method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">ชื่องาน</label>
                    <input type="text" name="txt_name_op" class="form-control" value="<?php echo $name_op; ?>">

                </div>
                

                <div class="col">
                    <label class="form-label">รหัส FN</label>
                    <input type="text" name="txt_id" class="form-control" value="<?php echo $id; ?>">
                </div>
                

                <div class="col">
                    <label class="form-label">กำหนดส่ง</label>
                    <input type="date" name="txt_timeing" class="form-control" value="<?php echo $timeing; ?>">
                </div>
            </div>

        <div class="row mb-3">
            <div class="col">
                    <label class="form-label">NEW PTC</label>
                    <input type="text" name="txt_new_ptc" class="form-control" value="<?php echo $new_ptc; ?>">
                </div>
        </div>

        

        <div class="row 3">
            <div class="col">
                    <label class="form-label d-block text-center" style="font-size: larger; color: back;">Size</label>
                    <select name="txt_size_v1" class="form-control">
                    <option value=""selected >เลือกไซส์</option>
                    <option value="ไซส์ SS ">SS</option>
                    <option value="ไซส์ S ">S</option>
                    <option value="ไซส์ L ">L</option>
                    <option value="ไซส์ XL ">XL</option>
                    <option value="ไซส์ 2XL ">2XL</option>
                    <option value="ไซส์ 3XL ">3XL</option></select>
            </div>

            <div class="col-2">
                    <label class="form-label d-block text-center" style="font-size: larger; color: back;">รหัสสินค้า</label>
                    <input type="text" name="txt_on_pdv1" class="form-control" value="<?php echo $on_pdv1; ?>">
                    <input type="text" name="txt_on_pdv2" class="form-control" value="<?php echo $on_pdv2; ?>">
                    <input type="text" name="txt_on_pdv3" class="form-control" value="<?php echo $on_pdv3; ?>">
                    <input type="text" name="txt_on_pdv4" class="form-control" value="<?php echo $on_pdv4; ?>">
                    <input type="text" name="txt_on_pdv5" class="form-control" value="<?php echo $on_pdv5; ?>">
                    <input type="text" name="txt_on_pdv6" class="form-control" value="<?php echo $on_pdv6; ?>">
                    <input type="text" name="txt_on_pdv7" class="form-control" value="<?php echo $on_pdv7; ?>">
                    <input type="text" name="txt_on_pdv8" class="form-control" value="<?php echo $on_pdv8; ?>">

            </div>

            <div class="col">
                    <label class="form-label d-block text-center" style="font-size: larger; color: back;">ORDER</label>
                    <input type="text" name="txt_od_v1" class="form-control" value="<?php echo $od_v1; ?>">
                    <input type="text" name="txt_od_v2" class="form-control" value="<?php echo $od_v2; ?>">
                    <input type="text" name="txt_od_v3" class="form-control" value="<?php echo $od_v3; ?>">
                    <input type="text" name="txt_od_v4" class="form-control" value="<?php echo $od_v4; ?>">
                    <input type="text" name="txt_od_v5" class="form-control" value="<?php echo $od_v5; ?>">
                    <input type="text" name="txt_od_v6" class="form-control" value="<?php echo $od_v6; ?>">
                    <input type="text" name="txt_od_v7" class="form-control" value="<?php echo $od_v7; ?>">
                    <input type="text" name="txt_od_v8" class="form-control" value="<?php echo $od_v8; ?>">
            </div>

            <div class="col">
                    <label class="form-label d-block text-center" style="font-size: larger; color: back;">เผื่อ</label>
                    <input type="text" name="txt_if_v1" class="form-control" value="<?php echo $if_v1; ?>">
                    <input type="text" name="txt_if_v2" class="form-control" value="<?php echo $if_v2; ?>">
                    <input type="text" name="txt_if_v3" class="form-control" value="<?php echo $if_v3; ?>">
                    <input type="text" name="txt_if_v4" class="form-control" value="<?php echo $if_v4; ?>">
                    <input type="text" name="txt_if_v5" class="form-control" value="<?php echo $if_v5; ?>">
                    <input type="text" name="txt_if_v6" class="form-control" value="<?php echo $if_v6; ?>">
                    <input type="text" name="txt_if_v7" class="form-control" value="<?php echo $if_v7; ?>">
                    <input type="text" name="txt_if_v8" class="form-control" value="<?php echo $if_v8; ?>">

            </div>

            <div class="col">
                    <label class="form-label d-block text-center" style="font-size: larger; color: back;">เมอร์เก็บ</label>
                    <input type="text" name="txt_mer_v1" class="form-control" value="<?php echo $mer_v1; ?>">
                    <input type="text" name="txt_mer_v2" class="form-control" value="<?php echo $mer_v2; ?>">
                    <input type="text" name="txt_mer_v3" class="form-control" value="<?php echo $mer_v3; ?>">
                    <input type="text" name="txt_mer_v4" class="form-control" value="<?php echo $mer_v4; ?>">
                    <input type="text" name="txt_mer_v5" class="form-control" value="<?php echo $mer_v5; ?>">
                    <input type="text" name="txt_mer_v6" class="form-control" value="<?php echo $mer_v6; ?>">
                    <input type="text" name="txt_mer_v7" class="form-control" value="<?php echo $mer_v7; ?>">
                    <input type="text" name="txt_mer_v8" class="form-control" value="<?php echo $mer_v8; ?>">
            </div>

            <div class="col">
                    <label class="form-label d-block text-center" style="font-size: larger; color: back;">CUT</label>
                    <input type="text" name="txt_cut_v1" class="form-control" value="<?php echo $cut_v1; ?>">
                    <input type="text" name="txt_cut_v2" class="form-control" value="<?php echo $cut_v2; ?>">
                    <input type="text" name="txt_cut_v3" class="form-control" value="<?php echo $cut_v3; ?>">
                    <input type="text" name="txt_cut_v4" class="form-control" value="<?php echo $cut_v4; ?>">
                    <input type="text" name="txt_cut_v5" class="form-control" value="<?php echo $cut_v5; ?>">
                    <input type="text" name="txt_cut_v6" class="form-control" value="<?php echo $cut_v6; ?>">
                    <input type="text" name="txt_cut_v7" class="form-control" value="<?php echo $cut_v7; ?>">
                    <input type="text" name="txt_cut_v8" class="form-control" value="<?php echo $cut_v8; ?>">
            </div>

            <div class="col">
                    <label class="form-label d-block text-center" style="font-size: larger; color: back;">ตัดจริง</label>  
                    <input type="text" name="txt_cuttrue_v1" class="form-control" value="<?php echo $cuttrue_v1; ?>">
                    <input type="text" name="txt_cuttrue_v2" class="form-control" value="<?php echo $cuttrue_v2; ?>">
                    <input type="text" name="txt_cuttrue_v3" class="form-control" value="<?php echo $cuttrue_v3; ?>">
                    <input type="text" name="txt_cuttrue_v4" class="form-control" value="<?php echo $cuttrue_v4; ?>">
                    <input type="text" name="txt_cuttrue_v5" class="form-control" value="<?php echo $cuttrue_v5; ?>">
                    <input type="text" name="txt_cuttrue_v6" class="form-control" value="<?php echo $cuttrue_v6; ?>">
                    <input type="text" name="txt_cuttrue_v7" class="form-control" value="<?php echo $cuttrue_v7; ?>">
                    <input type="text" name="txt_cuttrue_v8" class="form-control" value="<?php echo $cuttrue_v8; ?>">
            </div>
         </div>
         <br>

         <div class="row 3">
            <div class="col narrow-input-1">
                <label class="form-label d-block text-center">รายละเอียดงาน</label>
                <textarea class="form-control equal-size wide-input" name="txt_details" rows="16"><?php echo $details; ?></textarea>
            </div>

            <div class="col narrow-input-2">
                <label class="form-label d-block text-center">อุปกรณ์</label>
                <input type="text" name="txt_details_v1" class="form-control equal-size wide-input-1" value="<?php echo $details_v1; ?>">
                <input type="text" name="txt_details_v2" class="form-control equal-size wide-input-1" value="<?php echo $details_v2; ?>">
                <input type="text" name="txt_details_v3" class="form-control equal-size wide-input-1" value="<?php echo $details_v3; ?>">
                <input type="text" name="txt_details_v4" class="form-control equal-size wide-input-1" value="<?php echo $details_v4; ?>">
                <input type="text" name="txt_details_v5" class="form-control equal-size wide-input-1" value="<?php echo $details_v5; ?>">
                <input type="text" name="txt_details_v6" class="form-control equal-size wide-input-1" value="<?php echo $details_v6; ?>">
                <input type="text" name="txt_details_v7" class="form-control equal-size wide-input-1" value="<?php echo $details_v7; ?>">
                <input type="text" name="txt_details_v8" class="form-control equal-size wide-input-1" value="<?php echo $details_v8; ?>">
            </div>

            <div class="col table-cell">
                <label class="form-label d-block text-right">จำนวน</label>
                <input type="text" name="txt_detv1" class="form-control equal-size wide-input-2" value="<?php echo $detv1; ?>">
                <input type="text" name="txt_detv2" class="form-control equal-size wide-input-2" value="<?php echo $detv2; ?>">
                <input type="text" name="txt_detv3" class="form-control equal-size wide-input-2" value="<?php echo $detv3; ?>">
                <input type="text" name="txt_detv4" class="form-control equal-size wide-input-2" value="<?php echo $detv4; ?>">
                <input type="text" name="txt_detv5" class="form-control equal-size wide-input-2" value="<?php echo $detv5; ?>">
                <input type="text" name="txt_detv6" class="form-control equal-size wide-input-2" value="<?php echo $detv6; ?>">
                <input type="text" name="txt_detv7" class="form-control equal-size wide-input-2" value="<?php echo $detv7; ?>">
                <input type="text" name="txt_detv8" class="form-control equal-size wide-input-2" value="<?php echo $detv8; ?>">

            </div>

            <div class="row mb-3">
            <div class="col">
                    <label class="form-label">งานปัก</label>
                    <input type="text" name="txt_pin1" class="form-control" value="<?php echo $pin1; ?>">
                    <input type="text" name="txt_pin2" class="form-control" value="<?php echo $pin2; ?>">
            </div>

            <div class="col">
                    <label class="form-label">อุปกรณ์แพค</label>
                    <input type="text" name="txt_pack1" class="form-control" value="<?php echo $pack1; ?>">
                    <input type="text" name="txt_pack2" class="form-control" value="<?php echo $pack2; ?>">
            </div>

    <div style="margin-top: 20px;"></div>
        <table style="width: 100%;">
            <tr>
                <th style="width: 300px; text-align: center;">ตำแหน่ง(หน่วยวัดเป็นนิ้ว)/ไซส์</th>
                <th style="width: 70px; text-align: center;">SS</th>
                <th style="width: 70px; text-align: center;">S</th>
                <th style="width: 70px; text-align: center;">M</th>
                <th style="width: 70px; text-align: center;">L</th>
                <th style="width: 70px; text-align: center;">XL</th>
                <th style="width: 70px; text-align: center;">2XL</th>
                <th style="width: 70px; text-align: center;">3XL</th>
            </tr>
            <tr>
                <td style="padding:5px;" >ไหล่กว้าง วัดรวม</td>
                <td><input type="text" name="txt_ss1" class="form-control"  style="width: 70%;" value="<?php echo $ss1; ?>"></td>
                <td><input type="text" name="txt_s1" class="form-control"  style="width: 70%;" value="<?php echo $s1; ?>"></td>
                <td><input type="text" name="txt_m1" class="form-control"  style="width: 70%;" value="<?php echo $m1; ?>"></td>
                <td><input type="text" name="txt_l1" class="form-control"  style="width: 70%;" value="<?php echo $l1; ?>"></td>
                <td><input type="text" name="txt_xl1" class="form-control"  style="width: 70%;" value="<?php echo $xl1; ?>"></td>
                <td><input type="text" name="txt_xl21" class="form-control"  style="width: 70%;" value="<?php echo $xl21; ?>"></td>
                <td><input type="text" name="txt_xl31" class="form-control"  style="width: 70%;" value="<?php echo $xl31; ?>"></td>

        
            </tr>
            <tr>
                <td style="padding: 5px;">อกกว้าง วัดต่ำจากรักแร้ 1"</td>
                <td><input type="text" name="txt_ss2" class="form-control"  style="width: 70%;" value="<?php echo $ss2; ?>"></td>
                <td><input type="text" name="txt_s2" class="form-control"  style="width: 70%;" value="<?php echo $s2; ?>"></td>
                <td><input type="text" name="txt_m2" class="form-control"  style="width: 70%;" value="<?php echo $m2; ?>"></td>
                <td><input type="text" name="txt_l2" class="form-control"  style="width: 70%;" value="<?php echo $l2; ?>"></td>
                <td><input type="text" name="txt_xl2" class="form-control"  style="width: 70%;" value="<?php echo $xl2; ?>"></td>
                <td><input type="text" name="txt_xl22" class="form-control"  style="width: 70%;" value="<?php echo $xl22; ?>"></td>
                <td><input type="text" name="txt_xl32" class="form-control"  style="width: 70%;" value="<?php echo $xl32; ?>"></td>
            </tr>
            <tr>
                <td style="padding: 5px;">ความยาวจากข้างคอ</td>
                <td><input type="text" name="txt_ss3" class="form-control"  style="width: 70%;" value="<?php echo $ss3; ?>"></td>
                <td><input type="text" name="txt_s3" class="form-control"  style="width: 70%;" value="<?php echo $s3; ?>"></td>
                <td><input type="text" name="txt_m3" class="form-control"  style="width: 70%;" value="<?php echo $m3; ?>"></td>
                <td><input type="text" name="txt_l3" class="form-control"  style="width: 70%;" value="<?php echo $l3; ?>"></td>
                <td><input type="text" name="txt_xl3" class="form-control"  style="width: 70%;" value="<?php echo $xl3; ?>"></td>
                <td><input type="text" name="txt_xl23" class="form-control"  style="width: 70%;" value="<?php echo $xl23; ?>"></td>
                <td><input type="text" name="txt_xl33" class="form-control"  style="width: 70%;" value="<?php echo $xl34; ?>"></td>
            </tr>
            <tr>
                <td style="padding: 5px;">แขนยาวจากไหล่</td>
                <td><input type="text" name="txt_ss4" class="form-control"  style="width: 70%;" value="<?php echo $ss4; ?>"></td>
                <td><input type="text" name="txt_s4" class="form-control"  style="width: 70%;" value="<?php echo $s4; ?>"></td>
                <td><input type="text" name="txt_m4" class="form-control"  style="width: 70%;" value="<?php echo $m4; ?>"></td>
                <td><input type="text" name="txt_l4" class="form-control"  style="width: 70%;" value="<?php echo $l4; ?>"></td>
                <td><input type="text" name="txt_xl4" class="form-control"  style="width: 70%;" value="<?php echo $xl4; ?>"></td>
                <td><input type="text" name="txt_xl24" class="form-control"  style="width: 70%;" value="<?php echo $xl24; ?>"></td>
                <td><input type="text" name="txt_xl34" class="form-control"  style="width: 70%;" value="<?php echo $xl34; ?>"></td>
            </tr>
            <tr>
                <td style="padding: 5px;">ปลายแขนกว้างสำเร็จ</td>
                <td><input type="text" name="txt_ss5" class="form-control"  style="width: 70%;" value="<?php echo $ss5; ?>"></td>
                <td><input type="text" name="txt_s5" class="form-control"  style="width: 70%;" value="<?php echo $s5; ?>"></td>
                <td><input type="text" name="txt_m5" class="form-control"  style="width: 70%;" value="<?php echo $m5; ?>"></td>
                <td><input type="text" name="txt_l5" class="form-control"  style="width: 70%;" value="<?php echo $l5; ?>"></td>
                <td><input type="text" name="txt_xl5" class="form-control"  style="width: 70%;" value="<?php echo $xl5; ?>"></td>
                <td><input type="text" name="txt_xl25" class="form-control"  style="width: 70%;" value="<?php echo $xl25; ?>"></td>
                <td><input type="text" name="txt_xl35" class="form-control"  style="width: 70%;" value="<?php echo $xl35; ?>"></td>
            </tr>
            <tr>
                <td style="padding: 5px;">ขนาดปกทอ (ขนาดปกใหม่)</td>
                <td><input type="text" name="txt_ss6" class="form-control"  style="width: 70%;" value="<?php echo $ss6; ?>"></td>
                <td><input type="text" name="txt_s6" class="form-control"  style="width: 70%;" value="<?php echo $s6; ?>"></td>
                <td><input type="text" name="txt_m6" class="form-control"  style="width: 70%;" value="<?php echo $m6; ?>"></td>
                <td><input type="text" name="txt_l6" class="form-control"  style="width: 70%;" value="<?php echo $l6; ?>"></td>
                <td><input type="text" name="txt_xl6" class="form-control"  style="width: 70%;" value="<?php echo $xl6; ?>"></td>
                <td><input type="text" name="txt_xl26" class="form-control"  style="width: 70%;" value="<?php echo $xl26; ?>"></td>
                <td><input type="text" name="txt_xl36" class="form-control"  style="width: 70%;" value="<?php echo $xl36; ?>"></td>
            </tr>
            <tr>
                <td style="padding: 5px;">สาปโปโล กว้าง*ยาว</td>
                <td><input type="text" name="txt_ss7" class="form-control"  style="width: 70%;" value="<?php echo $ss7; ?>"></td>
                <td><input type="text" name="txt_s7" class="form-control"  style="width: 70%;" value="<?php echo $s7; ?>"></td>
                <td><input type="text" name="txt_m7" class="form-control"  style="width: 70%;" value="<?php echo $m7; ?>"></td>
                <td><input type="text" name="txt_l7" class="form-control"  style="width: 70%;" value="<?php echo $l7; ?>"></td>
                <td><input type="text" name="txt_xl7" class="form-control"  style="width: 70%;" value="<?php echo $xl7; ?>"></td>
                <td><input type="text" name="txt_xl27" class="form-control"  style="width: 70%;" value="<?php echo $xl27; ?>"></td>
                <td><input type="text" name="txt_xl37" class="form-control"  style="width: 70%;" value="<?php echo $xl37; ?>"></td>
            </tr>
            <!-- เพิ่มแถวอื่นๆ ตามที่ต้องการ -->
        </table>
        <div style="margin-bottom: 20px;"></div>
            <div class="row 3">
                <label class="form-label d-block text-left">สิ่งที่ส่งไปด้วย</label>
                <textarea  type="text" name="txt_note" class="form-control" value="<?php echo $note; ?>"></textarea>

            </div>
        </div>


        </div>



        
    </div>
                        </select>
                    </div>
                </div>

            </div>
            
            <div class="form-group text-center">
                <div class="col-md-12 mt-3">
                    <input type="submit" name="btn_update" class="btn btn-success" value="แก้ไขเสร็จสิ้น">
                    <a href="index.php" class="btn btn-danger">ยกเลิก</a>
                </div>
            </div>
<style>

input.blue-background {
        background-color: #0000ff; /* สีน้ำเงิน */
    }
/* สีเมื่อเมาส์ชี้ไปที่ input */
    input:hover {
        border: 5px solid #007bff; /* สีเข้มเมื่อ hover */
    }

    /* สีเมื่อ input อยู่ในสถานะ active (เมื่อคลิก) */
    input:active {
        border: 5px solid #ff5733; /* สีเข้มเมื่อ active (คลิก) */
    }

    /* สีเมื่อ input มีการเลือก (focus) */
    input:focus {
        border: 5px solid #28a745; /* สีเข้มเมื่อ focus */
    }

    .equal-size {
        height: 50px; /* ปรับความสูงของ input ทุกช่องให้เหมือนกัน */
    }

    /* กำหนดความกว้างเพิ่มเติมเฉพาะช่อง "รายละเอียดงาน" */
    .wide-input {
        width: 380px; /* ปรับความกว้างของช่อง "รายละเอียดงาน" เป็น 300px */
    }
    
    .wide-input-1 {
        width: 300px; /* ปรับความกว้างของช่อง "รายละเอียดงาน" เป็น 300px */
    }
    .wide-input-2 {
        width: 50px; /* ปรับความกว้างของช่อง "รายละเอียดงาน" เป็น 300px */
    }

    .narrow-input-1 {
        margin-right: 220px; /* ปรับระยะห่างด้านขวาของช่อง "อุปกรณ์" */
    }

    .narrow-input-2 {
        margin-right: 50px; /* ปรับระยะห่างด้านขวาของช่อง "อุปกรณ์" */
    }

    .row {
        display: flex;
        justify-content: center; /* จัดให้อยู่ตรงกลางแนวนอน */
       
    }

    .table-cell {
        display: table-cell;
        vertical-align: middle;
    }

    .table-cell input {
        text-align: center; /* จัดให้อยู่ทางขวา */
        margin-left: auto; /* ขยับไปทางขวา */
    }

    
</style>

    </form>

    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>