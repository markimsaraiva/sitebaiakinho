<?PHP
# Account Maker Config
$config['site']['serverPath'] = "/home/baiakinho/";
$config['site']['useServerConfigCache'] = false;
$towns_list = array(1 => 'Venore', 2 => 'Thais', 3 => 'Kazordoon', 4 => 'Carlin', 5 => 'Ab Dendriel', 6 => 'Rookgaard', 7 => 'Liberty Bay', 8 => 'Port Hope', 9 => 'Ankrahmun', 10 => 'Darashia', 11 => 'Edron', 12 => 'Svargrond', 13 => 'Yalahar', 14 => 'Farmine', 15 => 'Gray Beach', 16 => 'Roshamuul', 30 => 'Rathleton');

$config['site']['outfit_images_url'] = 'http://outfit-images.ots.me/outfit.php';
$config['site']['addons_images_url'] = 'images/addons/';
$config['site']['addons_images_extension'] = '.gif';
$config['site']['mounts_images_url'] = 'images/mounts/';
$config['site']['mounts_images_extension'] = '.gif';
$config['site']['item_images_url'] = '/images/items/';
$config['site']['item_images_extension'] = '.gif';
$config['site']['flag_images_url'] = 'http://flag-images.ots.me/';
$config['site']['flag_images_extension'] = '.png';
$config['site']['serverName'] = 'seu-Global';

$config['lateral']['top_level'] = false;
$config['lateral']['premium_box'] = true;
$config['lateral']['server_info'] = true;
$config['lateral']['videos'] = true;
$config['lateral']['screenshot'] = false;
$config['lateral']['facebook'] = true;
$config['lateral']['facebook_link'] = 'http://facebook.com/loganglobal';

# Create Account Options
$config['site']['one_email'] = true;
$config['site']['create_account_verify_mail'] = false;
$config['site']['verify_code'] = true;
$config['site']['email_days_to_change'] = 3;
$config['site']['newaccount_premdays'] = 3065;
$config['site']['send_register_email'] = false;

# Create Character Options
$config['site']['newchar_vocations'] = array(0 => 'Eitacaray');
$config['site']['newchar_towns'] = array(6);
$config['site']['max_players_per_account'] = 7;

# PAGE: characters.php
$config['site']['quests'] = array(
"Demon Helmet" => 0,
"Ferumbra's Ascandant" => 0,
"In Service of Yalahar" => 0,
"Pits Of Inferno" => 0,
"The Ancient Tombs" => 0,
"The Annihilator" => 0,
"The Demon Oak" => 0,
"Wrath Of The Emperor" => 0);

# Emails Config
$config['site']['lost_acc'] = true;
$config['site']['send_emails'] = true;
$config['site']['mail_address'] = "";
$config['site']['mail_senderName'] = "";
$config['site']['smtp_enabled'] = true;
$config['site']['smtp_host'] = "";
$config['site']['smtp_port'] = 465; 
$config['site']['smtp_auth'] = true;
$config['site']['smtp_user'] = "";
$config['site']['smtp_pass'] = "";
$config['site']['smtp_secure'] = true;



# PAGE: whoisonline.php
$config['site']['private-servlist.com_server_id'] = 1;
/*
Server id on 'private-servlist.com' to show Players Online Chart (whoisonline.php page), set 0 to disable Chart feature.
To use this feature you must register on 'private-servlist.com' and add your server.
Format: number, 0 [disable] or higher
*/

# PAGE: characters.php
$config['site']['show_stats_info'] = true;
$config['site']['show_skills_info'] = true;
$config['site']['show_vip_storage'] = 0;

# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = true;
$config['site']['send_mail_when_generate_reckey'] = true;
$config['site']['generate_new_reckey'] = true;
$config['site']['generate_new_reckey_price'] = 10;

# PAGE: guilds.php
$config['site']['guild_need_level'] = 1;
$config['site']['guild_need_pacc'] = false;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 2000;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 9999;
$config['site']['access_tickers'] = 9999;
$config['site']['access_news'] = 9999;

$config['lateral']['facebook'] = true;
$config['lateral']['facebook_link'] = 'Logan';

# PAGE: latestnews.php
$config['site']['news_limit'] = 6;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 40;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4, 5, 6);
$config['site']['players_group_id_block'] = 2;

# PAGE: highscores.php
$config['site']['groups_hidden'] = array(2, 3, 4, 5, 6);
$config['site']['accounts_hidden'] = array(1);

# PAGE: shopsystem.php
$config['site']['shop_system'] = false;

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

# Layout Config
$config['site']['layout'] = 'tibiacom';
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#D4C0A1';
$config['site']['lightborder'] = '#F1E0C6';
$config['site']['download_page'] = false;
$config['site']['serverinfo_page'] = true;

############################
## PagSeguro/Paypal Email ##
############################
$config['pagseguro']['email'] = 'suporte.p2games@gmail.com'; ## EMAIL PAGSEGURO ##
$config['paypal']['email'] = 'suporte.p2games@gmail.com'; ## EMAIL PAYPAL ##

## Formas de pagamento [1 = ativo | 0 = inativo] ##
$config['site']['pagseguro'] = 1;
$config['site']['paypal'] = 1;
$config['site']['caixa'] = 1;
$config['site']['bonusPoints'] = 0;

#####################
## Nome do Produto ##
#####################
$config['pagseguro']['produtoNome'] = 'Premium Points';

#############################
######### C A I X A ########
#############################
#! Informações do pagamento com caixa economica federal !#
$config['site']['CaixaCont'] = "
Conta Poupanca xxx: xxxxxxxx-x
Ag: xxxx
Favorecido: ADM LOGAN
"; 