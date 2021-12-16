<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งาน2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body style="margin-top: 20px;background-color: #E0BBE4;">
    <h1 style="text-align: center;">แบบฟอร์มกรอกข้อมูลส่วนตัว</h1>
    <script type="text/javascript">
        function autoTab(obj) {

            var pattern = new String("_-____-_____-_-__");
            var pattern_ex = new String("-");
            var returnText = new String("");
            var obj_l = obj.value.length;
            var obj_l2 = obj_l - 1;
            for (i = 0; i < pattern.length; i++) {
                if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
                    returnText += obj.value + pattern_ex;
                    obj.value = returnText;
                }
            }
            if (obj_l >= pattern.length) {
                obj.value = obj.value.substr(0, pattern.length);
            }

        }


    </script>
    <script type="text/javascript">
        $("#btnSubmit").click(() => {
        var data = $.parseJSON(`{
            "data1": "${$("#data1").val()}", 
            "fID": "${$("#fID").val()}", 
            "fname": "${$("#fname").val()}", 
            "lname": "${$("#lname").val()}",
            "sex1": "${$("#sex").val()}",
            "sex2": "${$("#sex").val()}",
            "IDP": "${$("#IDP").val()}",
            "IDH": "${$("#IDH").val()}",
            "inlineCheckbox1": "${$("#inlineCheckbox1").val()}",
            "inlineCheckbox2": "${$("#inlineCheckbox2").val()}",
            "inlineCheckbox3": "${$("#inlineCheckbox3").val()}",
            "inlineCheckbox4": "${$("#inlineCheckbox4").val()}",
            "inlineCheckbox5": "${$("#inlineCheckbox5").val()}",
            "input_hid": "${$("#input_hid").val()}",
            "input_gid": "${$("#input_gid").val()}",
            "distr": "${$("#distr").val()}",
            "Distr": "${$("#Distr").val()}",
            "Provin": "${$("#Provin").val()}",
            "sub": "${$("#sub").val()}",
            "IDP": "${$("#IDP").val()}",}`);
        console.log(data);
    });
        function autoTab2(obj) {

            var pattern = new String("___-___-____");
            var pattern_ex = new String("-");
            var returnText = new String("");
            var obj_l = obj.value.length;
            var obj_l2 = obj_l - 1;
            for (i = 0; i < pattern.length; i++) {
                if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
                    returnText += obj.value + pattern_ex;
                    obj.value = returnText;
                }
            }
            if (obj_l >= pattern.length) {
                obj.value = obj.value.substr(0, pattern.length);
            }

        }


    </script>
    <script type="text/javascript">
        function autoTab3(obj) {

            var pattern = new String("_____");
            var pattern_ex = new String("-");
            var returnText = new String("");
            var obj_l = obj.value.length;
            var obj_l2 = obj_l - 1;
            for (i = 0; i < pattern.length; i++) {
                if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
                    returnText += obj.value + pattern_ex;
                    obj.value = returnText;
                }
            }
            if (obj_l >= pattern.length) {
                obj.value = obj.value.substr(0, pattern.length);
            }

        }


    </script>
    <div class="container" style="margin-top: 20px;background-color: #E7D2EF;">
        <form action="">
            <div class="form-group">
                <label for="ID">รหัสบัตรประจำตัวประชน *:</label>
                <input name="data1" type="text" id="data1" onkeyup="autoTab(this,1)" placeholder="X-XXXX-XXXXX-X-XX"
                    required /><br>
            </div>
            <div class="form-group">
                <label for="fID">คำนำหน้า*:</label>
                <select class="form-select" id="fID" aria-label="Default select example" required>
                    <option value="" selected>---เลือก---</option>
                    <option value="1">นาย</option>
                    <option value="2">นาง</option>
                    <option value="3">นางสาว</option>
                </select><br>
            </div>
            <div class="form-group">
                <label for="fname">ชื่อ*:</label>
                <input type="text" name="input_fname" id="fname" placeholder="ชื่อภาษาไทย" required>
                <label for="lname">นามสกุล*:</label>
                <input type="text" name="input_lname" id="lname" placeholder="นามสกุลภาษาไทย" required>
            </div>
            <label for="sex">เพศ*:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sex1" value="option1"
                    required>
                <label class="form-check-label" for="inlineRadio1">ชาย</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sex2" value="option2"
                    required>
                <label class="form-check-label" for="inlineRadio2">หญิง</label>
            </div>
            <div class="form-group">
                <label for="IDP">เบอร์โทรมือถือ*:</label>
                <input name="data1" type="tel" id="IDP" onkeyup="autoTab2(this,1)" placeholder="XXX-XXX-XXXXX"
                    required />
                <label for="IDH">เบอร์โทรมือถือบ้าน*:</label>
                <input name="data1" type="tel" id="IDH" onkeyup="autoTab2(this,1)" placeholder="XXX-XXX-XXXXX"
                    required /><br>
            </div>
            <label for="GR">สาขา*:</label>
            <div class="col-sm-2 control-label" required></div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1"> ITD (เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">IMI (นวัตกรรมสารสนเทศทางการแพทย์)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">DCM (ดิจิทัลคอนเทนต์และสื่อ)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                <label class="form-check-label" for="inlineCheckbox4">MTA (เทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                <label class="form-check-label" for="inlineCheckbox5">COMM </label>
            </div>
            <div class="form-group">
                <label for="hid">บ้านเลขที่*:</label>
                <input type="text" name="input_hid" id="input_hid" placeholder="เช่น 152" required>
                <label for="gid">หมู่ที่*:</label>
                <input type="text" name="input_hid" id="input_gid" placeholder="เช่น 1" required>
            </div>
            <div class="form-group">
                <label for="distr">ตำบล*:</label>
                <input type="text" name="input_hid" id="distr" placeholder="เช่น นาปะขอ" required>
                <label for="Distr">อำเภอ*:</label>
                <input type="text" name="input_hid" id="Distr" placeholder="เช่น บางแก้ว" required>
            </div>
            <div class="form-group">
                <label for="Provin">จังหวัด*:</label>
                <select class="form-select" aria-label="Default select example" id="Provin"required>
                    <option value="" selected>---เลือก---</option>
                    <option value="1">นครศรีธรรมราช</option>
                    <option value="2">พัทลุง</option>
                    <option value="3">สงขลา</option>
                    <option value="4">สุราษฎร์ธานี</option>
                    <option value="5">ตรัง</option>
                </select>
                <label for="IDP">รหัสไปรษณีย์*:</label>
                <input name="data1" type="text" id="IDP" onkeyup="autoTab3(this,1)" placeholder="XXXXXX"
                    required /><br>
            </div>
            <input type="submit" value="submit" class="btn btn-success" id="sub" />
    </div>

    </form>

    </div>
</body>

</html>
