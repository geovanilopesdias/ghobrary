<?php
	function fetchedResultsToTable(array $fetchedSearchResult){
		echo "<table>";
		foreach($fetchedSearchResult as $dbField => $dbData){
			echo "<tr><td>$dbField" /*How to do it????*/
		}
		echo "</table>";
	}

?>