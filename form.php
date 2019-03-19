<?php include_once("header.php");?>
<body>
    <div class="container mt-4">
    <h2 class="text-center text-primary">Quiz OOP</h2>
    <hr>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
        <div class="card">
        <div class="card-body">
        <form action="#" method="POST">
                <span>Name</span>
                <div class="form-group">
                    <input type="text" name="uname" class="form-control" placeholder="Username">
                </div>
                <span>Gender</span>
                <div class="form-group">
                    <select name="gender" class="form-control">
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <span>Province</span>
                <div class="form-group">
                    <input type="text"name="province" class="form-control" placeholder="Province">
                </div>
                <span>Email</span>
                <div class="form-group">
                    <input type="text"name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <button type="submit" name="btn-submit"class="btn btn-primary float-right mr-4">Send</button>
                </div>
            </form>
        </div>
        </div>
        </div>
        <div class="col-md-4">
        <?php
            if(isset($_POST['btn-submit']))
            {
                include "getValue.php";
                $getValueInput = new retrievUserInput($uname, $gender,$province, $email);
        ?>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">Name :  <?php echo $getValueInput->getName()?></div>
                </div>
                <div class="card-body">
                    <div class="form-group">Gender : <?php echo $getValueInput->getGender()?> </div>
                </div>
                <div class="card-body">
                    <div class="form-group">Province : <?php echo $getValueInput->getProvince()?> </div>
                </div>
                <div class="card-body">
                    <div class="form-group">Email :<?php echo $getValueInput->getEmail()?> </div>
                </div>
                <br>
                <br>
                <br>
            <?php } ?>
            </div>
        </div>
    </div>
    </div>
</body>
<?php include_once("footer.php");?>