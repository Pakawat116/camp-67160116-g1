@extends('template.default')

@section('title', 'Workshop FORM')
@section('content')
<h1 > Workshop #HTML - FORM</h1>
<style>
            body{
                font-family: "Exo 2", sans-serif;
                background-color: #ffffff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card-form {
            background-color: white;
            border-radius: 15px; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.05); 
            padding: 50px;
            width: 100%;
            max-width: 800px; 
        }

        h2 {
            font-weight: 700;
            color: #333;
            margin-bottom: 40px;
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        .row-form {
            margin-bottom: 20px;
            align-items: center; 
        }

        .col-label {
            font-weight: 700;
            color: #333;
            text-align: right;
        }
        
        @media (max-width: 576px) {
            .col-label {
                text-align: left;
                margin-bottom: 5px;
            }
        }

        .form-control:focus, .form-select:focus {
            border-color: #000089;
            box-shadow: 0 0 0 0.2rem rgba(0, 0, 137, 0.1);
        }
    </style>
<form action="#" method="post">
            <div class="row row-form">
                <div class="col-sm-3 col-label">ชื่อ</div>
                <div class="col-sm-9">
                    <input type="text" name="firstname" id="fname" class="form-control">
                    <div class = "valid-feedback">ถูกต้อง</div>
                    <div class = "invalid-feedback">โปรดระบุชื่อ</div>
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">สกุล</div>
                <div class="col-sm-9">
                    <input type="text" name="lastname" id="lname" class="form-control">
                    <div class = "valid-feedback">ถูกต้อง</div>
                    <div class = "invalid-feedback">โปรดระบุนามสกุล</div>
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">วัน/เดือน/ปีเกิด</div>
                <div class="col-sm-9">
                    <input type="date" name="dob" id="birthday" class="form-control" style="max-width: 250px;">
                    <div class = "valid-feedback">ถูกต้อง</div>
                    <div class = "invalid-feedback">โปรดระบุ วัน/เดือน/ปีเกิด</div>
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">อายุ</div>
                <div class="col-sm-9">
                    <input type="number" name="firstage" id="age" class="form-control" style="max-width: 150px;">
                    <div class = "valid-feedback">ถูกต้อง</div>
                    <div class = "invalid-feedback">โปรดระบุอายุ</div>
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">เพศ</div>
                <div class="col-sm-9">
                    <div class="d-flex flex-wrap gap-3"> 
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">ชาย</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">หญิง</label>
                        </div>
                    </div>
                    
                    <div id="gender-error" class="invalid-feedback">โปรดระบุเพศของคุณ</div>
                    <div id="gender-success" class="valid-feedback">ถูกต้อง</div>
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">รูป</div>
                <div class="col-sm-9">
                    <input type="file" name="photo" id="myfile" class="form-control">
                    <div class="valid-feedback">ถูกต้อง</div>
                    <div class="invalid-feedback">โปรดเลือกไฟล์</div>
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label align-self-start pt-2">ที่อยู่</div>
                <div class="col-sm-9">
                    <textarea name="faddress" id="address" class="form-control" rows="4"></textarea>
                    <div class="valid-feedback">ถูกต้อง</div>
                    <div class="invalid-feedback">โปรดระบุที่อยู่</div>
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">สีที่ชอบ</div>
                <div class="col-sm-9">
                    <select name="color" id="colors" class="form-select" style="max-width: 200px;">
                        <option selected disabled value="">เลือกสี</option>
                        <option value="red">สีแดง</option>
                        <option value="blue">สีน้ำเงิน</option>
                        <option value="green">สีเขียว</option>
                        <option value="other">อื่นๆ</option>
                    </select>
                    <div class="valid-feedback">ถูกต้อง</div>
                    <div class="invalid-feedback">โปรดเลือกสี</div>
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">แนวเพลงที่ชอบ</div>
                <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" id="music_life" value="life">
                        <label class="form-check-label" for="life">R&B</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" id="music_life" value="life">
                        <label class="form-check-label" for="life">เพื่อชีวิต</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" id="music_country" value="country">
                        <label class="form-check-label" for="country">ลูกทุ่ง</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" id="music_other" value="other">
                        <label class="form-check-label" for="other_music">อื่นๆ</label>
                    </div>
                        <div id="music-error" class="invalid-feedback">โปรดระบุแนวเพลงที่คุณชอบ</div>
                        <div id="music-success" class="valid-feedback">ถูกต้อง</div>
                </div>
            </div>

            <div class="row row-form mt-4">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="consent">
                        <label class="form-check-label fw-bold" for="consent">ยินยอมให้เก็บข้อมูล</label>
                    </div>
                    <div class="valid-feedback">ถูกต้อง</div>
                    <div class="invalid-feedback">โปรดยินยอมก่อนดำเนินการ</div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 d-flex gap-3">
                    <button type="reset" class="btn btn-light border px-4">Reset</button>
                    <button type="button" class="btn btn-dark px-4" onclick = "clickMe()">Submit</button>
                </div>
            </div>

</form>
@endsection

@push('scripts')
        <script>
            let clickMe = function(){
               let fname = document.getElementById('fname')
               // 1. ตรวจสอบชื่อ (Firstname)
               if(fname.value == ""){
                fname.classList.remove('is-valid')
                fname.classList.add('is-invalid')
               }else{
                fname.classList.remove('is-invalid')
                fname.classList.add('is-valid')
               }
               // 2. ตรวจสอบนามสกุล (Surname)
            let lname = document.getElementById('lname')
            if(lname.value == ""){
                lname.classList.remove('is-valid')
                lname.classList.add('is-invalid')
            }else{
                lname.classList.remove('is-invalid')
                lname.classList.add('is-valid')
            }

            // 3. ตรวจสอบวันเดือนปีเกิด (Date of Birth)
            let birthday = document.getElementById('birthday')
            if(birthday.value == ""){
                birthday.classList.remove('is-valid')
                birthday.classList.add('is-invalid')
            }else{
                birthday.classList.remove('is-invalid')
                birthday.classList.add('is-valid')
            }

            // 4. ตรวจสอบอายุ (Age)
            let age = document.getElementById('age')
            if(age.value == ""){
                age.classList.remove('is-valid')
                age.classList.add('is-invalid')
            }else{
                age.classList.remove('is-invalid')
                age.classList.add('is-valid')
            }

            // 5. ตรวจสอบเพศ (sex)
            let genders = document.getElementsByName('gender');
            let genderChecked = false;

            // เช็คว่ามีการเลือกตัวใดตัวหนึ่งหรือไม่
            for(let i=0; i < genders.length; i++){
                if(genders[i].checked){
                    genderChecked = true;
                    break;
                }
            }

            // อ้างอิงตัวหนังสือแจ้งเตือน
            let errorMsg = document.getElementById('gender-error');
            let successMsg = document.getElementById('gender-success');

            // วนลูปจัดการ Class และแสดงผลข้อความ
            for(let i=0; i < genders.length; i++){
                if(genderChecked){
                    genders[i].classList.remove('is-invalid');
                    genders[i].classList.add('is-valid');
                    
                    // เมื่อถูกต้อง ให้ซ่อนแดง โชว์เขียว (และตั้งเป็น block เพื่อให้แสดงผล)
                    errorMsg.style.display = 'none';
                    successMsg.style.display = 'block';
                } else {
                    genders[i].classList.remove('is-valid');
                    genders[i].classList.add('is-invalid');
                    
                    // เมื่อไม่ถูกต้อง ให้โชว์แดง ซ่อนเขียว
                    errorMsg.style.display = 'block';
                    successMsg.style.display = 'none';
                }
            }

            // 6. ตรวจสอบรูปภาพ (File)
            let myfile = document.getElementById('myfile')
            if(myfile.value == ""){
                myfile.classList.remove('is-valid')
                myfile.classList.add('is-invalid')
            }else{
                myfile.classList.remove('is-invalid')
                myfile.classList.add('is-valid')
            }

            // 7. ตรวจสอบที่อยู่ (Address)
            let address = document.getElementById('address')
            if(address.value == ""){
                address.classList.remove('is-valid')
                address.classList.add('is-invalid')
            }else{
                address.classList.remove('is-invalid')
                address.classList.add('is-valid')
            }

            // 8. ตรวจสอบสีที่ชอบ (Select Option)
            let colors = document.getElementById('colors')
            if(colors.value == ""){
                colors.classList.remove('is-valid')
                colors.classList.add('is-invalid')
            }else{
                colors.classList.remove('is-invalid')
                colors.classList.add('is-valid')
            }
            // 9. ตรวจสอบแนวเพลง (Music)
            let music = document.getElementsByName('music');
            let musicChecked = false;

            // เช็คว่ามีการเลือกตัวใดตัวหนึ่งหรือไม่
            for(let i=0; i < music.length; i++){
                if(music[i].checked){
                    musicChecked = true;
                    break;
                }
            }

            // อ้างอิงตัวหนังสือแจ้งเตือน
            let musicErr = document.getElementById('music-error');
            let musicOk = document.getElementById('music-success');

            // วนลูปจัดการ Class ตาม Logic เดิมของคุณ
            for(let i=0; i < music.length; i++){
                if(musicChecked){
                    music[i].classList.remove('is-invalid');
                    music[i].classList.add('is-valid');
                    
                    // จัดการตัวหนังสือ (ต้องสั่งผ่าน JS เพราะโครงสร้าง HTML ของเราแยกส่วนกัน)
                    musicErr.style.display = 'none';
                    musicOk.style.display = 'block';
                } else {
                    music[i].classList.remove('is-valid');
                    music[i].classList.add('is-invalid');
                    
                    musicErr.style.display = 'block';
                    musicOk.style.display = 'none';
                }
            }

            // 10. ตรวจสอบการยินยอม (Checkbox)
            let consent = document.getElementById('consent')
            if(consent.checked){
                consent.classList.remove('is-invalid')
                consent.classList.add('is-valid')
            }else{
                consent.classList.remove('is-valid')
                consent.classList.add('is-invalid')
            }
        }
            
            let myfunc = (callback) =>{
                callback("in Callback")
            }

            callMe = (param) => {
                console.log(param)
            }

            myfunc(callMe)

            let myvar1 = 1
            let myvar2 = "1"
            myvar2 = parseInt(myvar2)

            console.log(myvar2 + myvar1)
            console.log(1 === '1')

        </script>
@endpush