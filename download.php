<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$pageTitle 		= "Installing WindowBuilder Pro";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">
Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

<p>Develop Java graphical user interfaces in minutes for Swing, SWT, RCP and XWT with WindowBuilder Pro&rsquo;s 
WYSIWYG, drag-and-drop interface. Use wizards, editors and intelligent layout assist to automatically generate 
clean Java code, with the visual design and source always in sync.</p>

<p>These instructions assume that you have already installed some flavor of Eclipse. If you have not, Eclipse 
can be downloaded from <a href="http://www.eclipse.org/downloads/">http://www.eclipse.org/downloads/</a>. 
Instructions and system requirements for installing WindowBuilder can be found 
<a href="http://help.eclipse.org/index.jsp?topic=/org.eclipse.wb.doc.user/html/installation/index.html">here</a>.</p>

<h3>Update Sites</h3>

<table border="2">
	<tr>
	  <th></th>
	  <th colspan="3"><b>Download and Install</b></th>
	</tr>
	<tr>
	  <td><b>Version</b></td>
	  <td><b>Update Site</b></td>
	  <td><b>Zipped Update Site</b></td>
	  <td><b>Marketplace</b></td>
	</tr>
	<tr>
	  <td>Latest (1.9.6)</td>
	  <td><a href="http://download.eclipse.org/windowbuilder/latest/">link</a></td>
	  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/latest/repository.zip">link</a></td>
	   <td>
	  	<div class="drag_installbutton drag_installbutton_v2">
			<a href="http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=4008412" class="drag"
			title="Drag to your running Eclipse* workspace. *Requires Eclipse Marketplace Client"><span
				class="btn btn-default"><i class="fa fa-download orange"></i> Install</span>
			<div class="tooltip">
				<h3>Drag to Install!</h3>Drag to your running Eclipse<sup>*</sup> workspace.
				<br /><sup>*</sup>Requires Eclipse Marketplace Client</div></a></div>
	  </td>
	<tr>
	  <td>Last good build (1.9.7-pre)</td>
	  <td><a href="http://download.eclipse.org/windowbuilder/lastgoodbuild/">link</a></td>
	  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/lastgoodbuild/repository.zip">link</a></td>
	  <td>
		<div class="drag_installbutton drag_installbutton_v2">
			<a href="http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=4961416" class="drag"
				title="Drag to your running Eclipse* workspace. *Requires Eclipse Marketplace Client"><span
					class="btn btn-default"><i class="fa fa-download orange"></i> Install</span>
			<div class="tooltip">
				<h3>Drag to Install!</h3>Drag to your running Eclipse<sup>*</sup> workspace.
				<br /><sup>*</sup>Requires Eclipse Marketplace Client
			</div></a></div>
	  </td> 
	</tr>
	<tr>
	  <td>1.9.6 (Permanent)</td>
	  <td><a href="http://download.eclipse.org/windowbuilder/1.9.6/">link</a></td>
	  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.6/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>1.9.5 (removed)</td>
	  <td>removed</td>
	  <td>removed</td>
	</tr>
	<tr>
	  <td>1.9.4 (Permanent)</td>
	  <td><a href="http://download.eclipse.org/windowbuilder/1.9.4/">link</a></td>
	  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.4/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>1.9.3 (Permanent)</td>
	  <td><a href="http://download.eclipse.org/windowbuilder/1.9.3/">link</a></td>
	  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.3/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>1.9.2 (Permanent)</td>
	  <td><a href="http://download.eclipse.org/windowbuilder/1.9.2/">link</a></td>
	  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.2/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>1.9.1 (Permanent)</td>
	  <td><a href="http://download.eclipse.org/windowbuilder/1.9.1/">link</a></td>
	  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.1/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>1.9.0 (Permanent)</td>
	  <td><a href="http://download.eclipse.org/windowbuilder/1.9.0/">link</a></td>
	  <td><a href="http://eclipse.org/downloads/download.php?file=/windowbuilder/1.9.0/repository.zip">link</a></td>
	</tr>
	<tr>
	  <td>Archives</td>
	  <td><a href="http://archive.eclipse.org/windowbuilder/">link</a></td>
	  <td></td>
	</tr>
</table>

<p> </p>
<p><b><i>Installing the Update Site or Zip editions requires the full Eclipse SDK including the JDT and PDE. 
Use the Eclipse Classic, Java EE or RCP/Plug-in Developers distribution or install the JDT and PDE separately.</i></b></p>

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
