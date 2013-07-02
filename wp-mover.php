<?php

define('ABSPATH', dirname(__FILE__) . '/');
define('WPINC', 'wp-includes/');
define('SCRIPTNAME', 'WPMover');
define('SCRIPTRELEASE', '0.1b');
define('GITTIPLOGO', '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');
define('GITHUBLOGO', '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');
define('LINKEDINLOGO', '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');
define('WPLOGO', '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');
define('ABOUTMELOGO', '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');

error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );

require_once ABSPATH . 'wp-config.php';
require_once WPINC . 'wp-db.php';

$gPostFields = array("post_content", "post_content_filtered", "guid");

$wpdb->show_errors();

$gFrom = !empty($_POST["from"]) ? trim($_POST["from"]) : "";
$gTo = !empty($_POST["to"]) ? trim($_POST["to"]) : "";
$_test = isset($_POST["test"]) ? $_POST["test"] : 0;
$gTest = ($_test == 1);

StartHtml();

if (empty($gFrom) || empty($gTo))
{
  mainPage();
}
else
{
  $testStr = ($gTest ? "ON" : "Off");
  
  echo <<<HTML
  <div style='width: 100%; text-align: center;'>
    <h3>Moving site from $gFrom to $gTo</h3>
    <h4>Test Mode is $testStr</h4>
  </div>
HTML;

  ShowWPParams();

  UpdateOptions($gTest);
  Separator();
  UpdatePosts($gTest);
  Separator();
  UpdatePostMetas($gTest);
  Separator();
  
  Finalize($gTest);
}

EndHtml();

// End Of Script





// Operative functions

function StartHtml()
{
	
  $const = get_defined_constants();

  echo <<<HTML
<html>
  <head>
    <style>
      .tdLabel { text-align: center;
                 vertical-align: middle;
                 font-weight: bold;
                 background-color: #ffab00;
               }
      .tdContent { text-align: center;
                   vertical-align: middle;
                 }
      .divStepHeader { text-align: center;
                       vertical-align: middle;
                       background-color: d8d8bf;
                     }
      .divStepFooter { text-align: left;
                       vertical-align: middle;
                       background-color: 00ff00;
                     }
      .divStepFooterErr { text-align: left;
                          vertical-align: middle;
                          background-color: ff0000;
                        }
      .tdDtlLabel { text-align: left;
                    vertical-align: middle;
                    font-weight: bold;
                    background-color: #ffab00;
                    border: solid 1px black;
                    width: 20%;
                  }
      .tdDtlContent { text-align: left;
                      vertical-align: middle;
                      border: solid 1px black;
                    }
      .divGitTip { color: #4E3B2E;
                   font-family: "Arial","Helvetica",sans-serif;
                   font-size: 22px;
                   font-style: normal;
                   font-weight: normal;
                   margin: 0;
                   padding: 0;
                 }
    </style> 
    
    <script type='text/javascript'>
      
      function doCheckData()
      {
        var tMessage = "";
        
        if (tMessage == "" && document.getElementById('from').value == "")
        {
          tMessage = "Original Name is Mandatory !";
        }
        
        if (tMessage == "" && document.getElementById('to').value == "")
        {
          tMessage = "Destination Name is Mandatory !";
        }
        
        if (tMessage == "" && document.getElementById('from').value == document.getElementById('to').value)
        {
          tMessage = "Source and Destination should be different....";
        }
        
        return (tMessage == "");
      }
      
      
      
      function doConfirm() 
      {
        var tCanSubmit = false;
        
        if (doCheckData() == true)
        {
          var tMsg = "Are You sure You want to move the website ?";
          if (document.getElementById('test').checked == true)
            tMsg = "Start Testing ?";
            
          tCanSubmit = confirm(tMsg);
        }
        return tCanSubmit;  
      }
      
      
      function SwitchVisibility(pDivName)
      {
        var tDiv = document.getElementById(pDivName);
        if (tDiv.style.display == "")
          tDiv.style.display = "none";
        else
          tDiv.style.display = "";
      }
      
    </script>
  </head>
  <body>
    <a href="https://github.com/fgrande/WPMover">
      <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png" alt="Fork me on GitHub" width="130" height="130">
    </a>

    <div style='width: 100%; text-align: left; position: absolute; top: 0; left: 0; border: 0; padding: 10px;'>
      <div class="divGitTip">
        <a target="_blank" style="text-decoration: none" href="https://www.gittip.com/on/github/fgrande">
          <img src="data:image/png;base64,{$const['GITTIPLOGO']}" alt="GitTip" width="32" height="32" />
        </a>      
        <a target="_blank" style="text-decoration: none" href="https://github.com/fgrande">
          <img src="data:image/png;base64,{$const['GITHUBLOGO']}" alt="GitHub" width="32" height="32" />
        </a>      
        <a target="_blank" style="text-decoration: none" href="http://it.linkedin.com/in/grandefabio/">
          <img src="data:image/png;base64,{$const['LINKEDINLOGO']}" alt="LinkedIn" width="32" height="32" />
        </a>      
        <a target="_blank" style="text-decoration: none" href="http://www.softwareontheroad.it">
          <img src="data:image/png;base64,{$const['WPLOGO']}" alt="WebSite" width="32" height="32" />
        </a>      
        <a target="_blank" style="text-decoration: none" href="http://about.me/fgrande">
          <img src="data:image/png;base64,{$const['ABOUTMELOGO']}" alt="AboutMe" width="32" height="32" />
        </a>      
        <iframe style="border: 0; margin: 0; padding: 0;" src="https://www.gittip.com/fgrande/widget.html" height="22pt" width="48pt"></iframe>
      </div>
    </div>

    <br />
    <br />
    <div style='width: 100%; text-align: center;'>
      <h1>{$const['SCRIPTNAME']} {$const['SCRIPTRELEASE']}</h1>
    </div>
HTML;

}


