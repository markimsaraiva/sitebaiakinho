<img id="ContentBoxHeadline" class="Title" src="layouts/tibiacom/images/header/headline-team.gif" alt="Contentbox headline">
<?php
if(!defined('INITIALIZED'))
	exit;

$list = $SQL->query('SELECT ' . $SQL->fieldName('name') . ', ' . $SQL->fieldName('id') . ', ' . $SQL->fieldName('group_id') . ' FROM ' . $SQL->tableName('players') . ' WHERE ' . $SQL->fieldName('group_id') . ' IN (' . implode(',', $config['site']['groups_support']) . ') ORDER BY ' . $SQL->fieldName('group_id') . ' DESC');


$main_content .= "<table border=0 cellpadding=4 cellspacing=1 width=100%>

<tr><td class=\"white\" align=\"center\" bgcolor=\"#505050\"><b>Contato</b></td></tr>

<tr><td bgcolor=\"#D4C0A1\"><table border=\"0\" cellpadding=\"8\">
<tr><td>Support Skype:</td><td><a>#</a></td></tr>
<tr><td>Support Email:</td><td><a>loganpvp.suporte@gmail.com</a></td></tr>
</td></tr></table></td></tr>";

$main_content .= "<br>";
$main_content .= "<table border=0 cellpadding=4 cellspacing=1 width=100%>

<tr><td class=\"white\" align=\"center\" bgcolor=\"#505050\"><b>Atenção</b></td></tr>

<tr><td bgcolor=\"#D4C0A1\"><table border=\"0\" cellpadding=\"8\"><tr><td>
<b> Logan-Global </b> é um servidor alternativo, copiando em sua grande maioria o conteúdo disponibilizado na internet, da pioneira CipSoft.
Não nos responsabilizamos por perda de lucros ou má aplicação dos nossos clientes.
Se algum de nossos clientes forem pegos fazendo algo ilegal, que prejudique ao servidor, ou outros clientes, será punido; com ou sem aviso prévio.
</td></tr><tr><td>
<tr><td class=\"white\" align=\"center\" bgcolor=\"#505050\"><b>Time</b></td></tr>
</td></tr><tr><td>
- <b> ADM Steven </b>
</td></tr><tr><td>
All time (ON GAME, EMAIL AND FORUM)
</td></tr><tr><td>
- <b> ADM Bruce </b>
</td></tr><tr><td>
All time (ON GAME, EMAIL AND FORUM)
</td></tr><tr><td>
</td></tr><tr><td>
</td></tr><tr><td>
- Tutores:
(OPEN TO NEW MEMBERS)
</td></tr></table></td></tr>";
$main_content .= "<br><br>";


$main_content .= "<table border=0 cellspacing=1 cellpadding=4 width=100%>
	<td class=\"white\" colspan=\"3\" align=\"center\" bgcolor=\"#505050\"><b>Staff</b></td>
	 <tr bgcolor=\"#D4C0A1\"><td width=\"100%\"><b>Name</b></td><td><b>Group</b></td></tr>";

foreach($list as $i => $supporter)
{
	$bgcolor = (($i++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
	$main_content .= '<tr bgcolor="'.$bgcolor.'"><td>'.htmlspecialchars($supporter['name']).'</a></td><td>' . htmlspecialchars(Website::getGroupName($supporter['group_id'])) . '</td></tr>';
}

$main_content .= "<br><br>";
$main_content .= "</table>";