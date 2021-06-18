
<?php

defined('_JEXEC') or die;


use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Uri\Uri;




class PlgSystemHeading extends CMSPlugin

{
	protected $app;
	
	
            public function onBeforeCompileHead()
               {
                  $document = Factory::getDocument();
               }
            public function onAfterRender()
                   {
                        	if($this->app->isClient("administrator"))// checking backend or frontend
                    	        {
           
		            	           $txt=$this->params->get('text_area');//getting value of text_area which is enterd in plugin edit section
		  	                        ?>
		 
	                                <script>	//getting the title of page using query selector as it gives first element 
	                                      <p id="demo"></p>	
                                             var x = document.querySelector(".page-title"); 
                                    </script>
                                    <?php
                                  
                                   echo '$txt <script>document.getElementById("demo").innerHTML = x;</script>';// firstly code written inside script tage will be executed so it will print x in which title is stored then it will add $txt in which we have enterd our text
                                 }
	
	                         else if($this->$app->isClient("site"))
	                             {
		                            return;	// simply return if we are on frontend because this plugin will work only for backend
	                             }
                    }
}
?>
		 	