function EndHtml()
{
  $const = get_defined_constants();

  echo <<<HTML
    
  </body>
</html>
HTML;

}


function mainPage()
{
  
  ShowWPParams();

  // Try to guess site names
  $oldAddress = !empty($_REQUEST["from"]) ? $_REQUEST["from"] : get_option("siteurl");
  $newAddress = !empty($_REQUEST["to"]) ? $_REQUEST["to"] : $_SERVER["HTTP_HOST"];

  $oldAddress = preg_replace("/^https?:\/\//i", "", $oldAddress);
  $newAddress = preg_replace("/^https?:\/\//i", "", $newAddress);

  echo <<<HTML
<br />
<form name='frmOptions' action='wp-mover.php' method='post' onsubmit="return doConfirm();">
  <table style='width: 100%'>
    <tr>
      <td class='tdLabel'>Original Name</td>
      <td class='tdLabel'>Test Only</td>
      <td class='tdLabel'>New Name</td>
    </tr>
    <tr>
      <td class='tdContent'>
      <input type="text" name="from" id="from" value="$oldAddress" style="width: 90%;" />  
      </td>
      <td class='tdContent'>
        <input type="checkbox" name="test" id="test" value="1" />  
      </td>
      <td class='tdContent'>
        <input type="text" name="to" id="to" value="$newAddress" style="width: 90%;" />  
      </td>
    </tr>
  </table>

  <br />
  
  <div style='width: 100%; text-align: center;'>
    <input type='submit' value='Start Conversion' />
  </div>

</form>

HTML;

}



function ShowWPParams()
{
  global $wpdb, $gPostFields, $gFrom, $gTo;
  
  $flds = implode(", ", $gPostFields);
  $srv = $_SERVER["HTTP_HOST"];
  $srvAddr = $_SERVER["SERVER_ADDR"] . ":" . $_SERVER["SERVER_PORT"];
  $docRoot = $_SERVER["DOCUMENT_ROOT"];
  
  $dbName = !empty($wpdb->dbname) ? $wpdb->dbname : DB_NAME;
  $dbHost = !empty($wpdb->dbhost) ? $wpdb->dbhost : DB_HOST;
  

echo <<<HTML
<table style='width: 100%;'>
    <tr>
      <td class='tdLabel'>DB Host</td>
      <td class='tdLabel'>DB Name</td>
      <td class='tdLabel'>Table Prefix</td>
      <td class='tdLabel'>Host</td>
      <td class='tdLabel'>Server</td>
      <td class='tdLabel'>Doc Root</td>
    </tr>
    <tr>
      <td class='tdContent'>
        $dbHost  
      </td>
      <td class='tdContent'>
        $dbName
      </td>
      <td class='tdContent'>
        $wpdb->prefix
      </td>
      <td class='tdContent'>
        $srv
      </td>
      <td class='tdContent'>
        $srvAddr
      </td>
      <td class='tdContent'>
        $docRoot
      </td>
    </tr>
    <tr>
      <td class='tdLabel' colspan='6'>Post Fields to replace</td>
    </tr>
    <tr>
      <td class='tdContent' colspan='6'>$flds</td>
    </tr>
  </table>
  <br />
HTML;
  
}


