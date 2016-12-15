<?php
	                                         //fetching the data
		
 include("connectdb.php");

 if(isset($_POST['name'])){
 	 $name = $_POST['name'];
     }
 $show ="SELECT * FROM elearning WHERE title like('$name%')";
		if($query_run = mysql_query($show)){
			while($query_row = mysql_fetch_assoc($query_run)){
			$title = $query_row['title'];
			$description = $query_row['description'];
			$link= $query_row['link'];
			$data ='<table class="table mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
			         
			        <tbody>
			        <tr class="link">
			       
                        <td class="td_title">'.$title.'</td>
                        <td class="td_description">'.$description.'</td>  
                        <td class="td_link"><a  href='.$link.' target="_blank">'.$link.' </a></td>
                    
			        </tr>
			        </tbody>
			       
			        </table>';

			 echo $data;   
			// echo '<br>'.$title.'    '.$description.'     '.$link;
			}	
		}else
		{
			echo mysql_error();
		}
		// 
                                      //checking data exist or not           
	// $run = mysql_query($show);
	// $check = mysql_num_rows($run);
	// if($name==null){
	// 	echo "please enter some text";
	// }
	// if ($check==null) {
	// 	echo "data not found";
	// }
?>
