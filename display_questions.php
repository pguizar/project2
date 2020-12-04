<!DOCTYPE html>
<html>
<head>
	<title>Display Questions</title>
  <link rel="stylesheet" href="design1.css">
      		
</head>
<body>
  <a href=".?action=display_question_form&userId=<?php echo $userId; ?>">Add Question</a>

  <h1> "Welcome " </h1>
  	<table>
  		<tr>
  			<th>Question Title</th>
  			<th> Body </th>
        		<th> Skills </th>

  		</tr>
  		<?php foreach ($questions as $question) : ?>
  			<tr>
  				<td><?php echo $question['title']; ?></td>
  				<td><?php echo $question['body']; ?></td>
          <td><?php echo $question['skills']; ?></td>
  			</tr>
  		<?php endforeach; ?>	
  	</table>

</body>

</html>
