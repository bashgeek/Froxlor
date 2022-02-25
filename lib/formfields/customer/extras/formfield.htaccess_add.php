<?php

/**
 * This file is part of the Froxlor project.
 * Copyright (c) 2010 the Froxlor Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.froxlor.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Froxlor team <team@froxlor.org> (2010-)
 * @license    GPLv2 http://files.froxlor.org/misc/COPYING.txt
 * @package    Formfields
 *
 */
return array(
	'htaccess_add' => array(
		'title' => $lng['extras']['pathoptions_add'],
		'image' => 'fa-solid fa-folder',
		'sections' => array(
			'section_a' => array(
				'title' => $lng['extras']['pathoptions_add'],
				'image' => 'icons/htpasswd_add.png',
				'fields' => array(
					'path' => array(
						'label' => $lng['panel']['path'],
						'desc' => (\Froxlor\Settings::Get('panel.pathedit') != 'Dropdown' ? $lng['panel']['pathDescription'] : null),
						'type' => $pathSelect['type'],
						'select_var' => $pathSelect['select_var'] ?? '',
						'value' => $pathSelect['value'],
						'note' => $pathSelect['note'] ?? '',
					),
					'options_indexes' => array(
						'label' => $lng['extras']['directory_browsing'],
						'type' => 'checkbox',
						'value' => '1',
						'checked' => false
					),
					'error404path' => array(
						'label' => $lng['extras']['errordocument404path'],
						'desc' => $lng['panel']['descriptionerrordocument'],
						'type' => 'text'
					),
					'error403path' => array(
						'visible' => (\Froxlor\Settings::Get('system.webserver') == 'apache2'),
						'label' => $lng['extras']['errordocument403path'],
						'desc' => $lng['panel']['descriptionerrordocument'],
						'type' => 'text'
					),
					'error500path' => array(
						'visible' => (\Froxlor\Settings::Get('system.webserver') == 'apache2'),
						'label' => $lng['extras']['errordocument500path'],
						'desc' => $lng['panel']['descriptionerrordocument'],
						'type' => 'text'
					),
					'options_cgi' => array(
						'visible' => ($cperlenabled == 1),
						'label' => $lng['extras']['execute_perl'],
						'type' => 'checkbox',
						'value' => '1',
						'checked' => false
					)
				)
			)
		)
	)
);
