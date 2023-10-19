<?php 

    require_once('connection.php');
    if (isset($_REQUEST['btn_insert'])) {
        try {
        $name_op = $_POST['txt_name_op'];
        $ks = $_POST['txt_ks'];
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
        $size_v11 = $_POST['txt_size_v11'];
        $size_v12 = $_POST['txt_size_v12'];
        $size_v13 = $_POST['txt_size_v13'];
        $size_v14 = $_POST['txt_size_v14'];
        $size_v15 = $_POST['txt_size_v15'];
        $size_v16 = $_POST['txt_size_v16'];
        $size_v17 = $_POST['txt_size_v17'];
        $size_v18 = $_POST['txt_size_v18'];
        $size_v19 = $_POST['txt_size_v19'];
        $size_v20 = $_POST['txt_size_v20'];
        
        $on_pdv1 = $_POST['txt_on_pdv1'];
        $on_pdv2 = $_POST['txt_on_pdv2'];
        $on_pdv3 = $_POST['txt_on_pdv3'];
        $on_pdv4 = $_POST['txt_on_pdv4'];
        $on_pdv5 = $_POST['txt_on_pdv5'];
        $on_pdv6 = $_POST['txt_on_pdv6'];
        $on_pdv7 = $_POST['txt_on_pdv7'];
        $on_pdv8 = $_POST['txt_on_pdv8'];
        $on_pdv9 = $_POST['txt_on_pdv9'];
        $on_pdv10 = $_POST['txt_on_pdv10'];
        $on_pdv11 = $_POST['txt_on_pdv11'];
        $on_pdv12 = $_POST['txt_on_pdv12'];
        $on_pdv13 = $_POST['txt_on_pdv13'];
        $on_pdv14 = $_POST['txt_on_pdv14'];
        $on_pdv15 = $_POST['txt_on_pdv15'];
        $on_pdv16 = $_POST['txt_on_pdv16'];
        $on_pdv17 = $_POST['txt_on_pdv17'];
        $on_pdv18 = $_POST['txt_on_pdv18'];
        $on_pdv19 = $_POST['txt_on_pdv19'];
        $on_pdv20 = $_POST['txt_on_pdv20'];

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
        $od_v11 = $_POST['txt_od_v11'];
        $od_v12 = $_POST['txt_od_v12'];
        $od_v13 = $_POST['txt_od_v13'];
        $od_v14 = $_POST['txt_od_v14'];
        $od_v15 = $_POST['txt_od_v15'];
        $od_v16 = $_POST['txt_od_v16'];
        $od_v17 = $_POST['txt_od_v17'];
        $od_v18 = $_POST['txt_od_v18'];
        $od_v19 = $_POST['txt_od_v19'];
        $od_v20 = $_POST['txt_od_v20'];

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
        $if_v11 = $_POST['txt_if_v11'];
        $if_v12 = $_POST['txt_if_v12'];
        $if_v13 = $_POST['txt_if_v13'];
        $if_v14 = $_POST['txt_if_v14'];
        $if_v15 = $_POST['txt_if_v15'];
        $if_v16 = $_POST['txt_if_v16'];
        $if_v17 = $_POST['txt_if_v17'];
        $if_v18 = $_POST['txt_if_v18'];
        $if_v19 = $_POST['txt_if_v19'];
        $if_v20 = $_POST['txt_if_v20'];

        $mer_v1 = $_POST['txt_mer_v1'];
        $mer_v2 = $_POST['txt_mer_v2'];
        $mer_v3 = $_POST['txt_mer_v3'];
        $mer_v4 = $_POST['txt_mer_v4'];
        $mer_v5 = $_POST['txt_mer_v5'];
        $mer_v6 = $_POST['txt_mer_v6'];
        $mer_v7 = $_POST['txt_mer_v7'];
        $mer_v8 = $_POST['txt_mer_v8'];
        $mer_v9 = $_POST['txt_mer_v9'];
        $mer_v10 = $_POST['txt_mer_v10'];
        $mer_v11 = $_POST['txt_mer_v11'];
        $mer_v12 = $_POST['txt_mer_v12'];
        $mer_v13 = $_POST['txt_mer_v13'];
        $mer_v14 = $_POST['txt_mer_v14'];
        $mer_v15 = $_POST['txt_mer_v15'];
        $mer_v16 = $_POST['txt_mer_v16'];
        $mer_v17 = $_POST['txt_mer_v17'];
        $mer_v18 = $_POST['txt_mer_v18'];
        $mer_v19 = $_POST['txt_mer_v19'];
        $mer_v20 = $_POST['txt_mer_v20'];

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
        $cut_v11 = $_POST['txt_cut_v11'];
        $cut_v12 = $_POST['txt_cut_v12'];
        $cut_v13 = $_POST['txt_cut_v13'];
        $cut_v14 = $_POST['txt_cut_v14'];
        $cut_v15 = $_POST['txt_cut_v15'];
        $cut_v16 = $_POST['txt_cut_v16'];
        $cut_v17 = $_POST['txt_cut_v17'];
        $cut_v18 = $_POST['txt_cut_v18'];
        $cut_v19 = $_POST['txt_cut_v19'];
        $cut_v20 = $_POST['txt_cut_v20'];

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
        $cuttrue_v11 = $_POST['txt_cuttrue_v11'];
        $cuttrue_v12 = $_POST['txt_cuttrue_v12'];
        $cuttrue_v13 = $_POST['txt_cuttrue_v13'];
        $cuttrue_v14 = $_POST['txt_cuttrue_v14'];
        $cuttrue_v15 = $_POST['txt_cuttrue_v15'];
        $cuttrue_v16 = $_POST['txt_cuttrue_v16'];
        $cuttrue_v17 = $_POST['txt_cuttrue_v17'];
        $cuttrue_v18 = $_POST['txt_cuttrue_v18'];
        $cuttrue_v19 = $_POST['txt_cuttrue_v19'];
        $cuttrue_v20 = $_POST['txt_cuttrue_v20'];

        $details = $_POST['txt_details'];
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

       
        $pin = $_POST['txt_pin'];
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
        
        if (!empty($_POST['ddl_new_ptc'])) {
            $new_ptc = $_POST['ddl_new_ptc'];
        } elseif (!empty($_POST['txt_new_ptc'])) {
            $new_ptc = $_POST['txt_new_ptc'];
        } else {
            // กรณีที่ทั้ง 'ddl_new_ptc' และ 'txt_new_ptc' ไม่ได้รับค่า
            // ให้ทำอะไรตามความเหมาะสม เช่น กำหนดค่าเริ่มต้นหรือแจ้งเตือน
        }
        
       
        $detv1 = intval($_POST['txt_detv1']);
        $detv2 = intval($_POST['txt_detv2']);
        $detv3 = intval($_POST['txt_detv3']);
        $detv4 = intval($_POST['txt_detv4']);
        $detv5 = intval($_POST['txt_detv5']);
        $detv6 = intval($_POST['txt_detv6']);
        $detv7 = intval($_POST['txt_detv7']);
        $detv8 = intval($_POST['txt_detv8']);
        $detv9 = intval($_POST['txt_detv9']);
        $detv10 = intval($_POST['txt_detv10']);

        


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
        $od_v9 = floatval($od_v9);
        $od_v10 = floatval($od_v10);
        $od_v11 = floatval($od_v11);
        $od_v12 = floatval($od_v12);
        $od_v13 = floatval($od_v13);
        $od_v14 = floatval($od_v14);
        $od_v15 = floatval($od_v15);
        $od_v16 = floatval($od_v16);
        $od_v17 = floatval($od_v17);
        $od_v18 = floatval($od_v18);
        $od_v19 = floatval($od_v19);
        $od_v20 = floatval($od_v20);
        

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
        $if_v11 = floatval($if_v11);
        $if_v12 = floatval($if_v12);
        $if_v13 = floatval($if_v13);
        $if_v14 = floatval($if_v14);
        $if_v15 = floatval($if_v15);
        $if_v16 = floatval($if_v16);
        $if_v17 = floatval($if_v17);
        $if_v18 = floatval($if_v18);
        $if_v19 = floatval($if_v19);
        $if_v20 = floatval($if_v20);


        $mer_v1 = floatval($mer_v1);
        $mer_v2 = floatval($mer_v2);
        $mer_v3 = floatval($mer_v3);
        $mer_v4 = floatval($mer_v4);
        $mer_v5 = floatval($mer_v5);
        $mer_v6 = floatval($mer_v6);
        $mer_v7 = floatval($mer_v7);
        $mer_v8 = floatval($mer_v8);
        $mer_v9 = floatval($mer_v9);
        $mer_v10 = floatval($mer_v10);
        $mer_v11 = floatval($mer_v11);
        $mer_v12 = floatval($mer_v12);
        $mer_v13 = floatval($mer_v13);
        $mer_v14 = floatval($mer_v14);
        $mer_v15 = floatval($mer_v15);
        $mer_v16 = floatval($mer_v16);
        $mer_v17 = floatval($mer_v17);
        $mer_v18 = floatval($mer_v18);
        $mer_v19 = floatval($mer_v19);
        $mer_v20 = floatval($mer_v20);


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
        $cut_v11 = floatval($cut_v11);
        $cut_v12 = floatval($cut_v12);
        $cut_v13 = floatval($cut_v13);
        $cut_v14 = floatval($cut_v14);
        $cut_v15 = floatval($cut_v15);
        $cut_v16 = floatval($cut_v16);
        $cut_v17 = floatval($cut_v17);
        $cut_v18 = floatval($cut_v18);
        $cut_v19 = floatval($cut_v19);
        $cut_v20 = floatval($cut_v20);;

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
        $cuttrue_v11 = floatval($cuttrue_v11);
        $cuttrue_v12 = floatval($cuttrue_v12);
        $cuttrue_v13 = floatval($cuttrue_v13);
        $cuttrue_v14 = floatval($cuttrue_v14);
        $cuttrue_v15 = floatval($cuttrue_v15);
        $cuttrue_v16 = floatval($cuttrue_v16);
        $cuttrue_v17 = floatval($cuttrue_v17);
        $cuttrue_v18 = floatval($cuttrue_v18);
        $cuttrue_v19 = floatval($cuttrue_v19);
        $cuttrue_v20 = floatval($cuttrue_v20);
        
        $result_v1 = $od_v1 + $od_v2 + $od_v3 + $od_v4 + $od_v5 + $od_v6 + $od_v7 + $od_v8 + $od_v9 + 
                     $od_v10 + $od_v11 + $od_v12 + $od_v13 + $od_v14 + $od_v15 + $od_v16 + $od_v17 + $od_v18 + $od_v19 + $od_v20;
        $result_v2 = $if_v1 + $if_v2 + $if_v3 + $if_v4 + $if_v5 + $if_v6 + $if_v7 + $if_v8 + $if_v9 + 
                     $if_v10 + $if_v11 + $if_v12 + $if_v13 + $if_v14 + $if_v15 + $if_v16 + $if_v17 + $if_v18 + $if_v19 + $if_v20;
        $result_v3 = $mer_v1 + $mer_v2 + $mer_v3 + $mer_v4 + $mer_v5 + $mer_v6 + $mer_v7 + $mer_v8 + $mer_v9 + $mer_v10 + 
                     $mer_v11 + $mer_v12 + $mer_v13 + $mer_v14 + $mer_v15 + $mer_v16 + $mer_v17 + $mer_v18 + $mer_v19 + $mer_v20;
        $result_v4 = $cut_v1 + $cut_v2 + $cut_v3 + $cut_v4 + $cut_v5 + $cut_v6 + $cut_v7 + $cut_v8 + $cut_v9 + $cut_v10 + 
                     $cut_v11 + $cut_v12 + $cut_v13 + $cut_v14 + $cut_v15 + $cut_v16 + $cut_v17 + $cut_v18 + $cut_v19 + $cut_v20;
        $result_v5 = $cuttrue_v1 + $cuttrue_v2 + $cuttrue_v3 + $cuttrue_v4 + $cuttrue_v5 + $cuttrue_v6 + $cuttrue_v7 + $cuttrue_v8 + $cuttrue_v9 + $cuttrue_v10 + 
                     $cuttrue_v11 + $cuttrue_v12 + $cuttrue_v13 + $cuttrue_v14 + $cuttrue_v15 + $cuttrue_v16 + $cuttrue_v17 + $cuttrue_v18 + $cuttrue_v19 + $cuttrue_v20;
       
        $result_v6 =  $result_v1 = $od_v1 + $od_v2 + $od_v3 + $od_v4 + $od_v5 + $od_v6 + $od_v7 + $od_v8 + $od_v9 + 
        $od_v10 + $od_v11 + $od_v12 + $od_v13 + $od_v14 + $od_v15 + $od_v16 + $od_v17 + $od_v18 + $od_v19 + $od_v20 + 
        $if_v1 + $if_v2 + $if_v3 + $if_v4 + $if_v5 + $if_v6 + $if_v7 + $if_v8 + $if_v9 + 
        $if_v10 + $if_v11 + $if_v12 + $if_v13 + $if_v14 + $if_v15 + $if_v16 + $if_v17 + $if_v18 + $if_v19 + $if_v20 + 
        $mer_v1 + $mer_v2 + $mer_v3 + $mer_v4 + $mer_v5 + $mer_v6 + $mer_v7 + $mer_v8 + $mer_v9 + $mer_v10 + 
        $mer_v11 + $mer_v12 + $mer_v13 + $mer_v14 + $mer_v15 + $mer_v16 + $mer_v17 + $mer_v18 + $mer_v19 + $mer_v20 + 
        $cut_v1 + $cut_v2 + $cut_v3 + $cut_v4 + $cut_v5 + $cut_v6 + $cut_v7 + $cut_v8 + $cut_v9 + $cut_v10 + 
        $cut_v11 + $cut_v12 + $cut_v13 + $cut_v14 + $cut_v15 + $cut_v16 + $cut_v17 + $cut_v18 + $cut_v19 + $cut_v20 + 
        $cuttrue_v1 + $cuttrue_v2 + $cuttrue_v3 + $cuttrue_v4 + $cuttrue_v5 + $cuttrue_v6 + $cuttrue_v7 + $cuttrue_v8 + $cuttrue_v9 + $cuttrue_v10 + 
        $cuttrue_v11 + $cuttrue_v12 + $cuttrue_v13 + $cuttrue_v14 + $cuttrue_v15 + $cuttrue_v16 + $cuttrue_v17 + $cuttrue_v18 + $cuttrue_v19 + $cuttrue_v20;

        function autoID($id) {
            $len = strlen($id);
            switch ($len) {
                case 1: $id = "000" . $id;
                    break;
                case 2: $id = "00" . $id;
                    break;
                case 3: $id = "0" . $id;
                    break;
            }
            $year = substr((date("Y") + 543), 2);
            $month = date("m");
            return $year . $month . $id;
        }        


            $image_file = $_FILES['txt_file']['name'];
            $type = $_FILES['txt_file']['type'];
            $size = $_FILES['txt_file']['size'];
            $temp = $_FILES['txt_file']['tmp_name'];
            $path = "upload/" . $image_file; // set upload folder path

            $image_file2 = $_FILES['txt_file2']['name'];
            $type2 = $_FILES['txt_file2']['type'];
            $size2 = $_FILES['txt_file2']['size'];
            $temp2 = $_FILES['txt_file2']['tmp_name'];
            $path2 = "upload/" . $image_file2; // set upload folder path

            if (empty($name_op)) {
                $errorMsg = "กรุณาใส่ชื่องาน";
            } else if (empty($image_file) || empty($image_file2)) {
                $errorMsg = "กรุณาใส่รูปภาพ";
            } else if ($type == "image/jpg" || $type == 'image/jpeg' || $type == "image/png" || $type == "image/gif") {
                if (!file_exists($path) && !file_exists($path2)) { // check file not exist in your upload folder path
                    if ($size < 5000000 && $size2 < 5000000) { // check file size 5MB
                        move_uploaded_file($temp, 'upload/'.$image_file); // move upload file temperory directory to your upload folder
                        move_uploaded_file($temp2, 'upload/'.$image_file2); // move upload file temperory directory to your upload folder
                    } else {
                        $errorMsg = "Your file too large please upload 5MB size"; // error message file size larger than 5mb
                    }
                } else {
                    $errorMsg = "File already exists... Check upload filder"; // error message file not exists your upload folder path
                }
            } else {
                $errorMsg = "Upload JPG, JPEG, PNG & GIF file formate...";
            }

            if (!isset($errorMsg)) {
                $insert_stmt = $db->prepare('INSERT INTO db_op (name_op, fn, new_ptc, ks, timeing, 
                    size_v1, size_v2, size_v3, size_v4, size_v5, size_v6, size_v7, size_v8, size_v9, size_v10, 
                    size_v11, size_v12, size_v13, size_v14, size_v15, size_v16, size_v17, size_v18, size_v19, size_v20, 
                    on_pdv1, on_pdv2, on_pdv3, on_pdv4, on_pdv5, on_pdv6, on_pdv7, on_pdv8, on_pdv9, on_pdv10, 
                    on_pdv11, on_pdv12, on_pdv13, on_pdv14, on_pdv15, on_pdv16, on_pdv17, on_pdv18, on_pdv19, on_pdv20, 
                    od_v1, od_v2, od_v3, od_v4, od_v5, od_v6, od_v7, od_v8, od_v9, od_v10, 
                    od_v11, od_v12, od_v13, od_v14, od_v15, od_v16, od_v17, od_v18, od_v19, od_v20, 
                    if_v1, if_v2, if_v3, if_v4, if_v5, if_v6, if_v7, if_v8, if_v9, if_v10, 
                    if_v11, if_v12, if_v13, if_v14, if_v15, if_v16, if_v17, if_v18, if_v19, if_v20, 
                    mer_v1, mer_v2, mer_v3, mer_v4, mer_v5, mer_v6, mer_v7, mer_v8, mer_v9, mer_v10, 
                    mer_v11, mer_v12, mer_v13, mer_v14, mer_v15, mer_v16, mer_v17, mer_v18, mer_v19, mer_v20, 
                    cut_v1, cut_v2, cut_v3, cut_v4, cut_v5, cut_v6, cut_v7, cut_v8, cut_v9, cut_v10, 
                    cut_v11, cut_v12, cut_v13, cut_v14, cut_v15, cut_v16, cut_v17, cut_v18, cut_v19, cut_v20, 
                    cuttrue_v1, cuttrue_v2, cuttrue_v3, cuttrue_v4, cuttrue_v5, cuttrue_v6, cuttrue_v7, cuttrue_v8, cuttrue_v9, cuttrue_v10, 
                    cuttrue_v11, cuttrue_v12, cuttrue_v13, cuttrue_v14, cuttrue_v15, cuttrue_v16, cuttrue_v17, cuttrue_v18, cuttrue_v19, cuttrue_v20, 
                    result_v1, result_v2, result_v3, result_v4, result_v5, result_v6, 
                    details, details_v1, details_v2, details_v3, details_v4, details_v5, details_v6, details_v7, details_v8, details_v9, details_v10,  
                    nmdetails1, nmdetails2, nmdetails3, nmdetails4, nmdetails5, nmdetails6, nmdetails7, nmdetails8, nmdetails9, nmdetails10, 
                    detv1, detv2, detv3, detv4, detv5, detv6, detv7, detv8, detv9, detv10,  
                    pin, pin1, pin2, pin3, pin4, pin5, pack1, pack2, pack3, pack4, pack5, 
                    nmpack1, nmpack2, nmpack3, nmpack4, nmpack5, 
                    note, image, image2, 
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
                    VALUES (:np, :fn, :nt, :ks, :tm, 
                    :si1, :si2, :si3, :si4, :si5, :si6, :si7, :si8, :si9, :si10, 
                    :si11, :si12, :si13, :si14, :si15, :si16, :si17, :si18, :si19, :si20, 
                    :onp1, :onp2, :onp3, :onp4, :onp5, :onp6, :onp7, :onp8, :onp9, :onp10, 
                    :onp11, :onp12, :onp13, :onp14, :onp15, :onp16, :onp17, :onp18, :onp19, :si20, 
                    :if_1, :if_2, :if_3, :if_4, :if_5, :if_6, :if_7, :if_8, :if_9, :if_10, 
                    :if_11, :if_12, :if_13, :if_14, :if_15, :if_16, :if_17, :if_18, :if_19, :if_20, 
                    :od1, :od2, :od3, :od4, :od5, :od6, :od7, :od8, :od9, :od10, 
                    :od11, :od12, :od13, :od14, :od15, :od16, :od17, :od18, :od19, :od20, 
                    :mer1, :mer2, :mer3, :mer4, :mer5, :mer6, :mer7, :mer8, :mer9, :mer10, 
                    :mer11, :mer12, :mer13, :mer14, :mer15, :mer16, :mer17, :mer18, :mer19, :mer20, 
                    :cut1, :cut2, :cut3, :cut4, :cut5, :cut6, :cut7, :cut8, :cut9, :cut10, 
                    :cut11, :cut12, :cut13, :cut14, :cut15, :cut16, :cut17, :cut18, :cut19, :cut20, 
                    :ct1, :ct2, :ct3, :ct4, :ct5, :ct6, :ct7, :ct8, :ct9, :ct10, 
                    :ct11, :ct12, :ct13, :ct14, :ct15, :ct16, :ct17, :ct18, :ct19, :ct20, 
                    :result1, :result2, :result3, :result4, :result5, :result6, 
                    :dt, :dt1, :dt2, :dt3, :dt4, :dt5, :dt6, :dt7, :dt8, :dt9, :dt10, 
                    :nd1, :nd2, :nd3, :nd4, :nd5, :nd6, :nd7, :nd8, :nd9, :nd10, 
                    :dv1, :dv2, :dv3, :dv4, :dv5, :dv6, :dv7, :dv8, :dv9, :dv10, 
                    :p, :p1, :p2, :p3, :p4, :p5, :pa1, :pa2, :pa3, :pa4, :pa5, 
                    :nmp1, :nmp2, :nmp3, :nmp4, :nmp5, 
                    :ne, :image, :image2, 
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

                    $sql_get_current_fn = "SELECT fn FROM db_op ORDER BY fn DESC LIMIT 1";
                    $statement = $db->prepare($sql_get_current_fn);
                    $statement->execute();
                    $row = $statement->fetch(PDO::FETCH_ASSOC);

                    if ($row) {
                        $current_fn = $row["fn"];
                        $new_fn = (int)$current_fn + 1;
                    } else {
                        // หากไม่มีค่าในตารางเลย ให้เริ่มที่ 1
                        $new_fn = "00001";
                    }

                    // เพิ่มค่าเลข auto ลงในคอลัมน์ "fn" ของตาราง SQL
           
                  

                $insert_stmt->bindParam(':np', $name_op);
                $insert_stmt->bindParam(':image', $image_file);
                $insert_stmt->bindParam(':image2', $image_file2);
                $insert_stmt->bindParam(':ks', $ks);
                $insert_stmt->bindParam(':fn', $new_fn);   
                $insert_stmt->bindParam(':result1', $result_v1);  
                $insert_stmt->bindParam(':result2', $result_v2);  
                $insert_stmt->bindParam(':result3', $result_v3);  
                $insert_stmt->bindParam(':result4', $result_v4);  
                $insert_stmt->bindParam(':result5', $result_v5);
                $insert_stmt->bindParam(':result6', $result_v6);          
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
                $insert_stmt->bindParam(':si11', $size_v11);
                $insert_stmt->bindParam(':si12', $size_v12);
                $insert_stmt->bindParam(':si13', $size_v13);
                $insert_stmt->bindParam(':si14', $size_v14);
                $insert_stmt->bindParam(':si15', $size_v15);
                $insert_stmt->bindParam(':si16', $size_v16);
                $insert_stmt->bindParam(':si17', $size_v17);
                $insert_stmt->bindParam(':si18', $size_v18);
                $insert_stmt->bindParam(':si19', $size_v19);
                $insert_stmt->bindParam(':si20', $size_v20);

                $insert_stmt->bindParam(':onp1', $on_pdv1);
                $insert_stmt->bindParam(':onp2', $on_pdv2);
                $insert_stmt->bindParam(':onp3', $on_pdv3);
                $insert_stmt->bindParam(':onp4', $on_pdv4);
                $insert_stmt->bindParam(':onp5', $on_pdv5);
                $insert_stmt->bindParam(':onp6', $on_pdv6);
                $insert_stmt->bindParam(':onp7', $on_pdv7);
                $insert_stmt->bindParam(':onp8', $on_pdv8);
                $insert_stmt->bindParam(':onp9', $on_pdv9);
                $insert_stmt->bindParam(':onp10', $on_pdv10);
                $insert_stmt->bindParam(':onp11', $on_pdv11);
                $insert_stmt->bindParam(':onp12', $on_pdv12);
                $insert_stmt->bindParam(':onp13', $on_pdv13);
                $insert_stmt->bindParam(':onp14', $on_pdv14);
                $insert_stmt->bindParam(':onp15', $on_pdv15);
                $insert_stmt->bindParam(':onp16', $on_pdv16);
                $insert_stmt->bindParam(':onp17', $on_pdv17);
                $insert_stmt->bindParam(':onp18', $on_pdv18);
                $insert_stmt->bindParam(':onp19', $on_pdv19);
                $insert_stmt->bindParam(':onp20', $on_pdv20);

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
                $insert_stmt->bindParam(':od11', $od_v11);
                $insert_stmt->bindParam(':od12', $od_v12);
                $insert_stmt->bindParam(':od13', $od_v13);
                $insert_stmt->bindParam(':od14', $od_v14);
                $insert_stmt->bindParam(':od15', $od_v15);
                $insert_stmt->bindParam(':od16', $od_v16);
                $insert_stmt->bindParam(':od17', $od_v17);
                $insert_stmt->bindParam(':od18', $od_v18);
                $insert_stmt->bindParam(':od19', $od_v19);
                $insert_stmt->bindParam(':od20', $od_v20);


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
                $insert_stmt->bindParam(':if_11', $if_v11);
                $insert_stmt->bindParam(':if_12', $if_v12);
                $insert_stmt->bindParam(':if_13', $if_v13);
                $insert_stmt->bindParam(':if_14', $if_v14);
                $insert_stmt->bindParam(':if_15', $if_v15);
                $insert_stmt->bindParam(':if_16', $if_v16);
                $insert_stmt->bindParam(':if_17', $if_v17);
                $insert_stmt->bindParam(':if_18', $if_v18);
                $insert_stmt->bindParam(':if_19', $if_v19);
                $insert_stmt->bindParam(':if_20', $if_v20);


                $insert_stmt->bindParam(':mer1', $mer_v1);
                $insert_stmt->bindParam(':mer2', $mer_v2);
                $insert_stmt->bindParam(':mer3', $mer_v3);
                $insert_stmt->bindParam(':mer4', $mer_v4);
                $insert_stmt->bindParam(':mer5', $mer_v5);
                $insert_stmt->bindParam(':mer6', $mer_v6);
                $insert_stmt->bindParam(':mer7', $mer_v7);
                $insert_stmt->bindParam(':mer8', $mer_v8);
                $insert_stmt->bindParam(':mer9', $mer_v9);
                $insert_stmt->bindParam(':mer10', $mer_v10);
                $insert_stmt->bindParam(':mer11', $mer_v11);
                $insert_stmt->bindParam(':mer12', $mer_v12);
                $insert_stmt->bindParam(':mer13', $mer_v13);
                $insert_stmt->bindParam(':mer14', $mer_v14);
                $insert_stmt->bindParam(':mer15', $mer_v15);
                $insert_stmt->bindParam(':mer16', $mer_v16);
                $insert_stmt->bindParam(':mer17', $mer_v17);
                $insert_stmt->bindParam(':mer18', $mer_v18);
                $insert_stmt->bindParam(':mer19', $mer_v19);
                $insert_stmt->bindParam(':mer20', $mer_v20);


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
                $insert_stmt->bindParam(':cut11', $cut_v11);
                $insert_stmt->bindParam(':cut12', $cut_v12);
                $insert_stmt->bindParam(':cut13', $cut_v13);
                $insert_stmt->bindParam(':cut14', $cut_v14);
                $insert_stmt->bindParam(':cut15', $cut_v15);
                $insert_stmt->bindParam(':cut16', $cut_v16);
                $insert_stmt->bindParam(':cut17', $cut_v17);
                $insert_stmt->bindParam(':cut18', $cut_v18);
                $insert_stmt->bindParam(':cut19', $cut_v19);
                $insert_stmt->bindParam(':cut20', $cut_v20);


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
                $insert_stmt->bindParam(':ct11', $cuttrue_v11);
                $insert_stmt->bindParam(':ct12', $cuttrue_v12);
                $insert_stmt->bindParam(':ct13', $cuttrue_v13);
                $insert_stmt->bindParam(':ct14', $cuttrue_v14);
                $insert_stmt->bindParam(':ct15', $cuttrue_v15);
                $insert_stmt->bindParam(':ct16', $cuttrue_v16);
                $insert_stmt->bindParam(':ct17', $cuttrue_v17);
                $insert_stmt->bindParam(':ct18', $cuttrue_v18);
                $insert_stmt->bindParam(':ct19', $cuttrue_v19);
                $insert_stmt->bindParam(':ct20', $cuttrue_v20);


                $insert_stmt->bindParam(':dt', $details);
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

                $insert_stmt->bindParam(':p', $pin);
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
                <div class="col-sm-3 text-center">
                    <input type="text" name="txt_name_op" class="form-control" placeholder="Enter name">
                </div>

                <label for="name" class="col-sm-2 control-label">กำหนดส่ง</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="txt_timeing" placeholder=" ">
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

                    <label class="col-sm-2 control-label">ขส</label>
                <div class="col-sm-3">
                    <input  type="text" class="form-control" name="txt_ks" id="txt_ks" placeholder="กรอก ขส">
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
                        <td class="text-center" style="font-size: larger; color: black;">ORDER</td>
                        <td class="text-center" style="font-size: larger; color: black;">เผื่อ</td>
                        <td class="text-center" style="font-size: larger; color: black;">เมอร์เก็บ</td>
                        <td class="text-center" style="font-size: larger; color: black;">รวมส่งผลิต</td>
                        <td class="text-center" style="font-size: larger; color: black;">ตัดได้จริง</td>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                    <td class="text-center">
                        <select class="form-select form-control select-margin center-input" name="txt_size_v1" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v2" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v3" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v4" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v5" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v6" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v7" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v8" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v9" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v10" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v11" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v12" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v13" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v14" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v15" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v16" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v17" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v18" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v19" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        <select class="form-select form-control select-margin center-input" name="txt_size_v20" aria-label="Default select example">
                            <option value="" selected>เลือกไซส์</option>
                            <option value="ไซส์ SS">SS</option>
                            <option value="ไซส์ S">S</option>
                            <option value="ไซส์ L">L</option>
                            <option value="ไซส์ XL">XL</option>
                            <option value="ไซส์ 2XL">2XL</option>
                            <option value="ไซส์ 3XL">3XL</option>
                        </select>
                        
                    </td>

                        
                        <td class="text-center">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv1" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv2" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv3" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv4" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv5" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv6" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv7" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv8" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv9" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv10" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv11" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv12" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv13" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv14" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv15" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv16" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv17" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv18" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv19" placeholder="กรอกรหัสสินค้า">
                            <input type="text" class="form-control small-input center-input" name="txt_on_pdv20" placeholder="กรอกรหัสสินค้า">
                        </td>

                        <td class="text-center">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v1" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v2" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v3" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v4" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v5" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v6" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v7" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v8" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v9" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v10" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v11" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v12" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v13" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v14" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v15" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v16" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v17" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v18" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v19" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_od_v20" placeholder="">
                        </td>

                        <td class="text-center">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v1" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v2" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v3" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v4" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v5" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v6" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v7" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v8" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v9" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v10" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v11" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v12" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v13" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v14" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v15" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v16" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v17" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v18" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v19" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_if_v20" placeholder="">
                        </td>

                        <td class="text-center">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v1" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v2" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v3" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v4" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v5" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v6" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v7" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v8" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v9" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v10" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v11" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v12" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v13" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v14" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v15" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v16" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v17" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v18" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v19" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_mer_v20" placeholder="">
                        </td>

                        <td class="text-center">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v1" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v2" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v3" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v4" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v5" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v6" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v7" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v8" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v9" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v10" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v11" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v12" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v13" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v14" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v15" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v16" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v17" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v18" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v19" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cut_v20" placeholder="">
                        </td>
                        <td class="text-center">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v1" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v2" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v3" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v4" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v5" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v6" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v7" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v8" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v9" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v10" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v11" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v12" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v13" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v14" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v15" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v16" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v17" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v18" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v19" placeholder="">
                            <input type="text" class="form-control special-input center-input" name="txt_cuttrue_v20" placeholder="">
                            
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
                        <textarea class="form-control equal-size" name="txt_note" rows="7"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="form-label d-block text-center">Sale</label>
                        <input type="text" class="form-control" name="txt_nes" placeholder="ชื่อเซล์">
                        <input type="date" class="form-control" name="txt_timess" placeholder="">
                    </td>
                    <td>
                        <label class="form-label d-block text-center">Mer</label>
                        <input type="text" class="form-control" name="txt_nem" placeholder="ชื่อเมอร์">
                        <input type="date" class="form-control" name="txt_timem" placeholder="">
                    </td>
                    <td>
                        <label class="form-label d-block text-center">Manager</label>
                        <input type="text" class="form-control" name="txt_nemg" placeholder="ชื่อเมเนเจอร์">
                        <input type="date" class="form-control" name="txt_timemg" placeholder="">
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
                        <th><input type="text" class="form-control " name="txt_details_v1" placeholder="กรอกรายละเอียดอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_nmdetails1" placeholder="รหัสอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_detv1" placeholder="จำนวน"></th>
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v2" placeholder="กรอกรายละเอียดอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_nmdetails2" placeholder="รหัสอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_detv2" placeholder="จำนวน"></th>
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v3" placeholder="กรอกรายละเอียดอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_nmdetails3" placeholder="รหัสอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_detv3" placeholder="จำนวน"></th>
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v4" placeholder="กรอกรายละเอียดอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_nmdetails4" placeholder="รหัสอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_detv4" placeholder="จำนวน"></th>
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v5" placeholder="กรอกรายละเอียดอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_nmdetails5" placeholder="รหัสอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_detv5" placeholder="จำนวน"></th>
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v6" placeholder="กรอกรายละเอียดอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_nmdetails6" placeholder="รหัสอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_detv6" placeholder="จำนวน"></th>
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v7" placeholder="กรอกรายละเอียดอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_nmdetails7" placeholder="รหัสอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_detv7" placeholder="จำนวน"></th>
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v8" placeholder="กรอกรายละเอียดอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_nmdetails8" placeholder="รหัสอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_detv8" placeholder="จำนวน"></th>
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v9" placeholder="กรอกรายละเอียดอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_nmdetails9" placeholder="รหัสอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_detv9" placeholder="จำนวน"></th>
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control " name="txt_details_v10" placeholder="กรอกรายละเอียดอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_nmdetails10" placeholder="รหัสอุปกรณ์"></th>
                        <th><input type="text" class="form-control " name="txt_detv10" placeholder="จำนวน"></th>
                    </tr>
                </tbody>



            <table class="table">
                <thead>
                    <tr>
                        <td><label for="name" class="col-sm-3 control-label">อัปโหลดรูปงานปัก</label>
                        <div class="col-sm-3"><input type="file" name="txt_file2" class="form-control"></div></td>
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
                            <td><input type="text" class="form-control" name="txt_pack1" placeholder=" "></td>
                            <th class="text-center" style="width: 100px;"><input type="text" class="form-control" name="txt_nmpack1" placeholder="จำนวน"></th>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pack2" placeholder=" "></td>
                            <th class="text-center" style="width: 100px;"><input type="text" class="form-control" name="txt_nmpack2" placeholder="จำนวน"></th>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control " name="txt_pack3" placeholder=" "></td>
                            <th class="text-center" style="width: 100px;"><input type="text" class="form-control" name="txt_nmpack3" placeholder="จำนวน"></th>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pack4" placeholder=" "></td>
                            <th class="text-center" style="width: 100px;"><input type="text" class="form-control" name="txt_nmpack4" placeholder="จำนวน"></th>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pack5" placeholder=" "></td>
                            <th class="text-center" style="width: 100px;"><input type="text" class="form-control" name="txt_nmpack5" placeholder="จำนวน"></th>
                        </tr>
                    </tbody>
                </table>

                <table class="table" style="flex: 1;">
                    <thead>
                        <tr>
                            <td>
                                <select class="form-select form-control select-margin center-input" name="txt_pin" aria-label="Default select example">
                                    <option value="" selected>เลือกงาน</option>
                                    <option value="งานปัก">งานปัก</option>
                                    <option value="งานพิมพ์">งานพิมพ์</option>
                                    <option value="งานพิมพ์ซับ">งานพิมพ์ซับ</option>
                                </select>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin1" placeholder=" "></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin2" placeholder=" "></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin3" placeholder=" "></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin4" placeholder=" "></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="txt_pin5" placeholder=" "></td>
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
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details1"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss1"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s1"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m1"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l1"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl1"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl21"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl31"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl41"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl51"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl61"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl71"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details2"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss2"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s2"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m2"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l2"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl2"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl22"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl32"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl42"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl52"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl62"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl72"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details3"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss3"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s3"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m3"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l3"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl3"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl23"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl33"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl43"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl53"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl63"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl73"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details4"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss4"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s4"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m4"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l4"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl4"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl24"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl34"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl44"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl54"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl64"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl74"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details5"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss5"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s5"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m5"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l5"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl5"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl25"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl35"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl45"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl55"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl65"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl75"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details6"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss6"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s6"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m6"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l6"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl6"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl26"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl36"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl46"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl56"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl66"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl76"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details7"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss7"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s7"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m7"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l7"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl7"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl27"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl37"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl47"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl57"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl67"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl77"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details8"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss8"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s8"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m8"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l8"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl8"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl28"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl38"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl48"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl58"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl68"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl78"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details9"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss9"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s9"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m9"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l9"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl9"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl29"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl39"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl49"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl59"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl69"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl79"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details10"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss10"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s10"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m10"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l10"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl10"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl210"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl310"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl410"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl510"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl610"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl710"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details11"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss11"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s11"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m11"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l11"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl11"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl211"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl311"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl411"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl511"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl611"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl711"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details12"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss12"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s12"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m12"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l12"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl12"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl212"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl312"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl412"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl512"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl612"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl712"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details13"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss13"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s13"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m13"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l13"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl13"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl213"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl313"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl413"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl513"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl613"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl713"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details14"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss14"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s14"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m14"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l14"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl14"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl214"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl314"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl414"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl514"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl614"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl714"></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control"  style="width: 100%;" name="txt_size_details15"></td>
                <td style=" text-align: center;"><input type="text" class="form-control"  style="width: 100%;" name="txt_ss15"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_s15"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_m15"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_l15"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl15"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl215"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl315"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl415"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl515"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl615"></td>
                <td><input type="text" class="form-control"  style="width: 100%;" name="txt_xl715"></td>
            </tr>
        </table>
    <div style="margin-bottom: 20px;"></div>

    <table class="table">
        <tr>
            <td><label class="form-label d-block text-center">รายละเอียดการเย็บ</label></td>
        </tr>
        <tr>  
           <th><textarea class="form-control equal-size wide-input" name="txt_details" id="txt_details" rows="8"></textarea></th>
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
    <script src="js/scriptll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

