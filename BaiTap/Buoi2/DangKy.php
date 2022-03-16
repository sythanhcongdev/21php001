<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    
<?php 
        $errNames = '';
        $errUserNames = '';
        $errSex = '';
        $errDate = '';
        $errAddress = '';
        $errPassword = '';

            if (isset($_POST['yourname'])) {
                if ($_POST['yourname'] == '') {
                    $errNames = 'Please input your name';
                }else{
                    echo $_POST['yourname'];
                }

                if ($_POST['username'] == '') {
                    $errUserNames = 'Please input Username';
                }else{
                    echo $_POST['username'];
                }

                if ($_POST['addr'] == '') {
                    $errAddress = 'Please input Address';
                }else{
                    echo $_POST['addr'];
                }

                if ($_POST['year'] == '') {
                    $errDate = 'Please input publish date';
                }else{
                    echo $_POST['year'];
                }

                if ($_POST['password'] == '') {
                    $errPassword = 'Please input your password';
                }else{
                    echo $_POST['password'];
                }

                if ($_POST['sex'] =='') {
                    $errSex = 'Please input your sex';
                }else{
                    echo $_POST['sex'];
                }

                //var_dump($_FILES['image']['tmp_name']); //để debug giống console.log() bên javascript
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$_FILES['image']['name']);
            } else {
                echo "Chưa submit";
            }
    ?>
    <form action="#" class="actionForm" method="POST" enctype='multipart/form-data'>
        <p>Họ Tên</p>
        <input type="text" placeholder="Họ và tên" name="yourname" value="<?php echo isset($_POST['yourname'])?$_POST['yourname']:'';?>">
			<?php echo $errNames;?><br><br>
        
        <p>Username</p>
        <input type="text" placeholder="Username" name="username"value="<?php echo isset($_POST['username'])?$_POST['username']:'';?>">
			<?php echo $errUserNames;?><br><br>

        <p>Năm sinh</p>
        <input type="date" placeholder="Năm sinh" name="year" value="<?php echo isset($_POST['year'])?$_POST['year']:'';?>">
			<?php echo $errDate;?>
        
        <p>Giới Tính</p><br>
		<input type="radio" name="sex"  value='Nam'<?php if(isset($_POST['sex']) && $_POST['sex'] == 'Nam') {?> checked="checked"<?php } ?>> Nam<br>        

		<input type="radio" name="sex"  value='Nu'<?php if(isset($_POST['sex']) && $_POST['sex'] == 'Nu') {?> checked="checked"<?php } ?>> Nữ		<br>        
		<input type="radio" name="sex"  value='Khac'<?php if(isset($_POST['sex']) && $_POST['sex'] == 'khac') {?> checked="checked"<?php } ?>> Khác  <br>     <?php echo $errSex;?><br><br> 

            
        <p>Địa Chỉ</p>
        <input type="text" placeholder="Địa chỉ" name="addr"value="<?php echo isset($_POST['addr'])?$_POST['addr']:'';?>">
			<?php echo $errAddress;?><br><br>

        <p>Chọn Ảnh Đại Diện</p>
        <input type="file" name="image"><br><br>


        <p>Mật Khẩu</p>
        <input type="password" placeholder="Mật khẩu" name="password"value="<?php echo isset($_POST['password'])?$_POST['password']:'';?>">
			<?php echo $errPassword;?><br><br>

        <button type="submit">Đăng ký </button>

    </form>



</body>

<style>
    * {
    margin: 0;
    padding: 0;
    }
    body {
    background: #ddd
    }
    .actionForm {
    max-width: 600px;
    margin: 0 auto;
    display: block;
    margin-top: 50px;
    }
    .actionForm input[type="text"],
    .actionForm input[type="password"],
    .actionForm input[type="date"]
    {
    padding: 10px;
    border: 1px solid #eee;
    border-radius: 5px;
    width: 100%;
    }
    .actionForm button[type="submit"] {
    padding: 10px;
    background: blue;
    color: #fff;
    border: 0;
    outline: 0;
    }
</style>
</html>