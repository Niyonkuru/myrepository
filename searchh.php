 <?php include('header.php');?>
    
  <div class="content">
    <?PHP 
	require_once('utility.php');
	function highlighter_text($text, $words)
{
    $split_words = explode( " " , $words );
    foreach($split_words as $word)
    {
        $color = "#F3C";
        $text = preg_replace("|($word)|Ui" ,"<span style=\"background:".$color.";\"><b>$1</b></span>" , $text );
    }
    return $text;
}
	$query = $_GET['q']; 
    // gets value sent over search form
    // We preform a bit of filtering 
	 $query = strip_tags($query); 
	 $query = trim($query); 
	 $query = preg_replace('/\s+/',' ', $query);	 
	 $query=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s',' ', $query);
	 $min_length = 3;   // you can set minimum length of the query if you want
     if(strlen($query) >= $min_length) // if query length is more or equal minimum length then
     {
		 
        $query = htmlspecialchars($query); // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query); // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM articles
            WHERE (`title` LIKE '%".$query."%') OR (`content` LIKE '%".$query."%')") or die('Please try again later');
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
        echo "<h2 style='color:#F3C'>Search Results</h2><ol>";
		 
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
$text=substr($results['content'], 0,500);
$words = $query;
echo "<h2 style='color:#06F;'><a style='color:#06F;' href='readmore.php?pag=$results[id]'>". $results['title']."</a></h2>";
echo highlighter_text($text, $words)."........<a style='color:red;' href='readmore.php?pag=$results[id]'>read more</a>";;
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
                // posts results got from database(title and text) you can also show id ($results['id'])
            }
					echo "</ol>";             
        }

        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
	?>
    <!-- end .content --></div>
  <?php include('footer.php');?>
