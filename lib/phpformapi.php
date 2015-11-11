<?php
/**
 *  P H P F O R M A P I
 * 
 *  a PHP 5 form API
 * 
 *  For more informations: {@link https://github.com/dhtml/phpformapi}
 *  
 *  @author Anthony Ogundipe
 *  @e-mail: diltony@yahoo.com
 *  @copyright Copyright (c) 2014 Anthony Ogundipe
 *  @license http://opensource.org/licenses/mit-license.php The MIT License
 *  @package phpformapi
 */


class form {
  
  protected $fields = array();
  protected $form_opt = array();

  //form constructor
  public function __construct($options = array()) {
	  $this->form_opt=$options;
  }

  //adds a field to the form
  public function add_field($tag,$values=Array()) {
	  if($tag=='markup') {$values=Array('html'=>$values);}
	  
	  $this->fields[]=Array('tag'=>"$tag",'options'=>$values);
  }  
  
  //renders the html output of the form
  public function render() {
    $output = "";
	$output.= $this->create_element("form",$this->form_opt);
	
	foreach ($this->fields as $element) {
	$output.= $this->create_element($element['tag'],$element['options']);
	}
	
	  
	$output.="</form>";
	return $output;
  }

//generates the html code and wrappers of an html element  
  private function create_element($tag,$opt,$close=true) {
	$tag=strtolower(trim($tag));
	
	//we must force some tags to compulsory accept closing
	switch($tag) {
		case "p":
		case "div":
		case "textarea":
		case "select":
		$close=false;
		break;
	}
	
	if($tag=="markup") {
	return $opt['html'];
	}
	
	$el="<{$tag} ";

	$id="element";
	$type="tag";
	$ivalue="";
	$iclass="";
	$ilabel="";
	$ihelp="";
	$lblclass='';
	$options=Array();
	$ovalue="";

	foreach ($opt as $name => $value) {
	  if($name=="#class") {$iclass=$value;continue;}
	  else if($name=="#lblclass") {$lblclass=$value;continue;}
	  else if($name=="#label") {$ilabel=$value;continue;}
	  else if($name=="#help") {$ihelp=$value;continue;}
	  else if($name=="#value") {$ivalue=$value;$close=false;continue;}
	  else if($name=="options") {$options=$value;continue;}
	  else if($name=="id") {$id=$value;} //store for reference
	  else if($name=="type") {$type=$value;} //store for reference
	  else if($name=="value" && $tag=="select") {$ovalue=$value;continue;} //store for reference

	  
      $el .= $this->render_attr($name,$value);
    }
	$el=trim($el);

	//closing tag
	if($tag=="form") {
		$el.=">\n"; //close form tag
	} else {
	
	//close select tag
	if($tag=="select") {
	$el.= ">\n";
	
	if(!empty($options) && $this->isAssoc($options)) {
		foreach($options as $value=>$text) {
			if($ovalue==$value) {$s=" selected ";} else {$s="";}
			$el.="<option {$s} value=\"$value\">{$text}</option>\n";
		}
	} else if(!empty($options) && !$this->isAssoc($options)) {
		foreach($options as $value) {
			if($ovalue==$value) {$s=" selected ";} else {$s="";}
			$el.="<option {$s} value=\"$value\">{$value}</option>\n";
		}
	}
		
	
	$el.="</$tag>\n";
	} else {
	//close regular tags
	$el.= $close ? "/>\n" : ">$ivalue</$tag>\n";
	}
	
	}
	
	if(!empty($lblclass)) {$lblclass=" class=\"{$lblclass}\" ";}
	
	//process label here
	if(!empty($ilabel)) {
		if($type=="checkbox"||$type=="radio") {

		$el=trim($el);
		$el= "<label{$lblclass}>{$el}$ilabel</label>\n";
			
		} else {
		$el= "<label {$lblclass} for=\"$id\">$ilabel</label>\n" .$el;
		}
	}

	//process help here
	if(!empty($ihelp)) {
		$el.= "<p class=\"help-block\">{$ihelp}</p>\n";
	}
	
	//process class wrapper here
	if(!empty($iclass)) {
		$el=$this->wrap_element("<div class=\"$iclass\">","</div>",$el);
	}

	  return $el;
  }

  //wraps an element with a tag
  private function wrap_element($prefix,$suffix,$elm) {
	  return "{$prefix}\n{$elm}{$suffix}\n"; 
  }
  
  //renders attributes like id="formid"
  private function render_attr($name,$value) {
	  $out="";
	  switch($name) {
		  case "disabled":
		  case "checked":
		  case "selected":
		  case "multiple":
		  $out="{$name} ";
		  break;
		  default:
		  $out="{$name}=\"{$value}\" ";
		  break;
	  }
	  return $out; 
  }

//determines if an array is associative  
   private function isAssoc($arr) {
    return array_keys($arr) !== range(0, count($arr) - 1);
	}
}
?>