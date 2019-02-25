<?php
if ($action == ""){
$main_content = "
<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
<tr>
<td style=\"background: " . $config['site']['vdarkborder'] . "\" class=\"white\" width=\"150\"><b>Aggressor</b></td>
<td style=\"background: " . $config['site']['vdarkborder'] . "\" class=\"white\"><b>Information</b></td>
<td style=\"background: " . $config['site']['vdarkborder'] . "\" class=\"white\" width=\"150\"><b>Enemy</b></td>
</tr>";
 
$count = 0;
foreach($SQL->query('SELECT * FROM `guild_wars` WHERE `status` IN (1,4) OR ((`end` >= (UNIX_TIMESTAMP() - 604800) OR `end` = 0) AND `status` IN (0,5)) AND `guild_id` = '.$id.';') as $war)
{
	$a = $ots->createObject('Guild');
	$a->load($war['guild_id']);
	if(!$a->isLoaded())
		continue;
 
	$e = $ots->createObject('Guild');
	$e->load($war['enemy_id']);
	if(!$e->isLoaded())
		continue;
 
	$alogo = $a->getCustomField('logo_gfx_name');
	if(empty($alogo) || !file_exists('guilds/' . $alogo))
		$alogo = 'default_logo.gif';
 
	$elogo = $e->getCustomField('logo_gfx_name');
	if(empty($elogo) || !file_exists('guilds/' . $elogo))
		$elogo = 'default_logo.gif';
 
	$count++;
	$main_content .= "<tr style=\"background: " . (is_int($count / 2) ? $config['site']['darkborder'] : $config['site']['lightborder']) . ";\">
<td align=\"center\"><a href=\"?subtopic=guilds&action=show&guild=".$a->getId()."\"><img src=\"guilds/".$alogo."\" width=\"64\" height=\"64\" border=\"0\"/><br />".$a->getName()."</a></td>
<td class=\"\" align=\"center\">";
	switch($war['status'])
	{
		case 0:
		{
			$main_content .= "<b>Pending acceptation</b><br />Invited on " . date("M d Y, H:i:s", $war['begin']) . " for " . ($war['end'] > 0 ? (($war['end'] - $war['begin']) / 86400) : "unspecified") . " days. The frag limit is set to " . $war['frags'] . " frags, " . ($war['payment'] > 0 ? "with payment of " . $war['payment'] . " bronze coins." : "without any payment.")."<br />Will expire in three days.";
			break;
		}
 
		case 3:
		{
			$main_content .= "<s>Canceled invitation</s><br />Sent invite on " . date("M d Y, H:i:s", $war['begin']) . ", canceled on " . date("M d Y, H:i:s", $war['end']) . ".";
			break;
		}
 
		case 2:
		{
			$main_content .= "Rejected invitation<br />Invited on " . date("M d Y, H:i:s", $war['begin']) . ", rejected on " . date("M d Y, H:i:s", $war['end']) . ".";
			break;
		}
 
		case 1:
		{
			$main_content .= "<font size=\"12\"><span style=\"color: red;\">" . $war['guild_kills'] . "</span> : <span style=\"color: lime;\">" . $war['enemy_kills'] . "</span></font><br /><br /><span style=\"color: darkred; font-weight: bold;\">On a brutal war</span><br />Began on " . date("M d Y, H:i:s", $war['begin']) . ($war['end'] > 0 ? ", will end up at " . date("M d Y, H:i:s", $war['end']) : "") . ".<br />The frag limit is set to " . $war['frags'] . " frags, " . ($war['payment'] > 0 ? "with payment of " . $war['payment'] . " bronze coins." : "without any payment.");
			break;
		}
 
		case 4:
		{
			$main_content .= "<font size=\"12\"><span style=\"color: red;\">" . $war['guild_kills'] . "</span> : <span style=\"color: lime;\">" . $war['enemy_kills'] . "</span></font><br /><br /><span style=\"color: darkred;\">Pending end</span><br />Began on " . date("M d Y, H:i:s", $war['begin']) . ", signed armstice on " . date("M d Y, H:i:s", $war['end']) . ".<br />Will expire after reaching " . $war['frags'] . " frags. ".($war['payment'] > 0 ? "The payment is set to " . $war['payment'] . " bronze coins." : "There's no payment set.");
			break;
		}
 
		case 5:
		{
			$main_content .= "<b>Ended</b><br />Began on " . date("M d Y, H:i:s", $war['begin']) . ", ended on " . date("M d Y, H:i:s", $war['end']) . ". Frag statistics: <b><span style=\"color: red;\">" . $war['guild_kills'] . "</span></b> to <b><span style=\"color: lime;\">" . $war['enemy_kills'] . "</span></b>.";
			break;
		}
 
		default:
		{
			$main_content .= "Unknown, please contact with gamemaster.";
			break;
		}
	}
 
	$main_content .= "<br /><br /><a onclick=\"show_hide('war-details:" . $war['id'] . "'); return false;\" style=\"cursor: pointer;\">&raquo; Details &laquo;</a></td>
<td align=\"center\"><a href=\"?subtopic=guilds&action=show&guild=".$e->getId()."\"><img src=\"guilds/".$elogo."\" width=\"64\" height=\"64\" border=\"0\"/><br />".$e->getName()."</a></td>
</tr>
<tr id=\"war-details:" . $war['id'] . "\" style=\"display: none; background: " . (is_int($count / 2) ? $config['site']['darkborder'] : $config['site']['lightborder']) . ";\">
<td colspan=\"3\">";
	if(in_array($war['status'], array(1,4,5)))
	{
		$deaths = $SQL->query('SELECT `pd`.`id`, `pd`.`date`, `gk`.`guild_id` AS `enemy`, `p`.`name`, `pd`.`level`
FROM `guild_kills` gk
	LEFT JOIN `player_deaths` pd ON `gk`.`death_id` = `pd`.`id`
	LEFT JOIN `players` p ON `pd`.`player_id` = `p`.`id`
WHERE `gk`.`war_id` = ' . $war['id'] . ' AND `p`.`deleted` = 0
	ORDER BY `pd`.`date` DESC')->fetchAll();
		if(!empty($deaths))
		{
			foreach($deaths as $death)
			{
				$killers = $SQL->query('SELECT `p`.`name` AS `player_name`, `p`.`deleted` AS `player_exists`, `k`.`war` AS `is_war`
FROM `killers` k
	LEFT JOIN `player_killers` pk ON `k`.`id` = `pk`.`kill_id`
	LEFT JOIN `players` p ON `p`.`id` = `pk`.`player_id`
WHERE `k`.`death_id` = ' . $death['id'] . '
	ORDER BY `k`.`final_hit` DESC, `k`.`id` ASC')->fetchAll();
				$count = count($killers); $i = 0;
 
				$others = false;
				$main_content .= date("j M Y, H:i", $death['date']) . " <span style=\"font-weight: bold; color: " . ($death['enemy'] == $war['guild_id'] ? "red" : "lime") . ";\">+</span>
<a href=\"?subtopic=characters&name=" . urlencode($death['name']) . "\"><b>".$death['name']."</b></a> ";
				foreach($killers as $killer)
				{
					$i++;
					if($killer['is_war'] != 0)
					{
						if($i == 1)
							$main_content .= "killed at level <b>".$death['level']."</b> by ";
						else if($i == $count && $others == false)
							$main_content .= " and by ";
						else
							$main_content .= ", ";
 
						if($killer['player_exists'] == 0)
							$main_content .= "<a href=\"?subtopic=characters&name=".urlencode($killer['player_name'])."\">";
 
						$main_content .= $killer['player_name'];
						if($killer['player_exists'] == 0)
							$main_content .= "</a>";
					}
					else
						$others = true;
 
					if($i == $count)
					{
						if($others == true)
							$main_content .= " and few others";
 
						$main_content .= ".<br />";
					}
				}
			}
		}
		else
			$main_content .= "<center>There were no frags on this war so far.</center>";
	}
	else
		$main_content .= "<center>This war did not began yet.</center>";
 
	$main_content .= "</td>
</tr>";
}
 
if($count == 0)
	$main_content .= "<tr style=\"background: ".$config['site']['darkborder'].";\">
<td colspan=\"3\" align='center'>Currently there are no active wars.</td>
</tr>";
 
$main_content .= "</table>";

}
?>