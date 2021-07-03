<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/land.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
</head>
<body>

    <?php
        session_start();
    ?>

    <div class="container" style="position:absolute;">
        <div class="row">
        <div class="col-md-5 mx-auto mt-5">
            <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-success">
            <?php echo $_SESSION['message']; ?>
            </div>
        <?php endif; ?>
        <?php unset($_SESSION['message']); ?>
        </div>
        </div>
    </div>

    <div class="lap"><img src="./images/img01.jpg" alt="" width="100%"></div>
    <div class="mob bg-main">
        <div class="container">
            <img class="vertical-center" src="./images/logo-bg.png" alt="" width="100%">
        </div>
    </div>
    <div class="container font">
        <div class="lap">
            <div class="row">
                <div class="col-md-6">
                    <img src="./images/logo-bg.png"  id="style-logo" alt="aceatech">
                </div>
                <div class="col-md-6">
                    <div class="card text-white bg-danger mb-3" id="style-card">
                        <div class="card-header txt-center" style="font-size:30px;font-weight:bold">ENQUIRY NOW</div>
                        <div class="card-body">
                            <h6 class="card-title txt-center" style="font-size:20px;">ADMISSION OPEN FOR 2021 - 2022</h6>
                            <form  action="sendemail.php" method="post">
                                <div class="form-floating mb-3" style="color:black">
                                    <input type="text" class="form-control" id="floatingName" name="name" placeholder="Name*" required>
                                    <label for="floatingInput">Name*</label>
                                </div>
                                <div class="form-floating mb-3" style="color:black">
                                    <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com*" required>
                                    <label for="floatingEmail">Email Address*</label>
                                </div>
                                <div class="form-floating mb-3" style="color:black">
                                    <input type="number" class="form-control" id="floatingNumber" name="mobile" placeholder="9999999999*" maxlength="10" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                                    <label for="floatingNumber">Mobile Number*</label>
                                </div>
                                <div class="form-floating mb-3" style="color:black">
                                    <input type="text" class="form-control" id="floatingSubject" name="address" placeholder="Address*" required>
                                    <label for="floatingSubject">Address*</label>
                                </div>
                                <div class="form-floating mb-3" style="color:black">
                                    <input type="number" class="form-control" id="floatingSubject" name="pincode" maxlength="6" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onchange="httpGet(this.value)" placeholder="Pincode*" required>
                                    <label for="floatingSubject">Pincode*</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3" style="color:black">
                                        <input type="text" class="form-control" list="datalistOptions" id="floatingState" name="state" value="" placeholder="State*" readonly required>
                                        <label for="floatingSubject">State*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-select-md mb-3" id="datalistcityOptions" style="color:black;padding:7%">
                                            <option selected value="" style="font-size:small">City*</option>
                                        </select>
                                    </div>
                                </div>
                                <select class="form-select form-select-md mb-5" aria-label=".form-select-md example" style="color:black;padding:4%">
                                    <option selected style="font-size:small">Select Course*</option>
                                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                                    <option value="Computer Science Engg">Computer Science Engg</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Electrical & Electronics Engg">Electrical & Electronics Engg</option>
                                    <option value="Electronics & Communication Engg">Electronics & Communication Engg</option>
                                </select>
                                
                                <div class="align-center">
                                    <center><button class="btn btn-light" type="submit">Submit</button></center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mob">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-white bg-danger mb-3 align-left-margin margin-top" style="max-width: 30rem;position:relative;">
                            <div class="card-header txt-center" style="font-size:30px;font-weight:bold">ENQUIRY NOW</div>
                            <div class="card-body">
                                <h6 class="card-title txt-center" style="font-size:20px;">ADMISSION OPEN FOR 2021 - 2022</h6>
                                <form action="sendemail.php" method="post">
                                    <div class="form-floating mb-3" style="color:black">
                                        <input type="text" class="form-control" id="floatingName" name="name" placeholder="Name*" required>
                                        <label for="floatingInput">Name*</label>
                                    </div>
                                    <div class="form-floating mb-3" style="color:black">
                                        <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com*" required>
                                        <label for="floatingEmail">Email Address*</label>
                                    </div>
                                    <div class="form-floating mb-3" style="color:black">
                                        <input type="number" class="form-control" id="floatingNumber" name="mobile" maxlength="10" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="9999999999*" required>
                                        <label for="floatingNumber">Mobile Number*</label>
                                    </div>
                                    <div class="form-floating mb-3" style="color:black">
                                        <input type="text" class="form-control" id="floatingSubject" name="address" placeholder="Address*" required>
                                        <label for="floatingSubject">Address*</label>
                                    </div>
                                    <div class="form-floating mb-3" style="color:black">
                                        <input type="number" class="form-control" id="floatingSubject" name="pincode" maxlength="6" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onchange="httpGet(this.value)" placeholder="Pincode*" required>
                                        <label for="floatingSubject">Pincode*</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3" style="color:black">
                                            <input type="text" class="form-control" list="datalistOptions" id="floatingStatemob" name="state" value="" placeholder="State*" readonly required>
                                            <label for="floatingSubject">State*</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-select form-select-md mb-3" id="datalistcitymobOptions" style="color:black;padding:4%">
                                            <option selected value="" style="font-size:small">City*</option>
                                            </select>
                                        </div>
                                    </div>
                                    <select class="form-select form-select-md mb-5" aria-label=".form-select-md example"  style="color:black;padding:4%">
                                        <option selected style="font-size:small">Select Course*</option>
                                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                                        <option value="Computer Science Engg">Computer Science Engg</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Electrical & Electronics Engg">Electrical & Electronics Engg</option>
                                        <option value="Electronics & Communication Engg">Electronics & Communication Engg</option>
                                    </select>
                                    
                                    <div class="align-center">
                                        <center><button class="btn btn-light" type="submit">Submit</button></center>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container lap">
            <div class="row pad-top">
                <div class="col-md-6 pad-top">
                    <h3><span class="text-primary">OUR</span> <span class="text-danger"> PLACEMENT AND CREATIVE CELL</span></h3>
                    <br/>
                    <p>
                        The role of the Placement and Creative Cell is to provide information, advise, guide and support to students.
                    </p>
                    <p>It ensures the following :</p>
                    <p><img src="./images/bullet.png" alt=""> Personality development programmes to help students face the challenges of the modern, competitive business environment</p><br/>
                    <p><img src="./images/bullet.png" alt=""> Strategic tie-ups with leading companies to enable effective ‘Industrial Visits (IV)’ and ‘In-plant trainings (IPT)’.</p><br/>
                    <p><img src="./images/bullet.png" alt=""> Regular seminars and interactive sessions with business leaders to help students gain an insight into the real world of business</p>
                </div>
            </div>
        </div>

        <div class="container mob text-justify">
            <div class="row pad-top">
                <div class="col-lg-6">
                    <h3><span class="text-primary">OUR</span> <span class="text-danger"> PLACEMENT AND CREATIVE CELL</span></h3>
                    <br/>
                    <p>
                        The role of the Placement and Creative Cell is to provide information, advise, guide and support to students.
                    </p>
                    <p>It ensures the following :</p>
                    <p><img src="./images/bullet.png" alt=""> Personality development programmes to help students face the challenges of the modern, competitive business environment</p><br/>
                    <p><img src="./images/bullet.png" alt=""> Strategic tie-ups with leading companies to enable effective ‘Industrial Visits (IV)’ and ‘In-plant trainings (IPT)’.</p><br/>
                    <p><img src="./images/bullet.png" alt=""> Regular seminars and interactive sessions with business leaders to help students gain an insight into the real world of business</p>
                </div>
            </div>
        </div>
         
        <div class="container font pad-top" id="style-content">
            <h1 class="text-danger text-center" style="font-weight:bold">Placement by Top Companies</h1>
            <div class="row pad-top">
                <div class="col-lg-3">
                    <img src="./images/tcs.png" alt="tcs" width="100%">
                </div>
                <div class="col-lg-3 pad-top">
                    <img src="./images/cognizant.png" alt="cognizant" width="100%">
                </div>
                <div class="col-lg-3 pad-top">
                    <img src="./images/infosys.png" alt="infosys" width="100%">
                </div>
                <div class="col-lg-3">
                    <img src="./images/accenture.png" alt="accenture" width="100%">
                </div>
                <div class="col-lg-3">
                    <img src="./images/bosch.png" alt="bosch" width="100%">
                </div>
                <div class="col-lg-3 lap" style="padding-top:1.5%">
                    <img src="./images/ltgroup.png" alt="ltgroup" width="100%">
                </div>
                <div class="col-lg-3 mob">
                    <img src="./images/ltgroup.png" alt="ltgroup" width="100%">
                </div>
                <div class="col-lg-3 lap" style="padding-top:4%">
                    <img src="./images/oracle.png" alt="oracle" width="100%">
                </div>
                <div class="col-lg-3 mob" style="padding-top:7%">
                    <img src="./images/oracle.png" alt="oracle" width="100%">
                </div>
                <div class="col-lg-3 lap" style="padding-top:1%;padding-left:3%">
                    <img src="./images/ibm.png" alt="ibm" width="100%">
                </div>
                <div class="col-lg-3 mob" style="padding-top:25%">
                    <img src="./images/ibm.png" alt="ibm" width="100%">
                </div>
            </div>
        </div>
    </div>

    <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 5000);
    
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="./js/common.js"></script>
</body>
</html>
