<?php 
    $pageTitle = "Update Page";
    require_once "includes/header.php";
?>
<body>
    <?php require_once "includes/navbar.php";?>
    <?php 
        $id = $_GET['id'];
        require_once "database/connection.php";
        $dbc = db_connect();
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = mysqli_query($dbc,$sql);
        $row = mysqli_fetch_row($result); //indexed array 
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">Update User Form</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="process.php" method="post">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php if(isset($row[1])){ echo $row[1];}?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address: </label>
                        <input type="email" name="email" id="email" class="form-control"
                        value="<?php if(isset($row[2])){ echo $row[2];}?>"
                        >
                    </div>

                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" class="form-control" value="<?php if(isset($row[3])){ echo $row[3];}?>">
                    </div>
                 
                    <div class="form-group">
                        <label for="dob">Date of Birth: </label>
                        <input type="date" name="dob" id="dob" class="form-control" value="<?php if(isset($row[4])){ echo $row[4];}?>">
                    </div>

                    <div class="form-group">
                        <label for="country">Country: </label>
                        <select name="country" class="form-control" id="country">
                            <option value="">--SELECT--</option>
                            <option value="Pakistan" selected>Pakistan</option>
                            <option value="Iran">Iran</option>
                            <option value="UK">United Kingdom</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" value="Add User" class="btn btn-success mb-2">
                </form>
            </div>
        </div>
    </div>


    <?php require_once "includes/footer.php";?>
</body>