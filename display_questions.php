<!DOCTYPE html>
<html>
<head>
	<title>Display Questions</title>      		
</head>
<body>
  <a href="Location: display_questions&userId=<?php echo $userId; ?>">Add Question</a>
  	<table>
  		<tr>
  			<th>Name</th>
  			<th> Body </th>

  		</tr>
  		<?php foreach ($questions as $question) : ?>
  			<tr>
  				<td><?php echo $question['title']; ?></td>
  				<td><?php echo $question['body']; ?></td>
  			</tr>


  		<?php endforeach; ?>	
  	</table>

</body>

</html>
