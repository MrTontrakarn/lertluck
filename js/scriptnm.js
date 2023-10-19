     document.addEventListener("DOMContentLoaded", function () {
        const ddlNewnmod = document.getElementById('ddl_nmod');
        const notEInput = document.getElementById('txt_note');
        const newptcInput = document.getElementById('ddl_new_ptc');
        const detailsvInputs = [];
        const nmdetailsInputs = [];
        const detvInputs = [];
    
        // สร้างอาร์เรย์ของข้อมูลของช่อง input สำหรับขนาด
        for (let i = 1; i <= 29; i++) {
            detailsvInputs.push(document.getElementById(`txt_details_v${i}`));
            nmdetailsInputs.push(document.getElementById(`txt_nmdetails${i}`));
            detvInputs.push(document.getElementById(`txt_detv${i}`));

        }
    // ส่งคำขอ Fetch API เพื่อดึงข้อมูล nmod จากฐานข้อมูล
    fetch('get_on2.php')
        .then(response => response.json())
        .then(data => {
            // เพิ่มตัวเลือกใน dropdown จากข้อมูลที่ดึงมา
            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.nmod;
                option.textContent = item.nmod;
                ddlNewnmod.appendChild(option);
            });
        })
        .catch(error => console.error('เกิดข้อผิดพลาด: ' + error));

    // เมื่อผู้ใช้เลือกตัวเลือกใน dropdown
    ddlNewnmod.addEventListener('change', function () {
        const selectedValue = ddlNewnmod.value;
        if (selectedValue !== "") {
            // ส่งคำขอ Fetch API ไปยังสคริปต์ PHP เพื่อดึงข้อมูล
            fetch('get_on.php?nmod=' + selectedValue)
                .then(response => response.json())
                .then(data => {
                    // แสดงข้อมูลใน input fields หากมีข้อมูลใน JSON
                    if (data) {
                        notEInput.value = data.note;
                        newptcInput.value = data.new_ptc;
                        detailsvInputs.forEach((input, i) => input.value = data[`details_v${i + 1}`]);
                        nmdetailsInputs.forEach((input, i) => input.value = data[`nmdetails${i + 1}`]);
                        detvInputs.forEach((input, i) => input.value = data[`detv${i + 1}`]);
                    }
                })
                .catch(error => console.error('เกิดข้อผิดพลาด: ' + error));
        } else {
            // กรณีไม่มีข้อมูลใน JSON
            notEInput.value = '';
            newptcInput.value = '';
            detailsvInputs.forEach(input => input.value = '');
            nmdetailsInputs.forEach(input => input.value = '');
            detvInputs.forEach(input => input.value = '');
        }
    });
});

   
   
   
   document.addEventListener("DOMContentLoaded", function () {
        const ddlNewPtc = document.getElementById('ddl_new_ptc');
        const detailsInput = document.getElementById('txt_details');
        const sizedetailsInputs = [];
        const ssInputs = [];
        const sInputs = [];
        const mInputs = [];
        const lInputs = [];
        const xlInputs = [];
        const xl2Inputs = [];
        const xl3Inputs = [];
        const xl4Inputs = [];
        const xl5Inputs = [];
        const xl6Inputs = [];
        const xl7Inputs = [];

        // สร้างอาร์เรย์ของข้อมูลของช่อง input สำหรับขนาด
        for (let i = 1; i <= 15; i++) {
            sizedetailsInputs.push(document.getElementById(`txt_size_details${i}`));
            ssInputs.push(document.getElementById(`txt_ss${i}`));
            sInputs.push(document.getElementById(`txt_s${i}`));
            mInputs.push(document.getElementById(`txt_m${i}`));
            lInputs.push(document.getElementById(`txt_l${i}`));
            xlInputs.push(document.getElementById(`txt_xl${i}`));
            xl2Inputs.push(document.getElementById(`txt_xl2${i}`));
            xl3Inputs.push(document.getElementById(`txt_xl3${i}`));
            xl4Inputs.push(document.getElementById(`txt_xl4${i}`));
            xl5Inputs.push(document.getElementById(`txt_xl5${i}`));
            xl6Inputs.push(document.getElementById(`txt_xl6${i}`));
            xl7Inputs.push(document.getElementById(`txt_xl7${i}`));
        }

       
    // ส่งคำขอ Fetch API เพื่อดึงข้อมูล new_ptc จากฐานข้อมูล
    fetch('get_ptc.php')
        .then(response => response.json())
        .then(data => {
            // เพิ่มตัวเลือกใน dropdown จากข้อมูลที่ดึงมา
            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.new_ptc;
                option.textContent = item.new_ptc;
                ddlNewPtc.appendChild(option);
            });
        })
        .catch(error => console.error('เกิดข้อผิดพลาด: ' + error));

    // เมื่อผู้ใช้เลือกตัวเลือกใน dropdown
    ddlNewPtc.addEventListener('change', function () {
        const selectedValue = ddlNewPtc.value;
        if (selectedValue !== "") {
            // ส่งคำขอ Fetch API ไปยังสคริปต์ PHP เพื่อดึงข้อมูล
            fetch('get_dt.php?new_ptc=' + selectedValue)
                .then(response => response.json())
                .then(data => {
                    // แสดงข้อมูลใน input fields หากมีข้อมูลใน JSON
                    if (data) {
                        detailsInput.value = data.details;
                        sizedetailsInputs.forEach((input, i) => input.value = data[`size_details${i + 1}`]);
                        ssInputs.forEach((input, i) => input.value = data[`ss${i + 1}`]);
                        sInputs.forEach((input, i) => input.value = data[`s${i + 1}`]);
                        mInputs.forEach((input, i) => input.value = data[`m${i + 1}`]);
                        lInputs.forEach((input, i) => input.value = data[`l${i + 1}`]);
                        xlInputs.forEach((input, i) => input.value = data[`xl${i + 1}`]);
                        xl2Inputs.forEach((input, i) => input.value = data[`xl2${i + 1}`]);
                        xl3Inputs.forEach((input, i) => input.value = data[`xl3${i + 1}`]);
                        xl4Inputs.forEach((input, i) => input.value = data[`xl4${i + 1}`]);
                        xl5Inputs.forEach((input, i) => input.value = data[`xl5${i + 1}`]);
                        xl6Inputs.forEach((input, i) => input.value = data[`xl6${i + 1}`]);
                        xl7Inputs.forEach((input, i) => input.value = data[`xl7${i + 1}`]);
                    }
                })
                .catch(error => console.error('เกิดข้อผิดพลาด: ' + error));
        } else {
            // กรณีไม่มีข้อมูลใน JSON
            detailsInput.value = '';
            sizedetailsInputs.forEach(input => input.value = '');
            ssInputs.forEach(input => input.value = '');
            sInputs.forEach(input => input.value = '');
            mInputs.forEach(input => input.value = '');
            lInputs.forEach(input => input.value = '');
            xlInputs.forEach(input => input.value = '');
            xl2Inputs.forEach(input => input.value = '');
            xl3Inputs.forEach(input => input.value = '');
            xl4Inputs.forEach(input => input.value = '');
            xl5Inputs.forEach(input => input.value = '');
            xl6Inputs.forEach(input => input.value = '');
            xl7Inputs.forEach(input => input.value = '');
        }
    });
});

   