<?php

function getDatetime($mod) // retourne la date et l'heure de maintenant au format datetime selon $mod
{
	if ($mod == 'datetimeEng')
	{
		$today = date('Y-m-d H:i:s');
	}
	elseif ($mod == 'datetimeFra')
	{
		$today = date('d/m/Y H:i:s');
	}
}