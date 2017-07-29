<?php
	$path = '../../';
	$subtitle = 'Downloads<br/>Linux';
	include $path . 'start.inc';	
?>
	<meta name="author" content="Team Shadow" />
	<meta name="description" content="Shadow Language Downloads">
	<meta name="keywords" content="Shadow, language, downloads, binary, Linux">
<title>
	Linux - Downloads - Shadow
</title>
</head>
<body onload="updateShading(); prettyPrint();">
<div id="container">	
	<div id="content">
		<div class="spacer">
		
		<div class="note">				
				<div class="box">
					<ul>
						<li><a href="#prerequisites">Prerequisites</a></li>						
						<li><a href="#installation">Installation</a></li>	
					</ul>
				</div>
			</div>
		
		
			<h2>Linux Installation</h2>
		
			<p>
			The Shadow compiler is written in Java.  It is distributed as a JAR file with directories containing the standard Shadow libraries, written in Shadow with a few LLVM source files for lower level functionality.
			</p>						
			
			<p>
			Ubuntu 15.10 and higher, Fedora 23 and higher, and Arch Linux are supported.  Other distributions and releases of Linux can run Shadow, but only the listed releases have been tested.  The chief hurdle to overcome is installing LLVM 3.7 or higher binaries, which are not available from all package managers.
			</p>
						
			<h3><a name="prerequisites">Prerequisites</a></h3>
			
			<p>
			Before you can download and run Shadow, there are some prerequisites.
			</p>
			
			<ol>
				<li><a href="http://java.com/download">Java 7 or higher</a></li>
				<li>A package manager that supports LLVM 3.7 or higher</li>
			</ol>
			
			
			<h3><a name="installation">Installation</a></h3>
			
			<p>
			Click the link below for the Linux distribution of the compiler.
			</p>
			
			<div class="download">
				<div class="spacer">
					<a href="https://github.com/TeamShadow/shadow/releases/download/v0.6-beta/shadow-0.6-linux.tar.gz">Download Shadow for Linux</a>
				</div>
			</div>			

			<p>
			Once you've downloaded and extracted the files inside, running the <tt>install.sh</tt> script with root privileges will use <tt>apt-get</tt>, <tt>dnf</tt>, or <tt>pacman</tt> to install LLVM 3.7 or higher and then add links to <tt>shadowc</tt> and <tt>shadox</tt> into <tt>/usr/local/bin/</tt>.  Then, you can run <tt>shadowc</tt> from any terminal.  <strong>Note:</strong> Installing LLVM make take half an hour or more.  On Fedora, the install script will also install <tt>gcc</tt>, since it isn't included in the distribution by default.
			</p>
			
			<p>
			It's not absolutely necessary to use a package manager to install LLVM.  You can also <a href="http://llvm.org/releases/download.html">download LLVM</a> and build it yourself, if you prefer.  You must build LLVM 3.7 or higher without assertions for Shadow 0.6 to work.  Once you've built LLVM, you can use the following script instead of the one in the <tt>tar.gz</tt> file to create the appropriate Java links to run <tt>shadowc</tt> and <tt>shadox</tt>.
			</p>
			
<pre class="prettyprint">
#!/bin/bash
SCRIPT_PATH="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
COMPILER="/usr/local/bin/shadowc"
echo "java -jar $SCRIPT_PATH/shadow.jar" '$@' > $COMPILER
chmod 0755 $COMPILER
DOCUMENTATION="/usr/local/bin/shadox"
echo "java -cp $SCRIPT_PATH/shadow.jar shadow.doctool.DocumentationTool" '$@' > $DOCUMENTATION
chmod 0755 $DOCUMENTATION
</pre>
			
		</div>
	</div>
	<div id="push"></div>
</div>
<?php
	include $path . 'footer.inc';
	include $path . 'header.inc';
	include $path . 'menu.inc';	
?>