// Update Options
function UpdateOptions($pTest = true)
{
  global $wpdb, $gFrom, $gTo;
  
  // Change Options
  $optNum = 0;
  $optOk = 0;
  $optErr = 0;
  
  $tSectionTitle = ($pTest ? "Checking" : "Updating") .  " Options";

  echo <<<HTML
    <br />
    <div class="divStepHeader">
      <table style="width: 100%">
        <tr>
          <td><b>$tSectionTitle</b></td>
          <td style="text-align: right;">
            <button type="button" onclick='SwitchVisibility("divOptions");'>+</button>
          </td>
        </tr>
      </table>
    </div>
HTML;

echo "<div id='divOptions' style='display: none; text-align: center;'>";

  $dtlArray = array();
  
  $tOptions = $wpdb->get_results("select * from " . $wpdb->prefix . "options where option_value like '%" . $gFrom . "%'");
  foreach ($tOptions as $o)
  {
    $optNum++;
    
    $opt = get_option($o->option_name);
    $orig = print_r($opt, true);
    $act = "";
    $tStatus = "";
    
    if (!$pTest)
    {
      $act = "";
      if (is_array($opt) || is_string($opt))
      {
        updateArray($opt);
        $act = print_r($opt, true);
        update_option($o->option_name, $opt);
      }

      // Check if substitution was ok....
      if ($act != str_replace($gFrom, $gTo, $orig))
      {
        $tStatus = "ERROR !!!!!!!!!!!!!!!!!";
        $optErr++;
      }
      else
      {
        $tStatus = "OK !!!!!!!!!!!!!!!!!";
        $optOk++;
      }

    }

    $dtlArray[] = array("Option" => "<b>" . $o->option_name . "</b> (found ..." . shortenValue($o->option_value) . "...)",
    	                "Original" => htmlentities($orig),
      	                "Actual" => htmlentities($act),
      	                "Status" => $tStatus,
      	                "Message" => "",
      	               );
  }

  PutDetailTable($dtlArray);
    
  echo "</div>"; // divOptions

  $footerClass = "divStepFooter";
  if ($optErr != 0)
    $footerClass = "divStepFooterErr";
  $finalAction = ($pTest ? "Checked" : "Updated");
  
  echo <<<HTML
    <div class="$footerClass">
      $optNum Option(s) $finalAction ($optErr errors)
    </div>
HTML;

}



// Update Posts
function UpdatePosts($pTest = true)
{
  global $wpdb, $gFrom, $gTo;

  $postsNum = 0;
  $postsOk = 0;
  $postsErr = 0;

  $tSectionTitle = ($pTest ? "Checking" : "Updating") .  " Posts";

  echo <<<HTML
    <br />
    <div class="divStepHeader">
      <table style="width: 100%">
        <tr>
          <td><b>$tSectionTitle</b></td>
          <td style="text-align: right;">
            <button type="button" onclick='SwitchVisibility("divPosts");'>+</button>
          </td>
        </tr>
      </table>
    </div>
HTML;

  echo "<div id='divPosts' style='display: none;'>";

  $dtlArray = array();

  $where = buildPostsWhere();
  $fullSql = "select count(*) from " . $wpdb->prefix . "posts where " . $where;
  $postsNum = $wpdb->get_var("select count(*) from " . $wpdb->prefix . "posts where " . $where);

  if (!$pTest)
  {
    $fullSql = "update " . $wpdb->prefix . "posts set " . buildPostsUpdateClause() . " where " . $where;
    $wpdb->query($fullSql);
  }

  $dtlArray[] = array("Option" => "",
  	              "Original" => "",
    	              "Actual" => "",
      	              "Status" => "",
      	              "Message" => "Found $postsNum Post(s) to update",
      	             );
  
  PutDetailTable($dtlArray);
  
  echo "</div>"; // divOptions

  $footerClass = "divStepFooter";
  if ($postsErr != 0)
    $footerClass = "divStepFooterErr";
  $finalAction = ($pTest ? "Checked" : "Updated");

  echo <<<HTML
    <div class="$footerClass">
      $postsNum Post(s) $finalAction ($postsErr errors)
    </div>
HTML;

}




