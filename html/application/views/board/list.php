
<!DOCTYPE html>

<html>
 <head>
 </head>

<body>




<center>
<table style="border: 1px solid red; width:500px; height: 500px; text-align: center;">
    <tr>
        <td>번호</td>
        <td width="250px">제목</td>
        <td>작성자</td>
    </tr>
<?php
foreach($list as $row)
{ 
?>
    <tr>
        <td><?php echo $row['_id']?></td>
        <td><a href='/index.php/board/view?id=<?php echo $row['_id']?>'><?php echo $row['title']?></a></td>
        <td><?php echo $row['name']?></td>
    </tr>
<?php }?>
</table>

<br />
<form method="get">
<input type='text' name="search" value="<?php echo $search?>">
<input type="submit" value="검색하기">
</form>
<?php echo $page_nation;?>
<br />


<a href='/index.php/board/input/'>글쓰기</a>
</center>
</body>
</html>