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
        $ks_up = $_REQUEST['txt_ks'];
        $timeing_up = $_REQUEST['txt_timeing'];

        $size_v1_up = $_REQUEST['txt_size_v1'];
        $size_v2_up = $_REQUEST['txt_size_v2'];
        $size_v3_up = $_REQUEST['txt_size_v3'];
        $size_v4_up = $_REQUEST['txt_size_v4'];
        $size_v5_up = $_REQUEST['txt_size_v5'];
        $size_v6_up = $_REQUEST['txt_size_v6'];
        $size_v7_up = $_REQUEST['txt_size_v7'];
        $size_v8_up = $_REQUEST['txt_size_v8'];
        $size_v9_up = $_REQUEST['txt_size_v9'];
        $size_v10_up = $_REQUEST['txt_size_v10'];

        
        $on_pdv1_up = $_REQUEST['txt_on_pdv1'];
        $on_pdv2_up = $_REQUEST['txt_on_pdv2'];
        $on_pdv3_up = $_REQUEST['txt_on_pdv3'];
        $on_pdv4_up = $_REQUEST['txt_on_pdv4'];
        $on_pdv5_up = $_REQUEST['txt_on_pdv5'];
        $on_pdv6_up = $_REQUEST['txt_on_pdv6'];
        $on_pdv7_up = $_REQUEST['txt_on_pdv7'];
        $on_pdv8_up = $_REQUEST['txt_on_pdv8'];
        $on_pdv9_up = $_REQUEST['txt_on_pdv9'];
        $on_pdv10_up = $_REQUEST['txt_on_pdv10'];

        $od_v0_up = $_REQUEST['txt_od_v0'];
        $od_v1_up = $_REQUEST['txt_od_v1'];
        $od_v2_up = $_REQUEST['txt_od_v2'];
        $od_v3_up = $_REQUEST['txt_od_v3'];
        $od_v4_up = $_REQUEST['txt_od_v4'];
        $od_v5_up = $_REQUEST['txt_od_v5'];
        $od_v6_up = $_REQUEST['txt_od_v6'];
        $od_v7_up = $_REQUEST['txt_od_v7'];
        $od_v8_up = $_REQUEST['txt_od_v8'];
        $od_v9_up = $_REQUEST['txt_od_v9'];
        $od_v10_up = $_REQUEST['txt_od_v10'];

        $if_v0_up = $_REQUEST['txt_if_v0'];
        $if_v1_up = $_REQUEST['txt_if_v1'];
        $if_v2_up = $_REQUEST['txt_if_v2'];
        $if_v3_up = $_REQUEST['txt_if_v3'];
        $if_v4_up = $_REQUEST['txt_if_v4'];
        $if_v5_up = $_REQUEST['txt_if_v5'];
        $if_v6_up = $_REQUEST['txt_if_v6'];
        $if_v7_up = $_REQUEST['txt_if_v7'];
        $if_v8_up = $_REQUEST['txt_if_v8'];
        $if_v9_up = $_REQUEST['txt_if_v9'];
        $if_v10_up = $_REQUEST['txt_if_v10'];


        $cut_v1_up = $_REQUEST['txt_cut_v1'];
        $cut_v2_up = $_REQUEST['txt_cut_v2'];
        $cut_v3_up = $_REQUEST['txt_cut_v3'];
        $cut_v4_up = $_REQUEST['txt_cut_v4'];
        $cut_v5_up = $_REQUEST['txt_cut_v5'];
        $cut_v6_up = $_REQUEST['txt_cut_v6'];
        $cut_v7_up = $_REQUEST['txt_cut_v7'];
        $cut_v8_up = $_REQUEST['txt_cut_v8'];
        $cut_v9_up = $_REQUEST['txt_cut_v9'];
        $cut_v10_up = $_REQUEST['txt_cut_v10'];


        $cuttrue_v1_up = $_REQUEST['txt_cuttrue_v1'];
        $cuttrue_v2_up = $_REQUEST['txt_cuttrue_v2'];
        $cuttrue_v3_up = $_REQUEST['txt_cuttrue_v3'];
        $cuttrue_v4_up = $_REQUEST['txt_cuttrue_v4'];
        $cuttrue_v5_up = $_REQUEST['txt_cuttrue_v5'];
        $cuttrue_v6_up = $_REQUEST['txt_cuttrue_v6'];
        $cuttrue_v7_up = $_REQUEST['txt_cuttrue_v7'];
        $cuttrue_v8_up = $_REQUEST['txt_cuttrue_v8'];
        $cuttrue_v9_up = $_REQUEST['txt_cuttrue_v9'];
        $cuttrue_v10_up = $_REQUEST['txt_cuttrue_v10'];


        $details_up = $_REQUEST['txt_details'];
        $details_v1_up = $_REQUEST['txt_details_v1'];
        $details_v2_up = $_REQUEST['txt_details_v2'];
        $details_v3_up = $_REQUEST['txt_details_v3'];
        $details_v4_up = $_REQUEST['txt_details_v4'];
        $details_v5_up = $_REQUEST['txt_details_v5'];
        $details_v6_up = $_REQUEST['txt_details_v6'];
        $details_v7_up = $_REQUEST['txt_details_v7'];
        $details_v8_up = $_REQUEST['txt_details_v8'];
        $details_v9_up = $_REQUEST['txt_details_v9'];
        $details_v10_up = $_REQUEST['txt_details_v10'];
        $details_v11_up = $_REQUEST['txt_details_v11'];
        $details_v12_up = $_REQUEST['txt_details_v12'];
        $details_v13_up = $_REQUEST['txt_details_v13'];
        $details_v14_up = $_REQUEST['txt_details_v14'];
        $details_v15_up = $_REQUEST['txt_details_v15'];

        $nmdetails1_up = $_REQUEST['txt_nmdetails1'];
        $nmdetails2_up = $_REQUEST['txt_nmdetails2'];
        $nmdetails3_up = $_REQUEST['txt_nmdetails3'];
        $nmdetails4_up = $_REQUEST['txt_nmdetails4'];
        $nmdetails5_up = $_REQUEST['txt_nmdetails5'];
        $nmdetails6_up = $_REQUEST['txt_nmdetails6'];
        $nmdetails7_up = $_REQUEST['txt_nmdetails7'];
        $nmdetails8_up = $_REQUEST['txt_nmdetails8'];
        $nmdetails9_up = $_REQUEST['txt_nmdetails9'];
        $nmdetails10_up = $_REQUEST['txt_nmdetails10'];
        $nmdetails11_up = $_REQUEST['txt_nmdetails11'];
        $nmdetails12_up = $_REQUEST['txt_nmdetails12'];
        $nmdetails13_up = $_REQUEST['txt_nmdetails13'];
        $nmdetails14_up = $_REQUEST['txt_nmdetails14'];
        $nmdetails15_up = $_REQUEST['txt_nmdetails15'];

       
        $pin0_up = $_REQUEST['txt_pin0'];
        $pin1_up = $_REQUEST['txt_pin1'];
        $pin2_up = $_REQUEST['txt_pin2'];
        $pin3_up = $_REQUEST['txt_pin3'];
        $pin4_up = $_REQUEST['txt_pin4'];
        $pin5_up = $_REQUEST['txt_pin5'];


        $pack1_up = $_REQUEST['txt_pack1'];
        $pack2_up = $_REQUEST['txt_pack2'];
        $pack3_up = $_REQUEST['txt_pack3'];
        $pack4_up = $_REQUEST['txt_pack4'];
        $pack5_up = $_REQUEST['txt_pack5'];


        $size_details1_up = $_REQUEST['txt_size_details1'];
        $size_details2_up = $_REQUEST['txt_size_details2'];
        $size_details3_up = $_REQUEST['txt_size_details3'];
        $size_details4_up = $_REQUEST['txt_size_details4'];
        $size_details5_up = $_REQUEST['txt_size_details5'];
        $size_details6_up = $_REQUEST['txt_size_details6'];
        $size_details7_up = $_REQUEST['txt_size_details7'];
        $size_details8_up = $_REQUEST['txt_size_details8'];
        $size_details9_up = $_REQUEST['txt_size_details9'];
        $size_details10_up = $_REQUEST['txt_size_details10'];
        $size_details11_up = $_REQUEST['txt_size_details11'];
        $size_details12_up = $_REQUEST['txt_size_details12'];
        $size_details13_up = $_REQUEST['txt_size_details13'];
        $size_details14_up = $_REQUEST['txt_size_details14'];
        $size_details15_up = $_REQUEST['txt_size_details15'];

        $ss1_up = $_REQUEST['txt_ss1'];
        $ss2_up = $_REQUEST['txt_ss2'];
        $ss3_up = $_REQUEST['txt_ss3'];
        $ss4_up = $_REQUEST['txt_ss4'];
        $ss5_up = $_REQUEST['txt_ss5'];
        $ss6_up = $_REQUEST['txt_ss6'];
        $ss7_up = $_REQUEST['txt_ss7'];
        $ss8_up = $_REQUEST['txt_ss8'];
        $ss9_up = $_REQUEST['txt_ss9'];
        $ss10_up = $_REQUEST['txt_ss10'];
        $ss11_up = $_REQUEST['txt_ss11'];
        $ss12_up = $_REQUEST['txt_ss12'];
        $ss13_up = $_REQUEST['txt_ss13'];
        $ss14_up = $_REQUEST['txt_ss14'];
        $ss15_up = $_REQUEST['txt_ss15'];


        $s1_up = $_REQUEST['txt_s1'];
        $s2_up = $_REQUEST['txt_s2'];
        $s3_up = $_REQUEST['txt_s3'];
        $s4_up = $_REQUEST['txt_s4'];
        $s5_up = $_REQUEST['txt_s5'];
        $s6_up = $_REQUEST['txt_s6'];
        $s7_up = $_REQUEST['txt_s7'];
        $s8_up = $_REQUEST['txt_s8'];
        $s9_up = $_REQUEST['txt_s9'];
        $s10_up = $_REQUEST['txt_s10'];
        $s11_up = $_REQUEST['txt_s11'];
        $s12_up = $_REQUEST['txt_s12'];
        $s13_up = $_REQUEST['txt_s13'];
        $s14_up = $_REQUEST['txt_s14'];
        $s15_up = $_REQUEST['txt_s15'];

        $m1_up = $_REQUEST['txt_m1'];
        $m2_up = $_REQUEST['txt_m2'];
        $m3_up = $_REQUEST['txt_m3'];
        $m4_up = $_REQUEST['txt_m4'];
        $m5_up = $_REQUEST['txt_m5'];
        $m6_up = $_REQUEST['txt_m6'];
        $m7_up = $_REQUEST['txt_m7'];
        $m8_up = $_REQUEST['txt_m8'];
        $m9_up = $_REQUEST['txt_m9'];
        $m10_up = $_REQUEST['txt_m10'];
        $m11_up = $_REQUEST['txt_m11'];
        $m12_up = $_REQUEST['txt_m12'];
        $m13_up = $_REQUEST['txt_m13'];
        $m14_up = $_REQUEST['txt_m14'];
        $m15_up = $_REQUEST['txt_m15'];

        $l1_up = $_REQUEST['txt_l1'];
        $l2_up = $_REQUEST['txt_l2'];
        $l3_up = $_REQUEST['txt_l3'];
        $l4_up = $_REQUEST['txt_l4'];
        $l5_up = $_REQUEST['txt_l5'];
        $l6_up = $_REQUEST['txt_l6'];
        $l7_up = $_REQUEST['txt_l7'];
        $l8_up = $_REQUEST['txt_l8'];
        $l9_up = $_REQUEST['txt_l9'];
        $l10_up = $_REQUEST['txt_l10'];
        $l11_up = $_REQUEST['txt_l11'];
        $l12_up = $_REQUEST['txt_l12'];
        $l13_up = $_REQUEST['txt_l13'];
        $l14_up = $_REQUEST['txt_l14'];
        $l15_up = $_REQUEST['txt_l15'];

        $xl1_up = $_REQUEST['txt_xl1'];
        $xl2_up = $_REQUEST['txt_xl2'];
        $xl3_up = $_REQUEST['txt_xl3'];
        $xl4_up = $_REQUEST['txt_xl4'];
        $xl5_up = $_REQUEST['txt_xl5'];
        $xl6_up = $_REQUEST['txt_xl6'];
        $xl7_up = $_REQUEST['txt_xl7'];
        $xl8_up = $_REQUEST['txt_xl8'];
        $xl9_up = $_REQUEST['txt_xl9'];
        $xl10_up = $_REQUEST['txt_xl10'];
        $xl11_up = $_REQUEST['txt_xl11'];
        $xl12_up = $_REQUEST['txt_xl12'];
        $xl13_up = $_REQUEST['txt_xl13'];
        $xl14_up = $_REQUEST['txt_xl14'];
        $xl15_up = $_REQUEST['txt_xl15'];

        $xl21_up = $_REQUEST['txt_xl21'];
        $xl22_up = $_REQUEST['txt_xl22'];
        $xl23_up = $_REQUEST['txt_xl23'];
        $xl24_up = $_REQUEST['txt_xl24'];
        $xl25_up = $_REQUEST['txt_xl25'];
        $xl26_up = $_REQUEST['txt_xl26'];
        $xl27_up = $_REQUEST['txt_xl27'];
        $xl28_up = $_REQUEST['txt_xl28'];
        $xl29_up = $_REQUEST['txt_xl29'];
        $xl210_up = $_REQUEST['txt_xl210'];
        $xl211_up = $_REQUEST['txt_xl211'];
        $xl212_up = $_REQUEST['txt_xl212'];
        $xl213_up = $_REQUEST['txt_xl213'];
        $xl214_up = $_REQUEST['txt_xl214'];
        $xl215_up = $_REQUEST['txt_xl215'];

        $xl31_up = $_REQUEST['txt_xl31'];
        $xl32_up = $_REQUEST['txt_xl32'];
        $xl33_up = $_REQUEST['txt_xl33'];
        $xl34_up = $_REQUEST['txt_xl34'];
        $xl35_up = $_REQUEST['txt_xl35'];
        $xl36_up = $_REQUEST['txt_xl36'];
        $xl37_up = $_REQUEST['txt_xl37'];
        $xl38_up = $_REQUEST['txt_xl38'];
        $xl39_up = $_REQUEST['txt_xl39'];
        $xl310_up = $_REQUEST['txt_xl310'];
        $xl311_up = $_REQUEST['txt_xl311'];
        $xl312_up = $_REQUEST['txt_xl312'];
        $xl313_up = $_REQUEST['txt_xl313'];
        $xl314_up = $_REQUEST['txt_xl314'];
        $xl315_up = $_REQUEST['txt_xl315'];

        $xl41_up = $_REQUEST['txt_xl41'];
        $xl42_up = $_REQUEST['txt_xl42'];
        $xl43_up = $_REQUEST['txt_xl43'];
        $xl44_up = $_REQUEST['txt_xl44'];
        $xl45_up = $_REQUEST['txt_xl45'];
        $xl46_up = $_REQUEST['txt_xl46'];
        $xl47_up = $_REQUEST['txt_xl47'];
        $xl48_up = $_REQUEST['txt_xl48'];
        $xl49_up = $_REQUEST['txt_xl49'];
        $xl410_up = $_REQUEST['txt_xl410'];
        $xl411_up = $_REQUEST['txt_xl411'];
        $xl412_up = $_REQUEST['txt_xl412'];
        $xl413_up = $_REQUEST['txt_xl413'];
        $xl414_up = $_REQUEST['txt_xl414'];
        $xl415_up = $_REQUEST['txt_xl415'];

        $xl51_up = $_REQUEST['txt_xl51'];
        $xl52_up = $_REQUEST['txt_xl52'];
        $xl53_up = $_REQUEST['txt_xl53'];
        $xl54_up = $_REQUEST['txt_xl54'];
        $xl55_up = $_REQUEST['txt_xl55'];
        $xl56_up = $_REQUEST['txt_xl56'];
        $xl57_up = $_REQUEST['txt_xl57'];
        $xl58_up = $_REQUEST['txt_xl58'];
        $xl59_up = $_REQUEST['txt_xl59'];
        $xl510_up = $_REQUEST['txt_xl510'];
        $xl511_up = $_REQUEST['txt_xl511'];
        $xl512_up = $_REQUEST['txt_xl512'];
        $xl513_up = $_REQUEST['txt_xl513'];
        $xl514_up = $_REQUEST['txt_xl514'];
        $xl515_up = $_REQUEST['txt_xl515'];

        $xl61_up = $_REQUEST['txt_xl61'];
        $xl62_up = $_REQUEST['txt_xl62'];
        $xl63_up = $_REQUEST['txt_xl63'];
        $xl64_up = $_REQUEST['txt_xl64'];
        $xl65_up = $_REQUEST['txt_xl65'];
        $xl66_up = $_REQUEST['txt_xl66'];
        $xl67_up = $_REQUEST['txt_xl67'];
        $xl68_up = $_REQUEST['txt_xl68'];
        $xl69_up = $_REQUEST['txt_xl69'];
        $xl610_up = $_REQUEST['txt_xl610'];
        $xl611_up = $_REQUEST['txt_xl611'];
        $xl612_up = $_REQUEST['txt_xl612'];
        $xl613_up = $_REQUEST['txt_xl613'];
        $xl614_up = $_REQUEST['txt_xl614'];
        $xl615_up = $_REQUEST['txt_xl615'];
        
        $xl71_up = $_REQUEST['txt_xl71'];
        $xl72_up = $_REQUEST['txt_xl72'];
        $xl73_up = $_REQUEST['txt_xl73'];
        $xl74_up = $_REQUEST['txt_xl74'];
        $xl75_up = $_REQUEST['txt_xl75'];
        $xl76_up = $_REQUEST['txt_xl76'];
        $xl77_up = $_REQUEST['txt_xl77'];
        $xl78_up = $_REQUEST['txt_xl78'];
        $xl79_up = $_REQUEST['txt_xl79'];
        $xl710_up = $_REQUEST['txt_xl710'];
        $xl711_up = $_REQUEST['txt_xl711'];
        $xl712_up = $_REQUEST['txt_xl712'];
        $xl713_up = $_REQUEST['txt_xl713'];
        $xl714_up = $_REQUEST['txt_xl714'];
        $xl715_up = $_REQUEST['txt_xl715'];

        $nmpack1_up = $_REQUEST['txt_nmpack1'];
        $nmpack2_up = $_REQUEST['txt_nmpack2'];
        $nmpack3_up = $_REQUEST['txt_nmpack3'];
        $nmpack4_up = $_REQUEST['txt_nmpack4'];
        $nmpack5_up = $_REQUEST['txt_nmpack5'];

        $nes_up = $_REQUEST['txt_nes'];
        $nem_up = $_REQUEST['txt_nem'];
        $nemg_up = $_REQUEST['txt_nemg'];
        $timess_up = $_REQUEST['txt_timess'];
        $timem_up = $_REQUEST['txt_timem'];
        $timemg_up = $_REQUEST['txt_timemg'];
        $note_up = $_REQUEST['txt_note'];

        $detv1_up = $_POST['txt_detv1'];
        $detv2_up = $_POST['txt_detv2'];
        $detv3_up = $_POST['txt_detv3'];
        $detv4_up = $_POST['txt_detv4'];
        $detv5_up = $_POST['txt_detv5'];
        $detv6_up = $_POST['txt_detv6'];
        $detv7_up = $_POST['txt_detv7'];
        $detv8_up = $_POST['txt_detv8'];
        $detv9_up = $_POST['txt_detv9'];
        $detv10_up = $_POST['txt_detv10'];
        $detv11_up = $_POST['txt_detv11'];
        $detv12_up = $_POST['txt_detv12'];
        $detv13_up = $_POST['txt_detv13'];
        $detv14_up = $_POST['txt_detv14'];
        $detv15_up = $_POST['txt_detv15'];
        
        if (!empty($_REQUEST['ddl_new_ptc'])) {
            $new_ptc_up = $_REQUEST['ddl_new_ptc'];
        } elseif (!empty($_REQUEST['txt_new_ptc'])) {
            $new_ptc_up = $_REQUEST['txt_new_ptc'];
        } else {
            // กรณีที่ทั้ง 'ddl_new_ptc' และ 'txt_new_ptc' ไม่ได้รับค่า
            // ให้ทำอะไรตามความเหมาะสม เช่น กำหนดค่าเริ่มต้นหรือแจ้งเตือน
        }

        $result_v1_up = $od_v1 + $od_v2 + $od_v3 + $od_v4 + $od_v5 + $od_v6 + $od_v7 + $od_v8 + $od_v9 + $od_v10;
        $result_v2_up = $if_v1 + $if_v2 + $if_v3 + $if_v4 + $if_v5 + $if_v6 + $if_v7 + $if_v8 + $if_v9 + $if_v10;
        $result_v4_up = $cut_v1 + $cut_v2 + $cut_v3 + $cut_v4 + $cut_v5 + $cut_v6 + $cut_v7 + $cut_v8 + $cut_v9 + $cut_v10;
        $result_v5_up = $cuttrue_v1 + $cuttrue_v2 + $cuttrue_v3 + $cuttrue_v4 + $cuttrue_v5 + $cuttrue_v6 + $cuttrue_v7 + $cuttrue_v8 + $cuttrue_v9 + $cuttrue_v10;
        
        // บวกค่าทั้งหมดเข้าด้วยกัน
        $result_v6_up = $result_v1_up + $result_v2_up + $result_v4_up + $result_v5_up;
        
        $result_v1 = 0;
        $result_v2 = 0;
        $result_v4 = 0;
        $result_v5 = 0;
        $result_v6 = 0;
        
        $od_v1 = floatval($od_v1);
        $od_v2 = floatval($od_v2);
        $od_v3 = floatval($od_v3);
        $od_v4 = floatval($od_v4);
        $od_v5 = floatval($od_v5);
        $od_v6 = floatval($od_v6);
        $od_v7 = floatval($od_v7);
        $od_v8 = floatval($od_v8);
        $od_v9 = floatval($od_v9);
        $od_v10 = floatval($od_v10);
        
        $if_v1 = floatval($if_v1);
        $if_v2 = floatval($if_v2);
        $if_v3 = floatval($if_v3);
        $if_v4 = floatval($if_v4);
        $if_v5 = floatval($if_v5);
        $if_v6 = floatval($if_v6);
        $if_v7 = floatval($if_v7);
        $if_v8 = floatval($if_v8);
        $if_v9 = floatval($if_v9);
        $if_v10 = floatval($if_v10);
        
        $cut_v1 = floatval($cut_v1);
        $cut_v2 = floatval($cut_v2);
        $cut_v3 = floatval($cut_v3);
        $cut_v4 = floatval($cut_v4);
        $cut_v5 = floatval($cut_v5);
        $cut_v6 = floatval($cut_v6);
        $cut_v7 = floatval($cut_v7);
        $cut_v8 = floatval($cut_v8);
        $cut_v9 = floatval($cut_v9);
        $cut_v10 = floatval($cut_v10);
        
        $cuttrue_v1 = floatval($cuttrue_v1);
        $cuttrue_v2 = floatval($cuttrue_v2);
        $cuttrue_v3 = floatval($cuttrue_v3);
        $cuttrue_v4 = floatval($cuttrue_v4);
        $cuttrue_v5 = floatval($cuttrue_v5);
        $cuttrue_v6 = floatval($cuttrue_v6);
        $cuttrue_v7 = floatval($cuttrue_v7);
        $cuttrue_v8 = floatval($cuttrue_v8);
        $cuttrue_v9 = floatval($cuttrue_v9);
        $cuttrue_v10 = floatval($cuttrue_v10);
        

        
        // เขียนโค้ดในการบวกค่าตามปกติ
        $result_v1 = $od_v1 + $od_v2 + $od_v3 + $od_v4 + $od_v5 + $od_v6 + $od_v7 + $od_v8 + $od_v9 + $od_v10;
        $result_v2 = $if_v1 + $if_v2 + $if_v3 + $if_v4 + $if_v5 + $if_v6 + $if_v7 + $if_v8 + $if_v9 + $if_v10;
        $result_v4 = $cut_v1 + $cut_v2 + $cut_v3 + $cut_v4 + $cut_v5 + $cut_v6 + $cut_v7 + $cut_v8 + $cut_v9 + $cut_v10;
        $result_v5 = $cuttrue_v1 + $cuttrue_v2 + $cuttrue_v3 + $cuttrue_v4 + $cuttrue_v5 + $cuttrue_v6 + $cuttrue_v7 + $cuttrue_v8 + $cuttrue_v9 + $cuttrue_v10;
        
        // บวกค่าทั้งหมดเข้าด้วยกัน
        $result_v6 = $result_v1 + $result_v2 + $result_v4 + $result_v5;
        

        if (empty($name_op_up)) {
            $errorMsg = "กรุณากรอกข้อมูล";
        } 
        else {
            try {
                if (!isset($errorMsg)) {
                    $update_stmt = $db->prepare("UPDATE db_op SET  name_op = :np, new_ptc = :nt, ks = :ks, timeing = :tm, 
                    size_v1 = :si1, size_v2 = :si2, size_v3 = :si3, size_v4 = :si4, size_v5 = :si5, size_v6 = :si6, size_v7 = :si7, size_v8 = :si8, size_v9 = :si9, size_v10 = :si10,  
                    on_pdv1 = :onp1, on_pdv2 = :onp2, on_pdv3 = :onp3, on_pdv4 = :onp4, on_pdv5 = :onp5, on_pdv6 = :onp6, on_pdv7 = :onp7, on_pdv8 = :onp8, on_pdv9 = :onp9, on_pdv10 = :onp10, 
                    if_v0 = :if_0, if_v1 = :if_1, if_v2 = :if_2, if_v3 = :if_3, if_v4 = :if_4, if_v5 = :if_5, if_v6 = :if_6, if_v7 = :if_7, if_v8 = :if_8, if_v9 = :if_9, if_v10 = :if_10, 
                    od_v0 = :od0, od_v1 = :od1, od_v2 = :od2, od_v3 = :od3, od_v4 = :od4, od_v5 = :od5, od_v6 = :od6, od_v7 = :od7, od_v8 = :od8, od_v9 = :od9, od_v10 = :od10, 
                    cut_v1 = :cut1, cut_v2 = :cut2, cut_v3 = :cut3, cut_v4 = :cut4, cut_v5 = :cut5, cut_v6 = :cut6, cut_v7 = :cut7, cut_v8 = :cut8, cut_v9 = :cut9, cut_v10 = :cut10, 
                    cuttrue_v1 = :ct1, cuttrue_v2 = :ct2, cuttrue_v3 = :ct3, cuttrue_v4 = :ct4, cuttrue_v5 = :ct5, cuttrue_v6 = :ct6, cuttrue_v7 = :ct7, cuttrue_v8 = :ct8, cuttrue_v9 = :ct9, cuttrue_v10 = :ct10, 
                    result_v1 = :result1, result_v2 = :result2, result_v3 = :result3, result_v4 = :result4, result_v5 = :result5, result_v6 = :result6, 
                    details = :dt, details_v1 = :dt1, details_v2 = :dt2, details_v3 = :dt3, details_v4 = :dt4, details_v5 = :dt5, details_v6 = :dt6, details_v7 = :dt7, details_v8 = :dt8, details_v9 = :dt9, details_v10 = :dt10, 
                    details_v11 = :dt11, details_v12 = :dt12, details_v13 = :dt13, details_v14 = :dt14, details_v15 = :dt15,
                    nmdetails1 = :nd1, nmdetails2 = :nd2, nmdetails3 = :nd3, nmdetails4 = :nd4, nmdetails5 = :nd5, nmdetails6 = :nd6, nmdetails7 = :nd7, nmdetails8 = :nd8, nmdetails9 = :nd9, nmdetails10 = :nd10, 
                    nmdetails11 = :nd11, nmdetails12 = :nd12, nmdetails13 = :nd13, nmdetails14 = :nd14, nmdetails15 = :nd15,
                    detv1 = :dv1, detv2 = :dv2, detv3 = :dv3, detv4 = :dv4, detv5 = :dv5, detv6 = :dv6, detv7 = :dv7, detv8 = :dv8, detv9 = :dv9, detv10 = :dv10, 
                    detv11 = :dv11, detv12 = :dv12, detv13 = :dv13, detv14 = :dv14, detv15 = :dv15,
                    pin0 = :p, pin1 = :p1, pin2 = :p2, pin3 = :p3, pin4 = :p4, pin5 = :p5, pack1 = :pa1, pack2 = :pa2, pack3 = :pa3, pack4 = :pa4, pack5 = :pa5, 
                    nmpack1 = :nmp1, nmpack2 = :nmp2, nmpack3 = :nmp3, nmpack4 = :nmp4, nmpack5 = :nmp5, 
                    note = :ne, 
                    size_details1 = :sd1, size_details2 = :sd2, size_details3 = :sd3, size_details4 = :sd4, size_details5 = :sd5, size_details6 = :sd6, size_details7 = :sd7, size_details8 = :sd8, size_details9 = :sd9, size_details10 = :sd10, size_details11 = :sd11, size_details12 = :sd12, size_details13 = :sd13, size_details14 = :sd14, size_details15 = :sd15, 
                    ss1 = :ss1, ss2 = :ss2, ss3 = :ss3, ss4 = :ss4, ss5 = :ss5, ss6 = :ss6, ss7 = :ss7, ss8 = :ss8, ss9 = :ss9, ss10 = :ss10, ss11 = :ss11, ss12 = :ss12, ss13 = :ss13, ss14 = :ss14, ss15 = :ss15, 
                    s1 = :s1, s2 = :s2, s3 = :s3, s4 = :s4, s5 = :s5, s6 = :s6, s7 = :s7, s8 = :s8, s9 = :s9, s10 = :s10, s11 = :s11, s12 = :s12, s13 = :s13, s14 = :s14, s15 = :s15,  
                    m1 = :m1, m2 = :m2, m3 = :m3, m4 = :m4, m5 = :m5, m6 = :m6, m7 = :m7, m8 = :m8, m9 = :m9, m10 = :m10, m11 = :m11, m12 = :m12, m13 = :m13, m14 = :m14, m15 = :m15,  
                    l1 = :l1, l2 = :l2, l3 = :l3, l4 = :l4, l5 = :l5, l6 = :l6, l7 = :l7, l8 = :l8, l9 = :l9, l10 = :l10, l11 = :l11, l12 = :l12, l13 = :l13, l14 = :l14, l15 = :l15, 
                    xl1 = :xl1, xl2 = :xl2, xl3 = :xl3, xl4 = :xl4, xl5 = :xl5, xl6 = :xl6, xl7 = :xl7, xl8 = :xl8, xl9 = :xl9, xl10 = :xl10, xl11 = :xl11, xl12 = :xl12, xl13 = :xl13, xl14 = :xl14, xl15 = :xl15,  
                    xl21 = :xl21, xl22 = :xl22, xl23 = :xl23, xl24 = :xl24, xl25 = :xl25, xl26 = :xl26, xl27 = :xl27, xl28 = :xl28, xl29 = :xl29, xl210 = :xl210, xl211 = :xl211, xl212 = :xl212, xl213 = :xl213, xl214 = :xl214, xl215 = :xl215, 
                    xl31 = :xl31, xl32 = :xl32, xl33 = :xl33, xl34 = :xl34, xl35 = :xl35, xl36 = :xl36, xl37 = :xl37, xl38 = :xl38, xl39 = :xl39, xl310 = :xl310, xl311 = :xl311, xl312 = :xl312, xl313 = :xl313, xl314 = :xl314, xl315 = :xl315,  
                    xl41 = :xl41, xl42 = :xl42, xl43 = :xl43, xl44 = :xl44, xl45 = :xl45, xl46 = :xl46, xl47 = :xl47, xl48 = :xl48, xl49 = :xl49, xl410 = :xl410, xl411 = :xl411, xl412 = :xl412, xl413 = :xl413, xl414 = :xl414, xl415 = :xl415,  
                    xl51 = :xl51, xl52 = :xl52, xl53 = :xl53, xl54 = :xl54, xl55 = :xl55, xl56 = :xl56, xl57 = :xl57, xl58 = :xl58, xl59 = :xl59, xl510 = :xl510, xl511 = :xl511, xl512 = :xl512, xl513 = :xl513, xl514 = :xl514, xl515 = :xl515,  
                    xl61 = :xl61, xl62 = :xl62, xl63 = :xl63, xl64 = :xl64, xl65 = :xl65, xl66 = :xl66, xl67 = :xl67, xl68 = :xl68, xl69 = :xl69, xl610 = :xl610, xl611 = :xl611, xl612 = :xl612, xl613 = :xl613, xl614 = :xl614, xl615 = :xl615,                   
                    xl71 = :xl71, xl72 = :xl72, xl73 = :xl73, xl74 = :xl74, xl75 = :xl75, xl76 = :xl76, xl77 = :xl77, xl78 = :xl78, xl79 = :xl79, xl710 = :xl710, xl711 = :xl711, xl712 = :xl712, xl713 = :xl713, xl714 = :xl714, xl715 = :xl715, 
                    nes = :ns, nem = :nm, nemg = :nmg, timess = :tis, timem = :tim, timemg = :timg 

                    WHERE id = :id");



                $update_stmt->bindParam(':np', $name_op_up);
                $update_stmt->bindParam(':ks', $ks_up);

                $update_stmt->bindParam(':result1', $result_v1_up);  
                $update_stmt->bindParam(':result2', $result_v2_up);  
                $update_stmt->bindParam(':result3', $result_v3_up);  
                $update_stmt->bindParam(':result4', $result_v4_up);  
                $update_stmt->bindParam(':result5', $result_v5_up);
                $update_stmt->bindParam(':result6', $result_v6_up);          
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
                $update_stmt->bindParam(':si9', $size_v9_up);
                $update_stmt->bindParam(':si10', $size_v10_up);

                $update_stmt->bindParam(':onp1', $on_pdv1_up);
                $update_stmt->bindParam(':onp2', $on_pdv2_up);
                $update_stmt->bindParam(':onp3', $on_pdv3_up);
                $update_stmt->bindParam(':onp4', $on_pdv4_up);
                $update_stmt->bindParam(':onp5', $on_pdv5_up);
                $update_stmt->bindParam(':onp6', $on_pdv6_up);
                $update_stmt->bindParam(':onp7', $on_pdv7_up);
                $update_stmt->bindParam(':onp8', $on_pdv8_up);
                $update_stmt->bindParam(':onp9', $on_pdv9_up);
                $update_stmt->bindParam(':onp10', $on_pdv10_up);

                $update_stmt->bindParam(':od0', $od_v0_up);
                $update_stmt->bindParam(':od1', $od_v1_up);
                $update_stmt->bindParam(':od2', $od_v2_up);
                $update_stmt->bindParam(':od3', $od_v3_up);
                $update_stmt->bindParam(':od4', $od_v4_up);
                $update_stmt->bindParam(':od5', $od_v5_up);
                $update_stmt->bindParam(':od6', $od_v6_up);
                $update_stmt->bindParam(':od7', $od_v7_up);
                $update_stmt->bindParam(':od8', $od_v8_up);
                $update_stmt->bindParam(':od9', $od_v9_up);
                $update_stmt->bindParam(':od10', $od_v10_up);

                $update_stmt->bindParam(':if_0', $if_v0_up);
                $update_stmt->bindParam(':if_1', $if_v1_up);
                $update_stmt->bindParam(':if_2', $if_v2_up);
                $update_stmt->bindParam(':if_3', $if_v3_up);
                $update_stmt->bindParam(':if_4', $if_v4_up);
                $update_stmt->bindParam(':if_5', $if_v5_up);
                $update_stmt->bindParam(':if_6', $if_v6_up);
                $update_stmt->bindParam(':if_7', $if_v7_up);
                $update_stmt->bindParam(':if_8', $if_v8_up);
                $update_stmt->bindParam(':if_9', $if_v9_up);
                $update_stmt->bindParam(':if_10', $if_v10_up);


                $update_stmt->bindParam(':cut1', $cut_v1_up);
                $update_stmt->bindParam(':cut2', $cut_v2_up);
                $update_stmt->bindParam(':cut3', $cut_v3_up);
                $update_stmt->bindParam(':cut4', $cut_v4_up);
                $update_stmt->bindParam(':cut5', $cut_v5_up);
                $update_stmt->bindParam(':cut6', $cut_v6_up);
                $update_stmt->bindParam(':cut7', $cut_v7_up);
                $update_stmt->bindParam(':cut8', $cut_v8_up);
                $update_stmt->bindParam(':cut9', $cut_v9_up);
                $update_stmt->bindParam(':cut10', $cut_v10_up);


                $update_stmt->bindParam(':ct1', $cuttrue_v1_up);
                $update_stmt->bindParam(':ct2', $cuttrue_v2_up);
                $update_stmt->bindParam(':ct3', $cuttrue_v3_up);
                $update_stmt->bindParam(':ct4', $cuttrue_v4_up);
                $update_stmt->bindParam(':ct5', $cuttrue_v5_up);
                $update_stmt->bindParam(':ct6', $cuttrue_v6_up);
                $update_stmt->bindParam(':ct7', $cuttrue_v7_up);
                $update_stmt->bindParam(':ct8', $cuttrue_v8_up);
                $update_stmt->bindParam(':ct9', $cuttrue_v9_up);
                $update_stmt->bindParam(':ct10', $cuttrue_v10_up);


                $update_stmt->bindParam(':dt', $details_up);
                $update_stmt->bindParam(':dt1', $details_v1_up);
                $update_stmt->bindParam(':dt2', $details_v2_up);
                $update_stmt->bindParam(':dt3', $details_v3_up);
                $update_stmt->bindParam(':dt4', $details_v4_up);
                $update_stmt->bindParam(':dt5', $details_v5_up);
                $update_stmt->bindParam(':dt6', $details_v6_up);
                $update_stmt->bindParam(':dt7', $details_v7_up);
                $update_stmt->bindParam(':dt8', $details_v8_up);
                $update_stmt->bindParam(':dt9', $details_v9_up);
                $update_stmt->bindParam(':dt10', $details_v10_up);
                $update_stmt->bindParam(':dt11', $details_v11_up);
                $update_stmt->bindParam(':dt12', $details_v12_up);
                $update_stmt->bindParam(':dt13', $details_v13_up);
                $update_stmt->bindParam(':dt14', $details_v14_up);
                $update_stmt->bindParam(':dt15', $details_v15_up);

                $update_stmt->bindParam(':nd1', $nmdetails1_up);
                $update_stmt->bindParam(':nd2', $nmdetails2_up);
                $update_stmt->bindParam(':nd3', $nmdetails3_up);
                $update_stmt->bindParam(':nd4', $nmdetails4_up);
                $update_stmt->bindParam(':nd5', $nmdetails5_up);
                $update_stmt->bindParam(':nd6', $nmdetails6_up);
                $update_stmt->bindParam(':nd7', $nmdetails7_up);
                $update_stmt->bindParam(':nd8', $nmdetails8_up);
                $update_stmt->bindParam(':nd9', $nmdetails9_up);
                $update_stmt->bindParam(':nd10', $nmdetails10_up);
                $update_stmt->bindParam(':nd11', $nmdetails11_up);
                $update_stmt->bindParam(':nd12', $nmdetails12_up);
                $update_stmt->bindParam(':nd13', $nmdetails13_up);
                $update_stmt->bindParam(':nd14', $nmdetails14_up);
                $update_stmt->bindParam(':nd15', $nmdetails15_up);
                
                $update_stmt->bindParam(':dv1', $detv1_up);
                $update_stmt->bindParam(':dv2', $detv2_up);
                $update_stmt->bindParam(':dv3', $detv3_up);
                $update_stmt->bindParam(':dv4', $detv4_up);
                $update_stmt->bindParam(':dv5', $detv5_up);
                $update_stmt->bindParam(':dv6', $detv6_up);
                $update_stmt->bindParam(':dv7', $detv7_up);
                $update_stmt->bindParam(':dv8', $detv8_up);
                $update_stmt->bindParam(':dv9', $detv9_up);
                $update_stmt->bindParam(':dv10', $detv10_up);
                $update_stmt->bindParam(':dv11', $detv11_up);
                $update_stmt->bindParam(':dv12', $detv12_up);
                $update_stmt->bindParam(':dv13', $detv13_up);
                $update_stmt->bindParam(':dv14', $detv14_up);
                $update_stmt->bindParam(':dv15', $detv15_up);

                $update_stmt->bindParam(':p', $pin0_up);
                $update_stmt->bindParam(':p1', $pin1_up);
                $update_stmt->bindParam(':p2', $pin2_up);
                $update_stmt->bindParam(':p3', $pin3_up);
                $update_stmt->bindParam(':p4', $pin4_up);
                $update_stmt->bindParam(':p5', $pin5_up);


                $update_stmt->bindParam(':pa1', $pack1_up);
                $update_stmt->bindParam(':pa2', $pack2_up);
                $update_stmt->bindParam(':pa3', $pack3_up);
                $update_stmt->bindParam(':pa4', $pack4_up);
                $update_stmt->bindParam(':pa5', $pack5_up);

                $update_stmt->bindParam(':nmp1', $nmpack1_up);
                $update_stmt->bindParam(':nmp2', $nmpack2_up);
                $update_stmt->bindParam(':nmp3', $nmpack3_up);
                $update_stmt->bindParam(':nmp4', $nmpack4_up);
                $update_stmt->bindParam(':nmp5', $nmpack5_up);

                $update_stmt->bindParam(':ne', $note_up);

                $update_stmt->bindParam(':sd1', $size_details1_up);
                $update_stmt->bindParam(':sd2', $size_details2_up);
                $update_stmt->bindParam(':sd3', $size_details3_up);
                $update_stmt->bindParam(':sd4', $size_details4_up);
                $update_stmt->bindParam(':sd5', $size_details5_up);
                $update_stmt->bindParam(':sd6', $size_details6_up);
                $update_stmt->bindParam(':sd7', $size_details7_up);
                $update_stmt->bindParam(':sd8', $size_details8_up);
                $update_stmt->bindParam(':sd9', $size_details9_up);
                $update_stmt->bindParam(':sd10', $size_details10_up);
                $update_stmt->bindParam(':sd11', $size_details11_up);
                $update_stmt->bindParam(':sd12', $size_details12_up);
                $update_stmt->bindParam(':sd13', $size_details13_up);
                $update_stmt->bindParam(':sd14', $size_details14_up);
                $update_stmt->bindParam(':sd15', $size_details15_up);

                $update_stmt->bindParam(':ss1', $ss1_up);
                $update_stmt->bindParam(':ss2', $ss2_up);
                $update_stmt->bindParam(':ss3', $ss3_up);
                $update_stmt->bindParam(':ss4', $ss4_up);
                $update_stmt->bindParam(':ss5', $ss5_up);
                $update_stmt->bindParam(':ss6', $ss6_up);
                $update_stmt->bindParam(':ss7', $ss7_up);
                $update_stmt->bindParam(':ss8', $ss8_up);
                $update_stmt->bindParam(':ss9', $ss9_up);
                $update_stmt->bindParam(':ss10', $ss10_up);
                $update_stmt->bindParam(':ss11', $ss11_up);
                $update_stmt->bindParam(':ss12', $ss12_up);
                $update_stmt->bindParam(':ss13', $ss13_up);
                $update_stmt->bindParam(':ss14', $ss14_up);
                $update_stmt->bindParam(':ss15', $ss15_up);

                $update_stmt->bindParam(':s1', $s1_up);
                $update_stmt->bindParam(':s2', $s2_up);
                $update_stmt->bindParam(':s3', $s3_up);
                $update_stmt->bindParam(':s4', $s4_up);
                $update_stmt->bindParam(':s5', $s5_up);
                $update_stmt->bindParam(':s6', $s6_up);
                $update_stmt->bindParam(':s7', $s7_up);
                $update_stmt->bindParam(':s8', $s8_up);
                $update_stmt->bindParam(':s9', $s9_up);
                $update_stmt->bindParam(':s10', $s10_up);
                $update_stmt->bindParam(':s11', $s11_up);
                $update_stmt->bindParam(':s12', $s12_up);
                $update_stmt->bindParam(':s13', $s13_up);
                $update_stmt->bindParam(':s14', $s14_up);
                $update_stmt->bindParam(':s15', $s15_up);

                $update_stmt->bindParam(':m1', $m1_up);
                $update_stmt->bindParam(':m2', $m2_up);
                $update_stmt->bindParam(':m3', $m3_up);
                $update_stmt->bindParam(':m4', $m4_up);
                $update_stmt->bindParam(':m5', $m5_up);
                $update_stmt->bindParam(':m6', $m6_up);
                $update_stmt->bindParam(':m7', $m7_up);
                $update_stmt->bindParam(':m8', $m8_up);
                $update_stmt->bindParam(':m9', $m9_up);
                $update_stmt->bindParam(':m10', $m10_up);
                $update_stmt->bindParam(':m11', $m11_up);
                $update_stmt->bindParam(':m12', $m12_up);
                $update_stmt->bindParam(':m13', $m13_up);
                $update_stmt->bindParam(':m14', $m14_up);
                $update_stmt->bindParam(':m15', $m15_up);

                $update_stmt->bindParam(':l1', $l1_up);
                $update_stmt->bindParam(':l2', $l2_up);
                $update_stmt->bindParam(':l3', $l3_up);
                $update_stmt->bindParam(':l4', $l4_up);
                $update_stmt->bindParam(':l5', $l5_up);
                $update_stmt->bindParam(':l6', $l6_up);
                $update_stmt->bindParam(':l7', $l7_up);
                $update_stmt->bindParam(':l8', $l8_up);
                $update_stmt->bindParam(':l9', $l9_up);
                $update_stmt->bindParam(':l10', $l10_up);
                $update_stmt->bindParam(':l11', $l11_up);
                $update_stmt->bindParam(':l12', $l12_up);
                $update_stmt->bindParam(':l13', $l13_up);
                $update_stmt->bindParam(':l14', $l14_up);
                $update_stmt->bindParam(':l15', $l15_up);

                $update_stmt->bindParam(':xl1', $xl1_up);
                $update_stmt->bindParam(':xl2', $xl2_up);
                $update_stmt->bindParam(':xl3', $xl3_up);
                $update_stmt->bindParam(':xl4', $xl4_up);
                $update_stmt->bindParam(':xl5', $xl5_up);
                $update_stmt->bindParam(':xl6', $xl6_up);
                $update_stmt->bindParam(':xl7', $xl7_up);
                $update_stmt->bindParam(':xl8', $xl8_up);
                $update_stmt->bindParam(':xl9', $xl9_up);
                $update_stmt->bindParam(':xl10', $xl10_up);
                $update_stmt->bindParam(':xl11', $xl11_up);
                $update_stmt->bindParam(':xl12', $xl12_up);
                $update_stmt->bindParam(':xl13', $xl13_up);
                $update_stmt->bindParam(':xl14', $xl14_up);
                $update_stmt->bindParam(':xl15', $xl15_up);

                $update_stmt->bindParam(':xl21', $xl21_up);
                $update_stmt->bindParam(':xl22', $xl22_up);
                $update_stmt->bindParam(':xl23', $xl23_up);
                $update_stmt->bindParam(':xl24', $xl24_up);
                $update_stmt->bindParam(':xl25', $xl25_up);
                $update_stmt->bindParam(':xl26', $xl26_up);
                $update_stmt->bindParam(':xl27', $xl27_up);
                $update_stmt->bindParam(':xl28', $xl28_up);
                $update_stmt->bindParam(':xl29', $xl29_up);
                $update_stmt->bindParam(':xl210', $xl210_up);
                $update_stmt->bindParam(':xl211', $xl211_up);
                $update_stmt->bindParam(':xl212', $xl212_up);
                $update_stmt->bindParam(':xl213', $xl213_up);
                $update_stmt->bindParam(':xl214', $xl214_up);
                $update_stmt->bindParam(':xl215', $xl215_up);

                $update_stmt->bindParam(':xl31', $xl31_up);
                $update_stmt->bindParam(':xl32', $xl32_up);
                $update_stmt->bindParam(':xl33', $xl33_up);
                $update_stmt->bindParam(':xl34', $xl34_up);
                $update_stmt->bindParam(':xl35', $xl35_up);
                $update_stmt->bindParam(':xl36', $xl36_up);
                $update_stmt->bindParam(':xl37', $xl37_up);
                $update_stmt->bindParam(':xl38', $xl38_up);
                $update_stmt->bindParam(':xl39', $xl39_up);
                $update_stmt->bindParam(':xl310', $xl310_up);
                $update_stmt->bindParam(':xl311', $xl311_up);
                $update_stmt->bindParam(':xl312', $xl312_up);
                $update_stmt->bindParam(':xl313', $xl313_up);
                $update_stmt->bindParam(':xl314', $xl314_up);
                $update_stmt->bindParam(':xl315', $xl315_up);

                $update_stmt->bindParam(':xl41', $xl41_up);
                $update_stmt->bindParam(':xl42', $xl42_up);
                $update_stmt->bindParam(':xl43', $xl43_up);
                $update_stmt->bindParam(':xl44', $xl44_up);
                $update_stmt->bindParam(':xl45', $xl45_up);
                $update_stmt->bindParam(':xl46', $xl46_up);
                $update_stmt->bindParam(':xl47', $xl47_up);
                $update_stmt->bindParam(':xl48', $xl48_up);
                $update_stmt->bindParam(':xl49', $xl49_up);
                $update_stmt->bindParam(':xl410', $xl410_up);
                $update_stmt->bindParam(':xl411', $xl411_up);
                $update_stmt->bindParam(':xl412', $xl412_up);
                $update_stmt->bindParam(':xl413', $xl413_up);
                $update_stmt->bindParam(':xl414', $xl414_up);
                $update_stmt->bindParam(':xl415', $xl415_up);

                $update_stmt->bindParam(':xl51', $xl51_up);
                $update_stmt->bindParam(':xl52', $xl52_up);
                $update_stmt->bindParam(':xl53', $xl53_up);
                $update_stmt->bindParam(':xl54', $xl54_up);
                $update_stmt->bindParam(':xl55', $xl55_up);
                $update_stmt->bindParam(':xl56', $xl56_up);
                $update_stmt->bindParam(':xl57', $xl57_up);
                $update_stmt->bindParam(':xl58', $xl58_up);
                $update_stmt->bindParam(':xl59', $xl59_up);
                $update_stmt->bindParam(':xl510', $xl510_up);
                $update_stmt->bindParam(':xl511', $xl511_up);
                $update_stmt->bindParam(':xl512', $xl512_up);
                $update_stmt->bindParam(':xl513', $xl513_up);
                $update_stmt->bindParam(':xl514', $xl514_up);
                $update_stmt->bindParam(':xl515', $xl515_up);

                $update_stmt->bindParam(':xl61', $xl61_up);
                $update_stmt->bindParam(':xl62', $xl62_up);
                $update_stmt->bindParam(':xl63', $xl63_up);
                $update_stmt->bindParam(':xl64', $xl64_up);
                $update_stmt->bindParam(':xl65', $xl65_up);
                $update_stmt->bindParam(':xl66', $xl66_up);
                $update_stmt->bindParam(':xl67', $xl67_up);
                $update_stmt->bindParam(':xl68', $xl68_up);
                $update_stmt->bindParam(':xl69', $xl69_up);
                $update_stmt->bindParam(':xl610', $xl610_up);
                $update_stmt->bindParam(':xl611', $xl611_up);
                $update_stmt->bindParam(':xl612', $xl612_up);
                $update_stmt->bindParam(':xl613', $xl613_up);
                $update_stmt->bindParam(':xl614', $xl614_up);
                $update_stmt->bindParam(':xl615', $xl615_up);

                $update_stmt->bindParam(':xl71', $xl71_up);
                $update_stmt->bindParam(':xl72', $xl72_up);
                $update_stmt->bindParam(':xl73', $xl73_up);
                $update_stmt->bindParam(':xl74', $xl74_up);
                $update_stmt->bindParam(':xl75', $xl75_up);
                $update_stmt->bindParam(':xl76', $xl76_up);
                $update_stmt->bindParam(':xl77', $xl77_up);
                $update_stmt->bindParam(':xl78', $xl78_up);
                $update_stmt->bindParam(':xl79', $xl79_up);
                $update_stmt->bindParam(':xl710', $xl710_up);
                $update_stmt->bindParam(':xl711', $xl711_up);
                $update_stmt->bindParam(':xl712', $xl712_up);
                $update_stmt->bindParam(':xl713', $xl713_up);
                $update_stmt->bindParam(':xl714', $xl714_up);
                $update_stmt->bindParam(':xl715', $xl715_up);

                $update_stmt->bindParam(':ns',$nes_up);
                $update_stmt->bindParam(':nm', $nem_up);
                $update_stmt->bindParam(':nmg', $nemg_up);
                $update_stmt->bindParam(':tis', $timess_up);
                $update_stmt->bindParam(':tim', $timem_up);
                $update_stmt->bindParam(':timg', $timemg_up);
        
                $update_stmt->bindParam(':id', $id);

                if ($update_stmt->execute()) {
                    $updateMsg = "แก้ไขข้อมูลเรียบร้อย กรุณารอสักครู่...";
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
<br>
<br>
<body>
    <br>
    <div class="container text-center">
        <h1>กรอกรายละเอียดข้อมูล</h1>
        <br>
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

        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <div class="row">
                <label for="name" class="col-sm-3 control-label">ชื่องาน</label>
                <div class="col-sm-3 text-center">
                    <input type="text" name="txt_name_op" class="form-control" value="<?php echo $name_op; ?>">
                </div>

                <label for="name" class="col-sm-2 control-label">กำหนดส่ง</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="txt_timeing" value="<?php echo $timeing; ?>">
                </div>
            </div>
        </div>


        <div class="form-group">
                <div class="row">
                    <label class="col-sm-3 control-label">NEW PTC</label>
                    <div class="col-sm-3 text-center">
                        <select class="form-control"  name="ddl_new_ptc" id="ddl_new_ptc"value="<?php echo $ddl_new_ptc; ?>">
                        <option value="">เลือก NEW PTC</option></select>
                    </div>
                        <label class="col-sm-2 control-label">กรอก NEW PTC</label>
                    <div class="col-sm-3">
                        <input  type="text" class="form-control" name="txt_new_ptc" id="txt_new_ptc" value="<?php echo $new_ptc; ?>">
                 </div>
            </div>
        </div>

        <div class="form-group">
                <div class="row">
                    <label for="name" class="col-sm-3 control-label">File</label>
                <div class="col-sm-3">
                    <input type="file" name="txt_file" class="form-control" value="<?php echo $file; ?>">
                 </div>

                    <label class="col-sm-2 control-label">ขส</label>
                <div class="col-sm-3">
                    <input  type="text" class="form-control" name="txt_ks" id="txt_ks" value="<?php echo $ks; ?>">
                </div>
        </div>
        <br>
    
        <div class="form-group">
            <h2>ORDER</h2>
            <table class="table">
                <thead>
                    <tr>
                        <td class="text-center" style="font-size: larger; color: black;">Size</td>
                        <td class="text-center" style="font-size: larger; color: black; width: 20%;">รหัสสินค้า</td>
                        <td><input type="text" class="form-control small-input center-input" name="txt_od_v0" value="<?php echo $od_v0; ?>"></td>
                        <td><select class="form-select form-control select-margin center-input" name="txt_if_v0" id="txt_if_v0" value="<?php echo $od_v0; ?>">
                            <option value="" selected >เลือกงาน</option>
                            <option value="เผื่อ">เผื่อ</option>
                            <option value="เมอร์เก็บ">เมอร์เก็บ</option>
                        </select></td>
                        <td class="text-center" style="font-size: larger; color: black;">รวมส่งผลิต</td>
                        <td class="text-center" style="font-size: larger; color: black;">ตัดได้จริง</td>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                    <td class="text-center">
                            <input type="text" class="form-control small-input center-input" name="txt_size_v1" value="<?php echo $size_v1; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_size_v2" value="<?php echo $size_v2; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_size_v3" value="<?php echo $size_v3; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_size_v4" value="<?php echo $size_v4; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_size_v5" value="<?php echo $size_v5; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_size_v6" value="<?php echo $size_v6; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_size_v7" value="<?php echo $size_v7; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_size_v8" value="<?php echo $size_v8; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_size_v9" value="<?php echo $size_v9; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_size_v10" value="<?php echo $size_v10; ?>">

                    </td>

                        
                        <td class="text-center">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv1" value="<?php echo $on_pdv1; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv2" value="<?php echo $on_pdv2; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv3" value="<?php echo $on_pdv3; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv4" value="<?php echo $on_pdv4; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv5" value="<?php echo $on_pdv5; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv6" value="<?php echo $on_pdv6; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv7" value="<?php echo $on_pdv7; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv8" value="<?php echo $on_pdv8; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv9" value="<?php echo $on_pdv9; ?>">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv10" value="<?php echo $on_pdv10; ?>">
        
                            
                        </td>

                        <td class="text-center">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v1" value="<?php echo $od_v1; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v2" value="<?php echo $od_v2; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v3" value="<?php echo $od_v3; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v4" value="<?php echo $od_v4; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v5" value="<?php echo $od_v5; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v6" value="<?php echo $od_v6; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v7" value="<?php echo $od_v7; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v8" value="<?php echo $od_v8; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v9" value="<?php echo $od_v9; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v10" value="<?php echo $od_v10; ?>">
                        </td>
                        <td class="text-center">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v1" value="<?php echo $if_v1; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v2" value="<?php echo $if_v2; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v3" value="<?php echo $if_v3; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v4" value="<?php echo $if_v4; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v5" value="<?php echo $if_v5; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v6" value="<?php echo $if_v6; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v7" value="<?php echo $if_v7; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v8" value="<?php echo $if_v8; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v9" value="<?php echo $if_v9; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v10" value="<?php echo $if_v10; ?>">
                        </td> 

                        <td class="text-center">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v1" value="<?php echo $cut_v1; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v2" value="<?php echo $cut_v2; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v3" value="<?php echo $cut_v3; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v4" value="<?php echo $cut_v4; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v5" value="<?php echo $cut_v5; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v6" value="<?php echo $cut_v6; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v7" value="<?php echo $cut_v7; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v8" value="<?php echo $cut_v8; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v9" value="<?php echo $cut_v9; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v10" value="<?php echo $cut_v10; ?>">
                        
                        </td>

                        <td class="text-center">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v1" value="<?php echo $cuttrue_v1; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v2" value="<?php echo $cuttrue_v2; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v3" value="<?php echo $cuttrue_v3; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v4" value="<?php echo $cuttrue_v4; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v5" value="<?php echo $cuttrue_v5; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v6" value="<?php echo $cuttrue_v6; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v7" value="<?php echo $cuttrue_v7; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v8" value="<?php echo $cuttrue_v8; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v9" value="<?php echo $cuttrue_v9; ?>">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v10" value="<?php echo $cuttrue_v10; ?>">
                            
                        </td>
                    </tr>
                    <!-- เพิ่มแถวและคอลัมน์อื่น ๆ ตามต้องการ -->
                </tbody>
            </table>

            <table class="table">
                <thead>
                    <tr>
                        <td colspan="3">
                            <label class="form-label d-block text-center">วัตถุดิบ(ผ้า)</label>
                            <input type="text" class="form-control equal-size" name="txt_note" value="<?php echo $note; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-label d-block text-center">Sale</label>
                            <input type="text" class="form-control" name="txt_nes" value="<?php echo $nes; ?>">
                            <input type="date" class="form-control" name="txt_timess" value="<?php echo $timess; ?>">
                        </td> 
                        <td>
                            <label class="form-label d-block text-center">Mer</label>
                            <input type="text" class="form-control" name="txt_nem" value="<?php echo $nem; ?>">
                            <input type="date" class="form-control" name="txt_timem" value="<?php echo $timem; ?>">
                        </td>
                        <td>
                            <label class="form-label d-block text-center">Manager</label>
                            <input type="text" class="form-control" name="txt_nemg" value="<?php echo $nemg; ?>">
                            <input type="date" class="form-control" name="txt_timemg" value="<?php echo $timemg; ?>">
                        </td>
                    </tr>
                </thead>
            </table>   

            <table class="table">
                <thead>
                    <tr>
                        <td class="text-center">อุปกรณ์</td>
                        <td class="text-center">รหัสอุปกรณ์</td>
                        <td class="text-center">จำนวน</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v1" value="<?php echo $details_v1; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails1" value="<?php echo $nmdetails1; ?>">
                        <th><input type="text" class="form-control " name="txt_detv1" value="<?php echo $detv1; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v2" value="<?php echo $details_v2; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails2" value="<?php echo $nmdetails2; ?>">
                        <th><input type="text" class="form-control " name="txt_detv2" value="<?php echo $detv2; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v3" value="<?php echo $details_v3; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails3" value="<?php echo $nmdetails3; ?>">
                        <th><input type="text" class="form-control " name="txt_detv3" value="<?php echo $detv3; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v4" value="<?php echo $details_v4; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails4" value="<?php echo $nmdetails4; ?>">
                        <th><input type="text" class="form-control " name="txt_detv4" value="<?php echo $detv4; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v5" value="<?php echo $details_v5; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails5" value="<?php echo $nmdetails5; ?>">
                        <th><input type="text" class="form-control " name="txt_detv5" value="<?php echo $detv5; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v6" value="<?php echo $details_v6; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails6" value="<?php echo $nmdetails6; ?>">
                        <th><input type="text" class="form-control " name="txt_detv6" value="<?php echo $detv6; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v7" value="<?php echo $details_v7; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails7" value="<?php echo $nmdetails7; ?>">
                        <th><input type="text" class="form-control " name="txt_detv7" value="<?php echo $detv7; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v8" value="<?php echo $details_v8; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails8" value="<?php echo $nmdetails8; ?>">
                        <th><input type="text" class="form-control " name="txt_detv8" value="<?php echo $detv8; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v9" value="<?php echo $details_v9; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails9" value="<?php echo $nmdetails9; ?>">
                        <th><input type="text" class="form-control " name="txt_detv9" value="<?php echo $detv9; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v10" value="<?php echo $details_v10; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails10" value="<?php echo $nmdetails10; ?>">
                        <th><input type="text" class="form-control " name="txt_detv10" value="<?php echo $detv10; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v11" value="<?php echo $details_v11; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails11" value="<?php echo $nmdetails11; ?>">
                        <th><input type="text" class="form-control " name="txt_detv11" value="<?php echo $detv11; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v12" value="<?php echo $details_v12; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails12" value="<?php echo $nmdetails12; ?>">
                        <th><input type="text" class="form-control " name="txt_detv12" value="<?php echo $detv12; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v13" value="<?php echo $details_v13; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails13" value="<?php echo $nmdetails13; ?>">
                        <th><input type="text" class="form-control " name="txt_detv13" value="<?php echo $detv13; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v14" value="<?php echo $details_v14; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails14" value="<?php echo $nmdetails14; ?>">
                        <th><input type="text" class="form-control " name="txt_detv14" value="<?php echo $detv14; ?>">
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v15" value="<?php echo $details_v15; ?>">
                        <th><input type="text" class="form-control " name="txt_nmdetails15" value="<?php echo $nmdetails15; ?>">
                        <th><input type="text" class="form-control " name="txt_detv15" value="<?php echo $detv15; ?>">
                    </tr>
                </tbody>

            <table class="table">
                <thead>
                    <tr>
                        <td><label for="name" class="col-sm-3 control-label">อัปโหลดรูปงานปัก</label>
                        <div class="col-sm-3"><input type="file" name="txt_file2" class="form-control" value="<?php echo $file2; ?>">
                    </tr>
                </thead> 
            </table>

            <div style="display: flex;">
                <table class="table  text-center" style="flex: 1; margin-right: 20px;">
                    <thead>
                        <tr>
                        <td class="text-center"><label class="form-label">อุปกรณ์แพค</label></td>
                        <td class="text-center"><label class="form-label">จำนวน</label></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pack1"value="<?php echo $pack1; ?>"></td>
                            <th class="text-center" style="width: 100px;"><input type="text" class="form-control" name="txt_nmpack1" value="<?php echo $nmpack1; ?>">
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pack2" value="<?php echo $pack2; ?>"></td>
                            <th class="text-center" style="width: 100px;"><input type="text" class="form-control" name="txt_nmpack2" value="<?php echo $nmpack2; ?>">
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control " name="txt_pack3" value="<?php echo $pack3; ?>"></td>
                            <th class="text-center" style="width: 100px;"><input type="text" class="form-control" name="txt_nmpack3" value="<?php echo $nmpack3; ?>">
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pack4" value="<?php echo $pack4; ?>"></td>
                            <th class="text-center" style="width: 100px;"><input type="text" class="form-control" name="txt_nmpack4" value="<?php echo $nmpack4; ?>">
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pack5" value="<?php echo $pack5; ?>"></td>
                            <th class="text-center" style="width: 100px;"><input type="text" class="form-control" name="txt_nmpack5" value="<?php echo $nmpack5; ?>">
                    </tbody>
                </table>

                <table class="table" style="flex: 1;">
                    <thead>
                        <tr>
                        <td>
                            <select class="form-select form-control select-margin center-input" name="txt_pin0">
                                <option value="" <?php if ($pin0 === '') echo 'selected'; ?>>เลือกงาน</option>
                                <option value="งานปัก" <?php if ($pin0 === 'งานปัก') echo 'selected'; ?>>งานปัก</option>
                                <option value="งานพิมพ์" <?php if ($pin0 === 'งานพิมพ์') echo 'selected'; ?>>งานพิมพ์</option>
                                <option value="งานพิมพ์ซับ" <?php if ($pin0 === 'งานพิมพ์ซับ') echo 'selected'; ?>>งานพิมพ์ซับ</option>
                            </select>
                        </td>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin1" value="<?php echo $pin1; ?>">
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin2" value="<?php echo $pin2; ?>">
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin3" value="<?php echo $pin3; ?>">
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin4" value="<?php echo $pin4; ?>">
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin5" value="<?php echo $pin5; ?>">
                        </tr>
                    </tbody>
                </table>
            </div>

            </div>
        </div>
           
    <div style="margin-top: 20px;"></div>
        <table class="table">
            <tr>
                <th style="width: 150px; text-align: center;">ไซส์/สเปค</th>
                <th style="width: 50px; text-align: center;">SS</th>
                <th style="width: 50px; text-align: center;">S</th>
                <th style="width: 50px; text-align: center;">M</th>
                <th style="width: 50px; text-align: center;">L</th>
                <th style="width: 50px; text-align: center;">XL</th>
                <th style="width: 50px; text-align: center;">2XL</th>
                <th style="width: 50px; text-align: center;">3XL</th>
                <th style="width: 50px; text-align: center;">4XL</th>
                <th style="width: 50px; text-align: center;">5XL</th>
                <th style="width: 50px; text-align: center;">6XL</th>
                <th style="width: 50px; text-align: center;">7XL</th>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details1" value="<?php echo $size_details1; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss1" value="<?php echo $ss1; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s1" value="<?php echo $s1; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m1" value="<?php echo $m1; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l1" value="<?php echo $l1; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl1" value="<?php echo $xl1; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl21" value="<?php echo $xl21; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl31" value="<?php echo $xl31; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl41" value="<?php echo $xl41; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl51" value="<?php echo $xl51; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl61" value="<?php echo $xl61; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl71" value="<?php echo $xl71; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details2" value="<?php echo $size_details2; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss2" value="<?php echo $ss2; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s2" value="<?php echo $s2; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m2" value="<?php echo $m2; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l2" value="<?php echo $l2; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl2" value="<?php echo $xl2; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl22" value="<?php echo $xl22; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl32" value="<?php echo $xl32; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl42" value="<?php echo $xl42; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl52" value="<?php echo $xl52; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl62" value="<?php echo $xl62; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl72" value="<?php echo $xl72; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details3" value="<?php echo $size_details3; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss3" value="<?php echo $ss3; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s3" value="<?php echo $s3; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m3" value="<?php echo $m3; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l3" value="<?php echo $l3; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl3" value="<?php echo $xl3; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl23" value="<?php echo $xl23; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl33" value="<?php echo $xl33; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl43" value="<?php echo $xl43; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl53" value="<?php echo $xl53; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl63" value="<?php echo $xl63; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl73" value="<?php echo $xl73; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details4" value="<?php echo $size_details4; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss4" value="<?php echo $ss4; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s4" value="<?php echo $s4; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m4" value="<?php echo $m4; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l4" value="<?php echo $l4; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl4" value="<?php echo $xl4; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl24" value="<?php echo $xl24; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl34" value="<?php echo $xl34; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl44" value="<?php echo $xl44; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl54" value="<?php echo $xl54; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl64" value="<?php echo $xl64; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl74" value="<?php echo $xl74; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details5" value="<?php echo $size_details5; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss5" value="<?php echo $ss5; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s5" value="<?php echo $s5; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m5" value="<?php echo $m5; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l5" value="<?php echo $l5; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl5" value="<?php echo $xl5; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl25" value="<?php echo $xl25; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl35" value="<?php echo $xl35; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl45" value="<?php echo $xl45; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl55" value="<?php echo $xl55; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl65" value="<?php echo $xl65; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl75" value="<?php echo $xl75; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details6" value="<?php echo $size_details6; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss6" value="<?php echo $ss6; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s6" value="<?php echo $s6; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m6" value="<?php echo $m6; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l6" value="<?php echo $l6; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl6" value="<?php echo $xl6; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl26" value="<?php echo $xl26; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl36" value="<?php echo $xl36; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl46" value="<?php echo $xl46; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl56" value="<?php echo $xl56; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl66" value="<?php echo $xl66; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl76" value="<?php echo $xl76; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details7" value="<?php echo $size_details7; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss7" value="<?php echo $ss7; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s7" value="<?php echo $s7; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m7" value="<?php echo $m7; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l7" value="<?php echo $l7; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl7" value="<?php echo $xl7; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl27" value="<?php echo $xl27; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl37" value="<?php echo $xl37; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl47" value="<?php echo $xl47; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl57" value="<?php echo $xl57; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl67" value="<?php echo $xl67; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl77" value="<?php echo $xl77; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details8" value="<?php echo $size_details8; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss8" value="<?php echo $ss8; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s8" value="<?php echo $s8; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m8" value="<?php echo $m8; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l8" value="<?php echo $l8; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl8" value="<?php echo $xl8; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl28" value="<?php echo $xl28; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl38" value="<?php echo $xl38; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl48" value="<?php echo $xl48; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl58" value="<?php echo $xl58; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl68" value="<?php echo $xl68; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl78" value="<?php echo $xl78; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details9" value="<?php echo $size_details9; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss9" value="<?php echo $ss9; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s9" value="<?php echo $s9; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m9" value="<?php echo $m9; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l9" value="<?php echo $l9; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl9" value="<?php echo $xl9; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl29" value="<?php echo $xl29; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl39" value="<?php echo $xl39; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl49" value="<?php echo $xl49; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl59" value="<?php echo $xl59; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl69" value="<?php echo $xl69; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl79" value="<?php echo $xl79; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details10" value="<?php echo $size_details10; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss10" value="<?php echo $ss10; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s10" value="<?php echo $s10; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m10" value="<?php echo $m10; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l10" value="<?php echo $l10; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl10" value="<?php echo $xl10; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl210" value="<?php echo $xl210; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl310" value="<?php echo $xl310; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl410" value="<?php echo $xl410; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl510" value="<?php echo $xl510; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl610" value="<?php echo $xl610; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl710" value="<?php echo $xl710; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details11" value="<?php echo $size_details11; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss11" value="<?php echo $ss11; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s11" value="<?php echo $s11; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m11" value="<?php echo $m11; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l11" value="<?php echo $l11; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl11" value="<?php echo $xl11; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl211" value="<?php echo $xl211; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl311" value="<?php echo $xl311; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl411" value="<?php echo $xl411; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl511" value="<?php echo $xl511; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl611" value="<?php echo $xl611; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl711" value="<?php echo $xl711; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details12" value="<?php echo $size_details12; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss12" value="<?php echo $ss12; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s12" value="<?php echo $s12; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m12" value="<?php echo $m12; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l12" value="<?php echo $l12; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl12" value="<?php echo $xl12; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl212" value="<?php echo $xl212; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl312" value="<?php echo $xl312; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl412" value="<?php echo $xl412; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl512" value="<?php echo $xl512; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl612" value="<?php echo $xl612; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl712" value="<?php echo $xl712; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details13" value="<?php echo $size_details13; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss13" value="<?php echo $ss13; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s13" value="<?php echo $s13; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m13" value="<?php echo $m13; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l13" value="<?php echo $l13; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl13" value="<?php echo $xl13; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl213" value="<?php echo $xl213; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl313" value="<?php echo $xl313; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl413" value="<?php echo $xl413; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl513" value="<?php echo $xl513; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl613" value="<?php echo $xl613; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl713" value="<?php echo $xl713; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details14" value="<?php echo $size_details14; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss14" value="<?php echo $ss14; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s14" value="<?php echo $s14; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m14" value="<?php echo $m14; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l14" value="<?php echo $l14; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl14" value="<?php echo $xl14; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl214" value="<?php echo $xl214; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl314" value="<?php echo $xl314; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl414" value="<?php echo $xl414; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl514" value="<?php echo $xl514; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl614" value="<?php echo $xl614; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl714" value="<?php echo $xl714; ?>">
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details15" value="<?php echo $size_details15; ?>">
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss15" value="<?php echo $ss15; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s15" value="<?php echo $s15; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m15" value="<?php echo $m15; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l15" value="<?php echo $l15; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl15" value="<?php echo $xl15; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl215" value="<?php echo $xl215; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl315" value="<?php echo $xl315; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl415" value="<?php echo $xl415; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl515" value="<?php echo $xl515; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl615" value="<?php echo $xl615; ?>">
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl715" value="<?php echo $xl715; ?>">
            </tr>

            
            
        </table>
    <div style="margin-bottom: 20px;"></div>

    <table class="table">
        <tr>
            <td><label class="form-label d-block text-center">รายละเอียดการเย็บ</label></td>
        </tr>
        <tr>  
           <th><input class="form-control equal-size wide-input" name="txt_details" id="txt_details" value="<?php echo $details; ?>">
        </tr>
    </table>    
            <div class="form-group text-center">
                <div class="col-md-12 mt-3">
                    <input type="submit" name="btn_update" class="btn btn-success" value="แก้ไขเสร็จสิ้น">
                    <a href="index.php" class="btn btn-danger">ยกเลิก</a>
                </div>
            </div>


         <!-- เพิ่ม CSS สไตล์ในส่วนนี้ -->
         <style>
        .select-margin {
            margin-top: 5px; /* ปรับระยะตามที่คุณต้องการ */
        }

        .custom-select {
            width: 1250px; /* ปรับความกว้างของเลือกเมนูตามที่คุณต้องการ */
            height: 30px; /* ปรับความสูงของเลือกเมนูตามที่คุณต้องการ */
            font-size: 14px; /* ปรับขนาดตัวอักษรของเลือกเมนูตามที่คุณต้องการ */
        }

        .custom-select select {
            width: 200%;
            padding: 8px; /* ระยะห่างขอบของ select ใน */
            border: none; /* ไม่มีเส้นขอบ */
            background-color: transparent; /* ไม่มีสีพื้นหลัง */
            margin-top: 5px;
            
        }
        .special-input {
            width: 50px; /* ปรับความกว้างของ input ตามที่คุณต้องการ */
            height: 38px; /* ปรับความสูงของ input ตามที่คุณต้องการ */
            font-size: 16px; /* ปรับขนาดตัวอักษรของ input ตามที่คุณต้องการ */
            margin-top: 5px;
        }

        .custom-input {
            width: 150px; /* ปรับความกว้างของช่องป้อนข้อความตามที่คุณต้องการ */
            height: 30px; /* ปรับความสูงของช่องป้อนข้อความตามที่คุณต้องการ */
            font-size: 14px; /* ปรับขนาดตัวอักษรของช่องป้อนข้อความตามที่คุณต้องการ */
        }
        
        /* เพิ่มคลาส .small-input เพื่อปรับขนาดช่องป้อนข้อความ */
        .small-input {
            width: 150px; /* ปรับความกว้างของช่องป้อนข้อความตามที่คุณต้องการ */
            height: 38px; /* ปรับความสูงของช่องป้อนข้อความตามที่คุณต้องการ */
            font-size: 14px; /* ปรับขนาดตัวอักษรของช่องป้อนข้อความตามที่คุณต้องการ */
            margin-top: 5px;
            margin: 0 auto; /* จัดให้ input อยู่กลางแนวนอนในแต่ละเซลล์ */
            text-align: center; /* จัดให้ข้อความอยู่กลางแนวนอนในแต่ละเซลล์ */
        }

        /* สร้าง CSS ที่กำหนดขนาดเพิ่มเติมสำหรับช่องกรอกข้อมูลขนาดเล็ก */
        .extra-small-input {
            width: 60px; /* คุณสามารถปรับความกว้างตามที่ต้องการ */
            height: 40px; /* คุณสามารถปรับความสูงตามที่ต้องการ */
        }


        .center-input {
            margin: 0 auto; /* จัดให้ input อยู่กลางแนวนอน */
            text-align: center; /* จัดให้ข้อความอยู่กลางแนวนอน */
            margin-top: 5px;
            
        }

        .table {
            border: 1px solid black;
            border-collapse: collapse; /* รวมขอบเส้นของเซลล์ */
        }

        /* ให้เส้นขอบของเซลล์เป็นเส้นหนา */
        .table th,  
        .table td {
            border: 1px solid black;
            padding: 8px; /* ระยะห่างของข้อมูลในเซลล์ */
        }
        

    </style> 

    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>