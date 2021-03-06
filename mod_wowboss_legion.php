<?php

/* WOW BOSS MODULE - LEGION EDITION - 8.2.0
   ======================================== */
 
// no direct access
defined('_JEXEC') or die;

$document = JFactory::getDocument();

// Include the syndicate functions only once
require_once( dirname(__FILE__) . '/helper.php' );

// Base path for image assets
$module_media_url = JURI::base() . "media/" . $module->module . "/img/"; 

// Creating instance
$wblegion = ModWoWBossLegionHelper::settings($params);

//Require to provide the necessary class
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

// Checking joomla version version to see if jquery is needed
JLoader::import( 'joomla.version' );
$version = new JVersion();
if (version_compare( $version->RELEASE, '2.5', '<=')) {
    if ( $params->get('loadjquery') == "yes" ) {
        $document = JFactory::getDocument();
        $document->addScript("https://code.jquery.com/jquery-3.2.1.min.js");
   }
} else {
    JHtml::_('jquery.framework');
}

// Loading JS
$document->addScript(JURI::base() .'/media/mod_wowboss_legion/js/mod_wowboss_legion.js');


// Creating raids array
$raids = array();

if ($params->get('emerald') == "show"){
    
    // The Emerald Nightmare
    $emeraldbosses = array (
        new LegionBoss (
            array(
                "id" => "nythendra",
                "name" => JText::_('MOD_WOWBOSS_LEGION_NYTHENDRA'),
                "status" => $params->get('nythendra'),
                "bosslink" => $params->get('nythendralink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "renferal",
                "name" => JText::_('MOD_WOWBOSS_LEGION_RENFERAL'),
                "status" => $params->get('renferal'),
                "bosslink" => $params->get('renferallink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "ilgynoth",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ILGYNOTH'),
                "status" => $params->get('ilgynoth'),
                "bosslink" => $params->get('ilgynothlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "ursoc",
                "name" => JText::_('MOD_WOWBOSS_LEGION_URSOC'),
                "status" => $params->get('ursoc'),
                "bosslink" => $params->get('ursoclink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "dragons",
                "name" => JText::_('MOD_WOWBOSS_LEGION_DRAGONS'),
                "status" => $params->get('dragons'),
                "bosslink" => $params->get('dragonslink')
            )
        ),  
        new LegionBoss (
            array(
                "id" => "cenarius",
                "name" => JText::_('MOD_WOWBOSS_LEGION_CENARIUS'),
                "status" => $params->get('cenarius'),
                "bosslink" => $params->get('cenariuslink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "xavius",
                "name" => JText::_('MOD_WOWBOSS_LEGION_XAVIUS'),
                "status" => $params->get('xavius'),
                "bosslink" => $params->get('xaviuslink')
            )
        )
    );
    
    $emerald = new LegionRaid(
        array(
            "id" => "emerald",
            "name" => JText::_('MOD_WOWBOSS_LEGION_EMERALD'),
            "expview" => $params->get('emerald-expview'),
            "bosslist" => $emeraldbosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $emerald);
    
}


if ($params->get('trial') == "show"){
    
    // Trial of Valor
    $trialbosses = array (
        new LegionBoss (
            array(
                "id" => "odyn",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ODYN'),
                "status" => $params->get('odyn'),
                "bosslink" => $params->get('odynlink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "guarm",
                "name" => JText::_('MOD_WOWBOSS_LEGION_GUARM'),
                "status" => $params->get('guarm'),
                "bosslink" => $params->get('guarmlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "helya",
                "name" => JText::_('MOD_WOWBOSS_LEGION_HELYA'),
                "status" => $params->get('helya'),
                "bosslink" => $params->get('helyalink')
            )
        )
    );
    
    $trial = new LegionRaid(
        array(
            "id" => "trial",
            "name" => JText::_('MOD_WOWBOSS_LEGION_TRIAL'),
            "expview" => $params->get('trial-expview'),
            "bosslist" => $trialbosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $trial);
    
}


if ($params->get('nighthold') == "show"){
    
    // The Nighthold
    $nightholdbosses = array (
        new LegionBoss (
            array(
                "id" => "skorpyron",
                "name" => JText::_('MOD_WOWBOSS_LEGION_SKORPYRON'),
                "status" => $params->get('skorpyron'),
                "bosslink" => $params->get('skorpyronlink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "anomaly",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ANOMALY'),
                "status" => $params->get('anomaly'),
                "bosslink" => $params->get('anomalylink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "trilliax",
                "name" => JText::_('MOD_WOWBOSS_LEGION_TRILLIAX'),
                "status" => $params->get('trilliax'),
                "bosslink" => $params->get('trilliaxlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "aluriel",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ALURIEL'),
                "status" => $params->get('aluriel'),
                "bosslink" => $params->get('aluriellink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "telarn",
                "name" => JText::_('MOD_WOWBOSS_LEGION_TELARN'),
                "status" => $params->get('telarn'),
                "bosslink" => $params->get('telarnlink')
            )
        ),  
        new LegionBoss (
            array(
                "id" => "etraeus",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ETRAEUS'),
                "status" => $params->get('etraeus'),
                "bosslink" => $params->get('etraeuslink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "tichondrius",
                "name" => JText::_('MOD_WOWBOSS_LEGION_TICHONDRIUS'),
                "status" => $params->get('tichondrius'),
                "bosslink" => $params->get('tichondriuslink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "krosus",
                "name" => JText::_('MOD_WOWBOSS_LEGION_KROSUS'),
                "status" => $params->get('krosus'),
                "bosslink" => $params->get('krosuslink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "elisande",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ELISANDE'),
                "status" => $params->get('elisande'),
                "bosslink" => $params->get('elisandelink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "guldan",
                "name" => JText::_('MOD_WOWBOSS_LEGION_GULDAN'),
                "status" => $params->get('guldan'),
                "bosslink" => $params->get('guldanlink')
            )
        )
    );
    
    $nighthold = new LegionRaid(
        array(
            "id" => "nighthold",
            "name" => JText::_('MOD_WOWBOSS_LEGION_NIGHTHOLD'),
            "expview" => $params->get('nighthold-expview'),
            "bosslist" => $nightholdbosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $nighthold);
    
}


if ($params->get('sargeras') == "show"){
    
    // Tomb Of Sargeras
    $sargerasbosses = array (
        new LegionBoss (
            array(
                "id" => "goroth",
                "name" => JText::_('MOD_WOWBOSS_LEGION_GOROTH'),
                "status" => $params->get('goroth'),
                "bosslink" => $params->get('gorothlink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "demonicinquisition",
                "name" => JText::_('MOD_WOWBOSS_LEGION_DEMONICINQUISITION'),
                "status" => $params->get('demonicinquisition'),
                "bosslink" => $params->get('demonicinquisitionlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "harjatan",
                "name" => JText::_('MOD_WOWBOSS_LEGION_HARJATAN'),
                "status" => $params->get('harjatan'),
                "bosslink" => $params->get('harjatanlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "sistersofthemoon",
                "name" => JText::_('MOD_WOWBOSS_LEGION_SISTERSOFTHEMOON'),
                "status" => $params->get('sistersofthemoon'),
                "bosslink" => $params->get('sistersofthemoonlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "mistresssasszine",
                "name" => JText::_('MOD_WOWBOSS_LEGION_MISTRESSSASSZINE'),
                "status" => $params->get('mistresssasszine'),
                "bosslink" => $params->get('mistresssasszinelink')
            )
        ),  
        new LegionBoss (
            array(
                "id" => "desolatehost",
                "name" => JText::_('MOD_WOWBOSS_LEGION_DESOLATEHOST'),
                "status" => $params->get('desolatehost'),
                "bosslink" => $params->get('desolatehostlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "maidenofvigilance",
                "name" => JText::_('MOD_WOWBOSS_LEGION_MAIDENOFVIGILANCE'),
                "status" => $params->get('maidenofvigilance'),
                "bosslink" => $params->get('maidenofvigilancelink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "fallenavatar",
                "name" => JText::_('MOD_WOWBOSS_LEGION_FALLENAVATAR'),
                "status" => $params->get('fallenavatar'),
                "bosslink" => $params->get('fallenavatarlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "kiljaeden",
                "name" => JText::_('MOD_WOWBOSS_LEGION_KILJAEDEN'),
                "status" => $params->get('kiljaeden'),
                "bosslink" => $params->get('kiljaedenlink')
            )
        )
    );
    
    $sargeras = new LegionRaid(
        array(
            "id" => "sargeras",
            "name" => JText::_('MOD_WOWBOSS_LEGION_SARGERAS'),
            "expview" => $params->get('sargeras-expview'),
            "bosslist" => $sargerasbosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $sargeras);
    
}


if ($params->get('antorus') == "show"){
    
    // Antorus
    $antorusbosses = array (
        new LegionBoss (
            array(
                "id" => "garothi",
                "name" => JText::_('MOD_WOWBOSS_LEGION_GAROTHI'),
                "status" => $params->get('garothi'),
                "bosslink" => $params->get('garothilink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "felhounds",
                "name" => JText::_('MOD_WOWBOSS_LEGION_FELHOUNDS'),
                "status" => $params->get('felhounds'),
                "bosslink" => $params->get('felhoundslink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "highcommand",
                "name" => JText::_('MOD_WOWBOSS_LEGION_HIGH_COMMAND'),
                "status" => $params->get('highcommand'),
                "bosslink" => $params->get('highcommandlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "hasabel",
                "name" => JText::_('MOD_WOWBOSS_LEGION_HASABEL'),
                "status" => $params->get('hasabel'),
                "bosslink" => $params->get('hasabellink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "eonar",
                "name" => JText::_('MOD_WOWBOSS_LEGION_EONAR'),
                "status" => $params->get('eonar'),
                "bosslink" => $params->get('eonarlink')
            )
        ),  
        new LegionBoss (
            array(
                "id" => "imonar",
                "name" => JText::_('MOD_WOWBOSS_LEGION_IMONAR'),
                "status" => $params->get('imonar'),
                "bosslink" => $params->get('imonarlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "kingaroth",
                "name" => JText::_('MOD_WOWBOSS_LEGION_KINGAROTH'),
                "status" => $params->get('kingaroth'),
                "bosslink" => $params->get('kingarothlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "varimathras",
                "name" => JText::_('MOD_WOWBOSS_LEGION_VARIMATHRAS'),
                "status" => $params->get('varimathras'),
                "bosslink" => $params->get('varimathraslink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "shivarra",
                "name" => JText::_('MOD_WOWBOSS_LEGION_SHIVARRA'),
                "status" => $params->get('shivarra'),
                "bosslink" => $params->get('shivarralink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "aggramar",
                "name" => JText::_('MOD_WOWBOSS_LEGION_AGGRAMAR'),
                "status" => $params->get('aggramar'),
                "bosslink" => $params->get('aggramarlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "argus",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ARGUS'),
                "status" => $params->get('argus'),
                "bosslink" => $params->get('arguslink')
            )
        )
    );
    
    $antorus = new LegionRaid(
        array(
            "id" => "antorus",
            "name" => JText::_('MOD_WOWBOSS_LEGION_ANTORUS'),
            "expview" => $params->get('antorus-expview'),
            "bosslist" => $antorusbosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $antorus);
    
}


if ($params->get('uldir') == "show"){
    
    // Uldir
    $uldirbosses = array (
        new LegionBoss (
            array(
                "id" => "taloc",
                "name" => JText::_('MOD_WOWBOSS_LEGION_TALOC'),
                "status" => $params->get('taloc'),
                "bosslink" => $params->get('taloclink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "mother",
                "name" => JText::_('MOD_WOWBOSS_LEGION_MOTHER'),
                "status" => $params->get('mother'),
                "bosslink" => $params->get('motherlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "fetid",
                "name" => JText::_('MOD_WOWBOSS_LEGION_FETID'),
                "status" => $params->get('fetid'),
                "bosslink" => $params->get('fetidlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "zekvoz",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ZEKVOZ'),
                "status" => $params->get('zekvoz'),
                "bosslink" => $params->get('zekvozlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "vectis",
                "name" => JText::_('MOD_WOWBOSS_LEGION_VECTIS'),
                "status" => $params->get('vectis'),
                "bosslink" => $params->get('vectislink')
            )
        ),  
        new LegionBoss (
            array(
                "id" => "zul",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ZUL'),
                "status" => $params->get('zul'),
                "bosslink" => $params->get('zullink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "mythrax",
                "name" => JText::_('MOD_WOWBOSS_LEGION_MYTHRAX'),
                "status" => $params->get('mythrax'),
                "bosslink" => $params->get('mythraxlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "ghuun",
                "name" => JText::_('MOD_WOWBOSS_LEGION_GHUUN'),
                "status" => $params->get('ghuun'),
                "bosslink" => $params->get('ghuunlink')
            )
        )
    );
    
    $uldir = new LegionRaid(
        array(
            "id" => "uldir",
            "name" => JText::_('MOD_WOWBOSS_LEGION_ULDIR'),
            "expview" => $params->get('uldir-expview'),
            "bosslist" => $uldirbosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $uldir);
    
    
    
}

if ($params->get('dazar') == "show"){
    
    // Battle of Dazar'Alor
    $dazarbosses = array (
        new LegionBoss (
            array(
                "id" => "champion",
                "name" => JText::_('MOD_WOWBOSS_LEGION_CHAMPION'),
                "status" => $params->get('champion'),
                "bosslink" => $params->get('championlink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "jadefire",
                "name" => JText::_('MOD_WOWBOSS_LEGION_JADEFIRE'),
                "status" => $params->get('jadefire'),
                "bosslink" => $params->get('jadefirelink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "grong",
                "name" => JText::_('MOD_WOWBOSS_LEGION_GRONG'),
                "status" => $params->get('grong'),
                "bosslink" => $params->get('gronglink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "opulence",
                "name" => JText::_('MOD_WOWBOSS_LEGION_OPULENCE'),
                "status" => $params->get('opulence'),
                "bosslink" => $params->get('opulencelink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "conclave",
                "name" => JText::_('MOD_WOWBOSS_LEGION_CONCLAVE'),
                "status" => $params->get('conclave'),
                "bosslink" => $params->get('conclavelink')
            )
        ),  
        new LegionBoss (
            array(
                "id" => "rastakhan",
                "name" => JText::_('MOD_WOWBOSS_LEGION_RASTAKHAN'),
                "status" => $params->get('rastakhan'),
                "bosslink" => $params->get('rastakhanlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "mekkatorque",
                "name" => JText::_('MOD_WOWBOSS_LEGION_MEKKATORQUE'),
                "status" => $params->get('mekkatorque'),
                "bosslink" => $params->get('mekkatorquelink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "blockade",
                "name" => JText::_('MOD_WOWBOSS_LEGION_BLOCKADE'),
                "status" => $params->get('blockade'),
                "bosslink" => $params->get('blockadelink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "jaina",
                "name" => JText::_('MOD_WOWBOSS_LEGION_JAINA'),
                "status" => $params->get('jaina'),
                "bosslink" => $params->get('jainalink')
            )
        )
    );
    
    $dazar = new LegionRaid(
        array(
            "id" => "dazar",
            "name" => JText::_('MOD_WOWBOSS_LEGION_DAZAR'),
            "expview" => $params->get('dazar-expview'),
            "bosslist" => $dazarbosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $dazar);
    
    
    
}


if ($params->get('crucible') == "show"){
    
    // Crucible of Storms
    $cruciblebosses = array (
        new LegionBoss (
            array(
                "id" => "cabal",
                "name" => JText::_('MOD_WOWBOSS_LEGION_CABAL'),
                "status" => $params->get('cabal'),
                "bosslink" => $params->get('caballink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "uunat",
                "name" => JText::_('MOD_WOWBOSS_LEGION_UUNAT'),
                "status" => $params->get('uunat'),
                "bosslink" => $params->get('uunatlink')
            )
        )
    );
    
    $crucible = new LegionRaid(
        array(
            "id" => "crucible",
            "name" => JText::_('MOD_WOWBOSS_LEGION_CRUCIBLE'),
            "expview" => $params->get('crucible-expview'),
            "bosslist" => $cruciblebosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $crucible);
    
    
    
}



if ($params->get('palace') == "show"){
    
    // The Eternal Palace
    $palacebosses = array (
        new LegionBoss (
            array(
                "id" => "sivara",
                "name" => JText::_('MOD_WOWBOSS_LEGION_SIVARA'),
                "status" => $params->get('sivara'),
                "bosslink" => $params->get('sivaralink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "behemoth",
                "name" => JText::_('MOD_WOWBOSS_LEGION_BEHEMOTH'),
                "status" => $params->get('behemoth'),
                "bosslink" => $params->get('behemothlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "radiance",
                "name" => JText::_('MOD_WOWBOSS_LEGION_RADIANCE'),
                "status" => $params->get('radiance'),
                "bosslink" => $params->get('radiancelink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "ashvane",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ASHVANE'),
                "status" => $params->get('ashvane'),
                "bosslink" => $params->get('ashvanelink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "orgozoa",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ORGOZOA'),
                "status" => $params->get('orgozoa'),
                "bosslink" => $params->get('orgozoalink')
            )
        ),  
        new LegionBoss (
            array(
                "id" => "court",
                "name" => JText::_('MOD_WOWBOSS_LEGION_COURT'),
                "status" => $params->get('court'),
                "bosslink" => $params->get('courtlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "zaqul",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ZAQUL'),
                "status" => $params->get('zaqul'),
                "bosslink" => $params->get('zaqullink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "azshara",
                "name" => JText::_('MOD_WOWBOSS_LEGION_AZSHARA'),
                "status" => $params->get('azshara'),
                "bosslink" => $params->get('azsharalink')
            )
        )
    );
    
    $palace = new LegionRaid(
        array(
            "id" => "palace",
            "name" => JText::_('MOD_WOWBOSS_LEGION_PALACE'),
            "expview" => $params->get('palace-expview'),
            "bosslist" => $palacebosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $palace);
    
    
    
}



if ($params->get('nyalotha') == "show"){
    
    // Ny'alotha, the Waking City
    $nyalothabosses = array (
        new LegionBoss (
            array(
                "id" => "wrathion",
                "name" => JText::_('MOD_WOWBOSS_LEGION_WRATHION'),
                "status" => $params->get('wrathion'),
                "bosslink" => $params->get('wrathionlink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "maut",
                "name" => JText::_('MOD_WOWBOSS_LEGION_MAUT'),
                "status" => $params->get('maut'),
                "bosslink" => $params->get('mautlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "skitra",
                "name" => JText::_('MOD_WOWBOSS_LEGION_SKITRA'),
                "status" => $params->get('skitra'),
                "bosslink" => $params->get('skitralink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "xanesh",
                "name" => JText::_('MOD_WOWBOSS_LEGION_XANESH'),
                "status" => $params->get('xanesh'),
                "bosslink" => $params->get('xaneshlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "hivemind",
                "name" => JText::_('MOD_WOWBOSS_LEGION_HIVEMIND'),
                "status" => $params->get('hivemind'),
                "bosslink" => $params->get('hivemindlink')
            )
        ),  
        new LegionBoss (
            array(
                "id" => "shadhar",
                "name" => JText::_('MOD_WOWBOSS_LEGION_SHADHAR'),
                "status" => $params->get('shadhar'),
                "bosslink" => $params->get('shadharlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "drestagath",
                "name" => JText::_('MOD_WOWBOSS_LEGION_DRESTAGATH'),
                "status" => $params->get('drestagath'),
                "bosslink" => $params->get('drestagathlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "ilgynothbfa",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ILGYNOTHBFA'),
                "status" => $params->get('ilgynothbfa'),
                "bosslink" => $params->get('ilgynothbfalink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "vexiona",
                "name" => JText::_('MOD_WOWBOSS_LEGION_VEXIONA'),
                "status" => $params->get('vexiona'),
                "bosslink" => $params->get('vexionalink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "raden",
                "name" => JText::_('MOD_WOWBOSS_LEGION_RADEN'),
                "status" => $params->get('raden'),
                "bosslink" => $params->get('radenlink')
            )
        ),  
        new LegionBoss (
            array(
                "id" => "carapace",
                "name" => JText::_('MOD_WOWBOSS_LEGION_CARAPACE'),
                "status" => $params->get('carapace'),
                "bosslink" => $params->get('carapacelink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "nzoth",
                "name" => JText::_('MOD_WOWBOSS_LEGION_NZOTH'),
                "status" => $params->get('nzoth'),
                "bosslink" => $params->get('nzothlink')
            )
        )
    );
    
    $nyalotha = new LegionRaid(
        array(
            "id" => "nyalotha",
            "name" => JText::_('MOD_WOWBOSS_LEGION_NYALOTHA'),
            "expview" => $params->get('nyalotha-expview'),
            "bosslist" => $nyalothabosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $nyalotha);
    
    
    
}

require( JModuleHelper::getLayoutPath('mod_wowboss_legion'));


?>