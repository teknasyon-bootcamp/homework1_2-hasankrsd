<?php
//Eğer formdan veri geldiyse formdaki verileri al
if (isset($_POST['result'])) {
    $gender=$_POST['gender'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    $age=$_POST['age'];
}
//Eğer formdan veri gelmemişse aşağıdaki default verileri kullan
else{
    $gender = "male"; 
    $weight = 55; 
    $height = 170; 
    $age = 25; 
}
//Kadınsa ayrı erkekse ayrı hesaplama yapılır

if ($gender=="male") {
    $bmr=88.362+(13.397*$weight)+(4.799*$height)-(5.677*$age);
}
else if ($gender=="female") {
    $bmr=447.593+(9.247*$weight)+(3.098*$height)-(4.330*$age);
}
$guess = "1470";
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasan Kürşad KORKMAZ | Ödev 1_2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .selectMargin {
        margin-bottom: 5rem;
    }

    h3 {
        margin-bottom: 50px;
    }

    input {
        margin-bottom: 20px;

    }

    select {
        margin-bottom: 20px;

    }
    </style>
</head>

<body>
    <div class="row">
        <div class="container">
            <!-- Veri alınabilmesi için ilgili form -->
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="col-lg-12 selectMargin">
                    <h3>BMR Hesaplamanızı Buradan Yapabilirsiniz</h3>
                    <form action="#" method="POST">
                        <div class="form-group row">
                            <label for="gender-id" class="col-sm-2 col-form-label">Cinsiyetiniz</label>
                            <div class="col-sm-10">
                                <select name="gender" class="form-select" id="gender-id">
                                    <option <?php if($gender=="male"){?> selected <?php }?> value="male">Erkek</option>
                                    <option <?php if($gender=="female"){?> selected <?php }?> value="female">Kadın
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="weight-id" class="col-sm-2 col-form-label">Kilonuz (Kg)</label>
                            <div class="col-sm-10">
                                <input required type="number" <?php if(isset($_POST['result'])){ ?>
                                    value="<?php echo $weight ?>" <?php } ?> class="form-control" name="weight"
                                    id="weight-id" placeholder="<?php echo $weight ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="height-id" class="col-sm-2 col-form-label">Boyunuz (Cm)</label>
                            <div class="col-sm-10">
                                <input required type="number" <?php if(isset($_POST['result'])){ ?>
                                    value="<?php echo $height ?>" <?php } ?> class="form-control" name="height"
                                    id="height-id" placeholder="<?php echo $height ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age-id" class="col-sm-2 col-form-label">Yaşınız</label>
                            <div class="col-sm-10">
                                <input required type="number" <?php if(isset($_POST['result'])){ ?>
                                    value="<?php echo $age ?>" <?php } ?> class="form-control" name="age" id="age-id"
                                    placeholder="<?php echo $age ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="result" class="btn btn-primary">Hesapla</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="col-lg-12">
                        <!-- İşlem sonucunun yazdırıldığı yer -->

                    <h3>Bazal Metabolizma Hızınız (BMR): <?php echo $bmr; ?> </h3>
                    <h4>Tahmin Değeri: <?php echo $guess ?></h4>

                    <?php
                    if ($guess<$bmr) { ?>
                    <p>Tahmin değerinden büyük</p>
                    <?php } elseif ($guess==$bmr) { ?>
                        <p>Tahmin değerine eşit</p>
                        <?php } elseif ($guess>$bmr) { ?>
                        <p>Tahmin değerinden küçük</p>
                        <?php }
                    ?>


                </div>
            </div>
        </div>
    </div>

</body>

</html>