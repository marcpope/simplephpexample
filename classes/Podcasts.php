<?php
	
class Podcasts extends Database {

	/* getShows from database limit by qty */		
	public function getRecent($qty) {
			$sql = "SELECT * FROM podcasts ORDER BY dt_article DESC LIMIT $qty";
       
			$stmt	= $this->connect()->prepare($sql);
					  $stmt->execute(); 
			$recentPodcasts  = $stmt->fetchAll();
		}
		return $recentPodcasts;
	}	

	/* get a single podcast */
	public function getPodcast($podcastid) {			
										
			$sql = "SELECT * FROM podcasts WHERE podcastid=$podcastid";
			
			$stmt	= $this->connect()->prepare($sql);
					  $stmt->execute(); 
			$podcast = $stmt->fetchAll();	
				
		return $podcast[0];
	}	

		
}

?>
