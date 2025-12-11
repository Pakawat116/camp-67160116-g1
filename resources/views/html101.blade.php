<!-- file: resources/views/html101.blade.php -->
<!Doctype html>
<html>
    <head>
        <title>ส่วนหัวของ HTML</title>
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
</head>
<body>

    <div class="card-form">
        <h2>Workshop #HTML - FORM</h2>
        
        <form action="#" method="post">
            
            <div class="row row-form">
                <div class="col-sm-3 col-label">ชื่อ</div>
                <div class="col-sm-9">
                    <input type="text" name="firstname" class="form-control">
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
                    <button type="submit" class="btn btn-dark px-4">Submit</button>
                </div>
            </div>

        </form>
    </div>
</body>
</html>