<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<?php 
	$errTitle = '';
	$errDescription = '';
	$errContent = '';
	$errDate = '';
		if (isset($_POST['title'])) {
			if ($_POST['title'] == '') {
				$errTitle = 'Please input title';
			}
			if ($_POST['description'] == '') {
				$errDescription = 'Please input description';
			}
			if ($_POST['content'] == '') {
				$errContent = 'Please input content';
			}
			if ($_POST['publish_date'] == '') {
				$errDate = 'Please input publish date';
			}
            if ($_POST['news_type'] == '') {
				$errDate = 'Please input news_type';
			}
            //var_dump($_FILES['image']['tmp_name']); //để debug giống console.log() bên javascript
			move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$_FILES['image']['name']);
		} else {
			echo "Chưa submit";
		}
	?>
	<h1>Add news</h1>
	<form action="#" method="POST" enctype='multipart/form-data'>
		<p>
			Title
			<input type="text" name="title" value="<?php echo isset($_POST['title'])?$_POST['title']:'';?>">
			<?php echo $errTitle;?>
		</p>
		<p>
			Description
			<input type="text" name="description" value="<?php echo isset($_POST['description'])?$_POST['description']:'';?>">
			<?php echo $errDescription;?>
		</p>
		<p>
			Content
			<textarea name="content"><?php echo  isset($_POST['content'])?$_POST['content']:'';?></textarea>
			<?php echo $errContent;?>
		</p>
		<p>
			Image
			<input type="file" name="image">
		</p>
		<p>
			Publish date
			<input type="date" name="publish_date" value="<?php echo isset($_POST['publish_date'])?$_POST['publish_date']:'';?>">
			<?php echo $errDate;?>
		</p>
		<p>
			Publish?
			<input type="radio" name="publish"  value='0'<?php if(isset($_POST['publish']) && $_POST['publish'] == 0) {?> checked="checked"<?php } ?>> Publish
			<input type="radio" name="publish"  value='1'<?php if(isset($_POST['publish']) && $_POST['publish'] == 1) {?> checked="checked"<?php } ?>> No publish
		</p>
		<p>
			News type
			<select name="news_type">
				<option value="">Choose type</option>
				<option value="1" <?php if(isset($_POST['news_type']) && $_POST['news_type'] == 1) {?> selected="selected" <?php } ?>>Tin thể thao</option>
				<option value="2" <?php if(isset($_POST['news_type']) && $_POST['news_type'] == 2) {?> selected="selected" <?php } ?>>Tin xã hội</option>
				<option value="3" <?php if(isset($_POST['news_type']) && $_POST['news_type'] == 3) {?> selected="selected" <?php } ?>>Tin thế giới</option>
			</select>
		</p>

        <div>
            <input type="checkbox" id="scales" name="scales"  value='0'<?php if(isset($_POST['scales']) && $_POST['scales'] == 0) {?> checked="checked" <?php } ?>>
            <label for="scales">Scales</label>
            </div>

            <div>
            <input type="checkbox" id="horns" name="horns" value='1' <?php if(isset($_POST['horns']) && $_POST['horns'] == 1) {?> checked="checked" <?php } ?>>
            <label for="horns">Horns</label>
        </div>
		<p>
			<input type="submit" name="Add news">
		</p>
	</form>
</body>
</html>
