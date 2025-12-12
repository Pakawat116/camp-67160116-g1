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
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">สกุล</div>
                <div class="col-sm-9">
                    <input type="text" name="lastname" class="form-control">
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">วัน/เดือน/ปีเกิด</div>
                <div class="col-sm-9">
                    <input type="date" name="dob" class="form-control" style="max-width: 250px;">
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">อายุ</div>
                <div class="col-sm-9">
                    <input type="number" name="age" class="form-control" style="max-width: 150px;">
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">เพศ</div>
                <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">ชาย</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">หญิง</label>
                    </div>
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">รูป</div>
                <div class="col-sm-9">
                    <input type="file" name="photo" class="form-control">
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label align-self-start pt-2">ที่อยู่</div>
                <div class="col-sm-9">
                    <textarea name="address" class="form-control" rows="4"></textarea>
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">สีที่ชอบ</div>
                <div class="col-sm-9">
                    <select name="color" class="form-select" style="max-width: 200px;">
                        <option value="red">สีแดง</option>
                        <option value="blue">สีน้ำเงิน</option>
                        <option value="green">สีเขียว</option>
                        <option value="other">อื่นๆ</option>
                    </select>
                </div>
            </div>

            <div class="row row-form">
                <div class="col-sm-3 col-label">แนวเพลงที่ชอบ</div>
                <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" id="life" value="life">
                        <label class="form-check-label" for="life">R&B</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" id="life" value="life">
                        <label class="form-check-label" for="life">เพื่อชีวิต</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" id="country" value="country">
                        <label class="form-check-label" for="country">ลูกทุ่ง</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" id="other_music" value="other">
                        <label class="form-check-label" for="other_music">อื่นๆ</label>
                    </div>
                </div>
            </div>

            <div class="row row-form mt-4">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="consent">
                        <label class="form-check-label fw-bold" for="consent">
                            ยินยอมให้เก็บข้อมูล
                        </label>
                    </div>
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