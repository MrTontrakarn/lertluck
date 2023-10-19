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
        $name_op_up =  $_POST['txt_name_op'];
        $ks_up =  $_POST['txt_ks'];
        $fn_up =  $_POST['txt_fn'];
        $timeing_up =  $_POST['txt_timeing'];

        $size_v1_up =  $_POST['txt_size_v1'];
        $size_v2_up =  $_POST['txt_size_v2'];
        $size_v3_up =  $_POST['txt_size_v3'];
        $size_v4_up =  $_POST['txt_size_v4'];
        $size_v5_up =  $_POST['txt_size_v5'];
        $size_v6_up =  $_POST['txt_size_v6'];
        $size_v7_up =  $_POST['txt_size_v7'];
        $size_v8_up =  $_POST['txt_size_v8'];
        $size_v9_up =  $_POST['txt_size_v9'];
        $size_v10_up =  $_POST['txt_size_v10'];


        $if_v0_up =  $_POST['txt_if_v0'];
        $if_v1_up =  $_POST['txt_if_v1'];
        $if_v2_up =  $_POST['txt_if_v2'];
        $if_v3_up =  $_POST['txt_if_v3'];
        $if_v4_up =  $_POST['txt_if_v4'];
        $if_v5_up =  $_POST['txt_if_v5'];
        $if_v6_up =  $_POST['txt_if_v6'];
        $if_v7_up =  $_POST['txt_if_v7'];
        $if_v8_up =  $_POST['txt_if_v8'];
        $if_v9_up =  $_POST['txt_if_v9'];
        $if_v10_up =  $_POST['txt_if_v10'];


        $od_v1_up =  $_POST['txt_od_v1'];
        $od_v2_up =  $_POST['txt_od_v2'];
        $od_v3_up =  $_POST['txt_od_v3'];
        $od_v4_up =  $_POST['txt_od_v4'];
        $od_v5_up =  $_POST['txt_od_v5'];
        $od_v6_up =  $_POST['txt_od_v6'];
        $od_v7_up =  $_POST['txt_od_v7'];
        $od_v8_up =  $_POST['txt_od_v8'];
        $od_v9_up =  $_POST['txt_od_v9'];
        $od_v10_up =  $_POST['txt_od_v10'];

        $od_a1_up =  $_POST['txt_od_a1'];
        $od_a2_up =  $_POST['txt_od_a2'];
        $od_a3_up =  $_POST['txt_od_a3'];
        $od_a4_up =  $_POST['txt_od_a4'];
        $od_a5_up =  $_POST['txt_od_a5'];
        $od_a6_up =  $_POST['txt_od_a6'];
        $od_a7_up =  $_POST['txt_od_a7'];
        $od_a8_up =  $_POST['txt_od_a8'];
        $od_a9_up =  $_POST['txt_od_a9'];
        $od_a10_up =  $_POST['txt_od_a10'];
        
        $od_s1_up =  $_POST['txt_od_s1'];
        $od_s2_up =  $_POST['txt_od_s2'];
        $od_s3_up =  $_POST['txt_od_s3'];
        $od_s4_up =  $_POST['txt_od_s4'];
        $od_s5_up =  $_POST['txt_od_s5'];
        $od_s6_up =  $_POST['txt_od_s6'];
        $od_s7_up =  $_POST['txt_od_s7'];
        $od_s8_up =  $_POST['txt_od_s8'];
        $od_s9_up =  $_POST['txt_od_s9'];
        $od_s10_up =  $_POST['txt_od_s10'];
        
        $od_d1_up =  $_POST['txt_od_d1'];
        $od_d2_up =  $_POST['txt_od_d2'];
        $od_d3_up =  $_POST['txt_od_d3'];
        $od_d4_up =  $_POST['txt_od_d4'];
        $od_d5_up =  $_POST['txt_od_d5'];
        $od_d6_up =  $_POST['txt_od_d6'];
        $od_d7_up =  $_POST['txt_od_d7'];
        $od_d8_up =  $_POST['txt_od_d8'];
        $od_d9_up =  $_POST['txt_od_d9'];
        $od_d10_up =  $_POST['txt_od_d10'];

        $od_f1_up =  $_POST['txt_od_f1'];
        $od_f2_up =  $_POST['txt_od_f2'];
        $od_f3_up =  $_POST['txt_od_f3'];
        $od_f4_up =  $_POST['txt_od_f4'];
        $od_f5_up =  $_POST['txt_od_f5'];
        $od_f6_up =  $_POST['txt_od_f6'];
        $od_f7_up =  $_POST['txt_od_f7'];
        $od_f8_up =  $_POST['txt_od_f8'];
        $od_f9_up =  $_POST['txt_od_f9'];
        $od_f10_up =  $_POST['txt_od_f10'];

        $od_g1_up =  $_POST['txt_od_g1'];
        $od_g2_up =  $_POST['txt_od_g2'];
        $od_g3_up =  $_POST['txt_od_g3'];
        $od_g4_up =  $_POST['txt_od_g4'];
        $od_g5_up =  $_POST['txt_od_g5'];
        $od_g6_up =  $_POST['txt_od_g6'];
        $od_g7_up =  $_POST['txt_od_g7'];
        $od_g8_up =  $_POST['txt_od_g8'];
        $od_g9_up =  $_POST['txt_od_g9'];
        $od_g10_up =  $_POST['txt_od_g10'];

        $od_h1_up =  $_POST['txt_od_h1'];
        $od_h2_up =  $_POST['txt_od_h2'];
        $od_h3_up =  $_POST['txt_od_h3'];
        $od_h4_up =  $_POST['txt_od_h4'];
        $od_h5_up =  $_POST['txt_od_h5'];
        $od_h6_up =  $_POST['txt_od_h6'];
        $od_h7_up =  $_POST['txt_od_h7'];
        $od_h8_up =  $_POST['txt_od_h8'];
        $od_h9_up =  $_POST['txt_od_h9'];
        $od_h10_up =  $_POST['txt_od_h10'];

        $od_j1_up =  $_POST['txt_od_j1'];
        $od_j2_up =  $_POST['txt_od_j2'];
        $od_j3_up =  $_POST['txt_od_j3'];
        $od_j4_up =  $_POST['txt_od_j4'];
        $od_j5_up =  $_POST['txt_od_j5'];
        $od_j6_up =  $_POST['txt_od_j6'];
        $od_j7_up =  $_POST['txt_od_j7'];


        $cut_v1_up =  $_POST['txt_cut_v1'];
        $cut_v2_up =  $_POST['txt_cut_v2'];
        $cut_v3_up =  $_POST['txt_cut_v3'];
        $cut_v4_up =  $_POST['txt_cut_v4'];
        $cut_v5_up =  $_POST['txt_cut_v5'];
        $cut_v6_up =  $_POST['txt_cut_v6'];
        $cut_v7_up =  $_POST['txt_cut_v7'];
        $cut_v8_up =  $_POST['txt_cut_v8'];
        $cut_v9_up =  $_POST['txt_cut_v9'];
        $cut_v10_up =  $_POST['txt_cut_v10'];


        $cuttrue_v1_up =  $_POST['txt_cuttrue_v1'];
        $cuttrue_v2_up =  $_POST['txt_cuttrue_v2'];
        $cuttrue_v3_up =  $_POST['txt_cuttrue_v3'];
        $cuttrue_v4_up =  $_POST['txt_cuttrue_v4'];
        $cuttrue_v5_up =  $_POST['txt_cuttrue_v5'];
        $cuttrue_v6_up =  $_POST['txt_cuttrue_v6'];
        $cuttrue_v7_up =  $_POST['txt_cuttrue_v7'];
        $cuttrue_v8_up =  $_POST['txt_cuttrue_v8'];
        $cuttrue_v9_up =  $_POST['txt_cuttrue_v9'];
        $cuttrue_v10_up =  $_POST['txt_cuttrue_v10'];


        $details_up =  $_POST['txt_details'];
        $details0_up =  $_POST['txt_details0'];
        $details_v1_up =  $_POST['txt_details_v1'];
        $details_v2_up =  $_POST['txt_details_v2'];
        $details_v3_up =  $_POST['txt_details_v3'];
        $details_v4_up =  $_POST['txt_details_v4'];
        $details_v5_up =  $_POST['txt_details_v5'];
        $details_v6_up =  $_POST['txt_details_v6'];
        $details_v7_up =  $_POST['txt_details_v7'];
        $details_v8_up =  $_POST['txt_details_v8'];
        $details_v9_up =  $_POST['txt_details_v9'];
        $details_v10_up =  $_POST['txt_details_v10'];
        $details_v11_up =  $_POST['txt_details_v11'];
        $details_v12_up =  $_POST['txt_details_v12'];
        $details_v13_up =  $_POST['txt_details_v13'];
        $details_v14_up =  $_POST['txt_details_v14'];
        $details_v15_up =  $_POST['txt_details_v15'];
        $details_v16_up =  $_POST['txt_details_v16'];
        $details_v17_up =  $_POST['txt_details_v17'];
        $details_v18_up =  $_POST['txt_details_v18'];
        $details_v19_up =  $_POST['txt_details_v19'];
        $details_v20_up =  $_POST['txt_details_v20'];
        $details_v21_up =  $_POST['txt_details_v21'];
        $details_v22_up =  $_POST['txt_details_v22'];
        $details_v23_up =  $_POST['txt_details_v23'];
        $details_v24_up =  $_POST['txt_details_v24'];
        $details_v25_up =  $_POST['txt_details_v25'];
        $details_v26_up =  $_POST['txt_details_v26'];
        $details_v27_up =  $_POST['txt_details_v27'];
        $details_v28_up =  $_POST['txt_details_v28'];
        $details_v29_up =  $_POST['txt_details_v29'];

        $detv1_up =  $_POST['txt_detv1'];
        $detv2_up =  $_POST['txt_detv2'];
        $detv3_up =  $_POST['txt_detv3'];
        $detv4_up =  $_POST['txt_detv4'];
        $detv5_up =  $_POST['txt_detv5'];
        $detv6_up =  $_POST['txt_detv6'];
        $detv7_up =  $_POST['txt_detv7'];
        $detv8_up =  $_POST['txt_detv8'];
        $detv9_up =  $_POST['txt_detv9'];
        $detv10_up =  $_POST['txt_detv10'];
        $detv11_up =  $_POST['txt_detv11'];
        $detv12_up =  $_POST['txt_detv12'];
        $detv13_up =  $_POST['txt_detv13'];
        $detv14_up =  $_POST['txt_detv14'];
        $detv15_up =  $_POST['txt_detv15'];
        $detv16_up =  $_POST['txt_detv16'];
        $detv17_up =  $_POST['txt_detv17'];
        $detv18_up =  $_POST['txt_detv18'];
        $detv19_up =  $_POST['txt_detv19'];
        $detv20_up =  $_POST['txt_detv20'];
        $detv21_up =  $_POST['txt_detv21'];
        $detv22_up =  $_POST['txt_detv22'];
        $detv23_up =  $_POST['txt_detv23'];
        $detv24_up =  $_POST['txt_detv24'];
        $detv25_up =  $_POST['txt_detv25'];
        $detv26_up =  $_POST['txt_detv26'];
        $detv27_up =  $_POST['txt_detv27'];
        $detv28_up =  $_POST['txt_detv28'];
        $detv29_up =  $_POST['txt_detv29'];

        $nmdetails1_up =  $_POST['txt_nmdetails1'];
        $nmdetails2_up =  $_POST['txt_nmdetails2'];
        $nmdetails3_up =  $_POST['txt_nmdetails3'];
        $nmdetails4_up =  $_POST['txt_nmdetails4'];
        $nmdetails5_up =  $_POST['txt_nmdetails5'];
        $nmdetails6_up =  $_POST['txt_nmdetails6'];
        $nmdetails7_up =  $_POST['txt_nmdetails7'];
        $nmdetails8_up =  $_POST['txt_nmdetails8'];
        $nmdetails9_up =  $_POST['txt_nmdetails9'];
        $nmdetails10_up =  $_POST['txt_nmdetails10'];
        $nmdetails11_up =  $_POST['txt_nmdetails11'];
        $nmdetails12_up =  $_POST['txt_nmdetails12'];
        $nmdetails13_up =  $_POST['txt_nmdetails13'];
        $nmdetails14_up =  $_POST['txt_nmdetails14'];
        $nmdetails15_up =  $_POST['txt_nmdetails15'];
        $nmdetails16_up =  $_POST['txt_nmdetails16'];
        $nmdetails17_up =  $_POST['txt_nmdetails17'];
        $nmdetails18_up =  $_POST['txt_nmdetails18'];
        $nmdetails19_up =  $_POST['txt_nmdetails19'];
        $nmdetails20_up =  $_POST['txt_nmdetails20'];
        $nmdetails21_up =  $_POST['txt_nmdetails21'];
        $nmdetails22_up =  $_POST['txt_nmdetails22'];
        $nmdetails23_up =  $_POST['txt_nmdetails23'];
        $nmdetails24_up =  $_POST['txt_nmdetails24'];
        $nmdetails25_up =  $_POST['txt_nmdetails25'];
        $nmdetails26_up =  $_POST['txt_nmdetails26'];
        $nmdetails27_up =  $_POST['txt_nmdetails27'];
        $nmdetails28_up =  $_POST['txt_nmdetails28'];
        $nmdetails29_up =  $_POST['txt_nmdetails29'];

       
        $pin0_up =  $_POST['txt_pin0'];
        $pin1_up =  $_POST['txt_pin1'];
        $pin2_up =  $_POST['txt_pin2'];
        $pin3_up =  $_POST['txt_pin3'];
        $pin4_up =  $_POST['txt_pin4'];
        $pin5_up =  $_POST['txt_pin5'];


        $pack1_up =  $_POST['txt_pack1'];
        $pack2_up =  $_POST['txt_pack2'];
        $pack3_up =  $_POST['txt_pack3'];
        $pack4_up =  $_POST['txt_pack4'];
        $pack5_up =  $_POST['txt_pack5'];


        $size_details1_up =  $_POST['txt_size_details1'];
        $size_details2_up =  $_POST['txt_size_details2'];
        $size_details3_up =  $_POST['txt_size_details3'];
        $size_details4_up =  $_POST['txt_size_details4'];
        $size_details5_up =  $_POST['txt_size_details5'];
        $size_details6_up =  $_POST['txt_size_details6'];
        $size_details7_up =  $_POST['txt_size_details7'];
        $size_details8_up =  $_POST['txt_size_details8'];
        $size_details9_up =  $_POST['txt_size_details9'];
        $size_details10_up =  $_POST['txt_size_details10'];
        $size_details11_up =  $_POST['txt_size_details11'];
        $size_details12_up =  $_POST['txt_size_details12'];
        $size_details13_up =  $_POST['txt_size_details13'];
        $size_details14_up =  $_POST['txt_size_details14'];
        $size_details15_up =  $_POST['txt_size_details15'];

        $ss1_up =  $_POST['txt_ss1'];
        $ss2_up =  $_POST['txt_ss2'];
        $ss3_up =  $_POST['txt_ss3'];
        $ss4_up =  $_POST['txt_ss4'];
        $ss5_up =  $_POST['txt_ss5'];
        $ss6_up =  $_POST['txt_ss6'];
        $ss7_up =  $_POST['txt_ss7'];
        $ss8_up =  $_POST['txt_ss8'];
        $ss9_up =  $_POST['txt_ss9'];
        $ss10_up =  $_POST['txt_ss10'];
        $ss11_up =  $_POST['txt_ss11'];
        $ss12_up =  $_POST['txt_ss12'];
        $ss13_up =  $_POST['txt_ss13'];
        $ss14_up =  $_POST['txt_ss14'];
        $ss15_up =  $_POST['txt_ss15'];


        $s1_up = $_POST['txt_s1'];
        $s2_up = $_POST['txt_s2'];
        $s3_up = $_POST['txt_s3'];
        $s4_up = $_POST['txt_s4'];
        $s5_up = $_POST['txt_s5'];
        $s6_up = $_POST['txt_s6'];
        $s7_up = $_POST['txt_s7'];
        $s8_up =  $_POST['txt_s8'];
        $s9_up =  $_POST['txt_s9'];
        $s10_up =  $_POST['txt_s10'];
        $s11_up =  $_POST['txt_s11'];
        $s12_up =  $_POST['txt_s12'];
        $s13_up =  $_POST['txt_s13'];
        $s14_up =  $_POST['txt_s14'];
        $s15_up =  $_POST['txt_s15'];

        $m1_up =  $_POST['txt_m1'];
        $m2_up =  $_POST['txt_m2'];
        $m3_up =  $_POST['txt_m3'];
        $m4_up =  $_POST['txt_m4'];
        $m5_up =  $_POST['txt_m5'];
        $m6_up =  $_POST['txt_m6'];
        $m7_up =  $_POST['txt_m7'];
        $m8_up =  $_POST['txt_m8'];
        $m9_up =  $_POST['txt_m9'];
        $m10_up =  $_POST['txt_m10'];
        $m11_up =  $_POST['txt_m11'];
        $m12_up =  $_POST['txt_m12'];
        $m13_up =  $_POST['txt_m13'];
        $m14_up =  $_POST['txt_m14'];
        $m15_up =  $_POST['txt_m15'];

        $l1_up =  $_POST['txt_l1'];
        $l2_up =  $_POST['txt_l2'];
        $l3_up =  $_POST['txt_l3'];
        $l4_up =  $_POST['txt_l4'];
        $l5_up =  $_POST['txt_l5'];
        $l6_up =  $_POST['txt_l6'];
        $l7_up =  $_POST['txt_l7'];
        $l8_up =  $_POST['txt_l8'];
        $l9_up =  $_POST['txt_l9'];
        $l10_up =  $_POST['txt_l10'];
        $l11_up =  $_POST['txt_l11'];
        $l12_up =  $_POST['txt_l12'];
        $l13_up =  $_POST['txt_l13'];
        $l14_up =  $_POST['txt_l14'];
        $l15_up =  $_POST['txt_l15'];

        $xl1_up =  $_POST['txt_xl1'];
        $xl2_up =  $_POST['txt_xl2'];
        $xl3_up =  $_POST['txt_xl3'];
        $xl4_up =  $_POST['txt_xl4'];
        $xl5_up =  $_POST['txt_xl5'];
        $xl6_up =  $_POST['txt_xl6'];
        $xl7_up =  $_POST['txt_xl7'];
        $xl8_up =  $_POST['txt_xl8'];
        $xl9_up =  $_POST['txt_xl9'];
        $xl10_up =  $_POST['txt_xl10'];
        $xl11_up =  $_POST['txt_xl11'];
        $xl12_up =  $_POST['txt_xl12'];
        $xl13_up =  $_POST['txt_xl13'];
        $xl14_up =  $_POST['txt_xl14'];
        $xl15_up =  $_POST['txt_xl15'];

        $xl21_up =  $_POST['txt_xl21'];
        $xl22_up =  $_POST['txt_xl22'];
        $xl23_up =  $_POST['txt_xl23'];
        $xl24_up =  $_POST['txt_xl24'];
        $xl25_up =  $_POST['txt_xl25'];
        $xl26_up =  $_POST['txt_xl26'];
        $xl27_up =  $_POST['txt_xl27'];
        $xl28_up =  $_POST['txt_xl28'];
        $xl29_up =  $_POST['txt_xl29'];
        $xl210_up =  $_POST['txt_xl210'];
        $xl211_up =  $_POST['txt_xl211'];
        $xl212_up =  $_POST['txt_xl212'];
        $xl213_up =  $_POST['txt_xl213'];
        $xl214_up =  $_POST['txt_xl214'];
        $xl215_up =  $_POST['txt_xl215'];

        $xl31_up = $_POST['txt_xl31'];
        $xl32_up = $_POST['txt_xl32'];
        $xl33_up = $_POST['txt_xl33'];
        $xl34_up = $_POST['txt_xl34'];
        $xl35_up = $_POST['txt_xl35'];
        $xl36_up = $_POST['txt_xl36'];
        $xl37_up = $_POST['txt_xl37'];
        $xl38_up =  $_POST['txt_xl38'];
        $xl39_up =  $_POST['txt_xl39'];
        $xl310_up =  $_POST['txt_xl310'];
        $xl311_up =  $_POST['txt_xl311'];
        $xl312_up =  $_POST['txt_xl312'];
        $xl313_up =  $_POST['txt_xl313'];
        $xl314_up =  $_POST['txt_xl314'];
        $xl315_up =  $_POST['txt_xl315'];

        $xl41_up =  $_POST['txt_xl41'];
        $xl42_up =  $_POST['txt_xl42'];
        $xl43_up =  $_POST['txt_xl43'];
        $xl44_up =  $_POST['txt_xl44'];
        $xl45_up =  $_POST['txt_xl45'];
        $xl46_up =  $_POST['txt_xl46'];
        $xl47_up =  $_POST['txt_xl47'];
        $xl48_up =  $_POST['txt_xl48'];
        $xl49_up =  $_POST['txt_xl49'];
        $xl410_up =  $_POST['txt_xl410'];
        $xl411_up =  $_POST['txt_xl411'];
        $xl412_up =  $_POST['txt_xl412'];
        $xl413_up =  $_POST['txt_xl413'];
        $xl414_up =  $_POST['txt_xl414'];
        $xl415_up =  $_POST['txt_xl415'];

        $xl51_up =  $_POST['txt_xl51'];
        $xl52_up =  $_POST['txt_xl52'];
        $xl53_up =  $_POST['txt_xl53'];
        $xl54_up =  $_POST['txt_xl54'];
        $xl55_up =  $_POST['txt_xl55'];
        $xl56_up =  $_POST['txt_xl56'];
        $xl57_up =  $_POST['txt_xl57'];
        $xl58_up =  $_POST['txt_xl58'];
        $xl59_up =  $_POST['txt_xl59'];
        $xl510_up =  $_POST['txt_xl510'];
        $xl511_up =  $_POST['txt_xl511'];
        $xl512_up =  $_POST['txt_xl512'];
        $xl513_up =  $_POST['txt_xl513'];
        $xl514_up =  $_POST['txt_xl514'];
        $xl515_up =  $_POST['txt_xl515'];

        $xl61_up =  $_POST['txt_xl61'];
        $xl62_up =  $_POST['txt_xl62'];
        $xl63_up =  $_POST['txt_xl63'];
        $xl64_up =  $_POST['txt_xl64'];
        $xl65_up =  $_POST['txt_xl65'];
        $xl66_up =  $_POST['txt_xl66'];
        $xl67_up =  $_POST['txt_xl67'];
        $xl68_up =  $_POST['txt_xl68'];
        $xl69_up =  $_POST['txt_xl69'];
        $xl610_up =  $_POST['txt_xl610'];
        $xl611_up =  $_POST['txt_xl611'];
        $xl612_up =  $_POST['txt_xl612'];
        $xl613_up =  $_POST['txt_xl613'];
        $xl614_up =  $_POST['txt_xl614'];
        $xl615_up =  $_POST['txt_xl615'];
        
        $xl71_up =  $_POST['txt_xl71'];
        $xl72_up =  $_POST['txt_xl72'];
        $xl73_up =  $_POST['txt_xl73'];
        $xl74_up =  $_POST['txt_xl74'];
        $xl75_up =  $_POST['txt_xl75'];
        $xl76_up =  $_POST['txt_xl76'];
        $xl77_up =  $_POST['txt_xl77'];
        $xl78_up =  $_POST['txt_xl78'];
        $xl79_up =  $_POST['txt_xl79'];
        $xl710_up =  $_POST['txt_xl710'];
        $xl711_up =  $_POST['txt_xl711'];
        $xl712_up =  $_POST['txt_xl712'];
        $xl713_up =  $_POST['txt_xl713'];
        $xl714_up =  $_POST['txt_xl714'];
        $xl715_up =  $_POST['txt_xl715'];

        $nmpack1_up =  $_POST['txt_nmpack1'];
        $nmpack2_up =  $_POST['txt_nmpack2'];
        $nmpack3_up =  $_POST['txt_nmpack3'];
        $nmpack4_up =  $_POST['txt_nmpack4'];
        $nmpack5_up =  $_POST['txt_nmpack5'];

        $nes_up =  $_POST['txt_nes'];
        $nem_up =  $_POST['txt_nem'];
        $nemg_up =  $_POST['txt_nemg'];
        $timess_up =  $_POST['txt_timess'];
        $timem_up =  $_POST['txt_timem'];
        $timemg_up =  $_POST['txt_timemg'];
        $note_up =  $_POST['txt_note'];

        $number1_up =  $_POST['number1'];
        $number2_up =  $_POST['number2'];
        $number3_up =  $_POST['number3'];
        $number4_up =  $_POST['number4'];
        $number5_up =  $_POST['number5'];
        
        $nums_up = array();

        for ($i = 1; $i <= 15; $i++) {
            $nums_up[$i] = isset($_POST['num' . $i]) ? $_POST['num' . $i] : 0;
        }
        
        if (!empty($_POST['ddl_new_ptc'])) {
            $new_ptc_up = $_POST['ddl_new_ptc'];
        } elseif (!empty($_POST['txt_new_ptc'])) {
            $new_ptc_up = $_POST['txt_new_ptc'];
        } else {
            // กรณีที่ทั้ง 'ddl_new_ptc' และ 'txt_new_ptc' ไม่ได้รับค่า
            // ให้ทำอะไรตามความเหมาะสม เช่น กำหนดค่าเริ่มต้นหรือแจ้งเตือน
        }

        if (!empty($_POST['ddl_nmod'])) {
            $nmod_up = $_POST['ddl_nmod'];
        } elseif (!empty($_POST['txt_nmod'])) {
            $nmod_up = $_POST['txt_nmod'];
        } else {
            // กรณีที่ทั้ง 'ddl_nmod' และ 'txt_nmod' ไม่ได้รับค่า
            // ให้ทำอะไรตามความเหมาะสม เช่น กำหนดค่าเริ่มต้นหรือแจ้งเตือน
        }
    
        $result_v1_up = 0;
        $result_v2_up = 0;
        $result_v3_up = 0;
        $result_v4_up = 0;
        $result_v5_up = 0;
        $result_v6_up = 0;
        $result_v7_up = 0;
        $result_v8_up = 0;
        $result_v9_up = 0;
        $result_v10_up = 0;
        $result_v11_up = 0;

        // แปลงค่าสตริงเป็นตัวเลขและบวกค่าของแต่ละตัวแปร
        $od_v1 = isset($_REQUEST['txt_od_v1']) ? floatval($_REQUEST['txt_od_v1']) : 0;
        $od_v2 = isset($_REQUEST['txt_od_v2']) ? floatval($_REQUEST['txt_od_v2']) : 0;
        $od_v3 = isset($_REQUEST['txt_od_v3']) ? floatval($_REQUEST['txt_od_v3']) : 0;
        $od_v4 = isset($_REQUEST['txt_od_v4']) ? floatval($_REQUEST['txt_od_v4']) : 0;
        $od_v5 = isset($_REQUEST['txt_od_v5']) ? floatval($_REQUEST['txt_od_v5']) : 0;
        $od_v6 = isset($_REQUEST['txt_od_v6']) ? floatval($_REQUEST['txt_od_v6']) : 0;
        $od_v7 = isset($_REQUEST['txt_od_v7']) ? floatval($_REQUEST['txt_od_v7']) : 0;
        $od_v8 = isset($_REQUEST['txt_od_v8']) ? floatval($_REQUEST['txt_od_v8']) : 0;
        $od_v9 = isset($_REQUEST['txt_od_v9']) ? floatval($_REQUEST['txt_od_v9']) : 0;
        $od_v10 = isset($_REQUEST['txt_od_v10']) ? floatval($_REQUEST['txt_od_v10']) : 0;

        $result_v1_up = $od_v1 + $od_v2 + $od_v3 + $od_v4 + $od_v5 + $od_v6 + $od_v7 + $od_v8 + $od_v9 + $od_v10;

        $od_a1 = isset($_REQUEST['txt_od_a1']) ? floatval($_REQUEST['txt_od_a1']) : 0;
        $od_a2 = isset($_REQUEST['txt_od_a2']) ? floatval($_REQUEST['txt_od_a2']) : 0;
        $od_a3 = isset($_REQUEST['txt_od_a3']) ? floatval($_REQUEST['txt_od_a3']) : 0;
        $od_a4 = isset($_REQUEST['txt_od_a4']) ? floatval($_REQUEST['txt_od_a4']) : 0;
        $od_a5 = isset($_REQUEST['txt_od_a5']) ? floatval($_REQUEST['txt_od_a5']) : 0;
        $od_a6 = isset($_REQUEST['txt_od_a6']) ? floatval($_REQUEST['txt_od_a6']) : 0;
        $od_a7 = isset($_REQUEST['txt_od_a7']) ? floatval($_REQUEST['txt_od_a7']) : 0;
        $od_a8 = isset($_REQUEST['txt_od_a8']) ? floatval($_REQUEST['txt_od_a8']) : 0;
        $od_a9 = isset($_REQUEST['txt_od_a9']) ? floatval($_REQUEST['txt_od_a9']) : 0;
        $od_a10 = isset($_REQUEST['txt_od_a10']) ? floatval($_REQUEST['txt_od_a10']) : 0;

        $result_v2_up = $od_a1 + $od_a2 + $od_a3 + $od_a4 + $od_a5 + $od_a6 + $od_a7 + $od_a8 + $od_a9 + $od_a10;

        $od_s1 = isset($_REQUEST['txt_od_s1']) ? floatval($_REQUEST['txt_od_s1']) : 0;
        $od_s2 = isset($_REQUEST['txt_od_s2']) ? floatval($_REQUEST['txt_od_s2']) : 0;
        $od_s3 = isset($_REQUEST['txt_od_s3']) ? floatval($_REQUEST['txt_od_s3']) : 0;
        $od_s4 = isset($_REQUEST['txt_od_s4']) ? floatval($_REQUEST['txt_od_s4']) : 0;
        $od_s5 = isset($_REQUEST['txt_od_s5']) ? floatval($_REQUEST['txt_od_s5']) : 0;
        $od_s6 = isset($_REQUEST['txt_od_s6']) ? floatval($_REQUEST['txt_od_s6']) : 0;
        $od_s7 = isset($_REQUEST['txt_od_s7']) ? floatval($_REQUEST['txt_od_s7']) : 0;
        $od_s8 = isset($_REQUEST['txt_od_s8']) ? floatval($_REQUEST['txt_od_s8']) : 0;
        $od_s9 = isset($_REQUEST['txt_od_s9']) ? floatval($_REQUEST['txt_od_s9']) : 0;
        $od_s10 = isset($_REQUEST['txt_od_s10']) ? floatval($_REQUEST['txt_od_s10']) : 0;

        $result_v3_up = $od_s1 + $od_s2 + $od_s3 + $od_s4 + $od_s5 + $od_s6 + $od_s7 + $od_s8 + $od_s9 + $od_s10;

        $od_d1 = isset($_REQUEST['txt_od_d1']) ? floatval($_REQUEST['txt_od_d1']) : 0;
        $od_d2 = isset($_REQUEST['txt_od_d2']) ? floatval($_REQUEST['txt_od_d2']) : 0;
        $od_d3 = isset($_REQUEST['txt_od_d3']) ? floatval($_REQUEST['txt_od_d3']) : 0;
        $od_d4 = isset($_REQUEST['txt_od_d4']) ? floatval($_REQUEST['txt_od_d4']) : 0;
        $od_d5 = isset($_REQUEST['txt_od_d5']) ? floatval($_REQUEST['txt_od_d5']) : 0;
        $od_d6 = isset($_REQUEST['txt_od_d6']) ? floatval($_REQUEST['txt_od_d6']) : 0;
        $od_d7 = isset($_REQUEST['txt_od_d7']) ? floatval($_REQUEST['txt_od_d7']) : 0;
        $od_d8 = isset($_REQUEST['txt_od_d8']) ? floatval($_REQUEST['txt_od_d8']) : 0;
        $od_d9 = isset($_REQUEST['txt_od_d9']) ? floatval($_REQUEST['txt_od_d9']) : 0;
        $od_d10 = isset($_REQUEST['txt_od_d10']) ? floatval($_REQUEST['txt_od_d10']) : 0;

        $result_v4_up = $od_d1 + $od_d2 + $od_d3 + $od_d4 + $od_d5 + $od_d6 + $od_d7 + $od_d8 + $od_d9 + $od_d10;

        $od_f1 = isset($_REQUEST['txt_od_f1']) ? floatval($_REQUEST['txt_od_f1']) : 0;
        $od_f2 = isset($_REQUEST['txt_od_f2']) ? floatval($_REQUEST['txt_od_f2']) : 0;
        $od_f3 = isset($_REQUEST['txt_od_f3']) ? floatval($_REQUEST['txt_od_f3']) : 0;
        $od_f4 = isset($_REQUEST['txt_od_f4']) ? floatval($_REQUEST['txt_od_f4']) : 0;
        $od_f5 = isset($_REQUEST['txt_od_f5']) ? floatval($_REQUEST['txt_od_f5']) : 0;
        $od_f6 = isset($_REQUEST['txt_od_f6']) ? floatval($_REQUEST['txt_od_f6']) : 0;
        $od_f7 = isset($_REQUEST['txt_od_f7']) ? floatval($_REQUEST['txt_od_f7']) : 0;
        $od_f8 = isset($_REQUEST['txt_od_f8']) ? floatval($_REQUEST['txt_od_f8']) : 0;
        $od_f9 = isset($_REQUEST['txt_od_f9']) ? floatval($_REQUEST['txt_od_f9']) : 0;
        $od_f10 = isset($_REQUEST['txt_od_f10']) ? floatval($_REQUEST['txt_od_f10']) : 0;

        $result_v5_up = $od_f1 + $od_f2 + $od_f3 + $od_f4 + $od_f5 + $od_f6 + $od_f7 + $od_f8 + $od_f9 + $od_f10;

        $od_g1 = isset($_REQUEST['txt_od_g1']) ? floatval($_REQUEST['txt_od_g1']) : 0;
        $od_g2 = isset($_REQUEST['txt_od_g2']) ? floatval($_REQUEST['txt_od_g2']) : 0;
        $od_g3 = isset($_REQUEST['txt_od_g3']) ? floatval($_REQUEST['txt_od_g3']) : 0;
        $od_g4 = isset($_REQUEST['txt_od_g4']) ? floatval($_REQUEST['txt_od_g4']) : 0;
        $od_g5 = isset($_REQUEST['txt_od_g5']) ? floatval($_REQUEST['txt_od_g5']) : 0;
        $od_g6 = isset($_REQUEST['txt_od_g6']) ? floatval($_REQUEST['txt_od_g6']) : 0;
        $od_g7 = isset($_REQUEST['txt_od_g7']) ? floatval($_REQUEST['txt_od_g7']) : 0;
        $od_g8 = isset($_REQUEST['txt_od_g8']) ? floatval($_REQUEST['txt_od_g8']) : 0;
        $od_g9 = isset($_REQUEST['txt_od_g9']) ? floatval($_REQUEST['txt_od_g9']) : 0;
        $od_g10 = isset($_REQUEST['txt_od_g10']) ? floatval($_REQUEST['txt_od_g10']) : 0;

        $result_v6_up = $od_g1 + $od_g2 + $od_g3 + $od_g4 + $od_g5 + $od_g6 + $od_g7 + $od_g8 + $od_g9 + $od_g10;

        $od_h1 = isset($_REQUEST['txt_od_h1']) ? floatval($_REQUEST['txt_od_h1']) : 0;
        $od_h2 = isset($_REQUEST['txt_od_h2']) ? floatval($_REQUEST['txt_od_h2']) : 0;
        $od_h3 = isset($_REQUEST['txt_od_h3']) ? floatval($_REQUEST['txt_od_h3']) : 0;
        $od_h4 = isset($_REQUEST['txt_od_h4']) ? floatval($_REQUEST['txt_od_h4']) : 0;
        $od_h5 = isset($_REQUEST['txt_od_h5']) ? floatval($_REQUEST['txt_od_h5']) : 0;
        $od_h6 = isset($_REQUEST['txt_od_h6']) ? floatval($_REQUEST['txt_od_h6']) : 0;
        $od_h7 = isset($_REQUEST['txt_od_h7']) ? floatval($_REQUEST['txt_od_h7']) : 0;
        $od_h8 = isset($_REQUEST['txt_od_h8']) ? floatval($_REQUEST['txt_od_h8']) : 0;
        $od_h9 = isset($_REQUEST['txt_od_h9']) ? floatval($_REQUEST['txt_od_h9']) : 0;
        $od_h10 = isset($_REQUEST['txt_od_h10']) ? floatval($_REQUEST['txt_od_h10']) : 0;

        $result_v7_up = $od_h1 + $od_h2 + $od_h3 + $od_h4 + $od_h5 + $od_h6 + $od_h7 + $od_h8 + $od_h9 + $od_h10;


        $if_v1 = isset($_REQUEST['txt_if_v1']) ? floatval($_REQUEST['txt_if_v1']) : 0;
        $if_v2 = isset($_REQUEST['txt_if_v2']) ? floatval($_REQUEST['txt_if_v2']) : 0;
        $if_v3 = isset($_REQUEST['txt_if_v3']) ? floatval($_REQUEST['txt_if_v3']) : 0;
        $if_v4 = isset($_REQUEST['txt_if_v4']) ? floatval($_REQUEST['txt_if_v4']) : 0;
        $if_v5 = isset($_REQUEST['txt_if_v5']) ? floatval($_REQUEST['txt_if_v5']) : 0;
        $if_v6 = isset($_REQUEST['txt_if_v6']) ? floatval($_REQUEST['txt_if_v6']) : 0;
        $if_v7 = isset($_REQUEST['txt_if_v7']) ? floatval($_REQUEST['txt_if_v7']) : 0;
        $if_v8 = isset($_REQUEST['txt_if_v8']) ? floatval($_REQUEST['txt_if_v8']) : 0;
        $if_v9 = isset($_REQUEST['txt_if_v9']) ? floatval($_REQUEST['txt_if_v9']) : 0;
        $if_v10 = isset($_REQUEST['txt_if_v10']) ? floatval($_REQUEST['txt_if_v10']) : 0;

        $result_v8_up = $if_v1 + $if_v2 + $if_v3 + $if_v4 + $if_v5 + $if_v6 + $if_v7 + $if_v8 + $if_v9 + $if_v10;


        $cut_v1 = isset($_REQUEST['txt_cut_v1']) ? floatval($_REQUEST['txt_cut_v1']) : 0;
        $cut_v2 = isset($_REQUEST['txt_cut_v2']) ? floatval($_REQUEST['txt_cut_v2']) : 0;
        $cut_v3 = isset($_REQUEST['txt_cut_v3']) ? floatval($_REQUEST['txt_cut_v3']) : 0;
        $cut_v4 = isset($_REQUEST['txt_cut_v4']) ? floatval($_REQUEST['txt_cut_v4']) : 0;
        $cut_v5 = isset($_REQUEST['txt_cut_v5']) ? floatval($_REQUEST['txt_cut_v5']) : 0;
        $cut_v6 = isset($_REQUEST['txt_cut_v6']) ? floatval($_REQUEST['txt_cut_v6']) : 0;
        $cut_v7 = isset($_REQUEST['txt_cut_v7']) ? floatval($_REQUEST['txt_cut_v7']) : 0;
        $cut_v8 = isset($_REQUEST['txt_cut_v8']) ? floatval($_REQUEST['txt_cut_v8']) : 0;
        $cut_v9 = isset($_REQUEST['txt_cut_v9']) ? floatval($_REQUEST['txt_cut_v9']) : 0;
        $cut_v10 = isset($_REQUEST['txt_cut_v10']) ? floatval($_REQUEST['txt_cut_v10']) : 0;

        $result_v9_up = $cut_v1 + $cut_v2 + $cut_v3 + $cut_v4 + $cut_v5 + $cut_v6 + $cut_v7 + $cut_v8 + $cut_v9 + $cut_v10;

        $cuttrue_v1 = isset($_REQUEST['txt_cuttrue_v1']) ? floatval($_REQUEST['txt_cuttrue_v1']) : 0;
        $cuttrue_v2 = isset($_REQUEST['txt_cuttrue_v2']) ? floatval($_REQUEST['txt_cuttrue_v2']) : 0;
        $cuttrue_v3 = isset($_REQUEST['txt_cuttrue_v3']) ? floatval($_REQUEST['txt_cuttrue_v3']) : 0;
        $cuttrue_v4 = isset($_REQUEST['txt_cuttrue_v4']) ? floatval($_REQUEST['txt_cuttrue_v4']) : 0;
        $cuttrue_v5 = isset($_REQUEST['txt_cuttrue_v5']) ? floatval($_REQUEST['txt_cuttrue_v5']) : 0;
        $cuttrue_v6 = isset($_REQUEST['txt_cuttrue_v6']) ? floatval($_REQUEST['txt_cuttrue_v6']) : 0;
        $cuttrue_v7 = isset($_REQUEST['txt_cuttrue_v7']) ? floatval($_REQUEST['txt_cuttrue_v7']) : 0;
        $cuttrue_v8 = isset($_REQUEST['txt_cuttrue_v8']) ? floatval($_REQUEST['txt_cuttrue_v8']) : 0;
        $cuttrue_v9 = isset($_REQUEST['txt_cuttrue_v9']) ? floatval($_REQUEST['txt_cuttrue_v9']) : 0;
        $cuttrue_v10 = isset($_REQUEST['txt_cuttrue_v10']) ? floatval($_REQUEST['txt_cuttrue_v10']) : 0;

        $result_v10_up = $cuttrue_v1 + $cuttrue_v2 + $cuttrue_v3 + $cuttrue_v4 + $cuttrue_v5 + $cuttrue_v6 + $cuttrue_v7 + $cuttrue_v8 + $cuttrue_v9 + $cuttrue_v10;

    


        $all1 = ($od_v1 + $od_a1 + $od_s1 + $od_d1 + $od_f1 + $od_g1 + $od_h1);
        $all2 = ($od_v2 + $od_a2 + $od_s2 + $od_d2 + $od_f2 + $od_g2 + $od_h2);
        $all3 = ($od_v3 + $od_a3 + $od_s3 + $od_d3 + $od_f3 + $od_g3 + $od_h3);
        $all4 = ($od_v4 + $od_a4 + $od_s4 + $od_d4 + $od_f4 + $od_g4 + $od_h4);
        $all5 = ($od_v5 + $od_a5 + $od_s5 + $od_d5 + $od_f5 + $od_g5 + $od_h5);
        $all6 = ($od_v6 + $od_a6 + $od_s6 + $od_d6 + $od_f6 + $od_g6 + $od_h6);
        $all7 = ($od_v7 + $od_a7 + $od_s7 + $od_d7 + $od_f7 + $od_g7 + $od_h7);
        $all8 = ($od_v8 + $od_a8 + $od_s8 + $od_d8 + $od_f8 + $od_g8 + $od_h8);
        $all9 = ($od_v9 + $od_a9 + $od_s9 + $od_d9 + $od_f9 + $od_g9 + $od_h9);
        $all10 = ($od_v10 + $od_a10 + $od_s10 + $od_d10 + $od_f10 + $od_g10 + $od_h10);

        $cut_v1 = $all1 + $if_v1;
        $cut_v2 = $all2 + $if_v2;
        $cut_v3 = $all3 + $if_v3;
        $cut_v4 = $all4 + $if_v4;
        $cut_v5 = $all5 + $if_v5;
        $cut_v6 = $all6 + $if_v6;
        $cut_v7 = $all7 + $if_v7;
        $cut_v8 = $all8 + $if_v8;
        $cut_v9 = $all9 + $if_v9;
        $cut_v10 = $all10 + $if_v10;
        $result_v9_up = $cut_v1 + $cut_v2 + $cut_v3 + $cut_v4 + $cut_v5 + $cut_v6 + $cut_v7 + $cut_v8 + $cut_v9 + $cut_v10;

        $result_v11_up = $result_v1 + $result_v2 + $result_v3 + $result_v4 + $result_v5 + $result_v6 + $result_v7 + $result_v8 + $result_v9 + $result_v10;

        for ($i = 1; $i <= 5; $i++) {
            $input = isset($_REQUEST['number' . $i]) ? floatval($_REQUEST['number' . $i]) : 0;
            ${'nmpack' . $i} = $input * $result_v9;
        }
        
        for ($i = 1; $i <= 15; $i++) {
            $input = isset($_REQUEST['num' . $i]) ? floatval($_REQUEST['num' . $i]) : 0;
            ${'detv' . $i} = $input * $result_v9;
        }
        

        if (empty($name_op_up)) {
            $errorMsg = "กรุณากรอกข้อมูล";
        } 
        else {
            try {
                if (!isset($errorMsg)) {
                    $update_stmt = $db->prepare("UPDATE db_op SET 
                    name_op = :np, fn = :fn, nmod = :nmod, new_ptc = :nt, ks = :ks, timeing = :tm, 
                    size_v1 = :si1, size_v2 = :si2, size_v3 = :si3, size_v4 = :si4, size_v5 = :si5, 
                    size_v6 = :si6, size_v7 = :si7, size_v8 = :si8, size_v9 = :si9, size_v10 = :si10, 
                    od_v1 = :od1, od_v2 = :od2, od_v3 = :od3, od_v4 = :od4, od_v5 = :od5, 
                    od_v6 = :od6, od_v7 = :od7, od_v8 = :od8, od_v9 = :od9, od_v10 = :od10, 
                    od_a1 = :oda1, od_a2 = :oda2, od_a3 = :oda3, od_a4 = :oda4, od_a5 = :oda5, 
                    od_a6 = :oda6, od_a7 = :oda7, od_a8 = :oda8, od_a9 = :oda9, od_a10 = :oda10, 
                    od_s1 = :ods1, od_s2 = :ods2, od_s3 = :ods3, od_s4 = :ods4, od_s5 = :ods5, 
                    od_s6 = :ods6, od_s7 = :ods7, od_s8 = :ods8, od_s9 = :ods9, od_s10 = :ods10, 
                    od_d1 = :odd1, od_d2 = :odd2, od_d3 = :odd3, od_d4 = :odd4, od_d5 = :odd5, 
                    od_d6 = :odd6, od_d7 = :odd7, od_d8 = :odd8, od_d9 = :odd9, od_d10 = :odd10, 
                    od_f1 = :odf1, od_f2 = :odf2, od_f3 = :odf3, od_f4 = :odf4, od_f5 = :odf5, 
                    od_f6 = :odf6, od_f7 = :odf7, od_f8 = :odf8, od_f9 = :odf9, od_f10 = :odf10, 
                    od_g1 = :odg1, od_g2 = :odg2, od_g3 = :odg3, od_g4 = :odg4, od_g5 = :odg5, 
                    od_g6 = :odg6, od_g7 = :odg7, od_g8 = :odg8, od_g9 = :odg9, od_g10 = :odg10, 
                    od_h1 = :odh1, od_h2 = :odh2, od_h3 = :odh3, od_h4 = :odh4, od_h5 = :odh5, 
                    od_h6 = :odh6, od_h7 = :odh7, od_h8 = :odh8, od_h9 = :odh9, od_h10 = :odh10, 
                    od_j1 = :odj1, od_j2 = :odj2, od_j3 = :odj3, od_j4 = :odj4, od_j5 = :odj5, 
                    od_j6 = :odj6, od_j7 = :odj7,
                    if_v0 = :if_0, if_v1 = :if_1, if_v2 = :if_2, if_v3 = :if_3, if_v4 = :if_4, 
                    if_v5 = :if_5, if_v6 = :if_6, if_v7 = :if_7, if_v8 = :if_8, if_v9 = :if_9, if_v10 = :if_10, 
                    cut_v1 = :cut1, cut_v2 = :cut2, cut_v3 = :cut3, cut_v4 = :cut4, cut_v5 = :cut5, 
                    cut_v6 = :cut6, cut_v7 = :cut7, cut_v8 = :cut8, cut_v9 = :cut9, cut_v10 = :cut10, 
                    cuttrue_v1 = :ct1, cuttrue_v2 = :ct2, cuttrue_v3 = :ct3, cuttrue_v4 = :ct4, cuttrue_v5 = :ct5, 
                    cuttrue_v6 = :ct6, cuttrue_v7 = :ct7, cuttrue_v8 = :ct8, cuttrue_v9 = :ct9, cuttrue_v10 = :ct10, 
                    result_v1 = :result1, result_v2 = :result2, result_v3 = :result3, result_v4 = :result4, result_v5 = :result5, 
                    result_v6 = :result6, result_v7 = :result7, result_v8 = :result8, result_v9 = :result9, result_v10 = :result10, result_v11 = :result11, 
                    details = :dt, details0 = :dt0, details_v1 = :dt1, details_v2 = :dt2, details_v3 = :dt3, 
                    details_v4 = :dt4, details_v5 = :dt5, details_v6 = :dt6, details_v7 = :dt7, details_v8 = :dt8, details_v9 = :dt9, details_v10 = :dt10, 
                    details_v11 = :dt11, details_v12 = :dt12, details_v13 = :dt13, details_v14 = :dt14, details_v15 = :dt15, 
                    details_v16 = :dt16, details_v17 = :dt17, details_v18 = :dt18, details_v19 = :dt19, details_v20 = :dt20, 
                    details_v21 = :dt21, details_v22 = :dt22, details_v23 = :dt23, details_v24 = :dt24, details_v25 = :dt25, 
                    details_v26 = :dt26, details_v27 = :dt27, details_v28 = :dt28, details_v29 = :dt29, 
                    nmdetails1 = :nd1, nmdetails2 = :nd2, nmdetails3 = :nd3, nmdetails4 = :nd4, nmdetails5 = :nd5, 
                    nmdetails6 = :nd6, nmdetails7 = :nd7, nmdetails8 = :nd8, nmdetails9 = :nd9, nmdetails10 = :nd10, 
                    nmdetails11 = :nd11, nmdetails12 = :nd12, nmdetails13 = :nd13, nmdetails14 = :nd14, nmdetails15 = :nd15, 
                    nmdetails16 = :nd16, nmdetails17 = :nd17, nmdetails18 = :nd18, nmdetails19 = :nd19, nmdetails20 = :nd20, 
                    nmdetails21 = :nd21, nmdetails22 = :nd22, nmdetails23 = :nd23, nmdetails24 = :nd24, nmdetails25 = :nd25, 
                    nmdetails26 = :nd26, nmdetails27 = :nd27, nmdetails28 = :nd28, nmdetails29 = :nd29, 
                    detv1 = :dv1, detv2 = :dv2, detv3 = :dv3, detv4 = :dv4, detv5 = :dv5, 
                    detv6 = :dv6, detv7 = :dv7, detv8 = :dv8, detv9 = :dv9, detv10 = :dv10, 
                    detv11 = :dv11, detv12 = :dv12, detv13 = :dv13, detv14 = :dv14, detv15 = :dv15, 
                    detv16 = :dv16, detv17 = :dv17, detv18 = :dv18, detv19 = :dv19, detv20 = :dv20, 
                    detv21 = :dv21, detv22 = :dv22, detv23 = :dv23, detv24 = :dv24, detv25 = :dv25, 
                    detv26 = :dv26, detv27 = :dv27, detv28 = :dv28, detv29 = :dv29, 
                    pin0 = :p, pin1 = :p1, pin2 = :p2, pin3 = :p3, pin4 = :p4, pin5 = :p5, 
                    pack1 = :pa1, pack2 = :pa2, pack3 = :pa3, pack4 = :pa4, pack5 = :pa5, 
                    nmpack1 = :nmp1, nmpack2 = :nmp2, nmpack3 = :nmp3, nmpack4 = :nmp4, nmpack5 = :nmp5, 
                    note = :ne, image = :image, image2 = :image2, image3 = :image3, image4 = :image4, 
                    size_details1 = :sd1, size_details2 = :sd2, size_details3 = :sd3, size_details4 = :sd4, size_details5 = :sd5, 
                    size_details6 = :sd6, size_details7 = :sd7, size_details8 = :sd8, size_details9 = :sd9, size_details10 = :sd10, 
                    size_details11 = :sd11, size_details12 = :sd12, size_details13 = :sd13, size_details14 = :sd14, size_details15 = :sd15, 
                    ss1 = :ss1, ss2 = :ss2, ss3 = :ss3, ss4 = :ss4, ss5 = :ss5, ss6 = :ss6, ss7 = :ss7, ss8 = :ss8, ss9 = :ss9, ss10 = :ss10, 
                    ss11 = :ss11, ss12 = :ss12, ss13 = :ss13, ss14 = :ss14, ss15 = :ss15, 
                    s1 = :s1, s2 = :s2, s3 = :s3, s4 = :s4, s5 = :s5, s6 = :s6, s7 = :s7, s8 = :s8, s9 = :s9, s10 = :s10, 
                    s11 = :s11, s12 = :s12, s13 = :s13, s14 = :s14, s15 = :s15, 
                    m1 = :m1, m2 = :m2, m3 = :m3, m4 = :m4, m5 = :m5, m6 = :m6, m7 = :m7, m8 = :m8, m9 = :m9, m10 = :m10, 
                    m11 = :m11, m12 = :m12, m13 = :m13, m14 = :m14, m15 = :m15, 
                    l1 = :l1, l2 = :l2, l3 = :l3, l4 = :l4, l5 = :l5, l6 = :l6, l7 = :l7, l8 = :l8, l9 = :l9, l10 = :l10, 
                    l11 = :l11, l12 = :l12, l13 = :l13, l14 = :l14, l15 = :l15, 
                    xl1 = :xl1, xl2 = :xl2, xl3 = :xl3, xl4 = :xl4, xl5 = :xl5, xl6 = :xl6, xl7 = :xl7, xl8 = :xl8, xl9 = :xl9, xl10 = :xl10, 
                    xl11 = :xl11, xl12 = :xl12, xl13 = :xl13, xl14 = :xl14, xl15 = :xl15, 
                    xl21 = :xl21, xl22 = :xl22, xl23 = :xl23, xl24 = :xl24, xl25 = :xl25, xl26 = :xl26, xl27 = :xl27, xl28 = :xl28, xl29 = :xl29, 
                    xl210 = :xl210, xl211 = :xl211, xl212 = :xl212, xl213 = :xl213, xl214 = :xl214, xl215 = :xl215, 
                    xl31 = :xl31, xl32 = :xl32, xl33 = :xl33, xl34 = :xl34, xl35 = :xl35, xl36 = :xl36, xl37 = :xl37, xl38 = :xl38, xl39 = :xl39, 
                    xl310 = :xl310, xl311 = :xl311, xl312 = :xl312, xl313 = :xl313, xl314 = :xl314, xl315 = :xl315, 
                    xl41 = :xl41, xl42 = :xl42, xl43 = :xl43, xl44 = :xl44, xl45 = :xl45, xl46 = :xl46, xl47 = :xl47, xl48 = :xl48, xl49 = :xl49, 
                    xl410 = :xl410, xl411 = :xl411, xl412 = :xl412, xl413 = :xl413, xl414 = :xl414, xl415 = :xl415, 
                    xl51 = :xl51, xl52 = :xl52, xl53 = :xl53, xl54 = :xl54, xl55 = :xl55, xl56 = :xl56, xl57 = :xl57, xl58 = :xl58, xl59 = :xl59, 
                    xl510 = :xl510, xl511 = :xl511, xl512 = :xl512, xl513 = :xl513, xl514 = :xl514, xl515 = :xl515, 
                    xl61 = :xl61, xl62 = :xl62, xl63 = :xl63, xl64 = :xl64, xl65 = :xl65, xl66 = :xl66, xl67 = :xl67, xl68 = :xl68, xl69 = :xl69, 
                    xl610 = :xl610, xl611 = :xl611, xl612 = :xl612, xl613 = :xl613, xl614 = :xl614, xl615 = :xl615, 
                    xl71 = :xl71, xl72 = :xl72, xl73 = :xl73, xl74 = :xl74, xl75 = :xl75, xl76 = :xl76, xl77 = :xl77, xl78 = :xl78, xl79 = :xl79, 
                    xl710 = :xl710, xl711 = :xl711, xl712 = :xl712, xl713 = :xl713, xl714 = :xl714, xl715 = :xl715, 
                    nes = :ns, nem = :nm, nemg = :nmg, timess = :tis, timem = :tim, timemg = :timg
                    WHERE id = :id");



                    $update_stmt->bindParam(':np', $name_op_up);
                    $update_stmt->bindParam(':ks', $ks_up);
                    $update_stmt->bindParam(':nmod', $nmod_up);
                    $update_stmt->bindParam(':fn', $new_fn_up);   
                    $update_stmt->bindParam(':result1', $result_v1_up);  
                    $update_stmt->bindParam(':result2', $result_v2_up);  
                    $update_stmt->bindParam(':result3', $result_v3_up);  
                    $update_stmt->bindParam(':result4', $result_v4_up);  
                    $update_stmt->bindParam(':result5', $result_v5_up);
                    $update_stmt->bindParam(':result6', $result_v6_up);        
                    $update_stmt->bindParam(':result7', $result_v7_up);  
                    $update_stmt->bindParam(':result8', $result_v8_up);
                    $update_stmt->bindParam(':result9', $result_v9_up);
                    $update_stmt->bindParam(':result10', $result_v10_up); 
                    $update_stmt->bindParam(':result11', $result_v11_up);     
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

                    $update_stmt->bindParam(':oda1', $od_a1_up);
                    $update_stmt->bindParam(':oda2', $od_a2_up);
                    $update_stmt->bindParam(':oda3', $od_a3_up);
                    $update_stmt->bindParam(':oda4', $od_a4_up);
                    $update_stmt->bindParam(':oda5', $od_a5_up);
                    $update_stmt->bindParam(':oda6', $od_a6_up);
                    $update_stmt->bindParam(':oda7', $od_a7_up);
                    $update_stmt->bindParam(':oda8', $od_a8_up);
                    $update_stmt->bindParam(':oda9', $od_a9_up);
                    $update_stmt->bindParam(':oda10', $od_a10_up);

                    $update_stmt->bindParam(':ods1', $od_s1_up);
                    $update_stmt->bindParam(':ods2', $od_s2_up);
                    $update_stmt->bindParam(':ods3', $od_s3_up);
                    $update_stmt->bindParam(':ods4', $od_s4_up);
                    $update_stmt->bindParam(':ods5', $od_s5_up);
                    $update_stmt->bindParam(':ods6', $od_s6_up);
                    $update_stmt->bindParam(':ods7', $od_s7_up);
                    $update_stmt->bindParam(':ods8', $od_s8_up);
                    $update_stmt->bindParam(':ods9', $od_s9_up);
                    $update_stmt->bindParam(':ods10', $od_s10_up);

                    $update_stmt->bindParam(':odd1', $od_d1_up);
                    $update_stmt->bindParam(':odd2', $od_d2_up);
                    $update_stmt->bindParam(':odd3', $od_d3_up);
                    $update_stmt->bindParam(':odd4', $od_d4_up);
                    $update_stmt->bindParam(':odd5', $od_d5_up);
                    $update_stmt->bindParam(':odd6', $od_d6_up);
                    $update_stmt->bindParam(':odd7', $od_d7_up);
                    $update_stmt->bindParam(':odd8', $od_d8_up);
                    $update_stmt->bindParam(':odd9', $od_d9_up);
                    $update_stmt->bindParam(':odd10', $od_d10_up);

                    $update_stmt->bindParam(':odf1', $od_f1_up);
                    $update_stmt->bindParam(':odf2', $od_f2_up);
                    $update_stmt->bindParam(':odf3', $od_f3_up);
                    $update_stmt->bindParam(':odf4', $od_f4_up);
                    $update_stmt->bindParam(':odf5', $od_f5_up);
                    $update_stmt->bindParam(':odf6', $od_f6_up);
                    $update_stmt->bindParam(':odf7', $od_f7_up);
                    $update_stmt->bindParam(':odf8', $od_f8_up);
                    $update_stmt->bindParam(':odf9', $od_f9_up);
                    $update_stmt->bindParam(':odf10', $od_f10_up);

                    $update_stmt->bindParam(':odg1', $od_g1_up);
                    $update_stmt->bindParam(':odg2', $od_g2_up);
                    $update_stmt->bindParam(':odg3', $od_g3_up);
                    $update_stmt->bindParam(':odg4', $od_g4_up);
                    $update_stmt->bindParam(':odg5', $od_g5_up);
                    $update_stmt->bindParam(':odg6', $od_g6_up);
                    $update_stmt->bindParam(':odg7', $od_g7_up);
                    $update_stmt->bindParam(':odg8', $od_g8_up);
                    $update_stmt->bindParam(':odg9', $od_g9_up);
                    $update_stmt->bindParam(':odg10', $od_g10_up);

                    $update_stmt->bindParam(':odh1', $od_h1_up);
                    $update_stmt->bindParam(':odh2', $od_h2_up);
                    $update_stmt->bindParam(':odh3', $od_h3_up);
                    $update_stmt->bindParam(':odh4', $od_h4_up);
                    $update_stmt->bindParam(':odh5', $od_h5_up);
                    $update_stmt->bindParam(':odh6', $od_h6_up);
                    $update_stmt->bindParam(':odh7', $od_h7_up);
                    $update_stmt->bindParam(':odh8', $od_h8_up);
                    $update_stmt->bindParam(':odh9', $od_h9_up);
                    $update_stmt->bindParam(':odh10', $od_h10_up);

                    $update_stmt->bindParam(':odj1', $od_j1_up);
                    $update_stmt->bindParam(':odj2', $od_j2_up);
                    $update_stmt->bindParam(':odj3', $od_j3_up);
                    $update_stmt->bindParam(':odj4', $od_j4_up);
                    $update_stmt->bindParam(':odj5', $od_j5_up);
                    $update_stmt->bindParam(':odj6', $od_j6_up);
                    $update_stmt->bindParam(':odj7', $od_j7_up);


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
                    $update_stmt->bindParam(':dt0', $details0_up);
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
                    $update_stmt->bindParam(':dt16', $details_v16_up);
                    $update_stmt->bindParam(':dt17', $details_v17_up);
                    $update_stmt->bindParam(':dt18', $details_v18_up);
                    $update_stmt->bindParam(':dt19', $details_v19_up);
                    $update_stmt->bindParam(':dt20', $details_v20_up);
                    $update_stmt->bindParam(':dt21', $details_v21_up);
                    $update_stmt->bindParam(':dt22', $details_v22_up);
                    $update_stmt->bindParam(':dt23', $details_v23_up);
                    $update_stmt->bindParam(':dt24', $details_v24_up);
                    $update_stmt->bindParam(':dt25', $details_v25_up);
                    $update_stmt->bindParam(':dt26', $details_v26_up);
                    $update_stmt->bindParam(':dt27', $details_v27_up);
                    $update_stmt->bindParam(':dt28', $details_v28_up);
                    $update_stmt->bindParam(':dt29', $details_v29_up);

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
                    $update_stmt->bindParam(':nd16', $nmdetails16_up);
                    $update_stmt->bindParam(':nd17', $nmdetails17_up);
                    $update_stmt->bindParam(':nd18', $nmdetails18_up);
                    $update_stmt->bindParam(':nd19', $nmdetails19_up);
                    $update_stmt->bindParam(':nd20', $nmdetails20_up);
                    $update_stmt->bindParam(':nd21', $nmdetails21_up);
                    $update_stmt->bindParam(':nd22', $nmdetails22_up);
                    $update_stmt->bindParam(':nd23', $nmdetails23_up);
                    $update_stmt->bindParam(':nd24', $nmdetails24_up);
                    $update_stmt->bindParam(':nd25', $nmdetails25_up);
                    $update_stmt->bindParam(':nd26', $nmdetails26_up);
                    $update_stmt->bindParam(':nd27', $nmdetails27_up);
                    $update_stmt->bindParam(':nd28', $nmdetails28_up);
                    $update_stmt->bindParam(':nd29', $nmdetails29_up);

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
                    $update_stmt->bindParam(':dv16', $detv16_up);
                    $update_stmt->bindParam(':dv17', $detv17_up);
                    $update_stmt->bindParam(':dv18', $detv18_up);
                    $update_stmt->bindParam(':dv19', $detv19_up);
                    $update_stmt->bindParam(':dv20', $detv20_up);
                    $update_stmt->bindParam(':dv21', $detv21_up);
                    $update_stmt->bindParam(':dv22', $detv22_up);
                    $update_stmt->bindParam(':dv23', $detv23_up);
                    $update_stmt->bindParam(':dv24', $detv24_up);
                    $update_stmt->bindParam(':dv25', $detv25_up);
                    $update_stmt->bindParam(':dv26', $detv26_up);
                    $update_stmt->bindParam(':dv27', $detv27_up);
                    $update_stmt->bindParam(':dv28', $detv28_up);
                    $update_stmt->bindParam(':dv29', $detv29_up);

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

    <div class="form-group">
            <div class="row">
                <label for="name" class="col-sm-3 control-label">ชื่องาน</label>
                <div class="col-sm-8 text-center">
                    <input class="form-control" name="txt_name_op" id="txt_name_op"  value="<?php echo $name_op; ?>">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <label for="name" class="col-sm-3 control-label">FN</label>
                <div class="col-sm-3 text-center">
                    <input class="form-control" name="txt_fn" id="txt_fn"  value="<?php echo $fn; ?>">
                </div>
                <label for="name" class="col-sm-2 control-label">กำหนดส่ง</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="txt_timeing" value="<?php echo $timeing; ?>">
                </div>
            
            </div>
        </div>
        
        <div class="form-group">
                <div class="row">
                    <label class="col-sm-3 control-label">รหัสสินค้า</label>
                    <div class="col-sm-3 text-center">
                        <select class="form-control"  name="ddl_nmod" id="ddl_nmod" value="<?php echo $ddl_nmod; ?>">
                        <option value="">เลือกรหัสสินค้า</option></select>
                    </div>
                        <label class="col-sm-2 control-label">กรอกรหัสสินค้า</label>
                    <div class="col-sm-3">
                        <input  type="text" class="form-control" name="txt_nmod" id="txt_nmod"  value="<?php echo $nmod; ?>">
                 </div>
            </div>
        </div>

        <div class="form-group">
                <div class="row">
                    <label class="col-sm-3 control-label">NEW PTC</label>
                    <div class="col-sm-3 text-center">
                        <select class="form-control"  name="ddl_new_ptc" id="ddl_new_ptc" value="<?php echo $ddl_new_ptc; ?>">
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
                    <input type="file" name="txt_file" class="form-control">
                 </div>
                 
                    <label class="col-sm-2 control-label">สข</label>
                <div class="col-sm-3">
                    <input  type="text" class="form-control" name="txt_ks" id="txt_ks"  value="<?php echo $ks; ?>">
            
        </div>
    
        <div class="form-group">
            <h2>ORDER</h2>
            <table class="table">
            <thead>
                <tr>
                    <td class="text-center" style="font-size: 16px; color: black; width: 10%;">Size</td>
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j1" id="od_j1"  value="<?php echo $od_j1; ?>">
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j2" id="od_j2" value="<?php echo $od_j2; ?>">
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j3" id="od_j3" value="<?php echo $od_j3; ?>">
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j4" id="od_j4" value="<?php echo $od_j4; ?>">
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j5" id="od_j5" value="<?php echo $od_j5; ?>">
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j6" id="od_j6" value="<?php echo $od_j6; ?>">
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j7" id="od_j7" value="<?php echo $od_j7; ?>">
                    <td style="width: 10%;">
                        <select id="txt_if_v0" class="form-select form-control select-margin" name="txt_if_v0" aria-label="Default select example" value="<?php echo $if_v0; ?>">
                            <option value="ยังไม่กำหนด" selected>เลือกงาน</option>
                            <option value="เผื่อ">เผื่อ</option>
                            <option value="เมอร์เก็บ">เมอร์เก็บ</option>
                        </select>
                    </td>
                    <td class="text-center" style="font-size: 16px; color: black; width: 10%;">รวมส่งผลิต</td>
                    <td class="text-center" style="font-size: 16px; color: black; width: 10%;">ตัดได้จริง</td>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>
                <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control small-input center-input" name="txt_size_v<?= $i ?>" id="txt_size_v<?= $i ?>" value="<?php echo ${"size_v" . $i}; ?>">
                    <?php } ?>
                </td>
                <td>
                <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <input type="text" class="form-control special-input center-input" name="txt_od_v<?= $i ?>" id="txt_od_v<?= $i ?>" value="<?php echo ${"od_v" . $i}; ?>">
                <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_od_a<?= $i ?>" id="txt_od_a<?= $i ?>" value="<?php echo ${"od_a" . $i}; ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_od_s<?= $i ?>" id="txt_od_s<?= $i ?>" value="<?php echo ${"od_s" . $i}; ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_od_d<?= $i ?>" id="txt_od_d<?= $i ?>" value="<?php echo ${"od_d" . $i}; ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_od_f<?= $i ?>" id="txt_od_f<?= $i ?>" value="<?php echo ${"od_f" . $i}; ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_od_g<?= $i ?>" id="txt_od_g<?= $i ?>" value="<?php echo ${"od_g" . $i}; ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_od_h<?= $i ?>" id="txt_od_h<?= $i ?>" value="<?php echo ${"od_h" . $i}; ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_if_v<?= $i ?>" id="txt_if_v<?= $i ?>" value="<?php echo ${"if_v" . $i}; ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_cut_v<?= $i ?>" id="txt_cut_v<?= $i ?>" value="<?php echo ${"cut_v" . $i}; ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v<?= $i ?>" id="txt_cuttrue_v<?= $i ?>" value="<?php echo ${"cuttrue_v" . $i}; ?>">
                    <?php } ?>
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
                            <textarea class="form-control equal-size" name="txt_note" id="txt_note" value="<?php echo $note; ?>"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-label d-block text-center">Sale</label>
                            <input type="text" class="form-control" name="txt_nes" id="txt_nes" value="<?php echo $nes; ?>">
                            <input type="date" class="form-control" name="txt_timess" id="txt_timess" value="<?php echo $timess; ?>">
                        </td>
                        <td>
                            <label class="form-label d-block text-center">Mer</label>
                            <input type="text" class="form-control" name="txt_nem" id="txt_nem" value="<?php echo $nem; ?>">
                            <input type="date" class="form-control" name="txt_timem" id="txt_timem" value="<?php echo $timem; ?>">
                        </td>
                        <td>
                            <label class="form-label d-block text-center">Manager</label>
                            <input type="text" class="form-control" name="txt_nemg" id="txt_nemg" value="<?php echo $nemg; ?>">
                            <input type="date" class="form-control" name="txt_timemg" id="txt_timemg" value="<?php echo $timemg; ?>">
                        </td>
                    </tr>
                </thead>
            </table>


            

                <table class="table">
            <thead>
                <tr>
                    <td class="text-center">อุปกรณ์</td>
                    <td class="text-center" style="font-size: larger; color: black; width: 20%;">รหัสอุปกรณ์</td>
                    <td class="text-center" style="font-size: larger; color: black; width: 5%;" >คำนวน</td>
                    <td class="text-center" style="font-size: larger; color: black; width: 10%;" >จำนวน</td>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 15; $i++) : ?>
                    <tr>
                        <th><input type="text" class="form-control" name="txt_details_v<?php echo $i; ?>" id="txt_details_v<?php echo $i; ?>" value="<?php echo ${"details_v" . $i}; ?>"></th>
                        <th><input type="text" class="form-control" name="txt_nmdetails<?php echo $i; ?>" id="txt_nmdetails<?php echo $i; ?>" value="<?php echo ${"nmdetails" . $i}; ?>"></th>
                        <th><input type="text" name="num<?php echo $i; ?>" id="num<?php echo $i; ?>" value="<?php echo isset(${"num" . $i}) ? ${"num" . $i} : ''; ?>"></th>
                        <th><input type="text" class="form-control" name="txt_detv<?php echo $i; ?>" id="txt_detv<?php echo $i; ?>" value="<?php echo ${"detv" . $i}; ?>"></th>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>


        <table class="table">
            <thead>
                <tr>
                    <td class="text-center">อุปกรณ์เฉพาะ</td>
                    <td class="text-center" style="font-size: larger; color: black; width: 20%;">รหัสอุปกรณ์</td>
                    <td class="text-center" style="font-size: larger; color: black; width: 10%;" >จำนวน</td>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 16; $i <= 29; $i++) : ?>
                    <tr>
                        <th><input type="text" class="form-control" name="txt_details_v<?php echo $i; ?>" id="txt_details_v<?php echo $i; ?>" value="<?php echo ${"details_v" . $i}; ?>"></th></th>
                        <th><input type="text" class="form-control" name="txt_nmdetails<?php echo $i; ?>" id="txt_nmdetails<?php echo $i; ?>" value="<?php echo ${"nmdetails" . $i}; ?>"></th></th>
                        <th><input type="text" class="form-control" name="txt_detv<?php echo $i; ?>" id="txt_detv<?php echo $i; ?>" value="<?php echo ${"detv" . $i}; ?>"></th></th>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>

            <div style="display: flex;">
                <table class="table  text-center" style="flex: 1; margin-right: 20px;">
                    <thead>
                        <tr>
                        <td class="text-center"><label class="form-label">อุปกรณ์แพค</label></td>
                        <td class="text-center"><label class="form-label">คำนวน</label></td>
                        <td class="text-center"><label class="form-label">จำนวน</label></td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pack<?= $i ?>" id="txt_pack<?= $i ?>" value="<?php echo ${"pack" . $i}; ?>"></td>
                            <td><input type="text" name="number<?= $i ?>" id="number<?= $i ?>" value="<?php echo ${"number" . $i}; ?>"></td>
                            <td class="text-center" style="width: 100px;"><input type="text" class="form-control" name="txt_nmpack<?= $i ?>" id="txt_nmpack<?= $i ?>" value="<?php echo ${"nmpack" . $i}; ?>"></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

                <table class="table" style="flex: 1;">
                    <thead>
                    <td>
                        <select id="txt_pin0" class="form-select form-control select-margin center-input" name="txt_pin0" aria-label="Default select example">
                            <option value="ยังไม่กำหนด" selected >เลือกงาน</option>
                            <option value="งานปัก">งานปัก</option>
                            <option value="งานพิมพ์">งานพิมพ์</option>
                            <option value="งานพิมพ์ซับ">งานพิมพ์ซับ</option>
                        </select>
                    </td>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin1" id="txt_pin1" placeholder=" "></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin2" id="txt_pin2" placeholder=" "></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin3" id="txt_pin3" placeholder=" "></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin4" id="txt_pin4" placeholder=" "></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin5" id="txt_pin5" placeholder=" "></td>
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

                <?php for ($i = 1; $i <= 15; $i++) : ?>
                    <tr>
                        <td><input type="text" class="form-control" style="width: 100%;" name="txt_size_details<?php echo $i; ?>" id="txt_size_details<?php echo $i; ?>"></td>
                        <td style="text-align: center;"><input type="text" class="form-control" style="width: 100%;" name="txt_ss<?php echo $i; ?>" id="txt_ss<?php echo $i; ?>"></td>
                        <td><input type="text" class="form-control" style="width: 100%;" name="txt_s<?php echo $i; ?>" id="txt_s<?php echo $i; ?>"></td>
                        <td><input type="text" class="form-control" style="width: 100%;" name="txt_m<?php echo $i; ?>" id="txt_m<?php echo $i; ?>"></td>
                        <td><input type="text" class="form-control" style="width: 100%;" name="txt_l<?php echo $i; ?>" id="txt_l<?php echo $i; ?>"></td>
                        <td><input type="text" class="form-control" style="width: 100%;" name="txt_xl<?php echo $i; ?>" id="txt_xl<?php echo $i; ?>"></td>
                        <td><input type="text" class="form-control" style="width: 100%;" name="txt_xl2<?php echo $i; ?>" id="txt_xl2<?php echo $i; ?>"></td>
                        <td><input type="text" class="form-control" style="width: 100%;" name="txt_xl3<?php echo $i; ?>" id="txt_xl3<?php echo $i; ?>"></td>
                        <td><input type="text" class="form-control" style="width: 100%;" name="txt_xl4<?php echo $i; ?>" id="txt_xl4<?php echo $i; ?>"></td>
                        <td><input type="text" class="form-control" style="width: 100%;" name="txt_xl5<?php echo $i; ?>" id="txt_xl5<?php echo $i; ?>"></td>
                        <td><input type="text" class="form-control" style="width: 100%;" name="txt_xl6<?php echo $i; ?>" id="txt_xl6<?php echo $i; ?>"></td>
                        <td><input type="text" class="form-control" style="width: 100%;" name="txt_xl7<?php echo $i; ?>" id="txt_xl7<?php echo $i; ?>"></td>
                    </tr>
                <?php endfor; ?>


            </table>

    <div style="margin-bottom: 20px;"></div>

    <table class="table">
        <tr>
            <td><label class="form-label d-block text-center">รายละเอียดการเย็บ</label></td>
        </tr>
        <tr>  
           <th><textarea class="form-control equal-size wide-input" name="txt_details" id="txt_details" rows="6"></textarea></th>
        </tr>
        <tr>
            <td><label class="form-label d-block text-center">ข้อควรระวัง</label></td>
        </tr>
        <tr>  
           <th><textarea class="form-control equal-size wide-input" name="txt_details0" id="txt_details0" rows="3"></textarea></th>
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