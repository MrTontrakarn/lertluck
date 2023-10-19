<?php 

    require_once('connection.php');
    if (isset($_REQUEST['btn_insert'])) {
        try {
        $name_op = $_POST['txt_name_op'];
        $ks = $_POST['txt_ks'];
        $fn = $_POST['txt_fn'];
        $timeing = $_POST['txt_timeing'];

        $size_v1 = $_POST['txt_size_v1'];
        $size_v2 = $_POST['txt_size_v2'];
        $size_v3 = $_POST['txt_size_v3'];
        $size_v4 = $_POST['txt_size_v4'];
        $size_v5 = $_POST['txt_size_v5'];
        $size_v6 = $_POST['txt_size_v6'];
        $size_v7 = $_POST['txt_size_v7'];
        $size_v8 = $_POST['txt_size_v8'];
        $size_v9 = $_POST['txt_size_v9'];
        $size_v10 = $_POST['txt_size_v10'];


        $if_v0 = $_POST['txt_if_v0'];
        $if_v1 = $_POST['txt_if_v1'];
        $if_v2 = $_POST['txt_if_v2'];
        $if_v3 = $_POST['txt_if_v3'];
        $if_v4 = $_POST['txt_if_v4'];
        $if_v5 = $_POST['txt_if_v5'];
        $if_v6 = $_POST['txt_if_v6'];
        $if_v7 = $_POST['txt_if_v7'];
        $if_v8 = $_POST['txt_if_v8'];
        $if_v9 = $_POST['txt_if_v9'];
        $if_v10 = $_POST['txt_if_v10'];


        $od_v1 = $_POST['txt_od_v1'];
        $od_v2 = $_POST['txt_od_v2'];
        $od_v3 = $_POST['txt_od_v3'];
        $od_v4 = $_POST['txt_od_v4'];
        $od_v5 = $_POST['txt_od_v5'];
        $od_v6 = $_POST['txt_od_v6'];
        $od_v7 = $_POST['txt_od_v7'];
        $od_v8 = $_POST['txt_od_v8'];
        $od_v9 = $_POST['txt_od_v9'];
        $od_v10 = $_POST['txt_od_v10'];

        $od_a1 = $_POST['txt_od_a1'];
        $od_a2 = $_POST['txt_od_a2'];
        $od_a3 = $_POST['txt_od_a3'];
        $od_a4 = $_POST['txt_od_a4'];
        $od_a5 = $_POST['txt_od_a5'];
        $od_a6 = $_POST['txt_od_a6'];
        $od_a7 = $_POST['txt_od_a7'];
        $od_a8 = $_POST['txt_od_a8'];
        $od_a9 = $_POST['txt_od_a9'];
        $od_a10 = $_POST['txt_od_a10'];
        
        $od_s1 = $_POST['txt_od_s1'];
        $od_s2 = $_POST['txt_od_s2'];
        $od_s3 = $_POST['txt_od_s3'];
        $od_s4 = $_POST['txt_od_s4'];
        $od_s5 = $_POST['txt_od_s5'];
        $od_s6 = $_POST['txt_od_s6'];
        $od_s7 = $_POST['txt_od_s7'];
        $od_s8 = $_POST['txt_od_s8'];
        $od_s9 = $_POST['txt_od_s9'];
        $od_s10 = $_POST['txt_od_s10'];
        
        $od_d1 = $_POST['txt_od_d1'];
        $od_d2 = $_POST['txt_od_d2'];
        $od_d3 = $_POST['txt_od_d3'];
        $od_d4 = $_POST['txt_od_d4'];
        $od_d5 = $_POST['txt_od_d5'];
        $od_d6 = $_POST['txt_od_d6'];
        $od_d7 = $_POST['txt_od_d7'];
        $od_d8 = $_POST['txt_od_d8'];
        $od_d9 = $_POST['txt_od_d9'];
        $od_d10 = $_POST['txt_od_d10'];

        $od_f1 = $_POST['txt_od_f1'];
        $od_f2 = $_POST['txt_od_f2'];
        $od_f3 = $_POST['txt_od_f3'];
        $od_f4 = $_POST['txt_od_f4'];
        $od_f5 = $_POST['txt_od_f5'];
        $od_f6 = $_POST['txt_od_f6'];
        $od_f7 = $_POST['txt_od_f7'];
        $od_f8 = $_POST['txt_od_f8'];
        $od_f9 = $_POST['txt_od_f9'];
        $od_f10 = $_POST['txt_od_f10'];

        $od_g1 = $_POST['txt_od_g1'];
        $od_g2 = $_POST['txt_od_g2'];
        $od_g3 = $_POST['txt_od_g3'];
        $od_g4 = $_POST['txt_od_g4'];
        $od_g5 = $_POST['txt_od_g5'];
        $od_g6 = $_POST['txt_od_g6'];
        $od_g7 = $_POST['txt_od_g7'];
        $od_g8 = $_POST['txt_od_g8'];
        $od_g9 = $_POST['txt_od_g9'];
        $od_g10 = $_POST['txt_od_g10'];

        $od_h1 = $_POST['txt_od_h1'];
        $od_h2 = $_POST['txt_od_h2'];
        $od_h3 = $_POST['txt_od_h3'];
        $od_h4 = $_POST['txt_od_h4'];
        $od_h5 = $_POST['txt_od_h5'];
        $od_h6 = $_POST['txt_od_h6'];
        $od_h7 = $_POST['txt_od_h7'];
        $od_h8 = $_POST['txt_od_h8'];
        $od_h9 = $_POST['txt_od_h9'];
        $od_h10 = $_POST['txt_od_h10'];

        $od_j1 = $_POST['txt_od_j1'];
        $od_j2 = $_POST['txt_od_j2'];
        $od_j3 = $_POST['txt_od_j3'];
        $od_j4 = $_POST['txt_od_j4'];
        $od_j5 = $_POST['txt_od_j5'];
        $od_j6 = $_POST['txt_od_j6'];
        $od_j7 = $_POST['txt_od_j7'];


        $cut_v1 = $_POST['txt_cut_v1'];
        $cut_v2 = $_POST['txt_cut_v2'];
        $cut_v3 = $_POST['txt_cut_v3'];
        $cut_v4 = $_POST['txt_cut_v4'];
        $cut_v5 = $_POST['txt_cut_v5'];
        $cut_v6 = $_POST['txt_cut_v6'];
        $cut_v7 = $_POST['txt_cut_v7'];
        $cut_v8 = $_POST['txt_cut_v8'];
        $cut_v9 = $_POST['txt_cut_v9'];
        $cut_v10 = $_POST['txt_cut_v10'];


        $cuttrue_v1 = $_POST['txt_cuttrue_v1'];
        $cuttrue_v2 = $_POST['txt_cuttrue_v2'];
        $cuttrue_v3 = $_POST['txt_cuttrue_v3'];
        $cuttrue_v4 = $_POST['txt_cuttrue_v4'];
        $cuttrue_v5 = $_POST['txt_cuttrue_v5'];
        $cuttrue_v6 = $_POST['txt_cuttrue_v6'];
        $cuttrue_v7 = $_POST['txt_cuttrue_v7'];
        $cuttrue_v8 = $_POST['txt_cuttrue_v8'];
        $cuttrue_v9 = $_POST['txt_cuttrue_v9'];
        $cuttrue_v10 = $_POST['txt_cuttrue_v10'];


        $details = $_POST['txt_details'];
        $details0 = $_POST['txt_details0'];
        $details_v1 = $_POST['txt_details_v1'];
        $details_v2 = $_POST['txt_details_v2'];
        $details_v3 = $_POST['txt_details_v3'];
        $details_v4 = $_POST['txt_details_v4'];
        $details_v5 = $_POST['txt_details_v5'];
        $details_v6 = $_POST['txt_details_v6'];
        $details_v7 = $_POST['txt_details_v7'];
        $details_v8 = $_POST['txt_details_v8'];
        $details_v9 = $_POST['txt_details_v9'];
        $details_v10 = $_POST['txt_details_v10'];
        $details_v11 = $_POST['txt_details_v11'];
        $details_v12 = $_POST['txt_details_v12'];
        $details_v13 = $_POST['txt_details_v13'];
        $details_v14 = $_POST['txt_details_v14'];
        $details_v15 = $_POST['txt_details_v15'];
        $details_v16 = $_POST['txt_details_v16'];
        $details_v17 = $_POST['txt_details_v17'];
        $details_v18 = $_POST['txt_details_v18'];
        $details_v19 = $_POST['txt_details_v19'];
        $details_v20 = $_POST['txt_details_v20'];
        $details_v21 = $_POST['txt_details_v21'];
        $details_v22 = $_POST['txt_details_v22'];
        $details_v23 = $_POST['txt_details_v23'];
        $details_v24 = $_POST['txt_details_v24'];
        $details_v25 = $_POST['txt_details_v25'];
        $details_v26 = $_POST['txt_details_v26'];
        $details_v27 = $_POST['txt_details_v27'];
        $details_v28 = $_POST['txt_details_v28'];
        $details_v29 = $_POST['txt_details_v29'];

        $detv1 = $_POST['txt_detv1'];
        $detv2 = $_POST['txt_detv2'];
        $detv3 = $_POST['txt_detv3'];
        $detv4 = $_POST['txt_detv4'];
        $detv5 = $_POST['txt_detv5'];
        $detv6 = $_POST['txt_detv6'];
        $detv7 = $_POST['txt_detv7'];
        $detv8 = $_POST['txt_detv8'];
        $detv9 = $_POST['txt_detv9'];
        $detv10 = $_POST['txt_detv10'];
        $detv11 = $_POST['txt_detv11'];
        $detv12 = $_POST['txt_detv12'];
        $detv13 = $_POST['txt_detv13'];
        $detv14 = $_POST['txt_detv14'];
        $detv15 = $_POST['txt_detv15'];
        $detv16 = $_POST['txt_detv16'];
        $detv17 = $_POST['txt_detv17'];
        $detv18 = $_POST['txt_detv18'];
        $detv19 = $_POST['txt_detv19'];
        $detv20 = $_POST['txt_detv20'];
        $detv21 = $_POST['txt_detv21'];
        $detv22 = $_POST['txt_detv22'];
        $detv23 = $_POST['txt_detv23'];
        $detv24 = $_POST['txt_detv24'];
        $detv25 = $_POST['txt_detv25'];
        $detv26 = $_POST['txt_detv26'];
        $detv27 = $_POST['txt_detv27'];
        $detv28 = $_POST['txt_detv28'];
        $detv29 = $_POST['txt_detv29'];

        $nmdetails1 = $_POST['txt_nmdetails1'];
        $nmdetails2 = $_POST['txt_nmdetails2'];
        $nmdetails3 = $_POST['txt_nmdetails3'];
        $nmdetails4 = $_POST['txt_nmdetails4'];
        $nmdetails5 = $_POST['txt_nmdetails5'];
        $nmdetails6 = $_POST['txt_nmdetails6'];
        $nmdetails7 = $_POST['txt_nmdetails7'];
        $nmdetails8 = $_POST['txt_nmdetails8'];
        $nmdetails9 = $_POST['txt_nmdetails9'];
        $nmdetails10 = $_POST['txt_nmdetails10'];
        $nmdetails11 = $_POST['txt_nmdetails11'];
        $nmdetails12 = $_POST['txt_nmdetails12'];
        $nmdetails13 = $_POST['txt_nmdetails13'];
        $nmdetails14 = $_POST['txt_nmdetails14'];
        $nmdetails15 = $_POST['txt_nmdetails15'];
        $nmdetails16 = $_POST['txt_nmdetails16'];
        $nmdetails17 = $_POST['txt_nmdetails17'];
        $nmdetails18 = $_POST['txt_nmdetails18'];
        $nmdetails19 = $_POST['txt_nmdetails19'];
        $nmdetails20 = $_POST['txt_nmdetails20'];
        $nmdetails21 = $_POST['txt_nmdetails21'];
        $nmdetails22 = $_POST['txt_nmdetails22'];
        $nmdetails23 = $_POST['txt_nmdetails23'];
        $nmdetails24 = $_POST['txt_nmdetails24'];
        $nmdetails25 = $_POST['txt_nmdetails25'];
        $nmdetails26 = $_POST['txt_nmdetails26'];
        $nmdetails27 = $_POST['txt_nmdetails27'];
        $nmdetails28 = $_POST['txt_nmdetails28'];
        $nmdetails29 = $_POST['txt_nmdetails29'];

       
        $pin0 = $_POST['txt_pin0'];
        $pin1 = $_POST['txt_pin1'];
        $pin2 = $_POST['txt_pin2'];
        $pin3 = $_POST['txt_pin3'];
        $pin4 = $_POST['txt_pin4'];
        $pin5 = $_POST['txt_pin5'];


        $pack1 = $_POST['txt_pack1'];
        $pack2 = $_POST['txt_pack2'];
        $pack3 = $_POST['txt_pack3'];
        $pack4 = $_POST['txt_pack4'];
        $pack5 = $_POST['txt_pack5'];


        $size_details1 = $_POST['txt_size_details1'];
        $size_details2 = $_POST['txt_size_details2'];
        $size_details3 = $_POST['txt_size_details3'];
        $size_details4 = $_POST['txt_size_details4'];
        $size_details5 = $_POST['txt_size_details5'];
        $size_details6 = $_POST['txt_size_details6'];
        $size_details7 = $_POST['txt_size_details7'];
        $size_details8 = $_POST['txt_size_details8'];
        $size_details9 = $_POST['txt_size_details9'];
        $size_details10 = $_POST['txt_size_details10'];
        $size_details11 = $_POST['txt_size_details11'];
        $size_details12 = $_POST['txt_size_details12'];
        $size_details13 = $_POST['txt_size_details13'];
        $size_details14 = $_POST['txt_size_details14'];
        $size_details15 = $_POST['txt_size_details15'];

        $ss1 = $_POST['txt_ss1'];
        $ss2 = $_POST['txt_ss2'];
        $ss3 = $_POST['txt_ss3'];
        $ss4 = $_POST['txt_ss4'];
        $ss5 = $_POST['txt_ss5'];
        $ss6 = $_POST['txt_ss6'];
        $ss7 = $_POST['txt_ss7'];
        $ss8 = $_POST['txt_ss8'];
        $ss9 = $_POST['txt_ss9'];
        $ss10 = $_POST['txt_ss10'];
        $ss11 = $_POST['txt_ss11'];
        $ss12 = $_POST['txt_ss12'];
        $ss13 = $_POST['txt_ss13'];
        $ss14 = $_POST['txt_ss14'];
        $ss15 = $_POST['txt_ss15'];


        $s1= $_POST['txt_s1'];
        $s2= $_POST['txt_s2'];
        $s3= $_POST['txt_s3'];
        $s4= $_POST['txt_s4'];
        $s5= $_POST['txt_s5'];
        $s6= $_POST['txt_s6'];
        $s7= $_POST['txt_s7'];
        $s8 = $_POST['txt_s8'];
        $s9 = $_POST['txt_s9'];
        $s10 = $_POST['txt_s10'];
        $s11 = $_POST['txt_s11'];
        $s12 = $_POST['txt_s12'];
        $s13 = $_POST['txt_s13'];
        $s14 = $_POST['txt_s14'];
        $s15 = $_POST['txt_s15'];

        $m1 = $_POST['txt_m1'];
        $m2 = $_POST['txt_m2'];
        $m3 = $_POST['txt_m3'];
        $m4 = $_POST['txt_m4'];
        $m5 = $_POST['txt_m5'];
        $m6 = $_POST['txt_m6'];
        $m7 = $_POST['txt_m7'];
        $m8 = $_POST['txt_m8'];
        $m9 = $_POST['txt_m9'];
        $m10 = $_POST['txt_m10'];
        $m11 = $_POST['txt_m11'];
        $m12 = $_POST['txt_m12'];
        $m13 = $_POST['txt_m13'];
        $m14 = $_POST['txt_m14'];
        $m15 = $_POST['txt_m15'];

        $l1 = $_POST['txt_l1'];
        $l2 = $_POST['txt_l2'];
        $l3 = $_POST['txt_l3'];
        $l4 = $_POST['txt_l4'];
        $l5 = $_POST['txt_l5'];
        $l6 = $_POST['txt_l6'];
        $l7 = $_POST['txt_l7'];
        $l8 = $_POST['txt_l8'];
        $l9 = $_POST['txt_l9'];
        $l10 = $_POST['txt_l10'];
        $l11 = $_POST['txt_l11'];
        $l12 = $_POST['txt_l12'];
        $l13 = $_POST['txt_l13'];
        $l14 = $_POST['txt_l14'];
        $l15 = $_POST['txt_l15'];

        $xl1 = $_POST['txt_xl1'];
        $xl2 = $_POST['txt_xl2'];
        $xl3 = $_POST['txt_xl3'];
        $xl4 = $_POST['txt_xl4'];
        $xl5 = $_POST['txt_xl5'];
        $xl6 = $_POST['txt_xl6'];
        $xl7 = $_POST['txt_xl7'];
        $xl8 = $_POST['txt_xl8'];
        $xl9 = $_POST['txt_xl9'];
        $xl10 = $_POST['txt_xl10'];
        $xl11 = $_POST['txt_xl11'];
        $xl12 = $_POST['txt_xl12'];
        $xl13 = $_POST['txt_xl13'];
        $xl14 = $_POST['txt_xl14'];
        $xl15 = $_POST['txt_xl15'];

        $xl21 = $_POST['txt_xl21'];
        $xl22 = $_POST['txt_xl22'];
        $xl23 = $_POST['txt_xl23'];
        $xl24 = $_POST['txt_xl24'];
        $xl25 = $_POST['txt_xl25'];
        $xl26 = $_POST['txt_xl26'];
        $xl27 = $_POST['txt_xl27'];
        $xl28 = $_POST['txt_xl28'];
        $xl29 = $_POST['txt_xl29'];
        $xl210 = $_POST['txt_xl210'];
        $xl211 = $_POST['txt_xl211'];
        $xl212 = $_POST['txt_xl212'];
        $xl213 = $_POST['txt_xl213'];
        $xl214 = $_POST['txt_xl214'];
        $xl215 = $_POST['txt_xl215'];

        $xl31= $_POST['txt_xl31'];
        $xl32= $_POST['txt_xl32'];
        $xl33= $_POST['txt_xl33'];
        $xl34= $_POST['txt_xl34'];
        $xl35= $_POST['txt_xl35'];
        $xl36= $_POST['txt_xl36'];
        $xl37= $_POST['txt_xl37'];
        $xl38 = $_POST['txt_xl38'];
        $xl39 = $_POST['txt_xl39'];
        $xl310 = $_POST['txt_xl310'];
        $xl311 = $_POST['txt_xl311'];
        $xl312 = $_POST['txt_xl312'];
        $xl313 = $_POST['txt_xl313'];
        $xl314 = $_POST['txt_xl314'];
        $xl315 = $_POST['txt_xl315'];

        $xl41 = $_POST['txt_xl41'];
        $xl42 = $_POST['txt_xl42'];
        $xl43 = $_POST['txt_xl43'];
        $xl44 = $_POST['txt_xl44'];
        $xl45 = $_POST['txt_xl45'];
        $xl46 = $_POST['txt_xl46'];
        $xl47 = $_POST['txt_xl47'];
        $xl48 = $_POST['txt_xl48'];
        $xl49 = $_POST['txt_xl49'];
        $xl410 = $_POST['txt_xl410'];
        $xl411 = $_POST['txt_xl411'];
        $xl412 = $_POST['txt_xl412'];
        $xl413 = $_POST['txt_xl413'];
        $xl414 = $_POST['txt_xl414'];
        $xl415 = $_POST['txt_xl415'];

        $xl51 = $_POST['txt_xl51'];
        $xl52 = $_POST['txt_xl52'];
        $xl53 = $_POST['txt_xl53'];
        $xl54 = $_POST['txt_xl54'];
        $xl55 = $_POST['txt_xl55'];
        $xl56 = $_POST['txt_xl56'];
        $xl57 = $_POST['txt_xl57'];
        $xl58 = $_POST['txt_xl58'];
        $xl59 = $_POST['txt_xl59'];
        $xl510 = $_POST['txt_xl510'];
        $xl511 = $_POST['txt_xl511'];
        $xl512 = $_POST['txt_xl512'];
        $xl513 = $_POST['txt_xl513'];
        $xl514 = $_POST['txt_xl514'];
        $xl515 = $_POST['txt_xl515'];

        $xl61 = $_POST['txt_xl61'];
        $xl62 = $_POST['txt_xl62'];
        $xl63 = $_POST['txt_xl63'];
        $xl64 = $_POST['txt_xl64'];
        $xl65 = $_POST['txt_xl65'];
        $xl66 = $_POST['txt_xl66'];
        $xl67 = $_POST['txt_xl67'];
        $xl68 = $_POST['txt_xl68'];
        $xl69 = $_POST['txt_xl69'];
        $xl610 = $_POST['txt_xl610'];
        $xl611 = $_POST['txt_xl611'];
        $xl612 = $_POST['txt_xl612'];
        $xl613 = $_POST['txt_xl613'];
        $xl614 = $_POST['txt_xl614'];
        $xl615 = $_POST['txt_xl615'];
        
        $xl71 = $_POST['txt_xl71'];
        $xl72 = $_POST['txt_xl72'];
        $xl73 = $_POST['txt_xl73'];
        $xl74 = $_POST['txt_xl74'];
        $xl75 = $_POST['txt_xl75'];
        $xl76 = $_POST['txt_xl76'];
        $xl77 = $_POST['txt_xl77'];
        $xl78 = $_POST['txt_xl78'];
        $xl79 = $_POST['txt_xl79'];
        $xl710 = $_POST['txt_xl710'];
        $xl711 = $_POST['txt_xl711'];
        $xl712 = $_POST['txt_xl712'];
        $xl713 = $_POST['txt_xl713'];
        $xl714 = $_POST['txt_xl714'];
        $xl715 = $_POST['txt_xl715'];

        $nmpack1 = $_POST['txt_nmpack1'];
        $nmpack2 = $_POST['txt_nmpack2'];
        $nmpack3 = $_POST['txt_nmpack3'];
        $nmpack4 = $_POST['txt_nmpack4'];
        $nmpack5 = $_POST['txt_nmpack5'];

        $nes = $_POST['txt_nes'];
        $nem = $_POST['txt_nem'];
        $nemg = $_POST['txt_nemg'];
        $timess = $_POST['txt_timess'];
        $timem = $_POST['txt_timem'];
        $timemg = $_POST['txt_timemg'];
        $note = $_POST['txt_note'];

        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];
        $number4 = $_POST['number4'];
        $number5 = $_POST['number5'];
        
        $nums = array();

        for ($i = 1; $i <= 15; $i++) {
            $nums[$i] = isset($_POST['num' . $i]) ? $_POST['num' . $i] : 0;
        }
        
        if (!empty($_POST['ddl_new_ptc'])) {
            $new_ptc = $_POST['ddl_new_ptc'];
        } elseif (!empty($_POST['txt_new_ptc'])) {
            $new_ptc = $_POST['txt_new_ptc'];
        } else {
            // กรณีที่ทั้ง 'ddl_new_ptc' และ 'txt_new_ptc' ไม่ได้รับค่า
            // ให้ทำอะไรตามความเหมาะสม เช่น กำหนดค่าเริ่มต้นหรือแจ้งเตือน
        }

        if (!empty($_POST['ddl_nmod'])) {
            $nmod = $_POST['ddl_nmod'];
        } elseif (!empty($_POST['txt_nmod'])) {
            $nmod = $_POST['txt_nmod'];
        } else {
            // กรณีที่ทั้ง 'ddl_nmod' และ 'txt_nmod' ไม่ได้รับค่า
            // ให้ทำอะไรตามความเหมาะสม เช่น กำหนดค่าเริ่มต้นหรือแจ้งเตือน
        }
    
        $result_v1 = 0;
        $result_v2 = 0;
        $result_v3 = 0;
        $result_v4 = 0;
        $result_v5 = 0;
        $result_v6 = 0;
        $result_v7 = 0;
        $result_v8 = 0;
        $result_v9 = 0;
        $result_v10 = 0;
        $result_v11 = 0;

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

        $result_v1 = $od_v1 + $od_v2 + $od_v3 + $od_v4 + $od_v5 + $od_v6 + $od_v7 + $od_v8 + $od_v9 + $od_v10;

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

        $result_v2 = $od_a1 + $od_a2 + $od_a3 + $od_a4 + $od_a5 + $od_a6 + $od_a7 + $od_a8 + $od_a9 + $od_a10;

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

        $result_v3 = $od_s1 + $od_s2 + $od_s3 + $od_s4 + $od_s5 + $od_s6 + $od_s7 + $od_s8 + $od_s9 + $od_s10;

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

        $result_v4 = $od_d1 + $od_d2 + $od_d3 + $od_d4 + $od_d5 + $od_d6 + $od_d7 + $od_d8 + $od_d9 + $od_d10;

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

        $result_v5 = $od_f1 + $od_f2 + $od_f3 + $od_f4 + $od_f5 + $od_f6 + $od_f7 + $od_f8 + $od_f9 + $od_f10;

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

        $result_v6 = $od_g1 + $od_g2 + $od_g3 + $od_g4 + $od_g5 + $od_g6 + $od_g7 + $od_g8 + $od_g9 + $od_g10;

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

        $result_v7 = $od_h1 + $od_h2 + $od_h3 + $od_h4 + $od_h5 + $od_h6 + $od_h7 + $od_h8 + $od_h9 + $od_h10;


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

        $result_v8 = $if_v1 + $if_v2 + $if_v3 + $if_v4 + $if_v5 + $if_v6 + $if_v7 + $if_v8 + $if_v9 + $if_v10;


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

        $result_v9 = $cut_v1 + $cut_v2 + $cut_v3 + $cut_v4 + $cut_v5 + $cut_v6 + $cut_v7 + $cut_v8 + $cut_v9 + $cut_v10;

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

        $result_v10 = $cuttrue_v1 + $cuttrue_v2 + $cuttrue_v3 + $cuttrue_v4 + $cuttrue_v5 + $cuttrue_v6 + $cuttrue_v7 + $cuttrue_v8 + $cuttrue_v9 + $cuttrue_v10;

    


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
        $result_v9 = $cut_v1 + $cut_v2 + $cut_v3 + $cut_v4 + $cut_v5 + $cut_v6 + $cut_v7 + $cut_v8 + $cut_v9 + $cut_v10;

        $result_v11 = $result_v1 + $result_v2 + $result_v3 + $result_v4 + $result_v5 + $result_v6 + $result_v7 + $result_v8 + $result_v9 + $result_v10;

        for ($i = 1; $i <= 5; $i++) {
            $input = isset($_REQUEST['number' . $i]) ? floatval($_REQUEST['number' . $i]) : 0;
            ${'nmpack' . $i} = $input * $result_v9;
        }
        
        for ($i = 1; $i <= 15; $i++) {
            $input = isset($_REQUEST['num' . $i]) ? floatval($_REQUEST['num' . $i]) : 0;
            ${'detv' . $i} = $input * $result_v9;
        }
        // คำนวณผลรวมที่ต้องการ


        // Process txt_file
        if (isset($_FILES['txt_file']) && !empty($_FILES['txt_file']['name'])) {
            $image_file = $_FILES['txt_file']['name'];
            $type = $_FILES['txt_file']['type'];
            $size = $_FILES['txt_file']['size'];
            $temp = $_FILES['txt_file']['tmp_name'];
            $extension = pathinfo($image_file, PATHINFO_EXTENSION);
            $path = "upload/" . $image_file; // set upload folder path

            if (empty($name_op)) {
                $errorMsg = "กรุณาใส่ชื่องาน";
            } else {
                // Check if the file already exists
                if (file_exists($path)) {
                    $counter = 1;
                    $new_path = "upload/" . pathinfo($image_file, PATHINFO_FILENAME) . "_$counter.$extension";
                    
                    // Generate a new file name with a counter if the file already exists
                    while (file_exists($new_path)) {
                        $counter++;
                        $new_path = "upload/" . pathinfo($image_file, PATHINFO_FILENAME) . "_$counter.$extension";
                    }
                    
                    $image_file = pathinfo($new_path, PATHINFO_BASENAME);
                }

                if ($size < 5000000 && ($type == "image/jpg" || $type == 'image/jpeg' || $type == "image/png" || $type == "image/gif")) {
                    move_uploaded_file($temp, 'upload/' . $image_file); // move upload file to your upload folder
                } else {
                    $errorMsg = "Invalid file format or file too large (max 5MB)";
                }
            }
        }

        // Process txt_file2
        if (isset($_FILES['txt_file2']) && !empty($_FILES['txt_file2']['name'])) {
            $image_file2 = $_FILES['txt_file2']['name'];
            $type2 = $_FILES['txt_file2']['type'];
            $size2 = $_FILES['txt_file2']['size'];
            $temp2 = $_FILES['txt_file2']['tmp_name'];
            $extension2 = pathinfo($image_file2, PATHINFO_EXTENSION);
            $path2 = "upload/" . $image_file2; // set upload folder path

            if (empty($name_op)) {
                $errorMsg = "กรุณาใส่ชื่องาน";
            } else {
                // Check if the file already exists
                if (file_exists($path2)) {
                    $counter = 1;
                    $new_path = "upload/" . pathinfo($image_file2, PATHINFO_FILENAME) . "_$counter.$extension2";
                    
                    // Generate a new file name with a counter if the file already exists
                    while (file_exists($new_path)) {
                        $counter++;
                        $new_path = "upload/" . pathinfo($image_file2, PATHINFO_FILENAME) . "_$counter.$extension2";
                    }
                    
                    $image_file2 = pathinfo($new_path, PATHINFO_BASENAME);
                }

                if ($size2 < 5000000 && ($type2 == "image/jpg" || $type2 == 'image/jpeg' || $type2 == "image/png" || $type2 == "image/gif")) {
                    move_uploaded_file($temp2, 'upload/' . $image_file2); // move upload file to your upload folder
                } else {
                    $errorMsg = "Invalid file format or file too large (max 5MB)";
                }
            }
        }

        // Process txt_file3
        if (isset($_FILES['txt_file3']) && !empty($_FILES['txt_file3']['name'])) {
            $image_file3 = $_FILES['txt_file3']['name'];
            $type3 = $_FILES['txt_file3']['type'];
            $size3 = $_FILES['txt_file3']['size'];
            $temp3 = $_FILES['txt_file3']['tmp_name'];
            $extension3 = pathinfo($image_file3, PATHINFO_EXTENSION);
            $path3 = "upload/" . $image_file3; // set upload folder path

            if (empty($name_op)) {
                $errorMsg = "กรุณาใส่ชื่องาน";
            } else {
                // Check if the file already exists
                if (file_exists($path3)) {
                    $counter = 1;
                    $new_path = "upload/" . pathinfo($image_file3, PATHINFO_FILENAME) . "_$counter.$extension3";
                    
                    // Generate a new file name with a counter if the file already exists
                    while (file_exists($new_path)) {
                        $counter++;
                        $new_path = "upload/" . pathinfo($image_file3, PATHINFO_FILENAME) . "_$counter.$extension3";
                    }
                    
                    $image_file3 = pathinfo($new_path, PATHINFO_BASENAME);
                }

                if ($size3 < 5000000 && ($type3 == "image/jpg" || $type3 == 'image/jpeg' || $type3 == "image/png" || $type3 == "image/gif")) {
                    move_uploaded_file($temp3, 'upload/' . $image_file3); // move upload file to your upload folder
                } else {
                    $errorMsg = "Invalid file format or file too large (max 5MB)";
                }
            }
        }

        // Process txt_file4
        if (isset($_FILES['txt_file4']) && !empty($_FILES['txt_file4']['name'])) {
            $image_file4 = $_FILES['txt_file4']['name'];
            $type4 = $_FILES['txt_file4']['type'];
            $size4 = $_FILES['txt_file4']['size'];
            $temp4 = $_FILES['txt_file4']['tmp_name'];
            $extension4 = pathinfo($image_file4, PATHINFO_EXTENSION);
            $path4 = "upload/" . $image_file4; // set upload folder path

            if (empty($name_op)) {
                $errorMsg = "กรุณาใส่ชื่องาน";
            } else {
                // Check if the file already exists
                if (file_exists($path4)) {
                    $counter = 1;
                    $new_path = "upload/" . pathinfo($image_file4, PATHINFO_FILENAME) . "_$counter.$extension4";
                    
                    // Generate a new file name with a counter if the file already exists
                    while (file_exists($new_path)) {
                        $counter++;
                        $new_path = "upload/" . pathinfo($image_file4, PATHINFO_FILENAME) . "_$counter.$extension4";
                    }
                    
                    $image_file4 = pathinfo($new_path, PATHINFO_BASENAME);
                }

                if ($size4 < 5000000 && ($type4 == "image/jpg" || $type4 == 'image/jpeg' || $type4 == "image/png" || $type4 == "image/gif")) {
                    move_uploaded_file($temp4, 'upload/' . $image_file4); // move upload file to your upload folder
                } else {
                    $errorMsg = "Invalid file format or file too large (max 5MB)";
                }
            }
        }

            if (!isset($errorMsg)) {
                $insert_stmt = $db->prepare('INSERT INTO db_op (name_op, fn, nmod, new_ptc, ks, timeing, 
                    size_v1, size_v2, size_v3, size_v4, size_v5, size_v6, size_v7, size_v8, size_v9, size_v10, 
                    od_v1, od_v2, od_v3, od_v4, od_v5, od_v6, od_v7, od_v8, od_v9, od_v10, 
                    od_a1, od_a2, od_a3, od_a4, od_a5, od_a6, od_a7, od_a8, od_a9, od_a10, 
                    od_s1, od_s2, od_s3, od_s4, od_s5, od_s6, od_s7, od_s8, od_s9, od_s10, 
                    od_d1, od_d2, od_d3, od_d4, od_d5, od_d6, od_d7, od_d8, od_d9, od_d10, 
                    od_f1, od_f2, od_f3, od_f4, od_f5, od_f6, od_f7, od_f8, od_f9, od_f10, 
                    od_g1, od_g2, od_g3, od_g4, od_g5, od_g6, od_g7, od_g8, od_g9, od_g10, 
                    od_h1, od_h2, od_h3, od_h4, od_h5, od_h6, od_h7, od_h8, od_h9, od_h10, 
                    od_j1, od_j2, od_j3, od_j4, od_j5, od_j6, od_j7,
                    if_v0, if_v1, if_v2, if_v3, if_v4, if_v5, if_v6, if_v7, if_v8, if_v9, if_v10, 
                    cut_v1, cut_v2, cut_v3, cut_v4, cut_v5, cut_v6, cut_v7, cut_v8, cut_v9, cut_v10, 
                    cuttrue_v1, cuttrue_v2, cuttrue_v3, cuttrue_v4, cuttrue_v5, cuttrue_v6, cuttrue_v7, cuttrue_v8, cuttrue_v9, cuttrue_v10, 
                    result_v1, result_v2, result_v3, result_v4, result_v5, result_v6, result_v7, result_v8, result_v9, result_v10,  result_v11,
                    details, details0, details_v1, details_v2, details_v3, details_v4, details_v5, details_v6, details_v7, details_v8, details_v9, details_v10,  
                    details_v11, details_v12, details_v13, details_v14, details_v15, details_v16, details_v17, details_v18, details_v19, details_v20,
                    details_v21, details_v22, details_v23, details_v24, details_v25, details_v26, details_v27, details_v28, details_v29,
                    nmdetails1, nmdetails2, nmdetails3, nmdetails4, nmdetails5, nmdetails6, nmdetails7, nmdetails8, nmdetails9, nmdetails10, 
                    nmdetails11 , nmdetails12, nmdetails13, nmdetails14, nmdetails15, nmdetails16, nmdetails17, nmdetails18, nmdetails19, nmdetails20,
                    nmdetails21, nmdetails22, nmdetails23, nmdetails24, nmdetails25, nmdetails26, nmdetails27, nmdetails28, nmdetails29,
                    detv1, detv2, detv3, detv4, detv5, detv6, detv7, detv8, detv9, detv10,  
                    detv11, detv12, detv13, detv14, detv15, detv16, detv17, detv18, detv19, detv20,
                    detv21, detv22, detv23, detv24, detv25, detv26, detv27, detv28, detv29,
                    pin0, pin1, pin2, pin3, pin4, pin5, 
                    pack1, pack2, pack3, pack4, pack5, 
                    nmpack1, nmpack2, nmpack3, nmpack4, nmpack5, 
                    note, image, image2, image3, image4, 
                    size_details1, size_details2, size_details3, size_details4, size_details5, size_details6, size_details7, size_details8, size_details9, size_details10, size_details11, size_details12, size_details13, size_details14, size_details15, 
                    ss1, ss2, ss3, ss4, ss5, ss6, ss7, ss8, ss9, ss10, ss11, ss12, ss13, ss14, ss15, 
                    s1, s2, s3, s4, s5, s6, s7, s8, s9, s10, s11, s12, s13, s14, s15,  
                    m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11, m12, m13, m14, m15,  
                    l1, l2, l3, l4, l5, l6, l7, l8, l9, l10, l11, l12, l13, l14, l15, 
                    xl1, xl2, xl3, xl4, xl5, xl6, xl7, xl8, xl9, xl10, xl11, xl12, xl13, xl14, xl15,  
                    xl21, xl22, xl23, xl24, xl25, xl26, xl27, xl28, xl29, xl210, xl211, xl212, xl213, xl214, xl215, 
                    xl31, xl32, xl33, xl34, xl35, xl36, xl37, xl38, xl39, xl310, xl311, xl312, xl313, xl314, xl315,  
                    xl41, xl42, xl43, xl44, xl45, xl46, xl47, xl48, xl49, xl410, xl411, xl412, xl413, xl414, xl415,  
                    xl51, xl52, xl53, xl54, xl55, xl56, xl57, xl58, xl59, xl510, xl511, xl512, xl513, xl514, xl515,  
                    xl61, xl62, xl63, xl64, xl65, xl66, xl67, xl68, xl69, xl610, xl611, xl612, xl613, xl614, xl615,  
                    xl71, xl72, xl73, xl74, xl75, xl76, xl77, xl78, xl79, xl710, xl711, xl712, xl713, xl714, xl715, 
                    nes, nem, nemg, timess, timem, timemg) 
                    VALUES (:np, :fn, :nmod, :nt, :ks, :tm, 
                    :si1, :si2, :si3, :si4, :si5, :si6, :si7, :si8, :si9, :si10, 
                    :od1, :od2, :od3, :od4, :od5, :od6, :od7, :od8, :od9, :od10, 
                    :oda1, :oda2, :oda3, :oda4, :oda5, :oda6, :oda7, :oda8, :oda9, :oda10, 
                    :ods1, :ods2, :ods3, :ods4, :ods5, :ods6, :ods7, :ods8, :ods9, :ods10, 
                    :odd1, :odd2, :odd3, :odd4, :odd5, :odd6, :odd7, :odd8, :odd9, :odd10, 
                    :odf1, :odf2, :odf3, :odf4, :odf5, :odf6, :odf7, :odf8, :odf9, :odf10, 
                    :odg1, :odg2, :odg3, :odg4, :odg5, :odg6, :odg7, :odg8, :odg9, :odg10, 
                    :odh1, :odh2, :odh3, :odh4, :odh5, :odh6, :odh7, :odh8, :odh9, :odh10, 
                    :odj1, :odj2, :odj3, :odj4, :odj5, :odj6, :odj7,
                    :if_0, :if_1, :if_2, :if_3, :if_4, :if_5, :if_6, :if_7, :if_8, :if_9, :if_10,  
                    :cut1, :cut2, :cut3, :cut4, :cut5, :cut6, :cut7, :cut8, :cut9, :cut10, 
                    :ct1, :ct2, :ct3, :ct4, :ct5, :ct6, :ct7, :ct8, :ct9, :ct10, 
                    :result1, :result2, :result3, :result4, :result5, :result6, :result7, :result8, :result9, :result10, :result11,  
                    :dt, :dt0, :dt1, :dt2, :dt3, :dt4, :dt5, :dt6, :dt7, :dt8, :dt9, :dt10, 
                    :dt11, :dt12, :dt13, :dt14, :dt15, :dt16, :dt17, :dt18, :dt19, :dt20, 
                    :dt21, :dt22, :dt23, :dt24, :dt25, :dt26, :dt27, :dt28, :dt29,
                    :nd1, :nd2, :nd3, :nd4, :nd5, :nd6, :nd7, :nd8, :nd9, :nd10, 
                    :nd11, :nd12, :nd13, :nd14, :nd15, :nd16, :nd17, :nd18, :nd19, :nd20,
                    :nd21, :nd22, :nd23, :nd24, :nd25, :nd26, :nd27, :nd28, :nd29, 
                    :dv1, :dv2, :dv3, :dv4, :dv5, :dv6, :dv7, :dv8, :dv9, :dv10, 
                    :dv11, :dv12, :dv13, :dv14, :dv15, :dv16, :dv17, :dv18, :dv19, :dv20,
                    :dv21, :dv22, :dv23, :dv24, :dv25, :dv26, :dv27, :dv28, :dv29, 
                    :p, :p1, :p2, :p3, :p4, :p5, 
                    :pa1, :pa2, :pa3, :pa4, :pa5, 
                    :nmp1, :nmp2, :nmp3, :nmp4, :nmp5, 
                    :ne, :image, :image2, :image3, :image4,  
                    :sd1, :sd2, :sd3, :sd4, :sd5, :sd6, :sd7, :sd8, :sd9, :sd10, :sd11, :sd12, :sd13, :sd14, :sd15, 
                    :ss1, :ss2, :ss3, :ss4, :ss5, :ss6, :ss7, :ss8, :ss9, :ss10, :ss11, :ss12, :ss13, :ss14, :ss15, 
                    :s1, :s2, :s3, :s4, :s5, :s6, :s7, :s8, :s9, :s10, :s11, :s12, :s13, :s14, :s15,  
                    :m1, :m2, :m3, :m4, :m5, :m6, :m7, :m8, :m9, :m10, :m11, :m12, :m13, :m14, :m15,  
                    :l1, :l2, :l3, :l4, :l5, :l6, :l7, :l8, :l9, :l10, :l11, :l12, :l13, :l14, :l15, 
                    :xl1, :xl2, :xl3, :xl4, :xl5, :xl6, :xl7, :xl8, :xl9, :xl10, :xl11, :xl12, :xl13, :xl14, :xl15,  
                    :xl21, :xl22, :xl23, :xl24, :xl25, :xl26, :xl27, :xl28, :xl29, :xl210, :xl211, :xl212, :xl213, :xl214, :xl215, 
                    :xl31, :xl32, :xl33, :xl34, :xl35, :xl36, :xl37, :xl38, :xl39, :xl310, :xl311, :xl312, :xl313, :xl314, :xl315,  
                    :xl41, :xl42, :xl43, :xl44, :xl45, :xl46, :xl47, :xl48, :xl49, :xl410, :xl411, :xl412, :xl413, :xl414, :xl415,  
                    :xl51, :xl52, :xl53, :xl54, :xl55, :xl56, :xl57, :xl58, :xl59, :xl510, :xl511, :xl512, :xl513, :xl514, :xl515,  
                    :xl61, :xl62, :xl63, :xl64, :xl65, :xl66, :xl67, :xl68, :xl69, :xl610, :xl611, :xl612, :xl613, :xl614, :xl615,  
                    :xl71, :xl72, :xl73, :xl74, :xl75, :xl76, :xl77, :xl78, :xl79, :xl710, :xl711, :xl712, :xl713, :xl714, :xl715, 
                    :ns, :nm, :nmg, :tis, :tim, :timg)');

                  

                $insert_stmt->bindParam(':np', $name_op);
                $insert_stmt->bindParam(':image', $image_file);
                $insert_stmt->bindParam(':image2', $image_file2);
                $insert_stmt->bindParam(':image3', $image_file3);
                $insert_stmt->bindParam(':image4', $image_file4);
                $insert_stmt->bindParam(':ks', $ks);
                $insert_stmt->bindParam(':nmod', $nmod);
                $insert_stmt->bindParam(':fn', $new_fn);   
                $insert_stmt->bindParam(':result1', $result_v1);  
                $insert_stmt->bindParam(':result2', $result_v2);  
                $insert_stmt->bindParam(':result3', $result_v3);  
                $insert_stmt->bindParam(':result4', $result_v4);  
                $insert_stmt->bindParam(':result5', $result_v5);
                $insert_stmt->bindParam(':result6', $result_v6);        
                $insert_stmt->bindParam(':result7', $result_v7);  
                $insert_stmt->bindParam(':result8', $result_v8);
                $insert_stmt->bindParam(':result9', $result_v9);
                $insert_stmt->bindParam(':result10', $result_v10); 
                $insert_stmt->bindParam(':result11', $result_v11);     
                $insert_stmt->bindParam(':nt', $new_ptc);
         
                $insert_stmt->bindParam(':tm', $timeing);

                $insert_stmt->bindParam(':si1', $size_v1);
                $insert_stmt->bindParam(':si2', $size_v2);
                $insert_stmt->bindParam(':si3', $size_v3);
                $insert_stmt->bindParam(':si4', $size_v4);
                $insert_stmt->bindParam(':si5', $size_v5);
                $insert_stmt->bindParam(':si6', $size_v6);
                $insert_stmt->bindParam(':si7', $size_v7);
                $insert_stmt->bindParam(':si8', $size_v8);
                $insert_stmt->bindParam(':si9', $size_v9);
                $insert_stmt->bindParam(':si10', $size_v10);


                $insert_stmt->bindParam(':od1', $od_v1);
                $insert_stmt->bindParam(':od2', $od_v2);
                $insert_stmt->bindParam(':od3', $od_v3);
                $insert_stmt->bindParam(':od4', $od_v4);
                $insert_stmt->bindParam(':od5', $od_v5);
                $insert_stmt->bindParam(':od6', $od_v6);
                $insert_stmt->bindParam(':od7', $od_v7);
                $insert_stmt->bindParam(':od8', $od_v8);
                $insert_stmt->bindParam(':od9', $od_v9);
                $insert_stmt->bindParam(':od10', $od_v10);

                $insert_stmt->bindParam(':oda1', $od_a1);
                $insert_stmt->bindParam(':oda2', $od_a2);
                $insert_stmt->bindParam(':oda3', $od_a3);
                $insert_stmt->bindParam(':oda4', $od_a4);
                $insert_stmt->bindParam(':oda5', $od_a5);
                $insert_stmt->bindParam(':oda6', $od_a6);
                $insert_stmt->bindParam(':oda7', $od_a7);
                $insert_stmt->bindParam(':oda8', $od_a8);
                $insert_stmt->bindParam(':oda9', $od_a9);
                $insert_stmt->bindParam(':oda10', $od_a10);

                $insert_stmt->bindParam(':ods1', $od_s1);
                $insert_stmt->bindParam(':ods2', $od_s2);
                $insert_stmt->bindParam(':ods3', $od_s3);
                $insert_stmt->bindParam(':ods4', $od_s4);
                $insert_stmt->bindParam(':ods5', $od_s5);
                $insert_stmt->bindParam(':ods6', $od_s6);
                $insert_stmt->bindParam(':ods7', $od_s7);
                $insert_stmt->bindParam(':ods8', $od_s8);
                $insert_stmt->bindParam(':ods9', $od_s9);
                $insert_stmt->bindParam(':ods10', $od_s10);

                $insert_stmt->bindParam(':odd1', $od_d1);
                $insert_stmt->bindParam(':odd2', $od_d2);
                $insert_stmt->bindParam(':odd3', $od_d3);
                $insert_stmt->bindParam(':odd4', $od_d4);
                $insert_stmt->bindParam(':odd5', $od_d5);
                $insert_stmt->bindParam(':odd6', $od_d6);
                $insert_stmt->bindParam(':odd7', $od_d7);
                $insert_stmt->bindParam(':odd8', $od_d8);
                $insert_stmt->bindParam(':odd9', $od_d9);
                $insert_stmt->bindParam(':odd10', $od_d10);

                $insert_stmt->bindParam(':odf1', $od_f1);
                $insert_stmt->bindParam(':odf2', $od_f2);
                $insert_stmt->bindParam(':odf3', $od_f3);
                $insert_stmt->bindParam(':odf4', $od_f4);
                $insert_stmt->bindParam(':odf5', $od_f5);
                $insert_stmt->bindParam(':odf6', $od_f6);
                $insert_stmt->bindParam(':odf7', $od_f7);
                $insert_stmt->bindParam(':odf8', $od_f8);
                $insert_stmt->bindParam(':odf9', $od_f9);
                $insert_stmt->bindParam(':odf10', $od_f10);
                
                $insert_stmt->bindParam(':odg1', $od_g1);
                $insert_stmt->bindParam(':odg2', $od_g2);
                $insert_stmt->bindParam(':odg3', $od_g3);
                $insert_stmt->bindParam(':odg4', $od_g4);
                $insert_stmt->bindParam(':odg5', $od_g5);
                $insert_stmt->bindParam(':odg6', $od_g6);
                $insert_stmt->bindParam(':odg7', $od_g7);
                $insert_stmt->bindParam(':odg8', $od_g8);
                $insert_stmt->bindParam(':odg9', $od_g9);
                $insert_stmt->bindParam(':odg10', $od_g10);

                $insert_stmt->bindParam(':odh1', $od_h1);
                $insert_stmt->bindParam(':odh2', $od_h2);
                $insert_stmt->bindParam(':odh3', $od_h3);
                $insert_stmt->bindParam(':odh4', $od_h4);
                $insert_stmt->bindParam(':odh5', $od_h5);
                $insert_stmt->bindParam(':odh6', $od_h6);
                $insert_stmt->bindParam(':odh7', $od_h7);
                $insert_stmt->bindParam(':odh8', $od_h8);
                $insert_stmt->bindParam(':odh9', $od_h9);
                $insert_stmt->bindParam(':odh10', $od_h10);

                $insert_stmt->bindParam(':odj1', $od_j1);
                $insert_stmt->bindParam(':odj2', $od_j2);
                $insert_stmt->bindParam(':odj3', $od_j3);
                $insert_stmt->bindParam(':odj4', $od_j4);
                $insert_stmt->bindParam(':odj5', $od_j5);
                $insert_stmt->bindParam(':odj6', $od_j6);
                $insert_stmt->bindParam(':odj7', $od_j7);


                $insert_stmt->bindParam(':if_0', $if_v0);
                $insert_stmt->bindParam(':if_1', $if_v1);
                $insert_stmt->bindParam(':if_2', $if_v2);
                $insert_stmt->bindParam(':if_3', $if_v3);
                $insert_stmt->bindParam(':if_4', $if_v4);
                $insert_stmt->bindParam(':if_5', $if_v5);
                $insert_stmt->bindParam(':if_6', $if_v6);
                $insert_stmt->bindParam(':if_7', $if_v7);
                $insert_stmt->bindParam(':if_8', $if_v8);
                $insert_stmt->bindParam(':if_9', $if_v9);
                $insert_stmt->bindParam(':if_10', $if_v10);


                $insert_stmt->bindParam(':cut1', $cut_v1);
                $insert_stmt->bindParam(':cut2', $cut_v2);
                $insert_stmt->bindParam(':cut3', $cut_v3);
                $insert_stmt->bindParam(':cut4', $cut_v4);
                $insert_stmt->bindParam(':cut5', $cut_v5);
                $insert_stmt->bindParam(':cut6', $cut_v6);
                $insert_stmt->bindParam(':cut7', $cut_v7);
                $insert_stmt->bindParam(':cut8', $cut_v8);
                $insert_stmt->bindParam(':cut9', $cut_v9);
                $insert_stmt->bindParam(':cut10', $cut_v10);


                $insert_stmt->bindParam(':ct1', $cuttrue_v1);
                $insert_stmt->bindParam(':ct2', $cuttrue_v2);
                $insert_stmt->bindParam(':ct3', $cuttrue_v3);
                $insert_stmt->bindParam(':ct4', $cuttrue_v4);
                $insert_stmt->bindParam(':ct5', $cuttrue_v5);
                $insert_stmt->bindParam(':ct6', $cuttrue_v6);
                $insert_stmt->bindParam(':ct7', $cuttrue_v7);
                $insert_stmt->bindParam(':ct8', $cuttrue_v8);
                $insert_stmt->bindParam(':ct9', $cuttrue_v9);
                $insert_stmt->bindParam(':ct10', $cuttrue_v10);


                $insert_stmt->bindParam(':dt', $details);
                $insert_stmt->bindParam(':dt0', $details0);
                $insert_stmt->bindParam(':dt1', $details_v1);
                $insert_stmt->bindParam(':dt2', $details_v2);
                $insert_stmt->bindParam(':dt3', $details_v3);
                $insert_stmt->bindParam(':dt4', $details_v4);
                $insert_stmt->bindParam(':dt5', $details_v5);
                $insert_stmt->bindParam(':dt6', $details_v6);
                $insert_stmt->bindParam(':dt7', $details_v7);
                $insert_stmt->bindParam(':dt8', $details_v8);
                $insert_stmt->bindParam(':dt9', $details_v9);
                $insert_stmt->bindParam(':dt10', $details_v10);
                $insert_stmt->bindParam(':dt11', $details_v11);
                $insert_stmt->bindParam(':dt12', $details_v12);
                $insert_stmt->bindParam(':dt13', $details_v13);
                $insert_stmt->bindParam(':dt14', $details_v14);
                $insert_stmt->bindParam(':dt15', $details_v15);
                $insert_stmt->bindParam(':dt16', $details_v16);
                $insert_stmt->bindParam(':dt17', $details_v17);
                $insert_stmt->bindParam(':dt18', $details_v18);
                $insert_stmt->bindParam(':dt19', $details_v19);
                $insert_stmt->bindParam(':dt20', $details_v20);
                $insert_stmt->bindParam(':dt21', $details_v21);
                $insert_stmt->bindParam(':dt22', $details_v22);
                $insert_stmt->bindParam(':dt23', $details_v23);
                $insert_stmt->bindParam(':dt24', $details_v24);
                $insert_stmt->bindParam(':dt25', $details_v25);
                $insert_stmt->bindParam(':dt26', $details_v26);
                $insert_stmt->bindParam(':dt27', $details_v27);
                $insert_stmt->bindParam(':dt28', $details_v28);
                $insert_stmt->bindParam(':dt29', $details_v29);

                $insert_stmt->bindParam(':nd1', $nmdetails1);
                $insert_stmt->bindParam(':nd2', $nmdetails2);
                $insert_stmt->bindParam(':nd3', $nmdetails3);
                $insert_stmt->bindParam(':nd4', $nmdetails4);
                $insert_stmt->bindParam(':nd5', $nmdetails5);
                $insert_stmt->bindParam(':nd6', $nmdetails6);
                $insert_stmt->bindParam(':nd7', $nmdetails7);
                $insert_stmt->bindParam(':nd8', $nmdetails8);
                $insert_stmt->bindParam(':nd9', $nmdetails9);
                $insert_stmt->bindParam(':nd10', $nmdetails10);
                $insert_stmt->bindParam(':nd11', $nmdetails11);
                $insert_stmt->bindParam(':nd12', $nmdetails12);
                $insert_stmt->bindParam(':nd13', $nmdetails13);
                $insert_stmt->bindParam(':nd14', $nmdetails14);
                $insert_stmt->bindParam(':nd15', $nmdetails15);
                $insert_stmt->bindParam(':nd16', $nmdetails16);
                $insert_stmt->bindParam(':nd17', $nmdetails17);
                $insert_stmt->bindParam(':nd18', $nmdetails18);
                $insert_stmt->bindParam(':nd19', $nmdetails19);
                $insert_stmt->bindParam(':nd20', $nmdetails20);
                $insert_stmt->bindParam(':nd21', $nmdetails21);
                $insert_stmt->bindParam(':nd22', $nmdetails22);
                $insert_stmt->bindParam(':nd23', $nmdetails23);
                $insert_stmt->bindParam(':nd24', $nmdetails24);
                $insert_stmt->bindParam(':nd25', $nmdetails25);
                $insert_stmt->bindParam(':nd26', $nmdetails26);
                $insert_stmt->bindParam(':nd27', $nmdetails27);
                $insert_stmt->bindParam(':nd28', $nmdetails28);
                $insert_stmt->bindParam(':nd29', $nmdetails29);
                
                $insert_stmt->bindParam(':dv1', $detv1);
                $insert_stmt->bindParam(':dv2', $detv2);
                $insert_stmt->bindParam(':dv3', $detv3);
                $insert_stmt->bindParam(':dv4', $detv4);
                $insert_stmt->bindParam(':dv5', $detv5);
                $insert_stmt->bindParam(':dv6', $detv6);
                $insert_stmt->bindParam(':dv7', $detv7);
                $insert_stmt->bindParam(':dv8', $detv8);
                $insert_stmt->bindParam(':dv9', $detv9);
                $insert_stmt->bindParam(':dv10', $detv10);
                $insert_stmt->bindParam(':dv11', $detv11);
                $insert_stmt->bindParam(':dv12', $detv12);
                $insert_stmt->bindParam(':dv13', $detv13);
                $insert_stmt->bindParam(':dv14', $detv14);
                $insert_stmt->bindParam(':dv15', $detv15);
                $insert_stmt->bindParam(':dv16', $detv16);
                $insert_stmt->bindParam(':dv17', $detv17);
                $insert_stmt->bindParam(':dv18', $detv18);
                $insert_stmt->bindParam(':dv19', $detv19);
                $insert_stmt->bindParam(':dv20', $detv20);
                $insert_stmt->bindParam(':dv21', $detv21);
                $insert_stmt->bindParam(':dv22', $detv22);
                $insert_stmt->bindParam(':dv23', $detv23);
                $insert_stmt->bindParam(':dv24', $detv24);
                $insert_stmt->bindParam(':dv25', $detv25);
                $insert_stmt->bindParam(':dv26', $detv26);
                $insert_stmt->bindParam(':dv27', $detv27);
                $insert_stmt->bindParam(':dv28', $detv28);
                $insert_stmt->bindParam(':dv29', $detv29);

                $insert_stmt->bindParam(':p', $pin0);
                $insert_stmt->bindParam(':p1', $pin1);
                $insert_stmt->bindParam(':p2', $pin2);
                $insert_stmt->bindParam(':p3', $pin3);
                $insert_stmt->bindParam(':p4', $pin4);
                $insert_stmt->bindParam(':p5', $pin5);


                $insert_stmt->bindParam(':pa1', $pack1);
                $insert_stmt->bindParam(':pa2', $pack2);
                $insert_stmt->bindParam(':pa3', $pack3);
                $insert_stmt->bindParam(':pa4', $pack4);
                $insert_stmt->bindParam(':pa5', $pack5);

                $insert_stmt->bindParam(':nmp1', $nmpack1);
                $insert_stmt->bindParam(':nmp2', $nmpack2);
                $insert_stmt->bindParam(':nmp3', $nmpack3);
                $insert_stmt->bindParam(':nmp4', $nmpack4);
                $insert_stmt->bindParam(':nmp5', $nmpack5);

                $insert_stmt->bindParam(':ne', $note);

                $insert_stmt->bindParam(':sd1', $size_details1);
                $insert_stmt->bindParam(':sd2', $size_details2);
                $insert_stmt->bindParam(':sd3', $size_details3);
                $insert_stmt->bindParam(':sd4', $size_details4);
                $insert_stmt->bindParam(':sd5', $size_details5);
                $insert_stmt->bindParam(':sd6', $size_details6);
                $insert_stmt->bindParam(':sd7', $size_details7);
                $insert_stmt->bindParam(':sd8', $size_details8);
                $insert_stmt->bindParam(':sd9', $size_details9);
                $insert_stmt->bindParam(':sd10', $size_details10);
                $insert_stmt->bindParam(':sd11', $size_details11);
                $insert_stmt->bindParam(':sd12', $size_details12);
                $insert_stmt->bindParam(':sd13', $size_details13);
                $insert_stmt->bindParam(':sd14', $size_details14);
                $insert_stmt->bindParam(':sd15', $size_details15);

                $insert_stmt->bindParam(':ss1', $ss1);
                $insert_stmt->bindParam(':ss2', $ss2);
                $insert_stmt->bindParam(':ss3', $ss3);
                $insert_stmt->bindParam(':ss4', $ss4);
                $insert_stmt->bindParam(':ss5', $ss5);
                $insert_stmt->bindParam(':ss6', $ss6);
                $insert_stmt->bindParam(':ss7', $ss7);
                $insert_stmt->bindParam(':ss8', $ss8);
                $insert_stmt->bindParam(':ss9', $ss9);
                $insert_stmt->bindParam(':ss10', $ss10);
                $insert_stmt->bindParam(':ss11', $ss11);
                $insert_stmt->bindParam(':ss12', $ss12);
                $insert_stmt->bindParam(':ss13', $ss13);
                $insert_stmt->bindParam(':ss14', $ss14);
                $insert_stmt->bindParam(':ss15', $ss15);

                $insert_stmt->bindParam(':s1', $s1);
                $insert_stmt->bindParam(':s2', $s2);
                $insert_stmt->bindParam(':s3', $s3);
                $insert_stmt->bindParam(':s4', $s4);
                $insert_stmt->bindParam(':s5', $s5);
                $insert_stmt->bindParam(':s6', $s6);
                $insert_stmt->bindParam(':s7', $s7);
                $insert_stmt->bindParam(':s8', $s8);
                $insert_stmt->bindParam(':s9', $s9);
                $insert_stmt->bindParam(':s10', $s10);
                $insert_stmt->bindParam(':s11', $s11);
                $insert_stmt->bindParam(':s12', $s12);
                $insert_stmt->bindParam(':s13', $s13);
                $insert_stmt->bindParam(':s14', $s14);
                $insert_stmt->bindParam(':s15', $s15);

                $insert_stmt->bindParam(':m1', $m1);
                $insert_stmt->bindParam(':m2', $m2);
                $insert_stmt->bindParam(':m3', $m3);
                $insert_stmt->bindParam(':m4', $m4);
                $insert_stmt->bindParam(':m5', $m5);
                $insert_stmt->bindParam(':m6', $m6);
                $insert_stmt->bindParam(':m7', $m7);
                $insert_stmt->bindParam(':m8', $m8);
                $insert_stmt->bindParam(':m9', $m9);
                $insert_stmt->bindParam(':m10', $m10);
                $insert_stmt->bindParam(':m11', $m11);
                $insert_stmt->bindParam(':m12', $m12);
                $insert_stmt->bindParam(':m13', $m13);
                $insert_stmt->bindParam(':m14', $m14);
                $insert_stmt->bindParam(':m15', $m15);

                $insert_stmt->bindParam(':l1', $l1);
                $insert_stmt->bindParam(':l2', $l2);
                $insert_stmt->bindParam(':l3', $l3);
                $insert_stmt->bindParam(':l4', $l4);
                $insert_stmt->bindParam(':l5', $l5);
                $insert_stmt->bindParam(':l6', $l6);
                $insert_stmt->bindParam(':l7', $l7);
                $insert_stmt->bindParam(':l8', $l8);
                $insert_stmt->bindParam(':l9', $l9);
                $insert_stmt->bindParam(':l10', $l10);
                $insert_stmt->bindParam(':l11', $l11);
                $insert_stmt->bindParam(':l12', $l12);
                $insert_stmt->bindParam(':l13', $l13);
                $insert_stmt->bindParam(':l14', $l14);
                $insert_stmt->bindParam(':l15', $l15);

                $insert_stmt->bindParam(':xl1', $xl1);
                $insert_stmt->bindParam(':xl2', $xl2);
                $insert_stmt->bindParam(':xl3', $xl3);
                $insert_stmt->bindParam(':xl4', $xl4);
                $insert_stmt->bindParam(':xl5', $xl5);
                $insert_stmt->bindParam(':xl6', $xl6);
                $insert_stmt->bindParam(':xl7', $xl7);
                $insert_stmt->bindParam(':xl8', $xl8);
                $insert_stmt->bindParam(':xl9', $xl9);
                $insert_stmt->bindParam(':xl10', $xl10);
                $insert_stmt->bindParam(':xl11', $xl11);
                $insert_stmt->bindParam(':xl12', $xl12);
                $insert_stmt->bindParam(':xl13', $xl13);
                $insert_stmt->bindParam(':xl14', $xl14);
                $insert_stmt->bindParam(':xl15', $xl15);

                $insert_stmt->bindParam(':xl21', $xl21);
                $insert_stmt->bindParam(':xl22', $xl22);
                $insert_stmt->bindParam(':xl23', $xl23);
                $insert_stmt->bindParam(':xl24', $xl24);
                $insert_stmt->bindParam(':xl25', $xl25);
                $insert_stmt->bindParam(':xl26', $xl26);
                $insert_stmt->bindParam(':xl27', $xl27);
                $insert_stmt->bindParam(':xl28', $xl28);
                $insert_stmt->bindParam(':xl29', $xl29);
                $insert_stmt->bindParam(':xl210', $xl210);
                $insert_stmt->bindParam(':xl211', $xl211);
                $insert_stmt->bindParam(':xl212', $xl212);
                $insert_stmt->bindParam(':xl213', $xl213);
                $insert_stmt->bindParam(':xl214', $xl214);
                $insert_stmt->bindParam(':xl215', $xl215);

                $insert_stmt->bindParam(':xl31', $xl31);
                $insert_stmt->bindParam(':xl32', $xl32);
                $insert_stmt->bindParam(':xl33', $xl33);
                $insert_stmt->bindParam(':xl34', $xl34);
                $insert_stmt->bindParam(':xl35', $xl35);
                $insert_stmt->bindParam(':xl36', $xl36);
                $insert_stmt->bindParam(':xl37', $xl37);
                $insert_stmt->bindParam(':xl38', $xl38);
                $insert_stmt->bindParam(':xl39', $xl39);
                $insert_stmt->bindParam(':xl310', $xl310);
                $insert_stmt->bindParam(':xl311', $xl311);
                $insert_stmt->bindParam(':xl312', $xl312);
                $insert_stmt->bindParam(':xl313', $xl313);
                $insert_stmt->bindParam(':xl314', $xl314);
                $insert_stmt->bindParam(':xl315', $xl315);

                $insert_stmt->bindParam(':xl41', $xl41);
                $insert_stmt->bindParam(':xl42', $xl42);
                $insert_stmt->bindParam(':xl43', $xl43);
                $insert_stmt->bindParam(':xl44', $xl44);
                $insert_stmt->bindParam(':xl45', $xl45);
                $insert_stmt->bindParam(':xl46', $xl46);
                $insert_stmt->bindParam(':xl47', $xl47);
                $insert_stmt->bindParam(':xl48', $xl48);
                $insert_stmt->bindParam(':xl49', $xl49);
                $insert_stmt->bindParam(':xl410', $xl410);
                $insert_stmt->bindParam(':xl411', $xl411);
                $insert_stmt->bindParam(':xl412', $xl412);
                $insert_stmt->bindParam(':xl413', $xl413);
                $insert_stmt->bindParam(':xl414', $xl414);
                $insert_stmt->bindParam(':xl415', $xl415);

                $insert_stmt->bindParam(':xl51', $xl51);
                $insert_stmt->bindParam(':xl52', $xl52);
                $insert_stmt->bindParam(':xl53', $xl53);
                $insert_stmt->bindParam(':xl54', $xl54);
                $insert_stmt->bindParam(':xl55', $xl55);
                $insert_stmt->bindParam(':xl56', $xl56);
                $insert_stmt->bindParam(':xl57', $xl57);
                $insert_stmt->bindParam(':xl58', $xl58);
                $insert_stmt->bindParam(':xl59', $xl59);
                $insert_stmt->bindParam(':xl510', $xl510);
                $insert_stmt->bindParam(':xl511', $xl511);
                $insert_stmt->bindParam(':xl512', $xl512);
                $insert_stmt->bindParam(':xl513', $xl513);
                $insert_stmt->bindParam(':xl514', $xl514);
                $insert_stmt->bindParam(':xl515', $xl515);

                $insert_stmt->bindParam(':xl61', $xl61);
                $insert_stmt->bindParam(':xl62', $xl62);
                $insert_stmt->bindParam(':xl63', $xl63);
                $insert_stmt->bindParam(':xl64', $xl64);
                $insert_stmt->bindParam(':xl65', $xl65);
                $insert_stmt->bindParam(':xl66', $xl66);
                $insert_stmt->bindParam(':xl67', $xl67);
                $insert_stmt->bindParam(':xl68', $xl68);
                $insert_stmt->bindParam(':xl69', $xl69);
                $insert_stmt->bindParam(':xl610', $xl610);
                $insert_stmt->bindParam(':xl611', $xl611);
                $insert_stmt->bindParam(':xl612', $xl612);
                $insert_stmt->bindParam(':xl613', $xl613);
                $insert_stmt->bindParam(':xl614', $xl614);
                $insert_stmt->bindParam(':xl615', $xl615);

                $insert_stmt->bindParam(':xl71', $xl71);
                $insert_stmt->bindParam(':xl72', $xl72);
                $insert_stmt->bindParam(':xl73', $xl73);
                $insert_stmt->bindParam(':xl74', $xl74);
                $insert_stmt->bindParam(':xl75', $xl75);
                $insert_stmt->bindParam(':xl76', $xl76);
                $insert_stmt->bindParam(':xl77', $xl77);
                $insert_stmt->bindParam(':xl78', $xl78);
                $insert_stmt->bindParam(':xl79', $xl79);
                $insert_stmt->bindParam(':xl710', $xl710);
                $insert_stmt->bindParam(':xl711', $xl711);
                $insert_stmt->bindParam(':xl712', $xl712);
                $insert_stmt->bindParam(':xl713', $xl713);
                $insert_stmt->bindParam(':xl714', $xl714);
                $insert_stmt->bindParam(':xl715', $xl715);

                $insert_stmt->bindParam(':ns',$nes);
                $insert_stmt->bindParam(':nm', $nem);
                $insert_stmt->bindParam(':nmg', $nemg);
                $insert_stmt->bindParam(':tis', $timess);
                $insert_stmt->bindParam(':tim', $timem);
                $insert_stmt->bindParam(':timg', $timemg);

                if ($insert_stmt->execute()) {
                    // กระบวนการเพิ่มข้อมูลลงในทั้งสองตารางสำเร็จ
                    $insertMsg = "ข้อมูลถูกบันทึก กรุณารอสักครู่...";
                    header('refresh:2;index.php');
                }
            }

        } catch (PDOException $e) {
            // เพิ่มการจัดการข้อผิดพลาดที่นี่ เช่น บันทึกข้อผิดพลาดหรือแสดงข้อความข้อผิดพลาดให้ผู้ใช้
            echo 'เกิดข้อผิดพลาด: ' . $e->getMessage();
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบสั่งผลิต</title>
    <?php include 'nav.php' ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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

</head>
<body>
    <br>
    <div class="container text-center">
        <h1>กรอกรายละเอียดข้อมูล</h1>
        <br>
        <?php 
            if(isset($errorMsg)) {
        ?>
            <div class="alert alert-danger">
                <strong><?php echo $errorMsg; ?></strong>
            </div>
        <?php } ?>

        <?php 
            if(isset($insertMsg)) {
        ?>
            <div class="alert alert-success">
                <strong><?php echo $insertMsg; ?></strong>
            </div>
        <?php } ?>
        

        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            
        <div class="form-group">
            <div class="row">
                <label for="name" class="col-sm-3 control-label">ชื่องาน</label>
                <div class="col-sm-8 text-center">
                    <input class="form-control" name="txt_name_op" id="txt_name_op"  placeholder="ใส่ชื่องาน">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <label for="name" class="col-sm-3 control-label">FN</label>
                <div class="col-sm-3 text-center">
                    <input class="form-control" name="txt_fn" id="txt_fn"  placeholder="กรอก FN ">
                </div>
                <label for="name" class="col-sm-2 control-label">กำหนดส่ง</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="txt_timeing" placeholder=" ">
                </div>
            
            </div>
        </div>
        
        <div class="form-group">
                <div class="row">
                    <label class="col-sm-3 control-label">รหัสสินค้า</label>
                    <div class="col-sm-3 text-center">
                        <select class="form-control"  name="ddl_nmod" id="ddl_nmod">
                        <option value="">เลือกรหัสสินค้า</option></select>
                    </div>
                        <label class="col-sm-2 control-label">กรอกรหัสสินค้า</label>
                    <div class="col-sm-3">
                        <input  type="text" class="form-control" name="txt_nmod" id="txt_nmod" placeholder="กรอกสินค้า">
                 </div>
            </div>
        </div>

        <div class="form-group">
                <div class="row">
                    <label class="col-sm-3 control-label">NEW PTC</label>
                    <div class="col-sm-3 text-center">
                        <select class="form-control"  name="ddl_new_ptc" id="ddl_new_ptc">
                        <option value="">เลือก NEW PTC</option></select>
                    </div>
                        <label class="col-sm-2 control-label">กรอก NEW PTC</label>
                    <div class="col-sm-3">
                        <input  type="text" class="form-control" name="txt_new_ptc" id="txt_new_ptc" placeholder="กรอก NEW PTC ใหม่">
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
                    <input  type="text" class="form-control" name="txt_ks" id="txt_ks" placeholder="กรอก สข">
                </div>
            
        </div>
    
        <div class="form-group">
            <h2>ORDER</h2>
            <table class="table">
            <thead>
                <tr>
                    <td class="text-center" style="font-size: 16px; color: black; width: 10%;">Size</td>
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j1" id="od_j1" placeholder="Order1"></td>
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j2" id="od_j2" placeholder="Order2"></td>
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j3" id="od_j3" placeholder="Order3"></td>
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j4" id="od_j4" placeholder="Order4"></td>
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j5" id="od_j5" placeholder="Order5"></td>
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j6" id="od_j6" placeholder="Order6"></td>
                    <td><input class="form-control" style="font-size: 16px; color: black; width: 100%;" name="txt_od_j7" id="od_j7" placeholder="Order7"></td>
                    <td style="width: 10%;">
                        <select id="txt_if_v0" class="form-select form-control select-margin" name="txt_if_v0" aria-label="Default select example">
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
                        <input type="text" class="form-control small-input center-input" name="txt_size_v<?= $i ?>" id="txt_size_v<?= $i ?>" placeholder="กรอกไซส์">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_od_v<?= $i ?>" id="txt_od_v<?= $i ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_od_a<?= $i ?>" id="txt_od_a<?= $i ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_od_s<?= $i ?>" id="txt_od_s<?= $i ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_od_d<?= $i ?>" id="txt_od_d<?= $i ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_od_f<?= $i ?>" id="txt_od_f<?= $i ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_od_g<?= $i ?>" id="txt_od_g<?= $i ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_od_h<?= $i ?>" id="txt_od_h<?= $i ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_if_v<?= $i ?>" id="txt_if_v<?= $i ?>">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_cut_v<?= $i ?>" id="txt_cut_v<?= $i ?>" placeholder="">
                    <?php } ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v<?= $i ?>" id="txt_cuttrue_v<?= $i ?>" placeholder="">
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
                        <textarea class="form-control equal-size" name="txt_note" id="txt_note"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="form-label d-block text-center">Sale</label>
                        <input type="text" class="form-control" name="txt_nes" id="txt_nes" placeholder="ชื่อเซล์">
                        <input type="date" class="form-control" name="txt_timess" id="txt_timess" placeholder="">
                    </td>
                    <td>
                        <label class="form-label d-block text-center">Mer</label>
                        <input type="text" class="form-control" name="txt_nem" id="txt_nem" placeholder="ชื่อเมอร์">
                        <input type="date" class="form-control" name="txt_timem" id="txt_timem" placeholder="">
                    </td>
                    <td>
                        <label class="form-label d-block text-center">Manager</label>
                        <input type="text" class="form-control" name="txt_nemg" id="txt_nemg" placeholder="ชื่อเมเนเจอร์">
                        <input type="date" class="form-control" name="txt_timemg" id="txt_timemg" placeholder="">
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
                        <th><input type="text" class="form-control" name="txt_details_v<?php echo $i; ?>" id="txt_details_v<?php echo $i; ?>" placeholder="กรอกรายละเอียดอุปกรณ์"></th>
                        <th><input type="text" class="form-control" name="txt_nmdetails<?php echo $i; ?>" id="txt_nmdetails<?php echo $i; ?>" placeholder="รหัสอุปกรณ์"></th>
                        <th><input type="text" name="num<?php echo $i; ?>" id="num<?php echo $i; ?>"></th>
                        <th><input type="text" class="form-control" name="txt_detv<?php echo $i; ?>" id="txt_detv<?php echo $i; ?>" placeholder="จำนวน"></th>
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
                        <th><input type="text" class="form-control" name="txt_details_v<?php echo $i; ?>" id="txt_details_v<?php echo $i; ?>" placeholder="กรอกรายละเอียดอุปกรณ์"></th>
                        <th><input type="text" class="form-control" name="txt_nmdetails<?php echo $i; ?>" id="txt_nmdetails<?php echo $i; ?>" placeholder="รหัสอุปกรณ์"></th>
                        <th><input type="text" class="form-control" name="txt_detv<?php echo $i; ?>" id="txt_detv<?php echo $i; ?>" placeholder="จำนวน"></th>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>

            <table class="table">
                <thead>
                    <tr>
                        <td><label for="name" class="col-sm-10 control-label">อัปโหลดรูปงานปักรูปที่1</label>
                        <div class="col-sm-10"><input type="file" name="txt_file2" id="txt_file2" class="form-control"></div></td>
                        <td><label for="name" class="col-sm-10 control-label">อัปโหลดรูปงานปักรูปที่2</label>
                        <div class="col-sm-10"><input type="file" name="txt_file3" id="txt_file3" class="form-control"></div></td>
                        <td><label for="name" class="col-sm-10 control-label">อัปโหลดรูปงานปักรูปที่3</label>
                        <div class="col-sm-10"><input type="file" name="txt_file4" id="txt_file4" class="form-control"></div></td>
                    </tr>
                </thead> 
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
                            <td><input type="text" class="form-control" name="txt_pack<?= $i ?>" id="txt_pack<?= $i ?>" placeholder=" "></td>
                            <td><input type="text" name="number<?= $i ?>" id="number<?= $i ?>"></td>
                            <td class="text-center" style="width: 100px;"><input type="text" class="form-control" name="txt_nmpack<?= $i ?>" id="txt_nmpack<?= $i ?>" placeholder="จำนวน"></td>
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


        <div class="form-group">
            <div class="col-sm-12">
                <input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
</div>

    <script>
    // เมื่อหน้าเว็บโหลดเสร็จแล้ว
    window.onload = function() {
        // เลือก input ด้วย id และเคลียร์ค่า
        document.getElementById('txt_fn_autofill').value = '';
    }
</script>
    <script src="js/nmscript.js"></script>
    <script src="js/ptcscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