// Update PostMetas
function UpdatePostMetas($pTest = true)
{
  global $wpdb, $gFrom, $gTo;

  $metaNum = 0;
  $metaOk = 0;
  $metaErr = 0;

  $tSectionTitle = ($pTest ? "Checking" : "Updating") .  " Post Metas";

  echo <<<HTML
    <br />
    <div class="divStepHeader">
      <table style="width: 100%">
        <tr>
          <td><b>$tSectionTitle</b></td>
          <td style="text-align: right;">
            <button type="button" onclick='SwitchVisibility("divMetas");'>+</button>
          </td>
        </tr>
      </table>
    </div>
HTML;

  echo "<div id='divMetas' style='display: none;'>";

  $dtlArray = array();

  $tMetas = $wpdb->get_results("select * from " . $wpdb->prefix . "postmeta where meta_value like '%" . $gFrom . "%'");
  foreach ($tMetas as $m)
  {
    $metaNum++;

    $meta = get_post_meta($m->post_id, $m->meta_key, true);
    $orig = print_r($meta, true);

    if (!$pTest)
    {
      updateArray($meta);
      $act = print_r($meta, true);
      update_post_meta($m->post_id, $m->meta_key, $meta);

      // Check if substitution was ok....
      if ($act != str_replace($gFrom, $gTo, $orig))
      {
        $tStatus = "ERROR !!!!!!!!!!!!!!!!!";
        $metaErr++;
      }
      else
      {
        $tStatus = "OK !!!!!!!!!!!!!!!!!";
        $metaOk++;
      }

    }
    
    $dtlArray[] = array("Option" => "",
    	                "Meta" => "<b>" . $m->meta_key . "/" . $m->post_id . "</b> (found ..." . shortenValue($m->meta_value) . "...)",
    	                "Original" => htmlentities($orig),
      	                "Actual" => htmlentities($act),
      	                "Status" => $tStatus,
      	                "Message" => "",
      	               );
    
  }

  PutDetailTable($dtlArray);

  echo "</div>"; // divMetas

  $footerClass = "divStepFooter";
  if ($metaErr != 0)
    $footerClass = "divStepFooterErr";
  $finalAction = ($pTest ? "Checked" : "Updated");
  
  echo <<<HTML
    <div class="$footerClass">
      $metaNum Meta(s) $finalAction ($metaErr errors)
    </div>
HTML;

}




function Finalize($pTest = true)
{
  echo "<br />";
  echo "<br />";
  
  if (!$pTest)
  {
    $newAddress = get_option("siteurl");
  
    echo <<<HTML
      <div style="width: 100%; text-align: center">
        To see the updated site, point Your browser here:
        <br />
        <h2><a href='$newAddress'>$newAddress</a></h2>
      </div>
HTML;
  }

}





function PutDetailTable($pArray)
{
  echo "<table style='width: 95%'>";

  echo "<tr><td colspan='2'>&nbsp;</td></tr>";

  foreach ($pArray as $i)
  {
    foreach ($i as $k => $v)
    {
      if (!empty($v))
      {
        echo "<tr>";
        echo "<td class='tdDtlLabel'>" . $k . "</td>";
        echo "<td class='tdDtlContent'>" . $v . "</td>";
        echo "</tr>";
      }
    }
    echo "<tr><td colspan='2'>&nbsp;</td></tr>";
  }
  
  echo "</table>";
}


function Separator()
{
  echo "<br />";
}



// Support functions

function updateArray(&$pOptArr)
{
  global $gFrom, $gTo;

  if (is_array($pOptArr))
  {
    foreach ($pOptArr as $k => &$v)
    {
      updateArray($v);
    }
  }
  else
  {
    $pOptArr = str_replace($gFrom, $gTo, $pOptArr);
  }
}



function shortenValue($pOptValue)
{
  global $gFrom;

  $shortened = $pOptValue;

  $pos = strpos($pOptValue, $gFrom);
  if ($pos !== false)
  {
    $pos -= 15;
    if ($pos < 0)
      $pos = 0;

    $len = strlen($gFrom) + 30;
    $shortened = substr($pOptValue, $pos, $len);
  }

  return $shortened;
}



function buildPostsWhere()
{
  global $gPostFields, $gFrom;

  $tWhere = "";

  if (count($gPostFields) > 0)
  {
    $tWhereArr = array();
    foreach ($gPostFields as $f)
    {
      $tWhereArr[] = $f . " like '%" . $gFrom . "%'";
    }
    $tWhere = "(" . implode(" or ", $tWhereArr) . ")";
  }

  if (empty($tWhere))
    $tWhere = "1=1";

  return $tWhere;
}


function buildPostsUpdateClause()
{
  global $gPostFields, $gFrom, $gTo;

  $tClause = "";

  if (count($gPostFields) > 0)
  {
    $tClauseArr = array();
    foreach ($gPostFields as $f)
    {
      $tClauseArr[] = $f . " = replace(" . $f . ", '" . $gFrom . "', '" . $gTo . "')";
    }
    $tClause = implode(", ", $tClauseArr);
  }

  return $tClause;
}
