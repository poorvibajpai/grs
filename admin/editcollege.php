<?php
session_start();
$cid = $_REQUEST['id'];
// echo $cid;
include("dash-design.php");
include("connection.php");
$query = "SELECT * FROM tbl_college where cid= '$cid'";
$res = mysqli_query($con, $query);
$row = mysqli_fetch_array($res);
?>
<html>

<head>
    <style>
        .container {
            position: fixed;
            bottom: 400px;
            left: 170px;
        }

        form .input-box,
        .button {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        form .button {
            height: 35px;
            margin: 22px 0 0 170px;

        }

        form .button input {

            border: none;
            border-radius: 10px;
            outline: none;
            color: #fdfdfd;
            background: #212529;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            transition: .5s ease;
            width: 500px;
        }

        form .button input:hover {
            border: 2px solid #4755aa;
            color: #4755aa;
            background-color: #fdfdfd;
        }

        form .button a {
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 300;
        }

        form .button a:hover {
            text-decoration: underline;
            color: red;
        }

        .input-box input {
            height: 70px;
            width: 38%;
            outline: none;
            border-radius: 10px;
            border: 2px solid #253b77;
            padding-left: 10px;
            font-size: 22px;
            font-weight: 300;
            text-align: center;
        }

        #label {
            margin-top: 26px;
            margin-right: 4px;
            font-size: 1.2rem;
            font-weight: 300;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="collupdate.php" method="post">
            <input type="hidden" name="cid" value="<?php echo $row['cid']; ?>">
            <div class="input-box">
                <span class="details px-2 fw-bold" id="label"><i class="bi bi-pencil p-2"></i></i>Edit College</span>
                <input type="text" name="college" value="<?php echo $row['college']; ?>" required>
            </div>
            <div class="button">
                <input type="submit" value="SAVE CHANGES">
            </div>
            <div class="button">
                <a href="college.php"><i class="bi bi-arrow-left me-2"></i>BACK</a>
            </div>
        </form>
    </div>
</body>

</html>