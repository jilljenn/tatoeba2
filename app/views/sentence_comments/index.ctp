<ul>
<?php
foreach($sentenceComments as $lang => $commentsInLang){
	if($lang != 'unknown'){
		echo '<h2>'.$languages->codeToName($lang).'</h2>';
	}else{
		echo '<h2>'.__('Unknown language', true).'</h2>';
	}
	
	if(count($commentsInLang) > 0){
		echo '<table class="comments">';
		foreach($commentsInLang as $comment){
			echo '<tr>';
				echo '<td class="title">';
				echo $html->link(
					'['. $comment['Sentence']['id'] . '] ' . $comment['Sentence']['text'],
					array(
						"controller" => "sentence_comments",
						"action" => "show",
						$comment['Sentence']['id']
						));
				echo '</td>';
				
				echo '<td class="dateAndUser" rowspan="2">';
				echo $date->ago($comment['SentenceComment']['created']);
				echo '<br/>';
				echo $html->link(
					$comment['User']['username'], 
					array("controller" => "users", "action" => "show", $comment['User']['id'])	
				);
				echo '</td>';
			echo '</tr>';	
			
			echo '<tr>';
				echo '<td class="commentPreview">';
				echo nl2br($comments->clickableURL($comment['SentenceComment']['text']));
				echo '</td>';
			echo '</tr>';
		}
		echo '</table>';
	}else{
		__('There are no comments in this language');
	}
}
?>
</ul>